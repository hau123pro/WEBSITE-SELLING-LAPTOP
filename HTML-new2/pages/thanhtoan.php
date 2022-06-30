<?php 
session_start();
include('connect.php');
date_default_timezone_set("Asia/Ho_chi_Minh");
if(empty($_SESSION['username']) && isset($_SESSION['cart'])){
    echo json_encode(array(
        'status'=>0,
        'message'=>'Bạn phải đăng nhập trước khi thanh toán'
    ));
    exit;
}else if(isset($_SESSION['cart'])){
    $tongtien=0;
    foreach($_SESSION['cart'] as $cartitem){
        $thanhtien=$cartitem['soluong']*$cartitem['Gia'];
        $tongtien+=$thanhtien;  
    }
    $sdem="SELECT * FROM hoa_don";
    $sql="SELECT * FROM sanpham";
    $qur=mysqli_query($con,$sql);
    $sdemq=mysqli_query($con,$sdem);
    $sqlne="SELECT id_hd FROM hoa_don ORDER BY id_hd DESC Limit 1";
    $queryta=mysqli_query($con,$sqlne);
    $rowne=mysqli_fetch_array($queryta);
    $bien=$rowne['id_hd'];
    $bien+=1;
        // data_default_timezone_set('Asia/Ho_Chi_Minh');
    $mydate=date("y-m-d")."/".date("H:i:s");
    if(isset($_SESSION['idpr'])){
        $kh=$_SESSION['idpr'];
        $sqlkh = "INSERT INTO hoa_don (id_hd,id,ngaymua,statuss,tongtien) VALUES ('$bien','$kh','$mydate','Not Process','$tongtien')";
        $thkh=mysqli_query($con,$sqlkh);
        foreach($_SESSION['cart'] as $cartitem){
            $sl=$cartitem['soluong'];
            $msp=$cartitem['ID'];
            $thanhtien1=$cartitem['soluong']*$cartitem['Gia'];
            $tensp=$cartitem['Tensp'];
            $sqlctkh = "INSERT INTO ct_hoadon (id_cthd,masanpham,tensp,soluong,tongtien) VALUES ('$bien','$msp','$tensp','$sl','$thanhtien1')";    
            while($row=mysqli_fetch_array($qur)){
                if($row['ID']==$msp)
                {
                    $sluong=$row['soluong']-$sl;
                    $sql="UPDATE sanpham SET soluong=$sluong WHERE id='$msp'";
                    $up=mysqli_query($con,$sql);
                    break;
                }
            }
            $thctkh=mysqli_query($con,$sqlctkh);
        }
    }else if(isset($_SESSION['idquyen'])){
        
        $nv=$_SESSION['idquyen'];
        $sqlkh = "INSERT INTO hoa_don (id_hd,id,ngaymua,statuss,tongtien) VALUES ('$bien','$nv','$mydate','Not Process','$tongtien')";
        $thkh=mysqli_query($con,$sqlkh);
        foreach($_SESSION['cart'] as $cartitem){
            $sl=$cartitem['soluong'];
            $msp=$cartitem['ID'];
            $tensp=$cartitem['Tensp'];
            $thanhtien1=$cartitem['soluong']*$cartitem['Gia'];
            $sqlctkh = "INSERT INTO ct_hoadon (id_cthd,masanpham,tensp,soluong,tongtien) VALUES ('$bien','$msp','$tensp','$sl','$thanhtien1')"; 
            while($row=mysqli_fetch_array($qur)){
                if($row['ID']==$msp)
                {
                    $sluong=$row['soluong']-$sl;
                    $sql="UPDATE sanpham SET soluong=$sluong WHERE id='$msp'";
                    $up=mysqli_query($con,$sql);
                    break;
                }
            } 
            $thctkh=mysqli_query($con,$sqlctkh);
        }
    }
     
    echo json_encode(array(
        'status'=>1,
        'message'=>'Thanh toán thành công',
    ));
    unset($_SESSION['cart']);
    exit;
}


?>
