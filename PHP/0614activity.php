

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	body {
		background:;
		color: black;
	}

	h1, form {
		text-align: center;
		width: 50%;
		margin: auto;
		padding: 10px 12px;
	}

	div {
		background-color: rgba(255,255,255,0.8);
		margin-top: 10%;
	}

	
	</style>
</head>
<body>

	<div>
		<h1>FLAMES</h1>
		<form method="POST" action="">
			<input type="text" name="name1" placeholder="Person1">
			<input type="text" name="name2" placeholder="Person2"><br><br>
			<input type="submit" name="submit" value="Submit">
		</form>

		<?php

		if(isset($_POST['submit'])){
			$name1 = $_POST['name1'];
			$name2 = $_POST['name2'];
			$flames = [null,'Friends', 'Lovers', 'Anger', 'Marriage', 'Engage', 'Soulmates'];
			/*$flames = 'flames';*/

			require_once 'flames.php';

			$final_count = check_match($name1, $name2) + check_match($name2, $name1);
			echo '<h1>' . $name1 . ' and ' . $name2 . ' are' . '</h1>';
			echo '<h1>' . $final_count . '</h1>';

			echo '<h1>' . $flames[$final_count%6] . '</h1>';
			}
		?>
	</div>
	

</body>
</html>