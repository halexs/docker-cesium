<html>
	<head>
		<title>My Shop</title>
	</head>
	<body>
		<h1>Welcome to my shop</h1>
		<u1>
			<?php
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);

				$products = $obj->products;
				foreach ($products as $product) {
					# code...
					echo "<li>$product</li>";
				}

			?>
		</u1>
	</body>
</html>