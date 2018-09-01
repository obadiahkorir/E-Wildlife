<?php
include("config.php");
include("usersession.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> E-WILDLIFE</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
	 
	 
	 <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />

		<script>
			/*
				VIEWPORT BUG FIX
				iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
			*/
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	
	 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>

	<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->

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

<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" title="Suncart">E-WILDLIFE</a></h1>
				<div id="top-nav">
					<ul>
						<li><a href="#" title="Login Email"> <span class="janan"> <?php echo "Your Email Is: ". "<i><b>".$login_session."</b></i>" ;?> </span></a></li>
						
							 <li > <a href="contact.php" title="Contact"> <span class="jananalibritish"> Contact  </span></a>  </li>
					       <li class="janan"><a href="logout.php"><span class="jananalibritish">Logout </span></a></li>
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	<img src="images/book.png" align="right" alt="Slide Image" />
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
					<li class="active"><a href="home.php" title="Home">Home</a></li>
					
					<li><a href="profile.php" title="Profile">Profile</a></li>
					<li>
						<a href="products.php">Category</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="warehouse_1.php"> FoodStuff</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_1.php">Fruits</a></li>
                                            <li><a href="warehouse_1.php">Biscuits</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="warehouse_2.php"> Beverage</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_2.php">Bavaria</a></li>
                                             <li><a href="warehouse_2.php">Reddbull</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_3.php"> Cleaning Material</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_3.php">Fairy</a></li>
                                            <li><a href="warehouse_3.php">Harpic</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_4.php"> Clothes</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_4.php">Suit</a></li>
                                              <li><a href="warehouse_4.php">T.shirts</a></li>
										</ul>
									</div>
								</li>
								
							</ul>
						</div>
					</li>
					   <li><a href="products.php"> Products</a></li>
					    <li>
						<a href="products.php">Warehouse</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="warehouse_1.php">Som Food Staff</a>
									
								</li>
								
								<li>
									 <a href="warehouse_2.php">Som Beverages</a>
									
								</li>
								
								<li>
									<a href="warehouse_3.php">Som House Staff</a>
									
								</li>
								
								<li>
									<a href="warehouse_4.php">Som Clothes</a>
									
								</li>
								
							</ul>
						</div>
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
					
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/simba.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>The</span><span class="small"></span> &nbsp; Best Animals</h4>
							
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/simbasi.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>This </span><span class="small"> </span>Summer<span class="small"> With Free Tickets</span></h3> 
					
						
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
							<li>
						<img src="images/gaz.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span> Choose</span><span class="small"> Where</span>You Want</h3> 
							
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/rhino.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>Great Deals  </span><span class="small">&amp;</span><span>Adventure</span></h4>
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/hips.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h3><span>View </span><span class="small">The</span> Hippos</h3> 
					
							
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/elepants.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h2><span>Great</span>Adventure</h2>
						
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/hipos.jpg" alt="Slide Image" />
						<div class="slide-entry">
							<h4><span>The</span><span class="small"></span> &nbsp;<span>Best</span>  Availlable</h4>
							
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
					<li>
						<img src="images/elepants.jpg" alt="Slide Image" />
						<div class="slide-entry">
					
							<h4 class="short"><span>Best</span> Season Offers</h4>
							
							<a href="products.php" class="button" title="Buy now"><span>BOOK NOW</span></a>
						</div>
					</li>
				</ul>
				<div class="cl">&nbsp;</div>
				<div class="slider-nav">
					
				</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
						<h2>Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="160" width="260"/>
					E-WILDLIFE MANAGEMENT SYSTEM. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
		<!-- Begin Products -->
			
				<div id="products">
				<h2>FEATURED GAME PARKS AND RESERVES</h2>

	      <div class="section group">
		  
		  <?php
    //current URL of the Page. cart_update.php redirects back to this URL
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
			echo '<div class="button"><span><img src="images/book.png" alt="" /><button class="cart-button"  class="add_to_cart">Add to Cart</button></span> </div>';
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
			
			<!-- End Products -->			
			
			<!-- Begin Products Slider -->
			<div id="product-slider">
				<h2>BEST AVAILLABLE ANIMALS</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from product") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="products.php" title="Product Link"><img src="images/<?php echo $row['Picture']?>" alt="IMAGES" /></a>
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
			<!-- End Products Slider -->
			
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
							<li><a href="#" title="Clothes">Animals</a></li>
							<li><a href="#" title="Cleaning Material">Birds</a></li>
							<li><a href="#" title="Fizzi Drinks">Parks</a></li>
							<li><a href="#" title="Food Stuff">Reserves</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
						<p>&copy; KENYA WILDLIFE SERVICE <a href="index.php"><i><font color="fefefe"> Welcome To Our Wildlife Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2017 Kenya Wildlife Service. All rights reserved. 
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->
		
		
	<!-- End Wrapper -->
</body>
</html>