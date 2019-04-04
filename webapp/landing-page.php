<?php require('includes/process.php') ?>

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-US-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Creenix</title>

    	<!-- Stylesheet  -->
	    <link rel="stylesheet" href="assets/css/style.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        
        <link rel="stylesheet" type="text/css" href="assets/css/full-slider.css">
	    <!-- Favicon  -->
        <link rel="icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

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
                            <a class="navbar-brand" href="landing-page.html"> Creenix</a>
					    </div>
					</div>
					<div class="col-xs-9 text-right">
				        <div class="collapse navbar-collapse" id="mynavbar">
				            <ul class="nav navbar-nav navbar-right">
					            <li class="active"><a href="landing-page.php">Home</a></li>
                                <li><a href="#services">Services</a></li>
						        <li><a href="Projects.php">Projects</a></li>
						        <li><a href="#pricing">Packages</a></li>
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
                <li><a href="#services"><i class="icon-rocket"></i> Services we offer</a></li>
                <li><a href="Projects.php"><i class="zmdi zmdi-collection-folder-image"></i> Our Projects</a></li>
                <li><a href="landing-page.php#pricing"><i class="icon-wallet"></i> Packages</a></li>
                <li><a href="contact.php"><i class="icon-mail"></i> Get in touch</a></li>
            </ul>
            <ul class="social-icons">
                <li><a href="https://facebook.com/creenix" class="fa fa-facebook"></a></li>
                <li><a href="https://instagram.com/creenixorg" class="fa fa-instagram"></a></li>
                <li><a href="https://twitter.com/creenixorg" class="fa fa-twitter"></a></li>
                <li><a href="https://linkedin.com/creenixorg" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
        </div>
        <!-- End Navigation -->

        <!-- Homepage --> 
        <div id="homepage">
	        <!-- Full Page Image Background Carousel Header -->
            <header id="myCarousel" class="carousel slide">
                <!-- Wrapper for Slides -->
                <div class="carousel-inner animate-box" data-animate-effect="fadeIn">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('assets/images/31.jpg');"></div>
                        <div class="carousel-caption">
                            <h1>Welcome Onboard! <p>Let's build you a website?<p></h1>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('assets/images/30.jpg');"></div>
                        <div class="carousel-caption">
                            <h1>24/7 Support <p>System readily available</p></h1>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('assets/images/29.jpg');"></div>
                        <div class="carousel-caption">
                            <h1>Mobile apps, UI/UX Design<p>Let's get started!</p></h1>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
                <div class="go-arrow">
                    <a href="#services"><i class="fa fa-angle-down fa-3x"></i></a>
                </div>
            </header>
             
        </div>
        <!-- End of Homepage -->

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
                <form action="landing-page.php" method="post">
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
         
        <!-- Service section -->
        <section id="services" class="service-top padding-100-50">
            <div class="container">
                <!-- <div class="error success show">
                    <div class="error-left">
                        <div class="error-outer"></div>
                        <div class="error-inner"></div>
                    </div>
                </div> -->
                <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center ;"></div>
                <div class="section-title">
				    <h2 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">What we do</h2><hr>
				</div>
				<p  style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;"><strong>Creenix</strong> is a digital tech company dedicated to design thinking, development, branding and revitalising businesses and corporate organisations by providing intuitive web and software digital solutions to these businesses across the globe.</p><br>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service text-center wow fadeInDown" data-wow-delay=".2s">
                            <div class="service-icon">
                                <div class="fa fa-laptop "></div>
                            </div>
                            <h3 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">Web Solutions</h3><hr>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666;letter-spacing: 1px;">Our Web Solutions vary from web design and development to web management, we design and develop great-looking websites that are responsive and suites your preference.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service text-center">
                            <div class="service-icon">
                                <div class="fa icon-mobile"></div>
                            </div>
                            <h3 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">Mobile App</h3><hr>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Using a mobile approach, we build and design dynamic software and mobile applications that come in their unique and diverse use satisfying the need of the client.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-service text-center">
                            <div class="service-icon">
                                <div class="fa fa-cog"></div>
                            </div>
                            <h3 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">Digital Branding</h3><hr>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">With our modern digital tech, we transform and reshape the the visual identity of businesses and give them a unique sense of branding by graphic designs and implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section-title">
                    <h2 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">Why we are different</h2><hr>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 column-left col-sm-6 col-xs-12">
                        <div class="second-single-service text-right right">
                            <div class="second-service-icon">
                                <div class="fa"><img src="assets/images/technology.png"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">EN VOGUE</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">We apply latest technologies, continually enhance technical expertise and endeavor to apply transferable skill sets.</p>
                        </div>
                        <div class="second-single-service text-right right">
                            <div class="second-service-icon">
                                <div class="fa"><img src="assets/images/analysis.png"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">ANALYSIS</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">We analyze and stealthily scrutinize environments to identify and prioritize needs/ risks and develop solutions.</p>
                        </div>
                        <div class="second-single-service text-right right mbzero">
                            <div class="second-service-icon">
                                <div class="fa"><img src="assets/images/leverage.png"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">LEVERAGE</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">We leverage the technology of brands helping them to express and connect with their constituents.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                        <div class="service-image text-center">
                            <img src="assets/images/233.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 column-right col-sm-6 col-xs-12">
                        <div class="second-single-service left">
                            <div class="second-service-icon">
                                <div class="fa"><img src="assets/images/teamwork.png"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">TEAM WORK</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">We encourage involvement, openness and honesty in all our client’s project.</p>
                        </div>
                        <div class="second-single-service left">
                            <div class="second-service-icon">
                                <div class="fa"><img src="assets/images/support.png"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">SUPPORT</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Our 24/7 support system always proves helpful to our clients.</p>
                        </div>
                        <div class="second-single-service left mbzero">
                            <div class="second-service-icon">
                                <div class="fa icon-wallet"></div>
                            </div>
                            <h4 style="color:  #222222; letter-spacing: 3px;">CUSTOM BUDGET</h4>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Most importantly, we allow for negotiation of prices and provide the availablity of custom budgets to choose from</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="zeta_cards">
            	<div class="row">
                    <div class="col-lg-4 zeta_card">
					    <div class="zeta_card_content wow fadeInUp" data-wow-delay="1.3s">
					    	<h2>Design thinking</h2>
						    <p style="font-family: 'century Gothic', sans-serif; letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
					    </div>
				    </div>
				    <div class="col-lg-4 zeta_card_2">
					    <div class="zeta_card_content">
						    <h2 style="color:;">Layout structure</h2>
						    <p style="font-family: 'century Gothic', sans-serif; letter-spacing: 1px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
					    </div>
				    </div>
				    <div class="col-lg-4 zeta_card_3">
		                <div class="zeta_card_content">
						    <h2>Start Building</h2>
						    <p style="font-family: 'century Gothic', sans-serif; letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
					    </div>
				    </div>
				</div>
			</div>
        </section>
        <!-- End of service section -->
        
        <!-- client -->
        <section id="fh5co-services" class="fh5co-bg-section-1">
        	<div class="container">
                
                <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center ;"></div>
                <div class="section-title">
				    <h3 class="text-center" style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">Brands We've worked with</h3><hr>
				</div>
                <div class="fh5co-partner text-center">
                    <li><a href="http://raoatech.com"><img src="assets/images/client/client-6.png" alt="partner"></a></li>
                    <li><a href="http://www.brisktradeng.net/new"><img src="assets/images/client/client-7.png" alt="partner"></a></li>
                    <li><a href="http://www.sahara-group.com"><img src="assets/images/client/client-9.png" alt="partner"></a></li>
                    <li><a href="http://www.balitaroofs.com.ng"><img src="assets/images/client/client-10.png" alt="partner"></a></li>
                    <li><a href="http://www.octaveanalytics.com"><img src="assets/images/client/client-11.png" alt="partner"></a></li>
                    
                    <!-- <div class="item"><a href="http://raoatech.com"><img src="assets/images/client/client-1.png" alt="partner"></a></div>
                    <div class="item"><a href="http://www.brisktradeng.net/new"><img src="assets/images/client/client-2.png" alt="partner"></a></div>
                    <div class="item"><a href="http://www.sahara-group.com"><img src="assets/images/client/client-3.png" alt="partner"></a></div>
                    <div class="item"><a href="http://www.balitaroofs.com.ng"><img src="assets/images/client/client-4.png" alt="partner"></a></div>
                    <div class="item"><a href="http://www.octaveanalytics.com"><img src="assets/images/client/client-5.png" alt="partner"></a></div> -->
                </div>
            
            </div><br>
        </section>
        <!-- End of client -->

        <!-- Work Together -->
        <section class="work-area" data-parallax="scroll">
            <div class="overlay section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="work-text tex">
                            <h1 style="font-family: 'century Gothic', sans-serif; color: #fff; letter-spacing: 1px;">Let's Work Together</h1>
                            <div class="line"></div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="call text-center" style="font-family: 'century Gothic', sans-serif; color: #fff; letter-spacing: 2px;"><a href="#" data-toggle="modal" data-target="#callmodal">Call us now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End of Work Together -->

        <!-- Pricing -->
        <section class="price-area padding-100-50" id="pricing">
            <div class="container">
                <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center ;"></div>
                <div class="section-title">
                    <h2 class="text-center" style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">Exquisite Packages</h2><hr>
                </div>
                <p  style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Explore our packages and see the one that suites your need best! And don't be alarmed by the prices, remember you can always negotiate and select a budget we can work with. Choose a package now and let's start working!</p><br>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">WEBSITE</h3>
                            <i class="fa fa-laptop" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Own a standard website</p>
                            <div class="price-rate white">
                                <h5>STARTING FROM</h5>
                                <h2><?php echo $web_price; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Blog Webites</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Full Stack Websites</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Revamping</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; E-Commerce Trading</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Online Stores</li>
                                </ul><br>
                                <p class="order_button"><a href="website-packages.php">Explore <span><img src="assets/images/arrow_right.svg" alt=""></span></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="pricing-area text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">DIGITAL BRANDING</h3>
                            <i class="icon-tv" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Brand your business</p>
                            <div class="price-rate">
                                <h5>STARTING FROM</h5>
                                <h2><?php echo $design_price; ?><font style="font-size: 15px;">/Job</font></h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; UI/UX design</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Logo design</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; E-Flyer/Banner design</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Mockup Representation</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Digital Print</li>
                                </ul><br>
                                <p class="order_button"><a href="design.php">Explore <span><img src="assets/images/arrow_right.svg" alt=""></span></a></p><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="pricing-area soon text-center wow fadeIn">
                            <h3 style="font-family: 'century Gothic', sans-serif; color:  #222222; letter-spacing: 1px;">MOBILE APP</h3>
                            <i class="icon-mobile" style="color: gold; font-size: 20px;"></i>
                            <p style="font-family: 'century Gothic', sans-serif; color:  #666; letter-spacing: 1px;">Own a Mobile app</p>
                            <div class="price-rate white">
                                <h2>Available soon</h2>
                                <i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i><i class="icon-star" style="color: gold; font-size: 20px;"></i>
                            </div>
                            <div class="price-details">
                                <ul>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Coming soon</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Coming soon</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Coming soon</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Coming soon</li>
                                    <li><i class="icon-check" style="color: #71aa68;"></i> &nbsp; Coming soon</li>
                                </ul><br>
                                <p class="order_button not"><a href="">Coming soon <span><i class="zmdi zmdi-lock"></i></span></a></p><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
        <!-- End of Pricing -->

        <!-- Subscribe -->
        <section class="subscribe">
            <div class="overlay1 section-padding">
            <div class="container">
                <div id="fh5co-counter" class="fh5co-counter text-center">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="feature-center">
                            <i class="icon-user"></i>
                            <span class="counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="feature-center">
                            <i class="icon-video2"></i>
                            <span class="counter js-counter" data-from="0" data-to="18" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Completed Projects</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="feature-center">
                            <i class="icon-shield"></i>
                            <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Creativity Fuel</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="feature-center">
                            <i class="icon-clock"></i>
                            <span class="counter js-counter" data-from="0" data-to="673" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Hours Spent</span>
                        </div>
                    </div>
                    <br>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- End of Subscribe -->


        <!-- client -->
        <section id="client padding-100-50" class="client-area">
            <div class="container">
                <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center ;"></div>
                <div class="section-title">
                    <h3 class="text-center" style="font-family: 'century Gothic', sans-serif; color: #222222; letter-spacing: 1px;">What our clients say</h3><hr>
                </div>
                <div id="mycarousel" class="carousel slide  wow fadeInUp text-center" data-ride="carousel" data-wow-delay="1.2s">
                    <!--wrappper for slides-->
                    <div class="carousel-inner">
                        <div class="item new active">
                            <div class="figure">
                                <img src="assets/images/team/member-6.jpg" alt="user">
                            </div>
                            <span>Emmanuel Edidiong, via <a href="https://instagram.com/_sonjo" class="instagram">Instagram</a></span>
                            <blockquote>
                                <p>&ldquo;I Love my graphic designs, they really sooth my taste. Thanks Creenix, you did a great job. I'm so happy! you guys should try them out, they deliver in real time&rdquo;</p>
                                <p><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i></p>
                            </blockquote>
                        </div>
                        <div class="item new">
                            <div class="figure">
                                <img src="assets/images/team/member-8.jpg" alt="user">
                            </div>
                            <span>Bello Damilola, via <a href="https://instagram.com/iam_dhammi" class="instagram">Instagram</a></span>
                            <blockquote>
                                <p>&ldquo;My website is responsive and well designed to the minimal detail with great user experience. Thanks Creenix for a good job!&rdquo;</p>
                                <p><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i><i class="icon-star" style="color: gold;"></i></p>
                            </blockquote>
                        </div>
                    </div>
               </div>
            </div>
        </section>
        <!-- About End -->
                

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center"><a href="landing-page.html#pricing" style="text-decoration: none; color: #666">Let's start a project</a></h2><hr>
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
                                <li><a href="https://facebook.com/creenixorg" class="fa fa-facebook"></a></li>
                                <li><a href="https://instagram.com/creenixorg" class="fa fa-instagram"></a></li>
                                <li><a href="https://twitter.com/creenixorg" class="fa fa-twitter"></a></li>
                                <li><a href="https://linkedin.com/creenix" class="fa fa-linkedin"></a></li>
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
        

        <!-- callmodal -->
        <div class="modal fade" id="callmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Our Phone Numbers</h2>
                    </div><br>
                    <div class="modal-text">
                        <h1><a href="tel://2348127131208" style="text-decoration: none;"><i class="fa fa-phone"></i> +234 812 713 1208</a></h1>
                        <h1><a href="tel://2348105389434" style="text-decoration: none;"><i class="fa fa-phone"></i> +234 810 538 9434</a></h1>
                    </div>
                </div>
            </div>
        </div>

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

        <script src="assets/js/select2.min.js"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>

	    <!-- Plugins for navbar toggle -->
        <script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="assets/plugins/greensock/animation.gsap.min.js"></script>
        <script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="assets/plugins/easing/easing.js"></script>

        <!-- Custom js for loader-->
        <script src="assets/js/custom.js"></script>
	    <!-- Main for gototop-->
	    <script src="assets/js/main.js"></script>

        <!-- parallax background -->
        <script src="assets/js/parallax.js"></script>

       <!-- countTo -->
       <script src="assets/js/jquery.countTo.js"></script>

        <!-- animations -->
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/jquery.parallax.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/counter.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
        
       
    </body>
</html>