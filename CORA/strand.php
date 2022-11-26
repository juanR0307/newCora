<?php
    session_start();
    require "config/config.php";
    require "config/db.php";
    
    if($_SESSION['user_id']) {

    }
    else {
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CORA Web Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="homePage.css">
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
                    <li><a href="strand.php" class="active"><i class="bi bi-grid-fill"></i>Strands</a></li>
                    <li><a href="occupation.php" ><i class="bi bi-search"></i></i>Occupations</a></li>
                    <li><a href="aboutUs.php" ><i class="bi bi-info-square-fill"></i>About us</a></li>
                    
                    <li><a href="logout.php" id="logout"><i class="bi bi-box-arrow-left"></i></i>Log out</a></li>
                </ul> 
            </div>  
        </div>

        <div class="home">
            <p>
                Strand <br>
            
            
        
            </p>


        </div> 




    </body>

</html>








