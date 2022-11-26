<?php 

if(isset($_GET['id'])){
	include "../config/config.php";
    include "../config/db.php";

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

		$id = validate($_GET['id']);

		$sql = "DELETE FROM student WHERE student_id=$id";
			$result = mysqli_query($conn, $sql);
			if($result){
				header("Location: ../students.php?success=successfully deleted");
			}
			else {
				header("Location: ../students.php?error=unknown error occured&$user_data");
			}
}else{
	header("Location: ../students.php");
}