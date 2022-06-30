<?php
session_start();

?>
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
                        <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
                             Shop
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>