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
$sqlct='SELECT * FROM ct_hoadon';
$sqlsp='SELECT * FROM sanpham';
while($rowhd=mysqli_fetch_array($que)){
    if($rowhd['statuss']=='Process'){
    $dayht=explode("/",$rowhd['ngaymua']);
    if(checkngay($DS,$DE,$dayht[0]))
    {
        
        $qur=mysqli_query($con,$sqlct);
        while($rowct=mysqli_fetch_array($qur)){
            $check=0;
            if($rowct['id_cthd']==$rowhd['id_hd']){
                $quy=mysqli_query($con,$sqlsp);
                while($rowsp=mysqli_fetch_array($quy)){
                    if($rowct['masanpham']==$rowsp['ID']){
                        $product=array('label'=>$rowsp['ID'],'y'=>$rowct['soluong']);
                        $product2[]=array('label'=>$rowsp['ID'],'y'=>$rowct['soluong']);
                        break;
                    }
                }
                if(isset($_SESSION['tkchart'])){
                    foreach($_SESSION['tkchart'] as $key=>$cartitem){
                        if($cartitem['label']==$product['label']){
                            
                            $_SESSION['tkchart'][$key]['y']+=$product['y'];
                            $check=1;
                            break;
                        }
                    }
                    if($check==0){
                    array_push( $_SESSION['tkchart'],$product);
                    }
                }
                else {
                    $_SESSION['tkchart']=$product2;
                }
                }
            }
        }
    }
    }
if(isset($_SESSION['tkchart'])){
$pd=array('label'=>"",'y'=>0);
function cmp4($a, $b)
{
    return $b["y"]-$a["y"];
} 
usort($_SESSION["tkchart"], "cmp4");
$i=0;
foreach($_SESSION['tkchart'] as $cartitem){
    $sapxep=array('label'=>$cartitem['label'],'y'=>$cartitem['y']);
    $sapxep1[]=array('label'=>$cartitem['label'],'y'=>$cartitem['y']);
    if(isset($_SESSION['tkchartsort'])){
    array_push($_SESSION['tkchartsort'],$sapxep);
    }
    else {
        $_SESSION['tkchartsort']=$sapxep1;
    }
    $i+=1;
    if($i==5)
    break;
}
?>
<script>
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title: {
        text: "ToTal Price"
    },
    axisY: {
        title: "Số Lượng"
    },
    data: [{
        type: "column",
        dataPoints: <?php echo json_encode($_SESSION['tkchartsort'], JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
</script>
<?php 
}
?>
<td valign="top" colspan="6" class="dataTables_empty">KHÔNG CÓ SẢN PHẨM NÀO TRONG THỜI GIAN NÀY</td>
<?php

unset($_SESSION['tkchart']);
unset($_SESSION['tkchartsort']);
 ?>


