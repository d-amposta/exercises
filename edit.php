<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<?php
		

		require_once('connection.php');

		$id=$_GET['id'];
		if(isset($_POST['edit'])){

		$name= $_POST['productName'];
		$description = $_POST['description'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$image = $_POST['image'];

		$sql = "UPDATE items SET productName = '$name', description = '$description', type = '$type', price = '$price', img = '$image' WHERE id='$id'";

		mysqli_query($conn, $sql);
		header('location:shop.php');
		}

		$sql = "SELECT * FROM items WHERE id= '$id'";
		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result)){
			$name = $row['productName']; 
			$description = $row['description'];
			$price = $row['price'];
			$image = $row['img'];
			$category = $row['type'];
		echo "<form method='POST'>
			Name:<input type='text' name='productName' value='$name'></input><br>
			Description:<input type='text' name='description' value='$description'></input><br>
			Category:<input type='text' name='type' value='$category'></input><br>
			Price:<input type='text' name='price' value='$price'></input><br>
			Image (url):<input type='text' name='image' value='$image'></input><br><br>
			<input type='submit' name='edit' value=''>
		</form>";
	}

	
	?>

	



		

</body>
</html>