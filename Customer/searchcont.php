<?php
include("../session.php");
include("../config.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Customer </title>
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
		<center><h1><span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></h1></center>
	<div id="content-wrap">		
	<section id="secondary_bar">
            <nav>
                <ul>
                    <li class="selected"><a href="customer_home.php">HOME</a></li>
                    <li><a href="Register_Details.php">REGISTER</a></li>
                    <li><a href="Bookings.php">BOOKINGS</a></li>
                    <li><a href="ViewBookings.php">VIEW BOOKINGS</a></li>
                    <li><a href="SearchSite.php">SEARCH SITE</a></li>
                    <li><a href="Profile.php">VIEW PROFILE</a></li>
                    <li><a href="ViewAnimals.php">VIEW ANIMALS</a></li>
                    <li><a href="ViewNews.php">NEWS</a></li>
                    <li><a href="ViewGameparks.php">VIEW GAMEPARKS</a></li>
                    <li><a href="ViewGameReserves.php">VIEW GAMERESERVES</a></li>
                    <li><a href="viewChats.php">CHATS</a></li>
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
		    <li class="icn_categories"><a href="Register_Details.php">Registration</a></li>
		     <li class="icn_categories"><a href="Profile.php">View Profile</a></li>
		      <li class="icn_categories"><a href="Bookings.php">Bookings</a></li>
		        <li class="icn_categories"><a href="ViewBookings.php">View Bookings</a></li>
		        <li class="icn_categories"><a href="ViewTourists.php">Tourist Details</a></li>
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
		    <li class="icn_settings"><a href="Profile.php">Profile Report</a></li>
			<li class="icn_settings"><a href="BookingsReport.php">Booking Report</a></li>
		</ul>
		<h3>CUSTOMER</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	<section id="main" class="column">	
	<div id="form_wrapper" class="form_wrapper">
</head>		
	</div>
 <html>
<head>
	<meta charset="utf-8"/>
	<title>Customer </title>
	
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
<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_POST["search"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.";
	exit();
}
?>

<?php
//database connection info
$host = "localhost"; //server
$db = "nancy"; //database name
$user = "root"; //dabases user name
$pwd = ""; //password

//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);
?>
<?php
//MYSQL search statement
$query ="SELECT * FROM contact WHERE name LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);
?>

 <div id="tab2" class="tab_content">

  <table class="tablesorter" cellspacing="0"> 
      <thead>
			<thead><th colspan="7"> Commands and Complain </th></thead>
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


<?php
/* check whethere there were matching records in the table
by counting the number of results returned */

if(mysqli_num_rows($results) >= 1)
{?>
<?php
	$output = "";
	while($row = mysqli_fetch_array($results))
	{ ?>


    <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['contact_id']; ?></td>
    <td><?php echo $row['Name']; ?></td>
   <td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Phone']; ?></td>
	<td><?php echo $row['Subject']; ?></td>
    <td> <a href="catDelete.php?delete=<?php echo $row['contact_id']; ?>" onClick="del(this);" title="Delete" ><input type="image" src="images/icn_trash.png" title="Trash">  </a></td>
    </tr>

	<?php } ?>

  <?php }mysqli_close($conn); ?>
   </tbody>
</html>
   
</body>

</html>