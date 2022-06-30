<?php
include('connect.php');
$limit = 9;  
if(isset($_POST['data'])&& $_POST['data']!=''){

$a=$_POST['data'];
$sql = "SELECT * FROM sanpham WHERE Tensp LIKE '%$a%' or ID like '%$a%' LIMIT 0, $limit";  
$rs_result = mysqli_query($con, $sql);  
$num_rows = mysqli_num_rows($rs_result);
if($num_rows>0){
?>

<div class="row">
		<div class="chitiet" id="ct" style="background-color: white;"></div>
        <div class="chitiet2" id="thongso"></div>
        <?php while ($row = mysqli_fetch_array($rs_result)){ ?>
        <form method="POST" action="pages/themgiohang.php?ID=<?php echo $row['ID']; ?>">
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
							<span class="new" id="<?php echo $row['ID']; ?>">Purchase</span>
							<span class="new" id="<?php echo $row['ID'].'ct'; ?>"><i class="fa fa-link"></i> Details</span>

							<script>
								document.getElementById("<?php echo $row['ID']; ?>").addEventListener("click",function(){ themcart(<?php echo $row['ID']; ?>) });
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
										type:"POST",
										url:'pages/Chitiet.php',
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
				<div class="product-details" style="height:120px">
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
<?php } else{
	?>
	<div>KHÔNG CÓ SẢN PHẨM NÀO</div>
	<?php
} 
}?>