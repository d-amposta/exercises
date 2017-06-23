<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once('connection.php');

		$id = $_GET['id'];

		$sql = "SELECT * FROM items WHERE id=$id";

		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result)){
			$name = $row['productName']; 
			$description = $row['description'];
			$price = $row['price'];
			$image = $row['img'];
			$category = $row['type'];

			echo "<form>
			Name:<input type='text' value='$name'></input><br>
			Description:<input type='text' value='$description'></input><br>
			Category:<input type='text' value='$category'></input><br>
			Price:<input type='text' value='$price'></input><br>
			Image:<input type='text' value='$image'></input>
		</form>";

		echo "
		<form method='POST' action=''>
		<input type='submit' name='delete' value='Yes'></input>
		<input type='submit' name='no' value=''></input>
	</form>";
	}

	if(isset($_POST['delete'])){
		$sql="DELETE FROM items WHERE id='$id'";
		mysqli_query($conn,$sql);
		header('location:shop.php');
	}

	if(isset($_POST['no'])){
		header('location:shop.php');
	}
	?>

	



		

</body>
</html>