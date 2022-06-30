




<?php 
include("pages/connect.php");
$sql="SELECT * FROM sanpham limit 9";
$sqlquery=mysqli_query($con,$sql);
 
if(isset($_GET['trang'])){
    $page=$_GET['trang'];
}else{
    $page='';
}

if($page=='' || $page==1){
    $begin=0;
}else{
    $begin=($page*9)-9;
}

$sql="SELECT * FROM sanpham LIMIT $begin,9";
$sqlquery=mysqli_query($con,$sql);
$l=-1;
$l++;

?>
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">OUR PRODUCTS</h1>
			<form>

			</form>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>

	<div class="row">
        <?php while($row=mysqli_fetch_array($sqlquery)){ ?>
        <form method="POST" action="pages/themgiohang.php?idsanpham=<?php echo $row['idsanpham']; ?>">
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3><?php echo $row['tensanpham'] ?></h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
                        <!-- <i class="fa fa-shopping-cart"></i> -->
                            <input type="submit" name="themgiohang" value="Purchase">
							<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
						</p>
					</div>
					<span class="maxproduct"><img src="<?php echo $row['img'] ?>" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<p><?php echo $row['tensanpham']; ?></p>
					</a>
					<span class="price">
					<span class="edd_price"><?php echo number_format($row['gia'],0,",",".")."VNĐ"; ?></span>
					</span>
				</div>
			</div>
		</div>
		</form>
        <?php } ?>
        
	</div>
    
</div>
</div>
<div class="panigtion" style="text-align:center">
            <?php 
            $sqltrang=mysqli_query($con,"SELECT * FROM sanpham");
            $rowcount=mysqli_num_rows($sqltrang);
            $trang=ceil($rowcount/9);
            
            ?>
                <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                    <?php 
                    for($i=1;$i<=$trang;$i++){

                    
                    ?>
                    <li><a href="shop.php?trang=<?php echo $i; ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>

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