<?php
// Hieronder staan de variabelen die je nodig hebt bij het inloggen op de database.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
// Hieronder staat hoe je een connectie met de database maakt.
$conn = new mysqli($servername, $username, $password, $dbname);
// Hieronder zie je hoe een connectie kan worden gecontroleerd. Als er een error is ontstaan, dan wordt de functie die uitgevoerd die de boel afsluit.
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// Hieronder zie je een echo die alleen wordt uitgevoerd als het resultaat van de connectie geen error gaat opleveren.
echo "Connected successfully";
?>