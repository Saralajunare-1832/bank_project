<!DOCTYPE html>
<html lang="en">
<?php
//echo $_SERVER["account"];
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "bank");
		$sql = "UPDATE `bank`.`bank_data` SET `password` = '" . ($_POST["password"]). "',`confirm_password` = '" . ($_POST["conform-password"]). "' WHERE `bank_data`.`account_no` = '" . $_GET["account"] . "'";
		$result = mysqli_query($conn,$sql);
		//$success_message = "Password is reset successfully.";
		
	}
	?>


  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>forgot password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
  <style>
  .background-image{
	background-image: url("t5.jpg");
	
	}


.avatar {
	vertical-align: middle;
    width: 80px;
	height: 80px;
    border-radius: 50%;
}

.text-left{
text-align:left;
}

.text-right{
text-align:right;
}
.p
{
	padding-left:20px;
	padding-right:20px;
}
position: absolute;
    left: 0px;
    img {
    op: 0px;
    z-index: -1;
}


  </style>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top"style="background-color: white !important">

      <a class="navbar-brand mr-1" href="index.html"></a>
	  
	  <div>
			<img src="image\axis.jpg" width="80" height="50" class="responsive">
	  </div>
	  
	  <div>
	  <h1 style="color:#9a3973">AXIS BANK</h1>
	  </div>

      <!--<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:black"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!--<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>-->
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!--<i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>-->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!--<i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>-->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <!-- <i class="fas fa-user-circle fa-fw-16 fa-2x" style="color:black"></i>-->
         </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
           <!-- <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
<ol class="breadcrumb" style="background-color:#a63263">
            
			<li class="nav-item active">
          <a class="nav-link" href="index.html" style="color:white">
            <i class="fas fa-home "></i>
            <span>Home</span>
          </a>
		 </li>
		 <li class="nav-item active">
          <a class="nav-link" href="registers.html" style="color:white">
            <i class="fas fa-registered"></i>
            <span>Registration</span>
          </a>
		 </li>
		 <li class="nav-item active">
          <a class="nav-link" href="login.html" style="color:white">
            <i class="fas fa-sign-in-alt "></i>
            <span>Login</span>
          </a>
		 </li>
		 <li class="nav-item active">
          <a class="nav-link" href="forgot-password.html" style="color:white">
            <i class="fas fa-key"></i>
            <span>Forgot Password</span>
          </a>
		 </li>
			
          </ol>
    <div id="wrapper">

      <!-- Sidebar -
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Account</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item active" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="record.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Account Status</span></a>
        </li>
      </ul>-->

      <div id="content-wrapper">
          
		   <body class="background-image">

         <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><center>Reset Password</center></div>
        <div class="card-body">
          <div class="text-center mb-4">
		  
            <h4>Reset Password</h4>
			
	
           <!-- <p>Enter your email address and we will send you instructions on how to reset your password.</p>-->
          </div>
		  
		  <form method="post" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password " required="required" autofocus="autofocus">
                <label for="inputEmail">Enter password</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="password" name="conform-password" id="conform-password" class="form-control" placeholder="Enter password " required="required" autofocus="autofocus">
                <label for="inputEmail">Enter Conform password</label>
              </div>
            </div>
            <button type="submit" name="reset-password" onclick="return Validate()" class="btn btn-primary btn-block" style="background-color:#2196f3">Reset Password</button>
          </form>
          <div class="row">
		  <div class="col md-6">
            <a class="d-block small mt-3" href="register.html" style="text-align:left">Register an Account</a></div>
            <div class="col md-6">
			<a class="d-block small mt-3" href="login.html" style="text-align:right">Login</a></div>
          </div>
        </div>
      </div>
    </div>
	
	

		 <!-- Breadcrumbs-
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">404 Error</li>
          </ol>

          <!-- Page Content -
          <h1 class="display-1">404</h1>
		  <div>
		  <img src="F:\simple\bank\image\o.jpg" class="img-responsive">
          <p class="lead">Page not found. You can
            <a href="javascript:history.back()">go back</a>
            to the previous page, or
            <a href="index.html">return home</a>.</p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>-->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!--<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>-->

    <!-- Bootstrap core JavaScript-->
	<script type="text/javascript">
		function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("conform-password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        else
		{
		alert("Passwords is reset successfully...");
		}
		
    }
</script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
