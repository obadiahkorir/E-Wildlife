<?php
include("../config.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ADMIN </title>
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
                     <li><a href="Tourist_home.php">Tourists</a></li>
                     <li><a href="viewchats.php">Messages</a></li>
                     <li><a href="add_category.php">Reservations</a></li>
                       <li><a href="Payments.php">Payments</a></li>
                      <li><a href="Backup.php">BackUp Database </a></li>
                    <li class="logout"> <span class="check"> 
					
                </ul>
				
            </nav>
				
            </nav>
	</section>
	   	
<aside id="sidebar" class="column">
			<!-- Begin Search -->
				<div id="search">
					<form action="searchemplo.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Employee"  name='search' size=60 maxlength=100/>
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
	
	<h4 class="alert_info"><strong>TOURIST RESERVATIONS DETAILS</strong></h4>
<?php
$result = mysqli_query($conn,"SELECT * FROM bookings");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7">TOURIST RESERVATION DETAILS MANAGEMENT</th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	     <th>Reservation ID</th>
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
   <td><?php echo $row['FullNames']; ?></td>
   <td><?php echo $row['No_Of_People']; ?></td>
   <td><?php echo $row['From_Date']; ?></td>
   <td><?php echo $row['To_Date']; ?></td>
   <td><?php echo $row['Site']; ?></td>
   <td><?php echo $row['Price']; ?></td>
   <td><?php echo $row['Adress']; ?></td>
   <td><?php echo $row['PostalCode']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Reserved_Id']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Reserved_Id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
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