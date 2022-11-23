<style>
    .btn {
        background-color: green;
    }
</style>

<?php
    session_start();
    require "config/config.php";
    require "config/db.php";


    if(isset($_POST['input'])) {

        $input = $_POST['input'];

        $query = "SELECT * FROM jobs 
        WHERE CONCAT(jobName, onet, jobCode, ed) LIKE '%".$input."%'";

        $result = mysqli_query($conn, $query);

        ?> 

        <div class="tableFixHead">

        <?php

        if(mysqli_num_rows($result) > 0) {
            ?>
            <table>
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
                                <td><button class="btn" onclick="copy()">copy</button></td>
                            </tr>
                        </tbody>
                    
                        <?php
                    }
                
                ?>

            </table>
            </div>
    
            <?php
        }

        else {
            echo "No data found";
        }
    }

?>
<script>
    function copy() {
        const copyText = document.getElementById("myInput").textContent;
        const textArea = document.createElement('textarea');
        textArea.textContent = copyText;
        document.body.append(textArea);
        textArea.select();
        document.execCommand("copy");
        k2button.innerText = "Text copied";
        textArea.remove();
    }
    document.getElementById("k2button").addEventListener('click', copyFunction);
</script>
