<?php
  session_start();
  require "config/config.php";
  require "config/db.php";


  if(isset($_POST['username'])) {
    
    $uname = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM student WHERE username='".$uname."' AND password='".$password."' limit 1";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)==1) {

      while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['user_id'] = $row['student_id'];
      header("Location: homePage.php");
      exit();
      }
    }
    else {
      echo "Invalid Username or Password";
      ?>
      <br><br>
      <button class="submit-btn" onclick="history.go(-1);">Login again</button>
      <?php
      exit();
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>CORA Web Application</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
</head>
<body>


  <center><h1>CORA Web Application</h1></center>
  <br>
  <div class="login-wrapper">
    <form method="POST" action="#" class="form">
      <!-- <img src="index.jpg" alt=""> -->
      <h2>Hello</h2>

      <div class="input-group">

        <input type="text" name="username" id="username" autocomplete="off" required>
        <label for="username">Username</label>

      </div>
      <div class="input-group">
        <input type="password" name="password" id="id_password" required>

        <label for="password">Password</label>

        <i class="far fa-eye" id="togglePassword"></i>

        <a href="enrollmentform.php">Forgot password?</a>

      </div>
      <br>
      <input type="submit" value="Login" class="submit-btn">
      <br>

      <a href="registrationForm.php"><center>Sign up?</center></a>
      
	</form>
   </div>
</body>
</html>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
