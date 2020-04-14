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
	<!-- <a href="#" class="btn btn-primary">View Attendance</a> -->

	<select class="btn btn-primary browser-default custom-select" name="subject">
  <option selected>Select Your Subject</option>
  


  	<?php   	
	$sql = "SELECT * FROM subject";
        $result = $conn->query($sql);
            while($row = $result->fetch_array())
		{                                                 
            	echo "<option value='".$row['subject_id']."'>".$row['subject_name']."</option>";
        
       }

  		?>

    
    <!-- <li><a href="#">CSS</a></li> -->
    <!-- <li><a href="#">JavaScript</a></li> -->
 </select>

 	<select class="btn btn-primary browser-default custom-select">
  <option selected>Select Year</option>
  	<option>First Year</option>
  	<option>Second Year</option>
  	<option>Third Year</option> 
  	<option>Final Year</option>

</select>


	<!-- <a href="add_student.php" class="btn btn-primary pull-right">Add Student</a> -->


	<!-- <form method="POST"> -->
	<table class="table">
		
		<thead>
			<th>Sr No.</th>
			<th>Date</th>
			<th>View</th>
			
		</thead>

		<?php 
				$query= "select distinct date from attendance";
				$result= $conn->query($query);

				if ($result->num_rows>0) {
						$i=0;
						while ($val=$result->fetch_assoc()) {
							$i++;
					
			?>


		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $val['date']; ?></td>
			<td><a href="viewp.php?date=<?php echo $val['date'] ?>" class="btn btn-primary">View</a></td>

		</tr>

<?php 
		}
}

?>
</table>
<!-- </form> -->
<a href="teacher_attendance.php">
<input type="submit" class="btn btn-primary" value="Go Back" name="take_attendance">
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