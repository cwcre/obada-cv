<?php
if (isset($_POST['download'])){
    $imgUrl = $_POST['imgUrl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $download = curl_exec($ch);
    curl_close($ch);
    header('content-type: image/jpg');
    header('content-Disposition: attachment; filename = "thumbnail.jpg"');
    echo $download;
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Thumbnail</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <link href="bootstrap.bundle.css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <header>Download Thumbnail</header>
        <div class="url-input">
            <span class="title">
                Paste video url:
            </span>
            <div class="field">
                <input type="text" placeholder="https://www.youtube.com/watch?v=3W0F35S0NeU" required="required">
                <input class="hidden-input" type="hidden" name="imgUrl">
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="preview-area">
            <i class="icon fas fa-cloud-download-alt"></i>
            <img class="thumbnail" src="" alt="thumbnail">
            <span>Paste video url to see preview</span>
        </div>
        <button name="download" class="download-btn" type="submit">Download Thumbnail</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="app.js"></script>
</body>
</html>