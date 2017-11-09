<?php include_once 'header.php'; ?>
<!-- References: https://github.com/fancyapps/fancyBox -->
<main class="main-content">
<div class="inner-banner">
	<img src="images/banners/inner_banner/Gallry.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Gallery</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Gallery</li> 
			</ul>
	</div>
</div>
<br/>

<div class="container">
	<div class="row">
		<div class='list-group gallery'>
             <!-- col-6 / end -->
             <!-- col-6 / end -->
            <!-- col-6 / end -->
           
				            <?php 
							$selelect_data="SELECT * FROM  gallery";
                    		$exe_data=mysqli_query($con,$selelect_data);                    
                    		while($tbl_data=mysqli_fetch_array($exe_data))
							{       
							?> 
						
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="admin/upload/<?php echo $tbl_data['image']; ?>">
                    <img class="img-responsive" alt="" src="admin/upload/<?php echo $tbl_data['image']; ?>" />
            </a>
            </div>
            <?php } ?>
            
            	
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->
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
