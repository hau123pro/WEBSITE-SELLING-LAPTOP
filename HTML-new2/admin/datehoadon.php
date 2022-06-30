<?php
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}

if(isset($_POST['dS'])&&$_POST['dS']!=''){
    $DS=$_POST['dS'];
}
else{
    $DS='0-0-0';
}
if(isset($_POST['dE'])&&$_POST['dE']!='')
{   
    $DE=$_POST['dE'];
}
else{
    $DE='99-99-9999';
}
$sqlHd='SELECT * FROM hoa_don';
$que=mysqli_query($con,$sqlHd);
$check=0;
function checkngay($a,$b,$c){
    $temp1=explode("-",$a);
    $temp2=explode("-",$b);
    $temp3=explode("-",$c);
    $yearS =intval($temp1[0]);
   $monthS =intval($temp1[1]);
   $dayS = intval($temp1[2]);
   $yearE = intval($temp2[0]);
   $monthE = intval($temp2[1]);
   $dayE = intval($temp2[2]);
   $day =intval($temp3[2]);
    $month =intval($temp3[1]);
    $year =intval('20'.$temp3[0]);
    if($yearS==$yearE && $year==$yearS){
        if($month>$monthS && $month<$monthE){
            return true;
        }
        else{
            if($month==$monthS){
                if($monthS==$monthE){
                    if($day>=$dayS && $day<=$dayE){
                        return true;
                    }
                }
                else{
                    if($day>=$dayS){
                        return true;
                    }
                }
            }
            else if($month==$monthE){
                if($monthS==$monthE){
                    if($day>=$dayS && $day<=$dayE){
                        return true;
                    }
                }
                else{
                    if($day<=$dayE){
                        return true;
                    }
                }
            }
        }
    }
    else{
        if($year>$yearS && $year<$yearE){
            return true;
        }
        else{
            if($year==$yearS || $year==$yearE){
                if($year==$yearS){
                    if($month>=$monthS){
                        if($month>$monthS){
                            return true;
                        }
                        else{
                            if($day>=$dayS){
                                return true;
                            }
                        }
                    }
                }
                else{
                    if($month<=$monthE){
                        if($month<$monthE){
                            return true;
                        }
                        else{
                            if($day<=$dayE){
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
}
while($rows=mysqli_fetch_array($que)){
    $time=explode("/",$rows['ngaymua']);
    if(checkngay($DS,$DE,$time[0]))
    {
        ?>
        <tr>
        <td><?php echo $rows['id_hd']; ?></td>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $time[0]; ?></td>
        <td><button id="<?php echo $rows['id_hd']; ?>"><i class="fas fa-info-circle"></i></button></td>
        <?php if($rows['statuss']=='Process') { ?>
        <td style='color:green' id="<?php echo $rows['id_hd'].'statuss'; ?>" data-value="<?php echo $rows['statuss']; ?>"><?php echo $rows['statuss']; ?></td>
        <?php }else { ?>
            <td style='color:red' id="<?php echo $rows['id_hd'].'statuss'; ?>" data-value="<?php echo $rows['statuss']; ?>"><?php echo $rows['statuss']; ?></td>
        <?php } ?>   
        <td><?php echo $rows['tongtien']; ?></td>   
        <td style='color:blue;cursor:pointer' id="<?php echo $rows['id_hd'].'xl'; ?>">Xử lý</td>
        <td style='color:blue;cursor:pointer'id="<?php echo $rows['id_hd'].'hxl'; ?>">Hủy xử lý</td>
        <td><a href="xoabill.php?idxoa=<?php echo $rows['id_hd']; ?>" onclick="return confirm('Are you sure you want to delete this product?');"><i class="fas fa-trash-alt"></i>Xóa</a></td>
            <script>
                document.getElementById('<?php echo $rows['id_hd']; ?>').addEventListener("click",function(){ hienct('<?php echo $rows['id_hd']; ?>') });
                document.getElementById('<?php echo $rows['id_hd'].'xl'; ?>').addEventListener("click",function(){ xuly('<?php echo $rows['id_hd']; ?>') });
                document.getElementById('<?php echo $rows['id_hd'].'hxl'; ?>').addEventListener("click",function(){ huyxuly('<?php echo $rows['id_hd']; ?>') });
                document.getElementById('dateS').onchange= function (){
                var ds=document.getElementById('dateS').value;
                var de=document.getElementById('dateE').value;
                $.ajax({
                            type:"POST",
                            url:'datehoadon.php',
                            data:  { 
                                dS : ds,
                                dE : de
                            },
                            success: function(data){
                                $('.thongtin').html(data);
                            }
                        });
            }
            document.getElementById('dateE').onchange= function (){
                var ds=document.getElementById('dateS').value;
                var de=document.getElementById('dateE').value;
                $.ajax({
                            type:"POST",
                            url:'datehoadon.php',
                            data:  { 
                                dS : ds,
                                dE : de
                            },
                            success: function(data){
                                $('.thongtin').html(data);
                            }
                        });
            }
                function hienct(a){
                $.ajax({
                    type:"POST",
                    url:'chitietbill.php',
                    data:  { idc : a },
                    success: function(data){
                        document.getElementById('detailtail').innerHTML=data;
                        document.getElementById('detailmodal').style.display='block';
                    }
                });
                }
                function closedetail() {
                document.getElementById('detailmodal').style.display='none';
            }
            function xuly(a){
                var status=document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').getAttribute('data-value');
                    if(status=='Not Process'){
                        $.ajax({
                            type:"POST",
                            url:'xulybill.php',
                            data:  { idc : a },
                            success: function(){
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').innerHTML="Process";
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').style.color='green';
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').setAttribute('data-value','Process');
                            }
                        });
                    }
            }
            function huyxuly(a){
                var status=document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').getAttribute('data-value');
                    if(status=='Process'){
                        $.ajax({
                            type:"POST",
                            url:'huyxulibill.php',
                            data:  { idc : a },
                            success: function(){
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').innerHTML="Not Process";
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').style.color='red';
                                document.getElementById('<?php echo $rows['id_hd'].'statuss'; ?>').setAttribute('data-value','Not Process');
                            }
                        });
                    }
            }
            </script>       
        </tr>
        <?php
        }
    }
?>