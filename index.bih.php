<!DOCTYPE html>
<html>
<head>

	<!-- [Meta tags] -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="img/logo.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	

	<title>Hi, I'm Fata.</title>

</head>
<body>

	<?php 

				$servername="localhost";
				$user="root";
				$password="";
				$db_name="personalwebsite";

				$conn = mysqli_connect($servername, $user, $password, $db_name);

	?>			

<!-- [Navbar] -->

	<nav class="navbar navbar-expand-lg sticky-top bg-linear">
		<div class="container px-0">
			  <a class="navbar-brand" href="index.bih.php">
		    	<img src="img/logo.png" height="30" alt="" class="d-inline-block align-top"> <span class="font-weight-500 text-white">fs</span>
		  	</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon d-flex justify-content-center align-items-center px-0 mx-0"><img src="img/icons/toggler.png"></span>
			  </button>
			  <div class="collapse navbar-collapse m-auto" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 active px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#home">Početna</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#services">Usluge</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#about">O meni</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#projects">Projekti</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#contact">Kontakt</a>
			      </li>
			      <li class="nav-item my-lg-0 my-xl-0 my-md-0 my-md-2 my-sm-2 my-2 px-1 d-flex align-items-center justify-content-center">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center py-0" href="index.php"><img src="img/icons/uk.png"></a>
			      </li>
			    </ul>
			  </div>
		</div>
	</nav>

<!-- Back to top button -->

	<a class="btn bg-linear rounded-pill text-white" href="#home" id="back-to-top-btn"><img src="img/icons/arrow-up.png" class="img-fluid"></a>	

<!-- Hi Container -->

<section class="bg-linear pt-xl-5 pb-xl-0 pt-lg-5 pb-lg-0 pt-md-5 pb-md-0 py-sm-5 py-4 px-0" id="home">
	<div class="container pt-xl-5 pb-xl-0 pt-lg-5 pb-lg-0 pt-md-5 pb-md-0 py-sm-4 py-3">
		<div class="row py-xl-0 py-lg-0 py-md-0 py-sm-3 py-3">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-xl-end align-items-lg-end align-items-md-center justify-content-md-center justify-content-sm-center justify-content-center mb-0">
					<img src="img/fata.png" class="img-fluid mb-xl-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
			</div>
			<div class="col-xl-6 mx-0 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
				<div class="text-xl-left text-lg-left text-md-left text-sm-center text-center">
					<h1 class="font-weight-100 text-white">Zdravo, ja sam <br class="d-xl-blocl d-lg-block d-md-block d-sm-none d-block"><span class="text-uppercase font-weight-bold">Fata Sefer</span><br>Web Developer</h1>
					<a href="#contact" class="btn text-outer-space font-size-14 text-uppercase font-weight-600 px-5 py-2">Kontaktiraj me</a>
				</div>
			</div>
		<div>
	</div>
</section>

<!-- [End of Hi Container] -->

<!-- [Services Container] -->

<section id="services">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Odvojite trenutak da pogledate čime se bavim.</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Pisanjem odgovarajućeg koda možete napraviti šta god želite.</h6>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<img src="img/icons/monitor.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Web Design</h5>
				<p class="mt-4 font-weight-300 text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<img src="img/icons/programming.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Front-end development</h5>
				<p class="mt-4 font-weight-300 text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-xl-6 col-lg-6 col-md-6">
				<img src="img/icons/backend.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Back-end development</h5>
				<p class="mt-4 font-weight-300 text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<img src="img/icons/computer.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Database Management</h5>
				<p class="mt-4 font-weight-300 text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
	</div>
</section>

<!-- [End of Services Container] -->

<!-- [About Me Container] -->

<section class="bg-grey" id="about">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Informacije o meni</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Sreća je raditi ono što voliš!</h6>
		</div>
		<div class="row mb-5">
			<div class="col-xl-6 col-lg-6 col-md-12">
				<p class="font-weight-300 text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<h5 class="font-weight-600 skills-title mt-4 mb-5">My Skills</h5>
				<div class="progress-div">
					<p class="mb-2 text-right text-grey font-weight-400">HTML 80%</p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-right text-grey font-weight-400">CSS 75%</p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 75%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-right text-grey font-weight-400">Bootstrap 85%</p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 85%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-right text-grey font-weight-400">PHP 65%</p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 65%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-right text-grey font-weight-400">MySql 65%</p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 65%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center align-items-center">
				<div class="card mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 border-0">
				  <img src="img/card-img-1.jpeg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body border-0 rounded-0">
				  	<h5 class="card-title font-weight-600 text-center my-0">Fata Sefer</h5>
				    <p class="card-text text-center text-grey font-weight-300">Web Developer</p>
				    <div class="text-center">
				    	<img src="img/icons/telephone.png" class="card-icon d-inline">&nbsp;<p class="d-inline text-grey font-weight-300">(+387) 62 808 723</p>
				    </div>
				    <div class="text-center mt-3">
				    	<img src="img/icons/mail.png" class="card-icon d-inline">&nbsp;<p class="d-inline text-grey font-weight-300">sefer.fata@gmail.com</p>
				    </div>
				    <div class="text-center">
				    	<a href="#contact" class="mt-4 mb-2 btn font-size-14 text-uppercase font-weight-400 px-5 py-2 bg-linear rounded-pill hire-me-btn">Zaposli me</a>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- [End of About Me Container] -->

<!-- [Projects Container] -->

<section id="projects">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Moji posljednji projekti</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Vježbom do savršenstva!</h6>
		</div>
		<div class="row mb-5 pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="img/projects/hotel.png" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<h5 class="project-title font-weight-600">Web stranica hotela</h5>
				<p class="text-grey font-weight-300 mt-3">Jedna od najvažnijih stvari za bilo koji biznis koji je još na svom početku i u potrazi za zelenijim pašnjacima je zasigurno dobar web dizajn. To može biti ono nešto što vas podiže iznad ili vuče ispod konkurencije.</p>
			</div>
		</div>
		<div class="row mb-5  pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="img/projects/foodblog.png" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<h5 class="project-title font-weight-600">Blog hrane</h5>
				<p class="text-grey font-weight-300 mt-3">Kažu da dobra hrana popravlja raspoloženje, a sad svoje recepte možete podijeliti sa svima - jer sve počinje sa dizajnom i prezentacijom tekstualnog i vizuelnog sadržaja.</p>
			</div>
		</div>
		<div class="row my-5 pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="img/projects/online gradebook.png" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<h5 class="project-title font-weight-600">Online školski dnevnik</h5>
				<p class="text-grey font-weight-300 mt-3">Elektronski dnevnik  predstavlja evidenciju o učenicima, njihovom napretku i ocjenama, ali i dokumentaciju o odsustvu i druge podatke. Ovakav informacioni sistem čini bitne informacije lako dostupnim kako roditeljima i učenicima, tako i nastavnicima i ostalima koji imaju potrebu za time. Ovaj projekat je još u fazi izrade..</p>
			</div>
		</div>
	</div>
</section>

<!-- [End of Projects Container] -->

<!-- [Contact Info Container] -->

<section class="bg-grey pb-5" id="contact">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Ako imate bilo kakvo pitanje, ispunite sljedeću formu.</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Bit će mi drago da Vam pomognem.</h6>
		</div>
		<form method="post">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 form-group d-flex flex-column justify-content-between">
				  <input type="text" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" placeholder="Ime" required="" name="visitorName">
				  <input type="email" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" id="inputEmail4" placeholder="Email adresa" required="" name="visitorEmail">
				  <input type="text" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" placeholder="Naslov*" name="messageSubject">
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 form-group d-flex d-md-block mt-xl-0 mt-lg-0 mt-md-3 mt-sm-4 mt-4">
					<textarea class="form-control rounded-0" style="resize: none;" rows="9" id="exampleFormControlTextarea1" placeholder="Poruka" required="" name="messageContent"></textarea>
				</div>
				<div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
					<button class="btn bg-linear text-uppercase text-white rounded-pill py-2 px-3 font-size-14 font-weight-500 d-flex align-items-center" type="submit" name="sendMessage">Pošalji poruku<span><img src="img/icons/arrow.png" class="img-fluid"></span></button>
				</div>
			</div>
		</form>		
		<?php 

		if (isset($_POST['sendMessage'])) {
			$visitorName=$_POST['visitorName'];
			$visitorEmail=$_POST['visitorEmail'];
			$messageSubject=$_POST['messageSubject'];
			$messageContent=$_POST['messageContent'];

			$messageSent=mysqli_query($conn, "INSERT INTO visitormessages (VisitorName,VisitorEmailAddress,MessageSubject,messageContent) values ('$visitorName','$visitorEmail','$messageSubject','$messageContent')");

			if ($messageSent) {
			?>
				<div class="alert alert-dismissible fade show font-size-14 font-weight-400 mt-3 bg-linear text-outer-space rounded-0 border-0" role="alert">
					 Vaša poruka je poslana.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true"><i class="fas fa-times text-outer-space"></i></span>
						</button>
				</div>
			<?php
			}
			else {
			?>
				<div class="alert alert-danger fade show font-size-14 font-weight-400 mt-3 text-outer-space rounded-0 border-0" role="alert">
					 Došlo je do greške. Molim, pokušajte kasnije.
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true">&times;</span>
						</button>
				</div>
			<?php
			}
		}

		?>
	</div>
</section>

<!-- [End of Contact Info Container] -->

<!-- [Footer] -->

<footer class="bg-outer-space py-5" id="footer">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
				<h5 class="text-white font-weight-600">O stranici</h5>
				<p class="text-grey font-weight-300 mt-4">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Fata Sefer | Sva prava pridržana</p>
				<p class="text-grey font-weight-300">Autori ikonica <a href="https://www.flaticon.com/authors/freepik" title="Freepik" target="_blank">Freepik</a>, <a href="https://www.flaticon.com/authors/flat-icons" title="Flat Icons" target="_blank">Flat Icons</a>, <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp" target="_blank">Eucalyp</a> i <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons" target="_blank">Smashicons</a> sa <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
			</div>
			<div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-1 col-md-6 col-sm-6 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
				<h5 class="text-white font-weight-600">Zahtjev za kontakt</h5>
				<p class="text-grey font-weight-300 mt-4">Ostavite svoju email adresu i ja ću Vas kontaktirati.</p>
				<form method="post">
					<div class="input-group mt-2">
					  <input type="email" name="VisitorEmail" class="form-control w-75 rounded-0" required="" placeholder="Vaš email" aria-describedby="basic-addon2">
					  <div class="input-group-append">
					    <button class="btn rounded-0 bg-linear px-3" name="ContactRequestSubmitted" type="submit"><i class="fas fa-arrow-right text-white fa-lg"></i></button>
					  </div>
					</div>
				</form>
				<?php 

				if (isset($_POST['ContactRequestSubmitted'])) {
					$visitorEmail=$_POST['VisitorEmail'];

					$visitorEmailSubmitted=mysqli_query($conn, "insert into contactmerequest (VisitorEmailAddress) values ('$visitorEmail')");

					if ($visitorEmailSubmitted) {
						?>
						<div class="alert alert-dismissible fade show font-size-14 font-weight-400 mt-3 bg-linear text-outer-space rounded-0 border-0" role="alert">
						  Vaš email je sačuvan. Uskoro ću Vas kontaktirati.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true"><i class="fas fa-times text-outer-space"></i></span>
						  </button>
						</div>
						<?php
					}
					else {
						?>
						<div class="alert alert-danger fade show font-size-14 font-weight-400 mt-3 text-outer-space rounded-0 border-0" role="alert">
						  Došlo je do greške. Molim, pokušajte kasnije.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<?php
					}
				}				

				?>
			</div>
			<div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-1 col-md-6  mt-xl-0 mt-lg-0 mt-md-4 mt-sm-4 mt-5 col-sm-6">
				<h5 class="text-white font-weight-600">Pratite moj rad</h5>
				<p class="font-weight-300 text-grey mt-4"><span><a href="https://bitbucket.org/product/" title="Bitbucket" target="_blank"><i class="fab fa-bitbucket text-bitbucket fa-lg mr-2"></i></a></span>f_sefer</p>
				<p class="font-weight-300 text-grey mt-3"><span><a href="https://bitbucket.org/product/" title="Github" target="_blank"><i class="fab fa-github text-white fa-lg mr-2"></i></a></span>fs98</p>
				<p class="font-weight-300 text-grey mt-3"><span><a href="https://www.facebook.com/fata.sefer" title="Facebook" target="_blank"><i class="fab fa-facebook text-facebook fa-lg mr-2"></i></a></span>Fata Sefer</p>
			</div>
		</div>
	</div>
</footer>

<!-- [End of Footer] -->

<!-- [Scripts]	-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script type="text/javascript">
//Get the button
var mybutton = document.getElementById("back-to-top-btn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scroll()};

function scroll() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
</script>

<!-- [End of Scripts] -->
</body>
</html>