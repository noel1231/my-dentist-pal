$(function() {
	
	
    $(window).scroll(function()
    {
        if (document.body.scrollTop === 0)
             $(".navbar").css({"box-shadow":"none"});
        else
             $(".navbar").css({'-webkit-box-shadow' : '0 1px 10px rgba(0, 0, 0, 0.1)',
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
   });
   
   $('#submit').click(function()
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
                url: "/contact_us/send",
                data:{
                        'full_name' : fullname,
                        'email' : email,
                        'message' : comments
                     },
                cache: false,
                success: function()
                {
                    $.unblockUI
                    ({
                        onUnblock: function()
                        {
                        } 
                    });
                    
                    window.location = "/contact_us"; 
                }
              });
        }
   });
   
   	$('#form_dentist_login').ajaxForm({
		type: 'POST',
		success: function(html)
		{
			if(html == 'denied')
			{
				$('.invalid_login').show();
			}else
			{
				window.location.href = 'dentist_dashboard';
			}
			
		}
	});
	
	$('#form_patient_login').ajaxForm({
		type: 'POST',
		success: function(html)
		{
			if(html == 'denied')
			{
				$('.invalid_login').show();
				return false;
			}
			
		}
	});
	
	$('#myTab a').on('click',function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('.button_next').on('click',function(e){
		e.preventDefault();
		var tab = $(this).attr('alt');
		$('#myTab a[href="#'+tab+'"]').tab('show');
	});
        
	$('a.prices').click(function(){
		$('html, body').animate({
				scrollTop:$('#prices').offset().top
		}, 800, function() {
				//parallaxScroll(); // Callback is required for iOS
		});
		
		$(this).addClass('active');
		$('a.home').removeClass('active');
		$('a.contact_us').removeClass('active');
	   
		return false;
	});

    if(window.location.hash == '#prices')
    {
        $('a.home').removeClass('active');
        $('a.contact_us').removeClass('active');
        $('a.prices').addClass('active');
    }
	$('input[name=medical_treatment_patient]').on('click',function(){
		if($(this).val() == 'yes')
		{
			$('.show_question').show();
		}else
		{
			$('.show_question').hide();
			$('.show_question').find('input').val('');
		}
	});
	$('input[name=surgical_patient]').on('click',function(){
		if($(this).val() == 'yes')
		{
			$('.show_question2').show();
		}else
		{
			$('.show_question2').hide();
			$('.show_question2').find('input').val('');
		}
	});
	$('input[name=hospitalized_patient]').on('click',function(){
		if($(this).val() == 'yes')
		{
			$('.show_question3').show();
		}else
		{
			$('.show_question3').hide();
			$('.show_question3').find('input').val('');
		}
	});
	$('input[name=presciption_patient]').on('click',function(){
		if($(this).val() == 'yes')
		{
			$('.show_question4').show();
		}else
		{
			$('.show_question4').hide();
			$('.show_question4').find('input').val('');
		}
	});
		
		$('#form_dentist_signup').ajaxForm({
		//var email = $('#email1').val();
		
		type: 'POST',
		beforeSubmit: function (){
			if($('#fname').val().trim() == '' || $('#middle').val().trim() == '' || $('#lname').val().trim() == ''){
				$('.alert_msg').html('Enter your full name in the required field to proceed.').show();
				return false;
			}else if($('#email1').val().trim() == '')
			{
				$('.alert_msg').html('Enter your email address in the required field to proceed.').show();
				return false;
			}else if(!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
			{
				$('.alert_msg').html('Enter valid email address in the required field to proceed.').show();
				return false;
			}else if($('#email2').val().trim() == '')
			{
				$('.alert_msg').html('Re-type you email address in the required field to proceed.').show();
				return false;
			}
		},
		
		success: function(html)
		{
			if(html == 'denied')
			{
				$('.invalid_login').show();
			}else
			{
				window.location.href = base_url+'dentist_dashboard';
			}
			
		}
	});
    
});
