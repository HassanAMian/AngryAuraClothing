<?php 
$year = date('Y');
$aura = "Angry Aura Clothing";
include('includes/header.php');
 ?> 


		<div class="section banner">

			<div class="wrapper">

			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Our Latest Items</h2>
				<?php include("includes/products.php"); ?>
				<ul class="products">
					<li><a href="detail.php?id=108">
							<img src="img/shirts/shirt-108.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="detail.php?id=107">
							<img src="img/shirts/shirt-107.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="detail.php?id=106">
							<img src="img/shirts/shirt-106.jpg">
							<p>View Details</p>
						</a>
					</li><li>
						<a href="detail.php?id=105">
							<img src="img/shirts/shirt-105.jpg">
							<p>View Details</p>
						</a>
					</li>								
				</ul>

			</div>

		</div>

	</div>
<?php include('includes/footer.php'); ?>
	