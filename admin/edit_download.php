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
								 $arid=$_POST['edit'];
                                 $title=$_POST['name'];
                                 $filename = $_FILES['pdf']['name'];
                                 if($filename=="") 
                                 {                                 
                                    $sql_sel="UPDATE `download` SET `name`='".$title."' WHERE `id`=".$arid;
                                    mysqli_query($con,$sql_sel);                           
                                 }     
                                 else 
								 {
                                 
									$filename=  time().$filename;
									$ext = substr($filename, strrpos($filename, '.') + 1);
									if (($ext == "pdf") || ($ext == "doc") || ($ext == "PDF") || ($ext == "DOC")||($ext == "docx")) 
									{ 
									$newname =$filename;
									move_uploaded_file($_FILES["pdf"]["tmp_name"],"upload/brochure/".$newname);         
									//$hex_string = base64_encode($newname);
									}
									$sql_sel="UPDATE `download` SET `name`='".$title."',`pdf`='".$newname."' WHERE `id`=".$arid;
									mysqli_query($con,$sql_sel);
                                }
								
								//FOR PDF ICON
								
								$filename = $_FILES['pdf_icon']['name'];
                                 if($filename=="") 
                                 {                                 
                                    $sql_sel="UPDATE `download` SET `name`='".$title."' WHERE `id`=".$arid;
                                    mysqli_query($con,$sql_sel);                           
                                 }     
                                 else 
								 {
                                 
									$filename=  time().$filename;
									$ext = substr($filename, strrpos($filename, '.') + 1);
									if (($ext == "JPG") || ($ext == "jpg") || ($ext == "png") || ($ext == "PNG")||($ext == "gif")) 
									{ 
									$newname =$filename;
									move_uploaded_file($_FILES["pdf_icon"]["tmp_name"],"upload/brochure/".$newname);         
									//$hex_string = base64_encode($newname);
									}
									$sql_sel="UPDATE `download` SET `name`='".$title."',`pdf_icon`='".$newname."' WHERE `id`=".$arid;
mysqli_query($con,$sql_sel);								 }
?>

<script>
 window.location="add_download.php";
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
            <li class="active">Certificates</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Brochure<span class="panel-subtitle"></span></div>
				  <div class="panel-body">
				 <?php
				$sql_sel="SELECT * FROM `download` WHERE `id`=".$_GET['edit'];
				$sql_res=mysqli_query($con,$sql_sel);
				while($row=mysqli_fetch_array($sql_res))
				{
				?>
                    <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Brochure Name</label>
                      <div class="col-sm-5">	
                        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" class="form-control"/>
                         
                      </div>
                    </div>
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Edit Brochure</label>
                      <div class="col-sm-5">                      	
                          <input id="inputEmail3" name="pdf" type="file" class="form-control" accept="application/pdf,application/msword"><input type="text" name="pdf" id="name" value="<?php echo $row['pdf']; ?>" class="form-control input-sm"  />
                      </div>
                      <div class="col-sm-5">
						
                           <input type="hidden" value="<?php echo $_GET['edit']; ?>" name="edit" />							
                      </div>	
                    </div>
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Brochure Icon</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="pdf_icon" type="file" class="form-control" accept="image/jpeg,image/gif,image/png">
                      </div>
                      <div class="col-sm-5">
							<img src="upload/brochure/<?php echo $row['pdf_icon']; ?>" style="max-height: 100px;max-width: 100px;"><br/>
                           	
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

