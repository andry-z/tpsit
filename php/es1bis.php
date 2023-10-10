<!DOCTYPE html>
<html>
<head>
    <title>Modulo di Inserimento Dati</title>
</head>
<body>
<h1>Modulo di Inserimento Dati</h1>
    <form action ='<?php echo $_SERVER["PHP_SELF"];?>'method='post'> 
        <h2>Dati del Cliente</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        
        <label for="cognome">Cognome:</label>
        <input type="text" name="cognome" required><br>
        
        <label for="ragione_sociale">Ragione Sociale:</label>
        <input type="text" name="ragione_sociale"><br>
        
        <label for="indirizzo">Indirizzo:</label>
        <input type="text" name="indirizzo"><br>
        
        <label for="p_iva">Partita IVA:</label>
        <input type="text" name="p_iva"><br>
        
        <label for="tel">Telefono:</label>
        <input type="text" name="tel"><br>
        
        <h2>Dati del Prodotto Acquistato</h2>
        <label for="descrizione">Descrizione:</label>
        <input type="text" name="descrizione" required><br>
        
        <label for="codice">Codice:</label>
        <input type="text" name="codice" required><br>
        
        <label for="giacenza">Giacenza:</label>
        <input type="number" name="giacenza" required><br>
        
        <label for="prezzo_unitario">Prezzo Unitario:</label>
        <input type="number" name="prezzo_unitario" step="0.01" required><br>
        
        <label for="percentuale_iva">% IVA:</label>
        <input type="number" name="percentuale_iva" step="0.01" required><br>
        
        <h2>Quantità Acquistata e Sconto</h2>
        <label for="quantita">Quantità Acquistata:</label>
        <input type="number" name="quantita" required><br>
        
        <label for="sconto">Sconto:</label>
        <input type="number" name="sconto" step="0.01"><br>
        
        <input type="submit" name="submit">
    </form>
</body>
</html>

    <?php
   if (isset($_POST["submit"])){ $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $ragione_sociale = $_POST["ragione_sociale"];
        $indirizzo = $_POST["indirizzo"];
        $p_iva = $_POST["p_iva"];
        $tel = $_POST["tel"];

        $descrizione = $_POST["descrizione"];
        $codice = $_POST["codice"];
        $giacenza = $_POST["giacenza"];
        $prezzo_unitario = $_POST["prezzo_unitario"];
        $percentuale_iva = $_POST["percentuale_iva"];

        $quantita = $_POST["quantita"];
        $sconto = $_POST["sconto"];

        $prezzo_senza_iva = $prezzo_unitario * $quantita - $sconto;
        $iva = ($prezzo_senza_iva * $percentuale_iva) / 100;
        $prezzo_con_iva = $prezzo_senza_iva + $iva;

        echo "<h2>Dati del Cliente</h2>";
        echo "Nome: $nome<br>";
        echo "Cognome: $cognome<br>";
        echo "Ragione Sociale: $ragione_sociale<br>";
        echo "Indirizzo: $indirizzo<br>";
        echo "Partita IVA: $p_iva<br>";
        echo "Telefono: $tel<br>";

        echo "<h2>Dati del Prodotto Acquistato</h2>";
        echo "Descrizione: $descrizione<br>";
        echo "Codice: $codice<br>";
        echo "Giacenza: $giacenza<br>";
        echo "Prezzo Unitario: $prezzo_unitario<br>";
        echo "% IVA: $percentuale_iva<br>";

        echo "<h2>Quantità Acquistata e Sconto</h2>";
        echo "Quantità Acquistata: $quantita<br>";
        echo "Sconto: $sconto<br>";

        echo "<h2>Calcolo del Prezzo</h2>";
        echo "Prezzo Senza IVA: $prezzo_senza_iva<br>";
        echo "IVA $iva<br>";
        echo "Prezzo Con IVA: $prezzo_con_iva<br>";  
    }
    ?>