<?php

session_start();
ob_start();

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="free-educational-responsive-web-template-webEdu"/>
	<meta name="author" content="webThemez.com"/>
	<title>Login</title>
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
					<span style="color: red;font-size: 25px;font-weight: bolder;font-family: cursive;">F</span>
          <span style="color: blue;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span>
          <span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">Z</span>
            <span style="color: black;font-size: 25px;font-weight: bolder;font-family: cursive;">.</span>
          <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">C</span>
          <span style="color: purple;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="login.php">Login</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="" style="height: 50px; width: 100%;background-color: #1684ee;padding: 5px;">
            <div class="container">
                    <span style="color: red;font-size: 25px;font-weight: bolder;font-family: cursive;">F</span>
          <span style="color: blue;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span>
          <span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">Z</span>
            <span style="color: black;font-size: 25px;font-weight: bolder;font-family: cursive;">.</span>
          <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">C</span>
          <span style="color: purple;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-6">
						<h3 class="section-title"> Login in Your Account</h3>
						
						<form id="f1" action="login.php" method="post" class ="form-light mt-20" >
							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" class="form-control" placeholder="User Name">
                             
							</div>
									<div class="form-group">
										<label>Password</label>
							<input type="Password" name="password" class="form-control" placeholder="Password">

                                     
									</div>
                            <div class="form-group">
                               
                               <button type="submit" name="btn" class="btn btn-two">Login</button>  
                            
                            <a href="SignUp.php"> Click here for  New Account</a>
                            <br />

                           
                                
                            </div>
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


    $username=(isset($_POST['username']))?$_POST['username']:'';
    $password=(isset($_POST['password']))?$_POST['password']:'';


    if(isset($_POST['btn']))
    {
    	$run=mysqli_query($conn,"select * from users where username='$username' and password='$password'");

    	if(mysqli_num_rows($run) > 0)
    	{
    		$row=mysqli_fetch_array($run);
    	$_SESSION['id']=$row['id'];
    	$_SESSION['name']=$row['name'];
    	$_SESSION['phone']=$row['phone'];
    		$_SESSION['address']=$row['address'];
    	$_SESSION['username']=$row['username'];

    	if($row['type']==0)
    	{
    		header("Location:admin.php");
    	}
    	elseif ($row['type']==1) {
    		header("Location:emp.php");
    	}
else{
	header("Location:index.php");
}

    	
    	
    	}

    	else{
    		 echo'<script>
alert(" log in  failed");
  </script>';
    	}
    }

ob_end_flush();
?>