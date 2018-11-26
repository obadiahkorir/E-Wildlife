<?php
session_start();
include("config.php");

?>

<!DOCTYPE >
<html >
<head>
	<title>E-WILDLIFE </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
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

<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="index.php" title="title">Home</a></h1>
				<div id="top-nav">
					<ul>
						<li> <a href="Userregistration.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> REGISTER</span></button></a></li>
					  <li><a href="Sign In.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> LOGIN</span></button></a></li>
					  <li> <a href="contact.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> CONTACT</span></button></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
		</div>
		<div id="navigation">
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li>
						<a href="animals.php">Animals</a>
						<div class="dd">
							
						</div>
					</li>
					   <li><a href="gameparks.php">Games Packs</a><li>
						<a href="gamereserves.php">Games Rseserves</a>
						<div class="dd">
							
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					 
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>

		<div id="main" class="shell">
			<!-- Begin Content -->
		<!-- Begin Slider -->
		<div id="slider">
		
		</div>
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
              <div class="support_desc">
  				<h2>Live Support</h2>
  				<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Welcome To Live Technical Support</span></p>
  				<p> Admin On behalf of <b>E-WILDLIFE</b> company we have welcome you 24/7 live support 
				  you can ask what ever you think about our Company.</p>
  			</div>

				<div id="form_wrapper" class="form_wrapper">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="POST" action="feedback_process.php" id="frmcontact">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" id="name"value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email" id="email"value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="phone" id="phone"value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="text"  id="textarea"> </textarea   maxlength="100"></span>
						    </div>
						   <div>
						   		<span><input type = "submit" name = "submit" id = "submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>

			</div>
			<div class="cl">&nbsp;</div>
		</div>
	
	 </div>
	</div>
<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>  E- WILDLIFE</h2>
						<div class="box-entry">
							<img src="images/simbas.jpg" alt="E-Wildlife" width="160" height="80"/>
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
		<div class="shout_box">
      <div class="header"> E-Wildlife  <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
	</div>
	</div>	
</body>
</html>