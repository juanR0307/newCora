<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
require "../config/config.php";
require "../config/db.php";

   $id = $_SESSION['user_id'];

   $sql = "SELECT * FROM testactivities WHERE student_id = $id";
   
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



        $total = array($R, $I, $A, $S, $E, $C);
        rsort($total);
        
        $new = array_slice($total, 0, 6);

        list($letter1, $letter2, $letter3, $letter4, $letter5, $letter6) = $new;
        echo "$letter1, $letter2, $letter3, $letter4, $letter5, $letter6<br><br>";

        
$stop = 0;
$i = 0;
$code = array();

//break; if letter 1 is equal to letter 2
        if($letter1 == $letter2){
            // echo "Letter1 is equal to letter2<br>";
            if($letter1 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter1 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter1 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter1 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter1 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter1 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
            // $final1 = array($codeR, $codeI, $codeA, $codeS, $codeE, $codeC);

        }
        else{
            // echo "<br>Letter1 is not equal to letter2<br>";
        //break box1
            if($letter1 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter1 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter1 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter1 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter1 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter1 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;

        //break; if letter 2 is equal to letter3
        if($letter2 == $letter3){
            // echo "<br>Letter2 is equal to Letter3<br>";
            if($letter2 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter2 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter2 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter2 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter2 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter2 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;


            // break letter 4 and 5
        if($letter4 == $letter5 && $stop != 3){
            // echo "<br>Letter5 is equal to letter6<br>";
            if($letter4 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
        }
        elseif($stop != 3) {
            // echo "<br>Letter4 is not equal to letter5<br>";
        //break box3
            if($letter4 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
        }

      
        }
        else {
            // echo "<br>Letter2 is not equal to letter3<br>";
            if($letter2 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter2 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter2 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter2 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter2 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter2 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;

        }
        }

//break letter 3 and 4
        if($letter3 == $letter4 && $stop != 3){
            // echo "<br>Letter3 is equal to letter4 <br>";
            if($letter3 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter3 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter3 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter3 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter3 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter3 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
        }
        elseif($stop != 3){
            // echo "<br>Letter3 is not equal to letter4 <br>";
            if($letter3 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter3 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter3 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter3 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter3 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter3 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;

        // break letter 4 and 5
        if($letter4 == $letter5 && $stop != 3){
            // echo "<br>Letter5 is equal to letter6<br>";
            if($letter4 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
        }
        elseif($stop != 3){
            // echo "<br>Letter4 is not equal to letter5<br>";
        //break box3
            if($letter4 == $R) {
                echo "R";
                $code[$i] = "R";
                $i += 1;
            }
            if($letter4 == $I) {
                echo "I";
                $code[$i] = "I";
                $i += 1;
            } 
            if($letter4 == $A) {
                echo "A";
                $code[$i] = "A";
                $i += 1;
            } 
            if($letter4 == $S) {
                echo "S";
                $code[$i] = "S";
                $i += 1;
            } 
            if($letter4 == $E) {
                echo "E";
                $code[$i] = "E";
                $i += 1;
            } 
            if($letter4 == $C) {
                echo "C";
                $code[$i] = "C";
                $i += 1;
            } 
            echo " ";
            $stop += 1;
        }
        }
    


// break letter 5 and 6
    if($letter5 == $letter6 && $stop != 3){
        // echo "<br>Letter5 is equal to letter6<br>";
        if($letter5 == $R) {
            echo "R";
            $code[$i] = "R";
                $i += 1;
        }
        if($letter5 == $I) {
            echo "I";
            $code[$i] = "I";
                $i += 1;
        } 
        if($letter5 == $A) {
            echo "A";
            $code[$i] = "A";
            $i += 1;
        } 
        if($letter5 == $S) {
            echo "S";
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter5 == $E) {
            echo "E";
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter5 == $C) {
            echo "C";
            $code[$i] = "C";
            $i += 1;
        } 

        echo " ";
        $stop += 1;
    }
    elseif($stop != 3){
        // echo "<br>Letter5 is not equal to letter6<br>";
    //break box3
        if($letter5 == $R) {
            echo "R";
            $code[$i] = "R";
            $i += 1;
        }
        if($letter5 == $I) {
            echo "I";
            $code[$i] = "I";
            $i += 1;
        } 
        if($letter5 == $A) {
            echo "A";
            $code[$i] = "A";
            $i += 1; 
        } 
        if($letter5 == $S) {
            echo "S";
            $code[$i] = "S";
            $i += 1;
        } 
        if($letter5 == $E) {
            echo "E";
            $code[$i] = "E";
            $i += 1;
        } 
        if($letter5 == $C) {
            echo "C";
            $code[$i] = "C";
            $i += 1;
        } 
        echo " ";

    }


    print_r($code);

    $finalCode = implode(" ", $code);

    echo "<br><br>";
 

    // $encode1 = json_encode($code);
  

    $sql = "INSERT INTO studcode(code, student_id) VALUES ('$finalCode', $id)";
    $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
        // header("location: tryFinal.php");

        // $sql = "SELECT * FROM jobs 
        // WHERE hoc LIKE '%".$finalCode."%'";

        $r = 'SIR';

        $sql = "SELECT * FROM jobs WHERE hoc LIKE '".$r."'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table>
                <thead> 
                    <tr>
                        <th>Occupational Title</th>
                        <th>O*NET</th>
                        <th>HOC</th>
                        <th>ED</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {

                        $jobName = $row['jobName'];
                        $onet = $row['onet'];
                        $jobCode = $row['hoc'];
                        $ed = $row['ed'];            
                        
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $jobName;?></td>
                                <td><?php echo $onet;?></td>
                                <td><?php echo $jobCode;?></td>
                                <td><?php echo $ed;?></td>
                                <!-- <td><button class="btn" onclick="copy()">copy</button></td> -->
                            </tr>
                        </tbody>
                    
                        <?php
                    }
                
                ?>

            </table>
            </div>
    
            <?php
        }

    // }
?>


</body>
</html>













