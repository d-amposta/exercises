<?php
	require_once('connection.php');

	//query
	/*$sql = 'SELECT firstName, lastName FROM employees';*/
	$sql = 'SELECT * FROM employees';
	//
	$result = mysqli_query($conn, $sql);
	//print_r ($result);
	if(mysqli_num_rows($result)>0){
		//converts sql to associative array
		//echo '<table>';
		while($row=mysqli_fetch_assoc($result)){
			//echo
			extract ($row);
			echo /*'<td>'*/ $firstName . ' ' . $lastName . '<br>';
			/*echo $row['firstName'] . ' ' . $row['lastName'] . '<br>';*/
			//echo '</table>';
		}
		
	}
?>