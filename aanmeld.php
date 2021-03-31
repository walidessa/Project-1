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
    <title>Basketball</title>

</head>
<body>

    <!-- Dit is collapse -->
    <!-- <i class="bi bi-shop" style="font-size: 2rem; color: cornflowerblue;"></i> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 pl-0 w-100">
            <a class="navbar-brand" href="#"></a>
            <img src="./img/basketball_GIF.gif" width="30" height="30" alt="" loading="lazy">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://www.project-q-m.com/#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.mboutrecht.nl/opleidingen/">Opleidingen</a>
                    </li>

                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="http://www.project-q-m.com/aanmeld.php">Registreer</a>
                      </li>
                        <li class="nav-item">
                          <a class="nav-link" href="http://www.project-q-m.com/aanmeld.php">Inloggen</a>
                        </li>
                      </ul>
                  </div>
              </nav> 

    </div>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h2 class="display-4">Welkom bij basketbal aanmeld page</h2>
                        <p class="lead">Vul uw gegevens in!</p>
                    </div>
                </div>
            </div>
        </div>

        <form class="dropdown-menu p-4">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password</label>
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


    <div class="form-row">
        <div class="col">
        <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">email</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">password</label>
        <input type="password" class="form-control" id="inputPassword4">
        </div>
    </div>

    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class="mr-sm-3 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-5" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">Man</option>
                <option value="2">Woman</option>
                <option value="3">Other</option>
            </select>
        </div>
    </div>

    <input type="date" id="brith" name="date_of_birth">

    
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">city</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">state</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>


        <div class="row">
        </div class="col-6">
            <form action="./creat.php" method="post">
                <div class="form-group">
                    <label for="BSN">burgerservicenummer</label>
                    <input type="text" class="form-control" id="BSN"
                        aria-describedby="burgerservicenummerlHelp" placeholder="Invoer burgerservicenummer"
                        name="BSN">
                </div>


                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="e-mail" aria-describedby="emailHelp"
                        placeholder="Invoer email" name="email">

                    <div class="row">
                    </div class="col-6">

                    <div class="form-group">
                        <label for="phonenumber">phone-number</label>
                        <input type="text" class="form-control" id="phonenumber" aria-describedby="phonenumberHelp"
                            placeholder="Invoer phonenumber" name="phonenumber">
                    </div>

                    <div class="row">
                    </div class="col-6">
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="firstlHelp"
                            placeholder="Invoer voornaam" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="infix">infix</label>
                        <input type="text" class="form-control" id="infix" aria-describedby="infixlHelp"
                            placeholder="Invoer tussenvoegsel" name="infix">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                            placeholder="Invoer achternaam" name="lastname">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="password"
                            placeholder="Invoer password" name="password">
                    </div>

                    <div class="form-group my-1">
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="gender" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>

                    <input type="date" id="brith" name="date_of_birth">

                    

                    <!-- <div class="row">
                        </div class="col-12">
                    </div>
                    </div> -->
                    <p>Wij zulluen uw gegevens nooit delen met derde!</p>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I agree with the condition</label><br>
                    <button type="submit" class="btn btn-dark">Versturen</button> 

            </form>
        </div>
        </div class="col-6">
        </div>
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