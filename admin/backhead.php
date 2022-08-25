<?php 
session_start();
require '../connect.php';
require 'select.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="../cess/gstyle.css" type="text/css" media="all">
    <link rel="shortcut icon" href="../pix/log.png" type="image/x-icon">
    <script src="../js/note.js"></script>
    <script src="https://kit.fontawesome.com/4b50fd086e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@400;700;800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<section class="small" id="menu">
            
    <div style="border:1px;">
        <a href="dashboard.php"><img src="../pix/logox.png" alt="file format not supported"></a>
     </div>

            <div>
        <a href="dashboard.php">
<i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
            </div>

            <div>
                <a href="pending_deposit.php"> 
                <i class="fa-solid fa-credit-card"></i> &nbsp confirm deposited funds</a>
            </div> 

            <div>
                <a href="pending_withdraw.php">
                <i class="fas fa-hand-holding-usd"></i> &nbsp confirm withdrawal</a>
            </div>

            <div>
                <a href="users.php">
                <i class="fa-solid fa-chart-line"></i> &nbsp view users</a>
            </div>

            <div>
                <a href="my_profile.php">
                <i class="fa-solid fa-user"></i> &nbsp my profile</a>
            </div>

            <div>
                <a href="msg.php">
                <i class="fas fa-envelope"></i> &nbsp message request</a>
            </div>

            <div>
                <a href="history.php">
                <i class="fa-solid fa-clipboard-list"></i> &nbsp all transactions</a>
            </div>

            <div>
                <a href="logout.php">
                <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
            </div>
        </section>
        
        <!-- for smaller screen -->


<section id="menux">
            
            <div style="border:1px;">
                <a href="dashboard.php"><img src="../pix/logox.png" alt="file format not supported"></a>
             </div>
        
                    <div>
                <a href="dashboard.php">
        <i class="fas fa-tasks-alt"></i>&nbsp dashboard</a>
                    </div>
        
                    <div>
                        <a href="pending_deposit.php"> 
                        <i class="fa-solid fa-credit-card"></i> &nbsp confirm deposited funds</a>
                    </div> 
        
                    <div>
                        <a href="pending_withdraw.php">
                        <i class="fas fa-hand-holding-usd"></i> &nbsp confirm withdrawal</a>
                    </div>
        
                    <div>
                        <a href="users.php">
                        <i class="fa-solid fa-chart-line"></i> &nbsp view users</a>
                    </div>
        
                    <div>
                        <a href="my_profile.php">
                        <i class="fa-solid fa-user"></i> &nbsp my profile</a>
                    </div>
        
                    <div>
                        <a href="msg.php">
                        <i class="fas fa-envelope"></i> &nbsp message request</a>
                    </div>
        
                    <div>
                        <a href="history.php">
                        <i class="fa-solid fa-clipboard-list"></i> &nbsp all transactions</a>
                    </div>
        
                    <div>
                        <a href="logout.php">
                        <i class="fa-solid fa-right-to-bracket"></i> &nbsp logout</a>
                    </div>
                </section>
                

        <div class="container" id="xbodyx">

        <header class="header">
            <p onclick="openclosex()" id="menn">&#9776  Menu</p>
            <p id="xmenn">&nbsp &#9776  Menu</p>
            <span>
        <p><i class="fas fa-envelope"></i><sup><?php echo $sum ?></sup><?php //echo $bal ?></p>
        <p>hi <br> welcome <?php echo $userx; ?> </p>
            </span>
        </header>     
        <script>

$(document).ready(function(){
    $("#xmenn").click(function(){
        $("#menux").toggle(100);
    });
});

</script>


        