<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.0/css/pro.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatbot</title>
    <link rel="stylesheet" href="Newstyle.css">
    <link href="Logo.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.bundle.css">
    <script src="jquery-3.7.1.js"></script>
    <script src="bootstrap.bundle.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="title">Simple online chatbot</div>
    <div class="form">
        <div class="bot-inbox inbox">
            <div class="icon"><i class="fas fa-user"></i></div>
            <div class="msg-header">
                <p>Hello there, how can I help you ?</p>
            </div>
        </div>
    </div>
    <div class="typing-field">
        <div class="input-data">
            <input name="text" id="data" type="text" placeholder="Type something here..." required>
            <button id="send-btn">Send</button>
        </div>
    </div>
</div>

<script src="jquery-3.7.1.js"></script>
<script src="bootstrap.bundle.js"></script>
<script>
    $(document).ready(() => {
        $("#send-btn").on("click", () => {
            $value = $("#data").val();
            $msg ='<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
            $(".form").append($msg);
            $("#data").val("");
            // * Start Ajax
            $.ajax({
                url: 'message.php',
                type: 'POST',
                data: 'text='+$value,
                success: function (result){
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                    $(".form").append($replay);
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            })
        })
    })
</script>
</body>
</html>