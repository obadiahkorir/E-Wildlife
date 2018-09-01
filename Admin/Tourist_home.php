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
                     <li><a href="Reservations.php">Reservations</a></li>
                       <li><a href="add_category.php">Payments</a></li>
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
			 <li class="icn_add_user"><a href="add_new_tourist.php">Add Tourist</a></li>
		    <li class="icn_categories"><a href="viewReservations.php">Tourist Details</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside>
	<section id="main" class="column">
	
	<h4 class="alert_info"><strong>E-WILDLIFE MANAGEMENT SYSTEM</strong></h4>
				
	<div id="form_wrapper" class="form_wrapper">
	
		 <table>
					<form class="register active" id="myForm"action="insertTourists.php"  method="POST" >

					<th colspan="3"><h2>REGISTER NEW TOURIST</h2> </th> 				

        <tr>
       <td>  

	  <label>Full Name:</label>
		<input type="text" id="empValid" name="fullname" placeholder="Full name" />
		<span class="error">This is an error</span>
	  </td>
      <td>   

	     <label>Username:</label>
		<input type="text" id="username" name="username" placeholder="User name" />
		<span class="error">This is an error</span>
      </td>
      <td>   

	     <label>Mobile Number:</label>
		<input type="text" id="tel" name="tel" placeholder="Mobile Number" />
		<span class="error">This is an error</span>
      </td>
		</tr>
    <tr>
         <td>  

		<label> Selelct Tourist image :</label>
		<input type="file" name="picture" id="picture"  required>
		<span id="pass-info"> </span>
                               
	    </td>
		
       <td>  
		<label> Enter Password:</label>
		<input type="password" id="password" name="password" placeholder="*****" >
		<span id="pass-info"> </span>                         
	</td>
	<td>   

	     <label>Re-Password:</label>
		<input type="password" id="password2" name="password2" placeholder="*****"  />
		<span class="error">This is an error</span>
      </td>
   </tr>
   <tr>
         <td>  

		<label> City :</label>
		<input type="text" id="city" name="city" placeholder="city" />
		<span class="error">This is an error</span>                     
	    </td>
		
       <td>  
		<label> Address</label>
		<input type="password" id="address" name="address" placeholder="Address" >
		<span id="pass-info"> </span>                         
	</td>
	<td>   

	     <label>Postal Code:</label>
		<input type="text" id="pcode" name="pcode" placeholder="postal Code" />
		<span class="error">This is an error</span>
      </td>
   </tr>
   <tr>
         <td>  

		<label>Email Address:</label>
		<input type="text" id="email" name="email" placeholder="nancy@gmail.com" />
		<span class="error">This is an error</span>                     
	    </td>
		
       <td>  
		<label>Country</label>
		<input type="password" id="country" name="country" placeholder="Country" >
		<span id="pass-info"> </span>                         
	</td>

   </tr>
		<div class="bottom">

						<td colspan="3">	
						
						<button name="submit" id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text"> Add Tourist</span></button>
						
						</td>
							
							<div class="clear"></div>
						</div>
	</form>
					
	</table>
	</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM Customer");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 	
			<thead><tr> <th colspan="7"> TOURISTS MANAGEMEMT DASHBORD</th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	     <th>Cust_Id</th>
             <th>Full Names</th>			  
    		<th>User Name</th>
		    <th>Phone Number</th>
           <th>Email Address</th>
           <th>Password</th>
           <th>Country</th>
           <th>City</th>
           <th>Address</th>
           <th>Postal Code</th>
           <th>Picture</th>			
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
     <td><?php echo $row['UserName']; ?></td>
   <td><?php echo $row['Phone']; ?></td>
    <td><?php echo $row['Email']; ?></td>
     <td><?php echo $row['Password']; ?></td>
      <td><?php echo $row['Country']; ?></td>
       <td><?php echo $row['City']; ?></td>
        <td><?php echo $row['Adress']; ?></td>
         <td><?php echo $row['PostalCode']; ?></td>
	<td><img src="../images/<?php echo $row['Picture']; ?>" width="40" height="40"></td> 
	<td> <a href="wareViewUpdate.php?update=<?php echo $row['Cust_Id']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Cust_Id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
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