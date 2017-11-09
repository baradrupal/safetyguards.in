<?php include_once 'header.php'; ?>
<style type="text/css">
.hover11 figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover11 figure:hover img {
	opacity: .5;
}

</style>
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/Certificate.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #890009">
			<li>Certificates</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Certificates</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->

				<div class="fullwidth-block greet-section" style="padding-top:30px">
						<div class="container">
					<!--	<small class="section-subtitle">About Us</small>-->							
							 <?php 
							$sql5="select * from `certificates` ";
							$result5=mysqli_query($con,$sql5);
							while($row5=mysqli_fetch_array($result5))  
							{ 
							?>		

							<div class="col-md-6 col-sm-4 col-xs-12">							
							<a class="fancybox hover11" href="admin/upload/<?php echo $row5['image']; ?>" data-fancybox-group="gallery"  class="fancybox-pop"><figure><img src="admin/upload/<?php echo $row5['image']; ?>" alt="Image Not Found"  height="200" width="250" class="img-responsive"/></figure></a>														
							<!--<h3>Certi Best Pump Award  2015-16</h3>-->
							<?php echo $row5['descriptions'] ;?>
							</div>                            
                            
                            <?php } ?>                     
                            
                            			
					<!--
							<div class="col-md-4 col-sm-4 col-xs-12">					
							<a class="fancybox hover11" href="images/awards/Certi Best Membrane Award- 2016-17.jpg" data-fancybox-group="gallery"  class="fancybox-pop" title="Certi Best Membrane Award  2016-17"><figure><img src="images/awards/Certi Best Membrane Award- 2016-17.jpg" alt="Image Not Found"  height="200" width="250" class="img-responsive"/></figure></a>														
							<h3>Certi Best Membrane Award  2016-17</h3>
							<p>BEST MEMBRANE MANUFACTURER 2016-17  at "Water Digest Awards 2017" awarded by Water digest in association with UNESCO and Assocham India</p>
							</div>							
							
							<div class="col-md-4 col-sm-4 col-xs-12">					
							<a class="fancybox hover11" href="images/awards/Certi Best Pump Award-2016-17.jpg" data-fancybox-group="gallery"  class="fancybox-pop" title="Certi Best Pump Award  2016-17"><figure><img src="images/awards/Certi Best Pump Award-2016-17.jpg" alt="Image Not Found"  height="200" width="250" class="img-responsive"/></figure></a>															
							<h3>Certi Best Pump Award  2016-17</h3>
							<p>BEST WATER PUMPS-DOMESTIC 2016-17  at "Water Digest Awards 2017" awarded by Water digest in association with UNESCO and Assocham India</p>
							</div>		
                            -->
                            
                            						
                            <!--<div class="text-center">
							<p>Sollicitudin sit tortor pellentesque. <a href="#">Read more</a></p>
						</div>-->
					</div><!----Container--------->
			
				</div>
<?php include_once 'footer.php'; ?>

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
	</style>
		<!------------------------------------------------------------------------------------------------------------>
				
				