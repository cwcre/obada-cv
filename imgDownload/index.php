<?php
if (isset($_POST['downloadBtn'])){
    $imgUrl = $_POST['file'];
    $regPattern = "/\.(jpe?g|png|gif|bmp|webp)$/i";
    if (preg_match($regPattern, $imgUrl)){
        $initCURL = curl_init($imgUrl);
        curl_setopt($initCURL,CURLOPT_RETURNTRANSFER, true);
        $downloadImgLink = curl_exec($initCURL);
        curl_close($initCURL);
        header('content-type: image/jpg');
        header('content-Disposition: attachment;filename="image.png"');
        echo $downloadImgLink;
    }
}
?>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.0/css/pro.css">
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Image Download</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
    <link href="Logo.png" rel="shortcut icon" type="image/x-icon">
    <script src="jquery-3.7.1.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="preview-box">
            <div class="cancel-icon"><i class="fas fa-times"></i></div>
            <div class="img-preview"></div>

            <div class="content">
                <div class="img-icon"><i class="fa-regular fa-image"></i></div>
                <div class="text">Paste the image URL below, <br> to see a preview or download!</div>
            </div>
        </div>
        <form action="#" class="input-data" method="post">
            <input type="text" name="file" id="field" placeholder="Paste the image url to download...">
            <input type="submit" name="downloadBtn" value="Download" id="button">
        </form>
    </div>
<script src="jquery-3.7.1.js"></script>
<!--<script src="bootstrap.bundle.js"></script>-->
<script>
    $(document).ready(() => {
        let on = $("#field").on("focusout", () => {
            let imgURL = $("#field").val();
            if (imgURL !== ""){
                let regPattern = /\.(jpe?g|png|gif|bmp|webp)$/i;
                if (regPattern.test(imgURL)){
                    let imgTag = '<img src="'+ imgURL +'" width="100%" height="100%" alt="">';
                    $(".img-preview").append(imgTag);
                    $(".preview-box").addClass("imgActive");
                    $("#button").addClass("active");
                    $("#field").addClass("disabled");
                    $(".cancel-icon").on("click",() => {
                        $(".preview-box").removeClass("imgActive");
                        $("#button").removeClass("active");
                        $("#field").removeClass("disabled");
                        $(".img-preview img").remove();
                        $("#field").val("");
                    })

                } else{
                    alert("invalid image url - " + imgURL);
                    $("#field").val('');
                }


            }
        });
    })
</script>
</body>
</html>