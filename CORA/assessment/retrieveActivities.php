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
    $sql = "SELECT * FROM tests WHERE test_category = 'Activities' AND student_id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $R = $row['R'];
            $I = $row['I'];
            $A = $row['A'];
            $S = $row['S'];
            $E = $row['E'];
            $C = $row['C'];
    ?>
    <p class="s-text">total:<span class="x-text"><?php echo $R;?></span></p>
    <hr>

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
    <p class="s-text">total:<span class="x-text"><?php echo $I;?></span></p>
    <hr>

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
    <p class="s-text">total:<span class="x-text"><?php echo $A;?></span></p>
    <hr>

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
    <p class="s-text">total:<span class="x-text"><?php echo $S;?></span></p>
    <hr>

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
    <p class="s-text">total:<span class="x-text"><?php echo $E;?></span></p>
    <hr>

<div class="h-text">C</div>
    <?php
    //####################################### C1
    $sql = "SELECT * FROM question WHERE category = 'C1'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $row) {
        ?>
        <p><span><input type="checkbox" name="c[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"> </span><?php echo $row['question']?></p>
        <?php
    }?>
    <p class="s-text">total:<span class="x-text"><?php echo $C;?></span></p>
    <hr>
    <?php
        }   
    }


    ?>