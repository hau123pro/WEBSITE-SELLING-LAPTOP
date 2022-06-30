<?php

include('pages/connect.php'); 
if(isset($_GET['brand'])){
$_SESSION['brr']=$_GET['brand'];
$br=$_GET['brand'];
$limit = 9;
$sql = "SELECT COUNT(ID) FROM sanpham WHERE '$br'=Loai";  
$rs_result = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit); 
?>

<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">OUR PRODUCTS</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>

	<div id="target-contentdm">loading...</div>
    
</div>

<div class="clearfix" style="text-align:center">
               
	<ul class="pagination">
        <?php 
			if(!empty($total_pages)){
				for($i=1; $i<=$total_pages; $i++){
					if($i == 1){
		?>
		<li class="pageitem active" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i;?>"  class="page-link" ><?php echo $i;?></a></li>
															
			<?php 
					}
					else{
			?>
		<li class="pageitem" id="<?php echo $i;?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i;?>" ><?php echo $i;?></a></li>
			<?php
					}
				}
			}
			?>
			
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

<?php } ?>

<script>
    
</script>