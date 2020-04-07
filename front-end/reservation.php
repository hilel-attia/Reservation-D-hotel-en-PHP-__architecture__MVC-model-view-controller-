<?php

$Message = '';
include 'header.php';
if (isset($_POST["nom"])){
	include 'Models/reservation.php';
	$reservation=new reservation();
	$retour=$reservation->insert($_POST);
	if($retour)
		$Message = 'Félicitation votre réservation a eté bien prise en compte, MERCI POUR VOTRE CONFIANCE';
	
}
?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/18.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title"> <?=$Message;?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Phone</h4>
                            <p>+216 08-208-837</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Address</h4>
                            <p>iset nabeul</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Open time</h4>
                            <p>08:00 am to 18:00 pm</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p>hilelattia11@gmail.com</p>
                        </div>
                    </div>
                </div>

       
   
    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
					
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6> reserver</h6>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
					
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    nom:<input type="text" name="nom" class="form-control mb-30" placeholder="nom">
                                </div>
								<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    prenom:<input type="text" name="prenom" class="form-control mb-30" placeholder="prenom">
                                </div>
								
								<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    adresse<input type="text" name="adresse" class="form-control mb-30" placeholder="adresse">
                                </div>
								<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    telephone:<input type="number" name="tel" class="form-control mb-30" placeholder="telephone">
                                </div>
								
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    email:<input type="email" name="email" class="form-control mb-30" placeholder=" Email">
                                </div>
                                
								 <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                  debut:<input type="date" name="debut" class="form-control mb-30" placeholder="debut">
                                </div>
								<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                   fin:<input type="date" name="fin" class="form-control mb-30" placeholder="fin">
                                </div>
								
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-15"> confirmer votre reservation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->

    


    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

<?php
include 'footer.php';

?>