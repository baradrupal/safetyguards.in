<?php include_once 'header.php'; ?>
<style type="">
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ddd;
    margin: 1em 0;
    padding: 0; 
}
</style>
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/Event.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Past Events</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Past Events</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
				<div class="fullwidth-block greet-section">
					<div class="container">				
						<!--<small class="section-subtitle">About Us</small>-->
						   <?php 
							$sql5="select * from `events`";
							$result5=mysqli_query($con,$sql5);
							while($row5=mysqli_fetch_array($result5))  
							{ 
							?>		
							<div class="row">
							<div class="col-md-2">
							<img src="admin/upload/<?php echo $row5['logo']; ?>" />
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-9 col-sm-6">
							<h3 style="color:#0F75BD"><?php echo $row5['title']; ?></h3>
							<h4 style="color:#41B856"><i class="fa fa-calendar" aria-hidden="true" style="font-size:18px;color:#39B951">&nbsp;&nbsp;</i><?php echo $row5['date']; ?></h4>
							<p><i class="fa fa-map-marker" style="font-size:25px;color:grey"></i>&nbsp;&nbsp;<?php echo $row5['venue']; ?></p>
							<p>Events Photo <b>:</b>&nbsp;
							<?php 
							$sql4="select * from `events_photo` where `e_id`=".$row5['id'];
							$result4=mysqli_query($con,$sql4);
							while($row4=mysqli_fetch_array($result4))  
							{ 
							?>
							<a class="fancybox" href="admin/upload/<?php echo $row4['image']; ?>" data-fancybox-group="gallery" alt="image not found"><?php } ?><b>Click Here</b></a></p>
							<a href="events_details.php?eid=<?php echo $row4['id']; ?>" style="text-decoration:underline;"><b>Read More</b></a>
							</div>
							</div>
							<hr>
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
				
				