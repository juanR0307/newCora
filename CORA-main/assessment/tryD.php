<?php
session_start();
require "../config/config.php";
require "../config/db.php";
$id = $_SESSION['user_id'];

$sql = "SELECT * FROM answer WHERE student_id ='$id'";

    $result = mysqli_query($conn, $sql);
    
    $answer_array = [];
    
    foreach($result as $row) {
        $answer_array[] = $row['q_id'];
        // echo $row['q_id'];
    }
    
    $sql = "SELECT * FROM question";
    
    $result = mysqli_query($conn, $sql);
    
    foreach($result as $row) {
        ?>
        <input type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"> <?php echo $row['question']?><br>
        <?php
    }
?>