<?php
@session_start();
$id=$_SESSION['id'];
$servername="localhost";
$uxername="root";
$paxxword="candbf1cd9";
$database="corex_db";
$conn=new mysqli($servername,$uxername,$paxxword,$database);


?>