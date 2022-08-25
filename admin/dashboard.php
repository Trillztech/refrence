<?php
session_start();
require('../restriction.php');
require '../connect.php';
require 'select.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="../cess/gstyle.css" type="text/css" media="all">
    <link rel="shortcut icon" href="../pix/log.png" type="image/x-icon">
    <script src="../js/note.js"></script>
</head>
<?php require 'backhead.php'; ?>

<div id="toop">
        <h1>dashboard || home</h1>
    </div>
    
<section class="holdder">
    
    <div class="first">
        <span>
            <div>
            <h2>total deposit</h2>
            <p>$<?php echo $total_depo ?></p>
            <p>daily users &nbsp &nbsp <?php echo $num ?></p>
            <button><a href="pending_deposit.php">confirm deposit</a></button>
        </div>
        <img src="../pix/5.png" alt="">
        </span>

        <span>
            <div>
            <h2>total withdrawal</h2>
            <p>$<?php echo $total_with ?></p>
            <p>unread msg &nbsp &nbsp <?php echo $sum ?></p>
            <button><a href="pending_withdraw.php">confirm withdraw</a></button>
        </div>
        <img src="../pix/6.png" alt="">
        </span>
    </div>

    <div>
        <span>
            <h2>deposit</h2>
            <p>pending deposits</p>
            <p><?php echo $sun ?></p>
        </span>

        <span>
            <h2>withdrawal</h2>
            <p>pending withdrawal</p>
            <p><?php echo $tun ?></p>
        </span>

        <span>
            <h2>investment</h2>
            <p>total investments &nbsp &nbsp &nbsp &nbsp <?php echo $dott ?></p>
            <p>status &nbsp &nbsp &nbsp &nbsp &nbsp None</p>
        </span>
    </div>

</section>
    
<div class="lastx"><p>
    &copy <?php echo date("Y");?> All rights Resvered
</p></div>
        
</div>
</body>
</html>
