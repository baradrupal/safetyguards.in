<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
include './leftmenu.php';
?>
<!-- Start Add product -->
<?php 
include_once './config.php';;
if(isset($_POST['add_pro']))
{
    $p_name=trim($_POST['pro_name']);
    // $pro_photo=$_POST['pro_photo']['name'];
        
      $file_name =$_FILES['pro_photo']['name'];
      $file_size =$_FILES['pro_photo']['size'];
      $file_tmp = $_FILES['pro_photo']['tmp_name'];
      $file_type=$_FILES['pro_photo']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pro_photo']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploaded photo/fabskin/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
  
    $p_desc=trim($_POST['pro_desc']);
    $p_use=trim($_POST['pro_use']);
    $p_ingridient=trim($_POST['pro_ingr']);
    $p_cate=trim($_POST['pro_cat']);
    
    
    $ins_pro=("INSERT INTO `product_febskin`(pro_name,pro_photo,pro_description,description_to_use,pro_ingredients,pro_cat) VALUES('".$p_name."','".$file_name."','".$p_desc."','".$p_use."','".$p_ingridient."','".$p_cate."')");
    $exe_pro=mysqli_query($con,$ins_pro) or die(erro_no());
    
    if($exe_pro>0)
        {
            ?>
            <script>
                alert('Product added Successfully.');
                window.location="add-new-product.php";
            </script>
            <?php
        }
    else{
        ?>
            <script>
                alert('Failed to updtae product.');
                window.location="add-new-product.php";
            </script>
            <?php
    }    
}
//============ Query For update ============//

if(isset($_POST['Update_pro']))
{
    $id=$_GET['edt'];
    
    $p_name=trim($_POST['pro_name']);
    
   // $pro_photo=$_POST['pro_photo']['name'];
        
      $file_name = $_FILES['pro_photo']['name'];
      $file_size =$_FILES['pro_photo']['size'];
      $file_tmp =$_FILES['pro_photo']['tmp_name'];
      $file_type=$_FILES['pro_photo']['type'];
      $file_ext=@strtolower(end(explode('.',$_FILES['pro_photo']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(file_exists($file_name)){
        
         $errors[]=alert('File is Already Exists.');
        
        }
        else
        {
         move_uploaded_file($file_tmp,"uploaded photo/fabskin/".$file_name);
         echo "Success";
        }
  
    $p_desc=trim($_POST['pro_desc']);
    $p_use=trim($_POST['pro_use']);
    $p_ingridient=trim($_POST['pro_ingr']);
    $p_cate=trim($_POST['pro_cat']);
    
    
    $ins_pro=("UPDATE `product_febskin` SET pro_name='".$p_name."',pro_photo='".$file_name."',pro_description='".$p_desc."',description_to_use='".$p_use."',pro_ingredients='".$p_ingridient."',pro_cat='".$p_cate."' WHERE pro_id='".$id."'");
    $update_pro=mysqli_query($con,$ins_pro) or die(erro_no());
    
    if($update_pro>0)
        {
            ?>
            <script>
                alert('Product Updated Successfully.');
                window.location="add-new-product.php";
            </script>
            <?php
        }
    else{
        ?>
            <script>
                alert('Failed to updtae product.');
                window.location="add-new-product.php";
            </script>
            <?php
    }    
}

 if(isset($_GET['edt'])){
       $id = $_GET['edt'];
//       print_r($id);exit;
                $i ="select * from product_febskin where pro_id='".$id."'";
                $h= mysqli_query($con,$i);
                $row=mysqli_fetch_array($h);
 }
?>
	<div class="be-content">
        <div class="page-head">
<!--          <h2 class="page-head-title">Form Elements</h2>-->
           <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>           
            <li class="active">Awards</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Add New Awards<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'].(isset($_GET['edt']) ? '?edt='.$_GET['edt'] : ''); ?>" enctype = "multipart/form-data">
                    <div class="form-group xs-mt-10">
                      <label for="name" class="col-sm-2 control-label">Awards Photo</label>
                      <div class="col-sm-5">
                          <input id="inputEmail3" name="pro_photo" type="file" placeholder="Product Name" class="input-sm btn-btn-primary">
                      </div>
                      <div class="col-sm-5">
                          <?php if(isset($file_name)){echo $file_name;} ?><?php if(isset($_GET['edt'])){ echo 'uploaded photo/fabskin/'.$row['pro_photo'];} ?>
<!--                          <img src="uploaded photo/fabskin/<?php echo $row['pro_photo']; ?>..." style="max-height: 70px;max-width: 70px;">&nbsp;&nbsp;&nbsp;-->
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">	
                        <textarea id="elm1" name="area" class="form-control input-sm"></textarea>
                      </div>
                    </div>                   	        
				</form>
                </div>
              </div>
            </div>
          </div>         
          
<?php include './footer.php'; ?>