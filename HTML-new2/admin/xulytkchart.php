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
$dataPoints = array(
    array("label"=> "dell", "y"=> 0),
    array("label"=> "asus", "y"=> 0),
    array("label"=> "acer", "y"=> 0),
    array("label"=> "apple", "y"=> 0),
    array("label"=> "All", "y"=> 0)
);
$_SESSION['tkchart']=$dataPoints;
$sqlct='SELECT * FROM ct_hoadon';
$sqlsp='SELECT * FROM sanpham';
while($rowhd=mysqli_fetch_array($que)){
    if($rowhd['statuss']=='Process'){
    $dayht=explode("/",$rowhd['ngaymua']);
    if(checkngay($DS,$DE,$dayht[0]))
    {
        $qur=mysqli_query($con,$sqlct);
        while($rowct=mysqli_fetch_array($qur)){
            if($rowct['id_cthd']==$rowhd['id_hd']){
                $quy=mysqli_query($con,$sqlsp);
                while($rowsp=mysqli_fetch_array($quy)){
                    if($rowct['masanpham']==$rowsp['ID']){
                        $product=array('company'=>$rowsp['Loai'],'tongtien'=>$rowct['tongtien']);
                        break;
                    }
                }
                foreach($_SESSION['tkchart'] as $key=>$cartitem){
                    if($cartitem['label']==$product['company']){
                        $_SESSION['tkchart'][$key]['y']+=$product['tongtien'];
                    }
                    if($cartitem['label']=='All'){
                        $_SESSION['tkchart'][$key]['y']+=$product['tongtien'];
                    }
                }
                }
            }
        }
    }
    }
    $i=0;
    foreach($_SESSION['tkchart'] as $cartitem){
        if($cartitem['y']==0)
        $i+=1;

    }
    if($i<4){
?>
<script>
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title: {
        text: "ToTal Price"
    },
    axisY: {
        title: "Revenue"
    },
    data: [{
        type: "column",
        dataPoints: <?php echo json_encode($_SESSION['tkchart'], JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
</script>
<?php 
    }
    else {
        ?>
<td valign="top" colspan="6" class="dataTables_empty">KHÔNG CÓ SẢN PHẨM NÀO ĐƯỢC BÁN TRONG THỜI GIAN NÀY</td>
<?php
    }
unset($_SESSION['tkchart']);
 ?>


