<?php
session_start();
require "../config/config.php";
require "../config/db.php";


// if($i == 10) {
    if(isset($_GET['id'])){
        $jobID = $_GET['id'];
        $id = $_SESSION['user_id'];
        
        $sql = "SELECT * FROM selectedjobs WHERE job_id = $jobID";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $jobID1 = $row['job_id'];
            $id1 = $row['student_id'];
        }

        if($jobID1 == $jobID && $id1 == $id){
            header("location: selectJob.php?err=item already picked!");
        }
        else {

        $sql = "INSERT INTO selectedjobs (job_id ,student_id) VALUES ($jobID, $id)";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_affected_rows($conn) > 0){
            header("location: selectJob.php?success=Picked successfuly.");
        }else{
            header("location: selectJob.php");
        }
        }
    }
    else{
        echo"error";
    }
// }

?>