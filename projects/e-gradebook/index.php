<!DOCTYPE html>
<html>
<head>

	<!-- [Meta tags] -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="../../assets/img/logo.png"/>
	<link rel="stylesheet" href="../../css/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/vendor/fancybox/jquery.fancybox.min.css">

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
			  <a class="navbar-brand" href="../../index.php">
		    	<img src="../../assets/img/logo.png" height="30" alt="" class="d-inline-block align-top"> <span class="font-weight-500 text-white">fs</span>
		  	</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon d-flex justify-content-center align-items-center px-0 mx-0"><img src="../../assets/img/icons/toggler.png"></span>
			  </button>
			  <div class="collapse navbar-collapse m-auto" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 active px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="../../index.php#home">Home</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="../../index.php#services">Service</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="../../index.php#about">About</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="../../index.php#projects">Projects</a>
			      </li>
			      <li class="nav-item mr-xl-3 mr-lg-3 mt-lg-0 mt-xl-0 mt-md-0 mt-md-2 mt-sm-2 mt-2 px-1">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center" href="#contact">Contact</a>
			      </li>
			      <!-- <li class="nav-item my-lg-0 my-xl-0 my-md-0 my-md-2 my-sm-2 my-2 px-1 d-flex align-items-center justify-content-center">
			        <a class="nav-link text-uppercase font-weight-600 font-size-14 text-xl-left text-lg-left text-md-center text-sm-center text-center py-0" href="index.bih.php"><img src="../../assets/img/icons/bih.png"></a>
			      </li> -->
			    </ul>
			  </div>
		</div>
	</nav>	

<!-- Back to top button -->

	<a class="btn bg-linear rounded-pill text-white" href="#aboutProject" id="back-to-top-btn"><img src="../../assets/img/icons/arrow-up.png" class="img-fluid"></a>

<!-- [About Project Container] -->

<section id="aboutProject" class="bg-grey">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600 mx-3">School Information System</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Electronic Gradebook</h6>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<i class="fas fa-user-shield fa-3x" class="icon"></i>
				<h5 class="mt-4 service-title font-weight-600">Administrator module</h5>
				<p class="mt-4 font-weight-300 text-grey">The administrator represents the person who is an employee of the school and who coordinates how the electronic gradebook works and how it is used. As the highest role in the hierarchy of system roles in the electronic gradebook, he has the ability to manage all information, regardless of who owns it.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 mt-xl-0 mx-lg-0 mt-md-0 mt-sm-4 mt-4 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<i class="fas fa-stamp fa-3x" class="icon"></i>
				<h5 class="mt-4 service-title font-weight-600">Secretary module</h5>
				<p class="mt-4 font-weight-300 text-grey">The biggest reason for creating a user profile for a secretary is to create and download school attendance certificates for all students in a given school.</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-xl-6 col-lg-6 col-md-6 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<i class="fas fa-chalkboard-teacher fa-3x" class="icon"></i>
				<h5 class="mt-4 service-title font-weight-600">Module for teacher / class teacher</h5>
				<p class="mt-4 font-weight-300 text-grey">The teacher has access to and the ability to manage notifications of different scope and grades of students to whom he teaches a particular subject. The class teacher has access to statistics that will help him make a proposal for a report on the success and behavior of students in his class, as well as to see and manage all the information regarding the students of his class.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 mt-xl-0 mx-lg-0 mt-md-0 mt-sm-4 mt-4 text-xl-left text-lg-left text-md-left text-sm-center text-center">
				<i class="fas fa-user-graduate fa-3x" class="icon"></i>
				<h5 class="mt-4 service-title font-weight-600">Module for student / parent</h5>
				<p class="mt-4 font-weight-300 text-grey">They have the possibility of insight into grades, behavior, praise, reprimands and absences as their current status as well as the reason for absence if justified. These users have access to relevant materials posted by subject teachers and notifications posted by other users of the system</p>
			</div>
		</div>
	</div>
</section>

<!-- [End of About Project Container] -->

<!-- [Project Photos] -->

<section id="projectScreenshots">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0  page-top">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600">Screenshots</h1>
			<h6 class="text-center w-100 font-weight-300 text-grey mt-1">Electronic diary</h6>
		</div>
    <div class="row mb-5">
    	<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="assets/img/gradebook/signin.jpg" data-fancybox="gallery">
          <img src="assets/img/gradebook/signin.jpg" class="img-fluid"  alt="">
        </a>
      </div> -->
    	<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/admin-1.jpg" data-fancybox="gallery" data-caption="">
          <img src="../../assets/img/gradebook/admin-1.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/admin-2.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/admin-2.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/admin-3.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/admin-3.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/admin-4.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/admin-4.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/nastavnik-1.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/nastavnik-1.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/nastavnik-2.jpg" data-fancybox="gallery">
		      <img src="../../assets/img/gradebook/nastavnik-2.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/razrednik-1.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/razrednik-1.jpg" class="img-fluid"  alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/razrednik-2.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/razrednik-2.jpg" class="img-fluid"  alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/sekretar-1.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/sekretar-1.jpg" class="img-fluid"  alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/ucenik-1.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/ucenik-1.jpg" class="img-fluid"  alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/ucenik-2.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/ucenik-2.jpg" class="img-fluid"  alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
        <a href="../../assets/img/gradebook/ucenik-3.jpg" data-fancybox="gallery">
          <img src="../../assets/img/gradebook/ucenik-3.jpg" class="img-fluid"  alt="">
        </a>
      </div>
   </div>		
	</div>
</section>

<!-- [End of Project Photos] -->

<!-- [Contact Info Container] -->

<section class="bg-grey pb-5" id="contact">
	<div class="container py-5 px-xl-0 px-lg-0 px-md-0 px-sm-0">
		<div class="row py-5">
			<h1 class="text-center w-100 font-weight-600 mx-3">If you have any question, fill out the form below.</h1>
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
					<button class="btn bg-linear text-uppercase text-white rounded-pill py-2 px-3 font-size-14 font-weight-500 d-flex align-items-center" name="sendMessage">send message<span><img src="../../assets/img/icons/arrow.png" class="img-fluid"></span></button>
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
<script src="../../js/vendor/jquery/jquery-3.4.1.slim.min.js"></script>

<script src="../../js/vendor/bootstrap/popper.min.js"></script>
<script src="../../js/vendor/jquery/jquery.min.js"></script>
<script src="../../js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="../../js/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- [Smooth scrolling] -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".navbar a, #back-to-top-btn").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      // event.preventDefault();

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

<!-- [Fancybox Image Gallery] -->
<script type="text/javascript">
$().fancybox({
    selector : '.imglist a:visible'
});

$('[data-fancybox="gallery"]').fancybox({
	 buttons: [
    "close"
  ],
  loop: false,
  keyboard: true,
  infobar: true,

});
    
</script>

<!-- [End of Scripts] -->
</body>
</html>