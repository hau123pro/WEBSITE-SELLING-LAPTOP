<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_GET['id'])){
    $a=$_GET['id'];
    // $sql="DELETE FROM tai_khoan WHERE '$a'=ID";
    // $xoa=mysqli_query($con,$sql);
    $sql="UPDATE tai_khoan set status='xoa' WHERE '$a'=ID";
    $xoa=mysqli_query($con,$sql);
    header('Location: quanlyuser.php');
}


?>