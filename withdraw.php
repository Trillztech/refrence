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
        <h1>dashboard || withdraw funds</h1>
    </div>

<section class="invest">
    <div>
    <p>your account balance is $<?php echo $bal ?> </p>
    <p><?php if (isset($_POST['withdraw-btn'])) {
       require 'withdraw_act.php';
    } ?></p>
        <form action="" method="post">
    <input type="hidden" name="iid"  value="<?php echo $_SESSION['id']; ?>">
           <select name="withdraw" required>
               <option value="" required>Please Select wallet address you wish to be Paid</option>
               <option value="btc" name="pay">tron(trc20)</option>
               <option value="dodge" name="pay">dogecoin (doge)</option>
               <option value="bnb" name="pay">BNB (bep20)</option>
               <option value="usdt" name="pay">Usdt (TRC20)</option>
           </select><br>
            <input type="number" name="amount" placeholder="please enter amount" required><br>
            <input type="text" name="wallet" placeholder="please enter your wallet address" required><br>
            <button type="submit" name="withdraw-btn">withdraw</button>
        </form>
    </div>
</section>






    <div class="lastx"><p>
        &copy <?php echo date("Y");?> All rights Resvered
    </p></div>
            
    </div>
    </body>
    </html>