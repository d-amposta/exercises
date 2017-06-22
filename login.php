<?php
	function get_title(){
		echo 'Login page';
	}

	function display_content(){
		echo '<div class="col l10 main">
			<div class="row">
				<div class="col l2"></div>
				<div class="col l3">
					<div class="login">
						<form method="POST" action="">
							<p>Log In</p>
							Username:<input type="text" name="username" placeholder="username"></input>
							Password:<input type="password" name="password" placeholder="password"></input>
							<input type="submit" name="login" value="Submit"></input>
							<a href="new.php"> Forgot Password? </a>
						</form>';

						
							
						
					echo '</div>		
				</div>
				<div class="col l1"></div>
				<div class="col l5">
					<div class="signup">
						<p>Not yet registered? <a href="signup.php">Sign up!</a></p>
					</div>
				</div>
				<div class="col l1"></div>
			</div>
		</div>';

		
	}
require('connection.php');
session_start();
	if(isset($_POST['login'])){
			
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
				extract($row);
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
				echo "Login Successful";
				header('location:index.php');	
				}
				
			}
		}
	require_once('../php site/home.php');
?>