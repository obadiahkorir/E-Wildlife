<?php
session_start();
include("config.php");

?>
<!DOCTYPE >
<html >
<head>
	<title> E-WildLife </title>
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
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
				<h1 id="logo"><a class="notext" href="#" >E-WildLife</a></h1>
				<div id="top-nav">
					<ul>
					
						<li> <a href="Userregistration.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> REGISTER</span></button></a></li>
					  <li><a href="Sign In.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> LOGIN</span></button></a></li>
					  <li> <a href="contact.php" <button name="save" type="submit" id="delbutton" title="Click to Register"  class="a-btn" > <span class="a-btn-text"> CONTACT</span></button></a></li>
					</ul>
				</div>
				
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
						<a href="animals.php">Animals</a>
						<div class="dd">
							
									</div>
								</li>
								
							</ul>
						</div>
					</li>
					   <li><a href="gameparks.php">Games Packs</a>
					   <div class="dd">
							
						</div></li>

					   	   <li>
						<a href="products.php">Games Reserves</a>
						<div class="dd">
							<
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
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
			$result=mysqli_query($conn,"select * from animals") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="animals.php" title="Animals"><img src="images/<?php echo $row['Picture']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['animal_name']?></b></h4>
							<span class="number"><span>ENTRY FEE:<big style="color:green">KSHs<?php echo $row['entry_fee']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			</div>
				<script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
    
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'empRegistration.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
		
<?php
$result = mysqli_query($conn,"SELECT * FROM animals");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7"><h2>BOOK YOUR FAVOURITE GAME PACK</h2></th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
            <th>Animal Name</th>
            <th>Game Park</th>			  
		    <th>Entry Fee</th>
		    <th>Total Animals</th>
		    <th>County</th>
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
    <td><?php echo $row['animal_name']; ?></td>
    <td><?php echo $row['Gamepark']; ?></td>
    <td><?php echo $row['entry_fee']; ?></td>
	<td><?php echo $row['total_animals']; ?></td>
	<td><?php echo $row['county']; ?></td>
	<td><img src="images/<?php echo $row['Picture']; ?>" width="40" height="40"></td>
    <td> <a href="Sign In.php"  onClick="edit(this);" title="BOOKING" >  <input type="image" src="images/book.png" onclick="alert('Please Make Sure You Sign In to Make Reservations!')" title="BOOK NOW"> </a>
   </td>
    </tr>

  <?php }mysqli_close($conn);?>
      </tbody>
</table>
	  
 </div> 
			
	
	
		<div id="footer">
			<div class="boxes">
			
				<div class="shell">
					<div class="box post-box">
						<h2>  E- WILDLIFE</h2>
						<div class="box-entry">
							<img src="images/book.png" alt="E-Wildlife" width="160" height="80"/>
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

				<div class="shell">
						<p>&copy; KENYA WILDLIFE SERVICE <a href="index.php"><i><font color="green"> Welcome To Our Wildlife Booking Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2018 Kenya Wildlife Service. All rights reserved. 
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->
		
		
	<!-- End Wrapper -->
</body>
</html>