<?php
include("../session.php");
include("../config.php");
?>
<!DOCTYPE>
<html >
<head>
	<title>E-WildLIfe System </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	   <link rel="shortcut icon" href="images/logo.png" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="../css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="../css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="../css/cart.css" type="text/css" media="all" />
	    <script src="../js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	    <script src="../js/cufon-yui.js" type="text/javascript"></script>
	   <script src="../js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	   <script src="../js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	  <script src="../js/functions.js" type="text/javascript" charset="utf-8"></script>
     <script src="../js/jquery.js" type="text/javascript"></script>  
    <script src="../js/main.js" type="text/javascript"></script>
	        <link rel="stylesheet" href="../css/PaymentStyle.css" type="text/css" media="screen"/>
		   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
          <script type="text/javascript" src="../js/sliding.form.js"></script>
</head>

<style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
	
<body>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
	
		<div id="main" class="shell">
			<div id="nav" style="display:none;">
                    <ul>
                        <li class="doortay">
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        <li>
                            <a href="#">Payment</a>
                        </li>
                        <li>
                            <a href="#">Confirm</a>
                        </li>
						
                    </ul>
                </div>
			<div id="content">
			
			<br><br>
			
			        <div id="kcontent">
            <h1>E-WILDLIFE  PAYMENTS PANEL</h1>
            <center><h1><span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></h1></center>
            <div id="wwrapper">
                <div id="steps">
				<?php
$result = mysqli_query($conn,"SELECT * FROM bookings where email='$login_session'");
?>
         <form id="formElem" name="formElem"  action="InsertPayment.php" method="POST" class="myForm">
                        <fieldset class="step">
                            <legend>Account Verification
				<h4 Align="right">Total Fee : <big style="color:green"></big></h4>

							</legend>
                            <p>
                                <label for="username">Enter Full Names</label>
                                <input id="fullname" name="fullname" 	
                            </p>
                            <p>
                                <label for="amount">Enter Amount</label>
                                <input id="amount" name="amount" value="
                                placeholder="kSH 7800" type="int" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Postal Code</label>
                                <input id="pcode" name="pcode" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">NUmber Of People</label>
                                <input id="nos" name="nos" type="text" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>
                        <fieldset class="step">

                         <legend>Personal Details
		          
						 </legend>
                           <p>
                                <label for="phone"> Address:</label>
                                <input id="address" name="address" placeholder="e.g. Nancy" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="country">Country</label>
                                		<select name="country" id="select">
	
		  <option value="Kenya" countrynum="93">Kenya</option>
		  <option value="Ugannda" countrynum="358">Uganda</option>
		  <option value="Tanzania" countrynum="355">Tanzania</option>
		  <option value="Somalia" countrynum="493">Somalia</option>	
</select>    
                        </p>
                             <p>
                                <label for="phone"> City:</label>
                                <input id="city" name="city" placeholder="e.g. Kilifi" type="text" AUTOCOMPLETE=OFF />
                            </p>														 

							<p> 
								 <label for="Address"> Phone:</label>
                                <input id="phone" name="phone" placeholder="e.g. 123435345" type="tel" AUTOCOMPLETE=OFF />
                            </p>
                             <p>
                                <label for="phone"> Site:</label>
                                <input id="site" name="site" placeholder="e.g. Amboseli" type="text" AUTOCOMPLETE=OFF />
                            </p>
							
                        </fieldset>
                        <fieldset class="step">

                            <legend>Payment
							
							</legend>
							
							 <p>
                                <label for="name">RESERVATIONS FOR:</label>
                                 <?php
									
										$name= mysqli_query($conn,"select * from bookings where email='$login_session'");

										echo '<select  name="email"  id="ml" class="ed">';
										echo '<option selected="selected">Select Reservation</option>';
										 while($res= mysqli_fetch_assoc($name))
										{

										echo '<option>';
										echo $res['email'];
										echo'</option>';
										}
										echo'</select>';

										?>
                            </p>
							
							<p>
                                <label for="phone">M-PESA TRANSACTION</label>
                                <input id="mpesa" name="mpesa" placeholder="e.g.MCSHGSDH2578FG" type=" text" AUTOCOMPLETE=OFF />
                            </p>                        
 </fieldset>
	<fieldset class="step">
              <legend>Confirm Payments
</legend>
<p>
								Remember We will Send You Notification Once Your Reservation is Confirmed
							</p>
                            <p class="submit">
							
                                <button id="registerButton" type="submit"   name="submit"  title="Click On Payment Method"> Proceed</button>
                            </p>
                        </fieldset>
                        
                    </form>
 <?php }mysqli_close($conn);?>
                </div>
                
            </div>
        </div>
		
		
		
 <script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#registerButton").click(function() { 
     
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'InsertPayment.php',
        data: $(".myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});
</script>		
	</div>
	</div>
</div>
</body>
</html>