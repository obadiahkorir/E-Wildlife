<?php
session_start();
include("config.php");

?>

<!DOCTYPE >
<html >
<head>
	<title> E-WILDLIFE Management SYstem </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <link rel="shortcut icon" href="images/logo.png" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	    <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Wildlife">E-WILDLIFE</a></h1>
				<div id="top-nav">
					<ul>
					<li> <a href="Userregistration.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> REGISTER</span></button></a></li>
					  <li><a href="Sign In.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> LOGIN</span></button></a></li>
					  <li> <a href="contact.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> CONTACT</span></button></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li>
						<a href="products.php">Animals</a>
						<div class="dd">
							
						</div>
					</li>
					   <li><a href="gameparks.php">Game Packs</a></li>
					   	   <li>
						<a href="gamereserves.php">Game Rseserves</a>
						<div class="dd">	
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	
		<div id="main" class="shell">
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					E-WILDLIFE<a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
				
					<h1 align="center"><font color="blue">About The Project Developers</font></h1><br>
					<h2>Developer</h2>
					<img src="images/simba.jpg" alt="Post Image" width="140" height="159" />
					<p>NANCY OGUTU </p>
					<p>. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			
			</div>
			
			<div class="cl">&nbsp;</div>
	
		</div>
			<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>  E- WILDLIFE</h2>
						<div class="box-entry">
							<img src="images/simba.jpg" alt="NANCY" width="160" height="80"/>
							<p>E-Wildlife Is a Wildlife Management System </p>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<div class="box social-box">
						<h2>We are on Social</h2>
						<ul>
							<li><a href="#" title="Facebook"><img src="images/social-icon1.png" alt="Facebook" /><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="#" title="Twitter"><img src="images/social-icon2.png" alt="Twitter" /><span>Twitter</span><span class="cl">&nbsp;</span></a></li>			
							<li><a href="#" title="RSS"><img src="images/social-icon4.png" alt="RSS" /><span>RSS</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="#" title="Blogger"><img src="images/social-icon7.png" alt="Blogger" /><span>Blogger</span><span class="cl">&nbsp;</span></a></li>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="box">
						<h2>Information</h2>
						<ul>
							<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="#" title="Contact Us">Contact Us</a></li>
							<li><a href="login.php" title="Log In">Log In</a></li>
							<li><a href="#" title="Account">Account</a></li>

						</ul>
					</div>
					<div class="box last-box">
						<h2>Categories</h2>
						<ul>
							<li><a href="#" title="Animals">Animals</a></li>
							<li><a href="#" title="Birds">Birds</a></li>
							<li><a href="#" title="Parks">Parks</a></li>
							<li><a href="#" title="Reserves">Reserves</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
						<p>&copy; KENYA WILDLIFE SERVICE <a href="index.php"><i><font color="green"> Welcome To Our Wildlife Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2018 Kenya Wildlife Service. All rights reserved. 
				</div>
				<!-- End Shell -->
			</div>
		</div>
		
	</div>
	</div>
</body>
</html>