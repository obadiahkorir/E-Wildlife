<?php
 include("../config.php");
 ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>CUSTOMER PANEL</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
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
		</div> <!--DHAMAADKA hedaerka-->
		
	
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
	    
	<h4 class="alert_info"> <strong>WELCOME TO E-WILDLIFE MANAGEMENT SYSTEM</strong></h4>
     
			<div class="module_content">
				
		
			</div>


<?php
$result = mysqli_query($mysqli,"SELECT * FROM customer");
?>
      			<div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 
      <thead>
			 <th colspan="13"> TOURIST INFORMATIONS  </th> </thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	      <th> ID</th>
              <th> FullName</th>			  
		    <th>Phone</th>	
            <th>Email</th>		  
		    <th>Country</th>
            <th>City</th>
            <th>Address</th>			  
    		<th>PostalCode</th>		
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Cust_Id']; ?></td>
    <td><?php echo $row['FullName']; ?></td>
	<td><?php echo $row['Phone']; ?></td>
	 <td><?php echo $row['Email']; ?></td>
	 <td><?php echo $row['Country']; ?></td>
   <td><?php echo $row['City']; ?></td>
	<td><?php echo $row['Adress']; ?></td>
	<td><?php echo $row['PostalCode']; ?></td>
    <td> <a href="empViewUpdate.php?update=<?php echo $row['Cust_Id']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="custDelete.php?delete=<?php echo $row['Cust_Id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
</tbody>
</table>


			</div><!-- end of #tab2 -->
	
	     
		
		<div class="clear"></div>
		
		

		<div class="spacer"></div>
	</section>
       </div>
</div>

</body>

</html>