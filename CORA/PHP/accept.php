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
    $sql = "INSERT INTO student SELECT * FROM requests WHERE student_id=$id "; 
    $result = mysqli_query($conn, $sql);
    if($result){
        $sql2 = "DELETE FROM requests WHERE student_id=$id";
        $result = mysqli_query($conn, $sql2);
        if($result){
            header("Location: ../requests.php?success=successfully accepted");
        } 
        else {
            header("Location: ../requests.php?error=unknown error occured&$user_data");
        }
    }
    else {
        header("Location: ../requests.php?error=unknown error occured");
    }
}else{
	header("Location: ../requests.php");
}
?>