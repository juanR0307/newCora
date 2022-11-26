<?php
$R = 0;


    if(($_GET['value']) == 'yes' ){
        $R++;
        header("Location: ../exx.php?$R");
    }



?>