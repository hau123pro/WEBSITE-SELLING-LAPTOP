<?php 
session_start();
include("connect.php");
if(isset($_SESSION['sorting'])){
    unset($_SESSION['sorting']);
}
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');} 
    $dataPoints = array(
        array("label"=> "Dell", "y"=> 0),
        array("label"=> "Asus", "y"=> 0),
        array("label"=> "Acer", "y"=> 0),
        array("label"=> "Apple", "y"=> 0),
        array("label"=> "All", "y"=> 0)
    );
    $dataPoints2 = array(
        array("label"=> "masp", "y"=> 0),
        
    );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ISTORE - Dashboard</title>
    <meta name="description" content="Dashboard | ISTORE">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="newcss.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
    <style>
    a.animated-button.thar-three {
	color: black;
	cursor: pointer;
	display: block;
	position: relative;
	border: 2px solid #F7CA18;
	transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
    0s;
    }
    a.animated-button.thar-three:hover {
        color: #000 !important;
        background-color: transparent;
        text-shadow: nthree;
    }
    a.animated-button.thar-three:hover:before {
        left: 0%;
        right: auto;
        width: 100%;
    }
    a.animated-button.thar-three:before {
        display: block;
        position: absolute;
        top: 0px;
        right: 0px;
        height: 100%;
        width: 0px;
        z-index: -1;
        content: '';
        color: #000 !important;
        background: #F7CA18;
        transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
    0s;
    }
    
    </style>
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


                        
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-money-bill-wave"></i> Thống Kê</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>
                                
                                <div class="card-body" >
                                <div class="row" id="ande">
                                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3" style="margin:auto;cursor:pointer" id="hang">
                                        <div class="card-box noradius noborder bg-danger">
                                            <i class="far fa-user float-right text-white"></i>
                                            <h6 class="text-white text-uppercase m-b-20">Theo Hãng</h6>
                                            <h1 class="m-b-20 text-white counter">---</h1>
                                            <span class="text-white">About Days</span>
                                        </div>
                                    </div>

                                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3" style="margin:auto;cursor:pointer" id="sp">
                                            <div class="card-box noradius noborder bg-purple">
                                                <i class="fas fa-download float-right text-white"></i>
                                                <h6 class="text-white text-uppercase m-b-20">Theo Sản Phẩm</h6>
                                                <h1 class="m-b-20 text-white counter">---</h1>
                                                <span class="text-white">About Days</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3" style="margin:auto;cursor:pointer" id="spbc">
                                            <div class="card-box noradius noborder bg-purple">
                                                <i class="fas fa-download float-right text-white"></i>
                                                <h6 class="text-white text-uppercase m-b-20">Theo bán chạy</h6>
                                                <h1 class="m-b-20 text-white counter">---</h1>
                                                <span class="text-white">About Days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" id="date" style="display:none;overflow: hidden;">
                                    <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            <label style="margin-left:150px">
                                                DAY START:
                                                <input type="date" name="date" id="dateSc" size="30"  >
                                                </label>
                                                <label style="margin-left:80px;font-size:30px">
                                                <label>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                            <label style="margin-left:170px">
                                                DAY END: 
                                                <input type="date" name="date" id="dateEc"  size="30"  >
                                                </label>
                                                <label style="margin-left:80px;font-size:30px">
                                                <a href="thongke.php" class=""><i class="fas fa-chevron-left"></i></a> 
                                                <label>
                                            </div>
                                            
                                        </div>
                                        </div>
                                        <div class="table-responsive" id="datebc" style="display:none;overflow: hidden;">
                                    <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            <label style="margin-left:150px">
                                                DAY START:
                                                <input type="date" name="date" id="dateSbc" size="30"  >
                                                </label>
                                                <label style="margin-left:80px;font-size:30px">
                                                <label>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                            <label style="margin-left:170px">
                                                DAY END: 
                                                <input type="date" name="date" id="dateEbc"  size="30"  >
                                                </label>
                                                <label style="margin-left:80px;font-size:30px">
                                                <a href="thongke.php" class=""><i class="fas fa-chevron-left"></i></a> 
                                                <label>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    
                                    <div class="table-responsive" id="tksp" style="display:none">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-2">
                                                <label >
                                                    DAY START:
                                                    <input type="date" name="date" id="dateS" size="30"  >
                                                </label>
                                            </div>
                                            <div class="col-sm-12 col-md-2">
                                                <label>
                                                    DAY END: 
                                                    <input type="date" name="date" id="dateE"  size="30"  >
                                                    </label>
                                                    
                                                <label>
                                            </div> 
                                    </div>
                                        <table id="dataTable" class="table table-bordered table-hover display dataTable" style="width:100%">
                                            <thead>
                                                <tr>    
                                                <th class="sorting" id='ID'  aria-sort="ascending" style="width: 59px;">ID</th>
                                                <th class="sorting" id='ten'  aria-sort="ascending" >Name</th>
                                                <th class="sorting" id='loai' aria-sort="ascending" style="width: 130px;">Company</th>
                                                <th class="sorting" id='sl' aria-sort="ascending" style="width: 130px;">Amount</th>
                                                <th class="sorting" id='tong' aria-sort="ascending" >Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="thongtin">
                                            </tbody>
                                        </table>
                                        <script>
                                        
                                             document.getElementById('hang').onclick=function (){
                                                document.getElementById('ande').style.display='none';
                                                document.getElementById('date').style.display='block';
                                                var chart = new CanvasJS.Chart("chartContainer", {
                                                    animationEnabled: true,
                                                    theme: "light2", // "light1", "light2", "dark1", "dark2"
                                                    title: {
                                                        text: "ToTal Price"
                                                    },
                                                    axisY: {
                                                        title: "Revenue"
                                                    },
                                                    data: [{
                                                        type: "column",
                                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                                    }]
                                                });
                                                chart.render();
                                             }
                                             document.getElementById('spbc').onclick=function (){
                                                document.getElementById('ande').style.display='none';
                                                document.getElementById('datebc').style.display='block';
                                                var chart = new CanvasJS.Chart("chartContainer", {
                                                    animationEnabled: true,
                                                    theme: "light2", // "light1", "light2", "dark1", "dark2"
                                                    title: {
                                                        text: "ToTal Price"
                                                    },
                                                    axisY: {
                                                        title: "Revenue"
                                                    },
                                                    data: [{
                                                        type: "column",
                                                        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                                                    }]
                                                });
                                                chart.render();
                                             }
                                             document.getElementById('sp').onclick=function (){
                                                document.getElementById('tksp').style.display='block';
                                                document.getElementById('ande').style.display='none';
                                                document.getElementById('chartContainer').style.display='none';
                                             }
                                                document.getElementById('dateS').onchange= function (){
                                                    var ds=document.getElementById('dateS').value;
                                                    var de=document.getElementById('dateE').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'xulythongke.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('.thongtin').html(data);
                                                                }
                                                            });
                                                }
                                                document.getElementById('dateE').onchange= function (){
                                                    var ds=document.getElementById('dateS').value;
                                                    var de=document.getElementById('dateE').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'xulythongke.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('.thongtin').html(data);
                                                                }
                                                            });
                                                            
                                                }
                                                document.getElementById('dateSc').onchange= function (){
                                                    var ds=document.getElementById('dateSc').value;
                                                    var de=document.getElementById('dateEc').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'xulytkchart.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('#chartContainer').html(data);
                                                                }
                                                            });
                                                }
                                                document.getElementById('dateEc').onchange= function (){
                                                    var ds=document.getElementById('dateSc').value;
                                                    var de=document.getElementById('dateEc').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'xulytkchart.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('#chartContainer').html(data);
                                                                }
                                                            });
                                                            
                                                }
                                                document.getElementById('dateSbc').onchange= function (){
                                                    var ds=document.getElementById('dateSbc').value;
                                                    var de=document.getElementById('dateEbc').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'spbanchaytime.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('#chartContainer').html(data);
                                                                }
                                                            });
                                                }
                                                document.getElementById('dateEbc').onchange= function (){
                                                    var ds=document.getElementById('dateSbc').value;
                                                    var de=document.getElementById('dateEbc').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'spbanchaytime.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('#chartContainer').html(data);
                                                                }
                                                            });
                                                            
                                                }
                                                document.getElementById("ID").addEventListener("click",function(){ sapxep('ID') });
                                                document.getElementById("ten").addEventListener("click",function(){ sapxep('ten') });
                                                document.getElementById("loai").addEventListener("click",function(){ sapxep('loai') });
                                                document.getElementById("sl").addEventListener("click",function(){ sapxep('sl') });
                                                document.getElementById("tong").addEventListener("click",function(){ sapxep('tong') });
                                                function sapxep(a){
                                                    var test=document.getElementById(a);
                                                    var ds=document.getElementById('dateS').value;
                                                    var de=document.getElementById('dateE').value;
                                                    var b='';
                                                    if(test.classList.contains('sorting_asc'))
                                                    {
                                                        test.classList.remove('sorting_asc');
                                                        test.classList.add('sorting_desc');
                                                        b='desc';
                                                    }
                                                    else if(test.classList.contains('sorting_desc'))
                                                    {
                                                        test.classList.remove('sorting_desc');
                                                        test.classList.add('sorting_asc');
                                                        b='asc';
                                                    }
                                                    else if(test.classList.contains('sorting'))
                                                    {
                                                        test.classList.remove('sorting');
                                                        test.classList.add('sorting_asc');
                                                        b='asc';
                                                    }
                                                    if(a!='ID')
                                                    {
                                                        document.getElementById("ID").className='';
                                                        document.getElementById("ID").classList.add('sorting');
                                                    }
                                                    if(a!='ten')
                                                    {
                                                        document.getElementById("ten").className='';
                                                        document.getElementById("ten").classList.add('sorting');
                                                    }
                                                    if(a!='sl')
                                                    {
                                                        document.getElementById("sl").className='';
                                                        document.getElementById("sl").classList.add('sorting');
                                                    }
                                                    if(a!='loai')
                                                    {
                                                        document.getElementById("loai").className='';
                                                        document.getElementById("loai").classList.add('sorting');
                                                    }
                                                    if(a!='tong')
                                                    {
                                                        document.getElementById("tong").className='';
                                                        document.getElementById("tong").classList.add('sorting');
                                                    }
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'xulythongke.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de,
                                                                    type : a,
                                                                    sort : b
                                                                },
                                                                success: function(data){
                                                                    $('.thongtin').html(data);
                                                                }
                                                            });

                                                }    
                                            </script>
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                   

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
    <script src="assets/data/data_charts_dashboard.js"></script>
    
    <!-- END Java Script for this page -->

</body>

</html>