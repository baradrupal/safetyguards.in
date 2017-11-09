<!DOCTYPE html>
<?php include_once 'config.php'; ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lexcru</title>
        <link rel="icon" href="images/favcon.png" type="image/png" sizes="20x20">
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>               
                
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">	
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
<style>
</style>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
	</script>
	</head>
	<body>	
		<div id="site-content">
			<header class="site-header">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="top-header">
				<div class="container">
						<a href="index.php" id="branding">
                            <img src="images/main-lexcru-logo.jpg" alt="Company Name" class="logo" style="max-width: 70%;"></a>
							<div class="logo-text">
<!--								<h1 class="site-title">Company Name</h1>-->
<!--								<small class="description">Taline goes here</small>-->
							</div>
						 <!-- #branding -->					
						<div class="right-section pull-right">
							<img src="images/icon-phone.png" class="icon"> (+91) 96240 07888				
							<!--<form action="#" class="search-form">
								<input type="text" placeholder="Search...">
								<button type="submit"><img src="images/icon-search.png" alt=""></button>
							</form>-->
						</div>
					</div> <!-- .container -->
				</div> <!-- .top-header -->			
				<div class="bottom-header">
					<div class="container">
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
								<ul class="menu">
																<li class="menu-item"><a href="index.php">Home</a></li>
																<li class="dropdown ">
                                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu nav " style="top: 25px;">
                                                                        <li class="menu-item" role="presentation"><a href="company_profile.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Company Profile</a></li>                                                                                                                                              
																		<li class="menu-item" role="presentation"><a href="vision_mission.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Vision & Mission</a></li>
																		<li class="menu-item" role="presentation"><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Meet Our Team</a></li>
																		<li class="menu-item" role="presentation"><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Quality Policy</a></li>
																		<li class="menu-item" role="presentation"><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Quality Statement</a></li>																		
                                                                    </ul>
                                                                </li>  
                                                                <li class="dropdown">
                                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Brands <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu nav" style="top: 25px;">
                                                                        <li class="menu-item" role="presentation"><a href="products.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Cruze</a></li>
                                                                        <li class="menu-item" role="presentation"><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Lexpure</a></li>
                                                                        <li class="menu-item" role="presentation"><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">LCM</a></li>
                                                                    </ul>
                                                                </li>   
                                                                <li class="dropdown">
                                                                    <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">News & Events<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu nav" style="top: 25px;">
                                                                        <li class="menu-item" role="presentation"><a href="past_events.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Past Events</a></li>                                                                                                                                              
																		<li class="menu-item" role="presentation"><a href="upcoming_events.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Upcoming Events</a></li>                                                                                                                                              
                                                                    </ul>
                                                                </li>  
                                                                <li class="menu-item"><a href="awards.php">Awards</a></li>
                                                                <li class="menu-item"><a href="certificates.php">Certificates</a></li>                                                                														
																<li class="dropdown">
                                                                    <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">Support<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu nav" style="top: 25px;">
                                                                        <li class="menu-item" role="presentation"><a href="feedback_form.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Feedback</a></li>                                                                                                                                              																	                                                                                                                                      
																    </ul>
                                                                </li>
																<li class="dropdown">
                                                                    <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">Contact Us<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu nav" style="top: 25px;">
                                                                        <li class="menu-item" role="presentation"><a href="corporate_add.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Corporate Office</a></li>                                                                                                                                              																	                                                                                                                                      
																		<li class="menu-item" role="presentation"><a href="our_branches.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Our Branches</a></li>                                                                                                                                              																	                                                                                                                                      
																		<li class="menu-item" role="presentation"><a href="our_network.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Our Network</a></li>                                                                                                                                              																	                                                                                                                                      
																    </ul>
                                                                </li>
																		
															
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->						
						<div class="social-links">
							<a href="https://www.facebook.com/Lexcruwatertech/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/LexcruWaterTech" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.youtube.com/channel/UCFYXbbvTvONR3xC4FZ66B-g" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/lexcruwatertech/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>						
						<div class="mobile-navigation"></div>
					</div>
				</div>	
			</nav>				
			</header> 
			
			