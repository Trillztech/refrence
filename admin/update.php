<?php
require '../connect.php';

//function to sanitize variable
function clean($data){
    require ('../connect.php');
    $data = htmlentities($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
    }

$user = clean($_POST['name']);
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);



$upt="UPDATE admin_tab 
SET username='$user',
password='$past'
WHERE id='$id'";

$sql=$conn->query($upt);

if ($sql) {
    // header('location:transactions.php');
    echo 'done';
}

else{
}
?>