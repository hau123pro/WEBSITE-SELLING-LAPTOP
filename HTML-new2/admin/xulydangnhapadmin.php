<?php 
session_start();
include("connect.php");
 
if(isset($_POST['name']) && isset($_POST['password'])){
    $a=$_POST['name'];
    $b=$_POST['password'];
    if(isset($_POST['checkdn'])){
        if($_POST['checkdn']=="checkdn"){
            $cookie_name = $a;
            $cookie_value = $b;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            
        }
    }
    
    $sql="SELECT * FROM tai_khoan WHERE '$a'=username and '$b'=password";
    $sqll="SELECT hoten FROM tai_khoan WHERE '$a'=username and '$b'=password";
    $sql2="SELECT ID FROM tai_khoan WHERE '$a'=username and '$b'=password";
    $sqluser="SELECT * FROM tai_khoan WHERE '$a'=username";
    
    //ho ten nhan vien
    $result2=mysqli_query($con,$sqll);
    $mang=mysqli_fetch_array($result2);
    $rs1=mysqli_query($con,$sql2);
    $mnv=mysqli_fetch_array($rs1);
    
    if($queryuser=mysqli_query($con,$sql)){
        $rowuser=mysqli_num_rows($queryuser);
        if($rowuser>0){        
            if($query=mysqli_query($con,$sql)){
                $row=mysqli_num_rows($query);  
                $he=mysqli_fetch_array($query);  
                if($row>0){
                    if($he['status']=='normal'){
                        $_SESSION['usernamead'] = $mang['hoten'];  
                        $_SESSION['username'] = $mang['hoten'];  
                        $_SESSION['idquyen'] = $mnv['ID'];
                        $_SESSION['ID'] = $mnv['ID'];
                        $_SESSION['logout'] = "<a href='pages/logout.php'>Logout</a>";
                        
                        $_SESSION['admin'] = "<a href='admin/index.php'>ADMIN</a>";
                        $_SESSION['donhang'] = "<a href='donhang.php'>Đơn hàng</a>";
                        echo json_encode(array(
                            'status'=>1,
                            'message'=>'Đăng nhập thành công'
                        ));
                        exit;
                    }else{
                        echo json_encode(array(
                            'status'=>0,
                            'message'=>'Tài khoản đã bị khóa'
                        ));
                        exit;
                    }
                           
                }else{
                    echo json_encode(array(
                        'status'=>0,
                        'message'=>'Sai mật khẩu'
                    ));
                    exit; 
                }
            }
        }else{
            echo json_encode(array(
                'status'=>0,
                'message'=>'Tài khoản sai hoặc chưa đăng ký'
            ));
            exit;
        }
    }
}else{
    echo json_encode(array(
      'status'=>0,
      'message'=>'Tài khoản hoặc mật khẩu không đúng'
    ));
    
   exit;
}



?>

<?php 
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}

?>
