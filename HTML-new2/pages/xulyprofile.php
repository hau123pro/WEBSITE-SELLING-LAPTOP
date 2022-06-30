<?php 
session_start();
include("connect.php");
if(isset($_POST['submit'])){
    if(isset($_GET['id'])){
        $a=$_POST['hoten'];
        $b=$_POST['ngaysinh'];
        $c=$_POST['sodienthoai'];
        $d=$_POST['gioitinh'];
        $e=$_POST['email'];
        $f=$_POST['diachi'];
        $p=$_POST['password'];
        $id=$_GET['id'];
        
        $sql="UPDATE tai_khoan set password='$p',hoten='$a',ngaysinh='$b',sodienthoai='$c',gioitinh='$d',email='$e',diachi='$f' WHERE ID='$id'";
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
        
          $_SESSION['username'] = $a;
    }
    header("Location: ../profile.php");
}

?>

<?php 
if(!isset($_SESSION['usernamead'])){
    
    header('Location: index.php');
}


?>