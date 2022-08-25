<?php
session_start();
require('restriction.php');
?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corexinvest</title>
    <link rel="stylesheet" href="cess/gstyle.css" media="all">
    <script src="js/note.js"></script>
    <link rel="shortcut icon" href="pix/log.png" type="image/x-icon">

</head>
    <section class="thank">
        <div>
            <p><?php echo $_SESSION['user']; ?> your deposit was successful</p>
            <!-- <p>🤩️🎁️🎉️🎊️🎖️🏅️</p> -->
            <p id="win">🏅️</p>
        <section id="logout">
            <p>please wait for admin to confirm Payment <button><a href="logout.php">Logout</a></button></p>
        </div>
    </section>

           
        </section>
</form>
    </section>
    