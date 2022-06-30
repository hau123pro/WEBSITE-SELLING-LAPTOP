
<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
  header('Location: login.php');
}
if(isset($_POST['submit'])){
    if($_GET['id']){
        $a=$_POST['hoten'];
        $b=$_POST['email'];
        $c=$_POST['password'];
        $d=$_POST['gioitinh'];
        $e=$_POST['ngaysinh'];
        $f=$_POST['sodienthoai'];
        $g=$_POST['diachi'];
        $id=$_GET['id'];
        $sql="UPDATE tai_khoan set password='$c',hoten='$a',ngaysinh='$e',sodienthoai='$f',gioitinh='$d',email='$b',diachi='$g' WHERE ID='$id'";
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
        
          $_SESSION['usernamed'] = $a;
          $_SESSION['username'] = $a;
    }
    header("Location: profile.php");
    
    
}

?>