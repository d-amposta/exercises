<?php

	function get_title(){
		echo 'Signup Page';
	}

	function display_content(){
		echo '<div class="col l10 main">
			<div class="row">
				
				<div class="col l1"></div>
				<div class="col l5">
					<div class="signup">
						<form method="POST" action="">
						<p>Sign Up</p>
						Username: <input type="text" name="username"></input>
						Password: <input type="password" name="password"></input>
						Confirm Password: <input type="password" name="pw2"></input>
						<input type="submit" name="signup" value="Submit" class="submit"></input>
						<p>Already have an id? Go back to <a href="login.php">login page</a></p>
					</form>';

					

					echo '</div>
				</div>
				<div class="col l1"></div>
			</div>
		</div>';
		require_once "connection.php";
		
		if(isset($_POST['signup'])){
						$username = $_POST['username'];
						$password = $_POST['password'];
						$pw2 = $_POST['pw2'];

						if($password == $pw2){
							//make passwords non readable to admin
							$password = sha1($password);
							
							$sql= "INSERT INTO users
							(username,password,role) 
							VALUES
							('$username', '$password', 'regular')";
							mysqli_query($conn, $sql);

							echo '<p>Registered Successfully</p>';
						}else{
							echo '<p>password did not match</p>';
						}

	}

	


	}

	require_once('../php site/home.php');

?>