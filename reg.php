<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corexinvest</title>
    <link rel="shortcut icon" href="pix/log.png" type="image/x-icon">
    <link rel="stylesheet" href="cess/gstyle.css" type="text/css" media="all">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
<header>
<div id="bg"></div>
</header>

 <div class="reg">

            <section id="form">
                <form action="" method="post" name="myforms">
                    <div>
                        <?php
                        if (isset($_POST['reg'])){
                            require 'reg_action.php';
                        }
                        ?>
                    </div>
                    <input type="text" placeholder="username" name="name" value="<?php echo @ $_POST['name']?>" required>
                    <input type="email" placeholder="Email" name="email" style="text-transform:lowercase;" value="<?php echo @ $_POST['email']?>" required>
                    <input type="email" placeholder="Upline Email" name="ref" value="<?php echo @ $_POST['ref']?>">
                    <input type="select" placeholder="select country" name="select" value="<?php echo @ $_POST['select']?>" required>
                    <input type="password" placeholder="password" name="pass" value="<?php echo @ $_POST['pass']?>" required>
                    <input type="submit" value="Register" name="reg" id="btn">
                    <p>Already have an account? <a href="login.php">Login</a> </p>
                </form>
            </section>            
        </div>










        </div>
<script src="js/note.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<!-- <script type="text/javascript" src="js/cost.js"></script> -->
<script type="text/javascript" src="js/back.js"></script>
        </body>
        </html>
