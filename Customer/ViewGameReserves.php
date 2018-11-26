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
                    <li><a href="Bookings.php">BOOKINGS</a></li>
                    <li><a href="ViewBookings.php">VIEW BOOKINGS</a></li>
                    <li><a href="UserDetials.php">VIEW PROFILE</a></li>
                    <li><a href="ViewGameparks.php">VIEW GAMEPARKS</a></li>
                    <li><a href="ViewGameReserves.php">VIEW GAMERESERVES</a></li>
                    <li><a href="ViewChats.php">CHATS</a></li>
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
		      <li class="icn_categories"><a href="Bookings.php">Bookings</a></li>
		       <li class="icn_categories"><a href="Bookings.php">View Bookings</a></li>
		        <li class="icn_categories"><a href="ViewBookings.php">Cancel Bookings</a></li>
		        <li class="icn_categories"><a href="ViewChats.php">Chats</a></li
		</ul>
		<h3>GAMERESERVATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="ViewGameReserves.php">View GameReserves</a></li>
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
			<li class="icn_settings"><a href="BookingsReport.php">Booking History</a></li>
		</ul>
		<h3>CUSTOMER</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	<section id="main" class="column">
	<h4 class="alert_info"> <strong>WELCOME TO E-WILDLIFE MANAGEMENT SYSTEM</strong></h4>

  <?php
$result = mysqli_query($conn,"SELECT * FROM reserves");
?>
  
      			<div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7"><h2>TOUR OUR GAMERESERVES</h2></th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>CHECK</th> 
            <th>GAMERESERVE ID</th>			  
    		<th>GAMERESERVE NAME</th>
		    <th>TOTAL ANIMALS</th>
		    <th>TELEPHONE</th>
            <th>COUNTY</th>	
            <th>FEE</th>
            <th>STATUS</th>	
            <th>PHOTO</th>	
        
           		
    		
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {
  	?>
      <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['id']; ?></td>
    <td><?php echo $row['reserve_name']; ?></td>
    <td><?php echo $row['animals']; ?></td>
    <td><?php echo $row['telephone']; ?></td>
     <td><?php echo $row['county']; ?></td>
     <td><?php echo $row['fee']; ?></td>
     <td><?php echo $row['status']; ?></td>
     <td><img src="images/<?php echo $row['picture']; ?>" width="40" height="40"></td>
   
    </tr>

  <?php }mysqli_close($conn);?>
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