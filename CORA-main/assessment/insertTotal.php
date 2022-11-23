<?php
session_start();
require "../config/config.php";
require "../config/db.php";

$id = $_SESSION['user_id'];

        $sql = "SELECT SUM(R) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $sumR = $row['SUM(R)'];
        }

        $sql = "SELECT SUM(I) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $sumI = $row['SUM(I)'];
        }

        $sql = "SELECT SUM(A) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {

            $sumA = $row['SUM(A)'];
        }

        $sql = "SELECT SUM(S) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $sumS = $row['SUM(S)'];
        }

        $sql = "SELECT SUM(E) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $sumE = $row['SUM(E)'];
        }


        $sql = "SELECT SUM(C) from tests WHERE student_id = $id";
        $result =  mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $sumC = $row['SUM(C)'];
        }


        $sql = "INSERT INTO result(R, I, A, S, E, C, student_id) 
        VALUES ($sumR, $sumI, $sumA, $sumS, $sumE, $sumC, $id)";

        $result = mysqli_query($conn, $sql);
        
        if($result) {
            if(mysqli_affected_rows($conn)>0) {
                header("location: insertCode.php");
            }
            else {
                echo("Failed");
            }
        }	

?>













