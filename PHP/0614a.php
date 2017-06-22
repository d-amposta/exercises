<?php
	/*echo 'input:';
	echo $_GET['input1']; //http://localhost/0614a.php?input1=hello
	echo '<br>';
	echo 'hello ';
	echo $_GET['name'];*/


	//get address bar or form
	//use th & to seperate different variables http://localhost/0614a.php?input1=hello&name=rody
	//however be careful when the input contains html characters. use htmlspecialchars() functiom to sanitize the user input
		//htmlspecialchars($_GET['input1'])
		//<br>
		//htmlspecialchars($_GET['name'])

	/*echo 'input:';
	echo htmlspecialchars($_GET['input1']); //http://localhost/0614a.php?input1=hello
	echo '<br>';
	echo 'hello ';
	echo htmlspecialchars($_GET['name']);*/

	//special characters such as space need to be encoded
	//use%20 to represent a space
	//%20 space, %3C /, %3D =, %3E >, %3F ?, %25 %, %26 &, %2F


	

	/*echo $_GET['input1'];
	echo '<br>';
	echo $_GET['name'];*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- using forms $_GET -->
	<!-- when using forms, the user will go to another php file upon pressing the submit button. use the 'name' attribute to identify the name of the input -->
	<!-- <form action="get_sample.php" method="GET">
		Input1: <br>
			<input type="text" name="input1"></input><br>
		Name: <br>
			<input type="text" name="name"></input><br><br>
			<input type="submit" value="submit"></input>
	</form> -->

	<!-- The 'action' property of the form tells us where is the next PHP script to run. When 'action' is left blank, it will go to the same PHP file where the user is. The 'method' property can be 'GET' or 'POST' -->

	<!-- <form action="" method="GET">
		Input1: <br>
			<input type="text" name="input1"></input><br>
		Name: <br>
			<input type="text" name="name"></input><br><br>
			<input type="submit" value="submit"></input>
	</form> -->

	<!-- using forms using $_POST -->

	<!-- <form action="get_sample.php" method="POST">
		Input1: <br>
			<input type="text" name="input1"></input><br>
		Name: <br>
			<input type="text" name="name"></input><br><br>
			<input type="submit" value="submit"></input>
	</form> -->

	<!--  -->

	<!-- when to use get and when to use post? -->
	<!-- get data sent is visible in the url, data has limit of around 2000 characters, can be bookmartked because variables are present in url -->
	<!-- post data is hidden within the request, no data limit, supports file upload, cannot be bookmarked -->
	<!-- ! validate user input hackers can input unexpected values that can manipulate your website -->

	<!-- sessions -->

	<!-- sessions are useful when you want to use the same data across multiple page -->
	<!--  -->

	<p>Please Login</p>
	<form action="get_sample.php" method="POST">
		Username: <br>
		<input type="text" name="username"><br>
		Password: <br>
		<input type="text" name="password"><br><br>
		<input type="submit" value="Submit">

	</form>

	

	<!-- session unset -->

	<!-- session_unset('password') -->

	<!-- session_destroy() lahat ng laman ng session mawawala na -->




</body>
</html>