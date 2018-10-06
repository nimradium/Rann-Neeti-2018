<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Team Rann-neeti '18</title>
    <meta name="description" content="Official team page for Rann-neeti 2018, the official annual sports fest of IIT Mandi.">
    <meta name="author" content="Vipul Sharma, Aaditya Arora, @nimradium">
    <meta name="keywords" content="sports fest, rannneeti, rann-neeti, iitmandi, iit, mandi, turn, up, heat, colleges, footfall, register, team, largest, organised">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/team.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <center> <img src="images/logo.png" alt="Rann-neeti logo"></center>
            </a>
        </div>
        <nav class="header-nav">
            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <div class="header-nav__content">
                <h3>Rann-neeti '18</h3>
                <ul class="header-nav__list">
                    <li class="current"><a href="http://www.rann-neeti.co/#home" title="home">Home</a></li>
                    <li><a href="http://www.rann-neeti.co/#services" title="about">About</a></li>
                    <li><a href="http://www.rann-neeti.co/#works" title="events">Events</a></li>
                    <li><a href="http://www.rann-neeti.co/#clients" title="sponsors">Sponsors</a></li>
                    <li><a href="http://www.rann-neeti.co/#contact" title="contact">Contact Us</a></li>
                    <!-- <li><a href="Registration" title="register">Register</a></li> -->
                    <li><a href="team.html" title="team">Our Team</a></li>
                    <li><a href="https://www.flickr.com/photos/144689902@N06/sets/72157661151296348/" target="_blank" title="gallery">Gallery</a></li>
                    <li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=300525/" target="_blank" title="payfees">Pay Fees</a></li>
                </ul>
                <p></p>
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/Rannneetivqv/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/rann_neeti.iitmandi/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div> <!-- end header-nav__content -->
        </nav> <!-- end header-nav -->
        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>
    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <!-- end s-home -->

    <!-- s-abaut 
    ================================================== -->
    <section id='about' class="s-about" data-parallax="scroll" data-image-src="images/bgt.jpeg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
        <div class="overlay"></div>
        <div class="shadow-overlay"></div>
        <div class="row section-header has-bottom-sep" data-aos="fade-up" style="margin-top:0 ; margin-bottom: 0">
            <div class="col-full" style="margin-top: 0; margin-bottom: 0">
                <h3 class="subhead subhead--dark"></h3>
                <h2 class="display-1 display-1--light" style="display: inline; padding-top:0; color:#053050">RANN-NEETI '18</h2>
                <h1 class="display-1 display-1--light" style="color:  #1E2123 ; font-size: 50px;">OUR Team</h1>

                <h2 class="subhead" style="color:#EFF4F4  ; margin-bottom: 0; font-size: 25px;">
                    <!--maybe add text-->
                </h2>
            </div>
        </div>

    </section> 
    <!-- end s-about -->
    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-2">Team</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-3 block-tab-full">
            <?php
                $xml=simplexml_load_file("team.xml") or die("Error: Cannot create object");
                foreach($xml->children() as $member){
                    echo $member->name . "<br>";
                }
            ?>
        </div>
    </section> <!-- end s-services -->
    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">
            <div class="col-six tab-full left footer-desc">
                <div class="footer-logo"></div>
            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Rann-neeti, the official sports fest of IIT Mandi</h4>
                <p>
                    <a href="http://www.rann-neeti.co/">Home</a>
                    ·
                    <a href="http://www.rann-neeti.co#services">About</a>
                    ·
                    <a href="http://www.rann-neeti.co#works">Events</a>
                    ·
                    <a href="http://www.rann-neeti.co#clients">Sponsors</a>
                    ·
                    <a href="http://www.rann-neeti.co#contact">Contact us</a>
                    <!-- .
                    <a href="Registration">Register</a> -->
                    ·
                    <a href="team.html">Our Team</a>
                    ·
                    <a href="https://www.flickr.com/photos/144689902@N06/sets/72157661151296348/" target="_blank">Gallery</a>
                    <br><br>© Rann-neeti 2018 ©
                </p>
            </div>
            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
            </div>


        </div> <!-- end footer-main -->

    </footer> <!-- end footer -->
    <!-- preloader
    ================================================== -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
