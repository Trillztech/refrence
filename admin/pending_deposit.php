<?php
// session_start();
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
    <link rel="stylesheet" href="../cess/gstyle.css">
    <title>pending deposits</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

    <div id="toop">
        <h1>dashboard || pending deposits</h1>
    </div>

    <section class="table">

    <?php
    
$select="select * from deposit_tab where status ='pending' ";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0">

        <tr>
            <th>sender name</th>
            <th>sender wallet</th>
            <th>crypto type</th>
            <th>amount</th>
            <th>date</th>
            <th>status</th>
        </tr>
	<?php while ($row=$sql->fetch_assoc()) {?>
        <tr>
<td>
    <?php echo $row['sender_name']; ?>
</td>	

<td>
    <?php echo $row['wallet']; ?>
</td>	

<td>
    <?php echo $row['crypto_type']; ?>
</td>		

<td>
    <?php echo $row['amount']; ?>
</td>			
    
<td>
    <?php echo $row['date']; ?>
</td>		

<td>
    <form action="pending_action.php" method="post">
    <input type="submit" value="Confirm" name="depo-sub" style="background-color:#e6b800;color:black;border:0px;">
    <input type="hidden" name="iid" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="idx" value="<?php echo $row['sender_id']; ?>">
    <input type="hidden" name="amt" value="<?php echo $row['amount']; ?>">
    </form>
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
        text-align:center;">No Pending Deposits 🚫️</div>';
    }
    ?>
</section>