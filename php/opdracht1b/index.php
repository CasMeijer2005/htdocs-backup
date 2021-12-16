<?php
// Hieronder staan de variabelen die je nodig hebt bij het inloggen op de database.
$servername = "localhost";
$dbname     = "cms";
$username   = "root";
$password   = "";
// Hieronder staat hoe er met behulp van een try/catch gepoogd wordt om 'iets' (wat er tussen de accolades staat) uit te voeren.
try {
   // Hieronder staat hoe er geprobeerd wordt om te verbinden met de database
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // Hieronder wordt ingesteld wat er moet gebeuren als er een error zal optreden
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // Hieronder zie je een echo die alleen wordt uitgevoerd als het resultaat van de connectie geen error gaat opleveren.
   echo "Connected successfully";
}
// Hieronder staat de catch, die alleen wordt uitgevoerd indien er iets mis gaat bij de try.
// Er wordt een $e meegestuurd waarin de PDOException staat (de errormelding)
catch(PDOException $e)
{
   // Hieronder staat dat de poging tot verbinden mislukt is en ook de errormelding.
   echo "Connection failed: " . $e->getMessage();
}
?>