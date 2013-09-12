<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>My Dentist Pal</title>
        
        <!-- twitter bootstrap-->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="style/style_new.css" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <?php echo $nav ?>
        <div class="wrapper">
            <div class="holder">
                <div class="contact_container">
                    <div class="leftpanel">
                        <div class="info">
                            <h2>Contact Us</h2>
                            <p>Do you have concerns?</p>
                            <p>Please feel free to drop us a message and we'll get back to you soonest.</p>
                            <p>Email: info@mydentistpal.com</p>
                            <p>Landline: (02) 436.3621</p>
                        </div>
                        <div class="form">
                            <div class="form_row">
                                <label id="error">ee</label>
                            </div>
                            <div class="form_row">
                                <input name="full_name" maxlength="30" type="text" Placeholder="Full Name" id="fullname"/>
                            </div>
                            <div class="form_row">
                                <input name="email" maxlength="50" type="text" Placeholder="Email Address" id="email_address"/>
                            </div>
                            <div class="form_row">
                                <textarea name="message" cols="20" rows="10" Placeholder="Message" id="message"></textarea>
                            </div>
                            <div class="form_row">
                                <div class="register" id="submit">
                                    <p>Submit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightpanel">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ph/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Cloudwalk+Digital,+Quezon+City,+Metro+Manila&amp;aq=0&amp;oq=cloudwal&amp;sll=14.633043,121.058607&amp;sspn=0.005668,0.010568&amp;ie=UTF8&amp;hq=Cloudwalk+Digital,&amp;hnear=Quezon+City,+Metro+Manila&amp;t=m&amp;ll=14.642303,121.059551&amp;spn=0.041522,0.04283&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.ph/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Cloudwalk+Digital,+Quezon+City,+Metro+Manila&amp;aq=0&amp;oq=cloudwal&amp;sll=14.633043,121.058607&amp;sspn=0.005668,0.010568&amp;ie=UTF8&amp;hq=Cloudwalk+Digital,&amp;hnear=Quezon+City,+Metro+Manila&amp;t=m&amp;ll=14.642303,121.059551&amp;spn=0.041522,0.04283&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                    </div>
                </div>
            </div>
            
            <div class="footer">
                <div class="link">
                    <a href="https://www.facebook.com/MyDentistPal" target="_blank"><img src="images/fb_like.png" alt="facebook" /></a>
                    <a href="https://twitter.com/MyDentistPal" target="_blank"><img src="images/twitter.png" alt="twitter" /></a>
                </div>
                <div class="logo_footer">
                    <img src="images/logo_footer.png" alt="facebook" />
                </div>
                <div class="company">
                    <p>Product of <a href="http://cloudwalkdigital.com/" target="_blank">Cloudwalk Digital Inc.</a></p>
                </div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        
        <script src="js/email.blockui.js"></script>
        <script src="js/custom.js"></script>
  </body>
</html>