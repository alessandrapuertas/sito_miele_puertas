<?php
    if (isset($_POST["username"])) $username = $_POST["username"]; else $username = "";
    if (isset($_POST["password"])) $password = $_POST["password"]; else $password = "";
    
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login snap</title>
</head>
<body style ="background: rgb(209, 196, 196)">
    
    <div class = "container__menu__2">
    
        <div class = "container__menu__item1 ">
            <a href="colazioni.html" class ="container__menu__item__copy1">
                colazioni
            </a>
            <a href="colazioni.html" class ="container__menu__item__icon1">
                <img src="immagini/bar-counter.png" alt="" class = "img-dim">
            </a>
            
        </div>
        <div class = "container__menu__item2">
            <a href="aperitivi.html" class ="container__menu__item__copy2">
                aperitivi
            </a>
            <a href="aperitivi.html" class ="container__menu__item__icon2">
                <img src="immagini/add.png" alt="" class = "img-dim">
            </a>
            
        </div>
        
</div>
    
    <div class = "contenuto">
        
        <h1>bar snap</h1>
		<h2>effettua il login!</h2>

        <form action="" method="post">
            <table style ="text-align: left; margin: auto; padding:5px;">
                <tr>
                    <td><label for="username">username: </label></td>
                    <td><input type="text" name="username" id="username" value = "<?php echo $username ?>" required></td>
                </tr>
                <tr>
                    <td><label for="password">password: </label></td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
            </table>
            <input style = "padding:3px;" type="submit" value="accedi">
        </form>
        <?php
            if (isset($_POST["username"]) and isset($_POST["password"])) {
                require("data/connessione_db.php");

                $myquery = "SELECT username, password 
                            FROM utenti
                            WHERE username='$username'
                                AND password='$password'";  

                $ris = $conn->query($myquery) or die("<p>Query fallita! ".$conn->error."</p>");

                if ($ris->num_rows == 0) {
                    echo "<p>Utente o password non trovati.</p>";
                    $conn->close();
                } else {
                    session_start();
                    $_SESSION["username"] = $username;

                    $conn->close();
					header("location: pagina/index.php");
                }
            }
        ?>
    </div>
    
</body>
</html>

