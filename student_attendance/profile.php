<!-- <!DOCTYPE html> -->
<?php 
    session_start();
    include 'conn.php';
    if($_SESSION["username"] == true){

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VCET Attendance Manager</title>
  <link rel="stylesheet" href="./index.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<center> <iframe id="iframe" src="report/profile.php"   height="700px" width="70%" frameborder="0"  allowtransparency="true" margin="0" scrolling="no"></iframe></center>');
        }
    });   
});
</script>

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



<label for='studentID'>     Student ID: </label> 
 <label><strong><?php echo $_SESSION["username"]; ?> </strong></label> <br> 

<label for='studentbranch'>     Branch: </label> <label><strong> <?php echo $_SESSION["branch"]; ?></strong></label><br>

<label for='studentyear'>     Year: </label> <label><strong><?php echo $_SESSION["year"]; ?> </strong></label>

<!-- <br><br><br> -->

<br><br><br>
<!-- body part -->

<button id="button">View Profile </button>
<div id="iframeHolder"></div>
  <!-- <script  src="index1.js"></script> -->

<?php 
 }
    else{
      header('location:new.php');
    }

?>
</body>
</html>
