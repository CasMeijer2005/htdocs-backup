<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS only -->

<link href="https://elo.glu.nl/%3Ca%20href%3D"https://cdn.jsdelivr.net/npm/bootstrap">https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Opdracht 2a</title>

</head>

<body>

<!-- stap 1 check button roept create_db.php aan -->

<!-- stap 2, weghalen directory directive -->

<!-- stap 3, uitvoeren sql tekst string als sql -->

<!-- stap 4, weghalen commentaar en uitvoeren van button -->

<form action="https://elo.glu.nl/create_db.php">

<!-- <label for="fname">Database name:</label><br>

<input type="text" id="fname" name="fname" value="John"><br> -->

<!-- <input type="submit" value="Submit"> -->

<button type="submit" class="btn btn-primary btn-lg px-4 gap-3">Maak database</button>

</form>

<p>Als je klikt maakt je een tabel myDB aan.</p>

</body>

</html>

 

create_db.php:

<?php

$servername = "localhost";

$username = "<zelf_invullen>";

$password = "<zelf_invullen>";

// Create connection

$conn = new mysqli($servername, $username, $password);

// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

// opdracht 2 stap 2

// Create database

$sql = "CREATE DATABASE myDB";

// echo $sql;

// if ($conn->query($sql) === TRUE) {

// echo "Database created successfully";

// } else {

// echo "Error creating database: " . $conn->error;

// }

// $sql_table = "CREATE TABLE ";s

$conn->close();

?>