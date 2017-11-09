<?php include_once 'header.php'; 
if(isset($_POST['submit']))
{
    $first_name=check_input($_POST['first_name']); 
    $last_name=check_input($_POST['last_name']);
	$email=check_input($_POST['email']); 
    $phone=check_input($_POST['phone']);
	$address=check_input($_POST['address']);
    $comment=check_input($_POST['comment']);
		
$contact="INSERT INTO `contact`(`f_name`, `l_name`, `email`, `phone`, `address`, `comments`) VALUES ('".$first_name."','".$last_name."','".$email."','".$phone."','".$address."','".$comment."')";
mysqli_query($con,$contact);
 
$to = "sales@lexcru.com";
$subject = "Contact Inquiry";

$message ="
<body><div style= height:800px; width:99%;margin-top:50px;>
	
   <table height=200px width=40%>
   <tr><td>Name:</td><td>$first_name</td></tr>  
   <tr><td>Phone:</td><td>$phone</td></tr>
   <tr><td>E-Mail:</td><td>$email</td></tr>
   <tr><td>Services:</td><td>$address</td></tr>
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
</style>
<div class="inner-banner">
	<img src="images/banners/inner_banner/lexcru con.jpg" class="img-responsive" alt="" width="100%">
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #890009">
			<li style="padding-left: 10px;">Contact Us</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Contact Us</li> 
			</ul>
	</div>
</div>
<!--/breadcrumbs-->
<br/>
<div class="container">		
<div class="col-md-4">
<h2 style="color:#84A333;">Standard Engineers</h2>
<i class="fa fa-home" aria-hidden="true" style="color:#87A734">&nbsp;&nbsp;<strong>Office Address:</strong></i><br/><br/>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M/s Standard Engineers,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bunglow 264,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Opp Gurukul Swaminarayan Mandir,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B/h Shreeji Complex,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nr Dr Abhay Vasavada Eye Clinic ,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drive-In Road, Ahmedabad-380054<br/>
</span>	
<br/>
<i class="fa fa-phone" aria-hidden="true" style="color:#87A734">&nbsp;&nbsp;<strong>Phone:</strong></i><br/><br/>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;079-27490657 <br/>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02717-650166<br/>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9824047764 <br/>
</span>
<br/>
<i class="fa fa-home" aria-hidden="true" style="color:#87A734">&nbsp;&nbsp;<strong>Office Address:</strong></i><br/><br/>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M/s Standard Engineers,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13, Mahalaxmi Industrial Estate,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iyava Goon, Taluka Sanand-382 170,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahmedabad-382 170,<br/>
</span>	
<br/>
<span>
<i class="fa fa-envelope" aria-hidden="true" style="color:#87A734">&nbsp;&nbsp;<strong>Email:</strong></i><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:Safety_Guards@rediffmail.com">Safety_Guards@rediffmail.com </a><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:rajan@safetyguards.in">rajan@safetyguards.in </a><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:safetyguards@gmail.com">safetyguards@gmail.com</a><br/>
</span>
<br/><br/><br/>
</div>
<BR/>
<!------------Form------------------------------------------------------------>
<div class="col-md-8">
<form class="well form-horizontal" action="" method="post"  id="contact_form">
<fieldset>
<!-- Form Name -->
<legend>Quick Contact !</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required pattern="[a-zA-Z\s]+" oninvalid="setCustomValidity('Please Enter First Name ')" onChange="try{setCustomValidity('')}catch(e){}">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required pattern="[a-zA-Z\s]+" oninvalid="setCustomValidity('Please Enter Last Name ')" onChange="try{setCustomValidity('')}catch(e){}">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
	<label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	<input type="email" name="email" placeholder="E-Mail Address" class="form-control"  required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,4})+$" oninvalid="setCustomValidity('Please Enter a Valid Email Address ')" onChange="try{setCustomValidity('')}catch(e){}" type="text" required="">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	<input name="phone" placeholder="(845)555-1212" class="form-control" type="text" minlength="10" maxlength="16" placeholder="Phone" required pattern="^[0-9]+$" oninvalid="setCustomValidity('Please Enter Mobile Number ')" onChange="try{setCustomValidity('')}catch(e){}">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	<input name="address" placeholder="Address" class="form-control" type="text" required="">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Subject</label>
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Subject" required=""></textarea>
  </div>
 </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-8">
    <button type="submit"  name="submit">Send <span class="glyphicon glyphicon-send"></span></button>
	<button type="reset" value="Reset">Reset</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
<!-------------------------------------------Form End--------------------------------------------------------------------------->
<!-- /.container -->
	<style>#success_message{ display: none;}</style>
	
	<?php include_once 'footer.php'; ?>
	<!-----------------Contact For Js------------------->
	<script src="js/contact_validation.js"></script>
	<!--------------------End Contact Form Js------------------->
	