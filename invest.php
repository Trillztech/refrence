<?php
session_start();
require('restriction.php');
require 'balance.php';

// if ($row['any_1']=="") {
//     header("location:thank_you.php");
// }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="cess/style.css" media="all">
    <link rel="shortcut icon" href="pix/log.png" type="image/x-icon">
    <script src="js/note.js"></script>
</head>
<?php require 'backhead.php'; ?>

    <div id="toop">
        <h1>dashboard || start investing</h1>
    </div>

<section class="invest">
<div>
<p><?php
if (isset($_POST['subvest'])) {
    require 'investx.php';
}
?></p>
    <form action="" method="post" name="investment_form">
        <select name="investment_plan" onchange="selectcoinx()" required>
            <option value="select plan">Select Plan</option>
            <option value="basic_plan">Basic plan</option>
            <option value="silver_plan">silver plan</option>
            <option value="gold_plan">Gold Plan</option>
        </select>
        <br>
        <span id="txtx"></span><br> 
        
        <input type="hidden" name="precentage_name">
        <button type="submit" name="subvest">Invest</button>
    </form>
</div>
    </section>

    <div class="lastx" style="margin-top:10%;"><p>
        &copy <?php echo date("Y");?> All rights Resvered
    </p></div>
            
    </div>
    </body>
    </html>