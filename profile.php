<!DOCTYPE html>

<?php
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
$q="SELECT * FROM bank_data WHERE account_no = '".$_GET["account_no"]."'";

//$q="SELECT * FROM bank_data";
	$m = mysqli_query($con,$q);
	$row = mysqli_fetch_array($m);
//echo $row['fullname'];	
//echo $row['account_no']
session_start();
if(!isset($_SESSION["login_user"])){
 header("Location: login.html");
}
else
{
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>profile</title>

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
	  
	  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:black"></i>
      </button>
	  
	  <div>
			<img src="image\axis.jpg" width="80" height="50" class="responsive">
	  </div>
	  
	  <div>
	  <h1 style="color:#9a3973">AXIS BANK</h1>
	  </div>

     
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
            <i class="fas fa-user-circle fa-fw-16 fa-2x" style="color:black"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!--<a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <!--<li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Account</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <!-- <h6 class="dropdown-header">Login Screens:</h6>-->
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="registers.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
           <!-- <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item active" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>-->
          </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="eprofile.php?account_no=<?php echo $row['account_no']?>">
            <i class="fas fa-user-circle"></i>
            <span>Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?account_no=<?php echo $row['account_no']?>">
            <i class="fas fa-user-circle"></i>
            <span>Edit Profile</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="income.php?account_no=<?php echo $row['account_no']?>">
            <i class="fab fa-wpforms"></i>
            <span>Income Form</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="record.php?account_no=<?php echo $row['account_no']?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Account Status</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

         <body class="background-image">
	<form action="update.php?account_no=<?php echo $_GET["account_no"];?>" method="post" enctype="multipart/form-data">
    <div class="container">
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-5">
      <div class="card card-register mx-auto ml-20, mr-30">
        <div class="card-header"><center>Profile</center></div><br>
		<div>
		<center><?php  echo "<img src='image/".$row['Profile']."' id='img' width='50' height='50'>"; ?><br>
		<!--<label for="firstName"><?php //echo $row['pic']?></label></center>-->
		<input type="file" name="pic1" id="pic1" onchange='readURL(this)' value="" > 
	<input type="hidden" name="English" id="English" value="<?php echo $row['Profile']?>" >

		</center>
		</div>
			
        <div class="card-body">
	</div>	
          <form method="post" >
		  <!--<div class="col-md-6">-->
		  
            <div class="form-group">
			
              <!--<div class="form-row">-->
               <!--<div class="col-md-6">-->
			   <div class="p">
			    <label for="firstName"> Name</label>
                 <!-- <div class="form-label-group">-->
				  
                    <input type="text" id="Name" value="<?php echo $row['fullname']?>" class="form-control" autofocus="autofocus"  pattern="[A-Za-z]{1,10}" disabled >
                 
                  </div><br>
<!--</div>-->
                <!--</div>-->
                <!--<div class="col-md-6">-->
				  <div class="p">
				  <label for="lastName">Account No.</label>
                  <!--<div class="form-label-group">--->
                    <input type="text" name="number" value="<?php echo $row['account_no']?>" class="form-control"  pattern="[0-9]{10}" maxLength=10 disabled>
                    
                  </div>
				<!--</div>-->
              <!--</div>-->			  
            </div>
			
			<div class="form-group">
			<div class="p">
			<label for="inputAddress">Address.</label>
              <!--<div class="form-label-group">-->
                <input type="text" name="Address" value="<?php echo $row['address']?>" class="form-control"  required >
              
              </div>
           <!-- </div>-->
			</div>
			
			<div class="form-group">
			<div class="p">
			<label for="inputEmail">Email address</label>
              <!--<div class="form-label-group">-->
                <input type="email" name="Email" value="<?php echo $row['email']?>" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="" required>
              
              </div>
            <!--</div>-->
			</div>  
           
			
			<div class="form-group">
			<div class="p">
			<label for="inputEmail">Mobile No.</label>
              <!--<div class="form-label-group">-->
                <input type="text" name="Number" value="<?php echo $row['phone']?>" class="form-control"  pattern="[0-9]{10}" maxLength=10 >
              
              </div>
           <!-- </div>-->
			</div>
			
			
            <div class="form-group">
			<!--<div class="p">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>-->
			<br>
			<div class="p">
			 <button type="submit" class="btn btn-primary btn-block" style="background-color:#2196f3">Submit</button></div>
            <!--<button type="submit" class="btn btn-primary btn-block" formaction="login.html" style="background-color:#dc3545">Submit</button></div>-->
          </form>
		 		 
          <!---<div class="row">
		  <div class="col md-6">
            <a class="d-block small mt-3" href="login.html" style="text-align:left">Login Page</a></div>
			<div class="col md-6">
            <a class="d-block small mt-3" href="forgot-password.html" style="text-align:right">Forgot Password?</a></div>
          </div>
         </div>
		 </div>-->
		  <div class="col-sm-3"></div>
        </div>
      </div>
	 
	
	
	
	
</form>
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
	
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
	
	<!--<script type="text/javascript">
                function Validate() {
        var password = document.getElementById("Pass").value;
        var confirmPassword = document.getElementById("CPass").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>-->
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
    
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img").setAttribute("src",e.target.result);
      };

      reader.readAsDataURL(input.files[0]); 
    }
  }
  </script>
<script>
function previewFile8() {
                var preview = document.querySelector('#<%=img8.ClientID %>');
                //var preview1 = document.querySelector('#if8');
            var file = document.querySelector('#<%=fld8.ClientID %>').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
                //preview1.src = reader.result;
                document.querySelector('#<%=hdf8.ClientID %>').value = file;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
            }
</script>
<script type="text/javascript">
	
    function validateFileType(){
        var fileName = document.getElementById("pic1").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
    }

</script>
<!--<script type="text/javascript">
function previewFile8() {
                var preview = document.getElementById('1');
                //var preview1 = document.querySelector('#if8');
            var file = document.getElementById('pic1').files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
                //preview1.src = reader.result;
                document.getElementById('English').value = file;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
            }
</script>-->
  </body>

</html>
<?php
}
?>
