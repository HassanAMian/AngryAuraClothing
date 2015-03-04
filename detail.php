<?php include("includes/products.php"); 
// REDIRECT TO DETAIL PAGE IF PRODUCT ID IS VALID, OTHERWISE REDIRECT TO SHIRTS
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($shirts[$product_id])) {
		$product = $shirts[$product_id];
	}
}
if (!isset($product)) {
	header("Location: shirts.php");
	exit();
}
$year = date('Y');
$aura = "Angry Aura Clothing";
$section = "shirts";
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
				<div class="shirt-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Size</label>
							</th>
							<td>
								<select name="os0" id="os0">
									<?php foreach($product["sizes"] as $size) { ?>
									<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
									<?php } ?>
								</select>
							</td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
					</form>

					<p class="note-designer">ITEMS NOT ACTUALLY FOR SALE. THIS IS A DEMO SITE.</p>

				</div>
	</div>
</div>
<?php include('includes/footer.php'); ?>
