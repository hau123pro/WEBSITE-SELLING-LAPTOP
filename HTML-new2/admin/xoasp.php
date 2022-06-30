<?php 
session_start(); 
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
?>
<?php

$a=$_GET['idxoa'];
// $sql="DELETE FROM sanpham WHERE '$a'=ID";
// $xoa=mysqli_query($con,$sql);
$sql="UPDATE sanpham set soluong='-1' WHERE '$a'=ID";
$xoa=mysqli_query($con,$sql);
header('Location: quanlysp.php');

?>