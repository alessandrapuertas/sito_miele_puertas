<?php
    if (!isset($_GET["id_cibo"])) {
        die("manca un parametro essenziale");
    } else {
        $id_cibo = $_GET["id_cibo"];
        require("../data/connessione_db.php");
        $sql = "SELECT id_cibo, nome, foto, descrizione_txt, prezzo, glutenfree 
                            FROM cibi ";
                           
        $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
        if ($ris->num_rows == 0) {
            die ("non c'è niente che rispecchi i parametri richiesti");
        } else {
            $riga = $ris->fetch_assoc();
            $id_cibo = $riga["id_cibo"];
            $nome = $riga["nome"];
            $foto = $riga["foto"];
            $descrizione_txt = $riga["descrizione_txt"];
            $prezzo = $riga["prezzo"];
            $glutenfree = $riga["glutenfree"];
        }
    }
?>


<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>bar snap</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body style ="background: rgb(209, 196, 196)">
	<h1 style="text-align: center; margin-top: 15px"><?php echo $nome?></h1>
	<div class="contenuto2">
        <div class="prodotti">
            <?php
                echo "<img src='../immagini/$foto' alt='$foto'>";
            ?>
        </div>
        <div class="descrizione">
            
            <p>prezzo:<?php echo $prezzo?></p>
            <?php
                $paragrafi = explode("\n", $descrizione_txt);
                foreach ($paragrafi as $paragrafo) {
                    echo "<p>$paragrafo</p>";
                }

            ?>
        </div>
		
	</div>
	
	
</body>
</html>
<?php
	$conn->close();
?>