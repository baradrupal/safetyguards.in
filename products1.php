<?php include_once 'header.php'; ?>
<!-- References: https://github.com/fancyapps/fancyBox -->
<main class="main-content">
<div class="inner-banner">
<?php 
					if(isset($_GET['sub_id']))
					{					
					$id=$_GET['sub_id'];
					$selelect_cat="SELECT * FROM subcategory where id='".$id."'";

					$exe_c=mysqli_query($con,$selelect_cat);
					
					while($t1=mysqli_fetch_array($exe_c))
					{
						$b1=$t1['cat_id'];
						
						$ban="SELECT * FROM category WHERE id='".$b1."'";
						$exe_ban=mysqli_query($con,$ban);
						while($b=mysqli_fetch_array($exe_ban))
						{
                    ?> 
	<img src="admin/upload/<?php echo base64_decode($b['banner']); ?>" class="img-responsive" alt="" width="100%">
    <?php } } }?>
</div>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
			<ul class="pull-left breadcrumb" style="font-size:29px; font-weight: bold; color: #001F61">
			<li>Products</li>
			</ul>
			<ul class="pull-right breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Products</li> 
			</ul>
	</div>
</div>
<br/>






<!--============= Modal============= -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="font-size:43px !important">&times;</button>
     <h4 class="modal-title" style="text-align: center;font-size: 25px;color:#0F75BD ;font-weight:600">Product Inquiry</h4>
      </div>
      <div class="modal-body">
		<!----==MODAL BODY FORM=====--->
        <form class="well form-horizontal" action="" method="post"  id="contact_form">
<!--<fieldset>-->
<!-- Form Name -->
<!--<legend>Quick Contact !</legend>-->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Product Name</label>  
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="Product Name" class="form-control"  type="text" required pattern="[a-zA-Z\s]+" oninvalid="setCustomValidity('Please Enter Product Name ')" onChange="try{setCustomValidity('')}catch(e){}">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Name</label> 
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Name" class="form-control"  type="text" required pattern="[a-zA-Z\s]+" oninvalid="setCustomValidity('Please Enter Name ')" onChange="try{setCustomValidity('')}catch(e){}">
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
<!--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>-->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-8">
    <button type="submit"  name="submit">Send <span class="glyphicon glyphicon-send"></span></button>
	<button type="reset" value="Reset">Reset</button>
  </div>
</div>

<!--</fieldset>-->
</form>
        <!-----======------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-----======Modal===============----------------->



<div class="container">
	<div class="row">
		<div class='list-group gallery'>
             <!-- col-6 / end -->
             <!-- col-6 / end -->
             <!-- col-6 / end -->
             
              <?php	
					$sub_cat=$_GET['sub_id'];
					$selelect_cat="SELECT * FROM `products` where `sub_category`=".$sub_cat;
                    $exe_cat=mysqli_query($con,$selelect_cat);
                    while($tbl_cat=mysqli_fetch_array($exe_cat))
                    {       
                    ?>   
           	    		<div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="admin/upload/<?php echo base64_decode($tbl_cat['image']); ?>">
                 <div class='text-center' style="font-size:20px; background:#eee">
                        <small class='text-muted'></small><?php echo $tbl_cat['pro_name'];?></small>
                    </div>
                    <img class="img-responsive" alt="" src="admin/upload/<?php echo base64_decode($tbl_cat['image']); ?>" />
                    
                   
                     <!-- text-right / end -->
                </a>
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="background:#0F75BD !important;border:#0F75BD">Inquiry</button>
                <br/>
                  <br/>
                    
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
