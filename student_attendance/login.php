<?php include 'conn.php'; ?>
 
<?php
 
 session_start();
// create a variable

// $branch=$_POST['branch'];
// $year=$_POST['year'];
// $email=$_POST['email'];


//Execute the query
 if (isset($_POST['login_btn'])) {
 	# code...
 	$studentid=$_POST['studentid'];
 	$password=$_POST['password'];
 	$result = mysqli_query($conn,"SELECT * FROM multi_login WHERE student_id = '$studentid' AND password='$password' ");
	$row = mysqli_fetch_array($result);

	// $result-> fetch_assoc();

		
 	if ($row["student_id"] === $studentid && $row['password'] === $password) {
 		# code...
 		// echo "<a href="index.php">click</a>" ;
 		// echo "logged in";

 		$_SESSION["username"] = $studentid;
 		$_SESSION["branch"] = $row["Branch"];
 		$_SESSION["year"] = $row['Year'];
 		// $_SESSION["email"] = $row['Email'];
 		// $_SESSION["username"] = $username;
 		?>

 		<!-- <html> -->
 		<!-- <body> -->
 				<!-- <script type="text/javascript"> -->
 					<!-- alert('logged in Succesfully!!!'); -->
 				<!-- </script> -->
 		<!-- </body> -->
 		<!-- </html> -->

 		<?php

 		header('location: index.php'); 
 		
 	}
			// code

// 	$row = mysql_fetch_array($result, MYSQL_ASSOC)			
// 	if(mysqli_affected_rows($conn) > 0){
// 	echo "<p>Registered Succesfully!</p>";
// 	// echo "<a href="ip_prac1.html">Go Back</a>";
// 	} 
	else {
		header('location: error403.html'); 
		// echo mysqli_error ($conn);
	}
 
 }
?>