<?php
/*Scrivere una pagina php contenente un modulo di immissione (“form”)
con una casella di testo, nella quale l’utente possa inserire una stringa
a piacere. Il contenuto di tale stringa dovrà poi essere convertito nei tipi:
- intero
- float (double)
- boolean
- string.
Nel “modulo di input” (oggetto “FORM”) utilizzare la variabile globale
PHP_SELF per inviare il form alla pagina php stessa in cui è incluso.
*/
?>


<form action ='<?php echo $_SERVER["PHP_SELF"];?>'method='post'>
 Variabile da trasformare <input type ='text' name = 'variabile'>
 <br>
 <input type ='submit' name = 'submit'>
</form>

<?php
if (isset($_POST["submit"])){
    $variabile = (int)$_POST["variabile"];
    echo "Trasformata in integer vale --> $variabile","<br>";
    $variabile = (float)$_POST["variabile"];
    echo "Trasformata in float vale --> $variabile","<br>";
    $variabile = (boolean)$_POST["variabile"];
    echo "Trasformata in boolean vale --> $variabile","<br>";
    $variabile = (string)$_POST["variabile"];
    echo "Trasformata in string vale --> $variabile","<br>";
}
?>