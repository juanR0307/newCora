<?php
session_start();
require "../config/config.php";
require "../config/db.php";

    $id = $_SESSION['user_id'];

    if(isset($_POST['submit'])) {

        $fieldR = $_POST['ma'];
        $fieldI = $_POST['sa'];
        $fieldA = $_POST['aa'];
        $fieldS = $_POST['ta'];
        $fieldE = $_POST['sla'];
        $fieldC = $_POST['ca'];

        $sql = "INSERT INTO tests(R, I, A, S, E, C, test_category, student_id) 
        VALUES ($fieldR, $fieldI, $fieldA, $fieldS, $fieldE, $fieldC, 'estimate 1', $id)";

        $result = mysqli_query($conn, $sql);


        $fieldR1 = $_POST['mns'];
        $fieldI2 = $_POST['mta'];
        $fieldA3 = $_POST['msa'];
        $fieldS4 = $_POST['uo'];
        $fieldE5 = $_POST['ms'];
        $fieldC6 = $_POST['os'];

        $sql = "INSERT INTO tests (R, I, A, S, E, C, test_category, student_id) 
        VALUES ($fieldR1, $fieldI2, $fieldA3, $fieldS4, $fieldE5, $fieldC6, 'estimate 2', $id)";

        $result = mysqli_query($conn, $sql);
        
        if($result) {
            if(mysqli_affected_rows($conn)>0) {
                header("location: insertTotal.php");
            }
            else {
                echo("Registration Failed");
            }
        }


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
<div class="container-q">
    <div class="h-text">Self Estimate</div>
    <p>Rate yourself on each of the following traits, as compared with other persons your own age, by clicking the appropriate number.
        Give an accurate estimate of how you see yourself; try to avoid rating yourself the same in each ability.
    </p>

    <form action="" method="POST">
    
    <div class="h-text">Part 1</div>
    <div class="est-grp">
        <label for="ma">Mechanical Ability</label>
        <select name="ma" id="ma">
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
    </div>

    <div class="est-grp">
        <label for="sa">Scientific Ability</label>
        <select name="sa" id="sa">
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
    </div>
    
    <div class="est-grp">
        <label for="aa">Artistic Ability</label>
        <select name="aa" id="aa">
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
    </div>
    
    <div class="est-grp">
        <label for="ta">Teaching Ability</label>
        <select name="ta" id="ta">
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
    </div>

    <div class="est-grp">
        <label for="sla">Sales Ability</label>
        <select name="sla" id="sla">
        <option value="7">7</option>
        <option value="6">6</option>
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
    </div>

        <div class="est-grp">
            <label for="ca">Clerical Ability</label>
            <select name="ca" id="ca">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>


    
    <div class="h-text">Part 2</div>

        <div class="est-grp">
            <label for="mns">Manual Skills</label>
            <select name="mns" id="mns">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

        <div class="est-grp">
            <label for="mta">Math Ability</label>
            <select name="mta" id="mta">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

        <div class="est-grp">
            <label for="msa">Musical Ability</label>
            <select name="msa" id="msa">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

        <div class="est-grp">
            <label for="uo">Understanding of Others</label>
            <select name="uo" id="uo">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

        <div class="est-grp">
            <label for="ms">Managerial Skills</label>
            <select name="ms" id="ms">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

        <div class="est-grp">
            <label for="os">Office Skills</label>
            <select name="os" id="os">
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            </select>
        </div>

    <input type="submit" name="submit" value="submit">
    </form>
</div>
</body>
</html>