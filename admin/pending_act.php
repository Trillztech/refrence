<?php
require '../connect.php';

// script for withdrawal  

$id = $_POST['iid'];
$idx = $_POST['idx']; 
   
$upp ="update withdraw
set status = 'confirm' 
WHERE id = '$id' && '$idx' ";

$sql = $conn -> query($upp);


    if($sql) {
            header("location:pending_withdraw.php");
    }

    else {
        header("location:pending_withdraw.php");
    }
    
    
?>