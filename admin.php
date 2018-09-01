<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
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
                            <form  action="employeeValidate.php" method="post" autocomplete="on"> 
                                <h1>Administrator Login:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Email </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="nancyogutu@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='furaha' required="required" type="password" placeholder="eg. *********" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>
                                   <p class="login button"> 
                                    <input type="reset" align="left" name="reset"  value =" Reset">
                                </p>
                            </form>
                        </div>

                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
\\