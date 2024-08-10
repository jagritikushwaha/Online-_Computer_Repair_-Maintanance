<?php
include('includes/header.php');
define('TITLE','Requesters');

include('../dbconection.php');


session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='admin.php'; </script>";
 }

?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center" style="margin-top:40px; color:white;">Update Requester Details</h3>
  <?php
 if(isset($_REQUEST['edit'])){
  $sql = "SELECT * FROM userlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 // update
 if(isset($_REQUEST['requpdate'])){
  // Checking for Empty Fields
  if(($_REQUEST['r_login_id'] == "") || ($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "")){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
    $rid = $_REQUEST['r_login_id'];
    $rname = $_REQUEST['r_name'];
    $remail = $_REQUEST['r_email'];

  $sql = "UPDATE userlogin_tb SET r_login_id = '$rid', r_name = '$rname', r_email = '$remail' WHERE r_login_id = '$rid'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
   <form action="" method="POST">
    <div class="form-group" >
      <label for="r_login_id"style="color:white;">Requester ID</label>
      <input type="text" class="form-control" id="r_login_id" name="r_login_id" value="<?php if(isset($row['r_login_id'])) {echo $row['r_login_id']; }?>">
    </div>
    <div class="form-group">
      <label for="r_name"style="color:white;">Name</label>
      <input type="text" class="form-control" id="r_name" name="r_name" value="<?php if(isset($row['r_name'])) {echo $row['r_name']; }?>">
    </div>
    <div class="form-group">
      <label for="r_email"style="color:white;">Email</label>
      <input type="text" class="form-control" id="r_email" name="r_email" value="<?php if(isset($row['r_email'])) {echo $row['r_email']; }?>">
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
      <a href="requester.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
  </form>
</div>


<?php
include('includes/footer.php'); 
?>