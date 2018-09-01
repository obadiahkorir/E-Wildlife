<?php
session_start();
include("config.php");

?>

<!DOCTYPE >
<html >
<head>
	<title> E-WildLife </title>
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
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {

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
	
	$(".close_btn").click(function (e) {
		var toggleState = $('.toggle_chat').css('display');

		$('.toggle_chat').slideToggle();
		
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
	
	<div id="wrapper">
	
		<div id="header">
		
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" >E-WildLife</a></h1>
				<div id="top-nav">
					<ul>
					
						<li><a href="contact.php"" title="contact"><span>Contact</span></a></li>
						<li><a href="Sign In.php" title="Sign In"><span>Sign In</span></a></li>
					</ul>
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
					   <li><a href="gameparks.php">Game Packs</a></li>
					   	   <li>
						<a href="gamereserves.php">Game Reserves</a>
						<div class="dd">
							
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
		
		</div>
		<div id="slider">
		</div>
		
		<div id="main" class="shell">
			<marquee><h2>BOOK YOUR FAVOURITE GAME PARK</h2></marquee>
			<div id="content">
			<div id="product-slider">
				<h2>BEST AVAILLABLE ANIMALS</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($conn,"select * from reserves") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="gamereserves.php" title="Reserves"><img src="images/<?php echo $row['picture']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['reserve_name']?></b></h4>
							<span class="number"><span>ENTRY FEE:<big style="color:green">KSHs<?php echo $row['fee']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			</div>
				
<?php
$result = mysqli_query($conn,"SELECT * FROM reserves");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 
			<thead><tr> <th colspan="7"><h2>BOOK YOUR FAVOURITE GAME PACK</h2></th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
            <th>Game Reserve Name</th>			  
    		<th>County</th>
		    <th>Availlable Animals</th>
		    <th>Entry Fee</th>
		    <th>Status</th>
            <th>Picture</th>	
            <th>Book</th>			
    		
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {
  	?>
      <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['reserve_name']; ?></td>
    <td><?php echo $row['county']; ?></td>
   <td><?php echo $row['animals']; ?></td>
    <td><?php echo $row['fee']; ?></td>
	<td><?php echo $row['status']; ?></td>
	<td><img src="images/<?php echo $row['picture']; ?>" width="40" height="40"></td>
    <td> <a href="Sign In.php?booking=<?php echo $row['reserve_name']; ?>"  onClick="edit(this);" title="BOOKING" >  <input type="image" src="images/book.png" title="BOOK NOW"> </a>
   </td>
    </tr>

  <?php }mysqli_close($conn);?>
      </tbody>
</table>
	  
 </div> 
		<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>  E- WILDLIFE</h2>
						<div class="box-entry">
							<img src="images/simbas.jpg" alt="E-WildlIfe" width="160" height="80"/>
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
			</div>
			<div class="copy">
		
				<div class="shell">
						<p>&copy; KENYA WILDLIFE SERVICE <a href="index.php"><i><font color="fefefe"> Welcome To Our Wildlife Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2018 Kenya Wildlife Service. All rights reserved. 
				</div>
			
			</div>
		</div>

</body>
</html>