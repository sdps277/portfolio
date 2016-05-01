<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>My Portfolio</title>
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/jqbar.css" />
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
			</div>

			<div class="span7 homeabout">
				<div class="person">
					<span class="name">Sudip Rai</span>
					<div class="font16">Student at <span class="rotate greentext">The British College</span></div>
				
				</br>
				<span class="rotate greentext">About Me</span>
			</div>
				<div class="desciption home">
					<p>Known as <span class="rotate greentext">Sudip</span>, I am a web designer and programmer</span> living in Nepal. Currently I am involved with the Bristish College and about to graduate in Bachelors regarding Information Technology. Go through my portfolio for more details about me and my programming background. </br>
						</br>
						<span class="rotate greentext">Hobbies</span></br>
						1. Guitar</br>
						2. Basketball</br>
						3. Travelling </br>
						4. Hanging out with friends </br>
						5. Eating </br>
						6. Cooking</br>
						7. Football

					</br>

</br>
	<div>


</div>
						<span class="rotate greentext">Skills </span>
					</p>
				</div>	
				<div class="row">
					<div class="span6">
						 <div class="bars">
							<div id="bar-1">
							</div>
							<div id="bar-2">
							</div>
							<div id="bar-3">
							</div>
							<div id="bar-4">
							</div>
                           
						</div>
					</div>
					<div class="span6">
                    	<div class="user-tip"><img src="img/img-tip.png" alt="" /></div>
						<div id="bars-content">
							<div  class="content" id="content-1">Self-referentially short for PHP: Hypertext Preprocessor, an open source, server-side, HTML embedded scripting language used to create dynamic Web pages.</div>
							<div  class="content" id="content-2">A Microsoft operating system platform that incorporates applications, a suite of tools and services and a change in the infrastructure of the company's Web strategy. The .NET Framework supports building and running of next gen of applications and XML Web services.</div>
							<div  class="content" id="content-3">Abbreviated as MVC, Model-View-Controller is the term used to describe a software paradigm that separates objects into one of three categories:
models for maintaining data
views for displaying all or a portion of the data
controllers for handling events that affect the model or views.
</div>
							<div  class="content" id="content-4">A high-level programming language that is a commonly used foundation for developing and delivering content on the Web.</div>
						
						</div>

					</div>
				</div>			
                    <p align="center" > <font size="2">Copyright @ (Sudip Rai, 2016) </font></p>
			</div>

		</div>
	
	</div>

	
	</br>
</br>
</br>
</br>


	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/jqbar.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	 $(document).ready(function () {			
		
            $('#bar-1').jqbar({ label: 'PHP', value: 85, barColor: '#21ba82' });

            $('#bar-2').jqbar({ label: '.NET', value: 50, barColor: '#21ba82' });

            $('#bar-3').jqbar({ label: 'MVC', value: 70, barColor: '#21ba82' });

            $('#bar-4').jqbar({ label: 'Java', value: 75, barColor: '#21ba82' });


          
			
			$('#bars-content .content').css({'opacity':'0',display:'none'});
			$('#bars-content .content:eq(0)').css('display','block').animate({opacity:1},1000);
			$('.jqbar:first').addClass('active');
			$('.jqbar').hover(function(){ $(this).addClass('hover');},function(){ $(this).removeClass('hover');});
			$('.jqbar').click(function(){
				$('.jqbar').removeClass('active');
				var id = $(this).addClass('active').attr('id').replace('bar','content');				
				$('#bars-content .content').css({'opacity':'0',display:'none'});
				$('#' + id).css('display','block').animate({opacity:1},1000);
				
			});		
			
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