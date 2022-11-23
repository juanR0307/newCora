<?php


$sql = "SELECT * FROM answer WHERE student_id ='$id'";
$result = mysqli_query($conn, $sql);

$answer_array = [];

foreach($result as $row) {
    $answer_array[] = $row['q_id'];
    // echo $row['q_id'];
}

    ?>

<div class="h-text">Activities</div>

<div class="h-text">R</div>
    <?php
    //####################################### R1
    $sql = "SELECT * FROM question WHERE category = 'R1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
<div class="h-text">I</div>
    <?php
    //####################################### I1
    $sql = "SELECT * FROM question WHERE category = 'I1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="i[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
<div class="h-text">A</div>
    <?php
    //####################################### A1
    $sql = "SELECT * FROM question WHERE category = 'A1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="a[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
<div class="h-text">S</div>
    <?php
    //####################################### S1
    $sql = "SELECT * FROM question WHERE category = 'S1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="s[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
<div class="h-text">E</div>
    <?php
    //####################################### I1
    $sql = "SELECT * FROM question WHERE category = 'E1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="e[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }
    ?>
<div class="h-text">C</div>
    <?php
    //####################################### C1
    $sql = "SELECT * FROM question WHERE category = 'C1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="c[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"></span> <?php echo $row['question']?></p>
        <?php
    }


?>