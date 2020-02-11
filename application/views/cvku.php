<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Rizky Andre Wibisono</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css"> 
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-12">
		   
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Hello, my name is Rizky<br> <strong>I <i class="fa fa-heart"></i> Coding</strong></h2>

                <div class="underline"></div>             
              <a href="#aboutUs" class="read_more2">Who Am I</a> </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><b>RZNDWB</b></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">About Me</a></li>
			  <li><a href="#service" class="scroll-link">Skills</a></li>
			  <li><a href="#Portfolio" class="scroll-link">Projects</a></li>
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
  <div class="container">
    <h2>Who Am I</h2>
	<h6>I am an Informatics Student who love to code</h6>
    <div class="inner_section"> 
	  <div class="row">
						<div class="col-lg-12 about-us">
							<div class="row">
							<div class="col-md-6"> <img class="img-responsive" src="assets/img/about1.png" align=""> </div><!-- /.col-md-6 -->
								<div class="col-md-6">
									<h3>I Design Awesome Web Apps</h3>
									<p>
                    Coding a web apps is my daily routine. If you need a web developer, feel free to contact me.
                    I can help to solve your problem, such as in :
									</p>

									<ul class="about-us-list">
										<li class="points">Front-end</li>
										<li class="points">Back-End</li>
										<li class="points">Full-stack</li>
                    <li class="points">Mobile</li>
									</ul><!-- /.about-us-list -->
								 
								</div><!-- /.col-md-6 -->
								
							</div><!-- /.row -->	
						</div><!-- /.col-lg-12 -->
					</div>
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Skills</h2>
	<h6>Here some of my advanced skill</h6>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-md-3">
		<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span> </div>
          <div class="service_block">
            
            <h3 class="animated fadeInUp wow">Android</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-md-3"> 
		<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div> 
		<div class="service_block">
            <h3 class="animated fadeInUp wow">Apple IOS</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-md-3">
		<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span> </div>
          <div class="service_block">
            
            <h3 class="animated fadeInUp wow">UI/UX Design</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
		  <div class="col-md-3">
		<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-user"></i></span> </div>
          <div class="service_block">
            
            <h3 class="animated fadeInUp wow">Web Development</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>
<!--Service-->




<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Projects</h2>
	<h6>Here is pieces of my work</h6>
	  
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".prototype">
          <h5>Prototype</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".design">
          <h5>Design</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".android">
          <h5>Android</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".appleIOS">
          <h5>Apple IOS</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
          <h5>Web App</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow grid" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">  
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item effect-oscar">
	   
        <div class="portfolio_img"> 
		<img src="assets/img/portfolio_pic1.jpg"  alt="Portfolio 1"> </div> 
			<figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic1.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
        </figure>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item-->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic2.jpg" alt="Portfolio 1"> </div>
        	<figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic2.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
        </figure>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic3.jpg" alt="Portfolio 1"> </div>
       <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic3.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
        </figure>
      <!--/Portfolio Item--> 
      
      <!-- Portfolio Item-->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  prototype web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic4.jpg" alt="Portfolio 1"> </div>
         <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic4.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
      </figure>
      <!-- Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic5.jpg" alt="Portfolio 1"> </div>
       <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic5.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
      </figure>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic6.jpg" alt="Portfolio 1"> </div>
       <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic6.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
      </figure>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item  -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic7.jpg" alt="Portfolio 1"> </div>       
       <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic7.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
       </figure>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <figure style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item effect-oscar">
        <div class="portfolio_img"> <img src="assets/img/portfolio_pic8.jpg" alt="Portfolio 1"> </div>       
      <figcaption>		
				<div>
				  <a href="assets/img/portfolio_pic8.jpg" class="fancybox"> 
					<h2>Warm <span>Oscar</span></h2>
							<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
				  </a>
				</div>
			</figcaption>
        </figure>
      <!--/Portfolio Item --> 
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Get In Touch</h2>
	<h6>Feel free to contact me</h6>
     
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>Teknik Informatika </h4>
                                <p>ITS kampus sukolilo</p>
                            </div>
                            <div class="detail">
                                <h4>call me</h4>
                                <p>+62 1234 567890</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>rzkandre@gmail.com</p>
                            </div> 
                        </div>
       		  
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/profile.php?id=100002740303493"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="https://id.linkedin.com/in/rizan-wibisono"><i class="fa fa-linkedin"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="https://github.com/rizanw"><i class="fa fa-github"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
            
		<form name="sentMessage" id="contactForm"  novalidate>
		<h3>Contact Form</h3>
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control input-text" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control input-text" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control input-text" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary input-btn pull-right">Send</button><br />
		</form>
		
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>&copy; rzndwb 2020 By Rizky Andre Wibisono </div>
  </div>
</footer>

<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="assets/js/jquery.nav.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/jquery.isotope.js"></script>
<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="assets/js/wow.js"></script> 
 <script src="assets/contact/jqBootstrapValidation.js"></script>
 <script src="assets/contact/contact_me.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>