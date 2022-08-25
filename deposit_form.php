<?php
session_start();
require 'connect.php';

$amt = $_POST['amount'];
$sender = $_SESSION['user'];
$date = date('d:m:Y');
$time = date('h:i:sa');
$status = "pending";
$id = $_SESSION['id']; 
$wallet = $_POST['reciver_wallet'];
$crypto = $_POST['crypto'];
$network = $_POST['network'];
$type = $_POST['type'];


$inn="insert into deposit_tab(
    amount,
    sender_name,
    status,
    date,
    time,
    sender_id,
    wallet,
    crypto_type,
    type,
    network,
    any_1,
    any_2,
    blankk,
    blankx
    )VALUES(
    '$amt',
    '$sender',
    '$status',
    '$date',
    '$time',
    '$id',
    '$wallet',
    '$crypto',
    '$type',
    '$network',
    '',
    '',
    '',
    ''
    )";
$sql=$conn->query($inn);

if ($inn) {
    $upt= "update user_tab
    set any_1=''
    where id=$id";

    $result= $conn->query($upt);

if ($sql) {
    echo "<script>window.location='thank_you.php';</script>";
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


?>