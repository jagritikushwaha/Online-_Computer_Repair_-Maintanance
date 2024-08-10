<?php
if(session_id() == '') {
    session_start();
  }
  
if(isset($_SESSION['is_adminlogin'])){
 $aEmail = $_SESSION['aEmail'];
} else {
 echo "<script> location.href='admin.php'; </script>";
}

 if(isset($_REQUEST['view']))
 {
  $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }

 if(isset($_REQUEST['close']))
 {   
  $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE)
  {
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
  //  Assign work Order Request Data going to submit and save on db assignwork_tb table
  if(isset($_REQUEST['assign'])){
    // Checking for Empty Fields
    if(($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "") || ($_REQUEST['request_desc'] == "") || ($_REQUEST['requester_name'] == "") || ($_REQUEST['requester_add1'] == "") || ($_REQUEST['requester_add2'] == "") || ($_REQUEST['requester_city'] == "") || ($_REQUEST['requester_state'] == "") || ($_REQUEST['requester_zip'] == "") || ($_REQUEST['requester_email'] == "") || ($_REQUEST['requester_mobile'] == "") || ($_REQUEST['assign_tech'] == "") || ($_REQUEST['requester_date'] == "")){
     // msg displayed if required field missing
     $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">  Fill All Fileds </div>';
    }
  else {
      // Assigning User Values to Variable
      $rid = $_REQUEST['request_id'];
      $rinfo = $_REQUEST['request_info'];
      $rdesc = $_REQUEST['request_desc'];
      $rname = $_REQUEST['requester_name'];
      $radd1 = $_REQUEST['requester_add1'];
      $radd2 = $_REQUEST['requester_add2'];
      $rcity = $_REQUEST['requester_city'];
      $rstate = $_REQUEST['requester_state'];
      $rzip = $_REQUEST['requester_zip'];
      $remail = $_REQUEST['requester_email'];
      $rmobile = $_REQUEST['requester_mobile'];
      $rassigntech = $_REQUEST['assign_tech'];
      $rdate = $_REQUEST['requester_date'];
      $sql = "INSERT INTO assignwork_tb (request_id, request_info, request_desc, requester_name, requester_add1, requester_add2, 
    requester_city, requester_state, requester_zip, requester_email, requester_mobile, assign_tech, requester_date) 
    VALUES ('$rid', '$rinfo','$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile',
     '$rassigntech', '$rdate')";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Work Assigned Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Assign Work </div>';
     }
    }
  }
 


?>

<div   class="col-sm-5  mt-5 jumbotron"><!-- start assign form-->
  <form  action="" method="POST">
      <h5  style="color:white; margin-top:40px;">Assign Work Order Request</h5>
      <div class="form-group  col-md-10">
      <label for="inputRequestDescription"style="color:white;">Request ID</label>
      <input type="text" class="form-control" id="Request_id" name="request_id"
       value="<?php if(isset($row['request_id']))
       echo $row['request_id']; ?>" readonly>
    </div>
    
    <div class="form-group col-md-10">
      <label for="inputRequestInfo"  style="color:white; margin-top:30px; ">Request Info</label>
      <input type="text" class="form-control" id="RequestInfo" placeholder="Request Info" name="request_info" 
      value="<?php if(isset($row['request_info']))
       echo $row['request_info']; ?>">
    </div>
    <div class="form-group  col-md-10">
      <label for="inputRequestDescription"style="color:white;">Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="request_desc"
     value="<?php if(isset($row['request_desc']))
       echo $row['request_desc']; ?>">
    </div>
    
    <div class="form-group  col-md-10">
      <label for="inputName"style="color:white;">Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requester_name"
      value="<?php if(isset($row['requester_name']))
       echo $row['requester_name']; ?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-10">
        <label for="inputAddress"style="color:white;">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requester_add1" 
        value="<?php if(isset($row['requester_add1']))
       echo $row['requester_add1']; ?>">
      </div>
      <div class="form-group col-md-10">
        <label for="inputAddress2"style="color:white;">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requester_add2"
         value="<?php if(isset($row['requester_add2']))
       echo $row['requester_add2']; ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-10">
        <label for="inputCity"style="color:white;">City</label>
        <input type="text" class="form-control" id="inputCity" name="requester_city" 
        value="<?php if(isset($row['requester_city']))
       echo $row['requester_city']; ?>">
      </div>
      <div class="form-group col-md-10">
        <label for="inputState"style="color:white;"style="color:white;">State</label>
        <input type="text" class="form-control" id="inputState" name="requester_state"
         value="<?php if(isset($row['requester_state']))
       echo $row['requester_state']; ?>">
      </div>
      <div class="form-group col-md-10">
        <label for="inputZip"style="color:white;">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requester_zip" 
        value="<?php if(isset($row['requester_zip']))
       echo $row['requester_zip']; ?>" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-10">
        <label for="inputEmail"style="color:white;">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requester_email" 
        value="<?php if(isset($row['requester_email']))
       echo $row['requester_email']; ?>">
      </div>
      <div class="form-group col-md-10">
        <label for="inputMobile"style="color:white;">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requester_mobile" 
         value="<?php if(isset($row['requester_mobile']))
       echo $row['requester_mobile']; ?>"onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-10">
        <label for="inputMobile"style="color:white;">Assign to Technician</label>
        <input type="text" class="form-control" id="assigntech" name="assign_tech">
      </div>
      
      <div class="form-group col-md-10">
        <label for="inputDate"style="color:white;">Date</label>
        <input type="date" class="form-control" id="inputDate" name="requester_date" 
        value="<?php if(isset($row['requester_date']))
       echo $row['requester_date']; ?>">
      </div>
    </div>

    <button type="submit" class="btn btn-success" name="assign" style="margin-left:20px; margin-top:20px;">Assign</button>
    <button type="reset" class="btn btn-secondary"style=" margin-top:20px; margin-left:20px;">Reset</button>

  </form>
  <?php if(isset($msg)) {echo $msg; } ?>

</div>
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
