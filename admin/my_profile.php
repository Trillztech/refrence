<?php
session_start();
require '../connect.php';
require('../restriction.php');
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
        <h1>dashboard || profile</h1>
    </div>

<!-- <section class="invest"> -->
 <div class="reg">

            <section id="form" style="margin-top:-2%;">
                <form action="update.php" method="post" name="myforms">
                    <input type="text" placeholder="<?php echo $userx; ?>" name="name" required>

                    <input type="email" value="<?php echo $mailx;?>" name="email" style="text-transform:lowercase;" required readonly>

                    <input type="password" placeholder="change password" name="past" required>

                    <input type="submit" value="update" name="reg" id="btn">
                </form>
            </section>            
        </div>
    
<!-- </section> -->

    <div class="lastx"><p>
        &copy <?php echo date("Y");?> All rights Resvered
    </p></div>
            
    </div>
    </body>
    </html>