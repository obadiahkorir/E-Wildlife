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
		      <li class="icn_categories"><a href="Bookings.php">Bookings</a></li>
		        <li class="icn_categories"><a href="ViewBookings.php">View Bookings</a></li>
		         <li class="icn_categories"><a href="ViewBookings.php">Cancel Bookings</a></li>
		         <li class="icn_categories"><a href="ViewBookings.php">Cancel Bookings</a></li>
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
			<li class="icn_settings"><a href="BookingsReport.php">Booking History</a></li>
		</ul>
		<h3>CUSTOMER</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	
	<section id="main" class="column">
	<h4 class="alert_info"><strong>RESERVATIONS MANAGEMENT DASHBORD</strong></h4>			
	<div id="form_wrapper" class="form_wrapper">
		 <table>
					<form class="register active" id="myForm"action="insertReservations.php"  method="POST" >

					<th colspan="3"><h2>KINDLY MAKE RESERVATIONS FOR YOUR BEST SITE</h2> </th> 	
        <tr>
       <td>  
	  <label>Full Names:</label>
		
		<input type="text" id="empValid" name="fullname"  placeholder="Full name" required="" />
		<span class="error">This is an error</span>
	  </td>
      <td>   

	     <label>Username:</label>
		<input type="text" id="username" name="username" placeholder="User name" required="" />
		<span class="error">This is an error</span>
      </td>
      <td>   
	     <label>Address:</label>
		<input type="text" id="address" name="address" placeholder="Address" required="" />
		<span class="error">This is an error</span>
      </td>
		</tr>
    <tr>
         <td>
		<label>Postal Code:</label>
		<input type="text" id="pcode" name="pcode" placeholder="Postal Code" required="" />
		<span class="error">This is an error</span>                        
	</td>

       <td>  
		<label>No Of People:</label>
		<input type="text" id="no" name="no" placeholder="No of People" required="" />
		<span class="error">This is an error</span>
                               
	</td>
 <td>  
		<label>Reserved Site:</label>
		<input type="text" id="site" name="site" placeholder="Reserved site" required="" />
		<span class="error">This is an error</span>
                               
	</td>
   </tr>
   <tr>
         <td>  
		<label> From Date:</label>
		<input type="date" name="from_date" id="from_date"  required>
		<span id="pass-info"> </span>
                               
	    </td>
		
       <td>  
		<label>To Date:</label>
		<input type="date" id="to_date" name="to_date" required="" />
		<span class="error" >This is an error</span>                       
	</td>
 <td>  
		<label>Entrence Fee:</label>
		<input type="text" id="fee" name="fee" placeholder="Entrance Fee" required="" />
		<span class="error">This is an error</span>
                               
	</td>
   </tr>
   <tr>
       
 <td>  
		<label>Email Address:</label>
		<input type="text" id="email" name="email" placeholder="Email Address" required="" />
		<span class="error">This is an error</span>
                               
	</td>
   </tr>
   <tr>
   </tr>
		<div class="bottom">
			<td colspan="3">		
				<button name="submit" id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text">Make Reservation</span></button>	
				</td>		
				<div class="clear"></div>
				</div>
	</form>			
	</table>
	</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM bookings where email='$login_session'");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 	
		<thead><tr> <th colspan="7">Tourits Availlable Reservations</th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	    <th>Reservation ID</th>
    	    <th>USERNAME</th>	
    	    <th>EMAIL</th>	
            <th>Full Names</th>			  
    		<th>No Of People</th>
		    <th>From Date</th>
           <th>To Date</th>		
           <th>Reserved Site</th>		
           <th>Entrance Fee</th>		
           <th>Address</th>			
    	  <th>Postal Code</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>
      <tr>
   <td><input type="checkbox"></td>
   <td><?Php echo $row['Reserved_Id']; ?></td>
   <td><?php echo $row['Username']; ?></td>
   <td><?php echo $row['email']; ?></td>
   <td><?php echo $row['FullNames']; ?></td>
   <td><?php echo $row['No_Of_People']; ?></td>
   <td><?php echo $row['From_Date']; ?></td>
   <td><?php echo $row['To_Date']; ?></td>
   <td><?php echo $row['Site']; ?></td>
   <td><?php echo $row['Price']; ?></td>
   <td><?php echo $row['Adress']; ?></td>
   <td><?php echo $row['PostalCode']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Reserved_Id']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a> </a></td>
    </tr>
    </tr>
  <?php }mysqli_close($conn);?>
      </tbody>
</table>  
 </div>
	</section>
    </div>
   </div>
</body>

</html>