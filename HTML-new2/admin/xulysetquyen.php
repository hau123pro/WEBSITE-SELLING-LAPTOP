<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');
}
if(isset($_POST['submit']) && $_GET['id']){
    $id=$_GET['id'];
    $mmm="SELECT * FROM quyenhan WHERE ma_chucvu='$id'";
    $nn=mysqli_query($con,$mmm);
    //set quyền 1
    if(isset($_POST['quyen1'])){
        $a1=$_POST['quyen1'];
        $up="UPDATE quyenhan SET Quản_lý_sản_phẩm='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen1'])){
        
        $up="UPDATE quyenhan SET Quản_lý_sản_phẩm='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 2
    if(isset($_POST['quyen2'])){
        $a1=$_POST['quyen2'];
        $up="UPDATE quyenhan SET Quản_lý_user='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen2'])){
        
        $up="UPDATE quyenhan SET Quản_lý_user='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 3
    if(isset($_POST['quyen3'])){
        $a1=$_POST['quyen3'];
        $up="UPDATE quyenhan SET Thêm_sản_phẩm='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen3'])){
        
        $up="UPDATE quyenhan SET Thêm_sản_phẩm='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 4
    if(isset($_POST['quyen4'])){
        $a1=$_POST['quyen4'];
        $up="UPDATE quyenhan SET Quản_lý_đơn_hàng='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen4'])){
        
        $up="UPDATE quyenhan SET Quản_lý_đơn_hàng='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 5
    if(isset($_POST['quyen5'])){
        $a1=$_POST['quyen5'];
        $up="UPDATE quyenhan SET Thống_kê='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen5'])){
        
        $up="UPDATE quyenhan SET Thống_kê='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 6
    if(isset($_POST['quyen6'])){
        $a1=$_POST['quyen6'];
        $up="UPDATE quyenhan SET Thêm_users='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen6'])){
        
        $up="UPDATE quyenhan SET Thêm_users='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }
    //set quyền 7
    if(isset($_POST['quyen7'])){
        $a1=$_POST['quyen7'];
        $up="UPDATE quyenhan SET Set_quyền='1' WHERE ma_chucvu='$id'";   
        $queryup=mysqli_query($con,$up);
    }

    if(!isset($_POST['quyen7'])){
        
        $up="UPDATE quyenhan SET Set_quyền='10' WHERE ma_chucvu='$id'";
        $queryup=mysqli_query($con,$up);
    }

    header("Location: setquyen.php");
}


?>