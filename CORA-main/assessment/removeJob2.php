<?php
session_start();
require "../config/config.php";
require "../config/db.php";


    if(isset($_GET['id'])){
        $jobID = $_GET['id'];
        $id = $_SESSION['user_id'];

        $sql = "DELETE FROM selectedjobs2 WHERE job_id = $jobID AND student_id = $id";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_affected_rows($conn) > 0){
            header("location: selectJob2.php?err=Deleted successfuly.");
        }else{
            header("location: selectJob2.php");
        }
    }
    else{
        echo"error";
    }

?>