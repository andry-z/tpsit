<!DOCTYPE html>
<html>
<head>
    <title>Calcola MCD e mcm</title>
</head>
<body>
    <h1>Calcola MCD e mcm</h1>
    <form method="post" action="">
        <label for="numero1">Primo Numero:</label>
        <input type="number" name="numero1" required><br>
        <label for="numero2">Secondo Numero:</label>
        <input type="number" name="numero2" required><br>
        <input type="submit" value="Calcola">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        function calcolaMCD($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function calcolaMCM($a, $b) {
            return ($a * $b) / calcolaMCD($a, $b);
        }

        $mcd = calcolaMCD($numero1, $numero2);
        $mcm = calcolaMCM($numero1, $numero2);

        echo "Il MCD di $numero1 e $numero2 e': $mcd<br>";
        echo "Il mcm di $numero1 e $numero2 e': $mcm<br>";
    }
    ?>
</body>
</html>
