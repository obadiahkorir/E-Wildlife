<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form </title>
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

        <link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />

    
    </head>
    <body>
    
        <div class="container">


            <header>
            </header>

            <section>               
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form method="POST" action="includes/register.php" name="login" onsubmit="return validatePassword()">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="57%">Enter UserName:</td>
    <td width="83%"><input type="text"name="register_user" size="25"required /></td>
    
  </tr>
  <tr>
    <td>Enter E-mail Address</td>
    <td><input type="email"name="register_email" size="25" required/></td>
    
  </tr>
  <tr>
   <td>Category</td>
     <td>
     <select name="category" required >
    
     <option value="customer">Tourist</option>
      <option value="admin">Admin</option>
     
     </select>
     </td>
     
  </tr>
  <tr>
    <td>Enter Password:</td>
    <td><input type="password"name="register_password" size="25" required/></td>
    
  </tr>
  <tr>
    <td>Confarm Password</td>
    <td><input type="password"name="confirm_password" size="25" required/></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>
      <input type="submit"name="submit" value="Register"/>
      <input type="reset"name="reset" value="Delete"/>
      </td>
    </tr>
</table>
</form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
