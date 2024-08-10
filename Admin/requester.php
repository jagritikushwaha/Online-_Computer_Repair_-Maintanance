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

<div class="col-sm-9 col-md-10 mt-5 text-center" >
  <!--Table-->
  <p class=" bg-dark text-white p-2" style="margin-top:40px;">List of Requesters</p>
  <?php
    $sql = "SELECT * FROM userlogin_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr style="color:white;">
    <th scope="col">Requester ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr style="color:white;">';
    echo '<th scope="row">'.$row["r_login_id"].'</th>';
    echo '<td>'. $row["r_name"].'</td>';
    echo '<td>'.$row["r_email"].'</td>';
    echo '<td>';
    echo '<form action="editreq.php" method="POST"
     class="d-inline">';
     echo '<input type="hidden" name="id" value='. $row["r_login_id"] .'><button type="submit" class="btn 
     btn-info mr-3" name="edit" value="edit"><i class="fas fa-pen"></i></button>';
     echo '</form>';  
    echo '<form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["r_login_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>';
    echo '</form>';
    echo'</td>';
   echo '</tr>';

  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM userlogin_tb WHERE r_login_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>




      </div>
</div>      
            <!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
    

         
</body>
</html>






