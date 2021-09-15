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
					<li ><a href="index.php">Home</a></li>
					<li class="active"><a href="service.php">Our Services</a></li>
					<li><a href="map.php">View Location </a></li>
					
					<li><a href="login.php">Log in </a></li>
					

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

<div class="container-fluid">
	        <div class="bg-primary text-center" >							
<h1 class="animated flipInY delay1"><span style="color: red;font-size: 25px;font-weight: bolder;font-family: cursive;">H</span>
          <span style="color: blue;font-size: 25px;font-weight: bolder;font-family: cursive;">U</span>
          <span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">M</span>
            <span style="color: black;font-size: 25px;font-weight: bolder;font-family: cursive;">A</span>
          <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">N</span>
        
           <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">&nbsp; S</span>
<span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">U</span>


  <span style="color: red;font-size: 25px;font-weight: bolder;font-family: cursive;">P</span>

  <span style="color: purple;font-size: 25px;font-weight: bolder;font-family: cursive;">P</span> 
            <span style="color: lightblue;font-size: 25px;font-weight: bolder;font-family: cursive;">O</span>

  <span style="color: blue;font-size: 25px;font-weight: bolder;font-family: cursive;">R</span>
<span style="color: green;font-size: 25px;font-weight: bolder;font-family: cursive;">T</span>


      </h1>

						
						</div>
</div>








<div class="container">
	<div class="row">
				<form action="hucadd.php" method="post" enctype="multipart/form-data">

		<h3 class="text-center text-primary">Fill All The Fileds</h3>
	<div class="col-md-6 col-xs-12">
		<label>your name</label>
	<input type="text" name="name" class="form-control"><br>
<label>your phone</label>
		<input type="number" name="phone" class="form-control"><br>
<label>Proof of ownership</label>
	<input type="file" name="pw" class="form-control"><br>

<label>Identity Picture</label>
	<input type="file" name="ip" class="form-control"><br>
<label>unemployed</label>
	<input type="file" name="ue" class="form-control"><br>

	
	</div>
	<div class="col-md-6 col-xs-12">

		<label>Family Book</label>
	<input type="file" name="fb" class="form-control"><br>

		<label>Family Report</label>
	<input type="file" name="fr" class="form-control"><br>
<label>Proof of residence</label>
	<input type="file" name="pr" class="form-control"><br>
	<label>Proof Of Salary</label>
	<input type="file" name="ps" class="form-control"><br>






	</div>



	</div>
	<br>

		<div class="row">
		<div class="col-md-3 col-xs-12"></div>
		<div class="col-md-6 col-xs-12"><input type="submit" name="btn" value="Approve" class="btn btn-primary btn-block">
		</div>
		<div class="col-md-3 col-xs-12"></div>
	</div>
</div>
<br><br>
</form>


<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">Location</a> |
								<a href="courses.html">Our Service</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2020. 
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>

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


<?php
include'conn.php';
$name=(isset($_POST['name']))?$_POST['name']:'';
  $address=$_SESSION['address'];
   $phone=(isset($_POST['phone']))?$_POST['phone']:'';


   $uename=isset($_FILES['ue']['name'])?$_FILES['ue']['name']:'';
      $ue=isset($_FILES['ue']['tmp_name'])?$_FILES['ue']['tmp_name']:'';



   $fbname=isset($_FILES['fb']['name'])?$_FILES['fb']['name']:'';
      $fb=isset($_FILES['fb']['tmp_name'])?$_FILES['fb']['tmp_name']:'';


$pwname=isset($_FILES['pw']['name'])?$_FILES['pw']['name']:'';
      $pw=isset($_FILES['pw']['tmp_name'])?$_FILES['pw']['tmp_name']:'';



   $ipname=isset($_FILES['ip']['name'])?$_FILES['ip']['name']:'';
      $ip=isset($_FILES['ip']['tmp_name'])?$_FILES['ip']['tmp_name']:'';


$psname=isset($_FILES['ps']['name'])?$_FILES['ps']['name']:'';
      $ps=isset($_FILES['ps']['tmp_name'])?$_FILES['ps']['tmp_name']:'';


$prname=isset($_FILES['pr']['name'])?$_FILES['pr']['name']:'';
      $pr=isset($_FILES['pr']['tmp_name'])?$_FILES['pr']['tmp_name']:'';



   $frname=isset($_FILES['fr']['name'])?$_FILES['fr']['name']:'';
      $fr=isset($_FILES['fr']['tmp_name'])?$_FILES['fr']['tmp_name']:'';
   

    if(isset($_POST['btn']))
    {

    	move_uploaded_file($ue, "humans/$uename");

move_uploaded_file($pw, "humans/$pwname");

move_uploaded_file($fb, "humans/$fbname");

move_uploaded_file($fr, "humans/$frname");

move_uploaded_file($ip, "humans/$ipname");
move_uploaded_file($ps, "humans/$psname");
move_uploaded_file($pr, "humans/$prname");



    	$run=mysqli_query($conn,"insert into human (name,phone,address,owner,ide,unemp,fb,fr,pr,ps)values('".$name."','".$phone."','".$address."','".$pwname."','".$ipname."','".$uename."','".$fbname."','".$frname."','".$prname."','".$psname."')");

    	if(isset($run))
    	{
    		 echo'<script>
alert("send request  succesfully");
  </script>';

    	}

    	else{
    		 echo'<script>
alert("send reauest failed");
  </script>';
    	}
    }

ob_end_flush();
?>