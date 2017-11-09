<?php include_once 'header.php'; ?>
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/lexcru con.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Events</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Past Events</a></li>
			<li class="active">Events</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
				<div class="fullwidth-block greet-section">
				<div class="container">	
				 <?php 
							$eid=$_GET['eid'];
							echo $eid;
							$sql5="select * from `events` where `id`=".$eid;
							$result5=mysqli_query($con,$sql5);
							while($row5=mysqli_fetch_array($result5))  
							{ 
							?>
							<div class="col-md-2">
							<img src="admin/upload/<?php echo $row5['logo']; ?>" width="150" height="150"/>
							</div>				
<!--						<small class="section-subtitle">About Us</small>-->
							<div class="col-md-10">
                            <h3 style="color:#0F75BD"><?php echo $row5['title']; ?></h3>
							<h4><b>Events On:</b>&nbsp;<span style="color:#52BC4D"><?php echo $row5['venue']; ?></span></h4>
							<p style="text-align: justify;"><?php echo $row5['container']; ?></p><br/>                         
							</div>
							<?php } ?>
							<!--<div class="text-center">	
							<p>Sollicitudin sit tortor pellentesque. <a href="#">Read more</a></p>
						</div>-->
				</div><!-- .container -->				
				</div>
<?php include_once 'footer.php'; ?>
				
				