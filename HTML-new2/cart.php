<?php
session_start();
 
include("pages/connect.php");
if(isset($_SESSION['cart'])){
    
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
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
				<li class="propClone"><a href="cart.php">CART</a></li>
				
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
<div class="container toparea" style="background: rgba(234, 241, 234, 1)">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">MAKE PAYMENT</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div id="edd_checkout_wrap" >
		<form id="edd_checkout_cart_form" method="POST" action="cart.php">
			<div id="edd_checkout_cart_wrap">
			<table style="width:100%;text-align:center">
			<?php if(isset($_SESSION['cart'])){
					$tongtien=0;
					$tongsl=0;
					foreach($_SESSION['cart'] as $cartitem){
						$thanhtien=$cartitem['soluong']*$cartitem['Gia'];
						$tongsl=$tongsl+$cartitem['soluong'];
						$tongtien+=$thanhtien;
					}
				
			?>
			<div style="width: 400px;height: 300px;float: right;border-radius: 10px;background-color: white;margin-bottom:20px" id='tong'>
				<div>
						<div style="margin:40px 120px">ORDER SUMMARY</div>
						<div style="margin-left:20px;">Subtotal (<span id='tongsl'><?php echo $tongsl; ?></span> item(s))<span style="margin-left:90px"><?php echo number_format($tongtien,0,",","."). "VNĐ"; ?></span> </div>
						<div style="border-bottom:1px solid;margin:30px auto; width:90%;"></div>
						<div style="margin-left:20px;margin-top:20px">Total <span style="margin-left:170px;font-size:20px;color:red;font-weight:bold"><?php echo number_format($tongtien,0,",","."). "VNĐ"; ?></span> </div>
						<input style="margin:10px auto;margin-left:40px;width:80%;border: solid 0.5px;text-align:center;background-color:red;color:white"  type="submit" id="edd-purchase-button" name="edd-purchase" value="Purchase">
						</div>
			</div>
			<?php
				}
			?>
			<div style="width: 700px;height: auto;float: left;margin-top: -9px;position: relative;" id="dssp">
			
				<?php if(isset($_SESSION['cart'])){
					
					foreach($_SESSION['cart'] as $cartitem){
				?>
			<!-- FIXXXXXXX -->
<div id="itemincart" style="background-color:white;width: 650px;height: 200px;margin: 10px auto;border-radius: 10px;"><div style="float:left;margin:5px 10px"><img src="<?php echo $cartitem['Hinh']; ?>" style="float:left; height:180px;width:150px"></div>
				<div style="float:left; width:45%; margin-top: 55px; font-size:1em;"><p><?php echo $cartitem['Tensp']; ?></p><p style="margin-top:20px;font-size:15px;font-weight:400px;color:blue;cursor:pointer " id="<?php echo $cartitem['ID'].'xoa'; ?>">Delete</p></div>
				<div style="float:right;width:18%;margin-top:55px;margin-right:20px;font-size:16px">
					<div style="font-weight:bold;" id="<?php echo $cartitem['ID'].'gia'; ?>"><?php echo number_format($cartitem['Gia'],0,",","."). "VNĐ"; ?></div>
						<div style="text-align:center;margin-top:15px;cursor:pointer">
							<div style="border-radius:5px 0 0 5px; float:left;border:solid 0.5px;width:35px;padding:auto;height:30px;line-height:29px;" id="<?php echo $cartitem['ID'].'tru'; ?>">&ndash;</div>
							<div style="float:left;border:solid 0.5px;width:40px;padding:auto;font-weight:20;height: 30px;line-height:28px"><input type="text" size=1px style="text-align:center;height:25px;outline:none;border:none" class="<?php echo $cartitem['ID'].'change'; ?>" id="<?php echo $cartitem['ID'].'a'; ?>" value="<?php echo $cartitem['soluong']; ?>"></div>
							<div style="border-radius:0 5px 5px 0; float:left;border:solid 0.5px;width:35px;padding:auto;height:30px;line-height:28px" id="<?php echo $cartitem['ID'].'cong'; ?>">+</div>
						</div>
					</div>
				</div>
			
			
				<script>
					var tong=0;
					var tongsl=0;
					document.getElementById('<?php echo $cartitem['ID'].'tru'; ?>').addEventListener("click",function(){ tru('<?php echo $cartitem['ID']; ?>')});
					document.getElementById('<?php echo $cartitem['ID'].'cong'; ?>').addEventListener("click",function(){ cong('<?php echo $cartitem['ID']; ?>') });
					document.getElementById('<?php echo $cartitem['ID'].'xoa'; ?>').addEventListener("click",function(){ xoa('<?php echo $cartitem['ID']; ?>') });
					function isso(so) {
							var pattern = new RegExp(/^[0-9]+$/);
							return pattern.test(so);
						}
						$('.<?php echo $cartitem['ID'].'change'; ?>').keyup(function(){
							var tk=$('.<?php echo $cartitem['ID'].'change'; ?>').val();
							if(isso(tk)){
							$.post('pages/changespcart.php',{
								idc:<?php echo $cartitem['ID']; ?>,
								data: tk
							},function(arr){
								var duce =  JSON.parse(arr);
								if(duce[0].soluong==0){
									alert("Số lượng không hợp lệ!");
									location.reload();
								}
								else {
									document.getElementById('<?php echo $cartitem['ID'].'a'; ?>').value=duce[0].soluong;
									tong=Number(duce[0].Tongtien);
									tongsl=Number(duce[0].Tongsl);
									tongbb();
								}
							});
							}
							else {
								if(tk!=""){
								alert("Dữ liệu không hợp lệ");
								location.reload();
								}
							}
});
					function tru(a){
					var id=a+"a";
					
					$.ajax({
						type:"POST",
						url:'pages/truspcart.php',
						data: { idc : a },
						success: function(product){
							var duce =  JSON.parse(product);
								 document.getElementById(id).value=duce[0].soluong;
								 tongsl=Number(duce[0].Tongsl);
								tong=Number(duce[0].Tongtien);
								 tongbb();
						}
					});
					
				}
				function cong(a){
					var id=a+"a";
					$.ajax({
						type:"POST",
						url:'pages/congspcart.php',
						data:  { idc : a },
						success: function(product){
							console.log(product);
							
					}
					});
					
				}
				function xoa(a){
					$.ajax({
						type:"POST",
						url:'pages/xoa1spcart.php',
						data:  { idc : a },
						success: function(){
							location.reload();

						}
					});
				}
				function tongbb(){
					var s="";
					 s+='<div>'
						+'<div style="margin:40px 120px">ORDER SUMMARY</div>'
						+'<div style="margin-left:20px;">Subtotal (<span id="tongsl">'+tongsl+'</span> item(s))<span style="margin-left:90px">' +tong.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + 'VND</span> </div>'
						+'<div style="border-bottom:1px solid;margin:30px auto; width:90%;"></div>'
						+'<div style="margin-left:20px;margin-top:20px">Total <span style="margin-left:170px;font-size:20px;color:red;font-weight:bold">' +tong.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') + 'VND</span> </div>'
						+'<input style="margin:10px auto;margin-left:40px;width:80%;border: solid 0.5px;text-align:center;background-color:red;color:white"  type="submit" id="edd-purchase-button" name="edd-purchase" value="Purchase">'
						+'</div>'
						document.getElementById('tong').innerHTML=s;
				}
					
				</script>
				<!-- FIXXXXXX -->
				<?php 
					}
				}else{
				?>
				<tr>
					<td colspan="8"><p>Hiện tại giỏ hàng đang trống</p></td>
				</tr>

				<?php 
				}
				?>
			</div>
			</table>
			</div>
		</form>
		
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
				Scorilo - Free template by <a href="#">WowThemesNet</a>
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
	$( "#edd_checkout_cart_form" ).submit(function( event ) {
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: 'pages/thanhtoan.php',
			data: $(this).serializeArray(),
			success: function(response){
				response=JSON.parse(response);
				if(response.status==0){
					alert('Bạn phải đăng nhập trước khi thanh toán');
				}else{
					alert(response.message);
					window.location="cart.php";
				}
			}
		});
	});

</script>
</body>
</html>