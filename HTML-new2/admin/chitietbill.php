<?php
session_start();
?>
<?php
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_POST['idc']))
{
    $id=$_POST['idc'];
    $sql="SELECT * FROM hoa_don WHERE id_hd='$id'";
     $sql1="SELECT ct.tensp,s.Loai,ct.soluong,s.Gia,ct.tongtien  FROM ct_hoadon AS ct, sanpham AS s WHERE ct.masanpham=s.ID and ct.id_cthd='$id'" ;
    // $sql1 = "SELECT * FROM sanpham";
    $quer=mysqli_query($con,$sql);
    $quer1=mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($quer);
    $time=explode("/",$row['ngaymua']);
    $tongsl=0;  
?>
            <div class="closedt" onclick="closedetail()">&times;</div>
            <div class="billdetailtxt">Bill Detail</div>
            <table class="tabledetail"><tr><td>Products</td><td>Brand</td><td>Amount</td><td>Price</td><td style="border-right: solid 1px">Sum</td></tr>
            <?php 
            while($rows=mysqli_fetch_array($quer1))
            {
                $tongsl+=$rows['soluong'];
                $idtk=$row['id'];
                $sqlten="SELECT hoten FROM tai_khoan WHERE ID='$idtk' LIMIT 1";
                $qury=mysqli_query($con,$sqlten);
                $rowten=mysqli_fetch_array($qury);
            ?>
            <tr>
                <td><?php echo $rows['tensp']; ?></td>
                <td><?php echo $rows['Loai']; ?></td>
                <td><?php echo $rows['soluong']; ?></td>
                <td><?php echo number_format($rows['Gia'],0,",","."). "VNĐ"; ?></td>
                <td style="border-right: solid 1px"><?php echo number_format($rows['tongtien'],0,",","."). "VNĐ"; ?></td>
            </tr>
            <?php 
            }
            ?>
            <tr><td>Total</td><td></td><td><?php echo $tongsl; ?></td><td></td><td style="border-right: solid 1px"><?php echo number_format($row['tongtien'],0,",","."). "VNĐ"; ?></td></tr>

            <tr><td >Customer: <?php echo $rowten['hoten']; ?></td><td style="border-right: solid 1px;">Time: <?php echo $time[1]; ?></td></tr>
            <tr><td >Date: <?php echo $time[0]; ?></td><td style="border-right: solid 1px;">Status: <?php echo $row['statuss']; ?></td></tr></table>
<?php 
}
?>