<?php
session_start();
require "../config/config.php";
require "../config/db.php";


// if($i == 10) {
    if(isset($_GET['id'])){
        $jobID = $_GET['id'];
        $id = $_SESSION['user_id'];
        
        $sql = "SELECT * FROM selectedjobs2 WHERE job_id = $jobID";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $jobID1 = $row['job_id'];
            $id1 = $row['student_id'];
        }

        if($jobID1 == $jobID && $id1 == $id){
            header("location: selectJob2.php?err=item already picked!");
        }
        else {

        $sql = "INSERT INTO selectedjobs2 (job_id ,student_id) VALUES ($jobID, $id)";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_affected_rows($conn) > 0){
            header("location: selectJob2.php?success=Picked successfuly.");
        }else{
            header("location: selectJob2.php");
        }
        }
    }
    else{
        echo"error";
    }
// }

?>