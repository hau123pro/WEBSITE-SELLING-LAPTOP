<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_GET['submit'])){
    $i=1;
    $sql="SELECT * FROM sanpham";
    $query=mysqli_query($con,$sql);
    $row=mysqli_num_rows($query);
    
    for($i=1;$i<=$row+1;$i++){
        if(isset($_GET["sanpham$i"])){
            $a=$_GET["sanpham$i"];
            // $xoa="DELETE FROM sanpham WHERE ID='$a'";
            // $queryxoa=mysqli_query($con,$xoa);
            $xoa="UPDATE sanpham set soluong='-1' WHERE ID='$a'";
            $queryxoa=mysqli_query($con,$xoa);
            
            
        }
    }

    
    header("Location: quanlysp.php");
    
}

?>