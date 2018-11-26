<?php 
session_start();
include("../config.php");
 ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>E-WildLife </title>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
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
	<div id="content-wrap">	
	
	<section id="secondary_bar">
                <nav>
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
                    <li><a href="add_animal.php">Animals</a></li>
                    <li><a href="add_gamepark.php">GameParks</a></li>
                    <li><a href="add_gamereserves.php">GameReserves</a></li>
                     <li><a href="Employee.php">Employees</a></li>
                     <li><a href="Employee.php">Tourists</a></li>
                     <li><a href="viewchats.php">Messages</a></li>
                     <li><a href="add_category.php">Reservations</a></li>
                       <li><a href="add_category.php">Payments</a></li>
                      <li><a href="Backup.php">BackUp Database </a></li>
                    <li class="logout"> <span class="check"> 
					
                </ul>	
            </nav>
	</section>  	
<aside id="sidebar" class="column">
				<div id="search">
					<form action="searchware.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Warehouse"   name='search' size=60 maxlength=100 />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
		<hr/>
		 <h3> E-WildLife Database Backup:</h3>
		<ul class="toggle">
		    <li class="icn_folder"><a href="Backup.php">Backup Database</a></li>
		</ul>
		
		<h3>E-WILDLIFE REPORTS:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="OrderReports.php">Reservation Report</a></li>
			<li class="icn_settings"><a href="EmployeeReport.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Customer Report</a></li>
			<li class="icn_settings"><a href="ProductReport.php"> WildLife Report</a></li>
     		
		</ul>
		<h3>ANIMALS OPERTATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_new_animals.php">Add Animals</a></li>
		    <li class="icn_categories"><a href="viewchats.php">View Animals</a></li>
		</ul>
		<h3>GAMEPARK OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_new_gamepark.php">Add Gameparks</a></li>
		    <li class="icn_categories"><a href="viewGameparks.php">View GameParks</a></li>
		</ul>
		<h3>GAMERESERVES OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_new_gamereserves.php">Add GameReserve</a></li>
		    <li class="icn_categories"><a href="viewGamereserves.php">View GameReserves</a></li>
		</ul>
		<h3>EMPLOYEES OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_new_employee.php">Add Employee</a></li>
		    <li class="icn_categories"><a href="viewEmployee.php">View Employees</a></li>
		</ul>
		<h3>MESSAGE OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_new_employee.php">Add New Message</a></li>
		     <li class="icn_add_user"><a href="">Reply Chat</a></li>
		      <li class="icn_add_user"><a href="">Cancel Chats</a></li>
		    <li class="icn_categories"><a href="viewchats.php">View Messages</a></li>
		</ul>
        <h3>RESERVATIONS OPERATIONS:</h3>
		<ul class="toggle">
			 <li class="icn_add_user"><a href="add_new_reservations.php">Add Reservations</a></li>
		    <li class="icn_categories"><a href="viewReservations.php">Reservation Details</a></li>
     		<li class="icn_categories"><a href="cancelReservations.php">Cancel Reservations</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Approve  Reservations</a></li>
		</ul>
		<h3>TOURIST OPERATIONS:</h3>
		<ul class="toggle">
			 <li class="icn_add_user"><a href="add_new_reservations.php">Add Tourist</a></li>
		    <li class="icn_categories"><a href="viewReservations.php">Tourist Details</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	<section id="main" class="column">
	<h4 class="alert_info">Welcome To <strong>E-WILDLIFE MAMAGEMENT SYSTEM</strong> </h4>
	
	<div id="form_wrapper" class="form_wrapper"  >
		 <table>
					<form class="register active" id="myForm" action="insertAnimals.php"  method="POST" enctype="multipart/form-data" name="addanimals" onsubmit="return validateForm()">
					<th colspan="3"><h2>ADD NEW ANIMAL:</h2> </th> 			
	<tr>
    <td>  
		<label> Animal Name:</label>
		<input type="text" name="wname" id="wareValid"/>
		<span class="error">This is an error</span>
	</td>
   <td>  
	<label>County:</label>
		<select name="country" id="select">
		  <option value="KY" countrynum="93">TAITA TAVETA</option>
		  <option value="US" countrynum="358">NAIROBI</option>
		  <option value="CHI" countrynum="355">UASIN-NGISHU</option>
</select>    
   </td>
   <td>  
		<label>Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>
		
	</td>

   </tr>

   <tr>
    <td>  
		<label> Gamepark:</label>
		<input type="text" name="wname" id="wareValid"/>
		<span class="error">This is an error</span>
	</td>
   <td>  
	<label>Category:</label>
		<select name="country" id="select">
		  <option value="KY" countrynum="93">Birds</option>
		  <option value="US" countrynum="358">Animals</option>		 
</select>    
   </td>
   <td>  
		<label>Type:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>	
	</td>
   </tr>
   <tr>
    <td>  
		<label> Address:</label>
		<input type="text" name="address"  id="address"/>
		<span class="error">This is an error</span>                         
	</td>
   <td
       		<label>Total:</label>
		<input type="text" name="city"  id="wareValid"/>	
		<span class="error">This is an error</span>	
  </td>
   <td>       
	    <label> Postal Code:</label>
	<input type="text" name="pcode"  id="pcode"/>
		<span id="pass-info"> </span>
   </td>
   </tr>
   <tr>
						<div class="bottom">
						<td colspan="3">	
						<button name="save" id="myButton" class="a-btn"> <span class="a-btn-text"> REGISTER ANIMAL </span></ </button>
							<div class="clear"></div>
						</div>
   </tr>
</form>
</table>
	</div>	
	</section>
          </div>
   </div>
</body>

</html>