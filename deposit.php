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
        <h1>dashboard || fund your wallet</h1>
    </div>

<section class="deposit">
     <form action="" method="post" name="base_wallet">
   <section>
        <p>
            <?php
        if (isset($_POST['depositxx'])) {
            require 'deposit_form.php';
        }?>
        </p>

    <input type="number" name="amount" placeholder="Enter Amount" value="<?php echo @ $_POST['amount'];?>" required>

<br><br>

    <select name="crypto"  onchange="paymentcoinx()" required>
        <option value="" required>Please Select A Payment Method</option>
        <option value="btc" name="pay">Bitcoin(BTC)</option>
        <option value="dodge" name="pay">Dogecoin (doge)</option>
        <option value="bnb" name="pay">BNB (bep20)</option>
        <option value="usdt" name="pay">Usdt (TRC20)</option>
    </select>

    <input type="hidden" name="reciver_wallet" placeholder="reciever wallet address" required readonly>

    <input type="hidden" name="type" value="deposit" required readonly>
    <input type="hidden" name="network" required readonly>
   </section>

        <section class="pay">
        <span style="display:block;" id="address"></span>
        </section>
</form>

    <div class="lastx"><p>
        &copy <?php echo date("Y");?> All rights Resvered
    </p></div>
            
    </div>
    </body>
    </html>

