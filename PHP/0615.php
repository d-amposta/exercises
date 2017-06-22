<?php
	$items = array(
				array('img' => 'Images/mario.jpg',
				'name' => 'Super Mario Bros. Ultra Detail Figure Series 1: Tanuki Suit Mario',
				'description' => 'Nintendo Character Series',
				'type' => 'ultra detail figure',
				'price' => 'Php 363.99'
				),
				array('img' => 'Images/link.jpg',
				'name' => "Link The Legend of Zelda: Majora's Mask",
				'description' => 'Nintendo characters third series',
				'type' => 'ultra detail figure',
				'price' => 'Php 487.72'
				),
				array('img' => 'Images/chocobo.jpg',
				'name' => 'World of Final Fantasy Choco Chocobo',
				'description' => 'FF Series',
				'type' => 'ultra detail figure 2',
				'price' => 'Php 1633.88')
			);

	$type = array_column($items, 'type');

	$category = array_column($items, 'type');
		$category = array_unique($category);

		echo "<form method='POST' action=''>";
		echo create_dropdown('type',$category);
		echo "<input type='submit' name='submit' value='Search'></form>";
	

	function create_dropdown($name,$options){
		$output = "<select name='$name'>";
		$output .= "<option>All</option>";
		foreach ($options as $value) {
			if(isset($_POST[$name]) && $_POST[$name] == $value){
				$output .= "<option selected value='$value'>$value</option>";
			} 
			else {
				$output .= "<option value='$value'>$value</option>";
			}
		}
		$output .= "</select>";

		return $output;
	}

		

	foreach ($items as $item) {
			$name = $item['name']; 
			$description = $item['description'];
			$price = $item['price'];
			$image = $item['image'];
			$category = $item['type'];

			if(!isset($_POST['submit']) || 
				$_POST['type'] == $category || 
				$_POST['type'] == 'All'){
				echo "$name <br> $description <br> $price <br> $image <br> $category <br><hr>"; 
			}
		}
	/*function create_dropdown($name,$options) {
		echo "<select name='category'>";
			foreach ($options as $value){
				if(isset($_POST[$name])&& $_POST[$name]==$value){
					echo "<option selected value='$value'>$value</option>";
				}else {
					echo "<option value='$value'>$value</option>";
				}
			
			}
			echo "</select>";
			}*/

		/*	$output =  "<select name='category'>";
			foreach ($options as $value){
				if(isset($_POST[$name])&& $_POST[$name]==$value){
					$output .= "<option selected value='$value'>$value</option>";
				}else {
					$output .= "<option value='$value'>$value</option>";
				}
			
			}
			$output .= "</select>";
			}

			return $output*/


/*
	$type = array_unique($type);*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		img {
			width: 100px;

		}

		.container {
			/*width: 20%;*/
		}

		.name {
			font-size: 1em;
		}

		.container2 {

		}



	</style>
</head>
<body>

	
<!-- <form method="POST" action=""> -->
	<?php /*create_dropdown($items, $type);*/ ?>
	<!-- <input type="submit" name="submit" value="Submit"></input>
</form> -->
	<?php
		

		/*foreach ($items as $item) {
				echo "<div class=container>";
				foreach ($item as $key => $value) {
					if ($key == 'img'){
						echo "<div class='left'><img src='$value'></img></div>";
					}else if($key == 'name'){
						echo "<div class='right'>
								<h1 class='name'>$value</h1>
							";
					}else if ($key == 'description'){
						echo "<p class='description'>$value</p>";
					}else if ($key == 'type'){
						echo "<p class='type'>$value</p>";
					}else {
						echo "<p class='price'>$value</p>
							</div>";
					}
					
				} echo "</div>";
			}
*/
			/*foreach ($items as $item) {
				echo "<img src='" . $item['img'] . "'></img>";
			}*/

		
			foreach ($items as $item) {
				$name = $item['name'];
				$description = $item['description'];
				$price = $item['price'];
				$image = $item['img'];
				$type = $item['type'];
				
				if(!isset($_POST['submit']) || 
					$_POST['type']==$category||
					$_POST['type']=='All'){
				echo "$name <br> $description <br> $price <br> $image <br> $type <br><br>";
			}
		}
			
			


	?>

</body>
</html>