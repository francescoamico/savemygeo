<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
    <head>
        <meta charset="utf-8">
        <title>Benvenuto</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            .login-box {
                width: 50%;
                height: 75%;
                backdrop-filter:blur(5px);
                background:rgba(0,0,0,0.5);
                color: #fff;
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 70px 30px;
            }
            .login-box img{
                width: 30%;
                height: 50%;
                position: absolute;
                left:67%;
                top:25%;
            }
        </style>
    </head>
    <body>
        <div class="login-box">
        <img src="css/img/myimg.JPEG" class="img" >
            <h1 style="font-size:40px">Credits</h1>
            <p align="justify" style="font-size:30px">
                Salve, mi chiamo Francesco Amico,<br>ho 18 anni, 
                frequento la sezione F<br>dell’istituto tecnico industriale<br>“Leonardo Da Vinci” di Trapani e<br>questo è un progetto da me creato<br>per gli esami di stato 2020. 
            </p>
            <br>
            <form ACTION="index.php" METHOD="POST">
                <!-- BUTTON HOME -->
                <input type="submit" name="Home" value="Home"><br>
            </form>
            <a href="https://www.facebook.com/francesco.amico.587?ref=bookmarks" target="_blank"><img src="css/img/facebook.png" alt="Facebook" title="Facebook" style="position:absolute; width:6%; height:8%; top:88%; left:43%"/><a>
            <a href="https://www.instagram.com/francescoamico/" target="_blank"><img src="css/img/insta.png" alt="Instagram" title="Instagram" style="position:absolute; width:6%; height:8%; top:88%; left:53%"/><a>
        </div>
   </body>

</html>