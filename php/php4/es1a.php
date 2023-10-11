<!DOCTYPE html>
<html>
<head>
    <title>Operazioni Logiche Bit a Bit</title>
</head>
<body>
    <h1>Operazioni Logiche Bit a Bit</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST["numero"];
        $operazione = $_POST["operazione"];
        
        if (!is_numeric($numero)) {
            echo "Inserisci un numero valido.";
        } else {
            $numero_binario = decbin($numero);
            
            $risultato_binario = "";
            if ($operazione == "shift_destro") {
                $risultato_binario = decbin($numero >> 1);
            } elseif ($operazione == "shift_sinistro") {
                $risultato_binario = decbin($numero << 1);
            } elseif ($operazione == "not") {
                $risultato_binario = decbin(~$numero);
            }
            
            echo "Numero di input (in binario): $numero_binario<br>";
            echo "Operazione logica: $operazione<br>";
            echo "Risultato (in binario): $risultato_binario<br>";
            
            $risultato_decimale = bindec($risultato_binario);
            echo "Risultato (in decimale): $risultato_decimale";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Inserisci un numero: <input type="text" name="numero" /><br>
        <input type="radio" name="operazione" value="shift_destro" /> Shift Destro<br>
        <input type="radio" name="operazione" value="shift_sinistro" /> Shift Sinistro<br>
        <input type="radio" name="operazione" value="not" /> NOT<br><br>
        <input type="submit" value="Calcola">
    </form>
</body>
</html>
