<?php

	function get_title(){
		echo 'Shop Page';
	}

	

	function display_content(){
		echo '<div class="col s12 m10 l10 main">';
		
		require_once('connection.php');
		$sql = "SELECT productName, description, type, price, img FROM items";

		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				extract($row);
				

				
					$name = $row['productName']; 
					$description = $row['description'];
					$price = $row['price'];
					$image = $row['img'];
					$category = $row['type'];

					if(!isset($_POST['submit']) || 
						$_POST['type'] == $category || 
						$_POST['type'] == 'All'){
						echo "<div class='row'>";
						echo "
						<div class='col l12'>
						<img src=$image></img><br>
						$name <br>
						$description<br>
						$category<br>
						$price<br>
						</div>";
					}
					
			}
		}


		echo '</div>';

	}

	require_once('../php site/home.php');

?>