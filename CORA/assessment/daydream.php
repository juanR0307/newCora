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
    <?php
        session_start();
        require "../config/config.php";
        require "../config/db.php";

        $id = $_SESSION['user_id'];

    ?>

    <!-- search job -->
        <div class="container-h">
            
            <div class="h-text">Occupational Daydream</div> 

            <div class="container-h-grp">
                <div class="grp1">
                    <input 
                        class = "searchbox"
                        id="jobSearch" 
                        type="text" 
                        name="search" 
                        autocomplete="off" 
                        placeholder="Search Jobs..."
                    >
                </div>
                <div class="grp2">
                    <a href="activities.php">
                        <div class="btn-view">
                                Proceed to Part 2
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-left">
            <p id="result"></p>
            <!-- ########### -->
            <?php

$query = "SELECT * FROM jobs";

$result = mysqli_query($conn, $query);

?> 


<?php

if(mysqli_num_rows($result) > 0) {
    ?>
    <table id="result1" class="tb">
        <thead> 
            <tr>
                <th>Occupational Title</th>
                <th>O*NET</th>
                <th>HOC</th>
                <th>ED</th>
                <th>Action</th>
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
                <td id="myInput"><?php echo $jobName;?></td>
                <td><?php echo $onet;?></td>
                <td><?php echo $jobCode;?></td>
                <td><?php echo $ed;?></td>
                <td>
                    <a href="pickJob3.php?id=<?=$jobID?>"><button class="btn">select</button>
                </td>
            </tr>
        </tbody>
    
<?php
    }
?>
    </table>

    <?php
}
 ?>

            <!-- ########## -->

        </div>

        <!-- ##### Script ##### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            
        $(document).ready(function() {
            $("#jobSearch").keyup(function() {
                var input = $(this).val();
                //  alert(input);
                
                if (input != "") {
                    $.ajax({
                        url:"selectJob3.php",
                        method: "POST",
                        data: {input:input},

                        success:function(data) {
                            $("#result").html(data);
                            $("#result").css("display","block");
                            $("#result1").css("display","none");
                        }
                    });
                }
                else {
                    $("#result1").css("display","block");
                    $("#result").css("display","none");
                }
            });
        });
    </script>
<?php


    //display selected jobs
    $sql = "SELECT * FROM jobs INNER JOIN daydream ON jobs.id = daydream.job_id WHERE student_id = $id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        ?>
    <div class="container-right">
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
                                <a href="removeJob3.php?id=<?=$jobID?>"><button class="btn">remove</button>
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