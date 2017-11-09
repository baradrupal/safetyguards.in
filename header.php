<!DOCTYPE html>
<?php include_once 'config.php'; ?>
<html lang="en">
	<head>
		<meta charset="UTF-8" Content-type: text/html;>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        <title>Safetyguards</title>
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
 @media only screen and (min-width:768px){
  .dropdown-submenu:hover>.dropdown-menu {
    display:block;
  }
}
</style>
<!--<script>
$(document).ready(function(){
  $('.dropdown-submenu a').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>-->
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
                <div class="container"> 
                    <!--======== Start Header Navigation ==========-->
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" style="float: right;
margin:  10px 30px 10px 0px;">
                        <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php" style="width:400px;"><img src="images/se-logo.jpg" style="width:100%;" class="logo img-responsive" alt="Safetyguards Image not founds"></a>
                    </div>                    
                    <!----PHONE------>
     <div class="right-section navbar-right">
							<img src="images/phone.png" class="icon"> (+91) 98240 47764<br/><br/>
                            <img src="images/phone.png" class="icon"> (+91) 98249 80239
                            				
							<!--<form action="#" class="search-form">
								<input type="text" placeholder="Search...">
								<button type="submit"><img src="images/icon-search.png" alt=""></button>
							</form>-->                       
                            
						</div>                        
                    <!--------------->
                    </div>
                    <!-- End Header Navigation -->

   <!--=============== START  navbar menu HERE  ================-->
       <div class="collapse navbar-collapse" id="navbar-menu">
         <div class="container"> 
          <ul class="nav navbar-nav" style="margin-top: 12px;width: 100%;">
            <li class=""><a href="index.php">Home</a></li>
            <li class="">
              <a href="about.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">About <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                           <li><a href="company_profile.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Company Profile</a></li>
                           	<li><a href="history.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">History</a></li>
                           <li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Vision & Mission</a></li>
                           <!--<li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Meet Our Team</a></li>
                           <li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Quality Policy</a></li>
                           <li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Quality Statement</a></li>-->
                           
                   </ul>
            </li>
            
<!-------------------------------===================--====OUR BRANDS-----=====-->
            <li class="">
                <a href="about.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Our Products <b class="caret"></b></a>
                <ul class="dropdown-menu">                
	                <?php	
					$selelect_cat="SELECT * FROM `category`";
                    $exe_cat=mysqli_query($con,$selelect_cat);
                    while($tbl_cat=mysqli_fetch_array($exe_cat))
                    {       
                    ?>               
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;"><?php echo $tbl_cat['name']; ?></a>
                    <ul class="dropdown-menu">
                    <?php	
					$selelect_cat1="SELECT * FROM `subcategory` where `cat_id`=".$tbl_cat['id'];
                    $exe_cat1=mysqli_query($con,$selelect_cat1);
                    while($tbl_cat1=mysqli_fetch_array($exe_cat1))
                    {       
                    ?>   
                       <li><a href="products.php?sub_id=<?php echo $tbl_cat1['id'];?>" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;"><?php echo $tbl_cat1['name'];  ?></a></li>                        
                        <?php } ?>                        
                    </ul>
                  </li>                   
                  <?php } ?>    
                                 
                </ul>
              </li>            <!---------------------===============================---=================------->
            <li class="">
              <a href="about.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">News & Events <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                           <li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Past Events</a></li>
                           <li><a href="#" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Upcoming Events</a></li>  
                           
                   </ul>
            </li>
             <li class=""><a href="#">Awards</a></li>
             <li class=""><a href="certificates.php">Certificates</a></li>
             
           <!-- <li class="">
              <a href="about.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false" >Support<b class="caret"></b></a>
                   <ul class="dropdown-menu">
                           <li><a href="feedback_form.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Feedback</a></li>                      </ul>
            </li> -->  
             <li class=""><a href="feedback_form.php">Feedback</a></li>
             <li class=""><a href="contact_us.php">Contact Us</a></li>         
            <!--<li class="">
              <a href="about.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Contact Us<b class="caret"></b></a>
                   <ul class="dropdown-menu">
                           <!--<li><a href="corporate_add.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Corporate Office</a></li>-->
                           <!--<li><a href="our_branches.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Our Branches</a></li> 
                           <li><a href="our_network.php" style="font-weight: 300;color: rgb(15,117,189);font-family: 'Roboto Condensed', 'Open Sans', sans-serif;">Our Network</a></li> -->		         
                           
                            <!--</ul>-->
            <!---</li>-->
           
           <li style="float: right;padding: 0px !important;"><a href="https://www.facebook.com/standardengineers13/?ti=as" target="_blank"><i class="fa fa-facebook-square" style="font-size: 25px;"></i></a></li>
         </ul>
         
         <!--<div class="social-links navbar-right" style="margin-top:4px !important;">
							<a href="https://www.facebook.com/Lexcruwatertech/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/LexcruWaterTech" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.youtube.com/channel/UCFYXbbvTvONR3xC4FZ66B-g" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/lexcruwatertech/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>-->
         
         <!--Social Links------->
         <!--<div class="social-links navbar-right">
							<a href="https://www.facebook.com/Lexcruwatertech/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/LexcruWaterTech" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.youtube.com/channel/UCFYXbbvTvONR3xC4FZ66B-g" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="https://www.instagram.com/lexcruwatertech/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>-->
         
         <!-------------------->
         
<!--            <ul class="nav navbar-nav navbar-right" style="float: right !important;">
                <a class=" nav navbar-nav navbar-right" href="index.php"><img src="images/JV logo.png" class="logo img-responsive" alt="JV Enterprice"></a>
            </ul>   -->
         </div><!-- /.navbar-collapse -->
      </div> 

    </nav>   
    				
</header> 
			
			