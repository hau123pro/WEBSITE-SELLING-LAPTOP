<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_GET['id'])){
    $a=$_GET['id'];
    $ss="SELECT * FROM tai_khoan WHERE ID='$a'";
    $que=mysqli_query($con,$ss);
    $mang=mysqli_fetch_array($que);
    if($mang['status']=='normal'){
        $sql="UPDATE tai_khoan SET status='lock' WHERE ID='$a'";
        $query=mysqli_query($con,$sql);
    }else{
        $sql1="UPDATE tai_khoan SET status='normal' WHERE ID='$a'";
        $query1=mysqli_query($con,$sql1);
    }
    header("Location: quanlyuser.php");

}



?>