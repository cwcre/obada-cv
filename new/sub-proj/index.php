
<html lang="en">
<head>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.0/css/pro.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Subscribe Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
          rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
    <link href="Logo.png" rel="shortcut icon" type="image/x-icon">

<body>

    <label for="toggle" class="show-btn">Show modal</label>
    <input type="checkbox" id="toggle">
    <div class="wrapper">
        <label for="toggle" class="cancel-icon"><i class="fas fa-times"></i></label>
        <div class="icon"><i style="position: relative;top: 25%" class="far fa-envelope"></i></div>
        <div class="content">
            <header>Become a subscriber</header>
            <p>Subscribe to our blog and get latest updates straight to your inbox</p>
        </div>
        <form action="index.php" method="post">
            <?php
            $userEmail = "";
            if (isset($_POST['subscribe'])){
                $userEmail = $_POST['email'];
                if (filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
                    $subject = "Thanks for subscribing us - Obada Armanazi";
                    $message = "you always go to see all new blogs and news";
                    $sender = "From: ebaaarmanazi@gmail.com";
                    if (mail($userEmail  ,$subject, $message,$sender)){
                        ?>
                        <div class="alert success-alert">Email is correct</div>
                        <?php
                    }
                } else{
                    ?>
                    <div class="alert error-alert"><?php echo $userEmail ?> is not a valid Email</div>
                    <?php
                }
            }
            ?>
            <div class="field">
                <input type="text" name="email" placeholder="Enter Your Email" required value="<?php echo $userEmail?>">
            </div>
            <div class="field btn">
                <input class="layer" name="subscribe" type="submit" value="Subscribe">
            </div>
        </form>
        <div class="text">We do not share your information</div>
    </div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!--<script src="bootstrap.bundle.js"></script>-->
<script src="app.js"></script>
</body>
</html>