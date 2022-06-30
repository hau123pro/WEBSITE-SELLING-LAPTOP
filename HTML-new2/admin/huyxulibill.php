<?php
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
$id=$_POST['idc'];
$sql="UPDATE hoa_don SET statuss='Not Process' WHERE id_hd='$id'";
$quer=mysqli_query($con,$sql);
?>