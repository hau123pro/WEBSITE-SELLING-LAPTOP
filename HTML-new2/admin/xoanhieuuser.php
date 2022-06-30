<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_GET['submit'])){
    $i=1;
    $sql="SELECT * FROM tai_khoan";
    $query=mysqli_query($con,$sql);
    $row=mysqli_num_rows($query);
    
    for($i=1;$i<=$row+1;$i++){
        if(isset($_GET["userKH$i"])){
            $a=$_GET["userKH$i"];
            echo $a;
            $xoa="UPDATE tai_khoan set status='xoa' WHERE ID='$a'";
            $queryxoa=mysqli_query($con,$xoa);
        }
        
        if(isset($_GET["userNV$i"])){
            $b=$_GET["userNV$i"];
            echo $b;
            $xoa="UPDATE tai_khoan set status='xoa' WHERE ID='$b'";
            $queryxoa=mysqli_query($con,$xoa);
        }

        if(isset($_GET["userAD$i"])){
            $c=$_GET["userAD$i"];
            echo $c;
            $xoa="UPDATE tai_khoan set status='xoa' WHERE ID='$c'";
            $queryxoa=mysqli_query($con,$xoa);
        }
    }
    header("Location: quanlyuser.php");
}

?>