<?php

require_once WPATH . "modules/classes/Users.php";
$users = new Users();
if (!empty($_POST)) {
    $success = $users->execute();
    if ($success['status'] == 200) {
        $_SESSION['add_success'] = true;
    }
}
?>
<section class="register-section sec-padd-top" style="background-image: url(images/blog/slider-2.jpg);">
    <div class="container">
        <div class="row">

            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="section-title">
                    <h3>Register Now</h3>
                    <div class="decor"></div>
                </div>

                <!--Login Form-->
                <div class="styled-form register-form">
                    <form method="post" method="POST">
                        <input type="hidden" name="action" value="website_registration"/>
                        <input type="hidden" name="user_type" value="GUEST">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="firstname" placeholder="Your First Name *" required="true">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="lastname" placeholder="Your Last Name *" required="true">
                        </div>
                        <!--                        <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-user"></span></span>
                                                    <label for="gender">Your Gender: </label>
                                                    <select name="gender">          
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                    </select> 
                                                </div>-->
                        <div class="form-group">
                            <span class="adon-icon"><span class="icon-technology"></span></span>
                            <input type="tel" name="phone_number" placeholder="Your Phone Number *" required="true">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="email" placeholder="Your Email Address" required="true">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" class="thm-btn thm-tran-bg">Register</button>
                            </div>
                            <div class="form-group padd-top-15 pull-right">
                                * Compulsory field  
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
