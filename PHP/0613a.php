<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	
	h1, div {
		width: 50%;
		margin: auto;
		text-align: center;
		color: white;
	}

	button {
		margin-left: 50%;
		margin-right: 50%;
		transform: translateX(-50%);
	}

	/*div	{
		display: none;
	}*/

	body { background-color:#333; }
#snow{
	background: none;
	font-family: Androgyne;
	background-image: url('http://www.wearewebstars.dk/codepen/img/s1.png'), url('http://www.wearewebstars.dk/codepen/img//s2.png'), url('http://www.wearewebstars.dk/codepen/img//s3.png');
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index:1;
	-webkit-animation: snow 10s linear infinite;
	-moz-animation: snow 10s linear infinite;
	-ms-animation: snow 10s linear infinite;
	animation: snow 10s linear infinite;
}
@keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-moz-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 400px 1000px, 200px 400px, 100px 300px;}
}
@-webkit-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-ms-keyframes snow {
  0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}	
	</style>
</head>
<body>
		<div id="snow">
		<h1>Twelve days of Christmas</h1>
		<form method="POST">
		<button>Next
			<?php
			if (isset($_POST['counter'])){
					$counter = $_POST['counter'] + 1;
				} else {
					$counter = 0;
				}
				if ($counter >=12) {
					$counter = 0;
				}
			?>
		</button>
			<input type="hidden" name="counter" value="<?php echo $counter; ?>">
		</form>
		
			<?php

				$days = [
					'First',
					'Second',
					'Third',
					'Fourth',
					'Fifth',
					'Sixth',
					'Seventh',
					'Eighth',
					'Ninth',
					'Tenth',
					'Eleventh',
					'Twelfth'
				];

				$gifts = [
					'A partridge on a pear tree',
					'Two turtle doves and',
					'Three french hens',
					'Four calling birds',
					'Five golden rings',
					'Six geese a-laying',
					'Seven swans a-swimming',
					'Eight maids a-milking',
					'Nine ladies dancing',
					'Ten lords a-leaping',
					'Eleven pipers piping',
					'Twelve drummers drumming'
				];

				$i = $counter;

				
					echo 'On the ' . $days[$i] . ' day of Christmas my true love gave to me <br>';
					for ($x=$i; $x>=0; $x--) {
					echo $gifts[$x] . '<br>';
				
				}
				;
			?>

			</div>



	

</body>
</html>