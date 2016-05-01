<?php
session_start();


include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $name = mysql_real_escape_string($_POST['name']);
 $title = mysql_real_escape_string($_POST['title']);
 $date = mysql_real_escape_string($_POST['date']);
 $content = mysql_real_escape_string($_POST['content']);
 
    
 
 
 
 if(mysql_query("INSERT INTO blogs(name,title,date,content) VALUES('$name','$title','$date',
 	'$content')"))
 {
 	header("Location: view_blog.php");
 	header("Refresh: 0");
  ?>

        <script>alert('Successfully added. !! ');</script>
        
        <?php
 }
 else
 {
  ?>
        <script>alert('Error while adding your details...');</script>
        <?php
 }
}
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

	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style2.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/simpletextrotator.css" />
    <!--[if lt IE 9]> 
			<style>
				.rw-wrapper{ display: none; } 
				.rw-sentence-IE{ display: block;  }
			</style>
	<![endif]-->
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
					<span class="rotate greentext">Blogs</span>
				</div>
					<div class="desciption">





</br>
<span class="rotate greentext">Post  (Use appropriate enter from keyboard between paragrhaps while posting in your comments and feeds) </span></br>
					<form class="form" method="POST">
		
		<p clas
		s="name">
			<input type="text" name="name" id="name" placeholder="Enter Name" required />
			
		</p>
		
		<p clas
		s="title">
			<input type="text" name="title" id="title" placeholder="Title" required />
			
		</p>
		
		
		<p clas
		s="date">
			<input type="date" name="date" id="date" placeholder="date" required />
			
		</p>
		
		
		<p class="content">
			<textarea name="content" placeholder="content" required/></textarea>
		</p>
		

		</br>
	
		<p class="submit">

			<input type="submit" value="Post" name="btn-signup">
		</p>

	</form>
	</br></br>
</br>
	<p align="center" > <font size="2">Copyright @ (Sudip Rai, 2016) </font></p>
				</div>	
			</div>

		</div>
	</div>


<script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="../js/modernizr.js"></script> 
<script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="../js/jquery.isotope.min.js"></script> 
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