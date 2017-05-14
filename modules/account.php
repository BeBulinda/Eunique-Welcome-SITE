<section class="register-section sec-padd-top">
    <div class="container">
        <div class="row">
            
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
            
                <div class="section-title">
                    <h3>Login Now</h3>
                    <div class="decor"></div>
                </div>
                
                <!--Login Form-->
                <div class="styled-form login-form">
                    <form method="post" action="home.php">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="username" value="" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="useremil" value="" placeholder="Enter Mail id *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Enter Password">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="button" class="thm-btn thm-tran-bg">login now</button>
                            </div>
                            <div class="form-group social-links-two padd-top-5 pull-right">
                                Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                            </div>
                        </div>
                        
                        <div class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" id="remember-me"><label for="remember-me">&nbsp; Remember Me</label>
                            </div>
                        </div>
                        
                    </form>
                </div>
                
            </div>
            
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="section-title">
                    <h3>Register Now</h3>
                    <div class="decor"></div>
                </div>
                
                <!--Login Form-->
                <div class="styled-form register-form">
                    <form method="post" action="home.php">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="username" value="" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="useremil" value="" placeholder="Enter Mail id *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Enter Password">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="button" class="thm-btn thm-tran-bg">Register here</button>
                            </div>
                            <div class="form-group padd-top-15 pull-right">
                                * Free registered user to submit content.  
                            </div>
                        </div>
                        
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

                <?php
                require_once("require/call_for_action.php");
                ?>
