<html>
    <head>
        <title> KNOT.com </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="style.css">
        <script type='text/javascript' src="js/jquery.js"></script> 
        <script type='text/javascript' src="js/bootstrap.js"></script> 
        <script type='text/javascript' src="js/home.js"></script>
        <script type='text/javascript' src="js/fbgoogle.js"></script>
        <script async type="text/javascript" src="js/fapi-min.js"></script>
      <!--  <script async type="text/javascript" src="js/gapi-min.js"></script> -->
    </head>
    <body>
        <div id="indexPage">
            <input type="hidden" id="siteurl" value="http://localhost/puza/"/>
            <div id="indexTop">
                <a id="logoDiv" class="logoShift" href=""></a>
                <div id="signInFormDiv">
                    <form method="POST" action="checksignin.php" id="signInForm">
                        <div class="floatF height35"> <input type="text" class="signInInput form-control" placeholder="useremail" autocomplete="off" name="useremail" id="signInEmail"> &nbsp; </div>
                        <div class="floatF height35"> <input type="password" class="signInInput form-control" placeholder="Password" autocomplete="off" name="userpassword" id="sigInPassword"> &nbsp; </div>
                        <div class="floatF"> <button class="signInButton">Sign In</button> </div>
                        <div class="clear"></div>
                        <div class="floatF"><a href="#" id="forgotPasswordLink">Forgot your password?</a></div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <!-- <div id=signup><a href=signup.php>SignUp </a></div>
              -->
            <div id="indexContainer">
                <div id="leftPanel">
                </div>
                <div id="rightPanel">
                    <div style="float: right;margin-right: 30px;width: 300px;">
                        <div id="signUpFormHeading" style="text-align: left;margin-bottom: 20px;">
                            <h3>Get started - its free.</h3>
                        </div>
                        <div id="facebookSignUp" class="centeredDiv socialButtons" onclick="FB.login(function(response) {
                            }, {scope: 'public_profile, email, user_friends'});"> &nbsp;Login with Facebook</div>
                        <!-- <div id="twitterSignUp" class="centeredDiv socialButtons" >Login with Twitter</div> -->
                        <div id="googleSignUp" class="centeredDiv socialButtons" onclick="gapi.auth.signIn({'callback': googleSignInHelper})">&nbsp;&nbsp;Login with Google+</div>
                        <h5 style="text-align: center;margin: 10px 0px;">OR</h5>
                        <form method="POST" action="userpages/save.php" id="signUpForm" class="form-inline" enctype="multipart/form-data" role="form" style="position: relative; margin: 0px auto;display: inline-block;color: #6c7e98;">
                            <div class="form_row">
                                <label class="sr-only" for="name">Username</label>
                                <input type="text" name="username" class="form-control" id="username" autocomplete="off"
                                       placeholder="username" style="width: 300px;display: inline-block;" Required>

                                <div class="validationEntry rightPeak" id="nameValidation">
                                    <div class="validationContent">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form_row">
                                <label class="sr-only" for="name">Password</label>
                                <input name="userpassword" type="password" class="form-control" id="password" autocomplete="off"
                                       placeholder="Password" style="width: 300px;" Required>
                                <div class="validationEntry rightPeak" id="passwordValidation">
                                    <div class="validationContent">
                                    </div>
                                </div>
                            </div>

                            <div class="form_row" >
                                <label class="sr-only" for="name">Email</label>
                                <input name="useremail" type="email" class="form-control" id="email" autocomplete="off"
                                       placeholder="Email address" style="width: 300px;" Required>
                                <div class="validationEntry rightPeak" id="emailValidation">
                                    <div class="validationContent">
                                    </div>
                                </div>
                            </div>


                            <div class="form_row">
                                <label class="sr-only" for="name">Photo</label>
                                <input name="userpic" type="file" class="form-control"  autocomplete="off"
                                       placeholder="Userpic" style="width: 300px;" Required>
                                <div class="validationEntry rightPeak" id="userpic">
                                    <div class="validationContent">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <button type="submit" class="signUpButton" style="margin: 0px; padding: 0px;width: 180px; height: 35px;font-weight: normal;font-size: 11pt;box-shadow: 1px 2px 3px #1e2836;">Sign up</button>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </body>
</html
<?php 




?>
