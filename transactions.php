<?php
session_start();
require('restriction.php');
require 'balance.php';

if ($row['any_1']=="") {
    header("location:thank_you.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="cess/style.css" media="all">
    <link rel="shortcut icon" href="pix/log.png" type="image/x-icon">
</head>
<?php require 'backhead.php'; ?>

    <div id="toop">
        <h1>dashboard || transaction history</h1>
    </div>

    <section class="table">

    <?php
    $select="select * from deposit_tab where sender_id ='".$_SESSION['id']."'";
    $sql=$conn->query($select);
    $num=$sql->num_rows;
    
    if ($num>0) {?>

        <table>
            <tr>
                <th>type</th>
                <th>date</th>
                <th>status</th>
                <th>amount</th>
            </tr>

	<?php while ($row=$sql->fetch_assoc()) {?>

        <tr>
       
<td>
    <?php echo $row['type']; ?>
</td>	

<td>
    <?php echo $row['date']; ?>
</td>	
<td>
    <?php echo $row['status']; ?>
</td>	

<td>
$<?php  echo $row['amount']; ?>
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
    text-align:center;">No Deposits Made 🚫️</div>';
}
?>

<br><br><br>

<?php
    $select="select * from withdraw where reciever_id ='".$_SESSION['id']."'";
    $sql=$conn->query($select);
    $num=$sql->num_rows;
    
    if ($num>0) {?>

        <table>
            <tr>
                <th>type</th>
                <th>date</th>
                <th>status</th>
                <th>amount</th>
            </tr>

	<?php while ($row=$sql->fetch_assoc()) {?>

        <tr>
       
<td>
    <?php echo $row['type']; ?>
</td>	

<td>
    <?php echo $row['date']; ?>
</td>	
<td>
    <?php echo $row['status']; ?>
</td>	

<td>
$<?php  echo $row['amount']; ?>
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
    text-align:center;">No Pending withdrawal Made 🚫️</div>';
}
?>
    </section>






