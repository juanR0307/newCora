<?php
    require "config/config.php";
    require "config/db.php";


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CGA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="req.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  

</head>
<body>
<!--Sidebar--> 
<!-- <div class="sidebar">
<h2>CORA</h2>
<ul>
    <li><a href="index.php" ><i class="bi bi-house-fill"></i>Home</a></li>
    <li><a href="#" ><i class="bi bi-pie-chart-fill"></i>Charts</a></li>
    <li><a href="students.php" class="active" ><i class="bi bi-person-fill"></i>Students</a></li>
   <li><a href="exam.php" ><i class="bi bi-file-earmark-text-fill"></i>Exam</a></li>
    <li><a href="#" ><i class="bi bi-grid-fill"></i>Strands</a></li>
    <li><a href="#" ><i class="bi bi-info-square-fill"></i>About us</a></li>
    <li><a href="#" ><i class="bi bi-chat-dots-fill"></i>Contact us</a></li>
    
</ul> 
</div>   -->

<div class="container">
    <h2>Add Student</h2>

    <form action="insertRequest.php" method="POST" class="form-reg">
        
        <div class="input-group">
            <label for="firstname"><b>First Name:</b></label>
            <input type="text" name="firstname" placeholder="First Name" id="firstname" 
           
            required>
        </div>

        <div class="input-group">
            <label for="middlename"><b>Middle Name:</b></label>
            <input type="text" name="middlename" placeholder="Middle Name" id="middlename"
            
            >
        </div>

        <div class="input-group">
            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" name="lastname" placeholder="Last Name" id="lastname"
            
            required>
        </div>
        

        <div class="input-group">
            <label for="sex">Sex:</label>
            <select name="sex" id="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        
        <div class="input-group">
            <label for="section">Section:</label>
            <select name="section" id="section">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="input-group">
            <label for="section">Year:</label>
            <select name="year" id="year">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
        </div>
       
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="username" id="username"
            value="<?php if(isset($_GET['username']))
		   		       			echo($_GET['username']); ?>"
            required>

        </div>

        <div class="input-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="password" id="pass"
            value="<?php if(isset($_GET['pass']))
		   		       			echo($_GET['pass']); ?>"
            required>

        </div>
        
        <button class="btn-reg" name="register" type="submit">Register</button>
    </form>



</div>


</body>
</html>