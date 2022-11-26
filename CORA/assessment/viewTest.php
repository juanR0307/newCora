<?php
    session_start();
    require "../config/config.php";
    require "../config/db.php";

    $id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assessment.css">
    <title>Document</title>
</head>
<body>
     <div class="cont-top">
        <a href="../studentPage.php">
            <div class="btn-view">
                    Back
            </div>
        </a>
     </div>          
    <div class="container-q">
        <?php 
            include "retrieveActivities.php";
            include "retrieveCompetencies.php";
            include "retrieveOccupation.php";
            include "retrieveEstimate.php";
        ?>

    </div>
    



</body>
</html>