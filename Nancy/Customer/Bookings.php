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
	<div id="content-wrap">		
	<section id="secondary_bar">
            <nav>
                <ul>
                    <li class="selected"><a href="customer_home.php">HOME</a></li>
                    <li><a href="Register_Details.php">REGISTER</a></li>
                    <li><a href="Bookings.php">BOOKINGS</a></li>
                    <li><a href="ViewBookings.php">VIEW BOOKINGS</a></li>
                    <li><a href="SearchSite.php">SEARCH SITE</a></li>
                    <li><a href="UserDetails.php">PROFILE</a></li>
                     <li><a href="animals.php">ANIMALS</a></li>
                     <li><a href="News.php">NEWS</a></li>
                    <li><a href="Gamepark.php">GAMEPARKS</a></li>
                    <li><a href="Gamereserve.php">GAMERESERVES</a></li>
                    <li class="logout"> <span class="check"> 
					
                </ul>
				
            </nav>
		
	</section><!-- end of secondary bar -->
	
	   	
<aside id="sidebar" class="column">
					<!-- Begin Search -->
				<div id="search">
					<form action="searchcont.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Product"   name='search' size=60 maxlength=100 />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
				<!-- End Search -->
		<hr/>
	    <h3> CUSTOMER OPEARTIONS</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="Register_Details.php">Register</a></li>
		      <li class="icn_categories"><a href="Bookings.php">Book</a></li>
		       <li class="icn_categories"><a href="ViewBookings.php">View Bookings</a></li>
		        <li class="icn_categories"><a href="SearchSite.php">Search Site</a></li>
		        <li class="icn_categories"><a href="CustomerDetails.php">Tourist Details</a></li>
		          <li class="icn_folder"><a href="Backup.php">Backup Database</a></li>
		</ul>
		
		<h3>CUSTOMER REPORTS:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="ReservationReports.php">Reservation Report</a></li>
			<li class="icn_settings"><a href="BookingsReport.php">Booking History</a></li>
			<li class="icn_settings"><a href="WildlifeReport.php"> WildLife Report</a></li>
     		
		</ul>
		
        <h3>CUSTOMER DETAILS:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Reservation Details</a></li>
     		<li class="icn_categories"><a href="customerTable.php">User Profile</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Animals Details</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Gamepark Details</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Tourist Details</a></li>
		</ul>

		<h3>CUSTOMER</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	
	</aside>
	
	<section id="main" class="column">
	<h4 class="alert_info"><strong>WELCOME TO E-WILDLIFE MAMAGEMENT SYSTEM</strong></h4>
<SCRIPT language="Javascript">
      <!--
      function isNumberKey(evt)
      {
	 
         var charCode = (evt.which) ? evt.which : event.keyCode
		  window.alert("Please In Age Field Only Numbers Allowed !!!");
         if (charCode > 2 && (charCode < 2 || charCode > 2))
		
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
					<form class="register active"  action=" insertProduct.php"method="POST" id="myForm">

					<th colspan="3"><h2>PLEASE MAKE RESERVATIONS:</h2> </th> 
						

   <tr>
    <td>  

		<label> Name:</label>
		<input type="text" name="name" id="name"  class="user" required>
		<span class="error">This is an error</span>
		
	</td>

   <td>   
	<label>County:</label>

 <?php
include('../config.php');
$name= mysqli_query($mysqli,"select * from registration");

echo '<select  name="select"  id="ml" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{

echo '<option>';
echo $res['county'];
echo'</option>';
}
echo'</select>';

?>
	<span class="error">This is an error</span>

   </td>
   
      <td>  

		<label>No: of People:</label>
		<input type="text"  name="model"  id="model"  required> 
		<span id="pass-info"> </span>
                               
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
    	<label>Site:</label>
<?php
include('../config.php');
$name= mysqli_query($mysqli,"select * from gamepark");

echo '<select   name="WH"  id="ml" class="ed">';
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
	
   <td>   
	    <label> Descriptions:</label>
		<input type="text"  name="ml"  id="ml"  maxlength="19" required> 
		<span id="pass-info"> </span>
		
  </td>
  
   </tr>
   
   
   <tr>
    <td>  

		<label>Choose Price:</label>
		<?php
include('../config.php');
$name= mysqli_query($mysqli,"select * from gamepark");

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

//Save the link in a variable called element
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