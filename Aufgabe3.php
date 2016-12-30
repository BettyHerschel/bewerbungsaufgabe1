<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aufgabe3</title>
</head>

<body>

<form action="Aufgabe3.php" method="get">
    Datum:<br>
    <input type="datetime-local" name="termindatum" placeholder="1999-12-24T06:39:57" required><br>
    Nachricht:<br>
    <textarea name="nachricht" minlength="1" maxlength="255" rows="4" cols="50" required></textarea>
    <br><br>
    <input type="submit" value="Speichern">
</form>

<?php
//echo $_GET["termindatum"];
//echo $_GET["nachricht"];

$termindatum= $_GET["termindatum"];
$nachricht= $_GET["nachricht"];

$myfile = fopen("termindatenbank.txt", "a") or die("Unable to open file!");
fwrite($myfile,$termindatum . "\n");
fwrite($myfile, $nachricht . "\n");
fclose($myfile);

$myfile = fopen("termindatenbank.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

?>

</body>

</html>


