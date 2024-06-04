<?php
    if (isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
	if (isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
    if(isset($_POST["provincia"])) $provincia = $_POST["provincia"];  else $provincia = "";
    if(isset($_POST["indirizzo"])) $indirizzo = $_POST["indirizzo"];  else $indirizzo = "";
    if(isset($_POST["data_iscrizione"])) $data_iscrizione = $_POST["data_iscrizione"];  else $data_iscrizione = "";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Barsnap-Registrazione</title>
</head>
<body style ="background: rgb(209, 196, 196)">
    <div class = "container__menu__2">
        
            
        <div class = "container__menu__item2">
            <a href="../login.php" class ="container__menu__item__copy2">
                login
            </a>
            <a href="pagina/registrazione.php" class ="container__menu__item__icon2">
                <img src="../immagini/enter.png" alt="" class = "img-dim">
            </a>
            
        </div>
        
    </div>
    <div class="card-container">
        <div class="cardd">
            <div class="card-content">
            <div style = "margin: auto;
	padding: 15px;
	text-align: center;
	padding-bottom: 40px;">
        <h1 >bar snap</h1>
        <h3>Non hai ancora un account? registrati!</h3>
        

        <form action="" method="post">
            <table style = "text-align: right;margin: auto;">
                <tr>
                    <td><label for="username">Username: </label></td>
                    <td><input type="text" name="username" id="username" value="<?php echo $username ?>" required></td>
                    
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td><label for="conferma">Conferma password: </label></td>
                    <td><input type="password" name="conferma" id="conferma" required></td>
                </tr>
                <tr>
                    <td><label for="nome">Nome: </label></td>
                    <td><input type="text" name="nome" id="nome" <?php echo "value = '$nome'" ?>></td>
                </tr>
                <tr>
                    <td><label for="cognome">Cognome: </label></td>
                    <td><input type="text" name="cognome" id="cognome" <?php echo "value = '$cognome'" ?>></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" name="email" id="email" <?php echo "value = '$email'" ?>></td>
                </tr>
                <tr>
                    <td><label for="telefono">Telefono: </label></td>
                    <td><input type="text" name="telefono" id="telefono" <?php echo "value = '$telefono'" ?>></td>
                </tr>
                <tr>
                    <td><label for="provincia">provincia: </label></td>
                    <td><input type="text" name="provincia" id="provincia" <?php echo "value = '$provincia'" ?>></td>
                </tr>
                <tr>
                    <td><label for="indirizzo">Indirizzo: </label></td>
                    <td><input type="text" name="indirizzo" id="indirizzo" <?php echo "value = '$indirizzo'" ?>></td>
                </tr>
                
            </table>
            <input style = "padding:3px"type="submit" value="Invia">
        </form>

        <p>
            <?php
            if(isset($_POST["username"]) and isset($_POST["password"])) {
                if ($_POST["username"] == "" or $_POST["password"] == "") {
                    echo "username e password non possono essere vuoti!";
                } elseif ($_POST["password"] != $_POST["conferma"]){
                    echo "<p>Le password inserite non corrispondono</p>";
                } else {
                    $data_iscrizione = date("Y-m-d H:i:s");
                    require("../data/connessione_db.php");

                    $myquery = "SELECT username 
						    FROM utenti 
						    WHERE username='$username'";

                    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                    if ($ris->num_rows > 0) {
                        echo "Questo username è già stato usato";
                    } else {

                        $myquery = "INSERT INTO utenti (username, password, nome, cognome, email, telefono, provincia, indirizzo, data_iscrizione)
                                    VALUES ('$username', '$password', '$nome', '$cognome','$email','$telefono','$provincia','$indirizzo','$data_iscrizione')";

                        if ($conn->query($myquery) === true) {
                            session_start();
                            $_SESSION["username"]=$username;
                            
						    $conn->close();

                            echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                            header('Refresh: 5; URL=index.php');

                        } else {
                            echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                        }
                    }
                }
            }
            ?>
        </p>
        	
    </div>
                
            </div>
        </div>
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>   
    <script>
        
        
        $(document).ready(function(){
            $(".container__menu__item__icon2").mouseenter(function(e){
                $(".container__menu__item__icon2").addClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy2").addClass('is-shown');
                e.preventDefault();
                
            });
            $(".container__menu__item2").mouseleave(function(e){
                $(".container__menu__item__icon2").removeClass('is-hidden');
                e.preventDefault();
                $(".container__menu__item__copy2").removeClass('is-shown');
                e.preventDefault();
            });
        

        });
        
        
    </script>