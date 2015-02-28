<?php 
$year = date('Y');
$aura = "Angry Aura Clothing";
$section = "pants";

include('includes/header.php');
 ?> 

<div class="section shirts page">

	<div class="wrapper">
		<h1>Our Selection of Pants</h1>
		<?php include("includes/products.php"); ?>
		<ul class="products">
			<?php foreach($pants as $product_id => $pant) {
			echo "<li>";
			echo '<a href="details.php?id=' . $product_id . '">';
			echo '<img src="' . $pant["img"] . '" alt="' . $pant["name"] . '">';
			echo "</a>";
			echo "<p>View Details</p>"; 
			echo "</li>";
			 } ?>
		</ul>
	</div>
</div>
<?php include('includes/footer.php'); ?>