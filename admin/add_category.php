<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?>
<?php
include './leftmenu.php';
include_once './config.php';
if(isset($_POST["add"]))
{				
	$pro_desc =check_input($_POST['cat']);	
	
	$newname="";
                        if($_FILES['images']['error']==0)
						{
                                $filename = $_FILES['images']['name'];

								$ext = substr($filename, strrpos($filename, '.') + 1); 

								if (($ext == "jpg") || ($ext == "png") || ($ext == "PNG") || ($ext == "JPG")) 

						{ 
						$newname = time().$filename;
						move_uploaded_file($_FILES["images"]["tmp_name"],"upload/".$newname);
						 //$hex_string = base64_encode($newname);
						}
			}							
	$ins_pro=("INSERT INTO `category`(name,banner) VALUES('".$pro_desc."','".$newname."')") or die(mysqli_error());
    $exe_pro=mysqli_query($con,$ins_pro) or die(erro_no());						
	
	if($exe_pro > 0)
	{	
	?>
    <script>
    alert('Data has been inserted.');
	window.location='add_category.php';
    </script>
	<?php
	}
	else{
	?>    
    <script>
    alert('Failed to insert Data.');
	window.location='add_category.php';
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
            <li class="active">Category</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Category<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post"  enctype = "multipart/form-data">                    
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Category Name</label>
                      <div class="col-sm-5">                   
                        <input type="text" name="cat" id="cat" class="form-control input-sm" />
                      </div>
                    </div> 
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Products Photo</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="images" type="file" class="form-control" accept="image/gif,image/jpeg,image/png">
                      </div>                    	
                    </div>  
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
						<th>Contents</th>						
                        <th colspan="1">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                   if(isset($_GET['dlt'])){
                        $d_id=$_GET['dlt'];  
						
						$selelect_data="SELECT * FROM category WHERE id='".$d_id."'";
						$exe_data=mysqli_query($con,$selelect_data);                    
                   		$tbl_data=mysqli_fetch_array($exe_data);  
						$img=$tbl_data['banner'];
						
						                      
                        $dlt_rec="DELETE FROM  category WHERE id='".$d_id."'";
						unlink("upload/".$img);
                        $exe_dlt=  mysqli_query($con, $dlt_rec);
                        if($exe_dlt>0)
                        {
                        ?>
                            <script>                               
                                window.location='add_category.php';
                            </script>
                            <?php 
                        }else{
                            ?>
                            <script>                                window.location='add_category.php';
                            </script>
                            <?php 
                        }
                    }
                    
                    $selelect_data="SELECT * FROM  `category` ";
                    $exe_data=mysqli_query($con,$selelect_data);                    
                    while($tbl_data=mysqli_fetch_array($exe_data))
                    {       
                    ?>    
                      <tr class="odd gradeX">
						<td class="center"><?php echo $tbl_data['id']; ?></td>
                        <td><?php echo $tbl_data['name']; ?></td>		
                        <td><img src="upload/<?php echo $tbl_data['banner']; ?>" style="max-height: 70px;max-width: 70px;"></td>                                       
                        <td><a href="edit_category.php?edit=<?php echo $tbl_data['id']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="add_category.php?dlt=<?php echo $tbl_data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>
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
<?php include './footer.php'; ?>

