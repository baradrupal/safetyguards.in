<?php include_once 'header.php'; ?>
<!-- .site-header -->     
<style type="text/css">
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
.option-table td{ border-bottom:1px solid #eeeeee;}
@media(max-width:768px){
.skdslider{position:relative !important;top:51.5px !important;}}
div .shadow{
-webkit-box-shadow:0px 1px 1px #de1dde;
 -moz-box-shadow:0px 1px 1px #de1dde;
  box-shadow: 9px 4px 4px;
  }  
  .offer img {   
    width: 100%;
    height: 310px !important;
  }
  .olul{margin-left:17px;}	
  .img-hvr
		   {
			
			padding: 3px;
	    	border: 1px solid #ddd;
			margin:11px 0px;
			}
			.img-hvr:hover
		    {
	    	border: 1px solid royalblue;
			box-shadow:0px 5px 20px #aaa;
			}
			
@media(max-width:768px)
{
.news-list .col-md-6
  {
         width: calc(100% - 20px) !important;
  }
}			
</style>


<!---===========-----SLIDER----------===========-->
<div class="skdslider">
<ul id="demo1" class="slides">
<li>
<img src="images/banners/main_banner/01.jpg" class="img-responsive" />
<!--Slider Description example-->
</li>
<li><img src="images/banners/main_banner/02.jpg" />	 
</li>
<li><img src="images/banners/main_banner/03.jpg" />
<!--NO Description Here-->
</li>
</li>
</li>
</ul>
</div>
<!----------=================================---->

    <!--===	old slider---====>          
                        
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
 <!-- <div class="overlay"></div>-->

  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
	<li data-target="#bs-carousel" data-slide-to="2"></li>
	<li data-target="#bs-carousel" data-slide-to="3"></li>
<!--    <li data-target="#bs-carousel" data-slide-to="2"></li>-->
  <!--</ol>-->
  
  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner">
    <div class="item slides active">
        <img src="images/01.jpg" class="img-responsive">
<!--      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>-->
    <!--</div>
   
    <div class="item slides">
      <div class="slide-3"><img src="images/02.jpg" class="img-responsive"></div>
<!--      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>-->
    <!--</div>
	
	<div class="item slides">
      <div class="slide-4"><img src="images/03.jpg" class="img-responsive"></div>
<!--      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>-->
   <!--- </div>
	
	
	<div class="item slides">
      <div class="slide-4"><img src="images/04.jpg" class="img-responsive"></div>
<!--      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>-->
    <!--</div>
  </div> 
</div>-->
  <!--===	old slider---====>                      
<style>
 
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #ACADAF !important;
    border-color: #ACADAF !important;
    opacity: .7;
}    
    
    /*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    
}
.fade-carousel .carousel-inner .item {
    
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #1B4999;
    border-color: #1B4999;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
  background-color:#00A85A !important;
  border-color:#00A85A !important;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
/*.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}*/

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
                        </style>
                        
                        <!--===	old slider---====>            
                        
			 <!-- .hero-slider -->
			<main class="main-content">
				<div class="fullwidth-block greet-section" style="background: #f1f1f1;">
					<div class="container">
						<h2 class="section-title" style="margin-bottom: 25px !important;">Welcome to Standard Engineers</h2>
						<!--						<small class="section-subtitle">About Us</small>-->
                        
                        						<?php 
												/*$selelect_cat="SELECT * FROM  about_us";
												$exe_c=mysqli_query($con,$selelect_cat);					
												while($t1=mysqli_fetch_array($exe_c))
												{*/
												?>
												<!--<p style="text-align: justify;"><?php echo html_entity_decode(substr($t1['descriprion'],0,600))."......"; ?>.<a href="company_profile.php" style="font-weight:500;text-decoration:underline">&nbsp;Read More</a></p>-->		
<p style="text-align: justify;" class="p-abt">We <strong>“Standard Engineers ISO 9001:2015  OHSAS 18001 : 2007”</strong> a <strong>Sole Proprietorship</strong> company that was established in the year <strong>1972</strong> at <strong> Ahmedabad (Gujarat, India),</strong>  have gained immense success in the market by <strong>manufacturing </strong>and <strong>supplying </strong>a remarkable array of <strong>Cylinder Safety Guards, Cylinder Accessories, Cylinder Manifolds</strong> and <strong>Cylinder Handling Equipment.</strong>Offered products are manufactured using best grade raw material and cutting-edge technology in accordance with industry set quality standards. We are managed under the supervision of, <strong>“Mr. Rajan Bhutani” (CEO),</strong> and have gained huge clientele all across the nation.</p>
                                                
                            <?php //} ?>												
							<div class="row" style="margin-top: 5%;">
							 <div class="col-md-4">
								<div class="feature">
								<a href="#"><center><img src="images/Awards 01.jpg" class="img-responsive" style="max-width: 30%;"></center></a>
                                 <a href="#"><h3 class="feature-title">AWARDS</h3></a>
                            </div>
							</div>
							<div class="col-md-4">
								<div class="feature">                                                                    <a href="certificates.php"><center><img src="images/CERTIFICATES 01.jpg" class="img-responsive" style="max-width: 30%;"></center></a>
									<a href="certificates.php"><h3 class="feature-title">CERTIFICATES</h3>	</a>								
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">                                                                    <center><img src="images/ASSOCIATES-MEMBERS 01.jpg" class="img-responsive" style="max-width: 30%;"></center>
									<h3 class="feature-title">ASSOCIATES-MEMBERS</h3>									
								</div>
							</div>
							
						</div> <!-- .row -->

<!--						<div class="text-center">
							<p>Sollicitudin sit tortor pellentesque. <a href="#">Read more</a></p>
						</div>-->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->           
                                
<!--<div class="fullwidth-block">
					<div class="container">						
						<div class="row news-list">
							<div class="col-md-7">
								<div class="news">
                                <h1>Welcome to Standard Engineers....</h1>							
								<p class="entry-title" style="text-align: justify;"><p>We are engaged in offering Safety Valve Guards <br/> <br/> 
                        which are used in protecting High Pressure Cylinder Valves. <br><br/> 
                        A Valve guard helps in avoiding accidents. <br><br/>
                        Cylinder Valve needs protection it is a must. <br><br/>
                        We take care of your safety by providing safe product 
                         </p></p>
							</div>
							</div>
							<div class="col-md-5">
								<div class="news">	
                                <h1>News &amp; Events</h1>									
                                        <h3 class="entry-title" style="text-align: justify;"><marquee behavior="scroll" direction="up" scrolldelay="150"><p style="color:#bb0407;">Valve guard is an important <br/> accessory of cylinder as per clause 7.1 of IS 7285-1988.<br/> It also statutory requirement under rule 20 Sch VI(4) of indian Gas Cylinder Rules to provide valve protection Cap/Guard to each cylinder</p></marquee></h3>
								</div>
							</div>							
						</div> <!-- .row -->
					<!--</div> <!-- .container -->
				<!--</div>-->
                
                 <!-- .latest-news-section -->                               
                
          <div class="fullwidth-block">
          <div class="container">
          <h2 class="section-title">Secure Me Cap Me & Ensure Safety</h2>      						
						<div class="row news-list">
							
							<div class="col-md-6">
								<div class="news">	
                                <h2>Advantages of Safety Guards</h2>									
                             <ul class="olul">
                            <li>Complete SAFETY ensured</li>
                            <li>Compact Design</li>
                            <li>Easily operational while filling and usage Comply with statutory requirement</li>
                            <li>Permanent solution for Safety</li>
                            <li>Drop test conducted</li>
                            <li> Quality assured</li>	
                        </ul>
								</div>
							</div>	
              <div class="col-md-6">
								<div class="news">	
                                <h2>Salient features & Applications</h2>									
                      		<ul class="olul">
                            <li>Robust Design</li>
                            <li>Quality product</li>
                            <li>Economical</li>
                            <li>User Friendly</li>
                            <li>Permanent solution for Safety </li>
                            <li> All High Pressure Gas Cylinders</li>
                            <li>Medical Gases</li>
                            <li>Special Gases –</li>
                        	</ul>
								</div>
							</div>						
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>
                              
                <br/><br/>
                <div class="fullwidth-block" data-bg-color="#f1f1f1">
					<div class="container">
						<h2 class="section-title">Our Products</h2>
<!--						<small class="section-subtitle">Phasellus vel felis in nulla mollis posuere eget rutrum eros</small>-->

						<div class="row">							
                            <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/Parallel Model Heavy.png">
                    <img class="img-responsive" alt="" src="images/products/Parallel Model Heavy.png" />
                     <!-- text-right / end -->
                     <div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>Parallel Model Heavy
                    </small>
                    </div>
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                            <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/DA Parallel Model.png">
                    <img class="img-responsive" alt="" src="images/products/DA Parallel Model.png" />
<div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>DA Parallel Model
                    </small>
                    </div>
                     <!-- text-right / end -->
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                            <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/Parallel Model Light.png">
                    <img class="img-responsive" alt="" src="images/products/Parallel Model Light.png" />
                     <!-- text-right / end -->
                     <div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>Parallel Model Light
                    </small>
                    </div>
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                             <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/Parallel Model Light 1.png">
                    <img class="img-responsive" alt="" src="images/products/Parallel Model Light 1.png" />
                     <!-- text-right / end -->
                      <div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>Parallel Model Light 1
                    </small>
                    </div>
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                            <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/DA Parallel Model 1.png">
                    <img class="img-responsive" alt="" src="images/products/DA Parallel Model 1.png" />
                     <!-- text-right / end -->
                     <div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>DA Parallel Model - 1
                    </small>
                    </div>
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                           <div class="col-md-4">
							<div class="offer caption-top">
                            <a class="thumbnail fancybox" rel="ligthbox" href="images/products/Parallel Model Heavy1.png">
                    <img class="img-responsive" alt="" src="images/products/Parallel Model Heavy1.png" />
                     <!-- text-right / end -->
                            <div class='text-center' style="font-size:20px; background:#eee;border:#eee"">
                        <small class='text-muted'>Parallel Model Heavy1
                    </small>
                    </div>
                </a>
                                    
<!--									<div class="caption">
										<h3 class="offer-title">Massa augue</h3>
										<small>Conubia nostra per inceptos</small>
									</div>-->
								</div>
							</div>
                            
							 <!-- .col-md-8 -->
						</div> <!-- .row -->

					</div> <!-- .container -->
				</div>
                
                                
 
                 <!-- .offer-section -->

<!--				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Latest news</h2>
						<div class="row news-list">
							<div class="col-md-4">
								<div class="news">
									<figure><img src="dummy/featured-image-1.jpg" alt=""></figure>
									<div class="date"><img src="images/icon-calendar.png" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<figure><img src="dummy/featured-image-2.jpg" alt=""></figure>
									<div class="date"><img src="images/icon-calendar.png" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<figure><img src="dummy/featured-image-3.jpg" alt=""></figure>
									<div class="date"><img src="images/icon-calendar.png" alt="">03/09/2014</div>
									<h2 class="entry-title"><a href="#">Donec laoreet non nec aliquam pellentesque interdum</a></h2>
								</div>
							</div>
						</div>  .row 
					</div>  .container 
				</div>  .latest-news-section -->
				
             <!--   <h2 class="section-title">What Our client say</h2>
				<div class="fullwidth-block" data-bg-color="#0f75bd">
					<div class="container">
						<div class="testimonial-slider">
							<ul class="slides">
								<li>
									<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quod explicabo optio quia ex odit, sequi harum voluptatibus autem. Nam autem corporis deleniti fugiat omnis itaque, quis laudantium dolor facere.<cite>John Smith</cite></blockquote>
								</li>
								<li>
									<blockquote>At doloremque, itaque molestias neque nesciunt placeat aspernatur veniam fugit enim, dolor, repudiandae a. Laborum optio dolorum qui maxime doloribus eligendi in enim minima quo? Quis tenetur eos, libero exercitationem.<cite>John Smith</cite></blockquote>
								</li>
								<li>
									<blockquote>Ipsam nesciunt velit voluptatem? Voluptas amet, porro eaque asperiores magni rerum vitae nulla inventore, numquam facilis doloribus placeat iure suscipit adipisci dolores modi saepe deserunt nisi. Nam, illum aperiam velit.<cite>John Smith</cite></blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div>-->
                
                <!----==------SLIDER----============----------->
                <style>
				 .carousel-control {
				  padding-top:0%;
				  width:1%;
				  font-size:71px !important;
					}
					.item {
					display: none;
					position: relative;
					.transition(.3s ease-in-out left);
				}
				
				</style>
                                <br/><br/>
    <!--<div class="container" style="padding-bottom: 45px;">
    <div class="col-md-12">
    <h2 class="section-title" style="margin-bottom: 7px !important;">Our Clients</h2><br/>

        <div class="well">
            <div id="myCarousel" class="carousel slide">-->
                
                <!-- Carousel items -->
                <!--<div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/01.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/02.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/03.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/04.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>-->
                    <!--/item-->
                 <!--   <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/05.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/06.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/07.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/08.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>-->
                    <!--/item-->
                   <!-- <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/09.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/10.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/11.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/12.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div> -->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/13.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/14.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/15.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/16.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/17.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/18.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/19.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/20.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/21.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/22.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/23.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/24.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/25.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/26.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/27.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/28.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>-->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/29.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/30.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/31.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/32.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div> -->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/33.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/34.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/35.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/36.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div> -->
                        <!--/row-->
                   <!-- </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/37.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/38.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/39.png" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="images/clients_logo/40.png" alt="Image" class="img-responsive"></a>
                            </div>
                        </div> -->
                        <!--/row-->
                   <!-- </div> -->
                    <!--/item-->
               <!-- </div>-->
                <!--/carousel-inner--> <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div> -->
            <!--/myCarousel-->
        <!--</div> -->
        <!--/well-->
    <!--</div>
</div>-->

<script>

$(document).ready(function() {
	$('#myCarousel').carousel({
	interval:2000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});    
    
});

</script>
                <!-------------================----->
                
                <!-- .fullwidth-block -->

				<!-- .fullwidth-block -->
                
                
                <!--=====OUR cLIENTS=======-------->                
				

                <!---------------------------------->				
			</main>
			
<?php include_once 'footer.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="skdslider/src/skdslider.min.js"></script>
<link href="skdslider/src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:3500, animationSpeed: 1500,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<!---------------------------FANCY BOX------------------------------------------------------------------------>	
	<script type="text/javascript" src="fancybox-2.1.7/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox-2.1.7/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			$('.fancybox').fancybox();

		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>		<!------------------------------------------------------------------------------------------------------------>



        