<!DOCTYPE html>
<html>
<head>
    <title>Tavola Pitagorica</title>
</head>
<body>
    <h1>Tavola Pitagorica</h1>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
