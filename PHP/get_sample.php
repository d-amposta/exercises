<?php	
	/*echo $_GET['input1'];
	echo '<br>';
	echo $_GET['name'];*/

	/*echo htmlspecialchars($_POST['input1']);
	echo '<br>';
	echo htmlspecialchars($_POST['name']);*/

	session_start();

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	if(authenticate($username,$password)){
		echo 'user is valid';

		$_SESSION['user'] = $username;
	}else {
		echo 'incorrect login details';
	}

	function authenticate($username,$password){
		if($username == 'admin' && $password == 'secret'){
			return true;
		}else{
			return false;
		}
	}

	





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="logout.php" method="POST">
	<input type="submit" value="Log Out"></input>
</form>

</body>
</html>