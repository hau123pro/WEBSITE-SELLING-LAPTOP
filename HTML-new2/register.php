<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/styleregister.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
					<form method="POST" action="xulydangky.php" name="formdk" id="formdk" >
                        <h2 class="form-title">Create account</h2>
						<table>
                        <tr>
							<div class="form-group">
								<td><label>Username</label></td>
								<td><input type="text" name="usernamedk" id="usernamedk" size="40" placeholder="Username"></td>
								<td><div id="usernamedker"></div></td>
                        	</div>
                        <tr>
							<div class="form-group">
								<td><label>Your name</label></td>
								<td><input type="text" name="hotendk" id="hotendk" size="40" placeholder="Your name"></td>
								<td><div id="hotener"></div></td>
                        	</div>
						</tr>
						<tr>
                        	<div class="form-group">
								<td><label>Password</label></td>
								<td><input type="password" name="passworddk" id="passworddk" size="40" placeholder="Password"></td>
                            	<!-- <td><span toggle="#passworddk" class="zmdi zmdi-eye field-icon toggle-password"></span></td> -->
								<td><div id="passworddker"></div></td>
                        	</div>
						</tr>
						<tr>
                        	<div class="form-group">
								<td><label>Repeat password</label></td>
								<td><input type="password" name="cfpassworddk" id="cfpassworddk" size="40" placeholder="Confirm password"></td>
								<td><div id="cfpassworddker"></div></td>
                        	</div>
						</tr>
                        <tr>
							<div class="form-group">
								<td><label>Date of birth</label></td>
								<td><input type="date" name="date" id="date" size="40" required ></td>
                        	</div>
						</tr>
						<tr>
							<div class="form-group">
								<td><label>Phone number</label></td>
								<td><input type="text" name="sodienthoaidk" id="sodienthoaidk" size="40" placeholder="Phone number"></td>
								<td><div id="sdter"></div></td>
                        	</div>
						</tr>
						<tr>
							<div class="form-group">
								<td><label>Sex</label></td>
								<td>Nam<input type="radio" name="gioitinhdk" value="nam" size="40" required>Nữ<input type="radio" name="gioitinhdk" value="nu" size="40" required></td>
                        	</div>
						</tr>
						<tr>
							<div class="form-group">
								<td><label>Your email</label></td>
								<td><input type="text" name="emaildk" id="emaildk" size="40" placeholder="Your email"></td>
								<td><div id="emailer"></div></td>
                        	</div>
						</tr>
						<tr>
							<div class="form-group">
								<td><label>Your address</label></td>
								<td><input type="text" name="diachidk" id="diachidk" size="40" placeholder="Your address"></td>
								<td><div id="diachier"></div></td>
                        	</div>
						</tr>
                        <tr>
							<div class="form-group">
								<td><input type="submit" name="dangky" value="Signup" size="40"></td>
                        	</div>
						</tr>
						</table>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
	<script>

	
	$(document).ready(function(){
			$( "#formdk" ).submit(function( event ) {
				var username=$("#usernamedk").val();
				var password=$("#passworddk").val();
				var cfpassword=$("#cfpassworddk").val();
				var hoten=$("#hotendk").val();
				
				var sodienthoai=$('#sodienthoaidk').val();
				
				var email=$("#emaildk").val();
				var diachi=$("#diachidk").val();
				var pattern= /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
				var flag=true;
				if(username==''){
					$("#usernamedker").html("<div id='usernamedker' style='color:red'>Vui lòng nhập username</div>");
					flag=false;
				}else if(ischu(username)==false){
					$("#usernamedker").html("<div id='usernamedker' style='color:red'>Username không có kí tự đặc biệt</div>");
					flag=false;
				}else{
					$("#usernamedker").html("<div id='usernamedker' style='color:red'></div>");
				}

				if(password==''){
					$("#passworddker").html("<div id='passworddker' style='color:red'>Vui lòng nhập password</div>");
					flag=false;
				}else if(password.length<8 ){
					$("#passworddker").html("<div id='passworddker' style='color:red'>Mật khẩu của bạn phải trên 8 kí tự</div>");
					flag=false;
				}else{
					$("#passworddker").html("<div id='passworddker' style='color:red'></div>");
				}

				if(cfpassword!=password || cfpassword==''){
					$("#cfpassworddker").html("<div id='cfpassworddker' style='color:red'>Password không khớp</div>");
					flag=false;
				}else{
					$("#cfpassworddker").html("<div id='cfpassworddker' style='color:red'></div>");
				}

				if(hoten==''){
					$("#hotener").html("<div id='hotener' style='color:red'>Vui lòng nhập họ tên</div>");
					flag=false;
				}else{
					$("#hotener").html("<div id='hotener' style='color:red'></div>");
				}

				if(sodienthoai==''){
					$("#sdter").html("<div id='sdter' style='color:red'>Vui lòng nhập số điện thoại</div>");
					flag=false;
				}else if(sodienthoai>='a' && sodienthoai<='z' || sodienthoai>='A' && sodienthoai<='Z'){
					$("#sdter").html("<div id='sdter' style='color:red'>Số điện thoại không hợp lệ</div>");
					flag=false;
				}else if(isso(sodienthoai)==false){
					$("#sdter").html("<div id='sdter' style='color:red'>Số điện thoại không hợp lệ</div>");
					flag=false;
				}else if (!sodienthoai.match(pattern)) {
					$("#sdter").html("<div id='sdter' style='color:red'>Số điện thoại không hợp lệ</div>");
					flag=false;
				}else{
					$("#sdter").html("<div id='sdter' style='color:red'></div>");
				}

				if(email==''){
					$("#emailer").html("<div id='emailer' style='color:red'>Vui lòng nhập email</div>");
					flag=false;
				}else if(isValidEmailAddress(email)==false){
					$("#emailer").html("<div id='emailer' style='color:red'>Email không hợp lệ</div>");
					flag=false;
				}else{
					$("#emailer").html("<div id='emailer'></div>");
				}
				
				if(diachi==''){
					$("#diachier").html("<div id='diachier' style='color:red'>Vui lòng nhập địa chỉ</div>");
					flag=false;
				}else{
					$("#diachier").html("<div id='diachier' style='color:red'></div>");
				}

				if(flag==false){
					return false;
				}
				console.log($(this).serializeArray());
				event.preventDefault();
				$.ajax({
				type: "POST",
				url: "xulydangky.php",
				data: $(this).serializeArray(),
				success: function(response){
							response=JSON.parse(response);
							console.log("response: ",response);
							if(response.status==0){
								alert(response.message);
							}else if(response.status==1){
								alert(response.message);
								window.location="index.php";
							}
				}
				});
			});
			
	});
	
		 function isValidEmailAddress(emailAddress) {
			var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			return pattern.test(emailAddress);
		}

		function isso(so) {
            var pattern = new RegExp(/^[0-9]+$/);
            return pattern.test(so);
		}

		function ischu(so) {
            var pattern = new RegExp(/^[a-zA-Z0-9]+$/);
            return pattern.test(so);
		}

		
	</script>
    
</body>
</html>
