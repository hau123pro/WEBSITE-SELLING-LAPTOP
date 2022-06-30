<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
$a=$_GET['idxoa'];
$sql1="SELECT * from ct_hoadon WHERE id_cthd='$a'";
$que=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($que)){
    $id=$row['masanpham'];
    $sql2="SELECT * from sanpham WHERE ID='$id'";
    $qur=mysqli_query($con,$sql2);
    $rows=mysqli_fetch_array($qur);
    $tra=$rows['soluong']+$row['soluong'];
    $sql3="UPDATE sanpham SET soluong=$tra WHERE ID='$id'";
    $qur=mysqli_query($con,$sql3);
}
$sql5="DELETE FROM ct_hoadon WHERE '$a'=id_cthd";
$sql4="DELETE FROM hoa_don WHERE '$a'=id_hd";
$xoa=mysqli_query($con,$sql5);
$xoa=mysqli_query($con,$sql4);
header('Location: quanlydonhang.php');

?>