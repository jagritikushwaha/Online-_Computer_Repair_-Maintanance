<?php
include('includes/header.php');
define('TITLE','changepass');

include('../dbconection.php');


session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='admin.php'; </script>";
 }


 
 $aEmail = $_SESSION['aEmail'];
 if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['aPassword'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    $sql = "SELECT * FROM adminlogin_tb WHERE a_email='$aEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $aPass = $_REQUEST['aPassword'];
     $sql = "UPDATE adminlogin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}

?>

<div class="col-sm-9 col-md-10" style="margin-top:70px;">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5">
        <div class="form-group">
          <label for="inputEmail" style="color:white;">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $aEmail ?>" readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword" style="color:white;">New Password</label>
          <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="aPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>
    </div>
  </div>
</div>
</div>
</div>








<?php
include('includes/footer.php'); 
?>