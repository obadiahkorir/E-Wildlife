<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Wildlife</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #666666;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form"  method = 'POST' action="registerValidate.php">
                    <span class="login100-form-title p-b-43">
               CREATE NEW ACCOUNT
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid Username is required: test">
                        <input class="input100" type="text" name="register_user">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Enter UserName</span>
                    </div>
                      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: nancy@gmail.com">
                        <input class="input100" type="email" name="register_email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Enter Email</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="register_password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Enter Password</span>
                    </div>
                
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="index.php" name="reg_user" class="txt1">
                                Sign In
                            </a>
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                           Register
                        </button>
                    </div>
                    
                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">  
                    <a href="Sign In.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                              Already Registered? Please Sign In.
                     <i class="fa fa-long-arrow-right m-l-5"></i>
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>

     <div class="copy">
        <!-- Begin Shell -->
        <div class="shell">
          <div class="carts">
        
          </div>  <p>&copy; E-WILDLIFE MANAGEMENT SYSTEM <a href="index.php"><i><font color="fefefe"> Welcome To E-WildLife Management System </font></i></a></p>
          <div class="cl">&nbsp;</div>
        </div>
        <!-- End Shell -->
      </div>
    </div>
   
  
  </div>
  <!-- End Wrapper -->
</body>
</html>
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
   <script src="js/main.js"></script>

</body>
</html>