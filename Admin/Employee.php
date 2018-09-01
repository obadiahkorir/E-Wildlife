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
		<h3> E-Wildlife Database Backup:</h3>
		<ul class="toggle">
		    <li class="icn_folder"><a href="Backup.php">Backup Database</a></li>
		</ul>
		<h3> Employee Operations:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="add_new_employee.php">Add New Employee</a></li>
     		<li class="icn_categories"><a href="ViewEmployee.php">Employee Details</a></li>
		</ul>
		
		<h3>Reports:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="OrderReports.php">Reservation  Report</a></li>
			<li class="icn_settings"><a href="EmployeeReport.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Tourist Report</a></li>
			<li class="icn_settings"><a href="ProductReport.php"> Animals Report</a></li>
     		
		</ul>


		
		<h3>Administrator:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Add Employee</a></li>
			<li class="icn_photo"><a href="add_animals.php">Add Animals</a></li>
			<li class="icn_tags"><a href="add_warehouse.php">Add GameParks</a></li>
			<li class="icn_new_article"><a href="add_category.php">Add GameReserves</a></li>
		
		</ul>
		
        <h3>Tables:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Reservation Details</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Tourist Details</a></li>
		</ul>

		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	</aside><!-- end of sidebar -->
	<section id="main" class="column">
	<h4 class="alert_info"> <strong>E-WILDLIFE MANAGEMENT SYSTEM</strong></h4>
	<div id="form_wrapper" class="form_wrapper">
		 <table>
					<form class="register active" id="myForm"action="insertEmployee.php"  method="POST" >
					<th colspan="3"><h2>REGISTER NEW EMPLOYEES</h2> </th> 				
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
	     <label>Employee PayrollNo:</label>

		<input type="text" id="pay" name="pay" placeholder="Pay Roll" />
		<span class="error">This is an error</span>
      </td>
		</tr>
    <tr>
         <td>  

		<label> Selelct Employee image :</label>
		<input type="file" name="picture" id="picture"  required>
		<span id="pass-info"> </span>                        
	    </td>
       <td>  

		<label> Enter ID Number:</label>
		
		<input type="text" id="id" name="id" placeholder="Id Number" >
		<span id="pass-info"> </span>
                               
	</td>
	<td>  

		<label> Enter Pay Roll:</label>
		
		<input type="text" id="pay" name="pay" placeholder="Pay Roll Number" >
		<span id="pass-info"> </span>
                               
	</td>
   </tr>
						<div class="bottom">

						<td colspan="3">	
						
						<button name="submit" id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text"> Add Employee</span></button>
						
						</td>
							
							<div class="clear"></div>
						</div>

	</form>
					
	</table>
	</div>


						<script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
    
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'empRegistration.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
		
	





<?php
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7"> Employee Data Record</th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	     <th>Employee ID</th>
             <th>Employee Name</th>			  
    		<th>User Name</th>
		    <th>Pay Roll</th>
		    <th>ID Number</th>
           <th>Picture</th>			
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

      <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Employee_ID']; ?></td>
    <td><?php echo $row['Employee_Name']; ?></td>
   <td><?php echo $row['Username']; ?></td>
	<td><?php echo $row['Pay_Roll']; ?></td>
	<td><?php echo $row['IdNumber']; ?></td>
	<td><img src="../images/<?php echo $row['Picture']; ?>" width="40" height="40"></td>
    
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