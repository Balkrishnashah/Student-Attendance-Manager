<?php 
session_start();
if($_SESSION["username"] == true){
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_manager";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
     if($_SESSION["username"] == true){
   

?>

<!-- <!DOCTYPE html> -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VCET Attendance Manager</title>
  <link rel="stylesheet" href="../index.css">


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
    <a href="teacher_index.php">Home</a>
    <a href="about.php">About</a>
    <a href="teacher_attendance.php">Attendance</a>
    <!-- <a href="profile.php">Profile</a> -->
    <a href="../logout.php">Logout</a>
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
<label for='Teacher-ID'>Teacher ID: </label> 
 <label><strong><?php echo $_SESSION["username"]; ?> </strong></label> <br> 

<label for='Branch'>Branch:  </label> <label><strong> <?php echo $_SESSION["branch"]; ?></strong></label><br>

<label for='Name'>Name: </label> <label><strong><?php echo $_SESSION["year"]; ?> </strong></label>

<br><br><br>
<!-- body part -->

<!-- <button id="button">View My Attendance </button> -->
<!-- <div id="iframeHolder"></div> -->
  <!-- <script  src="index1.js"></script> -->


<?php 
    
    }
    else{
      header('location:teacher_login.php');
    }

?>
<?php 
    
    }
    else{
      header('location:teacher_login.php');
    }

?>
</body>
</html>
