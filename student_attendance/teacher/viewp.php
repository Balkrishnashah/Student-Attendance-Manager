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

	<a href="add_student.php" class="btn btn-primary pull-right">Add Student</a>


	<!-- <form method="POST"> -->
	<table class="table">
		
		<thead>
			<!-- <th>Sr No.</th> -->
			<th>Roll No</th>
			<th>Student-ID</th>
			<th>First name</th>
			<th>Middle name</th>
			<th>Last name</th>
			<th>Attendance</th>
			
		</thead>

		<?php 

			if ($_GET['date']) {
				
				$date = $_GET['date'];
				$query= "SELECT student.*,attendance.*
				FROM attendance
				inner join student on attendance.student_id=student.student_id and attendance.date='$date'";
				$result= $conn->query($query);

				if ($result->num_rows>0) {
						$i=0;
						while ($val=$result->fetch_assoc()) {
							$i++;
					
			?>


		<tr>
			<td><?php echo $i; ?></td>
			<!-- <td><?php echo $val['roll_no']; ?></td> -->
			<td><?php echo $val['student_id']; ?></td>

			<td><?php echo $val['fname']; ?></td>

			<td><?php echo $val['mname']; ?></td>

			<td><?php echo $val['lname']; ?></td>

			<td>
				
				Present <input type="radio" 

				value="Present"
				<?php 

					if ($val['value']=='present') {
						echo "checked";
					}

					?>

				>

				Absent <input type="radio" 

				value="Absent"
				<?php 

					if ($val['value']=='Absent') {
						echo "checked";
					}

					?>

				>


			</td>
			

			<!-- <td><a href="viewp.php?date=<?php echo $val['date'] ?>" class="btn btn-primary">View</a></td> -->

		</tr>
	
<!-- </form> -->
<!-- </div> -->

<?php 
		}
}
}

?>
</table>
<a href="view.php">
<input type="submit" class="btn btn-primary" value="Go Back">
</a>

<a href="edit.php">
<input type="submit" class="btn btn-primary" value="Edit">
</a>

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