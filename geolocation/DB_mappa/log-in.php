<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>

        <div class="login-box">
            <img src="css/img/avatar.jpg" class="avatar" alt="Avatar Image">
            <h1>Login</h1>
            <form ACTION="log-in.php" METHOD="POST">
                <!-- USERNAME INPUT -->
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Inserire Username" required>
                <!-- PASSWORD INPUT -->
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Inserire Password" required><br><br>
                <!-- BUTTON LOGIN -->
                <input type="submit" name="Login" value="Login"><br>
            </form>
            <form ACTION="index.php" METHOD="POST">
                <!-- BUTTON HOME -->
                <input type="submit" value="Home">
            </form>
        </div>
        
        <?php
            if(isset($_POST["Login"])){
                include("config.inc.php");
                $username = $_POST["username"];
                $password = $_POST["password"];
                $password = md5($password);

                $query = "SELECT * FROM utenti WHERE username='$username'";
                $result = $link->query($query);

                if ($result->num_rows==0){
                    echo ("<div class='alert'><p align='center'><b>Utente $username sconosciuto<b></p></div>");
                    header("Refresh:2");
                    
                }
                else{

                    $user_row = $result->fetch_array();

                    if (hash_equals($password,$user_row["Password"])){
                        
                        $_SESSION["logged"] =true;
                        header('Location:http://localhost/geolocalizzazione/DB_mappa/geo.php');
                        session_start();
                        $_SESSION["username"]=$username;
                        $_SESSION["start_time"]=time();
                        
                    }
                    else
                    {
                        echo ("<div class='alert'><p align='center'><b>Password errata!<b></p></div>");
                        header("Refresh:2");
                        
                    }
                }
                $result->free();
                $link->close();
            }
            
        ?>
   </body>
</html>