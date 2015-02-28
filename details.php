<?php include("includes/products.php"); 
$product_id = $_GET["id"];
$product = $pants[$product_id];
$year = date('Y');
$aura = "Angry Aura Clothing";
$section = "details";
include('includes/header.php');
?> 

<div class="section shirts page">
	<div class="wrapper">
		<div class="center"><?php echo $product["name"]; ?></div>
				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>
	</div>
</div>
<?php include('includes/footer.php'); ?>