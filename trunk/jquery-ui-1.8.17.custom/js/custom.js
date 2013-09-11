$( document ).ready(function()
{
    $(window).scroll(function()
    {
        if (document.body.scrollTop === 0)
             $(".navbar-inner").css({"box-shadow":"none"});
        else
             $(".navbar-inner").css({'-webkit-box-shadow' : '0 1px 10px rgba(0, 0, 0, 0.1)',
                                     '-moz-box-shadow'    : '0 1px 10px rgba(0, 0, 0, 0.1)',
                                     'box-shadow'         : '0 1px 10px rgba(0, 0, 0, 0.1)'});   
   });
   
   $('.register').click(function()
   {
        var child_html = $(this).attr('alt');
       
        if(child_html == "REGISTER")
        {
            window.location = "dentist_signup.php";
        }
        else if(child_html == "DENTIST ACCESS")
        {
            window.location = "dentist_login.php";
        }
        else if(child_html == "PATIENT ACCESS")
        {
            window.location = "patient/patient_login.php";
        }
        else if(child_html == "WATCH VIDEO")
        {
            $.blockUI({ 
                onOverlayClick: $.unblockUI 
            });
        }
        else if(child_html == "Submit")
        {
            var fullname = $('#fullname').val();
            var email = $('#email_address').val();
            var comments = $('#message').val();

            var valid = '';
            
            if(fullname.length < 1 || email.length < 1 || comments.length < 1)
            {
                    valid += 'All fields required!';
                    $("#error").html("Error: "+valid);
                    $("#error").show();		
            }
            else if(!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)){
                    valid += 'Please enter a valid email!';
                    $("#error").html("Error: "+valid);
                    $("#error").show();
            }
            else
            {
                $.blockUI
                ({ css:
                    { 
                        border: 'none', 
                        padding: '15px', 
                        backgroundColor: '#000', 
                        '-webkit-border-radius': '10px', 
                        '-moz-border-radius': '10px', 
                        opacity: .6, 
                        color: '#fff' 
                    } 
                });

                $.ajax
                ({
                    type: 'post',
                    url: "/send_mail.php",
                    data:{
                            'full_name' : fullname,
                            'email' : email,
                            'message' : comments
                         },
                    cache: false,
                    success: function(html)
                    {
                        $.unblockUI
                        ({
                            onUnblock: function()
                            {
                            } 
                        });
                        
                        window.location = "/contact_us.php"; 
                    }
                  });
            }
        }
        
   });
    
});