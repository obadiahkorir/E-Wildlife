<?php 
include("../session.php");
include("../config.php");

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Admin </title>
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
</head>
<body>
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
					<form action="searchanimals.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Animals"   name='search' size=60 maxlength=100 />
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
     		<li class="icn_categories"><a href="customerTable.php">Cancel Reservations</a></li>
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
	<section id="main" class="column">	
<?php
$update=$_GET['update'];
$result = mysqli_query($conn,"SELECT * FROM Gamepark where Gamepark_ID ='$update'");
?>
<?php if($row = mysqli_fetch_array($result))
  {?> 
  
	<div id="form_wrapper" class="form_wrapper"  >
	<form class="quick_search">
	<input type="text"  value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		 <table>
		<form class="register active" id="myForm" action="wareUpdate.php"  method="POST">
		<th colspan="3"><h2>UPDATE GAMEPARKS:</h2> </th> 			
	<input type="hidden" id="ID" name="ID" value="<?php echo $row['Gamepark_ID'];?>"  placeholder="ID" required>
	<tr>
    <td>  
		<label> Animal Name:</label>
		<input type="text" name="a_name" id="wname"  value="<?php echo $row['Gamepark'];?>"  placeholder="Warehouse Name" required>
		<span class="error">This is an error</span>
	</td>
   <td>  
	<label>County:</label>
		<select name="country" id="select"  value="<?php echo $row['County'];?>"  placeholder="Select County" required>
	<option value="Kilifi" countynum="1">Kilifi</option>
	<option value="Mombasa" countrnum="2">Mombasa</option>
	<option value="Homa Bay" countrnum="3">Homa Bay</option>
</select>    
   </td>
   <td>  
	<label>No Of Animals:</label>
	<input type="text" name="email" id="email" value="<?php echo $row['animals'];?>"  placeholder="Email" required>
	<span class="error">This is an error</span>	
	</td>
   </tr>
  <tr>
  <td>  
<label> Description:</label>
	<input type="text" name="address"  id="address" value="<?php echo $row['Address'];?>"  placeholder="Address" required>
		<span class="error">This is an error</span>                         
	</td>
   <td>  
   <label>Entry Fee:</label>
	<input type="text" name="city"  id="city" value="<?php echo $row['Price'];?>"  placeholder="City" required>
<span class="error">This is an error</span>		
  </td>
   <td>         
   <label>Tota Animals:</label>
	<input type="text" name="pcode"  id="pcode" value="<?php echo $row['PostalCode'];?>"  placeholder="Postal Code" required>
		<span id="pass-info"> </span>
  </td>
  </tr>
   <tr>
  <td>  
<label> Picture:</label>
	<input type="text" name="address"  id="address" value="<?php echo $row['Picture'];?>"  placeholder="Address" required>
		<span class="error">This is an error</span>                         
	</td>
<td>         
   <label>Email Address:</label>
	<input type="text" name="pcode"  id="pcode" value="<?php echo $row['Email'];?>"  placeholder="Postal Code" required>
		<span id="pass-info"> </span>
  </td>
  </tr>
   <tr>
<td>         
   <label>Telephone:</label>
	<input type="text" name="pcode"  id="pcode" value="<?php echo $row['Telephone'];?>"  placeholder="Telephone" required>
		<span id="pass-info"> </span>
  </td>
  </tr>
  <tr>
<div class="bottom">
<td colspan="3">	
<button type="submit"  name="submit"  class="a-btn"><span class="a-btn-text">Update Gamepark</span></button>			
<div class="clear"></div>
</div>
						
		
   </tr>
</form>
</table>
</div>     
</div> 
<?php }?>	
</section> 
</div>
</div>
</body>
</html>