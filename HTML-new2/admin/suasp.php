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
                        <!-- <li class="submenu">
                            <a href="users.html">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="blog.html">
                                <i class="fas fa-file-alt"></i>
                                <span> Blog </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="mail-all.html">
                                <span class="label radius-circle bg-danger float-right">18</span>
                                <i class="fas fa-envelope"></i>
                                <span> Mailbox </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Slider </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="charts.html">
                                <i class="fas fa-chart-line"></i>
                                <span> Charts </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-laptop"></i>
                                <span> User Interface </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips and Popovers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fab fa-wpforms"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="forms-general.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="forms-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Form Validation</a>
                                </li>
                                <li>
                                    <a href="forms-text-editor.html">Text Editors</a>
                                </li>
                                <li>
                                    <a href="forms-upload.html">Multiple File Upload</a>
                                </li>
                                <li>
                                    <a href="forms-datetime-picker.html">Date and Time Picker</a>
                                </li>
                                <li>
                                    <a href="forms-color-picker.html">Color Picker</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-file-image"></i>
                                <span> Multimedia </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="media-fancybox.html">
                                        <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                                </li>
                                <li>
                                    <a href="media-masonry.html">Masonry</a>
                                </li>
                                <li>
                                    <a href="media-lightbox.html">Lightbox</a>
                                </li>
                                <li>
                                    <a href="media-owl-carousel.html">Owl Carousel</a>
                                </li>
                                <li>
                                    <a href="media-image-magnifier.html">Image Magnifier</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-star"></i>
                                <span> Plugins </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="star-rating.html">Star Rating</a>
                                </li>
                                <li>
                                    <a href="range-sliders.html">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="tree-view.html">Tree View</a>
                                </li>
                                <li>
                                    <a href="sweetalert.html">SweetAlert</a>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="counter-up.html">Counter-Up</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="far fa-copy"></i>
                                <span> Example Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="page-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="page-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="page-blank.html">Blank Page</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <span class="label radius-circle bg-primary float-right">9</span>
                                <i class="fas fa-indent"></i>
                                <span> Menu Levels </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>Second Level</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#">
                                        <span>Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <li class="submenu">
                                <a class="pro" href="pro.html">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span> PRO Version </span>
                                </a>
                            </li>

                            <li class="submenu">
                                <a target="_blank" href="https://nura24.com">
                                    <i class="fas fa-th"></i>
                                    <span> Nura24 Free Suite </span>
                                </a>
                            </li> -->

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
                   
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-apple-alt"></i> Product detail</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <?php 
                                        if(isset($_GET['idsua'])){
                                        ?>
                                        <form action="suasp.php?idsua=<?php echo $_GET['idsua'] ?>" method="POST" enctype="multipart/form-data" name="formsua" onsubmit="return check()">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                        
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Loại</th>
                                                    <th>Hinh</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Hình chi tiết</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <?php 
                                            
                                                $idsua=$_GET['idsua'];
                                                $sp="SELECT * FROM sanpham WHERE ID='$idsua' UNION ALL SELECT 1,2,3,4,5,6";
                                                $query=mysqli_query($con,$sp);
                                                while($row=mysqli_fetch_array($query)){
                                                   $_SESSION['img']=$row['Hinh'];
                                                   $_SESSION['imgct']=$row['Hinh_ct'];
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $row['ID']; ?></td>
                                                <td>
                                                    <select name="theloai">
                                                        <option value="<?php echo $row['Loai']; ?>"><?php echo $row['Loai']; ?></option>
                                                        <option value="asus">Asus</option>
                                                        <option value="acer">Acer</option>
                                                        <option value="dell">Dell</option>
                                                        <option value="apple">Apple</option>
                                                    </select>
                                                </td>
                                                <td><input type="file" name="fileupload" value="<?php echo "../".$row['Hinh']; ?>"></td>
                                                <td><input type="text" name="tensanpham"  value="<?php echo $row['Tensp']; ?>"></td>
                                                <td><input type="text" name="gia" value="<?php echo $row['Gia']; ?>"></td>
                                                <td><input type="text" name="soluong" value="<?php echo $row['soluong']; ?>"></td>
                                                <td><input type="file" name="fileuploadct" value="<?php echo "../".$row['Hinh']; ?>"></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="8"><input type="submit" name="submit" value="Sửa sản phẩm"></td>
                                            </tr>
                                            <?php } } ?>
                                        </table>
                                        </form>
                                        <form method="POST" action="suasp.php?idsua=<?php echo $_GET['idsua'] ?>">
                                            <table border="1">
                                                <tr>
                                                    <td>Bỏ hình(trong file images)</td>
                                                    <td><input type="file" name="bohinh"></td>
                                                    <td><input type="submit" name="bo" value="Delete"></td>
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
                Powered by <a target="_blank" href="#" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>
        <script>
           
            function check(){
                var gia=document.forms["formsua"]["gia"].value;
                var soluong=document.forms["formsua"]["soluong"].value;
                var ten=document.forms["formsua"]["tensanpham"].value;
               
                var flag=true;
                if(ten==''){
                    alert("Nhập tên sản phẩm");
                    flag=false; 
                }
                
                if(gia==''){
                    alert("Nhập giá");
                    flag=false;
                }else if(gia>='a' && gia<='z' || gia>='A' && gia<='Z'){
                    alert("Giá tiền phải là số");
                    flag=false;
                }else if(isso(gia)==false){
                    alert("Giá tiền phải là số");
                    flag=false;
                }

                if(soluong==''){
                    alert("Nhập số lượng");
                    flag=false;
                }else if(soluong>='a' && soluong<='z' || soluong>='A' && soluong<='Z'){
                    alert("Số lượng phải là số");
                    flag=false;
                }else if(isso(soluong)==false){
                    alert("Số lương phải là số");
                    flag=false;
                }

                if(flag==false){
                    return false;
                }
            }

            function isso(so) {
                var pattern = new RegExp(/^[0-9]+$/);
                return pattern.test(so);
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
    
    <!-- END Java Script for this page -->

</body>

</html>

<?php

if(isset($_POST['submit'])){
    $a=$_POST['theloai'];
    $b=$_POST['tensanpham'];
    $c=$_POST['gia'];
    $d=$_POST['soluong'];
    $idsua=$_GET['idsua'];
    $error = array();
    $flag=false;
    $flag1=false;
           
    if(basename($_FILES['fileupload']['name'])=='' && basename($_FILES['fileuploadct']['name'])==''){
        $target_file1=  $_SESSION['img'];
        $target_filect1 = $_SESSION['imgct'];
        $sqlthem="UPDATE sanpham SET Loai='$a',Tensp='$b',Gia='$c',soluong='$d' WHERE ID='$idsua'";
        $sqlthemaction=mysqli_query($con,$sqlthem);
        echo "<script>alert('Success');</script>"; 
        
    }else if(basename($_FILES['fileupload']['name'])=='' && basename($_FILES['fileuploadct']['name'])!=''){

        $target_dirct = "../images/";
        $target_filect = $target_dirct . basename($_FILES['fileuploadct']['name']);
        $target_filect1 = "images/" . basename($_FILES['fileuploadct']['name']);

        $type_filect = pathinfo($_FILES['fileuploadct']['name'], PATHINFO_EXTENSION);
        $type_fileAllowct = array('png', 'jpg', 'jpeg', 'gif');

        if (!in_array(strtolower($type_filect), $type_fileAllowct)) {
            $error['fileupload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        }
        
        if (empty($error)) {
            if (move_uploaded_file($_FILES["fileuploadct"]["tmp_name"], $target_filect)) {
                // echo "Bạn đã upload file thành công";
                $flag1 = true;
            } else {
                echo "File chi tiết bạn vừa upload gặp sự cố";
            }
        }

        if($flag1==true){
            $sqlthem="UPDATE sanpham SET Loai='$a',Tensp='$b',Gia='$c',soluong='$d',Hinh_ct='$target_filect1' WHERE ID='$idsua'";
            $sqlthemaction=mysqli_query($con,$sqlthem);
            echo "<script>alert('Success');</script>"; 
        }
        

    }else if(basename($_FILES['fileupload']['name'])!='' && basename($_FILES['fileuploadct']['name'])==''){
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES['fileupload']['name']);
        $target_file1 = "images/" . basename($_FILES['fileupload']['name']);

        $type_file = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
        $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');

        if (!in_array(strtolower($type_file), $type_fileAllow)) {
            $error['fileupload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        }

        if (empty($error)) {
            if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                // echo "Bạn đã upload file thành công";
                $flag=true;
                
            } else {
                echo "File bạn vừa upload gặp sự cố";
            }
        }

        if($flag==true){
            $sqlthem="UPDATE sanpham SET Loai='$a',Hinh='$target_file1',Tensp='$b',Gia='$c',soluong='$d' WHERE ID='$idsua'";
            $sqlthemaction=mysqli_query($con,$sqlthem);
            echo "<script>alert('Success');</script>"; 
        }
    }else{
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES['fileupload']['name']);
        $target_file1 = "images/" . basename($_FILES['fileupload']['name']);

        $target_dirct = "../images/";
        $target_filect = $target_dirct . basename($_FILES['fileuploadct']['name']);
        $target_filect1 = "images/" . basename($_FILES['fileuploadct']['name']);

        $type_file = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
        $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
    
        $type_filect = pathinfo($_FILES['fileuploadct']['name'], PATHINFO_EXTENSION);
        $type_fileAllowct = array('png', 'jpg', 'jpeg', 'gif');
    
        if (!in_array(strtolower($type_file), $type_fileAllow)) {
            $error['fileupload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        }
    
        if (!in_array(strtolower($type_filect), $type_fileAllowct)) {
            $error['fileupload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        }
        
        if (empty($error)) {
            if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                // echo "Bạn đã upload file thành công";
                $flag=true;
                
            } else {
                echo "File bạn vừa upload gặp sự cố";
            }
        }
    
        if (empty($error)) {
            if (move_uploaded_file($_FILES["fileuploadct"]["tmp_name"], $target_filect)) {
                // echo "Bạn đã upload file thành công";
                $flag1 = true;
            } else {
                echo "File chi tiết bạn vừa upload gặp sự cố";
            }
        }
    
        if($flag==true && $flag1==true){
            $sqlthem="UPDATE sanpham SET Loai='$a',Hinh='$target_file1',Tensp='$b',Gia='$c',soluong='$d',Hinh_ct='$target_filect1' WHERE ID='$idsua'";
            $sqlthemaction=mysqli_query($con,$sqlthem);
            echo "<script>alert('Success');</script>"; 
            echo "<script>location.reload();</script>";
        }
    }

   
}

?>

<?php 
if(isset($_POST['bo'])){
    $hj="../images/";
    $vkl=$hj.$_POST['bohinh'];
    if(file_exists($vkl)){
        unlink($vkl);
    }else{
        echo "<script>alert('file bạn chọn không tồn tại');</script>";
    }
}


?>

