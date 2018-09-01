<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title> Registration Form </title>

        <link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
   <link rel="stylesheet" href="css/audioplayer.css"  type="text/css" media="screen" />
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
<center>
<div id="top-nav">
          <ul>
             <li><a href="index.php" title="Home"><span>HOME</span></a></li>
          <li><a href="Userregistration.php" title="Register"><span>REGISTER</span></a></li>
            <li><a href="admin.php" title="Admin Panel"><span>ADMIN</span></a></li>
            <li><a href="contact.php" title="Contact"><span>CONTACT</span></a></li>
            <li><a href="Sign In.php" title="Sign In"><span>SIGN IN</span></a></li>
            
          </ul>
        </div>
        </center>
        <div class="main_content2">
        <div class="details2">
        <h1>USER REGISTRATION PANEL</h1>
 <form method="POST" action="register_user.php" name="login" onsubmit="return validatePassword()">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="27%">Enter UserName</td>
    <td width="73%"><input type="text"name="register_user" size="45"required /></td>
    
  </tr>
  <tr>
    <td>Enter Email Address</td>
    <td><input type="email"name="register_email" size="45" required/></td>
    
  </tr>
  <tr>
   <td>Enter Category</td>
     <td>
     <select name="category" required >
    
     <option value="customer">Tourist</option>
    <option value="admin">Admin</option>
   
     </select>
     </td>
     
  </tr>
  <tr>
    <td>Enter Password</td>
    <td><input type="password"name="register_password" size="45" required/></td>
    
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input type="password"name="confirm_password" size="45" required/></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>
      <input type="submit"name="submit" value="Register" id="delbutton" title="Click to Save"  class="a-btn" > <span class="a-btn-text"></span>
      <input type="reset"name="reset" value="Clear" id="delbutton" title="Click to Save"  class="a-btn" > <span class="a-btn-text"></span>
      </td>
    </tr>
</table>
</form>
</div>
               
               </div><!-----end of main content--------->
         
        <div class="shout_box">
      <div class="header"> E-Wildlife  <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
  </div>
  </div>
    </body>
</html
