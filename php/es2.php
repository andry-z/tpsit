<html>
<body>
<form action ='<?php echo $_SERVER["PHP_SELF"];?>'method='post'>
    Nome <input type ='text' name = 'variabile'><br><br>
    Password <input type ='password' name = 'pass'><br>
	Quali argomenti preferiresti approfondire:<br>
<input type="checkbox" name="n1" value ="Informazioni su HTML">
<label for="vehicle1">Informazioni su HTML</label><br>
<input type="checkbox" name="n2" value ="Immagini">
<label for="vehicle1">Immagini</label><br>
<input type="checkbox" name="n3" value ="Collegamenti e URL">
<label for="vehicle1">Collegamenti e URL</label><br>
<input type="checkbox" name="n4" value ="Oggetti multimediali">
<label for="vehicle1">Oggetti multimediali</label><br>
<input type="checkbox" name="n5" value ="XHTML versione 1.0">
<label for="vehicle1">XHTML versione 1.0</label><br>
 <br>
 <input type ='submit' name = 'submit'>
</form>   
</body>
</html>

<?php
if (isset($_POST["submit"])){     
$nome = $_POST["variabile"];
$pass = $_POST["pass"];

if (isset($_POST["n1"]))
	$n1 = $_POST["n1"];
else
	$n1 = "";


if (isset($_POST["n2"]))
	$n2 = $_POST["n2"];
else
	$n2 = "";


if (isset($_POST["n3"]))
	$n3 = $_POST["n3"];
else
	$n3 = "";


if (isset($_POST["n4"]))
	$n4 = $_POST["n4"];
else
	$n4 = "";


if (isset($_POST["n5"]))
	$n5 = $_POST["n5"];
else
	$n5 = "";
    
echo "$nome<br>","$pass<br>","$n1<br>","$n2<br>","$n3<br>","$n4<br>","$n5<br>";

if($nome == $pass){echo "<b>Nome e password sono associati, bravo!</b>";}
else{echo"<b>Nome e password non sono associati, correggi!</b>";}

}

?>