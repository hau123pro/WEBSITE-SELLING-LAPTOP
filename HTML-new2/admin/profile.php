<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nura Admin - My profile</title>
    <meta name="description" content="My profile | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span>NURA ADMIN</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="mail-all.html" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, <?php echo $_SESSION['usernamead']; ?></small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.php" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                            <a href="../index.php" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Shop</span>
                            </a>
                            <!-- item-->
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>

                        <li class="submenu">
                            <a class="active" href="index.php">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <?php
                        $idquyen=$_SESSION['idquyen'];
                        $sql="SELECT * FROM quyenhan WHERE ma_chucvu='$idquyen'";
                        $query=mysqli_query($con,$sql);

                        $sql1="SELECT * FROM link_quyen WHERE ma_chucvu='$idquyen'";
                        $query1=mysqli_query($con,$sql1);
                        $mangchohau=array();    
                        $mangchohau1=array(); 
                        
                        $icon="SELECT * FROM icon WHERE ma_chucvu='$idquyen'";
                        $queryicon=mysqli_query($con,$icon);
                        while($rowic=mysqli_fetch_field($queryicon)){
                            array_push($mangchohau1, $rowic->name);
                        }
                        while($row1=mysqli_fetch_field($query1)){
                                array_push($mangchohau, $row1->name);
                                
                        }
                        $i=0;
                        while($row=mysqli_fetch_field($query)){
                            if($row->max_length==1){    
                                
                        ?>

                        <li class="submenu">
                        
                            <a class="active" href="<?php echo $mangchohau[$i];  ?>">
                            
                                <span><?php echo $mangchohau1[$i]; ?> <?php echo $row->name; ?> </span>
                            </a>
                            
                        </li>
                        <?php 
                            }
                            $i++;
                        }
                        ?>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">My Profile</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-user"></i> Profile details</h3>
                                </div>

                                <div class="card-body">

                                    <?php 
                               
                                    if(isset($_SESSION['ID'])){
                                        $id=$_SESSION['ID'];
                                        $sql="SELECT * FROM tai_khoan WHERE ID='$id'";
                                        $query=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($query)){
                        
                                    ?>
                                    <form action="xulyprofile.php?id=<?php echo $row['ID']; ?>" method="post" name="formprofile" id="formprofile">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Full name</label>
                                                    <input class="form-control" name="hoten" id="hoten" type="text" value="<?php echo $row['hoten']; ?>" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" id="email" type="email" value="<?php echo $row['email']; ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" name="password" type="text" id="password" value="<?php echo $row['password']; ?>" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input class="form-control" name="password2" id="password2" type="password" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Sex</label>
                                                    <input class="form-control" type="text" name="gioitinh" id="gioitinh" value="<?php echo $row['gioitinh']; ?>" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Date of birth</label>
                                                    <input class="form-control" type="text" name="ngaysinh" id="ngaysinh" value="<?php echo $row['ngaysinh']; ?>" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Phone number</label>
                                                    <input class="form-control" name="sodienthoai" id="sodienthoai" type="text" value="<?php echo $row['sodienthoai']; ?>" />
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" name="diachi" id="diachi" type="text" value="<?php echo $row['diachi']; ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <hr>
                                                <button type="submit" class="btn btn-primary" name="submit">Edit profile</button>
                                            </div>
                                        </div>

                                    </form>
                                    <?php 
                                        }
                                    }
                                    ?>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->



                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-file-image"></i> Avatar</h3>
                                </div>

                                <div class="card-body text-center">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <img alt="avatar" class="img-fluid" src="assets/images/avatars/avatar.png">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-danger btn-block mt-3">Delete avatar</button>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-info btn-block mt-3">Change avatar</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row -->


                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Your Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>
        
        <script>
           $( "#formprofile" ).submit(function( event ) {
				
				var rppassword=$("#password2").val();
				var password=$("#password").val();
                var sodienthoai=$("#sodienthoai").val();
                var email=$("#email").val();
                var hoten=$("#hoten").val();
                var diachi=$("#diachi").val();
                var gioitinh=$("#gioitinh").val();
				var flag=true;								

                if(hoten==''){
                    $("#hoten").css("border-color","red");
					flag=false;
                }else{
                    $("#hoten").css("border-color","white");
					
                }

				if(rppassword!=password || rppassword==''){
					$("#password2").css("border-color","red");
					flag=false;
				}else{
					$("#password2").css("border-color","white");
				}

                if(rppassword!=password || rppassword==''){
					$("#password").css("border-color","red");
					flag=false;
				}else{
					$("#password").css("border-color","white");
				}

                if(sodienthoai==''){
                    $("#sodienthoai").css("border-color","red");
                    flag=false;
                }else if(isso(sodienthoai)==false){
                    $("#sodienthoai").css("border-color","red");
                    flag=false;
                }else{
                    $("#sodienthoai").css("border-color","white");
                }

                if(gioitinh==''){
                    $("#gioitinh").css("border-color","red");
                    flag=false;
                }else if(gioitinh !='nam' && gioitinh!='nu'){
                    $("#gioitinh").css("border-color","red");
                    flag=false;
                }else{
                    $("#gioitinh").css("border-color","white");
                    
                }

                if(diachi==''){
                    $("#diachi").css("border-color","red");
                    flag=false;
                }else{
                    $("#diachi").css("border-color","white");
                    
                }

                if(email==''){
                    $("#email").css("border-color","red");
					flag=false;
                }else if(isValidEmailAddress(email)==false){
                    $("#email").css("border-color","red");
					flag=false;
                }else{
                    $("#email").css("border-color","white");
                }

				if(flag==false){
					return false;	
				}
				
				event.preventDefault();
           });

            function isso(so) {
                var pattern = new RegExp(/^[0-9]+$/);
                return pattern.test(so);
		    }

            function isValidEmailAddress(emailAddress) {
			    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			    return pattern.test(emailAddress);
		    }

            
        </script>

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        
        <script src="assets/js/admin.js"></script>
    </div>

</body>

</html>