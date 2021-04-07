<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="./css/style.css"></script>

<!--Favicon-->
<link rel="shortcut icon" href="./img/basketball_GIF.gif" type="image/x-icon">

<title>De basketbal opleiding - De opleiding waar jij jezelf kan zijn!</title>

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


<!-- Begin of the contact page -->
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Neem contact op</h2>
				<h4>Heb jij een klacht of een vraag? Laat het dan hier weten</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Voornaam:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Voer je Voornaam in" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Achternaam:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Voer je Achternaam in" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">E-mail:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Voer je E-mailadres in" name="email">
				  </div>
				</div>
				<div class="form-group">
                <label class="control-label col-sm-2" for="comment"></label>
                <select id="inputcomment" class="form-control">
                <option selected>Kies een optie...</option>
                <option>Klacht</option>
                <option>Vraag</option>
                <option>Opmerking</option>
                <option>Iets anders</option>
				  <div class="col-sm-10 ">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-outline-dark btn-lg">Verzend</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End of the contact page -->


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
          <a href="https://start.mboutrecht.nl/">Inloggen Office 365</a>
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
<!--End of the footer-->