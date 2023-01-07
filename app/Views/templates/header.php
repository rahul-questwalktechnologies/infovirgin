<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo esc($title) ?></title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link rel="stylesheet" href="assets/css/aos.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/imp.css">
	<link rel="stylesheet" href="assets/css/custom-animate.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/scrollbar.css">
	<link rel="stylesheet" href="assets/css/hiddenbar.css">
   
    <link rel="stylesheet" href="assets/css/color.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div>

<!-- main header -->
<header class="main-header header-style-four">
    <!--Start Header Top-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="header-top-left">
                        <p><strong>INFOVIRGIN</strong> Technology Solutions Private Limited</p>    
                    </div>     
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="header-top-right">
                        <div class="header-social-links-style3">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
<!--                                <li>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                                </li>-->
                            </ul>
                        </div>   
                    </div>     
                </div>
                       
            </div>
        </div>    
    </div>
    <!--End Header Top-->
    <!--Start Header Upper-->
    <div class="header-upper-style2">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-upper-left-style2 pull-left clearfix">
                    <div class="logo">
                        <a href="home"><img src="assets/images/resources/logo.png" alt="IVPL Logo" title=""></a>
                    </div>   
                </div>
                <div class="header-upper-right-style2 pull-right">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-planet-earth thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Address</h3>
                                    <p>DJ-1104, DLF Tower B</p>
                                    <p>Jasola District Center</p>
                                    <p>New Delhi, 110025</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-punctuality thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Office Timeing</h3>
                                    <p>Mon - Fri</p>
                                    <p>09:00 am - 06:00 pm</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-email thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Email</h3>
                                    <p><strong>Sale:</strong> <a href="mailto:sales@ivpl.in">sales@ivpl.in</a></p>
                                    <p><strong>Other Queries:</strong> <a href="mailto:info@ivpl.in">info@ivpl.in</a></p>
                                </div>
                            </li>
                        </ul>    
                    </div>
                      
                </div>    
            </div>    
        </div>    
    </div>
    <!--End Header Upper-->
    
    <!--Start header lawer -->
    <div class="header-lawer-style4">
        <div class="container">
            <div class="outer-box clearfix">
                <!--Top Left-->
                <div class="header-lawer-left-style4 float-left clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style4 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown <?php echo url_is('home') ? 'current' : ''; ?>">
                                        <a class="home-icon" href="home">Home</a>
<!--                                        <ul>
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>
                                            <li><a href="index-3.html">Home Page 03</a></li>
                                            <li><a href="index-4.html">Home Page 04</a></li>
                                            <li><a href="index-box-layout.html">Home Boxed Layout</a></li>
                                            <li><a href="index-rtl.html">Home RTL</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                </ul>    
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li class="dropdown <?php echo url_is('about') ? 'current' : ''; ?>"><a href="about">About</a>
<!--                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="team.html">Team Page</a></li>
                                            <li><a href="team-single.html">Team Single Page</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>   
                                            <li><a href="404-page.html">Error Page</a></li>                
                                        </ul>-->
                                    </li>
                                    <li class="dropdown <?php echo url_is('services') ? 'current' : ''; ?>"><a href="services">Services</a>
                                        <ul>
                                            <li><a href="services.html">View All Services</a></li>
                                            <li><a href="ser-strategic.html">System Integration</a></li>
                                            <li><a href="ser-online.html">Network, Security and Threat Management Solution</a></li>
                                            <li><a href="ser-consulting.html">Infrastructure Management Solution</a></li>
                                            <li><a href="ser-financial.html">Network Monitoring / Network Management Support</a></li>
                                            <li><a href="ser-investment.html">Virtualization Technologies</a></li>
                                            <li><a href="ser-wealth.html">ICT Infra Maintenance and Support</a></li>
                                            <li><a href="ser-business.html">Data Center Automation</a></li>
                                            <li><a href="ser-consumer.html">Business Intelligence and Analytics</a></li>
                                            <li><a href="ser-corporate.html">Facility Management Services</a></li>
                                            <li><a href="ser-corporate.html">Enterprise-grade LAN Cabling</a></li>
                                            <li><a href="ser-corporate.html">Cloud Solutions and Services</a></li>
                                            <li><a href="ser-corporate.html">Change / Request Implementation</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown <?php echo url_is('projects') ? 'current' : ''; ?>"><a href="projects">Projects</a>
                                        <ul>
                                            <li><a href="projects.html">View All Projects</a></li>
                                            <!--<li><a href="project-single.html">Project Details</a></li>-->
                                        </ul>
                                    </li>
<!--                                    <li class="dropdown"><a href="#">Blog</a>
                                    	<ul>
                                            <li><a href="blog.html">Latest Blog</a></li>
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li>-->
                                    <li class="<?php echo url_is('contact') ? 'current' : ''; ?>"><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div> 
                         
                </div>
                <!--Top Right-->
                <div class="header-lawer-right-style4 clearfix float-right">
                    <div class="outer-search-box-style1">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required="">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div> 
                    <div class="button-box">
                        <a class="btn-four" href="contact"><span class="txt">Get a Quote</span></a>
                    </div>      
                </div>
                
            </div>  
        </div>
    </div>
    <!--End header lawer -->
   
    <!--Sticky Header-->
    <div class="sticky-header white-bg">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive"><img src="assets/images/resources/logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu style4 clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu --> 
    
</header>

