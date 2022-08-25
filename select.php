<?php

// script for last deposit admin dasboard
$sett="select * from deposit_tab order by id desc limit 1";
$sql=$conn->query($sett);
$row = $sql->fetch_assoc();
$last_depo=$row['amount'];
$last_status=$row['status'];

//script for last withdraw admin dasboard
$withsett="select * from withdraw order by id desc limit 1";
$withsql=$conn->query($withsett);
$roa = $withsql->fetch_assoc();
$last_with=$roa['amount'];
$last_statux=$row['status'];


// script for last deposit investment dasboard
$select="select * from investment_plan where investor_id ='".$_SESSION['id']."'  order by id DESC";
$sqlo=$conn->query($select);
$dot=$sqlo->fetch_assoc();
$last_invest=$dot['plan'];

?>