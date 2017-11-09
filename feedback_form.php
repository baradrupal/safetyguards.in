<?php include_once 'header.php'; ?>
<?php include_once 'header.php'; 
if(isset($_POST['submit']))
{
    $first_name=check_input($_POST['first_name']); 
	$phone=check_input($_POST['mobile']);    
	$email=check_input($_POST['email']);     	
    $comment=$_POST['comment'];
	$newname="";
                        if($_FILES['images']['error']==0)
						{
							$filename = $_FILES['images']['name'];
							$ext = substr($filename, strrpos($filename, '.') + 1);
							if (($ext == "jpg") || ($ext == "png") || ($ext == "JPG")|| ($ext == "PNG")|| ($ext == "gif")|| ($ext == "JPEG")) 
								{ 
								$newname = time().$filename;
								move_uploaded_file($_FILES["images"]["tmp_name"],"admin/upload/".$newname);
								//$hex_string = base64_encode($newname);
								}

						}
						
		
$contact="INSERT INTO `feedback`(`f_name`,`phone`,`email`,`image`,`comments`) VALUES ('".$first_name."','".$phone."','".$email."','".$newname."','".$comment."')";
mysqli_query($con,$contact);
 
$to = "sales@lexcru.com";
$subject = "Contact Inquiry";

$message ="
<body><div style= height:800px; width:99%;margin-top:50px;>
	
   <table height=200px width=40%>
   <tr><td>Name:</td><td>$first_name</td></tr>  
   <tr><td>Phone:</td><td>$phone</td></tr>
   <tr><td>E-Mail:</td><td>$email</td></tr>  
   <tr><td>message:</td><td>$comment</td></tr>
   </table></div></body>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <sales@lexcru.com>' . "\r\n";
$headers .= 'Cc:sales@lexcru.com' . "\r\n";
@mail($to,$subject,$message,$headers);	
} 
?>
<style>
.well{background:#fbfbfb !important;}
.input-sm {height: 40px !important;}
</style>

<div class="inner-banner">
	<img src="images/banners/inner_banner/Feedback.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--<div class="inner-banner">
	<img src="images/Product-Banner.jpg" class="img-responsive" alt="">
</div>-->
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #890009">
			<li>Customer Feedback Form</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Customer Feedback Form</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
<br/>
<!------------Form------------------------------------------------------------>
   <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4" style="width: 80%; margin: 0 10.33% !important; text-align: center">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="letter-spacing: -0.2px !important;">Feedback Form</h3>
					</div>
					<div class="panel-body">
                       <form role="form" method="post" enctype="multipart/form-data">
			    			<div class="row">
							<?php // $res=mysql_query("select `comp_id` from `complaints_form` ");
							   // $count=mysql_num_rows($res);{
								 //   $str="00";
								   // $count1=$count+1;
									//$str1=$str.$count1;
																   
								?>                                                   
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Customer Name" required="">
			    					</div>
			    				</div>
                                <?php  //} ?> 
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile" value="<?php //echo date("Y-m-d");?>"  style="color:#086C73" mailength="10" maxlength="12" required="">
			    					</div>                                                            
			    				</div>
			    			</div>
			    			<div class="row">			    				
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,4})+$" oninvalid="setCustomValidity('Please Enter a Valid Email Address ')" onChange="try{setCustomValidity('')}catch(e){}" type="text" required="">
			    					</div>                                                            
			    				</div>
								<div class='col-sm-6'>
								<div class="form-group">
									<input type="file" name="images" id="file" class="form-control input-sm">
								</div>												
								</div>
			    			</div>                         						   
							<div class="row">
							<div class='col-sm-12'>
							<div class="form-group">
								<textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Comments"></textarea>
							</div>
							</div>	
						</div>							
								<input type="submit" value="Submit" class="btn btn-info btn-block" style="margin: auto;" name="submit">		    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
<!-- /.container -->
	<style>#success_message{ display: none;}</style>
	
	<?php include_once 'footer.php'; ?>
	<!-----------------Contact For Js------------------->
	<script src="js/contact_validation.js"></script>
	<!--------------------End Contact Form Js------------------->
	


























