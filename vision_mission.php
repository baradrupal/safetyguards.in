<?php include_once 'header.php'; ?>
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/lexcru about.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #890009">
			<li>Vision & Mission</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Vision & Mission</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
				<div class="fullwidth-block greet-section">                    
                    <?php 
    			    $selelect_data="SELECT * FROM  `vision_mission` ";
                    $exe_data=mysqli_query($con,$selelect_data);                    
                    while($tbl_data=mysqli_fetch_array($exe_data))
                    {       
                    ?>
					<div class="container">
                    <?php echo $tbl_data['descriprion']; ?>
					</div> 
                    <?php } ?>
					
					<!-- .container -->
					<!------------------------->
				</div>
<?php include_once 'footer.php'; ?>
				
				