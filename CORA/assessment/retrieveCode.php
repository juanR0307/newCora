<?php

$id = $_SESSION['user_id'];

$finalCode = "";

?>
    <h2>Daydream</h2>
<?php
$sql = "SELECT * FROM jobs INNER JOIN daydream ON jobs.id = daydream.job_id WHERE student_id = $id";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0) {
    ?>

    <div class="h-text">
        <?php
            $finalCode;
        ?>
    </div>
    <table class="tb">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Occupational Title</th>
                <th>O*NET</th>
                <th>HOC</th>
                <th>ED</th>
            </tr>
        </thead>

        <?php
            while($row = mysqli_fetch_assoc($result)) {
                $jobID = $row['job_id'];
                $jobName = $row['jobName'];
                $onet = $row['onet'];
                $jobCode = $row['jobCode'];
                $ed = $row['ed'];  
        ?>
        <tbody>
            <tr>
                <td><?php echo $jobID?></td>
                <td><?php echo $jobName;?></td>
                <td><?php echo $onet;?></td>
                <td><?php echo $jobCode;?></td>
                <td><?php echo $ed;?></td>
            </tr>
        </tbody>
            
        <?php
            }
        
        ?>

    </table>
        

<?php
    }

        ?>
        <h2>Computation</h2>
        <?php

            $sql = "SELECT *  FROM tests WHERE student_id = $id";
            $result = mysqli_query($conn, $sql);

            $sql1 = "SELECT * FROM result WHERE student_id = $id";
            $result1 = mysqli_query($conn, $sql1); 
           
            // if(mysqli_num_rows($result) > 0) {
        ?>
        <table class="tb">
                <thead> 
                    <tr>
                        <th>Test Category</th>
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
                        $Category = $row['test_category'];
                        $R = $row['R'];
                        $I = $row['I'];
                        $A = $row['A'];
                        $S = $row['S'];
                        $E = $row['E'];
                        $C = $row['C'];
                        
        
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $Category;?></td>
                        <td><?php echo $R;?></td>
                        <td><?php echo $I;?></td>
                        <td><?php echo $A;?></td>
                        <td><?php echo $S;?></td>
                        <td><?php echo $E;?></td>
                        <td><?php echo $C;?></td>
                    </tr>
                    <?php
                    }
                    while($row = mysqli_fetch_assoc($result1)) {
                        $R = $row['R'];
                        $I = $row['I'];
                        $A = $row['A'];
                        $S = $row['S'];
                        $E = $row['E'];
                        $C = $row['C'];
                    ?>
                    <tr>
                    <td>
                        <?php echo "Total Scores";?></td>
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
                
    
        <?php
            // }
        ?>



        <h2>Part 1</h2>
        <?php

        $sql = "SELECT code FROM stud_code WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
        $studCode = $row['code'];

        if(strlen($studCode) > 3) {
            // string to array
            $code = explode(" ", $studCode);
            // slice array
            $newCode = array_slice($code, 0, 3);
            // array to string
            $finalCode = implode("", $newCode);
        }

        //display selected jobs step 1
        $sql = "SELECT * FROM jobs INNER JOIN selectedjobs ON jobs.id = selectedjobs.job_id WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>

            <div class="h-text">
                <?php
                    $finalCode;
                ?>
            </div>
            <table class="tb">
                <thead> 
                    <tr>
                        <th>ID</th>
                        <th>Occupational Title</th>
                        <th>O*NET</th>
                        <th>HOC</th>
                        <th>ED</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        $jobID = $row['job_id'];
                        $jobName = $row['jobName'];
                        $onet = $row['onet'];
                        $jobCode = $row['jobCode'];
                        $ed = $row['ed'];  
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $jobID?></td>
                        <td><?php echo $jobName;?></td>
                        <td><?php echo $onet;?></td>
                        <td><?php echo $jobCode;?></td>
                        <td><?php echo $ed;?></td>
                    </tr>
                </tbody>
                    
                <?php
                    }
                
                ?>

            </table>
                
    
        <?php
            }
        ?>
        <h2>Part 2</h2>
        <?php

        $sql = "SELECT code FROM stud_code WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
        $studCode = $row['code'];

        if(strlen($studCode) > 3) {
            //string to array
            $code = explode(" ", $studCode);
            //slice into 3
            $arrayCode = array_slice($code, 0, 3);

            list($letter1, $letter2, $letter3) = $arrayCode;

            //combination 1
            $combi1 = array($letter1, $letter3, $letter2);
            $combination1 = implode("", $combi1);

            //combination 2
            $combi2 = array($letter2, $letter1, $letter3);
            $combination2 = implode("", $combi2);

            //combination 3
            $combi3 = array($letter2, $letter3, $letter1);
            $combination3 = implode("", $combi3);

            //combination 4
            $combi4 = array($letter3, $letter1, $letter2);
            $combination4 = implode("", $combi4);

            //combination 2
            $combi5 = array($letter3, $letter2, $letter1);
            $combination5 = implode("", $combi5);

            }

            // echo "$studCode<br>";
            // echo "$combination1 ";
            // echo "$combination2 ";
            // echo "$combination3 ";
            // echo "$combination4 ";
            // echo "$combination5 ";


        //display selected jobs step 2
        $sql = "SELECT * FROM jobs INNER JOIN selectedjobs2 ON jobs.id = selectedjobs2.job_id WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table class="tb">
                <thead> 
                    <tr>
                        <th>ID</th>
                        <th>Occupational Title</th>
                        <th>O*NET</th>
                        <th>HOC</th>
                        <th>ED</th>
                    </tr>
                </thead>

                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        $jobID = $row['job_id'];
                        $jobName = $row['jobName'];
                        $onet = $row['onet'];
                        $jobCode = $row['jobCode'];
                        $ed = $row['ed'];  

                        
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $jobID?></td>
                                <td><?php echo $jobName;?></td>
                                <td><?php echo $onet;?></td>
                                <td><?php echo $jobCode;?></td>
                                <td><?php echo $ed;?></td>
                            </tr>
                        </tbody>
                    
                <?php
                    }
                
                ?>
            </table>
                
        <?php
            }
        ?>