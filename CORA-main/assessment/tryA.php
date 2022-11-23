<?php
session_start();
require "../config/config.php";
require "../config/db.php";

$id = $_SESSION['user_id'];


$sql = "SELECT * FROM question";
$result = mysqli_query($conn, $sql);

$answer_array = [];
foreach($result as $row) {
    $answer_array[] = $row['q_id'];
    // echo $row['q_id'];
}

    ?>
    <form action="tryQ.php" method="POST">
    <h2>R</h2>
    <?php

    
    //R1
    $sql = "SELECT * FROM question WHERE category = 'R1'";
    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array);?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
    <h2>I</h2>
    <?php
    //R2
    $sql = "SELECT * FROM question WHERE category = 'I1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="i[]" <?php echo in_array($row['q_id'], $answer_array);?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }

?>  
    <input type="submit" name="submit" value="submit">
    </form>