<?php 
            if(isset($_GET['quanly'])){
                $tam=$_GET['quanly'];
            }else{
                $tam='';
            }
			
			if(isset($_GET['brand'])){
				$ta=$_GET['brand'];
			}else{
				$ta='';
			}

            if($tam=="danhmucsanpham"){
                include("main/danhmucsanpham.php");
            }else{
                include("main/shop.php");
            }
?>
   