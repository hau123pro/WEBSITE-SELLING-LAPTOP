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
    <link href="newcss.css" rel="stylesheet" type="text/css" />
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
        <div id="detailmodal"><div id="detailtail"></div></div>  
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    
                    <!-- end row -->


                    <div class="col-12">
                        
                    </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-money-bill-wave"></i> Bills</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                    <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                            <label>
                                                DAY START:
                                                <input type="date" name="date" id="dateS" size="30"  >
                                                </label>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                            <label>
                                                DAY END: 
                                                <input type="date" name="date" id="dateE"  size="30"  >
                                                <label>
                                            </div>
                                            
                                        </div>
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>    
                                                    <th>ID</th>
                                                    <th>id người mua</th>
                                                    <th>Ngày mua</th>
                                                    <th>Chi tiết</th>
                                                    <th>Status</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Xử lý</th>
                                                    <th>Hủy xử lý</th>
                                                    <th>Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody class="thongtin">
                                            <?php 
                                                $us="SELECT * FROM hoa_don";
                                                $quer=mysqli_query($con,$us);
                                                while($rows=mysqli_fetch_array($quer)){
                                                    $time=explode("/",$rows['ngaymua']);
                                            ?>
                                            <tr>
                                            <td><?php echo $rows['id_hd']; ?></td>
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $time[0]; ?></td>
                                            <td><button id="<?php echo $rows['id_hd']; ?>"><i class="fas fa-info-circle"></i></button></td>
                                            <?php if($rows['statuss']=='Process') { ?>
                                            <td style='color:green' id="<?php echo $rows['id_hd'].'statuss'; ?>" data-value="<?php echo $rows['statuss']; ?>"><?php echo $rows['statuss']; ?></td>
                                            <?php }else { ?>
                                                <td style='color:red' id="<?php echo $rows['id_hd'].'statuss'; ?>" data-value="<?php echo $rows['statuss']; ?>"><?php echo $rows['statuss']; ?></td>
                                            <?php } ?>   
                                            <td><?php echo $rows['tongtien']; ?></td>   
                                            <td style='color:blue;cursor:pointer' id="<?php echo $rows['id_hd'].'xl'; ?>">Xử lý</td>
                                            <td style='color:blue;cursor:pointer'id="<?php echo $rows['id_hd'].'hxl'; ?>">Hủy xử lý</td>
                                            <td><a href="xoabill.php?idxoa=<?php echo $rows['id_hd']; ?>" onclick="return confirm('Are you sure you want to delete this product?');"><i class="fas fa-trash-alt"></i>Xóa</a></td>
                                             <script>
                                                 document.getElementById('<?php echo $rows['id_hd']; ?>').addEventListener("click",function(){ hienct('<?php echo $rows['id_hd']; ?>') });
                                                 document.getElementById('<?php echo $rows['id_hd'].'xl'; ?>').addEventListener("click",function(){ xuly('<?php echo $rows['id_hd']; ?>') });
                                                 document.getElementById('<?php echo $rows['id_hd'].'hxl'; ?>').addEventListener("click",function(){ huyxuly('<?php echo $rows['id_hd']; ?>') });
                                                 document.getElementById('dateS').onchange= function (){
                                                    var ds=document.getElementById('dateS').value;
                                                    var de=document.getElementById('dateE').value;
                                                    $.ajax({
                                                                type:"POST",
                                                                url:'datehoadon.php',
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
                                                                url:'datehoadon.php',
                                                                data:  { 
                                                                    dS : ds,
                                                                    dE : de
                                                                },
                                                                success: function(data){
                                                                    $('.thongtin').html(data);
                                                                }
                                                            });
                                                }
                                                 function hienct(a){
                                                    $.ajax({
                                                        type:"POST",
                                                        url:'chitietbill.php',
                                                        data:  { idc : a },
                                                        success: function(data){
                                                            document.getElementById('detailtail').innerHTML=data;
                                                            document.getElementById('detailmodal').style.display='block';
                                                        }
                                                    });
                                                 }
                                                 function closedetail() {
                                                    document.getElementById('detailmodal').style.display='none';
                                                }
                                                function xuly(a){
                                                    var k=a+"statuss";
                                                    var status=document.getElementById(k).getAttribute('data-value');
                                                        if(status=='Not Process'){
                                                            $.ajax({
                                                                type:"POST",
                                                                url:'xulybill.php',
                                                                data:  { idc : a },
                                                                success: function(){
                                                                    document.getElementById(k).innerHTML="Process";
                                                                    document.getElementById(k).style.color='green';
                                                                    document.getElementById(k).setAttribute('data-value','Process');
                                                                }
                                                            });
                                                        }
                                                }
                                                function huyxuly(a){
                                                    var k=a+"statuss";
                                                    var status=document.getElementById(k).getAttribute('data-value');
                                                        if(status=='Process'){
                                                            $.ajax({
                                                                type:"POST",
                                                                url:'huyxulibill.php',
                                                                data:  { idc : a },
                                                                success: function(){
                                                                    document.getElementById(k).innerHTML="Not Process";
                                                                    document.getElementById(k).style.color='red';
                                                                    document.getElementById(k).setAttribute('data-value','Not Process');
                                                                }
                                                            });
                                                        }
                                                }
                                             </script>       
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
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