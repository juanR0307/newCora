<?php
require "config/config.php";
require "config/db.php";

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
    
    $query = "select * from student limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CGA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  

</head>
<body>


<!--Sidebar--> 

<div class="sidebar">
    <h2>CORA</h2>
    <ul>
    <li><a href="index.php" ><i class="bi bi-house-fill"></i>Home</a></li>
        <li><a href="#" ><i class="bi bi-pie-chart-fill"></i>Charts</a></li>
        <li><a href="students.php" class="active"  ><i class="bi bi-person-fill"></i>Students</a></li>
        <!--<li><a href="exam.php" ><i class="bi bi-file-earmark-text-fill"></i>Exam</a></li>
        <li><a href="#" ><i class="bi bi-grid-fill"></i>Strands</a></li>
        <li><a href="#" ><i class="bi bi-info-square-fill"></i>About us</a></li>
        <li><a href="#" ><i class="bi bi-chat-dots-fill"></i>Contact us</a></li>-->
    </ul> 
</div>  


<div class="container">
    <h2> Registered Students</h2>

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
        <th>username</th>
        <th>Action</th>
    </tr>

    <?php
        
        while($rows = mysqli_fetch_assoc($result)){
        
    ?>
    <tr>
        <td><?php echo $rows['student_id']; ?></td>
        <td><?php echo $rows['firstname'] ." ". $rows['lastname']; ?></td>
        <td><?php echo $rows['section']; ?></td>
        <td><?php echo $rows['username']; ?></td>
        <td>
            <div class="btn-group">
            <a href="viewStudent.php?id=<?=$rows['student_id']?>"><button class="success"><i class="bi bi-eye-fill"></i><span class="tooltiptext">view</span></button></a>
            <a onclick="checker()" href="php/deleteStudent.php?id=<?=$rows['student_id']?>"><button class="danger"><i class="bi bi-trash-fill"></i><span class="tooltiptext">delete</span></button></a>
            
            <!-- <a onclick="checker()" href="php/deleteStudent.php?id=<?=$rows['student_id']?>"><button class="danger">delete</button></a> -->
            
            
            <!-- <button onclick="document.getElementById('id01').style.display='block'" class="danger"><i class="bi bi-trash-fill"></i><span class="tooltiptext">delete</span></button> -->
           
            <!-- <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <form class="modal-content" action="php/deleteStudent.php?id=<?=$rows['student_id']?>">
                    <div class="container">
                    <h1>Confirm Action</h1>
                    <p>Are you sure you want to delete the student account?</p>
                    
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
                    </div>
                    </div>
                </form>
                </div>     -->
        </div>
        </td>
    </tr>               
    <?php }?>

    </table>
    
    <div class="pag">
    <?php 
        $pr_query = "select * from student ";
        $pr_result = mysqli_query($conn,$pr_query);
        $total_record = mysqli_num_rows($pr_result );

        $total_page = ceil($total_record/$num_per_page);

        echo "<p>page ".($page)." of ".($total_page)."</p>";
        if($page>1)
                {
                    echo "<a href='students.php?page=".($page-1)."' class='pg-cnt'>prev</a>";
                }

                
                // for($i=1;$i<=$total_page;$i++)
                // {
                //     if($i==$page){
                //         echo "<a href='students.php?page=".$i."' class='pg pg-active'>$i</a>";
                //     }else{
                //         echo "<a href='students.php?page=".$i."' class='pg'>$i</a>";
                //     }
                    
                // }

                if($page<$total_page)
                {
                    echo "<a href='students.php?page=".($page+1)."' class='pg-cnt'>next</a>";
                }
                

    ?>
</div>
</div>

<script>
    function myFunction() {
        confirm("Confirm DELETE action!") 
    }
    function checker(){
            var result = confirm("Confirm DELETE action!");
            if (result == false){
                event.preventDefault();
            }
        }

</script>
<!-- <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->
</body>
</html>
            