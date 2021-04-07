<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/icon dark.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!--Favicon-->
    <link rel="shortcut icon" href="./img/basketball_GIF.gif" type="image/x-icon">

    <title>De basketbal opleiding - De opleiding waar jij jezelf kan zijn!</title>

</head>
<body>

    <!-- Dit is collapse -->
    <!-- <i class="bi bi-shop" style="font-size: 2rem; color: cornflowerblue;"></i> -->

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


<!--Begin of the jumbotron -->
    </div>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h2 class="display-4">Welkom bij de inschrijfpagina voor de opleiding</h2>
                        <p class="lead">Vul je gegevens in!</p>
                    </div>
                </div>
            </div>
        </div>

<!-- End of the Jumbotron -->


<!-- Begin of the form -->
    <form class="dropdown-menu p-4">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">E-mail</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Wachtwoord</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<form>
    
    <div class="form-group">
        <label for="inputAddress">Adres:</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Stad:</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Bijv. Utrecht">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">Provincie:</label>
        <select id="inputState" class="form-control">
            <option selected>Kies een provincie...</option>
            <option>Groningen</option>
            <option>Friesland (Fryslân)</option>
            <option>Drenthe</option>
            <option>Overijssel</option>
            <option>Flevoland</option>
            <option>Gelderland</option>
            <option>Utrecht</option>
            <option>Noord-Holland</option>
            <option>Zuid-Holland</option>
            <option>Zeeland</option>
            <option>Noord-Brabant</option>
            <option>Limburg</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Postcode:</label>
        <input type="text" class="form-control" id="inputZip" placeholder="1234 AB">
        </div>
    </div>
</form>
<!-- End of the form -->


<!-- Begin of the form -->
        <div class="row">
        </div class="col-6">
            <form action="./creat.php" method="post">
                <div class="form-group">
                    <label for="BSN">Burgerservicenummer:</label>
                    <input type="text" class="form-control" id="BSN"
                        aria-describedby="burgerservicenummerlHelp" placeholder="Burgerservicenummer"
                        name="BSN">
                </div>

                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="e-mail" aria-describedby="emailHelp"
                        placeholder="E-mailadres" name="email">

                    <div class="row">
                    </div class="col-6">

                    <div class="form-group">
                        <label for="phonenumber">Telefoonnummer:</label>
                        <input type="text" class="form-control" id="phonenumber" aria-describedby="phonenumberHelp"
                            placeholder="+31 6 1234567" name="phonenumber">
                    </div>

                    <div class="row">
                    </div class="col-6">
                    <div class="form-group">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstlHelp"
                            placeholder="Jan" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="infix">Tussenvoegsel:</label>
                        <input type="text" class="form-control" id="infix" aria-describedby="infixlHelp"
                            placeholder="van" name="infix">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Achternaam:</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                            placeholder="Zuijlen" name="lastname">

                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord:</label>
                        <input type="password" class="form-control" id="password" aria-describedby="password"
                            placeholder="Voer een sterk wachtwoord in" name="password">
                    </div>

                    <div class="form-group my-1">
                        <input type="radio" id="gender" name="gender" value="Man">
                        <label for="male">Man</label><br>
                        <input type="radio" id="gender" name="gender" value="Vrouw">
                        <label for="female">Vrouw</label><br>
                        <input type="radio" id="gender" name="gender" value="Anders">
                        <label for="other">Anders</label>
                    </div>

                    <input type="date" id="brith" name="date_of_birth">

                    <!-- <div class="row">
                        </div class="col-12">
                    </div>
                    </div> -->
                    <p>Wij zullen uw gegevens nooit delen met derde!</p>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Ik ga akkoord met de voorwaarden</label><br>
                    <button type="submit" class="btn btn-outline-dark">Versturen</button> 

            </form>


        </div>
        </div class="col-6">
        </div>

    <!-- End of the form -->

    <!--Begin of the footer-->

<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #656565;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">De opleiding waar jij jezelf kan zijn!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter white-text mr-4"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g white-text mr-4"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in white-text mr-4"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram white-text"> </i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">BASKETBALL ACADEMY</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Onze school</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="./page.html">Informatie studenten</a>
      </p>
      <p>
        <a href="./aanmeld.php">Inschrijven voor de opleiding</a>
      </p>
      <p>
        <a href="#!">Speel de Game</a>
      </p>
      <p>
        <a href="https://www.mboutrecht.nl/opendag/">Open dagen</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Studenten</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Inloggen Office 365</a>
      </p>
      <p>
        <a href="#!">Rooster</a>
      </p>
      <p>
        <a href="#!">Nieuwsbrief</a>
      </p>
      <p>
        <a href="#!">Vakantierooster</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Praktisch</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Ziekmelden</a>
      </p>
      <p>
        <a href="#!">Schoolkosten en DUO</a>
      </p>
      <p>
        <a href="#!">Locaties</a>
      </p>
      <p>
        <a href="#!">Informatie voor ouders</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contactgevens</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i>Nieuw Houtenseweg 120, 3672 GB, Utrecht</p>
      <p>
        <i class="fas fa-envelope mr-3"></i>info@basketbalacademy.nl</p>
      <p>
        <i class="fas fa-phone mr-3"></i>030-28893748</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© Copyright 2021 BASKETBALL ACADEMY - De school waar jij kan ontplooien - Powered by SD1A2 - Lightspeed design by SD1A2
  <a href="https://Basketbalopleiding.nl"> Basketbalopleiding.nl</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<!--End of the footer-->


    </main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script scr="./js/app.js"></script>

</body>
</html>