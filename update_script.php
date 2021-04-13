<?php
// maak contact met de mysqlserver en database
include ("./connect_db.php");

$id = $_POST["id"];
$burgerservicenummer = $_POST["burgerservicenummer"];
$email = $_POST["email"];
$telefoonnummer = $_POST["telefoonnummer"];
$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$wachtwoord = $_POST["wachtwoord"];
$geslacht = $_POST["geslacht"];
$geboortedatum = $_POST["geboortedatum"];


$sql = "UPDATE `project` 
        SET `burgerservicenummer` = '$burgerservicenummer',
        `email` = '$email', 
        `telefoonnummer` = '$telefoonnummer', 
        `voornaam` = '$voornaam', 
        `tussenvoegsel` = '$tussenvoegsel', 
        `achternaam` = '$achternaam',
        `wachtwoord` = '$wachtwoord',
        `gender` = '$geslacht',
        `geboortedatum` = '$geboortedatum'
        WHERE `project`.`id` = $id;";

// echo $sql;exit();

if ($result) {
        echo "Het reserveren is gelukt! U wordt zo doorverwezen naar de homepagina";
    }   else {
        echo "Oeps! Er is iets misgegaan, probeer het opnieuw";
    }
    
    header("Refresh 4; ./")
    
?>