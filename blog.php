<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>My Portfolio</title>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/simpletextrotator.css" />
    
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
							
								
								<li> <img src="img/portfolio-icon.png"> <a href="portfolio.php">Portfolio / Works</a> </li>
							
							<li>
								<img src="img/followme-icon.png">
								<a href="cv.php">CV</a>
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
              <li> <img src="img/about-icon.png"> <a href="admin/login.php">Admin Login</a> </li>
            </ul>
					</div>
				</div> 		
				<div class="clear-fix"></div>
				<div class="clearfix"></div>
			</div>

			<div class="span7 homeabout">
				<div class="person">
					<span class="rotate greentext">Blogs</span>
				</div>
        <?php
         include("dbconnect.php");



  $query="select * from blogs";
  $run=mysql_query($query);
  
while($row=mysql_fetch_array($run)){
  $id=$row['id'];
  $name = $row['name'];
    $title = $row['title'];
    $date = $row['date'];
    $content=$row['content'];
      
  
?>
<font size="3">
  <table bgcolor="cyan" width="620px">
<tr>
</br>
 <td width="620px" ><span class="name">Posted by : </span> <?php echo $name; ?>  </br> 
 <span class="name"> Title : </span> <?php echo $title; ?> </br>
 <span class="name"> Date : </span> <?php echo $date; ?></br>
 <span class="name"> Content : </span> <?php echo $content; ?> </br></br>
 

 
</tr>

<?php } ?>
</table>
				
				 
					
				

                    <p align="center" > <font size="2">Copyright @ (Sudip Rai, 2016) </font></p>
				</div>	
				<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
  <script src="js/jqbar.js" type="text/javascript"></script>
  
  <script type="text/javascript">
   $(document).ready(function () {      
    
           
       $(".rotate").textrotator({
        animation: "spin",
        separator: ",",
        speed: 2000
        });
      
      
        });
    
    </script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
      

</body>


</html>	