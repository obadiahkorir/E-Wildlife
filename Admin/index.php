<?php
include("../session.php");
include("../config.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title> ADMIN </title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
     <link rel="shortcut icon" href="images/logo.png" />
	<link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />
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
                       <li><a href="ViewPayments.php">Payments</a></li>
                      <li><a href="Backup.php">BackUp Database </a></li>
                    <li class="logout"> <span class="check"> 
					
                </ul>
				
            </nav>
	</section>   	
<aside id="sidebar" class="column">
					<!-- Begin Search -->
				<div id="search">
					<form action="searchcont.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Product"   name='search' size=60 maxlength=100 />
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
		    <li class="icn_settings"><a href="ReservationReport.php">Reservation Report</a></li>
			<li class="icn_settings"><a href="EmployeeReservation.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Tourist Report</a></li>
			<li class="icn_settings"><a href="AnimalsReport.php">Animals Report</a></li>
     		
		</ul>
		<h3>ANIMALS OPERTATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_animal.php">Add Animals</a></li>
		    <li class="icn_categories"><a href="viewAnimals.php">View Animals</a></li>
		</ul>
		<h3>GAMEPARK OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_gamepark.php">Add Gameparks</a></li>
		    <li class="icn_categories"><a href="viewGameparks.php">View GameParks</a></li>
		</ul>
		<h3>GAMERESERVES OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="add_gamereserves.php">Add GameReserve</a></li>
		    <li class="icn_categories"><a href="viewGamereserves.php">View GameReserves</a></li>
		</ul>
		<h3>EMPLOYEES OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Add Employee</a></li>
		    <li class="icn_categories"><a href="viewEmployee.php">View Employees</a></li>
		</ul>
		<h3>MESSAGE OPERATIONS:</h3>
		<ul class="toggle">
		     <li class="icn_add_user"><a href="">Reply Chat</a></li>
		      <li class="icn_add_user"><a href="">Cancel Chats</a></li>
		    <li class="icn_categories"><a href="viewchats.php">View Messages</a></li>
		</ul>
        <h3>RESERVATIONS OPERATIONS:</h3>
		<ul class="toggle">
			 <li class="icn_add_user"><a href="add_reservations.php">Add Reservations</a></li>
		    <li class="icn_categories"><a href="viewReservations.php">Reservation Details</a></li>
     		<li class="icn_categories"><a href="cancelReservations.php">Cancel Reservations</a></li>
		</ul>
		<h3>TOURIST OPERATIONS:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="viewReservations.php">Tourist Details</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	<section id="main" class="column">
		<h4 class="alert_info"><strong>E-WILDLIFE MANAGEMENT SYSTEM: Admin Panel As: <?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?>  </strong></h4> 
		
			
		<?php
$result = mysqli_query($conn,"SELECT * FROM contact");
?>
 <div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 
      <thead>
			<thead><th colspan="7"> REVIEWS AND COMPLAINTS </th></thead>
		<thead>
			</tr>
   		    <th>Check</th> 
    	      <th>ID</th>
              <th>Name</th>			  
    		<th>Email</th>
		    <th>TellePhone</th>	
             <th>Comment</th>				
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['contact_id']; ?></td>
    <td><?php echo $row['Name']; ?></td>
   <td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Phone']; ?></td>
	<td><?php echo $row['Subject']; ?></td>
    <td> <a href="conDelete.php?delete=<?php echo $row['contact_id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
     <td> <a href="conDelete.php?delete=<?php echo $row['contact_id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_alert_warning.png" title="Trash">  </a></td>
    </tr

  <?php }mysqli_close($conn);?>
</tbody>
</table>
			</div>
	     
           </div>
        </div>
		<div class="clear"></div>

		<div class="spacer"></div>


	</section>
       </div>
</div>

</body>

</html>