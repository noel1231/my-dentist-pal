$(document).ready(function(){
	var base_url = $('#base_url').attr('class');
	
	$('#form_dentist_login').ajaxForm({
		type: 'POST',
		url: base_url+'login/check_login',
		success: function(html)
		{
			if(html == 'denied')
			{
				$('.invalid_login').show();
				setTimeout(function(){
					$('.invalid_login').hide();
				},1500);
			}else
			{
				window.location.href = base_url+'dentist_dashboard';
			}
			
		}
	});
});
	
