<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>Register</title>
	<link rel="favicon" href="assets/images/favicon.png"/>
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"/>
	<link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="login.php">Login</a></li>
					<li class="active"><a href="SignUp.php">Register</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	

	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-6">
						<h3 class="section-title"> Create Your Account</h3>
						
						<form  action="signup" method="post" class ="form-light mt-20" role="form">
							<div class="form-group">

                              <input type="text" name="username" class="form-control" placeholder="User Name">
                               
							</div>
							<div class="form-group">
                                     <input type="Password" name="password" class="form-control" placeholder="Password">
									</div>
                            
                            <div class="form-group">
                            	<input type="text" name="name" class="form-control" placeholder="Full Name">
                                
							</div>
                            <div class="form-group">
                            	<input type="text" name="phone" class="form-control" placeholder="phone">
                                
							</div>

							    <div class="form-group">
                            	<input type="text" name="address" class="form-control" placeholder="address">
                                
							</div>

                                <button name="btn" type="submit" class="btn btn-two">Create</button>  
                            <br />
                             <label id="l1"></label>
                                
                           
						</form>
					</div>
				</div>
			</div>
	<!-- /container -->

	 


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>

<?php
include'conn.php';
$name=(isset($_POST['name']))?$_POST['name']:'';
  $address=(isset($_POST['address']))?$_POST['address']:'';
   $phone=(isset($_POST['phone']))?$_POST['phone']:'';
    $username=(isset($_POST['username']))?$_POST['username']:'';
    $password=(isset($_POST['password']))?$_POST['password']:'';


    if(isset($_POST['btn']))
    {
    	$run=mysqli_query($conn,"insert into users (name,phone,address,username,password)values('".$name."','".$phone."','".$address."','".$username."','".$password."')");

    	if(isset($run))
    	{
    		 echo'<script>
alert("create account succesfully");
  </script>';

    	}

    	else{
    		 echo'<script>
alert("create account failed");
  </script>';
    	}
    }


?>