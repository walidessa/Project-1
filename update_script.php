<?php
// maak contact met de mysqlserver en database
include ("./connect_db.php");

$id = $_POST["id"];
$burgerservicenummer = $_POST["BSN"];
$email = $_POST["e-mail"];
$phonenumber = $_POST["Telefoonnummer"];
$firstname = $_POST["Voornaam"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$date_of_birth = $_POST["date_of_birth"];


$sql = "UPDATE `project` 
        SET `burgerservicenummer` = '$BSN',
        `email` = '$Email', 
        `phonenumber` = '$Telefoonnummer', 
        `firstname` = '$Voornaam', 
        `infix` = '$Tussenvoegsel', 
        `lastname` = '$Achternaam',
        `password` = '$Wachtwoord',
        `gander` = '$Geslacht',
        `date_of_birth` = '$Geboortedatum'
        WHERE `project`.`id` = $id;";

// echo $sql;exit();

mysqli_query($conn, $sql);

header("Location: ./read.php");
?>