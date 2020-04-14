
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_manager";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// create a variable
$username=$_POST['username'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$password=$_POST['password'];

//Execute the query
 
 	mysqli_query($conn,"INSERT INTO  multi_login (Username, Branch, Year, password, Email)
		        VALUES ('$username','$branch','$year','$password','$email')");
				
	
	// echo "<p>Registered Succesfully!</p>";
	// echo "<a href="ip_prac1.html">Go Back</a>";
		// echo '<script type="text/javascript">
  //          window.location = "index.php"
  //     </script>';
		
	// 	
 //     	exit();

	if(mysqli_affected_rows($conn) > 0){
    	// echo "<script>location.href='index.php';</script>";
    	header('location: index.php');
	
	} 
else {
	echo " NOT Added<br />";
	echo mysqli_error ($conn);
	}
 
?>