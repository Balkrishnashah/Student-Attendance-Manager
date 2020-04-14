<?php 
    session_start();
    include 'conn.php';

     if($_SESSION["username"] == true){
   

?>

<!-- <!DOCTYPE html> -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VCET Attendance Manager</title>
  <link rel="stylesheet" href="./index.css">

  
</head>
<body>
<!-- partial:index.partial.html -->

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
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="attendance.php">Attendance</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<br><br>

<!-- <?php 

  $student = $_SESSION["username"];
  $result = mysqli_query($conn,"SELECT * FROM multi_login WHERE Username = '$student' ");
  $row = mysqli_fetch_array($result);
  $id = $row['Username'];
  $branch = $row['Branch'];
  $year = $row['Year']
 ?>

 -->
<label for='studentID'>     Student ID: </label> 
 <label><strong><?php echo $_SESSION["username"]; ?> </strong></label> <br> 

<label for='studentbranch'>     Branch: </label> <label><strong> <?php echo $_SESSION["branch"]; ?></strong></label><br>

<label for='studentyear'>     Year: </label> <label><strong><?php echo $_SESSION["year"]; ?> </strong></label>

<br><br><br>
<!-- body part -->

<!-- <button id="button">View My Attendance </button> -->
<!-- <div id="iframeHolder"></div> -->
  <!-- <script  src="index1.js"></script> -->


<?php 
    
    }
    else{
      header('location:new.php');
    }

?>

</body>
</html>
