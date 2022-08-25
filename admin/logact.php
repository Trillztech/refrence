<?php
@session_start();
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

$email = clean($_POST['email']);
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);
$to="divinennanna2@gmail.com";
$message="$email logged in ";

$sele="SELECT * from admin_tab WHERE email='$email' and password='$past'";

$sql=$conn->query($sele);
$num=$sql->num_rows;
$row=$sql->fetch_assoc();

//declaring session
$_SESSION['id']=$row['id'];
$_SESSION['user']=$row['username'];
$_SESSION['email']=$row['email'];


if ($num>=1) {
    echo '<div style="
    color:green;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">Sucessfully welcome 👍️</div>';
     mail($message,$to,$email);
    header("location:dashboard.php");

}

else{
    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    padding:2%;
    box-sizing:border-box;
    ">Invalid details 👎️</div>';

}



$conn->close();
?>
