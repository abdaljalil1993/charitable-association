

<?php
session_start();
ob_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>FOZ</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
    <link rel="stylesheet" type="text/css" href="animate.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<span style="color: red;font-size: 25px;font-weight: bolder;font-family: cursive;">F</span>
          <span style="color: blue;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span>
          <span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">Z</span>
            <span style="color: black;font-size: 25px;font-weight: bolder;font-family: cursive;">.</span>
          <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">C</span>
          <span style="color: purple;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span></a>
			</div>
			<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="emp.php">Home</a></li>
			
					<li><a href="empmhc.php">Manage Health Request </a></li>
					
					<li><a href="empmoc.php">Manage Orphans Request </a></li>
						<li><a href="empmhuc.php">Manage HumanSupport Request </a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


<?php 
include'conn.php';
$x=mysqli_query($conn,"select * from healthcare where name='".$_SESSION['name']."' and phone='".$_SESSION['phone']."'");

$row=mysqli_fetch_array($x);
if(mysqli_num_rows($x) ==0 )
echo'<h1> no data  </h1>';
?>




<h1><?php  echo $row['name'];  ?> </h1>





<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-8 panel">
						<div class="panel-body">
							<p class="simplenav">
							 <a href="index.html">Home</a> | 
                <a href="about.html">Manage user</a> |
                <a href="courses.html">Manage Orphans Request</a>
                <a href="courses.html">Manage HumanSupport Request</a>
                <a href="courses.html">Manage Healthy Request</a>
							</p>
						</div>
					</div>

					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2020. Template by <a href="http://www.facebook.com/fadi.debow" rel="develop"></a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
 
    
</body>
</html>
