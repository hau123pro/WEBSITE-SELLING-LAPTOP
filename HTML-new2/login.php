<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Clean Login Form a Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />


<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/stylelogin.css" rel="stylesheet" type="text/css" media="all" />



<link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="container demo-1">
	<div class="content">
        <div id="large-header" class="large-header">
			<h1>Clean Login Form</h1>
				<div class="main-agileits">
				
						<div class="form-w3-agile">
							<h2>login Now</h2>
							<form method="POST" action="login.php" id="formdn" name="formdn" >
								<div class="form-sub-w3">
									<input type="text" name="username" id="username" >
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" id="password" >
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								
								</div>
								<p class="p-bottom-w3ls">Forgot Password?<a class href="#">  Click here</a></p>
								<p class="p-bottom-w3ls1">New User?<a class href="register.php">  Register here</a></p>
								<div class="clear"></div>
								<div id="chunger"></div>
								<div class="submit-w3l">
									<input type="submit" name="dangnhap" value="login">
								</div>
							</form>
							<div class="social w3layouts">
								<div class="heading">
									<h5>Or Login with</h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				
				</div>
					<div class="copyright w3-agile">
						<p> © 2017 Clean Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
					</div>
					
        </div>
	</div>
</div>	
<script>
		 $(document).ready(function(){
			$( "#formdn" ).submit(function( event ) {
				var x="xulydangnhap.php";
				var username=$("#username").val();
				var password=$("#password").val();
				alert(password);
				var flag=true;
				if(username==''){
					$("#username").css("border-color","red");
					$("#username").focus();
					flag=false;
				}else if(ischu(username)==false){
					$("#username").css("border-color","red");
					$("#username").focus();
					flag=false;
				}else{
					$("#username").css("border-color","white");
				}

				if(password==''){
					$("#password").css("border-color","red");
					$("#password").focus();
					flag=false;
				}else{
					$("#password").css("border-color","white");
				}

				if(flag==false){
					return false;
				}
				try{
					if(x!="xulydangnhap.php"){
						throw "error";
					}
				}catch(err){
					alert(err);
				}
				console.log($(this).serializeArray());
				event.preventDefault();
				$.ajax({
				type: "POST",
				url: x,
				data: $(this).serializeArray(),
				success: function(response){
					console.log(response);
							response=JSON.parse(response);
							console.log("response: ",response);
							if(response.status==0 && username!='' && password!=''){
								alert(response.message);
								$("#username").focus();
							}else if(response.status==1){
								alert("success");
								window.location="index.php";
							}
				}
			});
			});
			
		 });
	
		function ischu(so) {
            var pattern = new RegExp(/^[a-zA-Z0-9]+$/);
            return pattern.test(so);
		}
	</script>
	<?php if(isset($_SESSION['username']) && isset($_SESSION['profile']) && isset($_SESSION['logout']) && isset($_SESSION['donhang'])){
		unset($_SESSION['username']);
		unset($_SESSION['profile']); 
		unset($_SESSION['logout']);  
		unset($_SESSION['donhang']);
		if(isset($_SESSION['admin']) && isset($_SESSION['usernamead'])){
			unset($_SESSION['admin']);
			unset($_SESSION['usernamead']);
		}
		
		if(isset($_SESSION['id_kh']) ){
			unset($_SESSION['id_kh']);
			
		}
		
		if(isset($_SESSION['id_nv'])){
			unset($_SESSION['id_nv']);
		}
	} 
	?>
</body>
</html>