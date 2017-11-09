<?php include_once 'header.php'; ?>
<style type="text/css">

.hover12 figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover12 figure:hover img {
	opacity: .5;
}
h3{margin: 15px 0 20px !important;}

</style>
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/Award.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #890009">
			<li>Awards</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li> 
			<li class="active">Awards</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
				<div class="fullwidth-block greet-section">
					<div class="container">
					<!--	<small class="section-subtitle">About Us</small>-->							
							<?php 
							$selelect_data="SELECT * FROM  awards";
                    		$exe_data=mysqli_query($con,$selelect_data);                    
                    		while($tbl_data=mysqli_fetch_array($exe_data))
							{       
							?> 
						
							<div class="col-md-4 col-sm-4 col-xs-12">							
							<a class="fancybox hover12" href="admin/upload/<?php echo $tbl_data['image']; ?>" data-fancybox-group="gallery"  class="fancybox-pop" title="The Best Water Pumps-Doemstic  2015-16"><figure><img src="admin/upload/<?php echo $tbl_data['image']; ?>" alt="Image Not Found"  height="200" width="250" class="img-responsive"/></figure></a>														
							
							<p style="text-align:justify;"><?php echo $tbl_data['descriptions']; ?></p>
							</div>		
                            
                            <?php } ?>		
					
							
							
							<!--<div class="text-center">
							<p>Sollicitudin sit tortor pellentesque. <a href="#">Read more</a></p>
						</div>-->
					</div> <!-- .container -->
			
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
				
				