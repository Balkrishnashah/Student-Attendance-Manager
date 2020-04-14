<!-- <!DOCTYPE html> -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VCET Attendance Manager Login</title>
  <link rel="stylesheet" href="./login.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form name='register-form' class="register-form" method="post" action="register.php">
    
      <input type="text" placeholder="studentID" name="username" />

      <select placeholder='branch' name="branch">
        
        <option >INFT</option>
        <option >CSE</option>
        <option >EXTC</option>
        <option >MECH</option>
        <option >INST</option>
        <option >CIVIL</option>
      </select>

      <select placeholder='year' name="year">

        <option value='FE'>First Year</option>
        <option value='SE'>Second year</option>
        <option value='TE'>Third Year</option>
        <option value='BE'>Final year</option>

      </select>

       <input type="email" placeholder="email address"    name="email"/>  

      <!-- value="<?php echo $email; ?>" -->
      <input type="password" placeholder="password" name="password" />



      <button type="submit" class="btn" name='register_btn'>create</button>

      <p class="message">Already registered? <a href="#">Sign In</a></p>



    </form>
    <form name='login-form' class="login-form" method="post" action="login.php">
      <input type="text" name="studentid" placeholder="studentID"/>
      <input type="password" name='password' placeholder="password"/>
      <button type="submit" name="login_btn">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="login.js"></script>

</body>
</html>
