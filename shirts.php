<?php
$year = date('Y');
$aura = "Angry Aura Clothing";
$section = "shirts";
include('includes/header.php');
?> 

	<div class="section shirts page">
	<div class="wrapper">
		<h1>Our Selection of Shirts</h1>
		<?php include("includes/products.php"); ?>
		<ul class="products">
			<?php foreach($shirts as $product_id => $shirt) {
			echo "<li>"; 
			echo '<a href="detail.php?id=' . $product_id . '">';
			echo '<img src="' . $shirt["img"] . '" alt="' . $shirt["name"] .'">';
			echo "</a>";
			echo "<p>View Details</p>"; 
			echo "</li>";
			 } ?>
		</ul>
	</div>
</div>
<?php include('includes/footer.php'); ?>