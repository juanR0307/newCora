<?php
    session_start();
    require "config/config.php";
    require "config/db.php";

    if($_SESSION['user_id']) {

    }
    else {
        header("location: login.php");
    }

    $id = $_SESSION['user_id'];


    $sql = "SELECT * FROM  daydream WHERE student_id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
      echo '<script type="text/javascript">confirm("hi")</script>';
    }
    else {
        header("location:assessment/daydream.php");
    }   


?>