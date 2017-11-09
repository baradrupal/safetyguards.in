<?php include_once 'header.php'; 
if(isset($_POST['submit']))
{
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $services=$_POST['services'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];
	
 mysql_query("INSERT INTO `contact_inquiry`(`name`, `email`, `services`, `phone_no`, `message`) VALUES ('$name','$email','$services','$phone','$query')");   
 
$to = "webservices.intelliworkz@gmail.com";
$subject = "Contact Inquiry";

$message ="
<body><div style= height:800px; width:99%;margin-top:50px;>
	
	<table height=200px width=40%>

   <tr><td>Name:</td><td>$name</td></tr> 
  
   <tr><td>Phone:</td><td>$phone</td></tr>
    <tr><td>E-Mail:</td><td>$email</td></tr>
        <tr><td>Services:</td><td>$services</td></tr>
    <tr><td>message:</td><td>$query</td></tr>
    </table></div></body>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <webservices.intelliworkz@gmail.com>' . "\r\n";
//$headers .= 'Cc: info@delightholidays.co.in' . "\r\n";
mail($to,$subject,$message,$headers);	
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
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Contact Us</li>
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
<div class="col-md-6">
<h2 style="color:#0F75BD;">Corporate Address</h2>
<h5>LEXCRU WATER TECH PVT. LTD.</h5>

<p>Plot No. 4 ,Road No. 1,<br/>
Kathwada G.I.D.C.,Kathwada,<br/>
Ahmedabad - 382430, Gujarat, INDIA</p>	
</div><h2 style="color:#0F75BD;">Our Branches</h2>
<div class="col-md-2" style="position:relative;right:10px !important;">
<b>Branch Name</b>
<hr>
Ahmedabad<br/>
Rajkot<br/>
Surat<br/>
Surat<br/>
Pune<br/>
Baroda<br/>
North<br/>
South<br/>
Jaipur<br/>
Indor(MP)<br/>
Lucknow(UP)<br/>
Bangalore<br/>
Chattisgarh<br/>
Kolkata<br/>
Industrail<br/>

</div>
<div class="col-md-2">
<b>Person Name</b>
<hr>
Mr. Jayanti Vasani<br/>
Mr. Sanjay Gajera<br/>
Mr. Rakesh Godani<br/>
Mr. Anil Bafna<br/>
Mr. Anil Chordia<br/>
Mr. Naresh Thummar<br/>
Mr. Naredra Parmar<br/>
Mr. Nikhil Mehta<br/>
Mr. Dharmendra Arora<br/>
Mr. Kaushik Vegda	<br/>
Mr. Chirag Patni<br/>
Mr. Darpan Bafna<br/>
Mr. Sumit Suhagiya<br/>
Mr. Hardik Rokad<br/>
Mr. Sharad Kumar<br/>
</div>
<div class="col-md-2">
<b>Phone</b>
<hr>
9328286966<br/>
9979262173<br/>
8758592227<br/>
9624001666<br/>
8980277398<br/>
9428893588<br/>
9624007111<br/>
9624007333<br/>
8742008111<br/>
9584024777<br/>
9624517111<br/>
9624015153<br/>
9687219111<br/>
9687647111<br/>
9624307111<br/>

</div>
</div>
<BR/>
<!------------Form------------------------------------------------------------>
<div class="container">
<div class="col-md-6">
<form class="well form-horizontal" action=" " method="post"  id="contact_form">
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
	<input name="email" placeholder="E-Mail Address" class="form-control"  required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,4})+$" oninvalid="setCustomValidity('Please Enter a Valid Email Address ')" onChange="try{setCustomValidity('')}catch(e){}" type="text" required="">
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
    <button type="submit" name="submit">Send <span class="glyphicon glyphicon-send"></span></button>
	<button type="reset" value="Reset">Reset</button>
  </div>
</div>

</fieldset>
</form>
</div>
<!-------------------------------------------Form End--------------------------------------------------------------------------->
<!----------Map----------------------------------------------------------------------------------------------------------------->
<div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.9842913444713!2d72.52796351454589!3d23.024348984952177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84cfc5e28b97%3A0x46778bc90aeeb443!2sLEXCRU+WATER+TECH+PRIVATE+LIMITED!5e0!3m2!1sen!2sin!4v1496138020605" width="550" height="470" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<!------------------------------------------------------------------------------------------------------------------------------->
</div>
<!-- /.container -->
	<style>#success_message{ display: none;}</style>
	
	<?php include_once 'footer.php'; ?>
	<!-----------------Contact For Js------------------->
	<script src="js/contact_validation.js"></script>
	<!--------------------End Contact Form Js------------------->
	