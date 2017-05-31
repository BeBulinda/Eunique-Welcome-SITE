<section class="contact_details sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-magnifying-glass"></span>
                    </div>
                    <h4>Visit Our Place</h4>
                    <div class="text">
                        <p>Blue Building, Flr.2 Suite 58,Mwiki<br>Nairobi, Kenya</p>
                   </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-clock"></span>
                    </div>
                    <h4>Office Schedule</h4>
                    <div class="text">
                        <p>Monday to Saturday: 09.00am to 5.00pm <br>Sunday: Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-telephone"></span>
                    </div>
                    <h4>Quick Contact</h4>
                    <div class="text">
                        <p>Ph:((+254) 723 209072 <br>Email: euniquecapital@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="contact_us sec-padd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Send Us Your Message </h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn2" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
<!--            <section id="google-map-area">
                    <div 
                        class="google-map-home"
                        id="google-map"
                        data-map-lat="-1.280668" 
                        data-map-lng="36.818318" 
                        data-icon-path="images/logo/map-marker.png"
                        data-map-title="Staqpesa"
                        data-map-zoom="11" >

                    </div>

                </section>-->
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="home-google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8212839832954!2d36.81608671433515!3d-1.2809306359806194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d36b5ab1d1%3A0xbee2b3bfcd563ed8!2sRent+Ford+House!5e0!3m2!1ssw!2ske!4v1493639281978" 
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--                    <div 
                        class="google-map" 
                        id="contact-google-map" 
                        data-map-lat="-1.280668" 
                        data-map-lng="36.818318" 
                        data-icon-path="images/logo/map-marker.png"
                        data-map-title="Staqpesa"
                        data-map-zoom="11">

                    </div>-->
                                                
                </div>
            </div>
            
        </div>
    </div>
</section>

         <?php
          require_once("require/call_for_action.php");
         ?>