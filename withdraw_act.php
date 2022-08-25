<?php
// session_start();
require 'connect.php';
require 'balance.php';

$amt = $_POST['amount'];
$recieve = $_POST['wallet'];
$date = date('d:m:Y');
$status = "pending";
$id = $_POST['iid'];
$name = $_SESSION['user']; 
$type = "withdrawal";
$network = $_POST['withdraw'];
$bal = $row['balance'];



if ($_SERVER['REQUEST_METHOD']=="POST"){
		
    if (empty($amt)||empty($recieve)||empty($network)){
        // echo "<script>alert('please fill all text fields 🚫️'); window.location='withdraw.php';</script>";
echo '<p style="
color:red;
text-align:center;
text-transform:capitalize;
padding:2%;
box-sizing:border-box;
">Invalid Transaction 🚫️</p>';
    }

    elseif($amt>$bal){
        // echo "<script>alert('insufficent funds 🚫️'); window.location='withdraw.php';</script>";
         echo '<p style="
         color:red;
         text-align:center;
         text-transform:capitalize;
         padding:2%;
         box-sizing:border-box;
         ">Insufficent Balance 🚫️</p>';
    }

    else {   
$inn="insert into withdraw(
    amount,
    reciver_wallet,
    status,
    date,
    reciever_id,
    reciever_name,
    network,
    type,
    plan,
    any_1,
    any_2
    )VALUES(
    '$amt',
    '$recieve',
    '$status',
    '$date',
    '$id',
    '$name',
    '$network',
    '$type',
    '',
    '',
    ''
    )";

$result=$conn->query($inn);

if ($inn) {
       
        $upt="UPDATE user_tab 
        SET balance = balance - $amt
        WHERE id=$id ";
        
        $rest = $conn->query($upt);

        if ($rest) {
            echo "<script>window.location='transactions.php';</script>";
        }
    
else{
echo '<p style="
color:red;
text-align:center;
text-transform:capitalize;
padding:2%;
box-sizing:border-box;
">Invalid Transaction 🚫️</p>';
}
}
}
}


?>