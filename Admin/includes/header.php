
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
     <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">


  <link rel="stylesheet" href="../css/new.css">


</head>
<body>
       <nav class="navbar navbar-dark fixed top bg-danger
         flex-md-nowrap p-0 shadaw"><a class="navbar-brand col-sm-3
         col-md-2 mr-0" href="dashboard.php">OCRM</a></nav> 
        
         <div class="container-fluid" >
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none"style="margin-top:40px; ">
                <div class="sidebar-stickey" style="height:600px;">
                
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link active"  href="dashboard.php">
                          <i class="fas fa-techometer-alt"></i>Dashboard</a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href='work.php'>
                          <i class="fab fa-accessible-icon"></i>work Order</a></li>
                        <a class="nav-link"  href="request.php">
                          <i class="fas fa-align center"></i>Requests</a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href="requester.php">
                          <i class="fas fa-users"></i>Requester </a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href="workreport.php">
                          <i class="fas fa-table"></i>Workreport </a></li>
                          <li class="nav-item">
                        <a class="nav-link"  href="changepass.php">
                          <i class="fas fa-key"></i>Change Password </a></li>
                          
                          <li class="nav-item">
                        <a class="nav-link"  href="../logout.php">
                          <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
   </div>
         </nav>