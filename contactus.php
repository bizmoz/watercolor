<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Watercolor | Underwater Photography | Contact</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="watercolor, underwater photography" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS 
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet"> -->

</head>

<body>

    <section class="content-main-w3 inner-page" id="home">
        <!--/nav-->
        <div class="header_top_w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home
									<span class="sr-only">(current)</span>
								</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.html">Collaborators</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contactus.php">Contact</a>
                        </li>

                    </ul>
                </div>

            </nav>
            <div class="logo-wthree text-center innerstrip">
                <a class="navbar-brand" href="index.html">
				 <img src="images/logo.png" class="logoinner" width="100%"/> <!--<span style="margin-top:10px;"> underwater photography</span>--></a>
            </div>

        </div>

        <!--//nav-->
    </section>
    <!-- contact -->
    <section class="banner-bottom-w3layouts pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
            <h4 class="sub-tittle text-uppercase text-center">Find us</h4>
              <h2 class="title-wthree text-center mb-lg-5 mb-3">Contact</h2>
            <div class="container">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> Kerala, INDIA

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> watercolor.ind@gmail.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+91 9895 109567</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125531.57793075236!2d76.15321033618407!3d10.511548707285563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee15ed42d1bb%3A0x82e45aa016ca7db!2sThrissur%2C+Kerala!5e0!3m2!1sen!2sin!4v1549703618032" allowfullscreen></iframe>

                    </div>
                    <div class="col-lg-6 main_grid_contact">
					
					 <?php
          if (isset($_GET["status"])) {
             echo"<div class='alert alert-success alert-dismissible fade show' role='alert' style='width:100%;'>
  Form submitted successfully <strong> We will get back to you soon!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";    
                } 
          ?>
					
					
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4>
                            <form method="post" action="sendmail.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="yourname" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" name="description" placeholder=""></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->


    <!--/footer-->
    <footer class="pt-lg-5 inner-page-footer">
        <div class="social_media_w3layouts text-center">
            <ul class="social-icons justify-content-center mt-md-5 mt-3">
                <li class="mr-1"><a href="http://www.facebook.com/watercolor.ind"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-1"><a href="https://www.instagram.com/watercolor.ind/"><span class="fab fa-instagram"></span></a></li>
                                <li class="mx-1"><a href="mailto://watercolor.ind@gmail.com"><span class="far fa-envelope"></span></a></li>
								<li class="mx-1"><a href="https://api.whatsapp.com/send?phone=919895109567&text="><span class="fab fa-whatsapp"></span></a></li>
								<li class="mx-1"><a href="http://t.me/arjunmg10"><span class="fab fa-telegram-plane"></span></a></li>
            </ul>
            <p class="copy-right-w3ls my-3">© 2018 Watercolor. All rights reserved</a></p>
        </div>
    </footer>
    <!--//footer-->

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src='js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="js/bootstrap.js"></script>

</body>

</html>