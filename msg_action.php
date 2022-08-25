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
    
$name = clean($_POST['name']);
$email = clean($_POST['email']);
$subject = clean($_POST['subject']);
$mesage = clean($_POST['message']);


if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($name)||empty($email)||empty($subject)||empty($mesage)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        padding:2%;
        box-sizing:border-box;
        ">please fill all text fields 🚫️</div>';
    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '<div style="
        color:red;
        text-align:center;
        text-transform:capitalize;
        padding:2%;
        box-sizing:border-box;
        ">please enter a valid Email address 🚫️</div>';
    }   
    
    else {
        $ins="INSERT INTO message_tab(
            name,
            email,
            title,
            message,
            blank,
            empty1,
            empty2,
            empty3
            )VALUES(
            '$name',
            '$email',
            '$subject',
            '$mesage',
            '',
            '',
            '',
            ''
            )";

            $swql = $conn->query($ins);

            if ($ins) {
                $to="divinennanna2@gmail.com";
                mail($message,$to,$email);
            }

            if ($swql) {
                echo '<div style="
                color:green;
                text-align:center;
                text-transform:capitalize;
                padding:2%;
                box-sizing:border-box;
                "> message sent 👍️</div>';
            }

            else {
                echo '<div style="
                color:red;
                text-align:center;
                text-transform:capitalize;
                padding:2%;
                box-sizing:border-box;
                ">message was not sent 🚫️</div>';
            }
    

        }


}
