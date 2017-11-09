<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
?>
<?php
include './leftmenu.php';
include_once './config.php';
if(isset($_REQUEST["add"]))
{ 
						  
						//$data= mysql_real_escape_string(stripslashes($_POST['data']));
                        $venue= check_input($_REQUEST['venue']);
						$date= check_input($_REQUEST['date']); 
						$title= check_input($_REQUEST['title']); 
						$desc=str_replace("'","\'",$_REQUEST['pro_desc']); 						
						
                       
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
			
$sql=("INSERT INTO `events`(`title`,`logo`,`date`,`venue`,`cont`) VALUES('".$title."','".$newname."','".$date."','".$venue."','".$desc."')") or die(mysqli_error());
$exe_pro=mysqli_query($con,$sql);

//Add More Code:-

            $res2=mysqli_query($con,"select id from `events`");
            while($r=mysqli_fetch_array($res2))
            {
                $eid=$r['id'];   
            }
            
            if(@count($_FILES['project_images']['name']) > 0)
            {
			for($i=0; $i<count($_FILES['project_images']['name']); $i++)
				
			{    
			$tmpFilePath = $_FILES['project_images']['tmp_name'][$i];
			if($tmpFilePath != "")
			 {
				$project_images = $_FILES['project_images']['name'][$i];
			 	if(move_uploaded_file($_FILES["project_images"]["tmp_name"][$i],"upload/".$project_images))
				 {
					//$hex_string = base64_encode($project_images);
					$sql_sel=("INSERT INTO `events_photo`(`e_id`,`image`) VALUES ('".$eid."','".$project_images."')") or die(mysqli_error());
					$exe_pro=mysqli_query($con,$sql_sel);
				}
			 }
		 }
	}
	
	if($exe_pro > 0)
	{	
	?>
    <script>
    alert('Data has been inserted.');
	window.location='add_past_events.php';
    </script>
	<?php
	}
	else{
	?>    
    <script>
    alert('Failed to insert Data.');
	window.location='add_past_events.php';
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
            <li class="active">Events</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Events<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post"  enctype = "multipart/form-data">
					<div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Events Title</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="title" type="text" class="form-control" placeholder="Events Title.." required="" >
                      </div>                    	
                    </div>					
					
					<div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Events Venue</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="venue" type="text" class="form-control" placeholder="Enter Venue.." required="">
                      </div>                    	
                    </div>
					
					<div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Events Date</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="date" type="text" class="form-control" placeholder="10 june 2017.." required="">
                      </div>                    	
                    </div>
					
					
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Events Photo</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="images" type="file" class="form-control">
                      </div>                    	
                    </div>
					
					<div id="moreimages"></div>
                      <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label"></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <a id="addmore"><font color="#6CA0F6" size="+1">Add more</font></a>
                      </div>
                      </div>
					  
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">	
                        <textarea id="elm1" name="pro_desc" class="form-control input-sm"></textarea>
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
                        <th>Photo</th> 
						<th>Name</th>
                        <th>Date</th>						
                        <th>Venue</th>
                        <th>Content</th>
                        <th colspan="1">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                   if(isset($_GET['dlt'])){
                        $d_id=$_GET['dlt'];
						
						$selelect_data="SELECT * FROM events WHERE id='".$d_id."'";
						$exe_data=mysqli_query($con,$selelect_data);                    
                   		$tbl_data=mysqli_fetch_array($exe_data);  
						$img=$tbl_data['logo'];	
                        
                        $dlt_rec="DELETE FROM events WHERE id='".$d_id."'";
						unlink("upload/".$img);
						
                        $exe_dlt=  mysqli_query($con, $dlt_rec);
                        if($exe_dlt>0)
                        {
                            ?>
                            <script>                               
                                window.location='add_past_events.php';
                            </script>
                            <?php 
                        }else{
                            ?>
                            <script>                                
                                window.location='add_past_events.php';
                            </script>
                            <?php 
                        }
                    }
                    
                    $selelect_data="SELECT * FROM events";
                    $exe_data=mysqli_query($con,$selelect_data);
                    
                    while($tbl_data=mysqli_fetch_array($exe_data))
                    {       
                    ?>    
                      <tr class="odd gradeX">
						<td class="center"><?php echo $tbl_data['id']; ?></td>
                        <td><img src="upload/<?php echo $tbl_data['logo']; ?>" style="max-height: 70px;max-width: 70px;"></td>
						<td><?php echo $tbl_data['title']; ?></td>
						<td><?php echo $tbl_data['date']; ?></td>                                   
                        <td><?php echo $tbl_data['venue']; ?></td>
                        <td><?php echo $tbl_data['cont']; ?></td>                                   
                        <td><a href="edit_past_events.php?edit=<?php echo $tbl_data['id']; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                         <a href="add_past_events.php?dlt=<?php echo $tbl_data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete this record?');"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                      </tr>
                    <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>		
</div>  
<!----------------------------------------------->          
<?php include './footer.php'; ?>
    <script>
	j=1;
	$("#addmore").click(function(){
	$("#moreimages").append('<div class="form-group xs-mt-10"><label for="exampleInputFile" class="col-sm-2 control-label">Event Image '+j+'</label><div class="col-sm-5"><input type="file" class="input-sm btn-btn-primary"  id="exampleInputFile" name="project_images[]"></div></div>');
	j++;
	});
    </script>