<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?>
<?php
include './leftmenu.php';
include_once './config.php';
if(isset($_POST["update"]))
{
								 $arid=check_input($_REQUEST['edit']);
								 $name=check_input($_REQUEST['pro_name']); 
								 $cat= check_input($_REQUEST['cat']);				 
								 $type1= check_input($_REQUEST['type1']);
								 
									$filename = $_FILES['images']['name'];
                               if($filename=="") 
                                 {
									 $sql_sel="UPDATE `products` SET								 `pro_name`='".$name."',`cat_id`='".$cat."',`sub_category`='".$type1."' WHERE `id`=".$arid;
                                    mysqli_query($con,$sql_sel);                           
                                 }     
                                 else 
								 {
                                 
									$filename=  time().$filename;
									$ext = substr($filename, strrpos($filename, '.') + 1);
									if (($ext == "jpg") || ($ext == "png") || ($ext == "jpeg") || ($ext == "JPG") || ($ext == "PNG")|| ($ext == "gif")) 
									{ 
									$newname =$filename;
									move_uploaded_file($_FILES["images"]["tmp_name"],"upload/".$newname);         
									//$hex_string = base64_encode($newname);
									}
									$sql_sel="UPDATE `products` SET `pro_name`='".$name."',`cat_id`='".$cat."',`sub_category`='".$type1."',`image`='".$newname."' WHERE `id`=".$arid;
									mysqli_query($con,$sql_sel);
                                }
?>
<script>
 window.location="add_products.php";
</script>
<?php
}
?>
<!-- Start Add product -->
<div class="be-content">
        <div class="page-head">
<!--          <h2 class="page-head-title">Form Elements</h2>-->
           <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>           
            <li class="active">Products</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Products<span class="panel-subtitle"></span></div>
				  <div class="panel-body">
				 <?php
				$sql_sel="SELECT * FROM `products` WHERE `id`=".$_GET['edit'];
				$sql_res=mysqli_query($con,$sql_sel);
				while($row=mysqli_fetch_array($sql_res))
				{
				?>
                    <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Products Name</label>
                      <div class="col-sm-5">	
                        <input class="form-control" type="hidden" value="<?php echo $_GET['edit']; ?>" name="edit" />
                        
                        <input class="form-control" type="text" name="pro_name" value="<?php echo $row['pro_name']; ?>"  />
                      </div>
                    </div>
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Category Name</label>
                      <div class="col-sm-5">
                         <select class="form-control" id="exampleSelect1" name="cat">
                         	 <option>Select Category</option>
                         	<?php 
							 $selelect_cat="SELECT * FROM `category`";
                    $exe_cat=mysqli_query($con,$selelect_cat);
                    while($tbl_cat=mysqli_fetch_array($exe_cat))
                    {       
                    ?>                            
      <option value="<?php echo $tbl_cat['id'];?>" <?php if($tbl_cat['id']==$row['cat_id']){ echo 'selected="selected"';}?> ><?php echo $tbl_cat['name']?></option>                      
                              <?php } ?>	
                             
                           </select>
                      </div>                    	
                    </div>
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Sub Category Name</label>
                      <div class="col-sm-5">
                         <select class="form-control" id="type" name="type1">
                         	 <option>Select Sub Category</option>
                    <?php 
					$selelect_cat="SELECT * FROM `subcategory`";
                    $exe_cat=mysqli_query($con,$selelect_cat);
                    while($tbl_cat=mysqli_fetch_array($exe_cat))
                    {       
                    ?>   
                             
                  	<option value="<?php echo $tbl_cat['id']?>"<?php if($tbl_cat['id']==$row['sub_category']){ echo 'selected="selected"';} ?>><?php echo $tbl_cat['name']?></option>
                              
                              <?php } ?>
                             
                           </select>
                      </div>                    	
                    </div>
                    
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Products Photo</label>
                      <div class="col-sm-5">                     
                          <input id="inputEmail3" name="images" type="file" class="input-sm btn-btn-primary">
                      </div>
                      <div class="col-sm-5">
							<img src="upload/<?php echo $row['image']; ?>" style="max-height: 100px;max-width: 100px;"><br/>
 							
                      </div>	
                    </div>
                     
					<div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">      
                    <input  type="submit" value="Update" name="update" class="btn btn-primary">                      
                    <input  type="reset"  value="Cancel" class="btn btn-default">
                    </div>
                   </div>					
				</form>
<?php } ?>
                </div>
              </div>
            </div>
          </div>
		  <!----------------------------------------------->         
<?php include './footer.php'; ?>