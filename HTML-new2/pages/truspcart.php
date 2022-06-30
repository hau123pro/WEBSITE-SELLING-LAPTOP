<?php 
include("connect.php");
session_start();

$id=$_POST['idc'];
$tongtien2=0;
$tongsl=0;
foreach($_SESSION['cart'] as $cartitem){
    $thanhtien2=$cartitem['soluong']*$cartitem['Gia'];
        $tongtien2+=$thanhtien2;
        $tongsl=$tongsl+$cartitem['soluong'];
}
 foreach($_SESSION['cart'] as $cartitem){
    if($cartitem['ID'] != $id){
        $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
        $_SESSION['cart']=$product1;
    }else{
        $trusoluong=$cartitem['soluong']-1;
        if($trusoluong>0&&$tongsl>1){
            $tongsl-=1;
            $tongtien2-=$cartitem['Gia'];
            $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$trusoluong,'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh'],'Tongtien'=>$tongtien2,'Tongsl'=>$tongsl);
            $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$trusoluong,'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);

        }else{
            $product[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh'],'Tongtien'=>$tongtien2,'Tongsl'=>$tongsl);
            $product1[]=array('Tensp'=>$cartitem['Tensp'],'ID'=>$cartitem['ID'],'soluong'=>$cartitem['soluong'],'Gia'=>$cartitem['Gia'],'Hinh'=>$cartitem['Hinh']);
        }
        $_SESSION['cart']=$product1;
    }
}
    echo json_encode($product);

    
?>