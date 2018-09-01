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
		</div> 
		
	
	<div id="content-wrap">	
	
	<section id="secondary_bar">
                <nav>
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
                    <li><a href="add_animals.php">Add Animals</a></li>
                    <li><a href="add_gamepark.php">Add GameParks</a></li>
                    <li><a href="add_product.php">Add Animals</a></li>
                    <li><a href="Employee.php">Add Employee</a></li>
                    <li><a href="add_category.php">Add Categories</a></li>
                    <li class="logout"> <span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></li>
					
                </ul>
				
            </nav>

	</section><!-- end of secondary bar -->
	
	   	
<aside id="sidebar" class="column">
			
					<!-- Begin Search -->
				<div id="search">
					<form action="searchware.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Warehouse"   name='search' size=60 maxlength=100 />
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
		
		<h3>Reports:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="OrderReports.php">Reservations Report</a></li>
			<li class="icn_settings"><a href="EmployeeReport.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Tourists Report</a></li>
			<li class="icn_settings"><a href="ProductReport.php"> Animals Report</a></li>
     		
		</ul>


		
		<h3>Administrator:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Add Employee</a></li>
			<li class="icn_photo"><a href="add_product.php">Add Animals</a></li>
			<li class="icn_tags"><a href="add_warehouse.php">Add GameParks</a></li>
			<li class="icn_new_article"><a href="add_category.php">Add Category</a></li>
		
		</ul>
		
        <h3>Tables:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Reservations Details</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Tourists Details</a></li>
		</ul>

		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
	<h4 class="alert_info">Welcome To <strong>"E-WILDLIFE MAMAGEMENT SYSTEM"</strong> Admin Panel As: <?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?>  </h4>
	

<script type="text/javascript">
function validateForm()
{
var a=document.forms["addwarehouse"]["wname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the The Warehouse Name !!!");
  return false;
  }
var b=document.forms["addwarehouse"]["country"].value;
if (b==null || b=="")
  {
  alert("Pls. Country Is Missing !!!");
  return false;
  }
 var c=document.forms["addwarehouse"]["email"].value;
if (c==null || c=="")
  {
  alert("Pls. Email Is MIsssing !!!");
  return false;
  }
var d=document.forms["addwarehouse"]["address"].value;
if (d==null || d=="")
  {
  alert("Pls. Address Is Missing !!!");
  return false;
  }
 var e=document.forms["addwarehouse"]["city"].value;
if (e==null || e=="")
  {
  alert("Pls. City Is Misssing");
  return false;
  }
 var e=document.forms["addwarehouse"]["pcode"].value;
if (e==null || e=="")
  {
  alert("Pls. Postal Code Is Misssing !!!");
  return false;
  }

}
</script>



    <script type="text/javascript">
        $(function() {
            $('#wareValid').keyup(function() {
			
                if (this.value.match(/[^a-zA-Z]/g)) {
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					
                }
				Alart("Numbers IS NOT Allowed Sir!!!!!! !!!");
            });
        });
    </script>
			

				
	<div id="form_wrapper" class="form_wrapper"  >

		 <table>
					<form class="register active" id="myForm" action="insertWarehouse.php"  method="POST" enctype="multipart/form-data" name="addwarehouse" onsubmit="return validateForm()">

					<th colspan="3"><h2>ADD NEW GAME PARK:</h2> </th> 
						
	<tr>
    <td>  
	
	
		<label>Total Animals:</label>
		<input type="text" name="wname" id="wareValid"/>
		<span class="error">This is an error</span>

	
	

		
	</td>
   <td>  



	
	
	<label>County:</label>
		<select name="country" id="select">
	
		  <option value="KY" countrynum="93">KENYA</option>
		  <option value="US" countrynum="358">USA</option>
		  <option value="CHI" countrynum="355">CHINA</option>
		  
	
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

		<label> Address:</label>
		<input type="text" name="address"  id="address"/>
		<span class="error">This is an error</span>
                               
	</td>
	
   <td>  

       		<label> City:</label>
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
						<button name="save" id="myButton" class="a-btn"> <span class="a-btn-text"> REGISTER </span></ </button>
							<div class="clear"></div>
						</div>
   </tr>
</form>
</table>
	</div>
	
		
<script type="text/javascript">
$(document).ready(function(){ 
    $("#myButton").click(function() { 
     alert("Pls. Postal Code Is Misssing !!!");
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'jointCustomer.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});
</script>




<?php
$result = mysqli_query($mysqli,"SELECT * FROM gamepark");
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
    		<th>Country</th>
		    <th>City</th>				
    		<th>Address</th>
			 <th>Postal Code</th>				
    		<th> Email</th>
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
   <td><?php echo $row['Country']; ?></td>
	<td><?php echo $row['City']; ?></td>
	<td><?php echo $row['Address']; ?></td>
	<td><?php echo $row['PostalCode']; ?></td>
	<td><?php echo $row['Email']; ?></td>
    <td> <a href="wareViewUpdate.php?update=<?php echo $row['Gamepark_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="DeleteWarehouse.php?delete=<?php echo $row['Gamepark_ID']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
      </tbody>
</table>
	  
 </div> 
		
	</section>
          </div>
   </div>
   
  
   
</body>

</html>