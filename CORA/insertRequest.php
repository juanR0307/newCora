<?php

if (isset($_POST['register'])){
	include "config/config.php";
    include "config/db.php";

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

		$firstname = validate($_POST['firstname']);
		$middlename = validate($_POST['middlename']);
		$lastname = validate($_POST['lastname']);
		$sex = validate($_POST['sex']);
		$section = validate($_POST['section']);
		$year = validate($_POST['year']);
        $username = validate($_POST['username']);
        $pass = validate($_POST['pass']);
        $date = date("Y/m/d");

		$user_data = 'firstname='.$firstname. '&middlename='.$middlename. 
        '&lastname='. $lastname. '&sex='.$sex. 'section'.$section. '&year='.$year.
		'&username='. $username.
         '&pass='. $pass ;

		
			$sql = "INSERT INTO requests(student_id,firstname, middlename ,lastname, age, sex, date, section, school_year, username, password) 
            VALUES(123, '$firstname', '$middlename', '$lastname', 12, '$sex', '$date', '$section','$year','$username', '$pass')";
			$result = mysqli_query($conn, $sql);
			if($result){
				header("Location: index.php?sussess=inserted successfully");
				
				
			}
			else {
				header("Location: index.php?error=unknown error occured&$user_data");
			}
		
}