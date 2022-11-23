<?php
session_start();
require "../config/config.php";
require "../config/db.php";

$host="localhost";
$user="root";
$password="";
$db="students";


?>

<html>
    <head>
        <title>CheckAll and UnCheckAll</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="assessment.css">
    </head>
    <body>
    <?php

        $id = $_SESSION['user_id'];


        $sql = "SELECT * FROM question";
        $result = mysqli_query($conn, $sql);

        $answer_array = [];
        foreach($result as $row) {
            $answer_array[] = $row['q_id'];
            // echo $row['q_id'];
        }

            ?>

        <div class="container-q">
            <!-- Question Form -->
            <form action="checkOccupation.php" method="POST">

            <div class="h-text">Occupations</div>
                <p>The following is a list of occupations. Check the box for those occupations that interest or appeal to you. Leave the box empty for 
                    those applications that you dislike or find uninteresting.</p>


                <div class="h-text">R</div>
                    <?php
                    //#################################### R
                    $sql = "SELECT * FROM question WHERE category = 'R3'";
                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>

                <div class="h-text">I</div>
                    <?php
                    //#################################### I
                    $sql = "SELECT * FROM question WHERE category = 'I3'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="i[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>

                <div class="h-text">A</div>
                    <?php
                    //#################################### A
                    $sql = "SELECT * FROM question WHERE category = 'A3'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="a[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>

                <div class="h-text">S</div>
                    <?php
                    //#################################### S
                    $sql = "SELECT * FROM question WHERE category = 'S3'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="s[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>
                    
                <div class="h-text">E</div>
                    <?php
                    //#################################### E
                    $sql = "SELECT * FROM question WHERE category = 'E3'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="e[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>
                <div class="h-text">C</div>
                    <?php
                    //#################################### C
                    $sql = "SELECT * FROM question WHERE category = 'C3'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input type="checkbox" name="c[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }

                    ?>  
                <input type="submit" name="submit" value="next">
            </form>
        </div>
    </body>
</html>


