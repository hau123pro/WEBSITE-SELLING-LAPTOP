<?php 
include("connect.php");
session_start();


$id=$_POST['idc'];
$sql="SELECT * from sanpham WHERE ID='$id'";
$qur=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qur);
$tongtien2=0;
$tongsl2=0;
foreach($_SESSION['cart'] as $cartitem){
    $thanhtien2=$cartitem['soluong']*$cartitem['Gia'];
        $tongtien2+=$thanhtien2;
        $tongsl2=$tongsl2+$cartitem['soluong'];
}
foreach($_SESSION['cart'] as $cartitem){
    if($cartitem['ID'] != $id){
        $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
        $_SESSION['cart']=$product1;
    }else{
        $tangsoluong=$cartitem['soluong']+1;
        if($tangsoluong<=$row['soluong']){
            $tongsl2=$tongsl2+1;
            $tongtien2+=$cartitem['Gia'];
            $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$tangsoluong,'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh'],'Tongtien'=>$tongtien2,'Tongsl'=>$tongsl2);
            $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$tangsoluong,'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);

        }else{
            $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
            $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh'],'Tongtien'=>$tongtien2,'Tongsl'=>$tongsl2);
        }
        $_SESSION['cart']=$product1;
    }
}
    echo json_encode($product);

?>