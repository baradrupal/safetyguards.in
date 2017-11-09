<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}

include './leftmenu.php';
include_once './config.php';

if(isset($_POST['submit'])){
$user=$_SESSION['login_user'];
$old_password=md5($_POST['old-pswd']);
$new_password=md5($_POST['new-pswd']);
$re_password=md5($_POST['re-pswd']);
$query=mysqli_query($con,"select * from admin");
$row=mysqli_fetch_array($query);
$dbold_pass=$row['password'];

if($dbold_pass==$old_password){
    if($new_password==$re_password){
      mysqli_query($con,"update admin set password='".$new_password."' where uname='$user'"); 
      echo "<script>alert('Update Succesfully......')</script>" ;    
    }
    else{
      echo "<script>alert('Update Fail...')</script>" ;

    }

}
else{
   echo "<script>alert('Your Old Password is Wrong......')</script>" ;

}
}
?>

<!-- Start Add product -->
<div class="be-content">
        <div class="page-head">
<!--          <h2 class="page-head-title">Form Elements</h2>-->
           <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>           
            <li class="active">Chnage Password</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <!--Basic forms-->
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-info">
                  <div class="panel-heading panel-heading-divider">Chnage Password<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post"  enctype = "multipart/form-data">                    
                    <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Old Password</label>
                      <div class="col-sm-5">                   
                        <input type="password" name="old-pswd" id="cat" class="form-control input-sm" />
                      </div>
                    </div> 
                    
                     <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">New Password</label>
                      <div class="col-sm-5">                   
                        <input type="password" name="new-pswd" id="cat" class="form-control input-sm" />
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="Use" class="col-sm-2 control-label">Retype New Password</label>
                      <div class="col-sm-5">                   
                        <input type="password" name="re-pswd" id="cat" class="form-control input-sm" />
                      </div>
                    </div>
                                        
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">      
                    <input  type="submit" value="Reset Password" name="submit" class="btn-lg btn-primary"><input type="reset" name="login-clear" id="login-submit" tabindex="4" class="btn-lg btn-primary" value="Clear" style="margin-left: 10px">
                    </div>
                   </div>         
        </form>
                </div>
              </div>
            </div>
          </div> 
      
<?php include './footer.php'; ?>



