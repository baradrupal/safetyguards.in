<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?>
<?php
include 'leftmenu.php';
include_once 'config.php';
if(isset($_POST["add"]))
{						//$pro_desc=check_input($_REQUEST['pro_desc']);
						//$pro_desc = $_POST['pro_desc'];
						$name =check_input($_POST['name']);
						//for brochure
						$images="";
					    if($_FILES['images']['error']==0)
						{
							$filename = $_FILES['images']['name'];
				 			$ext = substr($filename, strrpos($filename, '.') + 1);	
							if (($ext == "jpg") || ($ext == "png")) 							{ 	
								$images = time().$filename;
								move_uploaded_file($_FILES["images"]["tmp_name"],"upload/brochure/".$images);	
								//$pdf_icon = base64_encode($images);						
							}

						}
						
						//For PDF						
						$file="";
					    if($_FILES['file']['error']==0)
						{
							 $filename = $_FILES['file']['name'];
							 $ext = substr($filename, strrpos(								$filename, '.') + 1);
							if (($ext == "pdf") || ($ext == "docs") || ($ext == "PDF"))
                           	{ 
								$file = time().$filename;
								move_uploaded_file($_FILES["file"]["tmp_name"],"upload/brochure/".$file);
									//$hex_string = base64_encode($file);
						
							}
			}  

	$ins_pro=("INSERT INTO `download`(name,pdf,pdf_icon) VALUES('".$name."','".$file."','".$images."')") or die(mysqli_error());
    $exe_pro=mysqli_query($con,$ins_pro) or die(erro_no());	
	if($exe_pro > 0)
	{	
	?>
    <script>
    alert('Data has been inserted.');
	window.location='add_download.php';
    </script>
	<?php
	}
	else{
	?>
    
    <script>
    alert('Failed to insert Data.');
	window.location='add_download.php';
    </script>
	<?php
	}
 }
?>
<!-- Start Add product -->
<div class="be-content">
        <div class="page-head">
<!--          <h2 class="page-head-title">Form Elements</h2>-->
           <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>           
            <li class="active">Brochure</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Brochure<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post"  enctype = "multipart/form-data">                 
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Brochure Name</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="name" type="text" class="form-control">
                      </div>                      	
                    </div>
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Add Brochure</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="file" type="file" class="form-control" accept="application/pdf,application/msword">
                      </div>                   	
                    </div>  
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Brochure Icon</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="images" type="file" class="form-control" accept="image/jpeg,image/gif,image/png">
                      </div>                   	
                    </div>         
                    <!--<div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">	
                        <textarea id="elm1" name="pro_desc" class="form-control input-sm"><?php if(isset($_GET['edt'])){ echo $row['descriptions'];} ?></textarea>
                      </div>
                    </div>--> 
					<div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">      
                    <input  type="submit" value="Add" name="add" class="btn btn-primary">                      
                    <input  type="reset"  value="Cancel" class="btn btn-default">
                    </div>
                   </div>					
				</form>
                </div>
              </div>
            </div>
          </div> 
<!---------------Display------------------------->
<div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Edit | Delete Records
<!--                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>-->
                </div>
                <div class="panel-body table-responsive">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Brouser Icon</th>
                        <th>Brouser</th> 
                        <th>Brochure Name</th> 											
                        <th colspan="1">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php                   
                   if(isset($_GET['dlt'])){
                        $d_id=$_GET['dlt']; 
						
						$selelect_data="SELECT * FROM download WHERE id='".$d_id."'";
						$exe_data=mysqli_query($con,$selelect_data);                    
                   		$tbl_data=mysqli_fetch_array($exe_data);  
						$img=$tbl_data['pdf_icon'];
						$pdf=$tbl_data['pdf'];
						
						                       
                        $dlt_rec="DELETE FROM `download` WHERE id='".$d_id."'";
						unlink("upload/brochure/".$img);
						unlink("upload/brochure/".$pdf);
						
                        $exe_dlt=  mysqli_query($con, $dlt_rec);
                        if($exe_dlt>0)
                        {
                        ?>
                            <script>                               
                                window.location='add_download.php';
                            </script>
                            <?php 
                        }else{
                            ?>
                            <script>                                
                                window.location='add_download.php';
                            </script>
                            <?php 
                        }
                    }
                    
                    $selelect_data="SELECT * FROM `download`";
                    $exe_data=mysqli_query($con,$selelect_data);
                    
                    while($tbl_data=mysqli_fetch_array($exe_data))
                    {       
                    ?>    
                      <tr class="odd gradeX">
						<td class="center"><?php echo $tbl_data['id']; ?></td>
                        <td><img src="upload/brochure/<?php echo $tbl_data['pdf_icon']; ?>" style="max-height: 100px;max-width: 100px;"><br/></td>  
                        	<td><?php echo $tbl_data['pdf'] ;?></td>
                        	<td><?php echo $tbl_data['name'] ;?></td> 
                                                                                                        
                        <td><a href="edit_download.php?edit=<?php echo $tbl_data['id']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="add_download.php?dlt=<?php echo $tbl_data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                      </tr>
                    <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>		  
<!----------------------------------------------->          
<?php include 'footer.php'; ?>