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
                <li> <img src="img/about-icon.png"> <a href="admin/login.php">Admin Login</a> </li>
              </li>
            </ul>
					</div>
				</div> 		
				<div class="clear-fix"></div>
				<div class="clearfix"></div>
			</div>

			<div class="span7 homeabout">
				<div class="person">
					<span class="rotate greentext">Contact Me</span>
				</div>
				
				 
					
				
					<style>
body{}

#frmContact div{margin-bottom: 0px}
#frmContact div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:green;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
</style>
    <!-- container body --> 
<script>
function sendContact() {
  var valid;  
  valid = validateContact();
  if(valid) {
    jQuery.ajax({
    url: "contact_mail.php",
    data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&content='+$(content).val(),
    type: "POST",
    success:function(data){
    $("#mail-status").html(data);
    },
    error:function (){}
    });
  }
}

function validateContact() {
  var valid = true; 
  $(".demoInputBox").css('background-color','');
  $(".info").html('');
  
  if(!$("#userName").val()) {
    $("#userName-info").html("(required)");
    $("#userName").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val()) {
    $("#userEmail-info").html("(required)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("(invalid)");
    $("#userEmail").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#subject").val()) {
    $("#subject-info").html("(required)");
    $("#subject").css('background-color','#FFFFDF');
    valid = false;
  }
  if(!$("#content").val()) {
    $("#content-info").html("(required)");
    $("#content").css('background-color','#FFFFDF');
    valid = false;
  }
  
  return valid;
}
</script>
<div id="frmContact">
<div id="mail-status"></div>
<div>
<label style="padding-top:5px;">Name</label>
<span id="userName-info" class="info"></span><br/>
<input type="text" name="userName" id="userName" class="demoInputBox">
</div>
<div>
<label>Email</label>
<span id="userEmail-info" class="info"></span><br/>
<input type="text" name="userEmail" id="userEmail" class="demoInputBox">
</div>
<div>
<label>Subject</label> 
<span id="subject-info" class="info"></span><br/>
<input type="text" name="subject" id="subject" class="demoInputBox">
</div>
<div>
<label>Content</label> 
<span id="content-info" class="info"></span><br/>
<textarea name="content" id="content" class="demoInputBox" cols="800" rows="6"></textarea>
</div>
<div>
<button name="submit" class="btnAction" onClick="sendContact();">Send</button>
</div>
</div><div class="desciption">
                  <span class="rotate greentext">Follow Me</span></br>
				                    <ul class="social-stats clearfix">
                    	<li><a href="#" class="icon iconf"><span class="icon-facebook"></span></a> <span class="socialvalue">352</span></li>
                        <li><a href="#" class="icon icont"><span class="icon-twitter"></span></a> <span class="socialvalue">352</span></li>
                        <li><a href="#" class="icon icong"><span class="icon-google-plus"></span></a> <span class="socialvalue">352</span></li>
                        <li><a href="#" class="icon iconin"><span class="icon-linkedin"></span></a> <span class="socialvalue">352</span></li>
                    </ul>
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