<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Add new item</h1>
	<form method="POST" action="">
		Product Name:<input type="text" name="productName"></input><br>
		Description: <input type="text" name="description"></input><br>
		Type: <input type="text" name="type"></input><br>
		Price: <input type="text" name="price"></input><br>
		Image (url): <input type="text" name="image"></input><br>
		<input type="submit" name="add_item" value="Add Item"></input>
		<input type="submit" name="cancel" value="Cancel"></input>
	</form>

	<?php
		if(isset($_POST['add_item'])){
			require_once('connection.php');
			
			$name = $_POST['productName']; 
			$description = $_POST['description'];
			$price = $_POST['price'];
			$image = $_POST['image'];
			$category = $_POST['type'];
			
			$sql = "INSERT INTO items (productName, description, type, price, img)
					VALUES ('$name', '$description', '$category', '$price', '$image')";

			$result = mysqli_query($conn,$sql);

			if($result)
			header('location:shop.php');


		}
			if(isset($_POST['cancel'])){
				header('location:shop.php');
			}

		

		
	?>

</body>
</html>