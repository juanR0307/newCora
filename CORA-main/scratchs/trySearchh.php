<?php
    require "config/config.php";
    require "config/db.php";
    session_start();

    //run query
    $query = 'SELECT CONCAT(jobName," ", onet," ", jobCode, " ", ed) as occupation
    FROM jobs';

    $result = $conn->query($query);

    // set array
    $array = array();

    // look through query
    while($row = $result->fetch_assoc()){

        // add each row returned into an array
        $array[] = $row; 
    }

    $q = $_REQUEST["q"];

    $hint = "";

    if ($q !== "") {

        $q = strtolower($q);

        foreach($array as $name) {
            $name = implode($name);

            if (stristr($name, $q, false)) {

                if ($hint === "") {
                    ?> <td> <?php

                    $hint = $name;
                } 

                else {     
                    $hint .= ", $name";
                }
            }
        }
    }

    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;

?>