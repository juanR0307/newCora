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
            <form action="checkCompetencies.php" method="POST">

            <div class="h-text">Competencies</div>
            <p>Check the box for those activities you can do well or competently. 
                Leave the box empty for those activities you have never performed or perform poorly.</p>

            
                <div class="h-text">R</div>
                    <?php
                    //#################################### R1
                    $sql = "SELECT * FROM question WHERE category = 'R2'";
                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>

                <div class="h-text">I</div>
                    <?php
                    //#################################### I1
                    $sql = "SELECT * FROM question WHERE category = 'I2'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="i[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>

                <div class="h-text">A</div>
                    <?php
                    //#################################### A1
                    $sql = "SELECT * FROM question WHERE category = 'A2'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="a[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>
                <div class="h-text">S</div>
                    <?php
                    //#################################### S1
                    $sql = "SELECT * FROM question WHERE category = 'S2'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="s[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>
                <div class="h-text">E</div>
                    <?php
                    //#################################### E1
                    $sql = "SELECT * FROM question WHERE category = 'E2'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="e[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }
                    ?>
                <div class="h-text">C</div>
                    <?php
                    //#################################### C1
                    $sql = "SELECT * FROM question WHERE category = 'C2'";

                    $result = mysqli_query($conn, $sql);

                    foreach($result as $row) {
                        ?>
                        <p><span><input class="large" type="checkbox" name="c[]" <?php echo in_array($row['q_id'], $answer_array);?> 
                        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
                        <?php
                    }

                    ?>  
                <input type="submit" name="submit" value="next">

            </form>
        </div>
    </body>
</html>


