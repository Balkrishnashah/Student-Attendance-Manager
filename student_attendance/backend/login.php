<?php include 'conn.php'; ?>
 
<?php
 
// create a variable
$username=$_POST['username'];
// $branch=$_POST['branch'];
// $year=$_POST['year'];
// $email=$_POST['email'];
$password=$_POST['password'];

//Execute the query
 
 	$result = mysqli_query($conn,"SELECT * FROM multi_login WHERE Username = '$username' AND password='$password' ");
	$row = $result-> fetch_assoc();

		
 	if ($row["username"] === $username) {
 		# code...
 		echo "<a href="index.php">click</a> ";
 		// header('location: index.php');
 	}
			// code...
			
		// }
	// }

// 	$row = mysql_fetch_array($result, MYSQL_ASSOC)			
// 	if(mysqli_affected_rows($conn) > 0){
// 	echo "<p>Registered Succesfully!</p>";
// 	// echo "<a href="ip_prac1.html">Go Back</a>";
// 	} 
// else {
// 	echo " NOT Added<br />";
// 	echo mysqli_error ($conn);
// 	}
 
?>