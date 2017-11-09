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
						 $arid=check_input($_GET['edit']);
						 $title=check_input($_POST['cat']);  
						 $filename = $_FILES['images']['name'];
                                 if($filename=="") 
                                 {                                 
                                    $sql_sel="UPDATE `category` SET `name`='".$title."' WHERE `id`=".$arid;
                                    mysqli_query($con,$sql_sel);                           
                                 }     
                                 else 
								 {
                                 
									$filename=  time().$filename;
									$ext = substr($filename, strrpos($filename, '.') + 1);
									if (($ext == "jpg") || ($ext == "png") || ($ext == "jpeg")) 
									{ 
									$newname =$filename;
									move_uploaded_file($_FILES["images"]["tmp_name"],"upload/".$newname);         
									//$hex_string = base64_encode($newname);
									}
									$sql_sel="UPDATE `category` SET `name`='".$title."',`banner`='".$newname."' WHERE `id`=".$arid;
									mysqli_query($con,$sql_sel);                            }
						 
						 
						                      
						
?>
<script>
 window.location="add_category.php";
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
            <li class="active">Category</li>
           </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Category <span class="panel-subtitle"></span></div>
				  <div class="panel-body">
				 <?php
				$sql_sel="SELECT * FROM `category` WHERE `id`=".$_GET['edit'];
				$sql_res=mysqli_query($con,$sql_sel);
				while($row=mysqli_fetch_array($sql_res))
				{
				?>
                    <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Category Name</label>
                      <div class="col-sm-8">                     
						<input type="text" name="cat" id="cat" value="<?php echo $row['name']; ?>" class="form-control input-sm" />
                        <br>
                      </div>
                    </div> 
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Category Banner</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="images" type="file" class="input-sm btn-btn-primary">
                      </div>
                      <div class="col-sm-5">
							<img src="upload/<?php echo $row['banner']; ?>" style="max-height: 100px;max-width: 100px;"><br/>
                           <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="edit" />							
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

