<?php
session_start();
require('restriction.php');
require 'connect.php';
require 'balance.php';
require 'update_user_wallet.php';
require 'select.php';

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="cess/gstyle.css" media="all">
    <link rel="shortcut icon" href="pix/log.png" type="image/x-icon">
</head>
<?php require 'backhead.php'; ?>

<div id="toop">
        <h1>dashboard || fund your wallet</h1>
    </div>
    
<section class="holdder">
    
    <div class="first">
        <span>
            <div>
            <h2>total balance</h2>
            <p>$<?php echo $bal ?></p>
            <p>$0.00 &nbsp &nbsp BTC</p>
            <button><a href="deposit.php">deposit</a></button>
        </div>
        <img src="pix/5.png" alt="">
        </span>

        <span>
            <div>
            <h2>total profit</h2>
            <p>daily profit &nbsp &nbsp 10%</p>
            <p>$0.00 &nbsp &nbsp BTC</p>
            <button><a href="withdraw.php">withdraw</a></button>
        </div>
        <img src="pix/6.png" alt="">
        </span>
    </div>

    <div>
        <span>
            <h2>deposit</h2>
            <p>last deposits &nbsp &nbsp  <?php echo $last_depo; ?></p>
            <p>status &nbsp &nbsp &nbsp &nbsp  <?php echo $last_status; ?></p>
        </span>

        <span>
            <h2>withdrawal</h2>
            <p>last withdrawal &nbsp &nbsp  <?php echo $last_with; ?></p>
            <p>status &nbsp &nbsp &nbsp &nbsp <?php echo $last_statux; ?></p>
        </span>

        <span>
            <h2>investment</h2>
            <p>last investment &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $last_invest; ?></p>
        </span>
    </div>

</section>
    
<div class="lastx"><p>
    &copy <?php echo date("Y");?> All rights Resvered
</p></div>
        
</div>
</body>
</html>
