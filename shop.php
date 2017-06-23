<?php

	function get_title(){
		echo 'Shop Page';
	}

	

	function display_content(){
		echo '<div class="col s12 m10 l10 main">';
		
		require_once('connection.php');
		$sql = "SELECT * FROM items";

		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				extract($row);
				

					$id = $row['id'];
					$name = $row['productName']; 
					$description = $row['description'];
					$price = $row['price'];
					$image = $row['img'];
					$category = $row['type'];



						echo "<div class='row'>";
						echo "
						<div class='col l12'>
						<img src=$image></img><br>
						$name <br>
						$description<br>
						$category<br>
						$price<br>
						</div>
						<a href='edit.php?id=$id'><button>Edit</button></a>
						<a href='delete.php?id=$id'><button>Delete</button></a>";
						
					
			}
			echo '<a href="additem.php"><div>Add Item</div></a>';
		}


		echo '</div>';

	}

	require_once('../php site/home.php');

?>