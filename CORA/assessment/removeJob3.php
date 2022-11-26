<?php
session_start();
require "../config/config.php";
require "../config/db.php";


    if(isset($_GET['id'])){
        $jobID = $_GET['id'];
        $id = $_SESSION['user_id'];

        $sql = "DELETE FROM daydream WHERE job_id = $jobID AND student_id = $id";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_affected_rows($conn) > 0){
            header("location: daydream.php");
        }else{
            header("location: daydream.php");
        }
    }
    else{
        echo"error";
    }

?>