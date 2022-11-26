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
    $sql = "DELETE FROM requests WHERE student_id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../requests.php?success=declined");
    }
    else {
        header("Location: ../requests.php?error=unknown error occured");
    }
}else{
	header("Location: ../requests.php");
}
?>