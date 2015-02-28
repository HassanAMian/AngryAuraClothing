<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Angry Aura Clothing Pants Shirts">
	<meta name="author" content="Hassan Mian">

	<title><?php echo $aura; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./"><?php echo $aura; ?></a></h1>
			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="shirts <?php if ($section == "pants") { echo "on"; } ?>"><a href="pants.php">Pants</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact Us</a></li>
				<li class="cart"><a href="#">Shopping Cart</a></li>
			</ul>
		</div>
	</div>
	<div id="content">