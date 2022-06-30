<?php 
session_start();
include("pages/connect.php");
if(isset($_POST['usernamedk']) && isset($_POST['passworddk']) && isset($_POST['hotendk']) && isset($_POST['date']) && isset($_POST['sodienthoaidk']) && isset($_POST['emaildk']) && isset($_POST['gioitinhdk']) && isset($_POST['diachidk']) && isset($_POST['cfpassworddk'])){
    
    $a=$_POST['usernamedk'];
    $b=$_POST['passworddk'];
    $c=$_POST['hotendk'];
    $d=$_POST['date'];
    $e=$_POST['sodienthoaidk'];
    $f=$_POST['emaildk'];
    $g=$_POST['gioitinhdk'];
    $dc=$_POST['diachidk'];
    $duthua=$_POST['cfpassworddk'];
    $sql="SELECT * FROM tai_khoan WHERE '$a'=username";
    $sql1="SELECT * FROM tai_khoan";
    $query1=mysqli_query($con,$sql1);
    $row1=mysqli_num_rows($query1);
    $h="KH".$row1+1;
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
            
            $SQL="INSERT INTO `tai_khoan`(`ID`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES ('$h','$a','$b','$c','$d','$e','$g','$f','$dc','normal','khach hang')";
            
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

