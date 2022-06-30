<?php 
session_start();
include("pages/connect.php");
if(!isset($_SESSION['profile'])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='js/javascript.js' type='text/javascript'></script>
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
                    <!-- <li class="propClone"><a href="product.html">Product</a></li> -->
                    <li class="propClone"><a href="cart.php">Cart</a></li>
                    
                    <li class="dropdownlogin"><div class="dropdowni"><a href="<?php if(isset($_SESSION['username'])){echo "#";}else{echo "login.php";} ?>"><i class='fas fa-user-alt' style='font-size:24px'><?php if(isset($_SESSION['username'])){echo "Xin chào "; echo $_SESSION['username'];}else if(isset($_SESSION['usernamead'])){echo "Xin chào "; echo $_SESSION['usernamead'];} ?></i></a>
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
						 Profile
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
			<h1 class="text-center latestitems">My profile</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Your message has been sent. Thank you!
				</div>
			</div>
			<?php 	
					if(isset($_SESSION['idpr'])){

					
					$a=$_SESSION['idpr'];
					$sql="SELECT * FROM tai_khoan where ID='$a'";
					$query=mysqli_query($con,$sql);
					if(isset($_SESSION['profile'])){
					while($row=mysqli_fetch_array($query)){
				
			?>

			<form method="POST" action="pages/xulyprofile.php?id=<?php echo $row['ID'] ?>" name="formprofile" id="formprofile">
				
				<table>
				<fieldset>								
					<tr><legend><?php echo "Mã của bạn:".$_SESSION['idpr']; ?></legend></tr>
					<tr>
						<td><label>Username:</label></td>
						<td><div><?php echo $row['username']; ?></div></td>
					</tr>
					<tr>
						<td><label>Họ tên:</label></td>
						<td><input type="text" name="hoten" id="hoten" value="<?php echo $row['hoten']; ?>"></td>
						<td><div id="hotener"></div></td>
					</tr>
					<tr>
						<td><label>Ngày sinh:</label></td>
						<td><input type="text" name="ngaysinh" id="ngaysinh" value="<?php echo $row['ngaysinh']; ?>"></td>
						<td><div id="ngaysinher"></div></td>
					</tr>
					<tr>
						<td><label>Số diện thoại:</label></td>
						<td><input type="text" name="sodienthoai" id="sodienthoai" value="<?php echo $row['sodienthoai']; ?>"></td>
						<td><div id="sodienthoaier"></div></td>
					</tr>
					<tr>
						<td><label>Giới tính:</label></td>
						<td>
							<select name="gioitinh" id="gioitinh">
								<option value="<?php echo $row['gioitinh']; ?>"><?php echo $row['gioitinh']; ?></option>
								<option value="nam">Nam</option>
								<option value="nu">Nữ</option>
							</select>
						</td>
						<td><div id="gioitinher"></div></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="email" name="email" id="email" value="<?php echo $row['email']; ?>"></td>
						<td><div id="emailer"></div></td>
					</tr>
					<tr>
						<td><label>Địa chỉ:</label></td>
						<td><input type="text" name="diachi" id="diachi" value="<?php echo $row['diachi']; ?>"></td>
						<td><div id="diachier"></div></td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td><input type="text" name="password" id="password" value="<?php echo $row['password']; ?>"></td>
						<td><div id="passworder"></div></td>
					</tr>
					<tr>
						<td><label>Tình trạng:</label></td>
						<td><div><?php echo $row['status']; ?></div></td>
					</tr>
					
					<tr>
						<td><button type="submit" name="submit">edit profile</button></td>
					</tr>
				</fieldset>
				</table>
						
					
				</table>	
			</form>
			<?php } } } ?>

			
		</div>
	</div>
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
			Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
		</p>
	</div>
</div>
</div>
<!-- SCRIPTS =============================-->
<script>
	$( "#formprofile" ).submit(function( event ) {
				
				var hoten=$("#hoten").val();
				var ngaysinh=$("#ngaysinh").val();
				var gioitinh=$("#gioitinh").val();
				var email=$("#email").val();
				var diachi=$("#diachi").val();
				var password=$("#password").val();
                var sodienthoai=$("#sodienthoai").val();
				var flag=true;								

				if(hoten==''){
					$("#hotener").html("<div id='hotener' style='color:red'>Vui lòng nhập họ tên</div>");
					flag=false;
				}else{
					$("#hotener").html("<div id='hotener' style='color:red'></div>");
				}

				if(password==''){
					$("#passworder").html("<div id='passworder' style='color:red'>Vui lòng nhập mật khẩu</div>");
					flag=false;
				}else{
					$("#passworder").html("<div id='passworder' style='color:red'></div>");
				}

                if(sodienthoai==''){
                    $("#sodienthoaier").html("<div id='sodienthoaier' style='color:red'>Vui lòng nhập số điện thoại</div>");
					flag=false;
                }else if(isso(sodienthoai)==false){
                    $("#sodienthoaier").html("<div id='sodienthoaier' style='color:red'>Chỉ được nhập số</div>");
					flag=false;
                }else{
                    $("#sodienthoaier").html("<div id='sodienthoaier' style='color:red'></div>");
                }

				if(diachi==''){
					$("#diachier").html("<div id='diachier' style='color:red'>Vui lòng nhập địa chỉ</div>");
					flag=false;
				}else{
					$("#diachier").html("<div id='diachier' style='color:red'></div>");
				}

				if(email=''){
					$("#emailer").html("<div id='emailer' style='color:red'>Vui lòng nhập email</div>");
					flag=false;
				}else{
					$("#emailer").html("<div id='emailer' style='color:red'></div>");
					
				}

				if(ngaysinh==''){
					$("#ngaysinher").html("<div id='ngaysinher' style='color:red'>Vui lòng nhập ngày sinh</div>");
					flag=false;
				}else{
					$("#ngaysinher").html("<div id='ngaysinher' style='color:red'></div>");
				}

				if(flag==false){
					return false;	
				}else{
					return true;
				}
				
				event.preventDefault();
           });

           	function isso(so) {
                var pattern = new RegExp(/^[0-9]+$/);
                return pattern.test(so);
		    }

			function ischu(so) {
                var pattern = new RegExp(/^[a-zA-Z0-9]+$/);
                return pattern.test(so);
		    }
			
			function isValidEmailAddress(emailAddress) {
			    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			    return pattern.test(emailAddress);
		    }
</script>
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script src="js/validate.js"></script>
</body>
</html>