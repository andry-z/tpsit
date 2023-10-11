<!DOCTYPE html>
<html>
<head>
    <title>Calcolatrice Logica in Binario</title>
</head>
<body>
    <h1>Calcolatrice Logica in Binario</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Inserisci il primo numero in binario: <input type="text" name="numero1" /><br>
        Inserisci il secondo numero in binario: <input type="text" name="numero2" /><br>

        Seleziona un'operazione logica:
        <input type="radio" name="operazione" value="and"> AND
        <input type="radio" name="operazione" value="or"> OR
        <input type="radio" name="operazione" value="xor"> XOR
        <br>

        <input type="submit" value="Calcola">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operazione = $_POST["operazione"];

        $risultato_binario = '';
        switch ($operazione) {
            case "and":
                $risultato_binario = decbin(bindec($numero1) & bindec($numero2));
                break;
            case "or":
                $risultato_binario = decbin(bindec($numero1) | bindec($numero2));
                break;
            case "xor":
                $risultato_binario = decbin(bindec($numero1) ^ bindec($numero2));
                break;
        }
            
            echo "Risultato in binario: " . $risultato_binario . "<br>";
            echo "Risultato in decimale: " . bindec($risultato_binario) . "<br>";
        } else {
            echo "Inserisci numeri binari validi (composti solo da 0 e 1).";
        }
    
    ?>
</body>
</html>
