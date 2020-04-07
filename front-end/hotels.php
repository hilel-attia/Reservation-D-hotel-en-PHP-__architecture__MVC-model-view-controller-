<?php
include 'header.php';
?>

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our hotel</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Area -->
					<?php
					
					require_once 'Models/hotel.php';
					$Hotel = new hotel();
					$Rows = $Hotel->liste();
					foreach($Rows as $Row){ 
					//var_dump($Row);?>
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/43.jpg" alt="">
                            <img src="img/bg-img/44.jpg" alt="">
                           
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2><?=$Row['nom']; ?> <?=$Row['etoile']; ?>*</h2>
                            <div class="room-feature">
                                <h6>adresse: <span><?=$Row['adresse']; ?></span></h6>
                                <h6>codepostal: <span><?=$Row['codepostal']; ?></span></h6>
                                <h6>codepostal: <span><?=$Row['codepostal']; ?></span></h6>
                                <h6>ville: <span><?=$Row['nomVille']; ?></span></h6>
                           
                            </div>
							<div>
							<?=$Row['description']; ?>
							</div>
                            <a href="reservation.php" class="btn view-detail-btn">Reserver Vite <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
					<?php 
					
					}?>

                </div>

                <div class="col-12 col-lg-4">
                    <!-- Hotel Reservation Area -->
                    <div class="hotel-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                              
                            
                                 
                             
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

<?php
include 'footer.php';

?>