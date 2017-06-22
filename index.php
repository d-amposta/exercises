<?php

	function get_title(){
		echo 'Index Page';
	}

	function display_content(){
		echo '
		<div class="col s12 m10 l10 main">
			<div class="main-header">
				<h1>Shop Now</h1>
			</div>
			<div class="row main-content">
				<div class="col s12 m6 l6">
					<img src="Images/image1.png">
				</div>
				<div class="col s12 m6 l6">
					<img src="Images/image2.png">
				</div>
			</div>
			<div class="row main-content">
				<div class="col s12 m4 l4">
					<img src="Images/image3.png">
				</div>
				<div class="col s12 m4 l4">
					<img src="Images/image4.png">
				</div>
				<div class="col s12 m4 l4">
					<img src="Images/image5.png">
				</div>
			</div>
		</div>
	</div>';
	}

	require_once('../php site/home.php');

?>

