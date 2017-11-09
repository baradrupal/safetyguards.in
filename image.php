<?php 

if(isset($_POST['add_pro']))
{
    $p_ttl=trim($_POST['pro_name']);
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
         move_uploaded_file($file_tmp,"uploaded photo/main-fabskin/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
    
    $f_cat=trim($_POST['pro_cat']);
    $f_desc=trim($_POST['pro_desc']);
    
    
    $ins_pro=("INSERT INTO `main_fabskin`(f_titile,f_photo,f_cat,f_desc) VALUES('".$p_ttl."','".$file_name."','".$f_cat."','".$f_desc."')");
    $exe_pro=mysqli_query($con,$ins_pro) or die(erro_no());
}
?>