<?php

session_start();
require "config/config.php";
require "config/db.php";


/*if($_SESSION['user_id']) {

}
else {
    header("location: login.php");
}*/


if (isset($_GET['id'])){
	

    
	function validate($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
        
		$id = validate($_GET['id']);
		$sql = "SELECT * FROM student WHERE student_id = $id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0 ){
			$row = mysqli_fetch_assoc($result);
		}else{
			header("Location: viewStudent.php");
		}
        

}else{
    echo"error";
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewStudentStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>CGA</title>
</head>
<body>
<div class="sidebar">
    <h2>CORA</h2>
    <ul>
    <li><a href="index.php" ><i class="bi bi-house-fill"></i>Home</a></li>
        <li><a href="#" ><i class="bi bi-pie-chart-fill"></i>Charts</a></li>
        <li><a href="students.php" class="active"><i class="bi bi-person-fill"></i>Students</a></li>
       <!-- <li><a href="exam.php" ><i class="bi bi-file-earmark-text-fill"></i>Exam</a></li>
        <li><a href="#" ><i class="bi bi-grid-fill"></i>Strands</a></li>
        <li><a href="#" ><i class="bi bi-info-square-fill"></i>About us</a></li>
        <li><a href="#" ><i class="bi bi-chat-dots-fill"></i>Contact us</a></li>-->
    </ul> 
</div>  


<div class="container">
    <h2>Student Profile</h2>

    <a href="students.php">
        <button class="btnBack">
            Back
        </button>
    </a>

    <div class="student-panel">qs
        <div class="details">
            <?php while($rows = mysqli_fetch_assoc($result)); ?>
            <h3>Details</h3>
            <p>Name:<span class="data"><?php echo $row['firstname'] ." ". $row['lastname']; ?></span> </p>
            <p>Gender:<span class="data"><span><?php echo $row['sex']?></p>
            <p>Section:<span class="data"><?php echo $row['section']?></span> </p>
            <p>School Year:<span class="data"><?php echo $row['school_yr']?> </p>
            <p></p>
        </div>
        <div class="results">
            <h3>Results</h3>
            <p>Status: </p>
            <p>Code: </p>
            <p>Occupations: </p>
            <p>Strands: </p>
        </div>
    </div>
</div>

</body>
</html>