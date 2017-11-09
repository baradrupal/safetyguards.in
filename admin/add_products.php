<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?><?php
include './leftmenu.php';
include_once './config.php';
?>
<!----- SCRIPT OF SUBCATEGO RY AJAX--------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){

    $('#type').on("change",function () {
        var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "ajax.php",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                console.log(response);
                $("#type1").html(response);
            },
        });
    }); 

});

</script>
<!------------------------------------------------->
<?php
if(isset($_REQUEST["add"]))
{ 
						  
						//$data= mysql_real_escape_string(stripslashes($_POST['data']));
						$name=check_input($_REQUEST['pro_name']); 						
						$type= check_input($_REQUEST['type']); 
						$type1=check_input($_REQUEST['type1']);				
						               
						$newname="";
                        if($_FILES['images']['error']==0)
						{
                                $filename = $_FILES['images']['name'];

								$ext = substr($filename, strrpos($filename, '.') + 1); 

								if (($ext == "jpg") || ($ext == "png") || ($ext == "PNG") || ($ext == "JPG")||($ext == "gif")) 

						{ 
						$newname = time().$filename;
						move_uploaded_file($_FILES["images"]["tmp_name"],"upload/".$newname);
						//$hex_string = base64_encode($newname);
						}
			}			
$sql=("INSERT INTO `products`(`pro_name`, `cat_id`,`sub_category`, `image`) VALUES('".$name."','".$type."','".$type1."','".$newname."')") or die(mysqli_error());
$exe_pro=mysqli_query($con,$sql);
if($exe_pro > 0)
	{	
	?>
    <script>
    alert('Data has been inserted.');
	window.location='add_products.php';
    </script>
	<?php
	}
	else{
	?>    
    <script>
    alert('Failed to insert Data.');
	window.location='add_products.php';
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
                    <form class="form-horizontal" method="post"  enctype = "multipart/form-data">
					<div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Products Name</label>
                      <div class="col-sm-5">
                      <input id="inputEmail3" name="pro_name" type="text" class="form-control" placeholder="Products Name" required="">
                      </div>                    	
                    </div>	
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Category Name</label>
                      <div class="col-sm-5">
                         <select class="form-control" id="type" name="type">
                         	 <option>Select Category</option>
                         	<?php 
					$selelect_cat="SELECT * FROM `category`";
                    $exe_cat=mysqli_query($con,$selelect_cat);
                    while($tbl_cat=mysqli_fetch_array($exe_cat))
                    {       
                    ?>   
                             
                  		<option value="<?php echo $tbl_cat['id']?>"><?php echo $tbl_cat['name']?></option>
                              
                              <?php } ?>
                             
                           </select>
                      </div>                    	
                    </div>     
                    
                    <!-- Sub CTEGORY  --->
                    
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Sub Category</label>
                      <div class="col-sm-5">
                       <select name="type1" id="type1" class="form-control">
                        </select>
                      </div>                    	
                    </div>             
                  
                    <!-------------------->
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Products Photo</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="images" type="file" class="form-control" accept="image/gif,image/jpeg,image/png,image/jpg">
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
<!--            <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>-->
                </div>
                <div class="panel-body table-responsive">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                        <tr>
                        <th>Id</th>                       
                        <th>Image</th> 
						<th>Name</th>
                        <th>Category</th>
                        <th>Sub Category</th>							
                        <th colspan="1">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                   if(isset($_GET['dlt'])){
                        $d_id=$_GET['dlt'];
						$selelect_data="SELECT * FROM products WHERE id='".$d_id."'";
						$exe_data=mysqli_query($con,$selelect_data);                    
                   		$tbl_data=mysqli_fetch_array($exe_data);  
						$img=$tbl_data['image'];			
                        
                        $dlt_rec="DELETE FROM `products` WHERE id='".$d_id."'";
						unlink("upload/".$img);
						
                        $exe_dlt=  mysqli_query($con, $dlt_rec);
                        if($exe_dlt>0)
                        {
                            ?>
                            <script>                               
                                window.location='add_products.php';
                            </script>
                            <?php 
                        }else{
                            ?>
                            <script>                                
                                window.location='add_products.php';
                            </script>
                            <?php 
                        }
                    }
                    
                    $selelect_data="SELECT * FROM `products`";
                    $exe_data=mysqli_query($con,$selelect_data);
                    while($tbl_data=mysqli_fetch_array($exe_data))
                    {       
                    ?>    
                      <tr class="odd gradeX">
						<td class="center"><?php echo $tbl_data['id']; ?></td>
                        <td><img src="upload/<?php echo $tbl_data['image']; ?>" style="max-height: 70px;max-width: 70px;"></td>
							<td><?php echo $tbl_data['pro_name']; ?></td>									<td><?php 
						$res1=mysqli_query($con,"SELECT * FROM `category` WHERE `id`=".$tbl_data["cat_id"]);
				    while($row1=mysqli_fetch_array($res1))
						{
						 echo $row1["name"]; 
						} ?></td>       
                        
                        	<td><?php 
						$res1=mysqli_query($con,"SELECT * FROM `subcategory` WHERE `id`=".$tbl_data["sub_category"]);
				    while($row1=mysqli_fetch_array($res1))
						{
						 echo $row1["name"]; 
						} ?></td>                  
                         
                         <td><a href="edit_products.php?edit=<?php echo $tbl_data['id']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                         <a href="add_products.php?dlt=<?php echo $tbl_data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>
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