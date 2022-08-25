<?php
require 'connect.php';      
   
//function to sanitize variable
function clean($data){
    require ('connect.php');
    $data = htmlentities($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
    }

$user = clean($_POST['name']);
$email = clean($_POST['email']);
$country = clean($_POST['select']);
$ref_email = clean($_POST['ref']);
$balance = "0.00";
$pastx = clean($_POST['pass']);
$past= hash('sha256',$pastx);



if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($user)||empty($email)||empty($past)||empty($country)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:inherit;
        padding:2%;
        box-sizing:border-box;
        ">please fill all text fields 🚫️</div>';
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:inherit;
        padding:2%;
        box-sizing:border-box;
        ">please enter a valid Email address 🚫️</div>';
    }       

    elseif (strlen($pastx)<8){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:inherit;
        padding:2%;
        box-sizing:border-box;
        ">Password should not be less than 8 characters  🚫️</div>';
   }


else{
    $sele="SELECT * from user_tab WHERE email LIKE '$email%'";
    
    $rest=$conn->query($sele);
    $row=$rest->fetch_assoc();
    
    if($row['email'] == $email){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        background-color:inherit;
        padding:2%;
        box-sizing:border-box;
        ">This Email Already Exists 🚫️</div>';
    } 
else{
    $inn="insert into user_tab(
        username,
        email,
        country,
        password,
        ref_email,
        ref_bonus,
        balance,
        block,
        counter,
        any_1,
        any_2,
        any_3,	
        blankk,	
        blankx
        )VALUES(
        '$user',
        '$email',
        '$country',
        '$past',
        '$ref_email',
        '0.00',
        '$balance',
        '',
        '',
        '0',
        '',
        '',
        '',
        ''
        )";
    $sql=$conn->query($inn);

    
        
    if ($sql) {
    echo '<div style="
    color:green;
    text-align:center;
    text-transform:capitalize;
    background-color:white;
    padding:2%;
    box-sizing:border-box;
    ">Sucessfully Registered 👍️</div>';
    require 'mail/send.php';
    header("location:login.php");
    }
    
    else{
    echo '<div style="
    color:red;
    text-align:center;
    text-transform:capitalize;
    background-color:white;
    padding:2%;
    box-sizing:border-box;
    ">Not Registered 🚫️</div>';
    }
    
}  
}
}

?>
