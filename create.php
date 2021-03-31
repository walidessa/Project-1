<?php
    include("./connect_db.php");

    include("./functions.php");

    $BSN = sanitize($_POST["BSN"]);
    $Email = sanitize($_POST["Email"]);
    $Telefoonnummer = sanitize($_POST["Telefoonnummer"]);
    $Voornaam = sanitize($_POST["Voornaam"]);
    $Tussenvoegsel = sanitize($_POST["Tussenvoegsel"]);
    $Achternaam = sanitize($_POST["Achternaam"]);
    $Wactwoord = sanitize($_POST["Wachtwoord"]);
    $Geslacht = sanitize($_POST["Geslacht"]);
    $Geboortedatum = sanitize($_POST["Geboortedatum"]);



    // Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel users

    $sql = "INSERT INTO `project` (`id`, `BSN`, `Email`, `Telefoonnummer`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Wachtwoord`,`Geslacht`, `Geboortedatum`) 
    VALUES (NULL, '$BSN', '$Email', '$Telefoonnummer', '$Voornaam', '$Tussenvoegsel', '$Achternaam', '$Wachtwoord', '$Geslacht', '$Geboortedatum');";

    //Dit is de functie die de query $sql via de verbinding $conn naar de datebase stuurt.
    mysqli_query($conn, $sql);

    header("Location: ./read.php");

?>

