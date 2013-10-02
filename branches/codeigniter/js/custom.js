
$(function() {

	/* for email verification success */
	if($('.sample_login').val() != '' && $('.sample_login').val() != undefined)
	{
		$('.sample_login').val('');
		$('#myModalValidationEmail').modal('show');
		
		countDown();
	}
		
	function countDown()
	{
		var count = 7;
		setInterval(function(){
			if(count <= 0)
			{
				window.location.href = 'login';
			}else
			{
				count--;
				$('.perseconds').html(count);
			}
		},1000)
	}
	$('#profile_affix_nav').affix({
		offset: {
		top: 300,
		bottom: function () {
			return (this.bottom = $('.bs-footer').outerHeight(true))
		}
		}
	});
	
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
	
	$('#patient_search_from').on('submit',function(){
		var inputValue = $(this).find('input[name=search_field]').val();
		if(inputValue.trim() == '')
		{
			$(this).find('input[name=search_field]').val('').focus();
			return false;
		}
	});
	$('.sort_table').click(function(){
		var search_by = $(this).attr('id');
		var sortType = $(this).attr('data-sorter');
		var searchField = $(this).attr('alt');
		
		if(sortType == 'asc')
		{
			$(this).attr('data-sorter','desc');
			if(searchField)
			{
				window.location.href = 'patient_records?search_field='+searchField+'&by='+search_by+'&type=desc';
			}else
			{
				window.location.href = 'patient_records?by='+search_by+'&type=desc';
			}
		}else
		{
			$(this).attr('data-sorter','asc');
			if(searchField)
			{
				window.location.href = 'patient_records?search_field='+searchField+'&by='+search_by+'&type=asc';
			}else
			{
				window.location.href = 'patient_records?by='+search_by+'&type=asc';
			}
		}
	});
	
	$('#patient_access_form').ajaxForm({
		type: 'POST',
		url: 'patient_access/patient_access_account',
		beforeSubmit: function(arr, jform, option){
			var form = jform[0];
			$('button[name=submit_access]').prop('disabled',true);
			if(!form.emailAccess.value.trim())
			{
				form.emailAccess.focus();return false;
			}else if(!form.emailPass.value.trim())
			{
				form.emailPass.focus();return false;
			}
		},
		success:  function(html){
			if(html == 'save')
			{
				$('#myModalAccess').find('p').html('Saved Successfully!');
				$('#myModalAccess').modal('show');
			}else
			{
				$('#myModalAccess').find('p').html('Emailed Successfully!');
				$('#myModalAccess').modal('show');
			}
			$('button[name=submit_access]').prop('disabled',false);
		}
	});
	
	$('.delete_patient').click(function(){
		var dis = $(this);
		var id = dis.attr('id');
		
		$('.p_id').val(id);
		$('#myModalDeletePatient').modal('show');
		
	});
	$('.delete_patient_success').click(function(){
		var id = $('.p_id').val();
		
		$.ajax({
			type: 'POST',
			data: {'patient_id':id},
			url: 'patient_edit/delete_patient',
			success: function(html){
				
				$('#myModalDeletePatient').modal('hide');
				$('span[id='+id+']').parents('tr').fadeOut(500);
				
			} 
		});
	});
	
	$('.checkall').click(function(){
		var dis = $(this);
		if(dis.is(':checked'))
		{
			$('.check_each').each(function(key,value){
				$(this).prop('checked',true);
			});	
			$('.delete_all_checkbox').show();
		}else
		{
			$('.check_each').each(function(key,value){
				$(this).prop('checked',false);
			});
			$('.delete_all_checkbox').hide();
		}
		
	});
	
	$('.delete_checked_patient').click(function(){
		var data = new Array();
		var count = 0;
		$('input[class=check_each]:checked').each(function(key,el){
			data.push($(el).val());
			count++;
		});
		
		if(data != '')
		{
			$('.saying_body').html('Are you sure do you want to delete '+count+' records?');
			$('.data_ids').val(data);
			$('#myModalDeleteAllChecked').modal('show');
			
		}
	});
	
	$('.delete_count_success').click(function(){
		var data = $(this).parent().find('.data_ids').val();
		var dataString = 'patient_ids='+data;
		$.ajax({
			type: 'POST',
			url: 'patient_records/deleteCheckbox',
			data: dataString,
			success: function(html){
				window.location.href = 'patient_records'
			}
		});
	});
	
	$('.check_each').click(function(){
		var checked = $(this).is(':checked');
		var all_item = false;
		if(checked)
		{
			$('.delete_all_checkbox').show();
		}else
		{
			$('.check_each').each(function(key,el){
				if($(el).is(':checked'))
				{
					all_item = true;
				}
			});
			
			if(all_item == false)
			{
				$('.delete_all_checkbox').hide();
				$('.checkall').prop('checked',false);
			}
		}
	});
	
	$( ".datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true
	});
	
	$( ".datepickerBday" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: '1910:2016',
		maxDate: 0,
		onClose: function(selectedDate){
			var computedAge = getAge(selectedDate);
			if(isNaN(computedAge))
			{
				computedAge = '';
			}
			$('input[name=modal_p_age]').val(computedAge);
			$('input[name=patient_age]').val(computedAge);
			
		}
	});
	
	function getAge(dateString) 
	{
		var today = new Date();
		var birthDate = new Date(dateString);
		var age = today.getFullYear() - birthDate.getFullYear();
		var m = today.getMonth() - birthDate.getMonth();
		if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
		{
			age--;
		}
		return age;
	}
	
	$('#adding_paient_form').ajaxForm({
		type: 'POST',
		url: 'patient_add/adding_patient_modal',
		beforeSubmit:function(arr, jform, option){
			var form = jform[0];
		},
		success: function(html){
			$('#myModalAddingSaying').modal('show');
			$('#myModalAddingPatient').modal('hide');
		}
	});
	
	
	
	$('.submit_all_form').click(function(){
		
		/* for trimming the inputs */
		var trimming1 = $('#dental_history_form').serializeArray();
		for(var i=0,len=trimming1.length;i<len;i++)
		{
			trimming1[i] = $.trim(trimming1[i]);
		}
		var trimming2 = $('#medical_history_form').serializeArray();
		for(var i=0,len=trimming2.length;i<len;i++)
		{
			trimming2[i] = $.trim(trimming2[i]);
		}
		var trimming3 = $('#patient_info_form').serializeArray();
		for(var i=0,len=trimming3.length;i<len;i++)
		{
			trimming3[i] = $.trim(trimming3[i]);
		}
		
		var formDental = $('#dental_history_form').serialize();
		var formMedical = $('#medical_history_form').serialize();
		var formInfo = $('#patient_info_form').serialize();
		
		var dataString = formInfo+'&'+formDental+'&'+formMedical;
		$.ajax({
			type: 'POST',
			url: 'patient_add/submit_patient',
			data: dataString,
			success: function(html){
				$('#myModalSaveSuccessfully').modal('show');
			}
		});
		
	});
	$('#patient_photo').on('change',function(){
		var dis = $(this);
		var formDental = $('#patient_info_form');
		
		formDental.ajaxForm({
			type: 'POST',
			url: 'patient_add/upload_patient_picture',
			success: function(html)
			{
				if(html != 'error')
				{
					$('#patient_photo_file').val('patient_picture/'+html);
					$('.patient_photo_view').attr('src','patient_picture/'+html).css('width','200px');
				}else
				{
					$('.patient_photo_view').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Error+Upload');
				}
			}
		}).submit();
	});
	
	$('#dentist-photo').on('change',function(){
		var dis = $(this);
		var formDental = $('#form_dentist_profile');
		
		formDental.ajaxForm({
			type: 'POST',
			url: 'dentist_profile/upload_dentist_picture',
			
			beforeSend: function(xhr, status) 
			{
				// TODO: show loading progress 
				$('#loading_prog').show();
			},
		
			success: function(html)
			{
				// alert(html)
				if(html != 'error')
				{
					$('#loading_prog').hide();
					$('#dentist_photo_file').val('dentist_img/'+html);
					$('.dentist_photo_view').attr('src','dentist_img/'+html).css('width','200px');
				}else
				{
					$('.dentist_photo_view').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Error+Upload');
				}
			}
		}).submit();
	});
	
	$('#clinic-photo').on('change',function(){
		var dis = $(this);
		var formDental = $('#form_dentist_profile');
		
		formDental.ajaxForm({
			type: 'POST',
			url: 'dentist_profile/upload_clinic_picture',
			
			beforeSend: function(xhr, status) 
			{
				// TODO: show loading progress 
				$('#loading_prog_map').show();
			},
			success: function(html)
			{
				// alert(html)
				if(html != 'error')
				{
					$('#loading_prog_map').hide();
					$('#clinic_photo_file').val('clinic_img/'+html);
					$('.clinic_photo_view').attr('src','clinic_img/'+html).css('width','200px');
				}else
				{
					$('.clinic_photo_view').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Error+Upload');
				}
			}
		}).submit();
	});
	
   	$('#form_dentist_login').ajaxForm({
		type: 'POST',
		success: function(html)
		{
			if(html == 'denied')
			{
				$('.invalid_login').html('Invalid email/password').show();
			}else if(html == 'not verify')
			{
				$('.invalid_login').html('Invalid Account. Please make sure that your account is verified. Kindly check your mail for your account verification.').show();
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
			}else
			{
				window.location = '../patient_edit?id='+html+'&access=granted';
			}
			
		}
	});
	$('.account_submit_button').click(function(){
		
		$('#account_setting_form').ajaxForm({
			beforeSubmit: function(arr, jform, option){
				var form = jform[0];
				if(form.curr_pass.value == '')
				{
					form.curr_pass.focus();
					return false;
				}else if(form.new_pass.value == '')
				{
					form.new_pass.focus();
					return false;
				}else if(form.re_pass.value == '')
				{
					form.re_pass.focus();
					return false;
				}
			},
			success: function(html){
				if(html == 'current unsuccess')
				{
					var input = $('#account_setting_form').find('input[name=curr_pass]');
					$('.current_pass_show').remove();
					$('<span class="help-block current_pass_show">Current password did not match</span>').insertBefore(input);
				}else if(html == 'password not match')
				{
					var input = $('#account_setting_form').find('input[name=new_pass]');
					$('.pass_pass_show').remove();
					$('<span class="help-block pass_pass_show">Password did not match</span>').insertBefore(input);
					$('#account_setting_form').find('input[name=new_pass]').val('').focus();
					$('#account_setting_form').find('input[name=re_pass]').val('');
				}else
				{
					$('#myModalAccountSetting').modal('show');
					$('#account_setting_form').find('input[name=curr_pass]').val('');
					$('#account_setting_form').find('input[name=new_pass]').val('');
					$('#account_setting_form').find('input[name=re_pass]').val('');
					
				}
			}
		}).submit();
	});
	
	$('#myTab a').on('click',function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('.button_next').on('click',function(e){
		e.preventDefault();
		var tab = $(this).attr('alt');
		$('.nav-stacked a[href="#'+tab+'"]').tab('show');
	});
        
//        $('body').scrollspy({ target: '#menu' })
      
	$('a.prices').click(function(){
		$('html, body').animate({
				scrollTop: $('#prices').offset().top
		}, 800, function() {
				//parallaxScroll(); // Callback is required for iOS
		});
		
		$(this).parent().addClass('active');
		$('a.home').parent().removeClass('active');
		$('a.contact_us').parent().removeClass('active');
	   
		return false;
	});
        
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
	$('input[name=illness_patient]').on('click',function(){
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
		
		type: 'POST',
		beforeSubmit: function ()
                {
			var fname = $('#fname').val();
			var middle = $('#middle').val();
			var lname = $('#lname').val();
			var email1 = $('#email_sign').val();
			var email2 = $('#email_sign1').val();
			var pass1 = $('#pass1').val();
			var pass2 = $('#pass2').val(); 
			
			if(fname.trim() == '' || lname.trim() == ''){
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Enter your full name in the required field to proceed.').show();
				return false;
			}else if(!fname.match(/^[A-Za-z . -]+$/) || !lname.match(/^[A-Za-z . -]+$/))
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Enter valid name in the required field to proceed.').show();
				return false;
			}else if(email1.trim() == '')
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Enter your email address in the required field to proceed.').show();
				return false;
			}else if(!email1.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Enter valid email address in the required field to proceed.').show();
				return false;
			}else if(email2.trim() == '')
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Re-type your email address in the required field to proceed.').show();
				return false;
			}else if(email2 != email1)
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Email address did not match!').show();
				return false;
			}else if(pass1.trim() == '')
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Enter your password in the required field to proceed.').show();
				return false;
			}else if(pass2.trim() == '')
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Re-type your password in the required field to proceed.').show();
				return false;
			}else if(pass2 != pass1)
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Password did not match!').show();
				return false;
			}
		},
		
		success: function(html)
		{
			
			if(html == 'email registered')
			{
				$('#myErrorReg').modal('show');
				$('.alert_msg').html('Email are already registered.').show();
				$('#email_sign').val('');
				$('#email_sign1').val('');
				$('#email_sign').focus();
				return false;
			}else
			{
				$('.alert_msg').hide();
				$('.success_msg').html('Thank you for signing up! Please confirm this account. An account verification has been sent to your email.').show();
				$('#mySuccessReg').modal('show');
			}
			// $('.alert_msg').hide();
			// $('.success_msg').html('Registration Success!').show();
			// $('.success_msg').html('Thank you for registering! A confirmation email has been sent. Please click on the Activation Link to Activate your account.').show();
			// $('#mySuccessReg').modal('show');
		}
	});
	$('#myErrorReg').on('hidden.bs.modal', function () {
		// $('#fname').focus();
		// $('#lname').focus();
		$('#email_sign').focus();
	});
	//dentist profile submit form 
	$('.submit_dental_form1').click(function(){
		$('#form_dentist_profile').ajaxForm({
			
			type: 'POST',
			url: 'dentist_profile/save_dentist_info',
			beforeSubmit: function (){
				var fname = $('#fname').val();
				var middle = $('#middle').val();
				var lname = $('#lname').val();
				var email1 = $('#email1').val();
				
				if(fname.trim() == '' || lname.trim() == ''){
					$('.alert_msg').html('Enter your full name in the required field to proceed.').show();
					return false;
				}else if(!fname.match(/^[A-Za-z . -]+$/) || !lname.match(/^[A-Za-z . -]+$/))
				{
					$('#myErrorReg').modal('show');
					$('.alert_msg').html('Enter valid name in the required field to proceed.').show();
					return false;
				}else if(email1.trim() == '')
				{
					$('#myErrorReg').modal('show');
					$('.alert_msg').html('Enter your email address in the required field to proceed.').show();
					return false;
				}else if(!email1.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
				{
					$('#myErrorReg').modal('show');
					$('.alert_msg').html('Enter valid email address in the required field to proceed.').show();
					return false;
				}
			},
			
			success: function(html)
			{
				// alert(html)
				$('.alert_msg').hide();
				// $('.success_msg').html('Registration Success!').show();
				$('.success_msg').html('Saved Successfully!').show();
				$('#mySuccessReg').modal('show');
			}
		});
	});
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	// $(document).ready(function(){
            // find the input fields and apply the time select to them.
		// $('#sample2 input').ptTimeSelect();
	// });
	
	// $('.datepick').css('cursor','pointer');
	// $('.datepick').scroller('destroy').scroller({
		// mode: 'clickpick',
		// preset: 'date',
		// theme: 'android-ics light',
		// display: 'bubble',
		// height: 35,
		// width: 100
	// });
	
	$('.timepick').css('cursor','pointer');
	$('.timepick').scroller('destroy').scroller({
		mode: 'clickpick',
		preset: 'time',
		theme: 'android-ics light',
		display: 'bubble',
		height: 35,
		width: 100
	});
	
	// $(document).ready(function(){
		// $('input[name="time"]').ptTimeSelect();
	// });
	// $('#timepicker').timepicker({
		// showPeriod: true,
		// showLeadingZero: true
	// });
		// $('#sample2').click(function(){
			// $('.dwwr').show('fast');
		// });
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		e.target // activated tab
		e.relatedTarget // previous tab

		if($(e.target).attr('href') == '#treatment_record') {
			$.ajax({
				type: 'post',
				data: { 'view': 'treatment_record' },
				success: function(html) {
					$('#treatment_record').find('.well').html(html);
				}
			});
		}
	})


});

function handleFiles(files)
{
	// Loop through the FileList and render image files as thumbnails.
	for (var i = 0, f; f = files[i]; i++) {
		 // Only process image files.
		  if (!f.type.match('image.*')) {
			continue;
		  }
	 var reader = new FileReader();

	  // Closure to capture the file information.
	  reader.onload = (function(theFile) {
		return function(e) {
			$('.p_photo_view').attr('src',e.target.result);
		};
	  })(f);

	  // Read in the image file as a data URL.
	  reader.readAsDataURL(f);
	}
}
