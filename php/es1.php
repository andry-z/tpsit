<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
    <title>esercizio_1</title>
    <?php

    ?>
</head>
<body>
<form action ='<?php echo $_SERVER["PHP_SELF"];?>'method='post'>    <table>
        <tr>
          <td><label for="Localita">Localita'</label></td>
          <td><input type="text" name="Localita"><br><br></td>
        </tr>
        <tr>
            <td><label for="Data">Data</label></td>
            <td><input type="text" name="Data"><br><br></td>
        </tr>
        <tr>
            <td><label for="ora">Ora</label></td>
            <td><input type="text" name="ora"><br><br></td>
        </tr>
        <tr>
            <td><label for="Rilevazione">Tipo Rilevazione</label></td>
            <td><input type="radio" name="Rilevazione" value="OFC">
                <label for="html">OFC</label>
                <input type="radio" name="Rilevazione" value="AMB">
                <label for="AMB">AMB</label>
                <input type="radio" name="Rilevazione" value="DRA">
                <label for="DRA">DRA</label>
            </td>
        </tr>
        <tr>
            <td><label for="Umidita">Umidita'</label></td>
            <td><select name="Umidita">
                  <option>Assoluta</option>
                  <option>Relativa</option>
                </select>
            </td>    
        </tr>
        <tr>
            <td><label for="Clima">Clima Attuale</label></td>
            <td><select name="Clima">
                  <option>Pioggia</option>
                  <option>Sereno</option>
                  <option>Ventoso</option>
                  <option>Umido</option>
                  <option>Foschia</option>
                </select>
            </td>    
        </tr>
        <tr>
            <td><label for="Altitudine">Altitudine</label></td>
            <td><input type="text" name="Altitudine"><br><br></td>
          </tr>
          <tr>
            <td><input type="submit" name="submit"></td>
          </tr>
      </table>
    </form>
</body>
</html>


<?php
if(isset($_POST["submit"])) {
 
$loc = $_POST["Localita"]; 
$data =  $_POST["Data"]; 
$ora = $_POST["ora"]; 
$rilevazione = $_POST["Rilevazione"];
$umidita = $_POST["Umidita"];
$clima = $_POST["Clima"];
$alt = $_POST["Altitudine"]; 

echo "Localita: $loc<br>";
echo "Data: $data<br>";
echo "Ora: $ora<br>";
echo "Localita: $loc<br>";
echo ("Rilevazione: $rilevazione<br>");
echo ("Umidita': $umidita<br>");
echo ("Clima: $clima<br>");
echo "Altitudine: $alt<br>";



}
?>