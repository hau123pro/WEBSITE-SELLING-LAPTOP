<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='js/javascript.js' type='text/javascript'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/newcss.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">

</head>
<body>

<!-- HEADER =============================-->
<?php 
include("pages/headershop.php");
include("pages/contentshop.php");
include("pages/footershop.php");

?>
		
	

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  


	$(document).ready(function() {
		
		$("#target-content").load("pages/pagination.php?page=1");		
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			
			$.ajax({
				url: "pages/pagination.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#target-content").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });

	$(document).ready(function() {
		$("#target-contentdm").load("pages/paginationdm.php?page=1");
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
            
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "pages/paginationdm.php",
				type: "GET",
				data: {
					page : id
					
				},
				cache: false,
				success: function(dataResult){
					$("#target-contentdm").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
    });
</script>
</body>
</html>