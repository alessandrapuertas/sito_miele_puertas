<?php
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('location: ../login.php');
	}
	
	$username = $_SESSION["username"];
	
	require('../data/connessione_db.php');

	if(isset($_POST['id_cibo'])){
        foreach($_POST['id_cibo'] as $id_cibo) {
            
            $sql = "UPDATE cibi
                    SET username = '$username'
                    WHERE id_cibo = '$id_cibo'";
            $conn->query($sql) or die("<p>Query fallita!</p>");
        }
    }	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>ordina con noi</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body style ="background: rgb(209, 196, 196)">
    
	<div class="contenuto">
		<h1 style="text-align: center; margin-top: 0px">ordina con noi!</h1>
		<p >cosa vuoi ordinare?</p>
		<form method="post" action="">
			<table style = "text-align:left; margin: auto;">
				<tr>
					<td><label for="nome_cibo">cerca:</label></td>
                    <td><input class="input_ricerca" type="text" name="nome_cibo" id="nome_cibo" value="<?php echo isset($_POST['nome_cibo']) ? $_POST['nome_cibo'] : ''; ?>"></td>
				</tr>
				<tr>
                    <td><label for="glutenfree">glutenfree: </label></td>
                    <td colspan="2"><input type="checkbox" name="glutenfree" id="glutenfree" value="si"></td>
                </tr>
				<tr>
					<td style="text-align: center; padding-top: 10px" colspan="2"><input type="submit" value="cerca"/></td>
				</tr>
			</table>
		</form>

		<p></p>

		<form method="post" action="">
            <?php
                if (isset($_POST["nome_cibo"]) ){
                    
                    $nome = $_POST["nome_cibo"];
                    if(isset($_POST["glutenfree"])){
                        $glutenfree = $_POST["glutenfree"];
                        if($glutenfree == "si"){
                            $sql = "SELECT id_cibo, nome, foto, descrizione_txt, prezzo, glutenfree
                                FROM cibi 
                                WHERE nome LIKE '%$nome%'
                                AND glutenfree = 'si'";
                    }
                    
                    
                    } else {
                        $sql = "SELECT id_cibo, nome, foto, descrizione_txt, prezzo, glutenfree
                            FROM cibi  
                            WHERE nome LIKE '%$nome%'";}
                    $sql2 = "SELECT data_iscrizione
                                FROM utenti
                                WHERE username = '$username'" ;
                    $ris2 = $conn->query($sql2) or die("<p>Query fallita!</p>");
                    $riga2 = $ris2->fetch_assoc();
                    $data_iscrizione = $riga2['data_iscrizione'];
                    
                    $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
                    $data_odierna = date("Y-m-d H:i:s");
                    $datetime1 = new DateTime($data_iscrizione);
                    $datetime2 = new DateTime($data_odierna);
                    $tempopassato = $datetime1->diff($datetime2);
                    $giornipassati = $tempopassato->days;
                    if($giornipassati >=365){
                        
                        echo "<p>sei registrato da più di un anno, hai uno sconto del 20% su tutti i nostri prodotti!</p>";
                    }
                    if ($ris->num_rows > 0) {
                        echo "<p>scegli cosa ordinare!</p>";
                    
                        foreach($ris as $riga){
                            $id_cibo = $riga["id_cibo"];
                            $nome = $riga["nome"];
                            $foto = $riga["foto"];
                            $descrizione_txt = $riga["descrizione_txt"];
                            $glutenfree = $riga["glutenfree"];
                            
                            
                            if($giornipassati >=365){
                                $prezzo = $riga["prezzo"] - ($riga["prezzo"] /100) * 20;
                                
                            } else{
                                $prezzo = $riga["prezzo"];
                            }
                            echo <<<EOD
                                <div>
                                    
                                    
                                    <div class ="card_cibo">
                                        <div class = "card_cibo__img">
                                            <img src="../immagini/$foto" alt="$foto">
                                        </div>
                                        <div class ="card_cibo__testo">
                                            <div >
                                                <p>$nome</p>
                                                <p>prezzo:$prezzo</p>
                                                
                                                
                                                

                                                <p></p>


                                                <p ><a href="infocibo.php?id_cibo=$id_cibo">scopri di piu!</a></p>
                           
                            
                                                <p><input type='checkbox' name='id_cibi[]' value='$id_cibo'/> seleziona</p>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            EOD;
                        }
                        echo "<p style='text-align: center; padding-top: 10px'><input type='submit' value='Conferma'/></p>";
                    } else {
                        echo "<p>nessun risultato disponibile per la tua ricerca</p>";
                    }
                    
                    echo "</table>";
                }

            ?>
		</form>	

	</div>	
	
</body>
</html>
<?php 
        require('footer.php');
?>
<?php
	$conn->close();
?>
