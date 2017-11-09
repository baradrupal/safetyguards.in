<?php include_once 'header.php'; ?>
<link href="skdslider/shortcodes/shortcodes.css" rel="stylesheet"/>
<main class="main-content">
<div class="inner-banner">
<img src="images/banners/inner_banner/Download.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">

	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Downloads</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Downloads </li> 
			</ul>
	</div>
    
</div>
<!--/breadcrumbs-->
				<div class="fullwidth-block greet-section">
					<!--<div class="container">						
<!--						<small class="section-subtitle">About Us</small>-->
							<!--<div class="col-md-4 col-sm-4 com-xs-12">
							<a href="Download/LEXPURE.pdf"  target="_blank" style="font-size:25px;">Lexpure &nbsp;&nbsp;&nbsp;<img src="images/Excel 1.png" width="50"/></a>
							</div>-->
							
							<!--<div class="col-md-4 col-sm-4 com-xs-4">
							<a href="Download/CRUZE.pdf"  target="_blank" style="font-size:25px;">Cruze &nbsp;&nbsp;&nbsp;<img src="images/Excel 1.png" width="50"/></a>
							</div>-->
							
							<!--<div class="col-md-4 col-sm-4 com-xs-12">
							<a href="Download/LCM INDUSTRIAL CATALOUGE.pdf"  target="_blank" style="font-size:25px;">LCM &nbsp;&nbsp;&nbsp;<img src="images/Excel 1.png" width="50"/></a>
							</div>-->                            
						<!--</div>-->
                        <div class="container">
                        <div>           
              <div class="alert_box box-blue">
               
                <table border="0" align="center" cellpadding="0" cellspacing="0" class="table-blue textcenter">
                  <thead>
                    <tr>
                      <td height="25" colspan="2" align="center" valign="middle"><strong>Name</strong></td>
                      <td height="25" colspan="2" align="center" valign="middle"><strong>Brochure</strong></td>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	  <?php 
							$selelect_data="SELECT * FROM  download";
                    		$exe_data=mysqli_query($con,$selelect_data);                    
                    		while($tbl_data=mysqli_fetch_array($exe_data))
							{       
							?>
                  
                  	<tr>
                           
                      <td height="25" colspan="2" align="center" valign="middle"><strong><?php echo $tbl_data['name'];?></strong></td>
<td height="25" colspan="2" align="center" valign="middle">
<a href="admin/upload/brochure/<?php echo $tbl_data['pdf']; ?>" target="_blank"><img src="admin/upload/brochure/<?php echo $tbl_data['pdf_icon']; ?>" width="45" height="45"></a>
                           </td>
                      
                    </tr>
                    
                    <?php } ?>
                    
                   <!-- 
                    <tr>
                           
                      <td height="25" colspan="2" align="center" valign="middle"><strong>Cruze</strong></td>
                      <td height="25" colspan="2" align="center" valign="middle">
                                                     <a target="_blank" href="Download/CRUZE.pdf"><img src="images/download.png" width="45" height="45"></a>
                                                 </td>
                      
                    </tr>
                    <tr>
                           
                      <td height="25" colspan="2" align="center" valign="middle"><strong>LCM</strong></td>
                      <td height="25" colspan="2" align="center" valign="middle">
                                                <a href="Download/LCM INDUSTRIAL CATALOUGE.pdf" target="_blank"><img src="images/download.png" width="45" height="45"></a>
                                              </td>
                      
                    </tr>-->
                                      
                                     
                  </tbody>
                </table>
              </div>
            </div><hr>
            <br/><br/>
             </div>
					</div> <!-- .container -->				
				</div>
<?php include_once 'footer.php'; ?>
				
				