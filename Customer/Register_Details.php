<?php
include("../session.php");
include("../config.php");

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>E-WILDLIFE </title>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script src="js/countries.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>
<body>
<div id="container">  
	   <div id="header">
		<div id="logo-banner">
				<div id="logo">	
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div id="banner">
                
				</div>
		</div>
		</div> 
	<center><h1>E-WILDLIFE MANAGEMENT SYSTEM -TOURIST DASHBORD</h1></center>
  <center><h1><span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></h1></center>
<div id="content-wrap">   
 <section id="secondary_bar">
            <nav>
                <ul>
                    <li class="selected"><a href="customer_home.php">HOME</a></li>
                    <li><a href="Register_Details.php">REGISTER</a></li>
                    <li><a href="Bookings.php">BOOKINGS</a></li>
                    <li><a href="ViewBookings.php">VIEW BOOKINGS</a></li>
                    <li><a href="SearchSite.php">SEARCH SITE</a></li>
                    <li><a href="Profile.php">VIEW PROFILE</a></li>
                    <li><a href="ViewAnimals.php">VIEW ANIMALS</a></li>
                    <li><a href="ViewNews.php">NEWS</a></li>
                    <li><a href="ViewGameparks.php">VIEW GAMEPARKS</a></li>
                    <li><a href="ViewGameReserves.php">VIEW GAMERESERVES</a></li>
                    <li><a href="viewChats.php">CHATS</a></li>
                    <li class="logout"> <span class="check">        
                </ul>     
            </nav>  
  </section>        
<aside id="sidebar" class="column">
          <!-- Begin Search -->
        <div id="search">
          <form action="searchcont.php" method="post" accept-charset="utf-8">
            <input type="text"  title="Search..." class="blink field"  placeholder="Search Item"   name='search' size=60 maxlength=100 />
            <input class="search-button" type="submit" value="Submit" />
            <div class="cl">&nbsp;</div>
          </form>
        </div>
    <hr/>
      <h3> CUSTOMER OPEARTIONS</h3>
    <ul class="toggle">
        <li class="icn_categories"><a href="Register_Details.php">Registration</a></li>
         <li class="icn_categories"><a href="Profile.php">View Profile</a></li>
          <li class="icn_categories"><a href="Bookings.php">Bookings</a></li>
            <li class="icn_categories"><a href="ViewBookings.php">View Bookings</a></li>
            <li class="icn_categories"><a href="ViewTourists.php">Tourist Details</a></li>
            <li class="icn_categories"><a href="ViewChats.php">Chats</a></li
    </ul>
    <h3>GAMERESERVATIONS:</h3>
    <ul class="toggle">
        <li class="icn_settings"><a href="ViewGameReserves.php.php">View GameReserves</a></li>
    </ul>
    <h3>GAMEPARK:</h3>
    <ul class="toggle">
        <li class="icn_settings"><a href="ViewGameparks.php">View GamePark</a></li>
    </ul>
    <h3>ANIMALS:</h3>
    <ul class="toggle">
        <li class="icn_settings"><a href="ViewAnimals.php">View Animals</a></li>
    </ul>
    <h3>CUSTOMER REPORTS:</h3>
    <ul class="toggle">
        <li class="icn_settings"><a href="Profile.php">Profile Report</a></li>
      <li class="icn_settings"><a href="BookingsReport.php">Booking Report</a></li>
    </ul>
    <h3>CUSTOMER</h3>
    <ul class="toggle">
      <li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
    </ul>
  </aside>
    <ul class="toggle">
      <li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
    </ul>
	<section id="main" class="column">
	<h4 class="alert_info"><strong>WELCOME TO E-WILDLIFE MANAGEMENT SYSTEM: User Email:<?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?></strong></h4>

	<div id="form_wrapper" class="form_wrapper">
		 <table>
          <form class="register active"  id="myForm" method="POST" action="Register_customer.php">
       <th colspan="3"><h2>CUSTOMER REGISTRATION:</h2> </th> 
             
   <tr>
    <td>  
    <label> Email:</label>
    <input type="text" name="email" id="email" required="" />
    <span class="error">This is an error</span>
  </td>
    <td>   
    <label> FullName:</label>
    <input type="text" name="fname" required="" />
    <span class="error">This is an error</span>       
   </td>
    <td> 
   <label> Password:</label>
    <input type="text" name="pass" required="" />
    <span class="error">This is an error</span>       
   </td>
   </tr>
   <tr>
    <td>  
    <label>Re-Password:</label>
    <input type="text" name="pass1" id="pass1" required="" />
    <span class="error">This is an error</span>
  </td>
    <td>   
    <label>Country:</label>
    <input type="text" name="country" required="" />
    <span class="error">This is an error</span>       
   </td>
    <td> 
   <label>City:</label>
    <input type="text" name="city"  required="" />
    <span class="error">This is an error</span>       
   </td>
   </tr>
   <tr>
    <td>  
    <label>Address:</label>
    <input type="text" name="address" id="address" required="" />
    <span class="error">This is an error</span>
  </td>
    <td>   
    <label>Postal Code:</label>
    <input type="text" name="pcode" required="" />
    <span class="error">This is an error</span>       
   </td>
    <td> 
   <label>Picture:</label>
    <input type="text" name="picture" required="" />
    <span class="error">This is an error</span>       
   </td>
   </tr>
   <tr>
    <td> 
   <label>Phone:</label>
    <input type="text" name="tel" required="" />
    <span class="error">This is an error</span>       
   </td>
    <td>   
    <label> UserName:</label>
    <input type="text" name="username" required="" />
    <span class="error">This is an error</span>       
   </td>
  <tr>
           <div class="bottom">
           <td colspan="3">  
           <button name="save" type="submit" id="delbutton" title="Click to Save"  class="a-btn" > <span class="a-btn-text"> REGISTER</span></button>
			<button name="save" type="reset" id="delbutton" title="Click to Clear"  class="a-btn" > <span class="a-btn-text">CLEAR</span></button>
			<div class="clear"></div>
            </div>
   </tr>
          </form>
		  </table>
		<script src="js/jquery.js"></script>
		  <script type="text/javascript">
		$(function() {
		$("#delbutton").click(function(){
		var element = $(this);
		 if(confirm(" You Pressed  Register Button \n Are You Ready To Save Your Details?"))
				  {

		 $.ajax({
		   type: "POST",
		   url: "Register_customer.php",
		   data: info,
		   success: function(){
		   
		   }
		 });
				 $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
				.animate({ opacity: "hide" }, "slow");

		 }

		return false;

		});

		});
		</script> 
	</div>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

 if(confirm("Are You Sure you want to Clear this Details?"))
		  {

 $.ajax({
   type: "GET",
   url: "RegisterUser.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script> 

	</section>
          </div>
   </div>
 
   
</body>

</html>