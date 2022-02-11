<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
    <head>
        <meta charset="utf-8">
        <title>Registrazione</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            .login-box {
                width: 320px;
                height: 660px;
                backdrop-filter:blur(5px);
                background:rgba(0,0,0,0.5);
                color: #fff;
                top: 53%;
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
            <img src="css/img/avatar3.jpg" class="avatar" alt="Avatar Image">
            <h1>Registrazione</h1>
            <form ACTION="registrazione.php" METHOD="POST">
                <!-- NAME INPUT -->
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Inserire Nome" required>
                <!-- SURNAME INPUT -->
                <label for="surname">Cognome</label>
                <input type="text" name="cognome" placeholder="Inserire Cognome" required>
                <!-- MAIL INPUT -->
                <label for="surname">E-mail</label>
                <input type="text" name="mail" placeholder="Inserire E-mail" required>
                <!-- USERNAME INPUT -->
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Inserire Username" required>
                <!-- PASSWORD INPUT -->
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Inserire Password" required><br><br>
                <!-- BUTTON LOGIN -->
                <input type="submit" name="reg" value="Registrati"><br>
            </form>
            <form ACTION="index.php" METHOD="POST">
                <!-- BUTTON HOME -->
                <input type="submit" value="Home">
            </form>
        </div>

        <?php
            if(isset($_POST["reg"])){
                include("config.inc.php");
                $nome = $_POST["nome"];
                $cognome = $_POST["cognome"];
                $email = $_POST["mail"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                
                $nome = crypt($nome,'rl');
                $cognome = crypt($cognome,'rl');
                $email = crypt($email,'rl');
                $password = md5($password);

                $query = "SELECT * FROM utenti WHERE Username='$username'";
                $result = $link->query($query);

                if($result-> num_rows != 0){
                    echo ("<div class='alert'><p align='center'>L'utente <b>$username</b> è già presente nel database!</p></div>");
                    header("Refresh:2");
                }
                else
                {
                    $query = "INSERT INTO utenti (Nome, Cognome, Email, Username, Password)
                    VALUES ('$nome','$cognome','$email','$username','$password')";
                    $link->query($query);

                    echo ("<div class='alert'><p align='center'>L'utente <b>$username</b>  è stato aggiunto al database, premi Home per effettuare il log-in</p></div>");
                    header("Refresh:2");
                }
                $result->free();
                $link->close();
            }
        ?>
   </body>
</html>