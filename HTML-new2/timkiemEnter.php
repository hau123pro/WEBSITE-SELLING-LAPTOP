<?php
session_start();
include('pages/connect.php');
$limit = 9;  
function completelyMatchesPattern($str, $pattern){
    return preg_match($pattern, $str, $matches) === 1 && $matches[0] === $str;
}
$pattern="/^[a-zA-Z0-9]+$/";

if(isset($_POST['timkiemt'])){
    $a=$_POST['timkiemt'];
    if (isset($_GET["page"])){
    $tranghientai=$_GET["page"]; 
    }
    else {
        $tranghientai=1;
    } 
    $st = ($tranghientai-1) * $limit;  
if($a!=''&&completelyMatchesPattern($a,$pattern)==true){
	if(isset($_GET['theloai']))
	{
		$tl=$_GET['theloai'];
		if(isset($_GET['sort'])){
			$sort=$_GET['sort'];
			if($sort=='giam'){
				$sql = "SELECT * FROM sanpham WHERE ( Tensp LIKE '%$a%' or ID like '%$a%' ) and Loai='$tl' ORDER BY Gia DESC LIMIT $st, $limit"; 
			}
			if($sort=='tang'){
				$sql = "SELECT * FROM sanpham WHERE ( Tensp LIKE '%$a%' or ID like '%$a%' ) and Loai='$tl' ORDER BY Gia ASC LIMIT $st, $limit"; 
			}
		}
		else {
			$sql = "SELECT * FROM sanpham WHERE ( Tensp LIKE '%$a%' or ID like '%$a%' ) and Loai='$tl' LIMIT $st, $limit"; 
		}
		$sqlt="SELECT * FROM sanpham WHERE ( Tensp LIKE '%$a%' or ID like '%$a%' ) and Loai='$tl'";
	}
	else{
		if(isset($_GET['sort'])){
			$sort=$_GET['sort'];
			if($sort=='giam'){
				$sql = "SELECT * FROM sanpham WHERE Tensp LIKE '%$a%' or ID like '%$a%' ORDER BY Gia DESC LIMIT $st, $limit"; 
			}
			if($sort=='tang'){
				$sql = "SELECT * FROM sanpham WHERE Tensp LIKE '%$a%' or ID like '%$a%' ORDER BY Gia ASC LIMIT $st, $limit"; 
			}
		}
		else {
			$sql = "SELECT * FROM sanpham WHERE Tensp LIKE '%$a%' or ID like '%$a%' LIMIT $st, $limit"; 
		}
		$sqlt="SELECT * FROM sanpham WHERE Tensp LIKE '%$a%' or ID like '%$a%'";
	}
}
else 
{
    if(isset($_GET['theloai']))
	{
		$tl=$_GET['theloai'];
		if(isset($_GET['sort'])){
			$sort=$_GET['sort'];
			if($sort=='giam'){
				$sql = "SELECT * FROM sanpham WHERE Loai='$tl' ORDER BY Gia DESC LIMIT $st, $limit"; 
			}
			if($sort=='tang'){
				$sql = "SELECT * FROM sanpham WHERE Loai='$tl' ORDER BY Gia ASC LIMIT $st, $limit"; 
			}
		}
		else {
			$sql = "SELECT * FROM sanpham WHERE Loai='$tl' LIMIT $st, $limit"; 
		}
		$sqlt="SELECT * FROM sanpham WHERE Loai='$tl'";
	}
	else{
		if(isset($_GET['sort'])){
			$sort=$_GET['sort'];
			if($sort=='giam'){
				$sql = "SELECT * FROM sanpham ORDER BY Gia DESC LIMIT $st, $limit"; 
			}
			if($sort=='tang'){
				$sql = "SELECT * FROM sanpham ORDER BY Gia ASC LIMIT $st, $limit"; 
			}
		}
		else {
			$sql = "SELECT * FROM sanpham LIMIT $st, $limit"; 
		}
		$sqlt="SELECT * FROM sanpham ";
	}
}
$rs_result = mysqli_query($con, $sql);  
$result=mysqli_query($con, $sqlt); 
$num_rows = mysqli_num_rows($result);
if(completelyMatchesPattern($a,$pattern)==false){
	$num_rows=0;
}
if($num_rows%$limit==0){
    $tongsotrang=$num_rows/$limit;
}
else {
    $tongsotrang=$num_rows/$limit+1;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/newcss.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

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
                    
                    <li class="dropdownlogin"><div class="dropdowni"><a href="<?php if(isset($_SESSION['username'])){echo "#";}else{echo "login.php";} ?>"><i class='fas fa-user-alt' style='font-size:24px'><?php if(isset($_SESSION['username'])){echo "Xin chào "; echo $_SESSION['username'];} ?></i></a>
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
                        <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
                             Shop
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
			<h1 class="text-center latestitems">TÌM KIẾM</h1>
            Kết Quả Tìm Kiếm : <?php echo $a ?><br>
			Bộ Lọc:<br>
			<div class="row"> 
			<!-- Bo Loc The Loai -->
				<?php if(isset($sort)){ ?>
					<form action="timkiemEnter.php?page=1&theloai=asus&sort=<?php echo $sort; ?>" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="asus" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=acer&sort=<?php echo $sort; ?>" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="acer" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=dell&sort=<?php echo $sort; ?>" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="dell" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=apple&sort=<?php echo $sort; ?>" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="apple" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>

				<?php }else { ?>
					<form action="timkiemEnter.php?page=1&theloai=asus" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="asus" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=acer" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="acer" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=dell" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="dell" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=apple" method="POST" style="margin:0px;float:left">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="apple" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } ?>
						<!-- BỘ LỌC TĂNG GIẢM -->
				<?php if(isset($tl)){ ?>
					<form action="timkiemEnter.php?page=1&theloai=<?php echo $tl; ?>&sort=tang" method="POST" style="margin:0px;float:right">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="Tăng dần" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&theloai=<?php echo $tl; ?>&sort=giam" method="POST" style="margin:0px;float:right">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="Giảm dần" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php }else { ?>
					<form action="timkiemEnter.php?page=1&sort=tang" method="POST" style="margin:0px;float:right">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="Tăng dần" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
					<form action="timkiemEnter.php?page=1&sort=giam" method="POST" style="margin:0px;float:right">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" value="Giảm dần" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } ?>
			</div>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<?php if($num_rows>0){ ?>
	<div class="target-contenttk">
<div class="row">
		<div class="chitiet" id="ct" style="background-color: white;"></div>
        <div class="chitiet2" id="thongso"></div>
        <?php while ($row = mysqli_fetch_array($rs_result)){ ?>
        <form method="POST" >
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3><?php echo $row['Tensp'] ?></h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
                        <!-- <i class="fa fa-shopping-cart"></i> -->
                            <span class="new" id="<?php echo $row['ID'].'them'; ?>">Purchase</span>
							<span class="new" id="<?php echo $row['ID'].'ct'; ?>"><i class="fa fa-link"></i> Details</span>
							<script>
								document.getElementById("<?php echo $row['ID'].'them'; ?>").addEventListener("click",function(){ themcart('<?php echo $row['ID']; ?>') });
								document.getElementById("<?php echo $row['ID'].'ct'; ?>").addEventListener("click",function(){ chitiet('<?php echo $row['ID']; ?>') });
								function themcart(a){
									<?php if($row['soluong']>0){ ?>
									$.ajax({
										type:"POST",
										url:'pages/themgiohang2.php',
										data:  { ID : a },
										success: function(){
											alert("Thêm thành công");

										}
									});
									<?php }else { ?>
									alert("Đã Hết Sản Phẩm")
									<?php } ?>
								}
								function chitiet(a){
									$.ajax({
										type:"POST",
										url:'pages/Chitiet.php',
										data:  { ID : a },
										success: function(data){
											$(".chitiet").html(data);
											document.getElementById("ct").style.display='block';
										}
									});
								}
							</script>
						</p>
					</div>
					<span class="maxproduct"><img src="<?php echo $row['Hinh'] ?>" alt=""></span>
				</div>
				<div class="product-details" style="height:120px">
					<a href="#">
					<p><?php echo $row['Tensp']; ?></p>
					</a>
					<span class="price">
					<span class="edd_price"><?php echo number_format($row['Gia'],0,",",".")."VNĐ"; ?></span>
					</span>
				</div>
			</div>
		</div>
		</form>
		
        <?php } ?>
        
</div> 
<div class="row">
<div class="clearfix" style="text-align:center">

<ul class="pagination justify-content-center">
    <?php
    for($i=1;$i<=$tongsotrang;$i++)
    {
        if($tranghientai==$i)
        {
            ?>
        <li class="pageitem active"><span style="margin-left:6px"><?php echo $i;?></span></li>
     <?php       
        }
        else {
            ?>
        <li class="pageitem ">
			<span style="padding:0px;border:none">
			<?php if(isset($tl)){ ?>
				<?php if(isset($sort)){ ?>
					<form action="timkiemEnter.php?page=<?php echo $i;?>&theloai=<?php echo $tl; ?>&sort=<?php echo $sort; ?>" method="POST" style="margin:0px">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" class="timk" value="<?php echo $i;?>" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } else { ?>
					<form action="timkiemEnter.php?page=<?php echo $i;?>&theloai=<?php echo $tl; ?>" method="POST" style="margin:0px">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" class="timk" value="<?php echo $i;?>" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } ?>	
			<?php } else { ?>
				<?php if(isset($sort)){ ?>
					<form action="timkiemEnter.php?page=<?php echo $i;?>&sort=<?php echo $sort; ?>" method="POST" style="margin:0px">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" class="timk" value="<?php echo $i;?>" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } else { ?>
					<form action="timkiemEnter.php?page=<?php echo $i;?>" method="POST" style="margin:0px">
						<input type="text" name="timkiemt" class="timk" value="<?php echo $a;?>" style="width:0px;border:none;height:5px"> 
						<input type="submit" name="y" class="timk" value="<?php echo $i;?>" style="min-width:0px;height:37px;border-color:#ddd;color:#15f674;">  
					</form>
				<?php } ?>
			<?php } ?>
		</span>
		</li>
        <?php
        }
    }
    ?>
	</ul>

</div>
</div>
</div>
</div>
</div>
<?php } else{ ?>
			<div>KHÔNG CÓ SẢN PHẨM NÀO</div>
			<?php }
			?>
</section>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
			<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
			</h1>
		</div>``
	</div>
</div>
</div>
</section>

<!-- FOOTER =============================-->
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with Scorilo
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
			Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
		</p>
	</div>
</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});



</script>
</body>
</html>

	<?php
}?>