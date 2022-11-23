<?php


        $sql = "SELECT * FROM tests WHERE test_category = 'estimate 1' AND student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>
            <div class="h-text">Part 1</div>
            <table class="tb">
                <thead> 
                    <tr>
                        <th>Mechanical Ability</th>
                        <th>Scientific Ability</th>
                        <th>Artistic Ability</th>
                        <th>Teaching Ability</th>
                        <th>Sales Ability</th>
                        <th>Clerical Ability</th>
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
                        <td><?php echo $R?></td>
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
        }

        $sql = "SELECT * FROM tests WHERE test_category = 'estimate 2' AND student_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            ?>
            <div class="h-text">Part 2</div>
            <table class="tb">
                <thead> 
                    <tr>
                        <th>Manual Skills</th>
                        <th>Math Ability</th>
                        <th>Musical Ability</th>
                        <th>Understanding of Others</th>
                        <th>Managerial Skills</th>
                        <th>Office Skills</th>
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
                        <td><?php echo $R?></td>
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
        }     
?>