<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM `project`";

//Dit is de functie die de query $sql via de verbinding $conn naar de datebase stuurt.
$result = mysqli_query($conn, $sql);

$records = "";
// De while loop geeft alle gegevens weer uit de tapel users.
while ($record = mysqli_fetch_assoc($result)) {
  // var_dump($record);
  $records .= "<tr>
                <th scope='row'>" . $record["id"] . "</th>
                <td>" . $record["BSN"] . "</td>
                <td>" . $record["Email"] . "</td>
                <td>" . $record["Telefoonnummer"] . "</td>
                <td>" . $record["Voornaam"] . "</td>
                <td>" . $record["Tussenvoegsel"] . "</td>
                <td>" . $record["Achternaam"] . "</td>
                <td>" . $record["Wachtwoord"] . "</td>
                <td>" . $record["Geslacht"] . "</td>
                <td>" . $record["Geboortedatum"] . "</td>
                <td>
                  <a href='./update.php?id=" . $record["id"] . "'>
                    <img src='./img/icons/b_edit.png' alt='pencil'>
                  </a>
                </td>
                <td>
                  <a href='./delete.php?id=" . $record["id"] . "'>
                    <img src='./img/icons/b_drop.png' alt='cross'>
                  </a>
                </td>
              </tr>";
}

?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">

<!--Favicon-->
    <link rel="shortcut icon" href="./img/basketball_GIF.gif" type="image/x-icon">

<title>De basketbal opleiding - De opleiding waar jij jezelf kan zijn!</title>   
</head>
</body>
</div>

<!--Begin of the navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 pl-0 w-100 sticky-top">
            <a class="navbar-brand" href="#"></a>
            <img src="./img/basketball_GIF.gif" width="35" height="35" alt="" loading="lazy">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.mboutrecht.nl/opleidingen/">Opleidingen</a>
                    </li>

                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="./aanmeld.php">Inschrijven</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./Inlog.php">Inloggen</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./contact.php">Contact</a>
                      </li>
                      </ul>
                  </div>
              </nav> 

<!--End of the navbar-->

<main class="container">
  <div class="row">
    <div class="col-12">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h2 class="display-4">Bedankt voor de aanmelden</h2>
          <p class="lead">Wij nemen zo snel mogelijk contact met u op!</p>
        </div>
      </div>
    </div>
  <div class="container">
   <div class="row">
     </div class="col-12">
      <a href="aanmeld.php" type="button" class="btn btn-dark btn-lg btn-block">Nieuw record</a>
     </div>
   </div>
  <div class="row">
  </div class="col-12">
  <!-- op deze plek komt de tapel -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Burgerservicenummer</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefoonnummer</th>
        <th scope="col">Voornaam</th>
        <th scope="col">Tussenvoegsel</th>
        <th scope="col">Achternaam</th>
        <th scope="col">Wachtwoord</th>
        <th scope="col">Geslacht</th>
        <th scope="col">Geboortedatum</th>
        

        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo $records;
      ?>
    </tbody>
  </table>


  </div>
  </div>
  </div>
</main>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js…