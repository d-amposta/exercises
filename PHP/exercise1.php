<!DOCTYPE html>
<html>
<head>
	<title></title>

		<!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      Import materialize.css-->
      	<!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 -->
      <!--Let browser know website is optimized for mobile-->
      	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

      	<style type="text/css">
      		.blue {
      			width: 100px;
      			height: 100px;
      			background-color: blue;
      			margin-bottom: 10px;
      			margin-right: 10px;
      			float: left;
      		}
      		.salmon {
      			width: 100px;
      			height: 100px;
      			background-color: salmon;
      			/*margin-bottom: 10px;
      			margin-right: 10px;*/
      			float: left;
      			display: inline-block;
      		}
      		.pink {
      			width: 100px;
      			height: 100px;
      			background-color: pink;
      			/*margin-bottom: 10px;
      			margin-right: 10px;*/
      			float: left;
      			display: inline-block;
      		}

      	</style>
</head>
<body>

	<!-- <?php
		$names1 = array("Krisienalie", "Louie", "Rudolf", "Janedy", "Marvinne");

		$names2 = array("Eurie", "JP", "Arthus", "Anicia", "Bless");

		echo $names2[0];
	?>

	<ul>
		<li><?php echo $names1[0]?></li>
		<li><?php echo $names1[1]?></li>
		<li><?php echo $names1[2]?></li>
		<li><?php echo $names1[3]?></li>
	</ul>

	<?php
		echo "<ul>
				<li>".$names1[0]."</li>
				<li>".$names1[1]."</li>
				<li>".$names1[2]."</li>
				<li>".$names1[3]."</li>
			  </ul>";
	?>

	<table class="highlight">
		<tr>
			<th>Names1</th>
			<th>Names2</th>
		</tr>
		<tr>
			<td><?php echo $names1[0]; ?></td>
			<td><?php echo $names2[0]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1[1]; ?></td>
			<td><?php echo $names2[1]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1[2]; ?></td>
			<td><?php echo $names2[2]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1[3]; ?></td>
			<td><?php echo $names2[3]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1[4]; ?></td>
			<td><?php echo $names2[4]; ?></td>
		</tr>
	</table>
 -->

 	<!-- strpos substr -->
	<?php
		//$string = "the sdkfjsdkl fjiosadjfoisdjf brown fox";

		//$pos = strpos($string, 'brown');

		//echo substr($string, 0, $pos)."quick".substr($string, $pos);

		//$start = strpos($string, 'brown');
		//echo strtoupper($string)."<br>";
		//echo strtolower($string)."<br>";
		//echo ucfirst($string)."<br>";
		//echo ucwords($string)."<br>";

		//echo strrev($string);

		//$word = strtolower("Racecar");
		//$reversed = strrev($word);

		//if ($word == $reversed) {
		//	echo "palindrome";
		//}else{
		//	echo "not a palindrome";
		//}

		//echo substr($string, 4);

		//echo substr($string, $start);

		//MATH

		//$a = 3;
		//$b = 4;
		//$a_squared = pow($a, 2);
		//$b_squared = pow($b, 2);

		//$c = sqrt($a_squared + $b_squared);

		//echo $c;

		/*$a = 4;
		$b = 3;
		$sum = $a+$b;
		$diff = $a-$b;
		$prod = $a*$b;
		$quot = $a/$b;
		$remainder = $a%$b;


		echo "A+B=".$sum;
		echo "<br>";
		echo "A-B=".$diff;
		echo "<br>";
		echo "A*B=".$prod;
		echo "<br>";
		echo "A/B=".number_format($quot, 2);
		echo "<br>";
		echo "A%B=".$remainder;
		echo "<br>";
		echo "++B=".++$b;
		echo "<br>";
		echo "--A=".--$a;
*/

		/*$colors = array(93,90,88,95);

		echo count($colors);
		echo number_format(array_sum($colors)/count($colors),2);*/

		/*$a = 4;

		$c = $a%2;
		$d = $a%3;

		if ($c == 0 and $d == 0) {
			echo "even multiple of 3";
		}elseif($c != 0 and $d == 0){
			echo "odd multiple of 3";
		}else{
			echo "not a multiple of 3";
		}*/

		/*$day = 10;

		switch ($day) {
			case $day%7 == 1:
				echo 'Monday';
				break;
			case $day%7 == 2:
				echo 'Tuesday';
				break;
			case $day%7 == 3:
				echo 'Wednesday';
				break;
			case $day%7 == 4:
				echo 'Thursday';
				break;
			case $day%7 == 5:
				echo 'Friday';
				break;
			case $day%7 == 6:
				echo 'Saturday';
				break;
			case $day%7 == 0:
				echo 'Sunday';
				break;
			
			default:
				# code...
				break;
		}*/

		//$x = 5;
		
		/*$num = 5;
		$factorial = 1;
		for ($x=$num; $x>=1; $x--) 
		{
  		$factorial = $factorial * $x;
		}
		echo "Factorial of $num is $factorial";*/

		/*$x = 1;
		$factorial = 1;
		while ($x <= 5) {
			//$factorial = $factorial * $x;
			$factorial *= $x;
			echo "Factorial of $x is $factorial <br>";
			$x++;
		}*/
		
		/*$x = 1;

		for ($x = 1; $x <= 12; $x++) {
			echo pow($x, 2) . "<br>";
		}*/

		/*while ($x <= 12) {
			echo pow($x, 2) . "<br>";
			$x++;
		}*/

		

		 /*$total = 0;
    	for($number = 0; $number < 50; $number+=2) 
    	{
        	$total += $number;
    	}
		echo $total;*/

		/*$total = 0;
		$number = 0;*/

		/*while ($number < 50)
{
    if ($number % 2 == 0)
    {
        $total = $total + $number;
    }
    $number++;
}

echo $total;*/

		/*$even = 0;
		$odd = 0;

		for ($count=0; $count <= 50; $count++) {
			if ($count%2 == 0){
				$even = $even + $count;
			}else {
			$odd = $odd + $count;
		}
			
		}

		echo "even sum is $even <br>";
		echo "odd sum is $odd";*/

		//$string = "The quick brown fox";
		//$x = $string[0];

		/*for ($x=0; $x<strlen($string);$x++) {
			echo $string[$x] . "<br>";
		}*/
		
		/*for ($x=0; $x<strlen($string);$x++) {
			if ($x%2==1) {
				echo strtoupper($string[$x]);
			}else {
				echo strtolower($string[$x]);
			}	

		}*/


		/*for ($x=1; $x<=5; $x++) {
			for ($y=1; $y<6; $y++) {
				echo "*";
			}
		}*/
			/*$previous = 0;
			$current = 1;

			for ($i=0; $i<=15; $i++) {
				echo $current . " ";
				$next = $previous + $current;
				
				$previous=$current;
				$current=$next;
			}
echo "<br>";
			for ($row=1; $row <= 10; $row++) {   
          
       		 for ($col=1; $col <= 10; $col++) {   
          		 $p = $col * $row;  
          		 echo $p;  
            }  
            echo "<br>"; 
        }  */
        	//$colors = array ('red', 'orange', 'yellow'); indexed array
        	/*$colors = ['red', 'orange', 'yellow'];

        	echo "<ul>";
        	for ($i=0; $i <count($colors); $i++) {
        		echo "<li>" . $colors[$i] . "</li>";
        	}
        	echo "</ul>";
        	
        	$days = array (
        			'January' => 31,
        			'February' => 28,
        			'April' => 30
        		);*///associative array

        	//echo $days ['April'];

	?>

	<!-- JAVASCRIPT -->

	<!-- <input type="text" id="input" placeholder=""></input>
	<button id="submit">Submit</button>
	<h3 id="greet"></h3>

	<script type="text/javascript">
		document.getElementById('submit').onclick=function(){
			var input = document.getElementById('input').value;
			document.getElementById('greet').innerHTML='hello '+input;
		}
	</script> -->

	<!-- <input type="text" id="input1" placeholder=""></input>
	<input type="text" id="input2" placeholder=""></input>
	<button id="add">Add</button>
	<button id="subtract">Subtract</button>
	<button id="compare">Compare</button>
	<h3 id="greet"></h3>
	<h3 id="diff"></h3>
	<h3 id="compare2"></h3>

	<script type="text/javascript">

		/*add/subtract*/
		document.getElementById('add').onclick=function(){

			var input1 = document.getElementById('input1').value;
			var input2 = document.getElementById('input2').value;
			document.getElementById('greet').innerHTML=
			'Sum is '+(parseInt(input1)+parseInt(input2));
		}

		document.getElementById('subtract').onclick=function(){

			var input1 = document.getElementById('input1').value;
			var input2 = document.getElementById('input2').value;
			document.getElementById('diff').innerHTML=
			'Difference is'+(parseInt(input1)-parseInt(input2));
		}

		/*compare*/

		document.getElementById('compare').onclick=function(){

			var input1 = parseInt(document.getElementById('input1').value);
			var input2 = parseInt(document.getElementById('input2').value);

			if (input1>input2)
			document.getElementById('compare2').innerHTML=
			input1+ ' is greater than ' +input2;

			if (input1<input2)
				document.getElementById('compare2').innerHTML=
				input1 + ' is less than ' +input2;
		}

	</script> -->

	<!-- <h3>Guess the number</h3>
	<input type="text" id="input"></input>
	<button id="submit">Submit</button>
	<h3 id="number"></h3>

	<script type="text/javascript">
		var number = Math.floor((Math.random() * 100) + 1);
		
		document.getElementById('submit').onclick=function(){
			var input = parseInt(document.getElementById('input').value);


			if (input > number){
				document.getElementById('number').innerHTML = 
				"Lower";
			}
				
			else if (input < number) {
				document.getElementById('number').innerHTML = 
				"Higher";
			}
				
			else {
				document.getElementById('number').innerHTML =
				"Correct";
			}
				
		}
	</script> -->

	<!-- loop -->

	<!-- <input type="text" id="input"></input>
	<button id="loop">Loop</button>
	<h3 id="greet"></h3>
 -->
	<script type="text/javascript">
		/*document.getElementById('loop').onclick=function(){

			var input = parseInt(document.getElementById('input').value);
*/
			/*for(x=0;x<input;x++){
				document.getElementById('greet').innerHTML += "* ";*/

			/*for (x=0;x<input;x++){
				document.getElementById('greet').innerHTML +=
				"<div class=blue></div>";
			}
			}*/

			/*for (var x=0;x<input;x++){
				for (var y=0;y<input;y++){
					if ((x+y)%2==0) {
					document.getElementById('greet').innerHTML +=
					"<div class='salmon'></div>";
					}else {
					document.getElementById('greet').innerHTML +=
						"<div class='pink'></div>";
					}	
				} document.getElementById('greet').innerHTML +="<br>";
				
			}document.getElementById('greet').innerHTML +=
					"<div style='clear:both';></div>"
		}*/
		
	</script>

	<!-- <div class="container">
		<div class="row">
			<input></input>
		</div>
		<div>
			<p id="input"></p>
		</div>
		<div class="row">
			<button id="7">7</button>
			<button id="8">8</button>
			<button id="9">9</button>
			<button id="d">/</button>
		</div>
		<div class="row">
			<button id="4">4</button>
			<button id="5">5</button>
			<button id="6">6</button>
			<button id="m">*</button>
		</div>
		<div class="row">
			<button id="1">1</button>
			<button id="2">2</button>
			<button id="3">3</button>
			<button id="s">-</button>
		</div>
		<div class="row">
			<button></button>
			<button id="0">0</button>
			<button></button>
			<button id="a">+</button>	
		</div>
		
	</div>

	<script type="text/javascript">
		
	</script> -->

	<h1 id="i"></h1>
	<h1></h1>
	<input type="text" id="input"></input>
	<button type="Submit" id="submit">Submit</button>

	<script type="text/javascript">
		var questions = [null,'Question 1', 'Question 2', 'Question 3', 'Question 4', 'Question 5'];
		var i=0;

		document.getElementById('submit').onclick=function(){
			document.getElementById('i').innerHTML = questions[i];
			i++;
		
}		
		
		


		


		

		
	</script>


</body>
</html>