<?php
session_start();
include("config.php");

?>
<!DOCTYPE html PUBLIC >
<html >
<head>
	<title> E-WildLife</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/datetimepicker.js"></script> 
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
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
				$.post('shout.php', post_data, function(data) {
					$(data).hide().appendTo('.message_box').fadeIn();
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					$('#shout_message').val('');
				}).fail(function(err) { 
				alert(err.statusText); 
				});
			}
	});
	
	$(".close_btn").click(function (e) {
		
		var toggleState = $('.toggle_chat').css('display');
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
				<h1 id="logo"><a class="notext" href="index.php" title="E-wildlife">E-WildLife</a></h1>
				
				<div class="cl">&nbsp;</div>
	
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<center>
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
					   <li><a href="products.php">Games Packs</a>
					   <div class="dd">
							<ul>
								<li>
									 <a href="">Amboseli</a>
									
								</li>
								
								<li>
									 <a href="">Maasai Mara</a>
									
								</li>
								
								<li>
									<a href="">Mt Elgon</a>
									
								</li>
								
								<li>
									<a href="">Mt Kenya</a>
									
								</li>
								
							</ul>
						</div></li>

					   	   <li>
						<a href="products.php">Games Reserves</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="">Amboseli</a>
									
								</li>
								
								<li>
									 <a href="">Maasai Mara</a>
									
								</li>
								
								<li>
									<a href="">Mt Elgon</a>
									
								</li>
								
								<li>
									<a href="">Mt Kenya</a>
									
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
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
           
	
<script type="text/javascript">
$(document).ready(function() { 

    $('#btnSubmit').click(function() {  

        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var emailaddressVal = $("#email").val();
        if(emailaddressVal == '') {
            $("#email").after('<span class="error">Please enter your email address.</span>');
            hasError = true;
        }

        else if(!emailReg.test(emailaddressVal)) {
            $("#email").after('<span class="error">Enter a valid email address.</span>');
            hasError = true;
        }

        if(hasError == true) { return false; }

    });
});

</script>

					
<div id="form_wrapper" class="form_wrapper">
	 <table>
		<form class="register active"  id="myForm" method="POST" action="insertCustomer.php">
       <th colspan="3"><h2>GAME PARK RESERVATIONS</h2> </th> 
												
   <tr>
    <td>  
		<label> Enter Email Address:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>	
	</td>
    <td>   
		<label> Enter FullNames:</label>
		<input type="text" name="name" />
		<span class="error">This is an error</span>
							
   </td>
   </tr>
    <tr>
    <td>  
		<label>Reservation From:</label>
		<input name="date_from" type="text" size="25" id="date2" readonly="true" required/><a href="javascript:NewCal('date2','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"/>
      <span class="error">This is an error</span>
	</td>
   <td>   
     	  <label>Reservation To:</label>
			<input name="date_to" type="text" size="25" id="date6"readonly="true" required/><a href="javascript:NewCal('date6','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"/>
			<span class="error">This is an error</span>
	</td>
   </tr>
   <tr>
   <td>   
			<label> Phone:</label>
			<input type="text" name="tell" id="tell"/>
			<span class="error">This is an error</span>
   </td>
    <td>   
			<label> Test:</label>
			<input type="text" name="tell" id="tell"/>
			<span class="error">This is an error</span>

   </td>
   </tr>
    <tr>
    <td>   
	
		<label> Enter Country:</label>
       <input type="text" name="country" id="tell"/>
			<span class="error">This is an error</span>
   </td>
    <td>   
        <label>Address:</label>
		<input type="text" name="address" id="address"/>
		<span class="error">This is an error</span>   
   </td>
   </tr>
   <tr>
      <td>   
            <label>Game Park:</label>
			<input type="text" name="park" id="park"/>
		<span class="error">This is an error</span>  
    </td>
   
      <td>   
   
			 <label>Number Of People:</label>
		<input type="text" name="people" id="address"/>
		<span class="error">This is an error</span>  
   </td>
   </tr>
  <tr>
						<div class="bottom">
						<td colspan="3">	
						<button  id="btnSubmit" type="submit" name="submit"> REGISTER</button>
						<button  id="btnReset" type="reset" align="right" name="submit"> CANCEL</button>
						<div class="clear"></div>
						</div>	
   </tr>
					</form>
					</table>
					
					
<script type="text/javascript">

$(document).ready(function(){ 
    $("#btnSubmit").click(function() { 
    alert("Are Sure You Want To Save A New Customer !!!");
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'insertCustomer.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>	
		</div>
		</div>
		<div class="cl">&nbsp;</div>
		</div>
		<div class="cl">&nbsp;</div>
		<div id="products">
		<div class="cl">&nbsp;</div>	
		</div>
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