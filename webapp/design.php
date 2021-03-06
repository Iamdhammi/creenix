<?php require_once('includes/process.php') ?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-US-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>UI/UX Design Packages | Creenix</title>

    	<!-- Stylesheet  -->
	    <link rel="stylesheet" href="assets/css/style.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/full-slider.css" >
	    <!-- Favicon  -->
        <link rel="icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

	    <!-- Font-awesome-->
	    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!-- Icomoon font -->
        <link rel="stylesheet" href="assets/css/icomoon.css">
        <!-- Iconic font -->
        <link rel="stylesheet" href="assets/fonts/iconic/css/material-design-iconic-font.css">

	    <!-- Bootstrap  -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <style>html {scroll-behavior: smooth;}</style>
        
	    
    </head>
    <body>
    	<!--- Preloader -->
        <div class="fh5co-loader">
            <div class="loader"></div>   
        </div>
        <!-- Preloader End -->

        

        <!-- Navigation -->
	    <nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
                <div class="row">	
                    <div class="col-xs-3">
			            <div class="navbar-header">
				            <a class="navbar-brand" href="#homepage">Creenix</a>
					    </div>
					</div>
					<div class="col-xs-9 text-right">
				        <div class="collapse navbar-collapse" id="mynavbar">
				            <ul class="nav navbar-nav navbar-right">
					           <li class="active"><a href="landing-page.php">Home</a></li>
                                <li><a href="landing-page.php#services">Services</a></li>
                                <li><a href="Projects.php">Projects</a></li>
                                <li><a href="landing-page.php#pricing">Packages</a></li>
                                <li><a href="about.php">Meet us</a></li>
                                <li><a href="contact.php">Contact</a></li>
					        </ul>
				        </div>
			        </div>
			    </div>
		    </div>
		</nav>	

        <a class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white" href="#"><i></i></a>
        <div class="fh5co-offcanvas">
            <ul>
                <li class="active"><a href="landing-page.php"><i class="icon-home"></i> Home</a></li>
                <li><a href="about.php"><i class="icon-user"></i> Get to know us</a></li>
                <li><a href="landing-page.php#services"><i class="icon-rocket"></i> Services we offer</a></li>
                <li><a href="Projects.php"><i class="zmdi zmdi-collection-folder-image"></i> Our Projects</a></li>
                <li><a href="landing-page.php#pricing"><i class="icon-wallet"></i> Packages</a></li>
                <li><a href="contact.php"><i class="icon-mail"></i> Get in touch</a></li>
            </ul>
             <ul class="social-icons">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
        </div>
        <!-- End Navigation -->

        <!-- Currency panel -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>
            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
                    <span class="mtext-103 cl2">Change Currency</span>
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>
                <h5>Please select a currency</h5>
                <form action="" method="post">
                    <div class="header-cart-content flex-w js-pscroll">
                        <div class="rs1-select1 rs2-select1 bor8 bg0 m-b-12 m-t-9">
                            <select name="currency" class="sell js-select2">
                                <option value="USD">US dollar</option>
                                <option value="NGN">Nigerian Naira</option>
                                <option value="EUR">Euro</option>
                                <option value="GBP">Pound sterling</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button type="submit" name="currency-submit" class="header-cart-button">
                            <a class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">Save</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <section class="fh5co-cover2">
            <div class="container">
                <div class="header-text">
                    <h2 class="text-center">Digital Branding</h2>
                    <p class="text-center">Give your Business that quality branding it deserves</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center ;"></div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">WEBSITE UI/UX</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color: #666; letter-spacing: 1px;">Professional Designs</p>
                            <div class="price-rate white">
                                <h5>STANDARD PRICE</h5>
                                <h2><?php echo $design_price1; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i></h2>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Landing page UI/UX</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Dynamic pages UI/UX</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Content Creation</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branding</li>
                                </ul><br>
                                <p class="order_button"><a href="checking.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">MOBILE APP UI/UX</h3>
                            <i class="fa fa-mobile" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color: #666; letter-spacing: 1px;">Professional Designs</p>
                            <div class="price-rate">
                                <h5>STANDARD PRICE</h5>
                                <h2><?php echo $design_price2; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i></h2>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Landing page UI/UX</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Dynamic pages UI/UX</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Content Creation</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branding</li>
                                </ul><br>
                                <p class="order_button"><a href="checking1.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">LOGO DESIGN</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color: #666; letter-spacing: 1px;">Professional Logo</p>
                            <div class="price-rate white">
                                <h5>STANDARD PRICE</h5>
                                <h2><?php echo $design_price3; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i></h2>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; 3 Sample Designs</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Dynamic Color Blend</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Mockup Designs</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branding</li>
                                </ul><br>
                                <p class="order_button"><a href="checking2.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                           <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">E-FLYER/BANNER</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color: #666; letter-spacing: 1px;">Professional E-Flyers</p>
                            <div class="price-rate white">
                                <h5>STANDARD PRICE</h5>
                                <h2><?php echo $design_price4; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i></h2>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; 2 Sample Designs</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Dynamic Sizes</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Content Creation</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branding</li>
                                </ul><br>
                                <p class="order_button"><a href="checking3.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">MOCKUPS</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color: #666; letter-spacing: 1px;">Professional Mockup Designs</p>
                            <div class="price-rate">
                                <h5>STANDARD PRICE</h5>
                                <h2><?php echo $design_price5; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i></h2>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; 2 Sample Designs</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; 3 Sample Mockups</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Dynamic Orientations</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branding</li>
                                </ul><br>
                                <p class="order_button"><a href="checking4.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">DIGITAL PRINT</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Professional Prints</p>
                            <div class="price-rate white">
                                <h5>STARTING FROM</h5>
                                <h2><?php echo $design_price6; ?><font style="font-size: 15px;">/Qty</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; E-Flyer Print</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Banner Print</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Branded Print</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Customized Print</li> 
                                </ul><br>
                                <p class="order_button"><a href="checking5.php">Buy Now <i class="fa fa-shopping-bag"></i></a></p><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title js-top">
                    <h2 class="text-center js-gotop"><a href="#" style="text-decoration: none; color: #666">Select a package</a></h2><hr>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <address>
                            <strong>Creenix</strong><br><br>
                            A digital tech company dedicated to design thinking, development, branding and revitalising businesses and corporate organisations by providing intuitive web and software digital solutions to these businesses across the globe.<br><br>
                            Founded and launched in 2018.<br>
                            <i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i>
                            <ul class="social-icon text-left">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </address>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <address>
                           <strong>Get started</strong><br><br>
                            <p><a href="landing-page.html#services"><i class="fa fa-angle-right"></i> &nbsp;Services</a></p>
                            <p><a href="about.html"><i class="fa fa-angle-right"></i> &nbsp;About us</a></p>
                            <p><a href="projects.html"><i class="fa fa-angle-right"></i> &nbsp;Projects</a></p>
                            <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Packages</a></p>
                            <p><a href="contact.html"><i class="fa fa-angle-right"></i> &nbsp;Contact us</a></p>
                        </address>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <address>
                            <strong>Useful Links</strong><br><br>
                            <p><a href="landing-page.html#services"><i class="fa fa-angle-right"></i> &nbsp;Our Blog</a></p>
                            <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Privacy Policy</a></p>
                            <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Refund Policy</a></p>
                            <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Terms of use</a></p>
                            <p><a href="landing-page.html#pricing"><i class="fa fa-angle-right"></i> &nbsp;Get Hired</a></p>
                        </address>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <address>
                            <strong>Subscribe to our newsletter</strong><br><br>
                            Stay tuned to more exquisite packages at lower cost. No fixed price, No extra charges! Let us know your budget<br><br>
                            <form action="php/subscribe.php" method="post">
                                <input type="text" class="control bor" placeholder="Email" required>
                                <button  type="submit" id="subscribe-submit" class="small-btn">Subscribe</button>
                            </form>
                        </address>
                    </div>
                </div>
            </div>  
            
            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="text-center">
                        <p>&copy; Copyright <script>document.write(new Date().getFullYear());</script> <a href="landing-page.html">Creenix</a></p>
                    </div>
                </div>
            </footer>
        </section>
        <!-- Contact End -->

        <!-- Currency change -->
        <div class="currency js-show-cart">
            <span class=""><?php echo $symbol; ?></span>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>


        <!-- jQuery for slider-->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Waypoints for gototop -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <!-- Plugin JavaScript for navbar shrink-->
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/cbpAnimatedHeader.js"></script>

        <!-- Accordion -->
        <script src="assets/js/elements_custom.js"></script>
        <!-- Budget select -->
        <script src="assets/js/budget.js"></script>

        <script src="assets/js/wow.min.js"></script>
        <!-- Custom js for loader-->
        <script src="assets/js/custom.js"></script>
        <!-- Main for gototop-->
        <script src="assets/js/main.js"></script>

        <!-- Select options -->
        <script src="assets/js/select2.min.js"></script>
        <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
        </script>

        <!-- parallax background -->
        <script src="assets/js/parallax.js"></script>

        <!-- Plugins for navbar toggle -->
        <script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="assets/plugins/greensock/animation.gsap.min.js"></script>
        <script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="assets/plugins/easing/easing.js"></script>

        
    </body>
</html>