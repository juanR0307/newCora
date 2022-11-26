<?php
    session_start();
    require "config/config.php";
    require "config/db.php";

    if($_SESSION['user_id']) {

    }
    else {
        header("location: index.php");
    }


    $sql = "SELECT * FROM student 
    WHERE student_id = ".$_SESSION['user_id'];

    $result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CORA Web Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    

    </head>


    <body>
        
        
        <div class="sidebar">
            <h2>CORA</h2>
            <ul>
                <li><a href="homePage.php" ><i class="bi bi-house-fill"></i>Home</a></li>
                <li><a href="studentPage.php" class="active"><i class="bi bi-person-fill"></i>Profile</a></li>
                <li><a href="strand.php" ><i class="bi bi-grid-fill"></i>Strands</a></li>
                <li><a href="occupation.php"><i class="bi bi-search"></i></i>Occupations</a></li>
                <li><a href="aboutUs.php" ><i class="bi bi-info-square-fill"></i>About us</a></li>
                
                <li><a href="logout.php" id="logout"><i class="bi bi-box-arrow-left"></i></i>Log out</a></li>

            </ul> 
        </div>  

        <div class="left-a-panel">
            <div class="h-text">
                Student Profile
            </div>

            <div class="l-cont">
                <?php   
                    while($row = $result->fetch_assoc()) {

                        // echo "NAME: " . $row["firstname"]." ";
                        // echo " " .$row["middlename"]." ";
                        // echo " " . $row["lastname"]." ";
                ?>
                <div class="det">Name: <span class="x-text"><?php echo $row['firstname'] ." ". $row['lastname']; ?></span></div>
                <div class="det">Age: <span class="x-text"><?php echo $row['age'] ?></span></div>
                <div class="det">Gender: <span class="x-text"><?php echo $row['sex'] ?></span></div>
                <div class="det">School year: <span class="x-text"><?php echo $row['school_year'] ?></span></div>
                <div class="det">Section: <span class="x-text"><?php echo $row['section'] ?></span></div>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="right-panel">
            <div class="h-text">
                Assessment Result
            </div>

          <div class="r-cont">
            <?php include "assessment/retrieveCode.php"?>
          </div>

        </div>

        <div class="left-b-panel">
            <div class="h-text">
                Result CODE: 
            </div>
            <center>
                <div class="x-text">
                    <?php
                        echo $finalCode;
                    ?>
                </div>
            <center>

            <center>
                <a href="assessment/viewTest.php"><div class="btn-view">
                    Review Test
                </div>
            <center> 

        </div>

        
    </body>
</html>
