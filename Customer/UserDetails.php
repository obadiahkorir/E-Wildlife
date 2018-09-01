<?php
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
	<script type="text/javascript" src="js/datetimepicker.js"></script> 
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
function DateCheck()
{
if(document.book.date_from.value>document.book.date_to.value)
{
alert("error in date.please check and continue");
return false;
}
else
{
return true;
}
}
</script>
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
                    <li><a href="UserDetials.php">VIEW PROFILE</a></li>
                    <li><a href="ViewAnimals.php">VIEW ANIMALS</a></li>
                    <li><a href="ViewNews.php">NEWS</a></li>
                    <li><a href="ViewGameparks.php">VIEW GAMEPARKS</a></li>
                    <li><a href="ViewGameReserves.php">VIEW GAMERESERVES</a></li>
                    <li><a href="BookingPayment.php">CHATS</a></li>
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
		    <li class="icn_categories"><a href="Register_Details.php">Register</a></li>
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
		    <li class="icn_settings"><a href="ReservationReports.php">View GamePark</a></li>
		</ul>
		<h3>ANIMALS:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="ViewAnimals.php">View Animals</a></li>
		</ul>
		<h3>CUSTOMER REPORTS:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="ReservationReports.php">Profile Report</a></li>
			<li class="icn_settings"><a href="BookingsReport.php">Booking History</a></li>
		</ul>
		<h3>CUSTOMER</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	<section id="main" class="column">
	<h4 class="alert_info"><strong>E-WILDLIFE MAMAGEMENT SYSTEM</strong></h4>
	<div id="form_wrapper" class="form_wrapper">
		 <table>
		<form class="register active"  action=" insertProduct.php"method="POST" id="myForm">
		<th colspan="3"><h2>PLEASE MAKE RESERVATIONS:</h2> </th> 
   <tr>
    <td>  
		<label>Full Names:</label>
		<input type="text" name="name" id="name"  class="user" required>
		<span class="error">This is an error</span>
	</td>
   <td>   
	<label>Site</label>
 <?php
include('../config.php');
$name= mysqli_query($conn,"select * from gamepark");

echo '<select  name="select"  id="ml" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{
echo '<option>';
echo $res['Gamepark'];
echo'</option>';
}
echo'</select>';
?>
<span class="error">This is an error</span>
   </td>
   </tr> 
 <tr>
              <td>FROM DATE
              <input name="date_from" type="text" size="10" id="date2" readonly="true" required/><a href="javascript:NewCal('date2','ddmmyyyy')"><img src="images/cal.gif" width="10" height="10" border="0" alt="Pick a date"></a></td>
              <td> TO DATE
              <input name="date_to" type="text" size="10" id="date6"readonly="true" required/><a href="javascript:NewCal('date6','ddmmyyyy')"><img src="images/cal.gif" width="10" height="10" border="0" alt="Pick a date"></a></td>
            </tr>
   <td> 
	   <label> Type:</label>
		<input type="text" name="type" id="type"  required>
		<span id="pass-info"> </span>
  </td>
  <td> 
  <label> No-Of-People:</label>
   <input type="text"  name="ml"  id="ml"  maxlength="19" required> 
	<span class="error">This is an error</span>               
	</td>
   </tr>
   <tr>
    <td>  
    <label>Price:</label>
		<?php
include('../config.php');
$name= mysqli_query($conn,"select * from gamepark");

echo '<select   name="WH"  id="ml" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{
echo '<option>';
echo $res['Price'];
echo'</option>';
}
echo'</select>';
?>
<span class="error">This is an error</span>
	</td>
<td>   
 <label> Description:</label>
	<input type="text"  name="ml"  id="ml"  maxlength="19" required> 
	<span id="pass-info"> </span>	
  </td>
   </tr>
	<div class="bottom">
			<td colspan="3">	
			<button name="save" type="submit" id="delbutton" title="Click to Save"  class="a-btn" > <span class="a-btn-text"> REGISTER</span></button>
			<button name="save" type="reset" id="delbutton" title="Click to Clear"  class="a-btn" > <span class="a-btn-text">CLEAR</span></button>
			<div class="clear"></div>
			</div>
</form>
</table>
		<script src="js/jquery.js"></script>
		  <script type="text/javascript">
		$(function() {
		$("#delbutton").click(function(){
		//Save the link in a variable called element
		var element = $(this);
		 if(confirm("Now(), You Preesed  Save Button \n Are You REady To Save It A PRODUCT? There is NO PLS.undo!"))
				  {
		 $.ajax({
		   type: "GET",
		   url: "prodDelete.php",
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
var element = $(this);
 if(confirm("Sure you want to delete this PRODUCT? There is NO PLS.undo!"))
		  {
 $.ajax({
   type: "GET",
   url: "prodDelete.php",
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