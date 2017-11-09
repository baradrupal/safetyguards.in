<?php  session_start();
if(!$_SESSION['login_user']) {
    header("location:index.php");
}
include './leftmenu.php';
?>
<div class="be-content">
    <div class="main-content">
            <div class="container">
                <h2>Edit | Delete Products.</h2>
                <div class="table-responsive">          
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Product Name</th>
                      <th>Lastname</th>
                      <th>Age</th>
                      <th>City</th>
                      <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
        </div>
</div>
<?php include './footer.php'; ?>