<?php
include('includes/header.php');
define('TITLE','Work Order');

include('../dbconection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='admin.php'; </script>";
 }
?>

<div class="col-sm-6 mt-5 mx-3">
    <h3 class="text-center"style="color:white;margin-top:40px;">Assigned Work Details</h3>
    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();?>
        <table class="table table-bordered">
        <tbody>
          <tr style="color:white;">
            <td style="color:white;">Request ID</td>
            <td>
              <?php if(isset($row['request_id'])) {echo  $row['request_id']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Request Info</td>
            <td>
              <?php if(isset($row['request_info'])) {echo $row['request_info']; } ?>
            </td>
          </tr>
          <tr  style="color:white;">
            <td style="color:white;">Request Description</td>
            <td>
              <?php if(isset($row['request_desc'])) {echo $row['request_desc']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Name</td>
            <td>
              <?php if(isset($row['requester_name'])) {echo $row['requester_name']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Address Line 1</td>
            <td>
              <?php if(isset($row['requester_add1'])) {echo $row['requester_add1']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Address Line 2</td>
            <td>
              <?php if(isset($row['requester_add2'])) {echo $row['requester_add2']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">City</td>
            <td>
              <?php if(isset($row['requester_city'])) {echo $row['requester_city']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">State</td>
            <td>
              <?php if(isset($row['requester_state'])) {echo $row['requester_state']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Pin Code</td>
            <td>
              <?php if(isset($row['requester_zip'])) {echo $row['requester_zip']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Email</td>
            <td>
              <?php if(isset($row['requester_email'])) {echo $row['requester_email']; } ?>
            </td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Mobile</td>
            <td>
              <?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile']; } ?>
            </td>
          </tr>
          
          <tr  style="color:white;">
             <td style="color:white;">Assigned Technician</td>
              <td>
              <?php if(isset($row['assign_tech'])) {echo $row['assign_tech']; } ?>
             </td>
         </tr>
         <tr  style="color:white;" >
            <td style="color:white;">Technician Name</td>
            <td>Zahir Khan</td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Customer Sign</td>
            <td></td>
          </tr>
          <tr style="color:white;">
            <td style="color:white;">Technician Sign</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center">
        <form class="d-print-none d-inline mr-3"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form>
        <form class="d-print-none d-inline" action="work.php"><input class="btn btn-secondary" type="submit" value="Close"></form>
      </div>
      
  <?php  }?>
</div>
<?php
include('includes/footer.php'); 
?>