<?php
    require "config/config.php";
    require "config/db.php";
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CORA Web Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="occupation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    

    </head>


    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
        <div class="wrapper">
            <div class="sidebar">
                <h2>CORA</h2>
                <ul>
                    <li><a href="homePage.php"><i class="bi bi-house-fill"></i>Home</a></li>
                    <li><a href="studentPage.php"><i class="bi bi-person-fill"></i>Profile</a></li>
                    <li><a href="#" ><i class="bi bi-file-earmark-text-fill"></i>Exam</a></li>
                    <li><a href="#" ><i class="bi bi-grid-fill"></i>Strands</a></li>
                    <li><a href="occupation.php" class="active"><i class="bi bi-search"></i></i>Occupations</a></li>
                    <li><a href="#" ><i class="bi bi-info-square-fill"></i>About us</a></li>
                    
                    <li><a href="login.php" id="logout"><i class="bi bi-box-arrow-left"></i></i>Log out</a></li>
                </ul> 
            </div>  
        </div>


        <div id="studProfile">
            <br> 
            <h2> Jobs </h2> 
            
            <form action="#" method="GET">
                <input type="text" name="search">
                <input type="submit" value="Search">
            </form>

            <?php 
        
                $search = isset($_GET['search']) ? $_GET['search'] : null;

                if (strlen($search) > 0) {
                    $query = 'SELECT * FROM jobs 
                    WHERE CONCAT(jobName, onet, jobCode, ed) LIKE "%'.$search.'%"';
                }
                else {
                    $query = 'SELECT * FROM jobs';
                }

                //get the result
                $result = mysqli_query($conn, $query);


            ?>
            
            <table>
                <tr>
                    <th>Occupational Title</th>
                    <th>O*NET</th>
                    <th>HOC</th>
                    <th>ED</th>
                </tr>

                <?php 
                    while($row = $result->fetch_assoc()) {
                        echo
                        "<tr>    
                            <td>".$row["jobName"]."</td>
                            <td>".$row["onet"]."</td>
                            <td>".$row["jobCode"]."</td>
                            <td>".$row["ed"]."</td>
                        </tr>";
                        
                    }
                ?>



            </table>
               
            
        </div>
    </body>

</html>








