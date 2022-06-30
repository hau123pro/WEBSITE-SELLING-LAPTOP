<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['hoten']) && isset($_POST['date']) && isset($_POST['sodienthoai']) && isset($_POST['email']) && isset($_POST['gioitinh']) && isset($_POST['diachi']) && isset($_POST['chucvu'])){
    
    $a=$_POST['username'];
    $b=$_POST['password'];
    $c=$_POST['hoten'];
    $d=$_POST['date'];
    $e=$_POST['sodienthoai'];
    $f=$_POST['email'];
    $g=$_POST['gioitinh'];
    $dc=$_POST['diachi'];
    $sql="SELECT * FROM tai_khoan WHERE '$a'=username";
    $sql1="SELECT * FROM tai_khoan";
    $query1=mysqli_query($con,$sql1);
    $row1=mysqli_num_rows($query1);
    
    $po=$_POST['chucvu'];
    if($po=='nhan vien'){
        $id="NV".$row1+1;
    }else{
        $id="AD".$row1+1;
    }
    $query=mysqli_query($con,$sql);
    if($query){
        $row=mysqli_num_rows($query);
        if($row>0){
            echo json_encode(array(
                'status'=>0,
                'message'=>'Tài khoản đã tồn tại'
            ));
            exit;
        }else{
            echo json_encode(array(
                'status'=>1,
                'message'=>'Đăng ký thành công'
            ));
            // $SQL="INSERT INTO khach_hang (id_kh,username,password,hoten,ngaysinh,sodienthoai,gioitinh,email,diachi,status,power) VALUES ('$h','$a','$b','$c','$d','$e','$g','$f','$dc','normal','guest')";
            
            $SQL="INSERT INTO `tai_khoan`(`ID`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES ('$id','$a','$b','$c','$d','$e','$g','$f','$dc','normal','$po')";
            
            $QUERY=mysqli_query($con,$SQL);
        }
        mysqli_free_result($query);
    }

  
}else{
    echo json_encode(array(
        'status'=>0,
        'message'=>'Thông tin sai'
    ));
}

?>

