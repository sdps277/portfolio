<?php
session_start();
include_once 'dbconnect.php';
$edit_id = @$_GET['edit'];

  $query="select * from comment where id='$edit_id' ";
  $run=mysql_query($query);
  
while($row=mysql_fetch_array($run)){
  
  $name = $row['name'];
    $content = $row['content'];
  ?>

<?php
include("dbconnect.php");
if(isset($_POST['submit']))
{ 
  $name = $_POST['name'];
  $content = $_POST['content'];
  
    
  

  mysql_query("UPDATE comment SET name ='$name', content ='$content' WHERE id = '$edit_id'")
        or die(mysql_error()); 
  header("Location: comment.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>My Portfolio</title>
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <!--[if lt IE 9]> 
			<style>
				.rw-wrapper{ display: none; } 
				.rw-sentence-IE{ display: block;  }
			</style>
	<![endif]-->
</head>
<body id="top" class="bgded fixed" style="background-image:url('img/1.png');">
	<div class="container topbottom">
		<div class="row-fluid">

			<div class="span5">
				<img src="img/avatar.jpg" alt="Profile Avatar" class="avatar">

				<div class="navigation">
					<div>
						<ul>
							<li>
								<img src="img/about-icon.png">
								<a href="index.php">About Me</a>
							</li>
							<li>
								
								<img src="img/portfolio-icon.png"> <a href="portfolio.php">Portfolio / CV / Works</a> </li>
							
							<li>
								<img src="img/followme-icon.png">
								<a href="follow.php">Follow Me</a>
							</li>
							<li>
								<img src="img/contact-icon.png">
								<a href="contact.php">Contact</a>
							</li>
							<li> <img src="img/about-icon.png"> <a href="comment.php">Post Comments / Feeds</a> </li>	
						<li>
								<img src="img/followme-icon.png">
								<a href="blog.php">Blogs</a>
							</li>
						</ul>
					</div>
				</div> 			
			</div>

			<div class="span7 homeabout">
				
				<div class="person">
					<span class="name">Update Comment</span>
				</div>
				<div class="desciption">
				
<span class="name">Update </span></br><p class="font20">
					<form class="form" method="POST">
		
		<p clas
		s="name">
			<input type="text" name="name" id="name" placeholder="Enter Name" required />
			
		</p>
		
		
		
		
		<p class="content">
			<textarea name="content" placeholder="Content" required/></textarea>
		</p>
		</br>
	
		<p class="submit">

			<input type="submit" value="Update" name="submit"/>
		</p>
<?php }?>
	</form>
	<p align="center" > <font size="2">Copyright @ (Sudip Rai, 2016) </font></p>
				</div>	
			</div>

		</div>
	</div>


<script src="js/modernizr.custom.72111.js"></script>
 
				
</body>


</html>	