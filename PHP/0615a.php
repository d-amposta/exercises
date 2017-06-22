<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Sample Select Box
	<form method="POST" action="">
		Gender
		<select name="gender">
			<option value="Female">F</option>
			<option>Male</option>
			<option>Gay</option>
			<option>Lesbian</option>
			<option>Bisexual</option>
			<option>Transgender</option>
			<option>Gender Fluid</option>
		</select>
		<input type="submit" name="submit" value="Submit"></input>
	</form> -->

	<?php
		/*if(isset($_POST['submit'])){
			$gender = $_POST['gender'];
			echo'selected gender is: ' . $gender . '<br>';
		}*/
	?>

	<!-- Sample Select Box
	<form method="POST" action="">
		
		<select name="country">
			<option value="Brunei">Bandar Seri Begawan</option>
			<option value="Cambodia">Phnom Penh</option>
			<option value="East Timor">Dili</option>
			<option value="Indonesia">Jakarta</option>
			<option value="Laos">Vientiane</option>
			<option value="Malaysia">Kuala Lumpur</option>
			<option value="Mayanmar">Nay Pyi Daw</option>
			<option value="Philippines">Metro Manila</option>
			<option value="Singapore">Singapore</option>
			<option value="Thailand">Bangkok</option>
			<option value="Vietnam">Hanoi</option>
		</select>
		<input type="submit" name="submit" value="Submit"></input>
	</form> -->

	<?php
		/*if(isset($_POST['submit'])){
			$country = $_POST['country'];
			echo $country . '<br>';
		}*/
	?>

	<?php
	/*$planets = [
		'Mercury' => '1st planet',
		'Venus' => 'morning star',
		'Earth' => 'blue marble',
		'Mars' => 'red planet',
		'Jupiter' => 'gas giant',
		'Saturn' => 'ring planet',
		'Uranus' => 'ur anus',
		'Neptune' => 'just neptune',
		'Pluto' => 'dwarf planet',
	];

		*/

	?>

	<!-- <!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>

		<form method="POST" action="">
			Planets
			<select name="planet"> -->
				<?php
				
				/*foreach ($planets as $planet => $othername){
					echo "<option value='$planet'>$othername</option>";
				}*/

			?>

			<!-- </select>
			<input type="submit" name="submit" value="Submit"></input>
			
		</form> -->
 
		<?php
			/*if(isset($_POST['submit'])){
				$planet = $_POST['planet'];

				echo 'selected planet is ' . $planet;

			}*/
		?>

		<?php
			/*$planets = [
				'Mercury' => '1st planet',
				'Venus' => 'morning star',
				'Earth' => 'blue marble',
				'Mars' => 'red planet',
				'Jupiter' => 'gas giant',
				'Saturn' => 'ring planet',
				'Uranus' => 'ur anus',
				'Neptune' => 'just neptune',
				'Pluto' => 'dwarf planet',
			];


			function create_dropdown($name,$options) {
				echo "<select name='$name'>";
					foreach ($options as $key => $value){
					echo "<option value='$key'>$value</option>";
					}
					echo "</select>";
			}
			*/

		?>

		<!-- <!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>

			<form method="POST" action=""> -->
				<?php /*create_dropdown('planet', $planets);*/ ?>
				<!-- <input type="submit" name="submit" value="Submit"></input>
			</form> -->

			<?php
				/*if(isset($_POST['submit'])){
				$planet = $_POST['planet'];

				echo 'selected planet is ' . $planet;

			}*/
			?>
		
		<!-- </body>
		</html> -->

		<?php
			$items = array(
				array('name' => 'Super Mario Bros. Ultra Detail Figure Series 1: Tanuki Suit Mario',
				'description' => 'Nintendo Character Series',
				'img' => 'mario.jpg',
				'type' => 'ultra detail figure',
				'price' => 'Php 363.99'
				),
				array('name' => "Link The Legend of Zelda: Majora\'s Mask",
				'description' => 'Nintendo characters third series',
				'img' => 'link.jpg',
				'type' => 'ultra detail figure',
				'price' => 'Php 487.72'
				),
				array('name' => 'World of Final Fantasy Choco Chocobo',
				'description' => 'FF Series',
				'img' => 'chocobo.jpg',
				'type' => 'ultra detail figure',
				'price' => 'Php 1633.88')
			);

			foreach ($items as $item) {
				foreach ($item as $key => $value) {
					echo $key . ': ' . $value . '<br>';
				}
			}
		?>


</body>
</html>