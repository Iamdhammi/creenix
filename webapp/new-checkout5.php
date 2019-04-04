<?php require_once('includes/process.php') ?>
<?php require_once('includes/checkingprice.php') ?>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
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
                                  <li><a href="landing-page.php">Home</a></li>
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
                <li><a href="landing-page.php"><i class="icon-home"></i> Home</a></li>
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
        
        <!-- Background header -->
        <section class="fh5co-cover3">
            <div class="container">
                <div class="header-text">
                    <h2 class="text-center">Your Order</h2>
                    <p class="text-center">Place your order and we'll call you in a jiffy!</p>
                </div>
            </div>
        </section>
        <!-- End Background header -->

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
                        <button type="submit" class="header-cart-button">
                            <a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">Save</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Checkout section -->
        <section>   
            <form action="data5.php" method="post">
                <div class="container">
                    <div class="st-center" style="background: url(assets/images/logo-icon-4.png) no-repeat scroll center">
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 m-lr-auto m-b-50">
                            <div class="p-lr-40 how-shadow1 p-t-30 p-b-40 m-l-63 m-lr-0-xl p-lr-15-sm">
                                <div class="text-center bor12">
                                    <h2 class="mtext-109 cl2 p-b-30">Proceed to Order</h2>
                                </div><br>
                                <div class="stext-111">
                                    <h4 style="line-height: 1.6923;">Revamp: Price may vary</h4>
                                    <h4>Job Delivery: May vary</h4>

                                </div><br>
                                <div class="stext-109 cl2">
                                    <h5 style="color: #71aa68">What are you revamping?</h5>
                                </div>
                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select class="sell js-select2">
                                        <option value="so">Blog</option>
                                        <option>Website</option>
                                        <option>Full-stack Website</option>
                                        <option>E-commerce</option>
                                        <option>Online store</option>
                                   </select>
                                   <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select name="des" class="sell js-select2">
                                        <option>Job Description</option>
                                        <option>Fashion</option>
                                        <option>News</option>
                                        <option>Inspirational</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="bor8 bg0 m-b-12">
                                    <textarea name="message" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" rows="4" placeholder="Anything you need tell us?"></textarea>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12 m-lr-auto m-b-50">
                            <div class="how-shadow1 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                                <h4 class="mtext-109 cl2 p-b-30 text-center">Order Details</h4>
                                <div class="flex-w flex-t bor12 p-b-13">
                                    <div class="">
                                        <span class="stext-110 cl2">Please fill out all fields</span>
                                    </div>
                                    
                                </div>
                                <div class="size-2009 p-r-18 p-r-0-sm w-full-ssm">
                                    <div class="p-t-15">
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Full name" required>
                                            
                                        </div>
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                            <select name="country" class="sell js-select2">
                                                <option>Select Country...</option>
                                                <?php
                                                    $product_array = $db_handle->runQuery("SELECT * FROM country ORDER BY id ASC");
                                                    if (!empty($product_array)) {
                                                    foreach($product_array as $key=>$value){
                                                ?>
                                                <option><?php echo $product_array[$key]["name"]; ?></option>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="bor8 bg0 m-b-12">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State of residence" required>
                                        </div>
                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Address" required>
                                        </div>
                                        <div class="bor8 bg0 m-b-22">
                                            <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="contact" placeholder="Contact no" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-w flex-t p-t-27 p-b-33">
                                    <input type="checkbox" name="validate" <?php if (isset($validate) && $validate=="agree") echo "checked";?> value="agree" required>&nbsp;&nbsp;<span class="stext-111 cl8 ">I agree to the <a href="" style="color: #999; text-decoration: none; border-bottom: 1px dotted;">Terms of use</a></span>
                                </div>
                                <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Place Order
                                </button>
                            </div>
                       </div>
                    </div>
                </div>
            </form>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-center">You're all set</h2><hr>
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

        <!-- Currency change -->
        <div class="currency js-show-cart">
            <span class=""><?php echo $symbol; ?></span>
        </div>

        <!-- Contact End -->
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