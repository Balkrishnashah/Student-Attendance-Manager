<?php
	session_start();
	include_once("conn.php");
	if($_SESSION["username"] == true){
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="../index.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      VCET Attendance
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <div class="nav-links">
    <a href="teacher_index.php">Home</a>
    <a href="about.php">About</a>
    <a href="teacher_attendance.php">Attendance</a>
    <!-- <a href="profile.php">Profile</a> -->
    <a href="../logout.php">Logout</a>
  </div>
</div>
<br><br>

<div class="panel panel-default container">
	<div class="panel-heading">
		
		<h1 style="text-align: center;">Attendance Manager Page</h1>

	</div>

	<div class="panel-body">

	<?php 
			if (isset($_POST['add_student'])) {

				$stu_id = $_POST['student_id'];
				$name1 =  $_POST['mname1'];
				// echo $name1;
				$name2 =  $_POST['mname2'];
				$name3 =  $_POST['mname3'];
				// echo $name3;

				$fname=$name1;
				$lname = $name3;
				if ($stu_id=="" || $name1="" || $name2=="" || $name3="") {

					echo "<div class='alert alert-danger'>

					Fields must not be empty;


					</div>";
					# code...
				}

				else{

					// mysqli_query($conn,"INSERT INTO student (student_id, fname, mname, lname)
		   //      	VALUES ('$stu_id','$name1','$name2','$name3')");

		        	$sql = "insert into student(student_id, fname, mname, lname) values('$stu_id','$fname','$name2','$lname')";
		        	$result=$conn->query($sql);


					if($result) {
					
						echo "<div class='alert alert-success'>

							Data inserted sucessfully!;


						</div>";
					}
				

				}

				
				
			}


 	?>	

	<form method="POST">

	<a href="#" class="btn btn-primary">View Attendance</a>

	<a href="teacher_attendance.php" class="btn btn-primary pull-right">Back</a>

	<div class="form-group">
			
		<label for="student_id">Student-ID :</label>
		<input type="text" name="student_id" class="form-control">

	</div>

	<div class="form-group">
			
		<label for="name">First Name</label>
		<input type="text" name="mname1" class="form-control">

	</div>

	<div class="form-group">
			
		<label for="name">Middle Name</label>
		<input type="text" name="mname2" class="form-control">

	</div>

	<div class="form-group">
			
		<label for="name">Last Name</label>
		<input type="text" name="mname3" class="form-control">

	</div>


	<input type="submit"  class="btn btn-primary" name="add_student">

	
</form>
</div>

</div>
<?php 
    
    }
    else{
      header('location:teacher_login.php');
    }

?>


</body>
</html>