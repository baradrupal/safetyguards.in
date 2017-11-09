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
						 $title=str_replace("'","\'",$_REQUEST['pro_desc']);                                 
						 $sql_sel="UPDATE `vision_mission` SET `descriprion`='".$title."' WHERE `id`=".$arid;
						 mysqli_query($con,$sql_sel);
                                
?>
<script>
 window.location="add_vission_mision.php";
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
            <li class="active">Vision & Mission</li>
           </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Vision & Mission<span class="panel-subtitle"></span></div>
				  <div class="panel-body">
				 <?php
				$sql_sel="SELECT * FROM `vision_mission` WHERE `id`=".$_GET['edit'];
				$sql_res=mysqli_query($con,$sql_sel);
				while($row=mysqli_fetch_array($sql_res))
				{
				?>
                <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">	
                        <textarea id="elm1" name="pro_desc" max="100000000" class="form-control input-sm"><?php echo $row['descriprion']; ?></textarea>
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