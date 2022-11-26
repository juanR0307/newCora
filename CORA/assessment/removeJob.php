<?php
session_start();
require "../config/config.php";
require "../config/db.php";


    if(isset($_GET['id'])){
        $jobID = $_GET['id'];
        $id = $_SESSION['user_id'];

        $sql = "DELETE FROM selectedjobs WHERE job_id = $jobID AND student_id = $id";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_affected_rows($conn) > 0){
            header("location: selectJob.php?err= Deleted successfuly.");
        }else{
            header("location: selectJob.php");
        }
    }
    else{
        echo"error";
    }

?>