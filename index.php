<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
include_once 'root/includes/db_connect.php';
include_once 'root/includes/functions.php';
sec_session_start();
?>

<html>
<head>
<title>NIPUण </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="Enginery Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(
hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-- Navigation -->
 <script src="js/navigation.js" type="text/javascript"></script>
    <script>
        $(function() 
        {
            $(".nav").each(function()
            {
                new ResponsiveNav($(this), 1680);
            });
        });
    </script>    
</head>
<body>
<div class="wrap"> 	
<div class="header">	
     <div class="header-top">
		 <div class="logo">
			 <h1><a href="index.php">NIPUण </a></h1>
		 </div>
	    <div id="text-6" class="visible-all-devices header-text ">			
	    	<div class="textwidget">
		        Want Job ? &nbsp;<h5 class="phone"><a href='tel:9502429261'>9502429261</a></h5>
			<br />
			<br />
		<?php if (login_check($mysqli) == true) : echo $_SESSION['email'] ; 
			echo "&nbsp;&nbsp;<a href='logout.php'>Logout</a>"	
		?>
		<?php else :
		echo "<a href='user_login.php'>Login</a>&nbsp;&nbsp;<a href='register.php'>Register</a>";
		 endif; ?>
		</div>	
		</div>
		 <div class="clear"></div> 
	   </div>
   </div>	
   
   <div class="banner">
         <div class="nav">
				<div class="navControl">
				    <a href="#">Menu</a>
				</div>
	    	  	<ul>
	    	  	   <li><a href="index.php">Home</a></li>
				   <li><a href="about.php">About us</a></li>
						
				   <li><a href="contact.php">Contact</a></li>
				  
				</ul>
	    	</div>
	    	<div class="slider">
	 			<div class="slider-wrapper theme-default">
		            <div id="slider" class="nivoSlider">
		                <img src="images/banner1.jpg" alt="" />
		                <img src="images/banner2.jpg" alt="" />
		                <img src="images/banner3.jpg" alt="" />
		                <img src="images/banner4.jpg" alt="" />
		                <img src="images/banner5.jpg" alt="" />
		            </div>
	             </div>
	        </div>
   </div>

  <div class="main">
	   <div class="content-top">
			 <div class="top-box">
				<h2>How can we help you?</h2>
				<hr>
				
			 </div>
  <div class="section group">
	<table border="1" align="right" width="100%" >
		<tr>
		<td>

			  
				<div class="col_1_of_5 span_1_of_5">
<a href="worker_login.php" >
					<div class="grid_img">
					 	 <img src="images/worker2.gif" alt="Want work"/>
<h3>Want Work</h3>
</a>
					</div>
					
				</div>
		</td>
		<td>
				<div class="col_1_of_5 span_1_of_5">
<a href="user_home.php">
					<div class="grid_img">
						<img src="images/user.gif" alt="Want Help" height="100%" width="30%"/>
<h3>Want help</h3>
</a>
					</div>

				</div>
		</td>
		</tr>
	</table>
				
				<div class="clear"></div>
			</div>
		</div>
		
	   </div>
	   <div class="footer">
		  <div class="footer-text">
				<h2>Get in touch</h2>
				
				<ul class="follow_icon">
					<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pin.png" alt=""></a></li>
				</ul>
				<div class="copy">
					
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
