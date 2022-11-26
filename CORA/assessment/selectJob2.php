<?php
session_start();
require "../config/config.php";
require "../config/db.php";
require_once "showJob2.php";
$id = $_SESSION['user_id'];

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
        <p>Part 2: Select occupations whose codes are identical with yours, if you did not find any occupations 
        in the given list, please click next to proceed to part 2. </p>
            

    <div class="container-h-grp">
        <div class="grp1">
            <div class="h-text">Similar code:</div>
            <div class="x-text"><span><?php echo $combination1?></span>,
            <span><?php echo $combination2?></span>,
            <span><?php echo $combination3?></span>,
            <span><?php echo $combination4?></span>,
            <span><?php echo $combination5?></span>
        </div>
    </div>
    <div class="grp2">
        <a href="../studentPage.php">
            <div class="btn-view">
                    Finish Assessment
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

    

    <?php  include "showJob2.php";
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
                while($row = mysqli_fetch_assoc($result)) {
                    $jobID = $row['id'];
                    $jobName = $row['jobName'];
                    $onet = $row['onet'];
                    $jobCode = $row['jobCode'];
                    $ed = $row['ed'];  
            ?>

            <tbody>
                <tr>
                    <td><?php echo $jobName;?></td>
                    <td><?php echo $onet;?></td>
                    <td><?php echo $jobCode;?></td>
                    <td><?php echo $ed;?></td>
                    <td>
                        <a href="pickJob2.php?id=<?=$jobID?>"><button class="btn-sel">select</button>
                    </td>
                </tr>
            
            <?php
                }
            ?>

        </table>    
    </div>
    
    <?php
        }
    //display selected jobs
    $sql = "SELECT * FROM jobs INNER JOIN selectedjobs2 ON jobs.id = selectedjobs2.job_id WHERE student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
    ?>
    <div class="container-right">
        <div class="heading">Selected Jobs</div>
            <table class="tb">
                <thead> 
                    <tr>
                        <th>ID</th>
                        <th>Occupational Title</th>
                        <th>Action</th>
                        
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
                                <a href="removeJob2.php?id=<?=$jobID?>"><button class="btn-sel">remove</button></td>
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