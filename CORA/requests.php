<?php
    session_start();
    require "config/config.php";
    require "config/db.php";


    /*if($_SESSION['user_id']) {

    }
    else {
        header("location: login.php");
    }*/

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 05;
    $start_from = ($page-1)*$num_per_page;
    
    $query = "select * from requests limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CGA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="container">
    <h2>Student Requests</h2>
   <h3><a href="addStudent.php"><i class="bi bi-plus"></i></a>Add Student</h3>

   <?php if (isset($_GET['success'])) { ?>
        <div class="alert" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
	<?php } ?>
    
    <table>
    <tr>
        <th>ID num</th>
        <th>Name</th>
        <th>Section</th>
        <th>User Name</th>
        <th>Action</th>
    </tr>

    <?php
        
        while($rows = mysqli_fetch_assoc($result)){
        
    ?>
    <tr>
        <td><?php echo $rows['student_id']; ?></td>
        <td><?php echo $rows['firstname'] ." ". $rows['lastname'] ; ?></td>
        <td><?php echo $rows['section']; ?></td>
        <td><?php echo $rows['username']; ?></td>
        <td>
            <div class="btn-group">
            <a href="PHP/accept.php?id=<?=$rows['student_id']?>"><button class="success">accept</button></a>
            <a href="PHP/decline.php?id=<?=$rows['student_id']?>"><button class="danger">decline</button></a>
            </div>
        </td>
    </tr>
    <?php }?>

    </table>

    <div class="pag">
    <?php 
        $pr_query = "select * from requests ";
        $pr_result = mysqli_query($conn,$pr_query);
        $total_record = mysqli_num_rows($pr_result );

        $total_page = ceil($total_record/$num_per_page);

        echo "<p>page ".($page)." of ".($total_page)."</p>";
        if($page>1)
                {
                    echo "<a href='requests.php?page=".($page-1)."' class='pg-cnt'>prev</a>";
                }

                if($page<$total_page)
                {
                    echo "<a href='requests.php?page=".($page+1)."' class='pg-cnt'>next</a>";
                }
                

    ?>
    </div>
</div>


</body>
</html>