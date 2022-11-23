<?php
session_start();
require "../config/config.php";
require "../config/db.php";


    $id = $_SESSION['user_id'];

    if(!isset($_POST['r'])) {
        $_POST['r'] = [];
    }
    if(!isset($_POST['i'])) {
        $_POST['i'] = [];
    }

    if(isset($_POST['submit'])) {
        
        
        // R category
        $selected = $_POST['r'];

            foreach($selected as $qId) {
                $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'R1')";
                $result = mysqli_query($conn, $sql);
            }
        
    
        // I category
        $selected = $_POST['i'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'I1')";
            $result = mysqli_query($conn, $sql);
        }

    }

    if(isset($_POST['submit'])) {
        
        $fieldR = $_POST['r'];   
        $fieldI = $_POST['i'];
      
        
        $contentR = '';
        $contentR = $contentR.count($fieldR);

        echo $contentR;

        $contentI = '';
        $contentI = $contentI.count($fieldI);

        echo "$contentI\n";

        $sql = "INSERT INTO tests(R, I, test_category, student_id) 
        VALUES ($contentR, $contentI, 'activities', $id)";

        $result = mysqli_query($conn, $sql);
        
        if($result) {
            if(mysqli_affected_rows($conn)>0) {
                // header("location:competencies.php");
            }
            else {
                echo("Registration Failed");
            }
        }	
}