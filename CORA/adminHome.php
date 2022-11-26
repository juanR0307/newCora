<?php
require "config/config.php";
require "config/db.php";

$sql="select count(student_id) as id1 from student ";
$result=$conn->query($sql);
   $row=$result->fetch_assoc();

$sql1="select count(student_id) as id2 from requests ";
$result1=$conn->query($sql1);
  $row1=$result1->fetch_assoc();

  $sql2="select count(*) as id3 FROM student GROUP BY section ";
$result2=$conn->query($sql2);
  $row2=$result2->fetch_assoc();

  $sql3="select count(*) as id4 FROM student GROUP BY section ";
  $result3=$conn->query($sql3);
    $row3=$result3->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>CGA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="refresh" content="1"> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  

</head>
<body>
<!--Sidebar--> 
<div class="sidebar">   
  <h2>CORA</h2>
  <ul>
      <li><a href="index.php" class="active" ><i class="bi bi-house-fill"></i>Home</a></li>
      <li><a href="#" ><i class="bi bi-pie-chart-fill"></i>Charts</a></li>
      <li><a href="students.php" ><i class="bi bi-person-fill"></i>Students</a></li>
    <li><a href="logout.php" ><i class="bi bi-file-earmark-text-fill"></i>logout</a></li>
    <!-- <li><a href="#" ><i class="bi bi-grid-fill"></i>logout</a></li>
      <li><a href="#" ><i class="bi bi-info-square-fill"></i>About us</a></li>
      <li><a href="#" ><i class="bi bi-chat-dots-fill"></i>Contact us</a></li>-->
      
  </ul> 
</div>  
<div class="top-container">
  <div class="box">
    <div class="num"><?php echo $row['id1'];?></div>    
    <p class="num-title">total student</p>
    <a href="students.php" class="box-view">view</a>
  </div>

  <div class="box">
  <div class="num"><?php echo $row1['id2'];?></div>
    <p class="num-title">requests</p>
    <a href="requests.php" class="box-view">view</a>
  </div>

  <div class="box">
  <div class="num"><?php echo $row2['id3'];?></div>
    <p class="num-title">sections</p>
    <a href="requests.php" class="box-view">view</a>
  </div>

  <div class="box">
  <div class="num"><?php echo $row3['id4'];?></div>
    <p class="num-title">sections</p>
    <a href="requests.php" class="box-view">view</a>
  </div>

</div>







</body>
</html>