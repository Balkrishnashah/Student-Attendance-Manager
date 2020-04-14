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
	<a href="view.php" class="btn btn-primary">View Attendance</a>


	<!-- <a href="add_student.php" class="btn btn-primary pull-right">Add Student</a> -->

	


	<form method="POST">
	<table class="table">
		
		<thead>
			<th>Roll No</th>
			<th>Student-ID</th>
			<th>First name</th>
			<th>Middle name</th>
			<th>Last name</th>
			<th>Attendance</th>
		</thead>


		<tbody>
			<?php

				$result = mysqli_query($conn,"SELECT * FROM student");
  				
  				while ($row=$result->fetch_assoc()) {
  					# code...
  				

			?>

			<tr>
				<td><?php echo $row['roll_no']; ?></td>
				<td><?php echo $row['student_id']; ?></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['mname']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td>
					Present <input required type="radio" name="attendance[<?php echo $row['student_id']; ?>]" value="Present">
					Absent <input required type="radio" name="attendance[<?php echo $row['student_id']; ?>]" value="Absent">

				</td>


			</tr>

		<?php } ?>

		</tbody>


	
<?php



		if (isset($_POST["take_attendance"])) {
		$att = $_POST['attendance'];
		$date = date('d-m-y');

		// $query = "select distinct date from attendance";
		// $result = $conn->query($query);
		$b=false;
	// 	if ($result->num_rows>0) {
	// 		while ($check=$result->fetch_assoc()) {

	// 			if($date==$check['date']){
	// 				$b = true;
	// 				echo "<div class='alert alert-danger'>

	// 					Attendance already taken today!;


	// 					</div>";

	// 		}
	// 	}

	// }
		

		if (!$b) {

			foreach ($att as $key => $value) {
				# code...

				if ($value=="Present") {
					# code...

					$query = "UPDATE attendance SET value='present' WHERE student_id=$key ";
					$insertResult = $conn->query($query);
				}

				else{

					// $query = "insert into attendance(value, student_id, date) values('Absent', $key, '$date')";
					$query = "UPDATE attendance SET value='Absent' WHERE student_id=$key";

					$insertResult = $conn->query($query);

				}
			}


			// this is after foreach

			if ($insertResult) {
				# code...

				echo "<div class='alert alert-success'>

					Attendance  updated sucessfully!


					</div>";

			}
		}
	}
	
	# code...

?>

<?php 

		// $teacher_id = $_SESSION['username'];
		// $subject = $_POST['subject'];
		// echo $teacher_id;
		// echo $subject;
		// attendance();
		// $sql = select * from subject, teacher 
?>
</table>
<input type="submit" class="btn btn-primary" value="Update Attendance" name="take_attendance">
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