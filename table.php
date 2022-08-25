<?php
require 'connect.php';
/*
$crt="create database if not exists corex_db";
$sql=$conn->query($crt);

if ($sql) {
    echo "database created";
}
else {
    echo "not created";
}

$crt="create table if not exists user_tab(
    id int(10) auto_increment not null primary key,
    username varchar(25) not null,
    email varchar(50) not null,
    country varchar(40) not null,
    password varchar(120) not null,
    ref_email varchar(90) not null,
    ref_bonus varchar(91) not null,
    balance varchar(55) not null,
    block varchar(71) not null,
    counter varchar(180) not null,
    any_1 varchar(54) not null,
    any_2 varchar(51) not null,
    any_3 varchar(55) not null,
    blankk varchar(380) not null,
    blankx varchar(480) not null)
    ENGINE InnoDB;";

$sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}



$crt="create table if not exists deposit_tab(
    id int(10) auto_increment not null primary key,
    amount varchar(25) not null,
    sender_name varchar(50) not null,
    status varchar(40) not null,
    date varchar(120) not null,
    time varchar(90) not null,
    sender_id varchar(91) not null,
    wallet varchar(550) not null,
    crypto_type varchar(71) not null,
    type varchar(180) not null,
    network varchar(55) not null,
    any_1 varchar(54) not null,
    any_2 varchar(51) not null,
    blankk varchar(380) not null,
    blankx varchar(480) not null)
    ENGINE InnoDB;";

$sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}


$crt="create table if not exists investment_plan(
    id int(10) auto_increment not null primary key,
    investor_name varchar(55) not null,
    amount varchar(500) not null,
    plan varchar(50) not null,
    percentage varchar(290) not null,
    interest varchar(20) not null,
    profit varchar(50) not null,
    counter varchar(60) not null,
    date varchar(30) not null,
    investor_id varchar(11) not null,
    any_1 varchar(50) not null,
    any_2 varchar(50) not null,
    any_3 varchar(50) not null,
    empty1 varchar(50) not null,
    empty2 varchar(91) not null)
    ENGINE InnoDB;";

    $sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}
$crt="create table if not exists withdraw(
    id int(10) auto_increment not null primary key,
    amount varchar(500) not null,
    reciver_wallet varchar(290) not null,
    status varchar(20) not null,
    date varchar(11) not null,
    reciever_id varchar(91) not null,
    reciever_name varchar(98) not null,
    network  varchar(95) not null,
    type varchar(91) not null,
    plan varchar(69) not null,
    any_1 varchar(91) not null,
    any_2 varchar(51) not null
    )
    ENGINE InnoDB;";

    $sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}

*/


$crt="create table if not exists message_tab(
    id int(10) auto_increment not null primary key,
    name varchar(500) not null,
    email varchar(290) not null,
    title varchar(1000) not null,
    message varchar(2000) not null,
    blank varchar(91) not null,
    empty1 varchar(98) not null,
    empty2  varchar(95) not null,
    empty3 varchar(91) not null
    )
    ENGINE InnoDB;";

    $sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}


/*
$crt="create table if not exists admin_tab(
    id int(10) auto_increment not null primary key,
    username varchar(500) not null,
    email varchar(290) not null,
    password varchar(500) not null,
    empty1 varchar(98) not null,
    empty2  varchar(95) not null,
    empty3 varchar(91) not null
    )
    ENGINE InnoDB;";

    $sql=$conn->query($crt);

if ($sql) {
	die("table created");
}

else{
	die("table not created");
}
*/
?>