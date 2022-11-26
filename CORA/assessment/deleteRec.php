<?php
    session_start();
    require "../config/config.php";
    require "../config/db.php";

    $id = $_SESSION['user_id'];

    $sql = "DELETE FROM answer WHERE student_id = $id";
    $result = mysqli_query($conn, $sql);

    $sql1 = "DELETE FROM daydream WHERE student_id = $id";
    $result1 = mysqli_query($conn, $sql1);
    
    $sql2 = "DELETE FROM result WHERE student_id = $id";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "DELETE FROM selectedjobs WHERE student_id = $id";
    $result3 = mysqli_query($conn, $sql3);

    $sql4 = "DELETE FROM selectedjobs2 WHERE student_id = $id";
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = "DELETE FROM stud_code WHERE student_id = $id";
    $result5 = mysqli_query($conn, $sql5);

    $sql6 = "DELETE FROM tests WHERE student_id = $id";
    $result6 = mysqli_query($conn, $sql6);

    if($result2 == true) {
        header("location: daydream.php");
    }
    else {
        echo "error";
    }


?>