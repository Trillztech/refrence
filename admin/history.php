<?php
session_start();
require '../connect.php';
require('../restriction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../pix/log.png" type="image/x-icon">
    <title>Corexinvest</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

<div id="toop">
    <h1>dashboard || all transasctions</h1>
</div>

<section class="table">
    <?php
    
$select="select * from deposit_tab";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0">

    <tr>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>to</th>
                    <th>from</th>
                    <th>status</th>
                </tr>

	<?php while ($row=$sql->fetch_assoc()) {?>
                <tr>
                    
<td>
    $<?php echo $row['amount']; ?>
</td>	

<td>
    <?php echo $row['date']; ?>
</td>	
       
<td>
    <?php echo $row['type']; ?>
</td>	

<td>
    <?php echo $row['wallet']; ?>
</td>	

<td>
    <?php echo $row['sender_wallet']; ?>
</td>	

                    
<td>
    <?php echo $row['status']; ?>
</td>	
</tr>
    <?php } ?>

    </table>
    

    <?php 
    }

    else{

        echo '<div style="
        width:80%;
        border:0px solid red;
        margin:auto;
        color:red;
        text-align:center;">No Deposits Found 🚫️</div>';
    }
    ?>

<br><br><br>


<?php

$sel="select * from withdraw";
$sql=$conn->query($sel);
$num=$sql->num_rows;


if ($num>0) {?>

<table cellspacing="0">

<tr>
                <th>Amount</th>
                <th>Date</th>
                <th>Type</th>
                <th>from</th>
                <th>network</th>
                <th>status</th>
            </tr>

<?php while ($row=$sql->fetch_assoc()) {?>
            <tr>
                
<td>
$<?php echo $row['amount']; ?>
</td>	

<td>
<?php echo $row['date']; ?>
</td>	
   
<td>
<?php echo $row['type']; ?>
</td>	

<td>
<?php echo $row['reciver_wallet']; ?>
</td>	

<td>
<?php echo $row['network']; ?>
</td>	

                
<td>
<?php echo $row['status']; ?>
</td>	
</tr>
<?php } ?>

</table>


<?php 
}

else{

    echo '<div style="
    width:80%;
    border:0px solid red;
    margin:auto;
    color:red;
    text-align:center;">No Withdrawal Found 🚫️</div>';
}
?>


</body>
</html>

