<?php 
session_start();
include("pages/connect.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='js/javascript.js' type='text/javascript'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body style="font-size: 14px;">
<style>
.tb td{
		  padding: 0.75em;
		font-size: 14px;
	  }
	  .tb{
		padding: 0.75em;
		margin: auto;
		border: 1px solid  #c1c4c4d4;
		color: #212529;
	
	  }
</style>
<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.php" class="navbar-brand brand"> ISTORE </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            <li class="propClone"><a href="index.php">Home</a></li>
				<li class="propClone"><a href="shop.php">Shop</a></li>
				<li class="dropdownlogin"><div class="dropdowni"><a href="#">Danh mục</a>
                            <div class="dropdownct">
                                <a href="shop.php?quanly=danhmucsanpham&brand=asus">Asus</a>
                                <a href="shop.php?quanly=danhmucsanpham&brand=acer">Acer</a>
                                <a href="shop.php?quanly=danhmucsanpham&brand=dell">Dell</a>
                                <a href="shop.php?quanly=danhmucsanpham&brand=apple">Apple</a>
                                
                                
                            </div>
                        </div>
                    
                    </li>
                    <!-- <li class="propClone"><a href="product.html">Product</a></li> -->
                    <li class="propClone"><a href="cart.php">Cart</a></li>
                    
                    <li class="dropdownlogin"><div class="dropdowni"><a href="login.php"><i class='fas fa-user-alt' style='font-size:24px'><?php if(isset($_SESSION['username'])){echo "Xin chào "; echo $_SESSION['username'];} ?></i></a>
                            <div class="dropdownct">
                                <?php if(isset($_SESSION['profile'])){echo $_SESSION['profile'];} ?>
                                <?php if(isset($_SESSION['admin'])){echo $_SESSION['admin'];} ?>
                                <?php if(isset($_SESSION['donhang'])){echo $_SESSION['donhang'];} ?>
                                <?php if(isset($_SESSION['logout'])){echo $_SESSION['logout'];}  ?>
                                
                            </div>
                        </div>
                    
                    </li>
                    <li class="dropdownlogin"><div class="dropdowni"><a href="register.php"><i class='fas fa-user-plus' style='font-size:24px'></i></a>
                            
                        </div>
                    
                    </li>
                    <li class="dropdownlogin"><a href="timkiem.php"><i class='fab fa-sistrix' style='font-size:24px'></i></a></li>
				
				
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Checkout
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">My bill</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
    <?php 
    if(isset($_SESSION['idpr'])){
		$b=$_SESSION['idpr'];
        $sql2="SELECT * FROM hoa_don WHERE '$b'=id";
        $query2=mysqli_query($con,$sql2);
	?>
	<table border="1" class="tb">
		<thead>
			<td>Tên người mua</td>
			<td>ID hóa đơn</td>
			<td>Tên sản phẩm</td>
			<td>Ngày mua</td>
			<td>Tổng tiền</td>
			<td>Trạng thái</td>
		<thead>
		<?php while($row2=mysqli_fetch_array($query2)){
			$cc1=$row2['id_hd'];
			$sql3="SELECT * FROM ct_hoadon where id_cthd='$cc1'";
			$query3=mysqli_query($con,$sql3);
			$k=''; ?>
		<tr >
			<td><?php echo $_SESSION['username']; ?></td>
            <td style="text-align:center"><?php echo $row2['id_hd']; ?></td>
			<td id='<?php echo $row2['id_hd']; ?>'>
			<script>
			var tong='';
			<?php while($row3=mysqli_fetch_array($query3)){ ?>
			tong+='<span>'
			+'<?php echo $row3['soluong'].'*'.$row3['tensp'].'<->'.number_format($row3['tongtien'],0,",","."). "VNĐ"; ?>'
			+'</span><br>';
			 <?php } ?>
				document.getElementById('<?php echo $row2['id_hd']; ?>').innerHTML=tong;
				console.log(tong);
			 </script>
			</td>
			<td><?php echo $row2['ngaymua']; ?></td>
			<td><?php echo number_format($row2['tongtien'],0,",","."). "VNĐ"; ?></td>
			<td><?php echo $row2['statuss']; ?></td>
			<?php if( $row2['statuss']=='Not Process'){ ?>
			<td><a href="Huydon.php?idxoa=<?php echo $row2['id_hd']; ?>" onclick="return confirm('Are you sure you want to delete this product?');" style="cursor:pointer"><i class="fas fa-trash-alt"></i></a></td>
			<?php } ?>
			</tr>
			<?php } ?>
    </table>
    </table>
	<?php 
	}else if(isset($_SESSION['idquyen'])){
		$b=$_SESSION['idquyen'];
        $sql2="SELECT * FROM hoa_don WHERE '$b'=id";
        $query2=mysqli_query($con,$sql2);
	?>
	<table border="1" class="tb">
		<thead>
			<td>Tên người mua</td>
			<td>ID hóa đơn</td>
			<td>Tên sản phẩm</td>
			<td>Ngày mua</td>
			<td>Tổng tiền</td>
			<td>Trạng thái</td>
		<thead>
		<?php while($row2=mysqli_fetch_array($query2)){
			$cc1=$row2['id_hd'];
			$sql3="SELECT * FROM ct_hoadon where id_cthd='$cc1'";
			$query3=mysqli_query($con,$sql3);
			$k=''; ?>
		<tr >
			<td><?php echo $_SESSION['username']; ?></td>
            <td style="text-align:center"><?php echo $row2['id_hd']; ?></td>
			<td id='<?php echo $row2['id_hd']; ?>'>
			<script>
			var tong='';
			<?php while($row3=mysqli_fetch_array($query3)){ ?>
			tong+='<span>'
			+'<?php echo $row3['soluong'].'*'.$row3['tensp'].'<->'.number_format($row3['tongtien'],0,",","."). "VNĐ"; ?>'
			+'</span><br>';
			 <?php } ?>
				document.getElementById('<?php echo $row2['id_hd']; ?>').innerHTML=tong;
				console.log(tong);
			 </script>
			</td>
			<td><?php echo $row2['ngaymua']; ?></td>
			<td><?php echo number_format($row2['tongtien'],0,",","."). "VNĐ"; ?></td>
			<td><?php echo $row2['statuss']; ?></td>
			<?php if( $row2['statuss']=='Not Process'){ ?>
			<td><a href="Huydon.php?idxoa=<?php echo $row2['id_hd']; ?>" onclick="return confirm('Are you sure you want to delete this product?');" style="cursor:pointer"><i class="fas fa-trash-alt"></i></a></td>
			<?php } ?>
			</tr>
			<?php } ?>
    </table>

    <?php }?>
		
</div>
</div>
</section>
<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
			<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
			</h1>
		</div>
	</div>
</div>
</div>
</section>
<!-- FOOTER =============================-->
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with ISTORE
		</p>
		<ul class="social-iconsfooter">
			<li><a href="#"><i class="fa fa-phone"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		</ul>
		<p>
			 &copy; 2017 Your Website Name<br/>
			
		</p>
	</div>
</div>
</div>
<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script src="js/validate.js"></script>
</body>
</html>