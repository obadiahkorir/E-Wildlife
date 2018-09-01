<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form </title>
        <link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	   	  <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
        <script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
  <script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
      <script type="text/javascript">
$(document).ready(function() {

  // load messages every 1000 milliseconds from server.
  load_data = {'fetch':1};
  window.setInterval(function(){
   $.post('shout.php', load_data,  function(data) {
    $('.message_box').html(data);
    var scrolltoh = $('.message_box')[0].scrollHeight;
    $('.message_box').scrollTop(scrolltoh);
   });
  }, 1000);
  
  //method to trigger when user hits enter key
  $("#shout_message").keypress(function(evt) {
    if(evt.which == 13) {
        var iusername = $('#shout_username').val();
        var imessage = $('#shout_message').val();
        post_data = {'username':iusername, 'message':imessage};
        
        //send data to "shout.php" using jQuery $.post()
        $.post('shout.php', post_data, function(data) {
          
          //append data into messagebox with jQuery fade effect!
          $(data).hide().appendTo('.message_box').fadeIn();
  
          //keep scrolled to bottom of chat!
          var scrolltoh = $('.message_box')[0].scrollHeight;
          $('.message_box').scrollTop(scrolltoh);
          
          //reset value of message box
          $('#shout_message').val('');
          
        }).fail(function(err) { 
        
        //alert HTTP server error
        alert(err.statusText); 
        });
      }
  });
  
  //toggle hide/show shout box
  $(".close_btn").click(function (e) {
    //get CSS display state of .toggle_chat element
    var toggleState = $('.toggle_chat').css('display');
    
    //toggle show/hide chat box
    $('.toggle_chat').slideToggle();
    
    //use toggleState var to change close/open icon image
    if(toggleState == 'block')
    {
      $(".header div").attr('class', 'open_btn');
    }else{
      $(".header div").attr('class', 'close_btn');
    }
     
     
  });
});

</script>
        <div class="container">
			<header>
			</header>
<center> <h2>E-WIDLIFE MANAGEMENT SYSTEM</h2></center>
<h1 id="logo"><a class="notext" href="#" title="E-Wildlife">E-WildLife</a></h1>
<div id="top-nav">
          <ul>
          
            <li><a href="contact.php" title="Contact"><span>CONTACT</span></a></li>
            <li><a href="Sign In.php" title="Sign In"><span>SIGN IN</span></a></li>
            <li><a href="Userregistration.php" title="Register"><span>REGISTER</span></a></li>
            <li><a href="admin.php" title="Admin Panel"><span>ADMIN</span></a></li>
            <li><a href="index.php" title="Home"><span>Home</span></a></li>
          </ul>
        </div>
        		       
<div class="main_content2">
        <div class="details2">       
<form action="login.php"method="post"/>
<table width="95%" border="0" cellpadding="5">
<tr><td colspan="2"align="center"><h1>USER LOGIN PANEL</h1></td></tr>
  <tr>
    <td width="26%">Enter Email Address</td>
    <td width="96%">
    <input type="email"name="login_email" size="40" required/>    </td>
  </tr>
  <tr>
    <td>Enter Password</td>
    <td>
      <input type="password"name="login_password" size="40" height="30" required/>    </td>
  </tr>
  <tr> 
     <td>&nbsp;</td>
    <td>
      <button name="submit" type='submit' id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text">LOGIN</span></button>
      <button name="reset" type='reset'id="reset" title="Click to Save"  class="a-btn"> <span class="a-btn-text">CLEAR</span></button>
  </tr>
  <tr>
      <td>&nbsp;</td>
    
    <td><table><tr><td><a href="Userregistration.php">Register</a></td><td><a href="#">Forgot password</a></td></tr></table></td>
  </tr>
</table>
</form>

</div>

</div>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>

    </body>
</html
