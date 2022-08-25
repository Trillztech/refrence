<?php
// session_start();
require '../connect.php';
@require 'submit.php';
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
    <script src="../js/note.js"></script>
    <title>Corexinvest</title>
</head>
<body>
    <?php require 'backhead.php'; ?>

    <div id="toop">
        <h1>dashboard || users</h1>
    </div>

    <section class="table">
    <?php
    
$select="select * from user_tab";
$sql=$conn->query($select);
$num=$sql->num_rows;


if ($num>0) {?>

    <table cellspacing="0" style="text-align: left;">

    <tr>
                    <th>name</th>
                    <th>balance</th>
                    <th>location</th>
                    <th>block</th>
                    <th>dash</th>
                    <th>topup</th>
                </tr>

	<?php while ($row=$sql->fetch_assoc()) {?>
    <tr>

<td>
    <?php echo $row['username']; ?>
</td>	

<td>
$<?php  echo $row['balance']; ?>
</td>

<td>
    <?php echo $row['country']; ?>
</td>	

<td>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <?php
if ($row['block']=='blocked') {?>
     <input type="submit" value="Unblock" name="Unblock" onclick="return(showAlert())" style="color:black;background-color:#e6b800;border:0px;"> 
<?php }
else{?>
    <input type="submit" value="Block" name="block" onclick="return(showAlert())" style="color:black;background-color:#e6b800;border:0px;">
<?php }
    ?>
    </form>
</td>	

       
<td>
    <form action="" method="post" target='_blank'> 
    <input type="submit" value="View" name="view" style="color:black;background-color:#e6b800;border:0px;">
    <input type="hidden" name="dii" value="<?php echo $row['id']; ?>">
</form>
</td>	
       
<td>
    <form action="" method="post">
    <input type="submit" value="Credit" name="credit" style="color:black;background-color:#e6b800;border:0px;">
    <input type="hidden" name="idd" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="amount" value="1000">
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
        text-align:center;">No Users Found 🚫️</div>';
    }
    ?>

</div>
</section>
</body>
</html>
