<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obada's Projects</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="imgDownload/bootstrap.bundle.css" rel="stylesheet">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            transition: 0.3s all;
        }
        .main{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background: url("image.png") no-repeat center;
            background-size: cover;
            background-blend-mode: darken;
            background-color: rgba(0, 0, 0, 0.26);
        }
        .header{
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #7D2AE8;
            color: white;
        }
        .logo{
            width: 72px;
            height: 72px;
            display: flex;
            background: url("Logo.png") no-repeat center;
            background-size: cover;
        }

        .header-container{
            width: 80%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .list{
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
        }
        .list li a{
            color: white;
            text-decoration: none;
        }
        .list li a:hover{
            color: #fff3cd;
            text-decoration: none;
            font-size:1.1rem;
        }
        .image{
            width: 100%;
            height: 89.7vh;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .black-box{
            width: 40%;
            height: 85%;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 12px;
            position: relative;
            right: 20%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: start;
        }
        .black-box ul li{
            font-size: 1.2rem;
        }

        .btns-container{
            width:80%;
            height:40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }


        .links{
            color:#fff;
            list-style:none;
            width:48%;
            height:100%;
            background:#7c29e5;
            border-radius:5px;
            border:none;
            text-decoration: none;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .btn1:hover{
            background:#651dc4;
        }
        .links:active{
            width:46.5%;
            height:98.5%;
        }
        .btn1{
            width:100%;
            height:100%;
            background:#7c29e5;
            list-style:none;
            border-radius:5px;
            border:none;
            color:#fff;
        }
        .fa-bars{
            font-size:2.25rem;
            opacity: 0;
            pointer-events: none;
            position: absolute;
        }
        .burger_menu{
            width: 100%;
            height: 300px;
            display: flex;
            position: absolute;
            background: rgba(125, 42, 232, 0.87);
            left: 0;
            right: 0;
            /*top: 79px;*/
            top: -400px;
            z-index: 1;
            flex-direction: column;
            justify-content: space-around;
            align-items: start;
            padding: 20px;
            list-style: none;
            text-decoration: none;
        }
        .burger_menu li a{
            text-decoration: none !important;
            color:white;
            font-size: 1.1rem;
        }
        .burger_menu li a:hover{
            color: #fdecb7;
            font-size: 1.25rem;
        }
        @media (max-width: 1050px) and (min-width: 869px) {
            html{
                font-size: 12px;
            }
        }
        @media (max-width: 868px) and (min-width: 700px){
            html{
                font-size: 10px;
            }
            .black-box{
                width: 75%;
                right: 0;
            }
        }
        @media (max-width: 699px) and (min-width: 500px){
            html{
                font-size: 12px;
            }
            .list{
                display: none;
            }
            .fa-bars{
                opacity: 1;
                pointer-events: auto;
                cursor: pointer;
                position: relative;
            }
            .black-box{
                width: 75%;
                right: 0;
            }
        }
        @media (max-width: 499px) and (min-width: 355px){
            html{
                font-size: 12px;
            }
            .list{
                display: none;
            }
            .fa-bars{
                opacity: 1;
                pointer-events: auto;
                cursor: pointer;
                position: relative;
            }
            .black-box{
                width: 93%;
                right: 0;
            }
        }
        @media (max-width: 354px) and (min-width: 299px){
            html{
                font-size: 11px;
            }
            .list{
                display: none;
            }
            .fa-bars{
                opacity: 1;
                pointer-events: auto;
                cursor: pointer;
                position: relative;

            }
            .black-box{
                width: 97%;
                right: 0;
            }
        }

    </style>
</head>
<body>
<div class="main">
    <header class="header">
        <div class="header-container">
            <div class="logo"></div>
            <ul class="list list-unstyled">
                <li><a href="https://obadaprojects.industmap.com/index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="allProjects/front-end/frontEnd.php">Front-End</a></li>
                <li><a href="allProjects/back-end/backEnd.php">Back-End</a></li>
                <li><a href="allProjects/wordpress/wordpress.php">WordPress</a></li>
            </ul>
            <i id="menuBtn" class="fa-sharp fa-regular fa-bars"></i>
            <ul id="menu" class="burger_menu">
                <li><a href="https://obadaprojects.industmap.com/index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="allProjects/front-end/frontEnd.php">Front-End</a></li>
                <li><a href="allProjects/back-end/backEnd.php">Back-End</a></li>
                <li><a href="allProjects/wordpress/wordpress.php">WordPress</a></li>
            </ul>
        </div>
    </header>
    <div class="image">
        <div class="black-box">
            <h2 style="color: white; font-size: 3rem">Obada Armanazi Web Developer</h2>
            <ul style="color: #fff3cd">
                <h4 style="color: white">My Programing Language's</h4>
                <li>HTML</li>
                <li>CSS</li>
                <li>JAVA SCRIPT</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>SQL</li>
            </ul>
            <div class="btns-container">
                <a class="links" href="CV.pdf"><button class="btn1">My CV</button></a>
                <a class="links" href="allProjects/index.php"><button class="btn1">All Projects</button></a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="imgDownload/bootstrap.bundle.js"></script>
<script>
    const menuBtn = document.getElementById("menuBtn"),
        menu = document.getElementById("menu");
    let isClicked = true
    menuBtn.onclick = () => {
        if (isClicked){
            menu.style.top = "75px"
            isClicked = false
        } else{
            menu.style.top = "-400px"
            isClicked = true
        }
    }

</script>
</body>
</html>
