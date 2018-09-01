<?php
session_start();
include("config.php");

?>

<!DOCTYPE html >
<html >
<head>
	<title>E-Wildlife </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
	 <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />
		<script>
			
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>

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
	<div id="wrapper">
	
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
					<center><h2><big> E-WILDLIFE MANAGEMENT SYSTEM</big> </h2></center>
				<h1 id="logo"><a class="notext" href="#" title="E-Wildlife">E-WildLife</a></h1>
				
				<div id="top-nav">
					<ul>
					
						<li><a href="contact.php" title="Contact"><span>CONTACT</span></a></li>
						<li><a href="Sign In.php" title="Sign In"><span>SIGN IN</span></a></li>
						<li><a href="Userregistration.php" title="Register"><span>REGISTER</span></a></li>
						<li><a href="admin.php" title="Admin Panel"><span>Home</span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
				<h1 align="right">Sign in to Make Reservations.</h1>
				<input type="image" src="images/book.png" align="right" onclick="alert('Please Sign IN to Make Reservations!')" width="132" height="61" />
	 
<dl id="acc">	
<dt class="active">								
<p class="shopping" ></p>
</dt>
</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li>
						<a href="animals.php">Animals</a>
						
					</li>
					   <li><a href="gameparks.php">Games Packs</a></li>
					   	   <li>
						<a href="gamereserves.php">Games Reserves</a>
						
					</li>
					  <li><a href="about.php">About Us</a></li>	  
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->
<!-- Begin Slider -->
		<div id="slider">
			<!-- Begin Shell -->
			<div class="shell">
				<ul class="slider-items">
					<li>
						<img src="images/simbas.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span> Lions</span>Take A Look</h2>
					
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/simba.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>The</span><span class="small"></span> &nbsp; Best Animals</h4>
							
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/simbasi.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>This </span><span class="small"> </span>Summer<span class="small"> With Free Tickets</span></h3> 
					
						
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
							<li>
						<img src="images/gaz.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span> Choose</span><span class="small"> Where</span>You Want</h3> 
							
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/rhino.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>Great Deals  </span><span class="small">&amp;</span><span>Adventure</span></h4>
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/hips.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>View </span><span class="small">The</span> Hippos</h3> 
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/elepants.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span>Great</span>Adventure</h2>
						
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/hipos.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>The</span><span class="small"></span> &nbsp;<span>Best</span>  Availlable</h4>
							
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/elepants.jpg" alt="Slide Image" />
						<div class="slide-entry">
					
							<h4 class="short"><span>Best</span> Season Offers</h4>
							
							<a href="index.php" class="button" onclick="alert('Please Sign IN to Make Reservations!')"  title="BOOK NOW"><span>BOOK NOW</span></a>
						</div>
					</li>
				</ul>
				<div class="cl">&nbsp;</div>
				<div class="slider-nav">
					
				</div>
			</div>
			<!-- End Shell -->
		</div>
		
		<!-- Begin Main -->
		<div id="main" class="shell">
			<h1><marquee>E-WILDLIFE MANAGEMENT SYSTEM.  ALL ARE WELCOMED</marquee></h1>
			<div class="cl">&nbsp;</div>
				<div id="products">
				<h2>FEATURED GAME PARKS AND RESERVES</h2>

	      <div class="section group">
		  
		  <?php
  
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY Product_ID ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid_1_of_4 images_1_of_4">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->Picture.'"></div>';
            echo '<div class="product-content"><h2><b>'.$obj->productName.'</b> </h2>';
            echo '<div class="product-desc">'.$obj->Description.'</div>';
            echo '<div class="product-info">';
			echo '<div class="button"><span><img src="images/book.png" align="right"   alt="" /><button class="cart-button"  class="add_to_cart">Please Login</button></span> </div>';
			echo '</div></div>';
            echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
				<div class="cl">&nbsp;</div>
			</div>
			<div id="product-slider">
				<h2>BEST AVAILLABLE ANIMALS</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from product") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="animals.php" title="Product Link"><img src="images/<?php echo $row['Picture']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['productName']?></b></h4>
							<span class="number"><span>ENTRY FEE:<big style="color:green">KSHs<?php echo $row['Price']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Animals Slider -->
			
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
	
		<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>  E- WILDLIFE</h2>
						<div class="box-entry">
							<img src="images/logo.png" alt="SomStore" width="160" height="80"/>
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