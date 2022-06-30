<?php
session_start();
include("connect.php");
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
                            $product=array('ID'=>$rowct['masanpham'],'tensp'=>$rowsp['Tensp'],'company'=>$rowsp['Loai'],'tongsl'=>$rowct['soluong'],'tongtien'=>$rowct['tongtien']);
                            $product2[]=array('ID'=>$rowct['masanpham'],'tensp'=>$rowsp['Tensp'],'company'=>$rowsp['Loai'],'tongsl'=>$rowct['soluong'],'tongtien'=>$rowct['tongtien']);
                            break;
                        }
                    }
                    if(isset($_SESSION['thongke'])){
                        foreach($_SESSION['thongke'] as $key=>$cartitem){
                            if($cartitem['ID']==$rowct['masanpham']){
                                $_SESSION['thongke'][$key]['tongsl']+=$rowct['soluong'];
                                $_SESSION['thongke'][$key]['tongtien']+=$rowct['tongtien'];
                                $check=1;
                                break;
                            }
                        }
                        if($check==0){
                        array_push( $_SESSION['thongke'],$product);
                        }
                    }
                    else {
                        $_SESSION['thongke']=$product2;
                    }
                }
            }
        }
    }
}
if(isset($_SESSION['thongke'])){
    if(isset($_POST['type'])&&isset($_POST['sort'])){
        $type=$_POST['type'];
        $sort=$_POST['sort'];
        $p=array('Type'=>$type,'Of'=>$sort);
        $_SESSION['sorting']=$p;
    }
    if(isset($_SESSION['sorting'])){
        $p=$_SESSION['sorting'];
        if($p['Type']=='ID'){
            if($p['Of']=='asc'){
                function cmp1($a, $b)
                    {
                        return strcmp($a["ID"], $b["ID"]);
                    } 
                usort($_SESSION["thongke"], "cmp1");
            }
            else{
                function cmp1($a, $b)
                    {
                        return strcmp($b["ID"], $a["ID"]);
                    } 
                usort($_SESSION["thongke"], "cmp1");
            }
        }
        if($p['Type']=='ten'){
            if($p['Of']=='asc'){
                function cmp2($a, $b)
                    {
                        return strcmp($a["tensp"], $b["tensp"]);
                    } 
                usort($_SESSION["thongke"], "cmp2");
            }
            else {
                function cmp2($a, $b)
                    {
                        return strcmp($b["tensp"], $a["tensp"]);
                    } 
                usort($_SESSION["thongke"], "cmp2");
            }
        }
        if($p['Type']=='loai'){
            if($p['Of']=='asc'){
                function cmp3($a, $b)
                    {
                        return strcmp($a["company"], $b["company"]);
                    }
usort($_SESSION["thongke"], "cmp3");
            }
            else {
                function cmp3($a, $b)
                    {
                        return strcmp($b["company"], $a["company"]);
                    } 
                usort($_SESSION["thongke"], "cmp3");
            }
        }
        if($p['Type']=='sl'){
            if($p['Of']=='asc'){
                function cmp4($a, $b)
                    {
                        return $a["tongsl"]-$b["tongsl"];
                    } 
                usort($_SESSION["thongke"], "cmp4");
            }
            else {
                function cmp4($a, $b)
                    {
                        return $b["tongsl"]-$a["tongsl"];
                    } 
                usort($_SESSION["thongke"], "cmp4");
            }
        }
        if($p['Type']=='tong'){
            if($p['Of']=='asc'){
                function cmp5($a, $b)
                    {
                        return $a["tongtien"]-$b["tongtien"];
                    } 
                usort($_SESSION["thongke"], "cmp5");
            }
            else {
                function cmp5($a, $b)
                    {
                        return $b["tongtien"]-$a["tongtien"];
                    } 
                usort($_SESSION["thongke"], "cmp5");
            }
        }
    }
foreach($_SESSION['thongke'] as $cartitem){
?>
<tr>
<td><?php echo $cartitem['ID'] ?></td>
<td><?php echo $cartitem['tensp'] ?></td>
<td><?php echo $cartitem['company'] ?></td>
<td><?php echo $cartitem['tongsl'] ?></td>
<td><?php echo $cartitem['tongtien'] ?></td>
</tr>
<?php }
unset($_SESSION['thongke']);
}
    else {
?>
<td valign="top" colspan="6" class="dataTables_empty">No matching records found</td>
<?php } ?>