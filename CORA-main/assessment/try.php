<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="students";

try {
	$conn = mysqli_connect($host, $user, $password, $db);
	echo("");
}
catch (mysqli_sql_exception $ex) {
	echo("Connection Failed");
}

$id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="tryCheck.php" method="POST">
    <?php
    $sql = "SELECT * FROM questions";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        foreach($result as $row) {
        ?>
        <input type="checkbox" name="r[]" value="<?php echo $row['q_id']?>">
        <?php echo $row['question']?><br>


        <?php
        }
    }

    ?>
    
    <input type="submit" name="submit" value="submit">
    </form>


</body>
</html>



















<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="students";

try {
	$conn = mysqli_connect($host, $user, $password, $db);
	echo("");
}
catch (mysqli_sql_exception $ex) {
	echo("Connection Failed");
}
    $id = $_SESSION['user_id'];


    if(isset($_POST['submit'])) {

        $selected = $_POST['r'];

        foreach($selected as $qId) {

            $sql = "INSERT INTO answer (student_id, q_id) VALUES ($id, $qId)";
            $result = mysqli_query($conn, $sql);

        }

    }



    $sql = "SELECT * FROM answer WHERE student_id ='$id'";

    $result = mysqli_query($conn, $sql);
    
    $answer_array = [];
    
    foreach($result as $row) {
        $answer_array[] = $row['q_id'];
        // echo $row['q_id'];
    }
    
    $sql = "SELECT * FROM questions";
    
    $result = mysqli_query($conn, $sql);
    
    foreach($result as $row) {
        ?>
        <input type="checkbox" name="r[]" <?php echo in_array($row['q_id'], $answer_array) ? 'checked':'';?> 
        value="<?php echo $row['q_id']?>"> <?php echo $row['question']?><br>
        <?php
    }









?>




<!-- //retrive result -->
<?php
$sql = "SELECT * FROM tests WHERE student_id = $id";
   
   $result = mysqli_query($conn, $sql);
                    

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <thead> 
                    <tr>
                        <th>R</th>
                        <th>I</th>
                        <th>A</th>
                        <th>S</th>
                        <th>E</th>
                        <th>C</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {

                        $R = $row['R'];
                        $I = $row['I'];
                        $A = $row['A'];
                        $S = $row['S'];
                        $E = $row['E'];   
                        $C = $row['C'];               
                        
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $R;?></td>
                                <td><?php echo $I;?></td>
                                <td><?php echo $A;?></td>
                                <td><?php echo $S;?></td>
                                <td><?php echo $E;?></td>
                                <td><?php echo $C;?></td>
                            </tr>
                        </tbody>
                    
                        <?php
                    }
                
                ?>

            </table>
            </div>
    
            <?php
            echo "<br>";
        }

        else {
            echo "No data found";
        }





// break print tests
        $sql = "SELECT * FROM tests WHERE student_id = $id";
   
   $result = mysqli_query($conn, $sql);
                    

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <thead> 
                    <tr>
                        <th>R</th>
                        <th>I</th>
                        <th>A</th>
                        <th>S</th>
                        <th>E</th>
                        <th>C</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {

                        $R = $row['R'];
                        $I = $row['I'];
                        $A = $row['A'];
                        $S = $row['S'];
                        $E = $row['E'];   
                        $C = $row['C'];               
                        
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $R;?></td>
                                <td><?php echo $I;?></td>
                                <td><?php echo $A;?></td>
                                <td><?php echo $S;?></td>
                                <td><?php echo $E;?></td>
                                <td><?php echo $C;?></td>
                            </tr>
                        </tbody>
                    
                        <?php
                    }
                
                ?>

            </table>
            </div>
    
            <?php
            echo "<br>";
        }

        else {
            echo "No data found";
        }

        
        $sql = "SELECT * FROM result WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <thead> 
                    <tr>
                        <th>R</th>
                        <th>I</th>
                        <th>A</th>
                        <th>S</th>
                        <th>E</th>
                        <th>C</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {

                        $R = $row['R'];
                        $I = $row['I'];
                        $A = $row['A'];
                        $S = $row['S'];
                        $E = $row['E'];   
                        $C = $row['C'];               
                        
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $R;?></td>
                                <td><?php echo $I;?></td>
                                <td><?php echo $A;?></td>
                                <td><?php echo $S;?></td>
                                <td><?php echo $E;?></td>
                                <td><?php echo $C;?></td>
                            </tr>
                        </tbody>
                    
                        <?php
                    }
                
                ?>

            </table>
            </div>
    
            <?php
            echo "<br>";
        }

        else {
            echo "No data found";
        }
