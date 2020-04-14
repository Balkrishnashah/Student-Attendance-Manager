<?php 
	include '../conn.php';
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VCET Attendance Manager Login</title>
  <link rel="stylesheet" href="../login.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">

 <form name='login-form' class="login-form" method="post">
      <input type="text" name="teacher_id" placeholder="teacherID"/>
      <input type="password" name='password' placeholder="password"/>
      <button type="submit" name="login_btn">login</button>
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>


</div>
</div>
</body>
</html>

<?php 

if (isset($_POST['login_btn'])) {

	$teacher_id = $_POST['teacher_id'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"SELECT * FROM teacher WHERE teacher_id = '$teacher_id' AND password='$password' ");
	$row = mysqli_fetch_array($result);

	// $result-> fetch_assoc();

	session_start();
 	if ($row["teacher_id"] === $teacher_id && $row['password'] === $password) {
 		# code...
 		// echo "<a href="index.php">click</a>" ;
 		// echo "logged in";

 		$_SESSION["username"] = $teacher_id;
 		$_SESSION["branch"] = $row["teacher_branch"];
 		$_SESSION["year"] = $row['teacher_name'];

 		header('location: teacher_index.php');

	}
	else{
	header('location: error403.html');
	}
	

}
?>