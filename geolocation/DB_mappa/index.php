<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
    <head>
        <meta charset="utf-8">
        <title>Benvenuto</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            .login-box {
                width: 320px;
                height: 440px;
                backdrop-filter:blur(5px);
                background:rgba(0,0,0,0.5);
                color: #fff;
                top: 50%;
                left: 80%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 70px 30px;
            }
        </style>
    </head>
    <body>

        <div class="login-box">
            <img src="css/img/avatar2.jpg" class="avatar" alt="Avatar Image">
            <h1>Benvenuto</h1>
            <p align="justify">
                Benvenuto nel mio sito web.<br>
                Qui potrai accedere ad una cartina geografica che ti permetterà di salvare o stampare le posizioni da te scelte.<br>
                Registrati o accedi per continuare.
            </p>
            <br>
            <form ACTION="log-in.php" METHOD="POST">
                <!-- BUTTON LOGIN -->
                <input type="submit" name="Log-in" value="Login"><br>
            </form>
            <form ACTION="registrazione.php" METHOD="POST">
                <!-- BUTTON REG -->
                <input type="submit" value="Registrati">
            </form>
            <a href="credits.php">Chi sono?</a><br><br>
        </div>
   </body>

</html>