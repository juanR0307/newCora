<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CORA Registration Form</title>
<link rel="stylesheet" href="registrationForm.css">

<body style="background-color:powderblue;">

<form action="login.php" method="get">
	<button type="submit" class="back-btn">Go back to login page</button>
</form>

<div class="form-wrapper">
<form class="form" action="#" method="POST">
  <div class="container">
    <h1><center>Registration Form</center></h1>
    <p><center>Fill up this form.</center></p>
    <hr>
	
	<div>
    <label for="fname"><b>First Name</b></label>
    <input type="text" name="fname" placeholder="First Name" required>
	</div>
	
	<div>
    <label for="mname"><b>Middle Name</b></label>
    <input type="text" name="mname" placeholder="Middle Name">
	</div>
	
	<div>
    <label for="lname"><b>Last Name</b></label>
    <input type="text" name="lname" placeholder="Last Name" required>
	</div>
	
	<div>
    <label for="idnumber"><b>ID number</b></label>
    <input type="text" name="idnumber" placeholder="ID number" required>
	</div>

	<div>
    <label for="password"><b>Password</b></label>
    <input type="password" name="password" placeholder="password" required>
	</div>
	<br>
	
	<div>
	<label for="birthday"><b>Birthday</b></label>
	<input type="date" name="birthday"> 
	</div>
	
	<div>
	<label for="sex"><b>Sex</b></label><br>
	<input type="radio" id="M" name="sex" value="Male">
	<label for="male">Male</label><br>
	<input type="radio" id="F" name="sex" value="Female">
	<label for="female">Female</label><br>
	</div>
	<br>
	
	<label for="course"><b>Course:</b></label>
	<select name="course">
    <option value="1">Bachelor of Science in Information Technology</option>
    <option value="2">Bachelor of Science in Computer Science</option>
	<option value="3">Bachelor of Science in Criminology</option>
    <option value="4">Bachelor of Science in Accountancy</option>
    <option value="5">Bachelor of Science in Business Administration</option>
    </select>
	
	<label for="yearlevel"><b>Year Level:</b></label>
	<select name="yearlevel">
    <option value="1st Year">1st Year</option>
    <option value="2nd Year">2nd Year</option>
	<option value="3rd Year">3rd Year</option>
    <option value="4th Year">4th Year</option>
    </select>
	
	<hr>
    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
</form>
</div>
<br>
</head>
</body>
</html>