<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ISTORE - Dashboard</title>
    <meta name="description" content="Dashboard | ISTORE">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.php" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span>ISTORE ADMIN</span>
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
                        

                        </li>

                    </ul>

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

                    
                    <!-- end row -->


                    <!-- <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="far fa-user float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                <h1 class="m-b-20 text-white counter">487</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-purple">
                                <i class="fas fa-download float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Downloads</h6>
                                <h1 class="m-b-20 text-white counter">290</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fas fa-shopping-cart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                                <h1 class="m-b-20 text-white counter">320</h1>
                                <span class="text-white">25 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="far fa-envelope float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Messages</h6>
                                <h1 class="m-b-20 text-white counter">58</h1>
                                <span class="text-white">5 New</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- end row -->


                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-chart-bar"></i> Chart 1</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">
                                    <canvas id="comboBarLineChart"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-chart-bar"></i> Chart 2</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">
                                    <canvas id="barChart"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div>
                    </div> -->
                    <!-- end row -->



                   

                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-apple-alt"></i> Add Product</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <form action="themsp.php" method="POST" enctype="multipart/form-data" name='formthem' onsubmit="return checkthem()">
                                            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                                <tr>
                                                    <td><label>Tên sản phẩm:</label></td>
                                                    <td><input type="text" name="tensanpham" placeholder="Tên sản phẩm"></td>
                                                    <td><div id="tensanphamer"></div></td>
                                                </tr>
                                        
                                                <tr>
                                                    <td><label>Thể loại:</label></td>
                                                    <td>
                                                        <select name="theloai">
                                                            <option value="">......</option>
                                                            <option value="asus">Asus</option>
                                                            <option value="acer">Acer</option>
                                                            <option value="dell">Dell</option>
                                                            <option value="apple">Apple</option>
                                                        </select>
                                                    </td>
                                                    <td><div id="theloaier"></div></td>
                                                </tr>

                                                <tr>
                                                    <td><label>Hình ảnh:</label></td>
                                                    <td><input type="file" name="fileupload"></td>
                                                    <td><div id="fileuploader"></div></td>
                                                </tr>

                                                <tr>
                                                    <td><label>Giá:</label></td>
                                                    <td><input type="text" name="gia" placeholder="1000"></td>
                                                    <td><div id="giaer"></div></td>
                                                </tr>

                                                <tr>
                                                    <td><label>Số lượng:</label></td>
                                                    <td><input type="text" name="soluong" placeholder="100"></td>
                                                    <td><div id="soluonger"></div></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label>Hình ảnh chi tiết:</label></td>
                                                    <td><input type="file" name="fileuploadct"></td>
                                                    <td><div id="fileuploadcter"></div></td>
                                                </tr>

                                                <tr>
                                                    <td colspan='2'><input type="submit" name="submit" value="Thêm sản phẩm"></td>
                                                </tr>
                    
                                            
                                            </table>
                                        </form>
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                    <!-- </div> -->
                    <!-- end row-->

                <!-- </div> -->
                <!-- END container-fluid -->

            <!-- </div> -->
            <!-- END content -->

        <!-- </div> -->
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">                
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/admin.js"></script>
        <script>
           
            function checkthem(){
  
				var tensanpham=document.forms["formthem"]["tensanpham"].value;
                var theloai=document.forms["formthem"]["theloai"].value;
                var hinhanh=document.forms["formthem"]["fileupload"].value;
                var gia=document.forms["formthem"]["gia"].value;
                var soluong=document.forms["formthem"]["soluong"].value;
                var hinhct=document.forms["formthem"]["fileuploadct"].value;
                var flag=true;

                if(tensanpham == ''){
                    document.getElementById("tensanphamer").style.color="red";
				    document.getElementById("tensanphamer").innerHTML="Vui lòng nhập tên sản phẩm";
                    flag=false;
                }else{
                    document.getElementById("tensanphamer").innerHTML="";
                }

                if(theloai == ''){
                    document.getElementById("theloaier").style.color="red";
				    document.getElementById("theloaier").innerHTML="Vui lòng chọn thể loại";
                    flag=false;
                }else{
                    document.getElementById("theloaier").innerHTML="";
                }

                if(hinhanh == ''){
                    document.getElementById("fileuploader").style.color="red";
				    document.getElementById("fileuploader").innerHTML="Vui lòng chọn hình ảnh";
                    flag=false;
                }else{
                    document.getElementById("fileuploader").innerHTML="";
                }

                if(gia == ''){
                    document.getElementById("giaer").style.color="red";
				    document.getElementById("giaer").innerHTML="Vui lòng nhập giá";
                    flag=false;
                }else if(gia>='a' && gia<='z' || gia>='A' && gia<='Z'){
                    document.getElementById("giaer").style.color="red";
				    document.getElementById("giaer").innerHTML="Vui lòng nhập giá trị số";
                    flag=false;
                }else if(gia<0){
                    document.getElementById("giaer").style.color="red";
				    document.getElementById("giaer").innerHTML="Vui lòng nhập giá trị số dương";
                    flag=false;
                }else if(isso(gia)==false){
                    document.getElementById("giaer").style.color="red";
				    document.getElementById("giaer").innerHTML="Vui lòng không nhập bậy";
                    flag=false;
                }else{
                    document.getElementById("giaer").innerHTML="";
                    console.log(gia);
                }

                

                if(soluong == ''){
                    document.getElementById("soluonger").style.color="red";
				    document.getElementById("soluonger").innerHTML="Vui lòng nhập số lượng";
                    flag=false;
                }else if(soluong>='a' && soluong<='z' || soluong>='A' && soluong<='Z'){
                    document.getElementById("soluonger").style.color="red";
				    document.getElementById("soluonger").innerHTML="Vui lòng nhập giá trị số";
                    flag=false;
                }else if(soluong<0){
                    document.getElementById("soluonger").style.color="red";
				    document.getElementById("soluonger").innerHTML="Vui lòng nhập giá trị số dương";
                    flag=false;
                }else if(isso(soluong)==false){
                    document.getElementById("soluonger").style.color="red";
				    document.getElementById("soluonger").innerHTML="Vui lòng không nhập bậy";
                    flag=false;
                }else{
                    document.getElementById("soluonger").innerHTML="";
                } 

                if(hinhct == ''){
                    document.getElementById("fileuploadcter").style.color="red";
				    document.getElementById("fileuploadcter").innerHTML="Vui lòng chọn hình ảnh chi tiết";
                    flag=false;
                }else{
                    document.getElementById("fileuploadcter").innerHTML="";
                }

                if(flag == false){
                    return false;
                }
							
            }
            function isso(so) {
                var pattern = new RegExp(/^[0-9]+$/);
                return pattern.test(so);
		    }
        </script>
    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    
    
    <!-- END Java Script for this page -->

</body>

</html>

<?php 
$sql="SELECT * FROM sanpham";
$sqldem=mysqli_query($con,$sql);
if(isset($_POST['submit'])){
    $a=$_POST['tensanpham'];
    $b=$_POST['theloai'];
    
    $d=$_POST['gia'];
    $e=$_POST['soluong'];
    $op="SELECT * FROM sanpham WHERE Tensp='$a'";
    
    if($quop=mysqli_query($con,$op)){
        $kop=mysqli_num_rows($quop);
        if($kop>0){
            while($rowt=mysqli_fetch_array($quop)){
                $slt=$rowt['soluong']+$e;
                $jkl="UPDATE sanpham set soluong='$slt' WHERE Tensp='$a'";
                $qujkl=mysqli_query($con,$jkl);
            }
            
        }else{
            $error = array();
            $error1 = array();
            $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES['fileupload']['name']);
            $target_file1 = 'images/' . basename($_FILES['fileupload']['name']);
            // Kiểm tra kiểu file hợp lệ
            $type_file = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
            $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');

            if (!in_array(strtolower($type_file), $type_fileAllow)) {
                $error['fileupload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                echo "<script>alert('File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh');</script>";
            }
            
            if (file_exists($target_file)) {
                $error['fileupload'] = "File bạn chọn đã tồn tại trên hệ thống";
                echo "<script>alert('File bạn chọn đã tồn tại trên hệ thống');</script>";
            }
            $target_dirct = "../images/";
            $target_filect = $target_dirct . basename($_FILES['fileuploadct']['name']);
            $target_filect1 = 'images/' . basename($_FILES['fileuploadct']['name']);
            $type_filect = pathinfo($_FILES['fileuploadct']['name'], PATHINFO_EXTENSION);
            $type_fileAllowct = array('png', 'jpg', 'jpeg', 'gif');
            if (!in_array(strtolower($type_filect), $type_fileAllowct)) {
                $error1['fileuploadct'] = "File chi tiết bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                echo "<script>alert('File chi tiết bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh');</script>";
            }
            
            if (file_exists($target_filect)) {
                $error1['fileuploadct'] = "File chi tiết bạn chọn đã tồn tại trên hệ thống";
                echo "<script>alert('File chi tiết bạn chọn đã tồn tại trên hệ thống');</script>";
            }

            $flag=false;
            $flag1=false;

            if (empty($error)) {
                if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                    echo "<script>alert('Bạn đã upload file thành công');</script>";
                    $flag = true;
                }else {
                    echo "<script>alert('File bạn vừa upload gặp sự cố');</script>";
                    $flag = false;
                }
            }

            if (empty($error1)) {
                if (move_uploaded_file($_FILES["fileuploadct"]["tmp_name"], $target_filect)) {
                    echo "<script>alert('Bạn đã upload file chi tiết thành công');</script>";
                    $flag1 = true;
                } else {
                    echo "<script>alert('File chi tiết bạn vừa upload gặp sự cố');</script>";
                    $flag1 = false;
                }
            }

            if($flag==true && $flag1==true){
                $sql1="SELECT * FROM sanpham";
                $sqlquery=mysqli_query($con,$sql1);
                $c=$target_file1;
                $g=$target_filect1;
                while($row=mysqli_fetch_array($sqlquery)){
                    $sql2=mysqli_query($con,"SELECT * FROM sanpham");
                    $rowcount=mysqli_num_rows($sql2);
                    $f=(10002+$rowcount);
                    
                }
                $sqlthem="INSERT INTO sanpham (ID,Loai,Hinh,Tensp,Gia,soluong,Hinh_ct) VALUES ('$f', '$b', '$c','$a','$d','$e','$g')";
                // $sqlthemaction=mysqli_query($con,$sqlthem);
                if (mysqli_query($con, $sqlthem)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                  }
                echo "<script>alert('Thêm sản phẩm thành công');</script>";
            }
        }
    }
    

    
    
}

?>