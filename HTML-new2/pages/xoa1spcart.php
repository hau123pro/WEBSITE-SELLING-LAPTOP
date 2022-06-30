<?php 
include("connect.php");
session_start();
$id=$_POST['idc'];
foreach($_SESSION['cart'] as $cartitem){
    if($cartitem['ID'] != $id){
        $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
    }
    $_SESSION['cart']=$product1;
}
?>