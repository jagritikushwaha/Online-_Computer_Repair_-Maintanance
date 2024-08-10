<?php
include('dbconection.php');
 if(isset($_POST['rSignup']))
{
       $rName= $_POST['rName'];
       $rFname= $_POST['rFname'];
       $rEmail= $_POST['rEmail'];
       $rPhoneno= $_POST['rPhoneno'];
       $rPassword= $_POST['rPassword'];
       $rCpassword= $_POST['rCpassword'];
       $rgender=$_POST['gender'];
       $sql= "INSERT INTO userlogin_tb(r_name, r_uname, r_email, r_phoneno, r_password, r_cpassword, r_gender) 
        VALUES('$rName','$rFname','$rEmail','$rPhoneno','$rPassword','$rCpassword','$rgender')";
       if($conn->query($sql) == TRUE)
       {
         $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
       }     else
       {
        $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
       }
       
}

?>


<div class="conttainer">
    <div class="title " style=" text-align:center;font-size:30px; ">Create an Account</div>

    <div class="content">
      <form method="post" action="">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="rName" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text"name="rFname" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text"name="rEmail" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"name="rPhoneno" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="rPassword" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text"name="rCpassword"  placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <input type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" style="width:100%;" name="rSignup" value="Sign Up">
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
          <?php if(isset($regmsg)) {echo $regmsg; } ?>

        
      </form>
    </div>
  </div>