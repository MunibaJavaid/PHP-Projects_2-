<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<?php include '../confiq/connection.php';?>


<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Contact Approach Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<!-- Custom Theme files -->
<link href="Assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="Assets/css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="Assets/fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="Assets/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

</head>
<body style="background-image: url('Assets/images/body.webp')";>
<h1>Welcome To Lab Automation</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="left-form-w3-agile">
			<h2>Login </h2>
			<form action="Insert.php" method="post">
			<div class="upper">
			
				<div class="form-sub-w3">
				<div class="icon-w3">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
					<input type="email" name="Email" placeholder="Youremail@email.com" required="" />
				</div>
                <div class="form-sub-w3">
				<div class="icon-w3">
                <i class="fa fa-key" aria-hidden="true"></i>
				</div>
					<input type="text" name="Pass" placeholder="Password" required="" />
				</div>
				</div>
					<div class="submit-w3l">
					<input type="submit" name="ins" value="">
					</div>
			</form>
		</div>
<!--//form-ends-here-->
		<div class="right-map-w3-agile">
		<h2>Locate us</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14472.557791145513!2d67.03304700000002!3d24.92731900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1670015047680!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<ul class="add">
								<li class="dot"> BD 2 Mars, N1 136, Morocco Casablanca</li>
								<li class="mobile"> +212 522 275 386</li>
								<li class="mes"> <a href="mailto:info@example.com">Example @mail.com</a></li>
						</ul>
						
					<div class="map-grid-right">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="clear"></div>
					<div class="social-icons-right">
					<h3> Catch on Social</h3>
						<ol>
							<li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="twt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="drb"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li class="ldn"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ol>
					</div>
					
		</div>
<div class="clear"></div>
</div> 
</body>
</html>