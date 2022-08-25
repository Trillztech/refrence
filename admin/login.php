<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="shortcut icon" href="../pix/log.png" type="image/x-icon">
    <link rel="stylesheet" href="../cess/gstyle.css" type="text/css" media="all">
</head>
<body>

    <div class="container">

<header>
        <div id="bg"></div>
    <?php //require_once 'head.php'; ?>
</header>

 <div class="reg">

            <section id="formt">

                <form action="" method="post" name="myforms">
                    <div>
                        <?php
                        if (isset($_POST['regx'])){
                            require 'logact.php';
                        }
                        ?>
                    </div>
                    <input type="email" placeholder="Email" name="email" style="text-transform:lowercase;" value="<?php echo @ $_POST['email']?>" required>

                    <input type="password" placeholder="password" name="pass" value="<?php echo @ $_POST['pass']?>" required>
                    <input type="submit" value="login" name="regx" id="btn"><br>
                </form>
            </section>
        </div>










        </div>
<script src="js/note.js"></script>
<script type="text/javascript" src="../js/particles.min.js"></script>
<script type="text/javascript" src="../js/cost.js"></script>
<script type="text/javascript" src="../js/back.js"></script>
        </body>
        </html>