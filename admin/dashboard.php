<?php
session_start();
include_once 'dbconnect.php';


$res=mysql_query("SELECT * FROM admins WHERE id=".$_SESSION['admin']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>My Portfolio</title>
	<link href="../css/demo.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/flexslider.css" media="screen" />

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/simpletextrotator.css" />
    
</head>
<body id="top" class="bgded fixed" style="background-image:url('../img/1.png');">
	<div class="container topbottom">
		<div class="row-fluid">

			<div class="span5">
				<img src="../img/3.jpg" alt="Profile Avatar" class="avatar">

				<div class="navigation">
					<div>
						<ul>
							<li>
								<img src="../img/about-icon.png">
								<a href="blog.php">Post Blogs</a>
							</li>
							<li>
								<img src="../img/about-icon.png">
								<a href="view_blog.php">View Blogs</a>
							</li>	
							
							<li>
								<img src="../img/about-icon.png">
								<a href="comment.php">View Comments / Feeds</a>
							</li>
							<li>
								<img src="../img/about-icon.png">
								<a href="logout.php">Log out</a>
							</li>
							
							
						</ul>
					</div>
				</div> 			
			</div>

			<div class="span7 homeabout">
				<div class="person">
					<span class="rotate greentext">Hello Admin</span>
				</div>
				</br></br>
				This is the dashboard. Please Select your options in the navigation area.
        				 </br></br></br></br></br></br>
                    <p align="center" > <font size="2">Copyright @ (Sudip Rai, 2016) </font></p>
				</div>	
		

<script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="../js/modernizr.js"></script> 
<script type="../text/javascript" src="js/jquery.fancybox.pack.js"></script> 
<script type="../text/javascript" src="js/jquery.isotope.min.js"></script> 
<script src="../js/custom.js" type="text/javascript"></script> 
<script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="../js/jqbar.js" type="text/javascript"></script>
  
  <script type="text/javascript">
   $(document).ready(function () {      
    
           
       $(".rotate").textrotator({
        animation: "spin",
        separator: ",",
        speed: 2000
        });
      
      
        });
    
    </script>
    <script type="text/javascript" src="../js/jquery.simple-text-rotator.min.js"></script>
      

				
</body>


</html>	