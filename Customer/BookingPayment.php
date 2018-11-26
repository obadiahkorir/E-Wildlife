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
	<script type="text/javascript" src="js/datetimepicker.js"></script> 
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
<!--

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
//-->
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
                    <li><a href="Profile.php">VIEW PROFILE</a></li>
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
	<h4 class="alert_info"> <strong>WELCOME TO E-WILDLIFE MANAGEMENT SYSTEM</strong></h4>
<SCRIPT language="Javascript">
      <!--
      function isNumberKey(evt)
      {
	 
         var charCode = (evt.which) ? evt.which : event.keyCode
		  window.alert("Pls. Sir In A Price Field Only Numbers Allowed !!!");
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		
            return false;
            
         return true;
		  
      }
     

   </SCRIPT>


    <script type="text/javascript">
        $(function() {
		
            $('.user').keyup(function() {
			
                if (this.value.match(/[^a-zA-Z]/g)) {
				
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					 window.alert("Pls. Sir In A UserName Field Only Charecters Allowed !!!");
                }
				
            });
        });
    </script>
<div id="form_wrapper" class="form_wrapper">
		 <table>

			<form class="register active" id="myForm"action="confirmpayment.php"  method="POST">

					<th colspan="3"><h2>KINDLY PROCEED WITH PAYMENTS.</h2> </th> 	
        <tr>		
		</tr>
    <tr>
         <td>
		<label>PAYMENT AMOUNT:</label>
		<input type="text" id="amount" name="amount" required="" />
		<span class="error">This is an error</span>                        
	</td>

       <td>  
		<label>M-PESA TRANSACTION:</label>
		<input type="text" id="mpesa" name="mpesa" placeholder="NAGHDSFAHSDF" required="" />
		<span class="error">This is an error</span>
                               
	</td>
 <td>  
		<label>ID NUMBER:</label>
		<input type="text" id="ids" name="ids" required="" />
		<span class="error">This is an error</span>
                               
	</td>
   </tr>
   <tr>
         <td>  
		<label>NO OF PEOPLE:</label>
		<input type="text" name="people" id="people"  required>
		<span id="pass-info"> </span>
                               
	    </td>
	
   </tr>
   <tr>
       
 <td>  
		<label>Email Address:</label>
		<input type="text" id="email" name="email"  required="" />
		<span class="error">This is an error</span>
                               
	</td>
   </tr>
   <tr>
   </tr>
		<div class="bottom">
			<td colspan="3">		
				<button name="submit" id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text">Comfirm Reservation</span></button>	
				</td>		
				<div class="clear"></div>
				</div>
	</form>			
	</table>

    </tr>
    </tr>

      </tbody>
</table>  
 </div>
	</section>
    </div>
   </div>
   
</body>

</html>