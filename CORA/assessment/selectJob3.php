<?php
    session_start();
    require "../config/config.php";
    require "../config/db.php";


    if(isset($_POST['input'])) {

        $input = $_POST['input'];

        $query = "SELECT * FROM jobs 
        WHERE jobName LIKE '%".$input."%'";

        $result = mysqli_query($conn, $query);

        ?> 

        <div class="tableFixHead">

        <?php

        if(mysqli_num_rows($result) > 0) {
            ?>
        
        
            <table class="tb">
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

        else {
            echo "No data found";
        }
    }

?>