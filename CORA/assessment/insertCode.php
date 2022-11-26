<?php
   session_start();
   require "../config/config.php";
   require "../config/db.php";

   $id = $_SESSION['user_id'];

   $sql = "SELECT * FROM result WHERE student_id = $id";
   $result = mysqli_query($conn, $sql);

   while($row = mysqli_fetch_assoc($result)) {

    $R = $row['R'];
    $I = $row['I'];
    $A = $row['A'];
    $S = $row['S'];
    $E = $row['E'];   
    $C = $row['C']; 

   }
        $total = array($R, $I, $A, $S, $E, $C);
        rsort($total);
        
        $new = array_slice($total, 0, 3);
        list($letter1, $letter2, $letter3) = $new;

        


        // $stop = 0;
        $i = 0;
        $code = array();


        if($letter1 == $R) {
            $code[$i] = "R";
            $i += 1;
        }
        if($letter1 == $I) {
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter1 == $A) {
            $code[$i] = "A";
            $i += 1;
        } 
        if($letter1 == $S && $i != 3) {
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter1 == $E && $i != 3) {
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter1 == $C && $i != 3) {
            $code[$i] = "C";
            $i += 1;
        }

        //############## letter 2

        if($letter2 == $R && $i != 3) {
            $code[$i] = "R";
            $i += 1;
        }
        if($letter2 == $I && $i != 3) {
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter2 == $A && $i != 3) {
            $code[$i] = "A";
            $i += 1;
        } 
        if($letter2 == $S && $i != 3) {
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter2 == $E && $i != 3) {
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter2 == $C && $i != 3) {
            $code[$i] = "C";
            $i += 1;
        }

        //############## letter 3

        if($letter3 == $R && $i != 3) {
            $code[$i] = "R";
            $i += 1;
        }
        if($letter3 == $I && $i != 3) {
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter3 == $A && $i != 3) {
            $code[$i] = "A";
            $i += 1;
        } 
        if($letter3 == $S && $i != 3) {
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter3 == $E && $i != 3) {
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter3 == $C && $i != 3) {
            $code[$i] = "C";
            $i += 1;
        }



        print_r($code);
        







    $finalCode = implode("", $code);
    echo "<br><br>";
    
 
  
    // $sql = "INSERT INTO stud_code(code, student_id) VALUES ('$finalCode', $id)";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_affected_rows($conn) > 0) {
    //     header("location: selectJob.php");
    // }

?>














