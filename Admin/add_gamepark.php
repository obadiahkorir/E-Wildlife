<?php 
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
                     <li><a href="add_reservations.php">Reservations</a></li>
                       <li><a href="ViewPayments.php">Payments</a></li>
                      <li><a href="Backup.php">BackUp Database </a></li>
                    <li class="logout"> <span class="check"> 
					
                </ul>
				
            </nav>
	</section>   	
	
	   	
<aside id="sidebar" class="column">
			
					<!-- Begin Search -->
				<div id="search">
					<form action="searchware.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Gamepark"   name='search' size=60 maxlength=100 />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
				<!-- End Search -->
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
	<h4 class="alert_info"> <strong>E-WILDLIFE MAMAGEMENT SYSTEM</strong></h4>		
	<div id="form_wrapper" class="form_wrapper"  >
		 <table>
					<form class="register active" id="myForm" action="insertGamepark.php"  method="POST" enctype="multipart/form-data" name="addwarehouse" onsubmit="return validateForm()">

					<th colspan="3"><h2>REGISTER NEW GAMEPARK:</h2> </th> 				
	<tr>
    <td>  
		<label>GamePark Name:</label>
		<input type="text" name="gamepark" id="gamepark"/>
		<span class="error">This is an error</span>	
	</td>
   <td>  
	<label>County:</label>
		<select name="county" id="select">
		  <option value="Nairobi" countrynum="93">Nairobi</option>
		  <option value="Trans-Nzoia" countrynum="358">Trans-Nzoia</option>
		  <option value="Kisumu" countrynum="355">Kisumu</option>
</select>    
   </td>
   <td>  
		<label>Email:</label>
		<input type="text" name="email" id="email"/>
		<span class="error">This is an error</span>	
	</td>
   </tr>
   <tr>
   	<tr>
    <td>  
		<label>Entrance Fee:</label>
		<input type="text" name="fee" id="fee"/>
		<span class="error">This is an error</span>	
	</td>
   <td>  
	<label>Telephone Number:</label>
		<input type="text" name="tel" id="tel"/>
		<span class="error">This is an error</span>
   </td>
   <td>        
	    <label> Postal Code:</label>
	<input type="text" name="pcode"  id="pcode"/>
		<span id="pass-info"> </span>
   </td>
   
   </tr>
   <tr>
    <td>  

		<label> Address:</label>
		<input type="text" name="address"  id="address"/>
		<span class="error">This is an error</span>                            
	</td>
   <td>  
       		<label>Total Animals:</label>
		<input type="text" name="animals"  id="animals"/>
		<span class="error">This is an error</span>	
  </td> 
   <td>  
		<label>Picture:</label>
		<input type="text" name="picture" id="picture"/>
		<span class="error">This is an error</span>	
	</td>

   </tr>
   <td>  
		<label>Status:</label>
		<input type="text" name="status" id="status" required="" />
		<span class="error">This is an error</span>
	</td>
   <tr>
						<div class="bottom">
						<td colspan="3">	
						<button name="save" id="myButton" class="a-btn"> <span class="a-btn-text"> REGISTER </span></ </button>
							<div class="clear"></div>
						</div>
   </tr>
</form>
</table>
	</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM gamepark");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

		<thead>  <th Colspan="9">  E-WildLife Animals Data Table </th></thead>
		<thead>
		<thead>
			</tr>
   		    <th>Check ID</th> 
    	    <th>ID</th>
            <th>GamePark Name</th>
            <th>Animals</th>			  
    		<th>County</th>
		    <th>Telephone</th>				
    		<th>Address</th>
			 <th>Postal Code</th>				
    		<th> Email</th>
    		<th> Picture</th>
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>
    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Gamepark_ID']; ?></td>
    <td><?php echo $row['Gamepark']; ?></td>
    <td><?php echo $row['animals']; ?></td>
   <td><?php echo $row['County']; ?></td>
   <td><?php echo $row['Telephone']; ?></td>
	<td><?php echo $row['Address']; ?></td>
	<td><?php echo $row['PostalCode']; ?></td>
	<td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Picture']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Gamepark_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Gamepark_ID']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
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