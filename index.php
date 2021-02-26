<!DOCTYPE html>
<html>
<head>

	<!-- [Meta tags] -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="assets/img/logo.png"/>
	<link rel="stylesheet" href="css/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.css">

	<title>Hi, I'm Fata Sefer.</title>
</head>
<body>

<!-- [Navbar] -->

<?php

	$servername="localhost";
	$user="root";
	$password="";
	$db_name="portfolio";

	$conn = mysqli_connect($servername, $user, $password, $db_name);

?>

	<nav class="navbar navbar-expand-lg sticky-top bg-linear">
		<div class="container px-0">
			  <a class="navbar-brand" href="index.php">
		    	<img src="assets/img/logo.png" height="30" alt="" class="d-inline-block align-top"> <span class="font-weight-500 text-white">fs</span>
		  	</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon d-flex justify-content-center align-items-center px-0 mx-0"><img src="assets/img/icons/toggler.png"></span>
			  </button>
			  <div class="collapse navbar-collapse m-auto" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 active px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#home">Home</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#services">Service</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#about">About</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#projects">Projects</a>
			      </li>
			      <li class="nav-item mr-xl-0 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#contact">Contact</a>
			      </li>
<!-- 			      <li class="nav-item my-lg-0 my-xl-0 my-md-0 my-md-2 my-sm-2 my-2 px-1 d-flex align-items-center justify-content-center">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center py-0" href="index.bih.php"><img src="assets/img/icons/bih.png"></a>
			      </li> -->
			    </ul>
			  </div>
		</div>
	</nav>	

<!-- Back to top button -->

	<a class="btn bg-linear rounded-pill text-white" href="#home" id="back-to-top-btn"><img src="assets/img/icons/arrow-up.png" class="img-fluid"></a>

<!-- Hi Container -->

<section class="bg-linear pt-xl-5 pb-xl-0 pt-lg-5 pb-lg-0 pt-md-5 pb-md-0 py-sm-5 py-4 px-0" id="home">
	<div class="container pt-xl-5 pb-xl-0 pt-lg-5 pb-lg-0 pt-md-5 pb-md-0 py-sm-4 py-3">
		<div class="row py-xl-0 py-lg-0 py-md-0 py-sm-3 py-3">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-xl-end align-items-lg-end align-items-md-center justify-content-md-center justify-content-sm-center justify-content-center mb-0">
					<img src="assets/img/fata.png" class="img-fluid mb-xl-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
			</div>
			<div class="col-xl-6 mx-0 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
				<div class="text-xl-left text-lg-left text-md-left text-sm-center text-center">
					<h1 class="font-weight-100 text-white">Hi, I'm <br class="d-xl-blocl d-lg-block d-md-block d-sm-none d-block"><span class="text-uppercase font-weight-bold">Fata Sefer</span><br>Web Developer</h1>
					<a href="assets/CV/Fata Sefer - CV.pdf" download="Fata Sefer - CV.pdf" class="btn text-medium-turquoise text-uppercase font-size-14 font-weight-600 px-5 py-2 text-uppercase">Download CV</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- [End of Hi Container] -->

<!-- [Services Container] -->

<section id="services">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Take a Look at my Services</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">I can use code to build whatever I want!</h6>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<img src="assets/img/icons/responsive.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Resposive Web Design</h5>
				<p class="mt-4 font-weight-300 text-grey">Worldwide, over 50% of all internet activities are performed on mobile devices. With so many people surfing the Internet through their phones, it is essential to offer them a great experience. Without responsive websites, you can’t satisfy most internet users and as a result you are likely to miss traffic and potential customers.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 mt-xl-0 mx-lg-0 mt-md-0 mt-sm-4 mt-4 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<img src="assets/img/icons/coding.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Front-end development</h5>
				<p class="mt-4 font-weight-300 text-grey">Website design is important but not just for aesthetic reasons. It doesn't matter how good it looks or how effective it can be if it's hard to use. With a lot of competition on the internet, users simply do not have the patience to cope with complicated pages. </p>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-xl-6 col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<img src="assets/img/icons/backend.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Back-end development</h5>
				<p class="mt-4 font-weight-300 text-grey">
Behind the scene: backend is part of a website that is not visible to site visitors. It is responsible for data managment and ensuring that everything on the user side works.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 mt-xl-0 mx-lg-0 mt-md-0 mt-sm-4 mt-4 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<img src="assets/img/icons/setting.png" class="img-fluid icon">
				<h5 class="mt-4 service-title font-weight-600">Database Management</h5>
				<p class="mt-4 font-weight-300 text-grey">Database Management allows organizing, storing and retrieving data.</p>
			</div>
		</div>
	</div>
</section>

<!-- [End of Services Container] -->

<!-- [About Me Container] -->

<section class="bg-grey" id="about">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Here's a little something about me</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1 mx-3">Doing what you love is where happiness lives!</h6>
		</div>
		<div class="row mb-5">
			<div class="col-xl-6 col-lg-6 col-md-12">
				<p class="font-weight-300 text-grey">I am 22 years old and currently student of a fourth year of Software Engineering at International University of Travnik.</p>
				<h5 class="font-weight-600 skills-title mt-4 mb-5">My Skills</h5>
				<div class="progress-div">
					<p class="mb-2 text-grey font-weight-400">HTML<span class="float-right">Very good</span></p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-grey font-weight-400">CSS<span class="float-right">Very good</span></p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 75%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-grey font-weight-400">Bootstrap<span class="float-right">Excellent</span></p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 85%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-grey font-weight-400">PHP<span class="float-right">Good</span></p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 70%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-div">
					<p class="mb-2 text-grey font-weight-400">MySql<span class="float-right">Good</span></p>
					<div class="progress bg-white rounded-pill">
					  <div class="progress-bar bg-linear rounded-pill" style="width: 65%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center align-items-center">
				<div class="card mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 border-0">
				  <img src="assets/img/card-img-1.jpeg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body border-0 rounded-0">
				  	<h5 class="card-title font-weight-600 text-center my-0">Fata Sefer</h5>
				    <p class="card-text text-center text-grey font-weight-300">Web Developer</p>
				    <div class="text-center">
				    	<img src="assets/img/icons/telephone.png" class="card-icon d-inline">&nbsp;<p class="d-inline text-grey font-weight-300">(+387) 62 808 723</p>
				    </div>
				    <div class="text-center mt-3">
				    	<img src="assets/img/icons/mail.png" class="card-icon d-inline">&nbsp;<p class="d-inline text-grey font-weight-300">sefer.fata@gmail.com</p>
				    </div>
				    <div class="text-center">
				    	<a href="#contact" class="mt-4 mb-2 btn font-size-14 text-uppercase font-weight-400 px-5 py-2 bg-linear rounded-pill hire-me-btn">Hire me</a>
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
			<h1 class="text-center w-100 font-weight-600">My Latest Projects</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Practice makes perfect!</h6>
		</div>
		<div class="row mb-5 pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="assets/img/projects/hotel.png" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<a class="project-title h5 font-weight-600 text-dark text-decoration-none" href="projects/hotel-website">Hotel Website</a>
				<p class="text-grey font-weight-300 mt-3">One of the most important things for any business that is still in its infancy and looking for greener pastures is good web design. Web design can be that one thing that pushes you above or pulls you below the competition.</p>
			</div>
		</div>
		<div class="row mb-5  pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="assets/img/projects/foodblog-3.png" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<a class="project-title h5 font-weight-600 text-dark text-decoration-none" href="projects/foodblog">Foodblog</a>
				<p class="text-grey font-weight-300 mt-3">Good food equals good mood. And now you can share with anyone you want - because it all starts with the design and presentation of text and visual content</p>
			</div>
		</div>
		<div class="row mb-5  pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="assets/img/projects/webshop.jpg" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<a class="project-title h5 font-weight-600 text-dark text-decoration-none" href="projects/web-shop">Web Shop</a>
				<p class="text-grey font-weight-300 mt-3">Creating a webshop is becoming increasingly popular for many businesses. An online store or e-commerce store allows you to sell your products online to a global customer base.</p>
			</div>
		</div>
		<div class="row my-5 pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="assets/img/projects/online-gradebook.jpg" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<a class="project-title h5 font-weight-600 text-dark text-decoration-none" href="projects/e-gradebook">Online gradebook</a>
				<p class="text-grey font-weight-300 mt-3">This is an information system that provides records of students, their progress and grades, as well as absenteeism documentation and other data. Such an information system makes essential information easily accessible to parents and students, as well as teachers and others who need it.</p>
			</div>
		</div>
		<div class="row my-5 pt-5">
			<div class="col-xl-6 col-lg-6">
				<img src="assets/img/projects/akademski-registar.jpg" class="img-fluid">
			</div>
			<div class="col-xl-6 col-lg-6 mt-5">
				<a class="project-title h5 font-weight-600 text-dark text-decoration-none" href="projects/academic-register">The register of academic institutions</a>
				<p class="text-grey font-weight-300 mt-3">This is a website where information is available on all registered universities and colleges in the state.</p>
			</div>
		</div>
	</div>
</section>

<!-- [End of Projects Container] -->

<!-- [Contact Info Container] -->

<section class="bg-grey pb-5" id="contact">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">If you have any question, fill out the form below.</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">I'll be glad to help.</h6>
		</div>
		<form method="post">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 form-group d-flex flex-column justify-content-between">
				  <input type="text" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" placeholder="Name" required="" name="visitorName" maxlength="50">
				  <input type="email" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" id="inputEmail4" placeholder="Email address" required="" name="visitorEmail" maxlength="50">
				  <input type="text" class="form-control rounded-0 pl-3 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3" placeholder="Subject (optional)" name="messageSubject" maxlength="30">
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 form-group d-flex d-md-block mt-xl-0 mt-lg-0 mt-md-3 mt-sm-4 mt-4">
					<textarea class="form-control rounded-0" style="resize: none;" rows="9" id="exampleFormControlTextarea1" placeholder="Message" required="" name="messageContent" maxlength="255"></textarea>
				</div>
				<div class="col-xl-6 offset-xl-6 col-lg-6 offset-lg-6">
					<button class="btn bg-linear text-uppercase text-white rounded-pill py-2 px-3 font-size-14 font-weight-500 d-flex align-items-center" name="sendMessage">send message<span><img src="assets/img/icons/arrow.png" class="img-fluid"></span></button>
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

            /* Mail to me */
            $subject_to_me="New question from $visitorName";
            $message_to_me="You have new question from $visitorName.
            
Email: $visitorEmail
Subject: $messageSubject
Message: $messageContent";
            
            /* $headers2 .= 'From: ' . 'Personal Website' . "\r\n"; */
            
            /* Mail to sender */
            
            $message_to_sender="Hello $visitorName,
            
Your message is received. I will get to you as soon as possible. If you do not receive my email in next ten days, please check your spam folder.

This is an automated response, please do not answer this email.

Greetings,

Fata Sefer
+387 62 808 723
Travnik, 72270
https://fata-sefer.000webhostapp.com/";
            $header_to_sender = '';
            $header_to_sender .='From: ' . 'Fata Sefer' . ' ' . 'sefer.fata@gmail.com' . "\r\n";

			if ($messageSent) {
			?>
				<div class="alert alert-dismissible fade show font-size-14 font-weight-400 mt-3 bg-linear text-outer-space rounded-0 border-0" role="alert">
					 Thank you. You will receive a confirmation email soon.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  <span aria-hidden="true"><i class="fas fa-times text-outer-space"></i></span>
						</button>
				</div>
			<?php
			    mail("sefer.fata@gmail.com",$subject_to_me,$message_to_me);
			    mail($visitorEmail,"Your message is received",$message_to_sender,$header_to_sender);
			}
			else {
			?>
				<div class="alert alert-danger fade show font-size-14 font-weight-400 mt-3 text-outer-space rounded-0 border-0" role="alert">
					 Error. Please try later.
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
				<h5 class="text-white font-weight-600">About Website</h5>
				<p class="text-grey font-weight-300 mt-4">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Fata Sefer | All rights reserved</p>
				<p class="text-grey font-weight-300">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik" target="_blank">Freepik</a>, <a href="https://www.flaticon.com/authors/flat-icons" title="Flat Icons" target="_blank">Flat Icons</a>, <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp" target="_blank">Eucalyp</a> and <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons" target="_blank">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
			</div>
			<div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-1 col-md-6 col-sm-6 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
				<h5 class="text-white font-weight-600">Contact Me Request</h5>
				<p class="text-grey font-weight-300 mt-4">Leave your email address here and I will contact you.</p>
				<form method="post">
					<div class="input-group mt-2">
					  <input type="email" name="VisitorEmail" class="form-control w-75 rounded-0" required="" placeholder="Your email" aria-describedby="basic-addon2" maxlength="50">
					  <div class="input-group-append">
					    <button class="btn rounded-0 bg-linear px-3" type="submit" name="ContactRequestSubmitted"><i class="fas fa-arrow-right text-white fa-lg"></i></button>
					  </div>
					</div>
				</form>
				<?php 

				if (isset($_POST['ContactRequestSubmitted'])) {
					$visitorEmail=$_POST['VisitorEmail'];

					$visitorEmailSubmitted=mysqli_query($conn, "insert into contactmerequest (VisitorEmailAddress) values ('$visitorEmail')");
					
					/* Mail to me */
					$mail_to='sefer.fata@gmail.com';
					$subject='New Email request';
					$message="You have new email request from $visitorEmail.";
					/* $headers1 .= 'From: ' . 'Personal Website' . "\r\n"; */
					
					/* Mail to visitor */
					$subject_visitorMail='Your email is received.';
					$message_for_visitor="Hello there,
					
Your email is received. I will get back to you as soon as possible. If you do not receive my email in next ten days, please check your spam folder.

This is an automated response. Please do not answer this email.
					
Greetings,
					
Fata Sefer
+387 62 808 723
Travnik, 72270
https://fata-sefer.000webhostapp.com/";
					$headers = '';
					$headers .= 'From: ' . 'Fata Sefer' . ' ' . 'sefer.fata@gmail.com' . "\r\n";


					if ($visitorEmailSubmitted) {
						?>
						<div class="alert alert-dismissible fade show font-size-14 font-weight-400 mt-3 bg-linear text-outer-space rounded-0 border-0" role="alert">
						  Thank you. You will receive a confirmation email soon.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true"><i class="fas fa-times text-outer-space"></i></span>
						  </button>
						</div>
						<?php
						mail($mail_to,$subject,$message);
						mail($visitorEmail,$subject_visitorMail,$message_for_visitor,$headers);
					}
					else {
						?>
						<div class="alert alert-danger fade show font-size-14 font-weight-400 mt-3 text-outer-space rounded-0 border-0" role="alert">
						  Error. Please try later.
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
				<h5 class="text-white font-weight-600">Follow My Work</h5>
				<p class="font-weight-300 text-grey mt-4"><span><a href="https://bitbucket.org/f_sefer/" title="Bitbucket" target="_blank"><i class="fab fa-bitbucket text-bitbucket fa-lg mr-2"></i></a></span>f_sefer</p>
				<p class="font-weight-300 text-grey mt-3"><span><a href="https://github.com/fs98" title="Github" target="_blank"><i class="fab fa-github text-white fa-lg mr-2"></i></a></span>fs98</p>
				<p class="font-weight-300 text-grey mt-3"><span><a href="https://www.facebook.com/fata.sefer" title="Facebook" target="_blank"><i class="fab fa-facebook text-facebook fa-lg mr-2"></i></a></span>fata.sefer</p>
				<p class="font-weight-300 text-grey mt-3"><span><a href="https://www.linkedin.com/in/fata-sefer" title="linkedin" target="_blank"><i class="fab fa-linkedin text-linkedin fa-lg mr-2"></i></a></span>fata-sefer</p>
			</div>
		</div>
	</div>
</footer>

<!-- [End of Footer] -->

<!-- [Scripts]	-->
<script src="js/vendor/jquery/jquery-3.4.1.slim.min.js"></script>
<script src="js/vendor/bootstrap/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/vendor/jquery/jquery.min.js"></script>



<!-- [Smooth scrolling] -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".navbar a, #back-to-top-btn").on('click', function(event) {

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

<!-- [Scroll to Top Button] -->
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