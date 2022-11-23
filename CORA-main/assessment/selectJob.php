<?php
session_start();
require "../config/config.php";
require "../config/db.php";

$id = $_SESSION['user_id'];

    $sql = "SELECT code FROM stud_code WHERE student_id = $id";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $studCode = $row['code'];

    if(strlen($studCode) > 3) {
        $code = explode(" ", $studCode);
        $newCode = array_slice($code, 0, 3);
        $finalCode = implode("", $newCode);
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assessment.css">
    <title>Document</title>
</head>
<body>

    <div class="container-h">
        <p>Step 1: Select 10 occupations whose codes are identical with yours, if you did not find any occupations 
        in the given list, please click next to proceed to part 2. </p>
        <div class="container-h-grp">
            <div class="grp1">
                <div class="h-text">Summary code:</div>
                <div class="x-text"><?php echo $finalCode?></div>
            </div>
            <div class="grp2">
                <a href="selectJob2.php">
                    <div class="btn-view">
                            Proceed to Part 2
                    </div>
                </a>
            </div>
        </div>

        <?php if (isset($_GET['success'])) { ?>
        <div class="alert" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
        
	    <?php } ?>

        <?php if (isset($_GET['err'])) { ?>
        <div class="alert-danger" role="alert-danger">
            <?php echo $_GET['err']; ?>
        </div>
        
	    <?php } ?>
    </div>

    

    <?php  include "showJob.php";
    if(mysqli_num_rows($result) > 0) {
    ?>

    <div class="container-left">
        <div class="heading">Occupation Finder</div>
        <table class="tb">
            <thead> 
                <tr>
                    <th>Occupational Title</th>
                    <th>O*NET</th>
                    <th>HOC</th>
                    <th>ED</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php

                $sql = "SELECT * FROM jobs WHERE jobCode = '$finalCode'";
                $result1 = mysqli_query($conn, $sql);

                while($row1 = mysqli_fetch_assoc($result1)) {
                    $jobID = $row1['id'];
                    $jobName1 = $row1['jobName'];
                    $onet1 = $row1['onet'];
                    $jobCode1 = $row1['jobCode'];
                    $ed1 = $row1['ed'];
            ?>
            <tbody>
                <tr>
                    <td><?php echo $jobName1;?></td>
                    <td><?php echo $onet1;?></td>
                    <td><?php echo $jobCode1;?></td>
                    <td><?php echo $ed1;?></td>
                    <td>
                        <a href="pickJob.php?id=<?=$jobID?>"><button class="btn-sel">select</button>
                    </td>
                </tr>
            
            <?php
                }

            ?>

                <tr>
                    <td></td>
                </tr>

            <?php 
                while($row = mysqli_fetch_assoc($result)) {
                $jobID = $row['id'];
                $jobName = $row['jobName'];
                $onet = $row['onet'];
                $jobCode = $row['jobCode'];
                $ed = $row['ed'];  
            ?>

                    <tr>
                        <td><?php echo $jobName;?></td>
                        <td><?php echo $onet;?></td>
                        <td><?php echo $jobCode;?></td>
                        <td><?php echo $ed;?></td>
                        <td>
                            <a href="pickJob.php?id=<?=$jobID?>"><button class="btn-sel">select</button></a>
                        </td>
                    </tr>
            </tbody>
            
            <?php
                }
            ?>
        </table>    
    </div>
    
    <?php
        }
    //display selected jobs
    $sql = "SELECT * FROM jobs INNER JOIN selectedjobs ON jobs.id = selectedjobs.job_id 
    WHERE student_id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
    ?>

    <div class="container-right">
        
        <div class="heading">Selected occupations</div>
        <table class="tb">
            <thead> 
                <tr>
                    <th>ID</th>
                    <th>Occupational Title</th>
                    <th>action</th>
                </tr>
            </thead>

            <?php
                while($row = mysqli_fetch_assoc($result)) {
                        $jobID = $row['job_id'];
                        $jobName = $row['jobName'];
                        
            ?>

            <tbody>
                <tr>
                    <td><?php echo $jobID?></td>
                    <td><?php echo $jobName;?></td>
                    
                    <td>
                        <a href="removeJob.php?id=<?=$jobID?>"><button class="btn-sel">remove</button>
                    </td>
                </tr>
            </tbody>

            <?php
                }
            ?>

        </table>
    </div>
     
    <?php
        }
    ?>

</body>
</html>