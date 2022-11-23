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
        if(!isset($_POST['a'])) {
            $_POST['a'] = [];
        }
        if(!isset($_POST['s'])) {
            $_POST['s'] = [];
        }
        if(!isset($_POST['e'])) {
            $_POST['e'] = [];
        }
        if(!isset($_POST['c'])) {
            $_POST['c'] = [];
        }

    // R category
    if(isset($_POST['submit'])) {

        $selected = $_POST['r'];

        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'R3')";
            $result = mysqli_query($conn, $sql);
        }
       
    
        // I category
        $selected = $_POST['i'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'I3')";
            $result = mysqli_query($conn, $sql);
        }
        
        // A category
        $selected = $_POST['a'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'A3')";
            $result = mysqli_query($conn, $sql);
        }


        // S category
        $selected = $_POST['s'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'S3')";
            $result = mysqli_query($conn, $sql);
        }


        // E category
        $selected = $_POST['e'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'E3')";
            $result = mysqli_query($conn, $sql);
        }


        // C category
        $selected = $_POST['c'];
        
        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id, category) VALUES ($id, $qId, 'C3')";
            $result = mysqli_query($conn, $sql);
        }
 
    }





if(isset($_POST['submit'])) {
  
        $fieldR = $_POST['r'];
        $fieldI = $_POST['i'];
        $fieldA = $_POST['a'];
        $fieldS = $_POST['s'];
        $fieldE = $_POST['e'];
        $fieldC = $_POST['c'];
        
        $contentR = '';
        $contentR = $contentR.count($fieldR);

        $contentI = '';
        $contentI = $contentI.count($fieldI);

        $contentA = '';
        $contentA = $contentA.count($fieldA);


        $contentS = '';
        $contentS = $contentS.count($fieldS);

        $contentE = '';
        $contentE = $contentE.count($fieldE);


        $contentC = '';
        $contentC = $contentC.count($fieldC);


            $sql = "INSERT INTO tests (R, I, A, S, E, C, test_category, student_id) 
            VALUES ($contentR, $contentI, $contentA, $contentS, $contentE, $contentC, 'occupation', $id)";

            $result = mysqli_query($conn, $sql);
            
            if($result) {
                if(mysqli_affected_rows($conn)>0) {
                    header("location: selfEstimate.php");
                }
                else {
                    echo("Registration Failed");
                }
            }	
    }
?>




















