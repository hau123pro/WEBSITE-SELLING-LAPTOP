<?php
include('connect.php');
$limit = 9;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  

$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM sanpham LIMIT $start_from, $limit";  
$rs_result = mysqli_query($con, $sql);  
?>

<div class="row">
<div class="chitiet" id="ct" style="background-color: white;"></div>
        <div class="chitiet2" id="thongso"></div>
        <?php while ($row = mysqli_fetch_array($rs_result)){ 
			$_SESSION['sanpham']=array();
			array_push($_SESSION['sanpham'],$row['ID'],$row['Loai'],$row['Hinh'],$row['Tensp'],$row['Gia'],$row['soluong'],$row['Hinh_ct']);
			
		?>
        <form method="POST" action="pages/themgiohang.php?ID=<?php echo $row['ID']; ?>">
			<!-- <input type="text" name="ID" value="<?php echo $row['ID']; ?>" style="display:none"> -->
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3><?php echo $row['Tensp'] ?></h3>
						<p>
							 This is a short excerpt to generally describe what the item is about.
						</p>
						<p>
                        <!-- <i class="fa fa-shopping-cart"></i> -->
						<span class="new" id="<?php echo $row['ID'].'them'; ?>">Purchase</span>
							<span class="new" id="<?php echo $row['ID'].'ct'; ?>"><i class="fa fa-link"></i> Details</span>
							<script>
								document.getElementById("<?php echo $row['ID'].'them'; ?>").addEventListener("click",function(){ themcart('<?php echo $row['ID']; ?>') });
								document.getElementById("<?php echo $row['ID'].'ct'; ?>").addEventListener("click",function(){ chitiet('<?php echo $row['ID']; ?>') });
								function themcart(a){
									<?php if($row['soluong']>0){ ?>
									$.ajax({
										type:"POST",
										url:'pages/themgiohang2.php',
										data:  { ID : a },
										success: function(){
											alert("Thêm thành công");

										}
									});
									<?php }else { ?>
									alert("Đã Hết Sản Phẩm")
									<?php } ?>
								}
								function chitiet(a){
									$.ajax({
										type:"GET",
										url:'pages/Chitiet.php?id=<?php echo $row['ID']; ?>',
										data:  { ID : a },
										success: function(data){
											$(".chitiet").html(data);
											document.getElementById("ct").style.display='block';
										}
									});
								}
							</script>
						</p>
					</div>
					<span class="maxproduct"><img src="<?php echo $row['Hinh'] ?>" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<p><?php echo $row['Tensp']; ?></p>
					</a>
					<span class="price">
					<span class="edd_price"><?php echo number_format($row['Gia'],0,",",".")."VNĐ"; ?></span>
					</span>
				</div>
			</div>
		</div>
		</form>
        <?php } ?>
        
</div> 

<script>
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});



</script>