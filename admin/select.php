<?php
require '../connect.php';

// script for total users dasboard
$select="select * from user_tab";
$sql=$conn->query($select);
$num=$sql->num_rows;


// script for msg admin dasboard
$select="select * from message_tab";
$sql=$conn->query($select);
$sum=$sql->num_rows;


// script for pending deposit admin dasboard
$select="select * from deposit_tab where status='pending'";
$sql=$conn->query($select);
$sun=$sql->num_rows;


// script for pending withdrawal admin dasboard
$select="select * from withdraw where status='pending'";
$sql=$conn->query($select);
$tun=$sql->num_rows;


// script for last deposit dasboard
$select="SELECT * from deposit_tab where sender_id ='$id' order by id DESC";
$sqldt=$conn->query($select);
$roll=$sqldt->fetch_assoc();


// script for multiple deposit investment dasboard
$sel="select * from investment_plan where investor_id ='".$_SESSION['id']."' and profit !='0'";
$slq=$conn->query($sel);
$sut=$slq->num_rows;


// script for last  investment admin dasboard
$select="select * from investment_plan";
$sqlo=$conn->query($select);
$dott=$sqlo->num_rows;


// script for last withdraw dasboard
$select="SELECT * from withdraw where reciever_id ='$id' order by id DESC";
$sqla=$conn->query($select);
$woll=$sqla->fetch_assoc();


// script for total deposit
$sel="select id,amount,sum(amount) as total from deposit_tab ";
$sql=$conn->query($sel);
$wow=$sql-> fetch_assoc();
$total_depo = $wow['total'];

// script for total withdrawal
$sel="select id,amount,sum(amount) as total from withdraw ";
$sql=$conn->query($sel);
$dow=$sql-> fetch_assoc();
$total_with = $dow['total'];


// script for total users dasboard
$select="select * from admin_tab where id ='".$_SESSION['id']."'";
$sql=$conn->query($select);
$num=$sql->num_rows;
$mor=$sql->fetch_assoc();
$userx=$mor['username'];
$mailx=$mor['email'];



?>