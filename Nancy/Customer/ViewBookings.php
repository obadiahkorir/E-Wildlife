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
  <?php
$result = mysqli_query($mysqli,"SELECT * FROM bookings");
?>
  
      			<div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7"><h2>USER RESERVATION DETAILS</h2></th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
            <th>Reservation Id</th>			  
    		<th>name</th>
		    <th>No of People</th>
		    <th>Date</th>
            <th>Picture</th>	
           		
    		
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {
  	?>
      <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['reserved_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['no_of_people']; ?></td>
    <td><?php echo $row['date']; ?></td>
	<td><img src="images/<?php echo $row['picture']; ?>" width="40" height="40"></td>
   
    </tr>

  <?php }mysqli_close($mysqli);?>
      </tbody>
</table>
	  
 </div> 
					
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