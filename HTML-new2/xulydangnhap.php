<?php 

session_start(); 
include("pages/connect.php");
if(isset($_POST['username']) && isset($_POST['password'])){
  $a=$_POST['username'];
  $b=$_POST['password'];
  $sql="SELECT * FROM tai_khoan WHERE '$a'=username and password='$b'";
  $sqll="SELECT hoten FROM tai_khoan WHERE '$a'=username and password='$b'";
  $sqlkh="SELECT * fROM tai_khoan WHERE '$a'=username and '$b'=password and power='khach hang'";
  $sqlusername="SELECT * FROM tai_khoan WHERE '$a'=username";

  $resultkh=mysqli_query($con,$sqlkh);
  $result2=mysqli_query($con,$sqll);
  $mang=mysqli_fetch_array($result2);
  
  if($rs=mysqli_query($con,$sqlusername)){
    $rowusername=mysqli_num_rows($rs);
    if($rowusername>0){
      if($query=mysqli_query($con,$sql)){
        $sqltt=mysqli_fetch_array($query);
        $row=mysqli_num_rows($query);
        if($row>0){
          if($sqltt['status']=='normal'){
            if($resultkh){
              $rowkh=mysqli_num_rows($resultkh);
              
              if($rowkh>0){
                $_SESSION['username'] = $mang['hoten'];
                $_SESSION['logout'] = "<a href='pages/logout.php'>Logout</a>";
                $_SESSION['profile'] = "<a href='profile.php'>Profile</a>"; 
                $_SESSION['donhang'] = "<a href='donhang.php'>Đơn hàng</a>";
                $_SESSION['idpr'] = $sqltt['ID'];
                
              }else{
                
                $_SESSION['username'] = $mang['hoten'];
                $_SESSION['usernamead'] = $mang['hoten'];
                $_SESSION['logout'] = "<a href='pages/logout.php'>Logout</a>";
                
                $_SESSION['admin'] = "<a href='admin/index.php'>ADMIN</a>";
                $_SESSION['donhang'] = "<a href='donhang.php'>Đơn hàng</a>";
                $_SESSION['idquyen'] = $sqltt['ID'];
                
              }
              echo json_encode(array(
                'status'=>1,
                'message'=>'Đăng nhập thành công'
              ));
              exit;
              
            }
          }else{
            echo json_encode(array(
              'status'=>0,
              'message'=>'Tài khoản của bạn đã bị khóa'
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
      'message'=>'Tài khoản không đúng'
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
    
    header('Location: index.php');
}


?>