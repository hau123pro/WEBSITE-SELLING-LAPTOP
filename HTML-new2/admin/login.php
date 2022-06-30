<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Classy Login form Widget Flat Responsive Widget Template :: w3layouts</title>
<script src="jsdn/jquery.min.js"></script>
<!-- Custom Theme files -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link href="cssdn/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>ISTORE Login Form</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="xulydangnhapadmin.php" method="POST" name="formdangnhap" id="formdangnhap">
						<input type="text" id="username" placeholder="Username" name="name" >
					<input type="password" id="password"  placeholder="Password" name="password" >
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="checkdn" value="checkdn"><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Login">
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>or</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="twitt"><h5>Twitter</h5></a>
						</div>
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2016 Classy Login Form. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<!--footer end here-->
<script>

$(document).ready(function(){
			$( "#formdangnhap" ).submit(function( event ) {
                var username=$("#username").val();
                var password=$("#password").val();
                var flag=true;
                if(username==''){
                    $("#username").css("border-color","red");
					flag=false;
                }else if(ischu(username)==false){
					$("#username").css("border-color","red");
					flag=false;
				}else{
                    $("#username").css("border-color","white");
                }

                if(password==''){
                    $("#password").css("border-color","red");
					flag=false;
                }else{
                    $("#password").css("border-color","white");
                }

				if(flag==false){
					return false;
				}
				console.log($(this).serializeArray());
				event.preventDefault();
				$.ajax({
				type: "POST",
				url: "xulydangnhapadmin.php",
				data: $(this).serializeArray(),
				success: function(response){
							response=JSON.parse(response);
							console.log("response: ",response);
							if(response.status==0 && username!='' && password!=''){
								alert("Tài khoản hoặc mật khẩu không đúng");
                                $("#username").css("border-color","red");
                                $("#password").css("border-color","red");
								$("#password").focus();
                                $("#username").focus();
							}else if(response.status==1){
								alert(response.message);
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
</body>
</html>
