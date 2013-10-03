$(function(){

	function append_to_table(appointment_obj) {
		$('#tbody_appointment').html('');
		if(appointment_obj.length > 0) {
			for(var i=0; i<appointment_obj.length; i++) {
				var id = appointment_obj[i].id;
				var title = appointment_obj[i].title;
				var description = appointment_obj[i].description;
				var start_time = appointment_obj[i].start_time;
				var end_time = appointment_obj[i].end_time;
				var status = appointment_obj[i].status;
				var start = appointment_obj[i].start;
				var newDate = new Date();
				
				$('#tbody_appointment').append('<tr id="'+id+'">'+
													'<td>'+title+'</td>'+
													'<td>'+description+'</td>'+
													'<td>'+start_time+' to '+end_time+'</td>'+
													'<td>'+
														'<select class="select_status" style="background-color: #E7F4FF;">'+
															'<option value="">Select Status...</option>'+
															'<option value="confirmed" '+(status == 'confirmed' ? 'selected' : '')+'>Confirmed</option>'+
															'<option value="cancelled" '+(status == 'cancelled' ? 'selected' : '')+'>Cancelled</option>'+
														'</select>'+
													'</td>'+
													'<td>'+
														'<span class="glyphicon glyphicon-trash delete_appointment" title="Delete" style="cursor:pointer"></span>'+
													'</td>'+
												'</tr>');
			}
		} else {
			$('#tbody_appointment').append('<tr class="no_sched_row"><td colspan="5"> No Appoinment for today. </td></tr>');
		}
	}

	function update_scheduler( date, endDate, allDay, jsEvent, view ) {
		var click_date = $.fullCalendar.formatDate(date, 'MM/dd/yyyy');
		if(click_date == $.fullCalendar.formatDate(new Date(), 'MM/dd/yyyy')) {
			$('#date_appoint').html('Today&rsquo;s');
		} else {
			$('#date_appoint').text($.fullCalendar.formatDate(date, 'MMMM d'));
		}

		$('#inputDate1').val(click_date);
		
		// if (allDay) {
			var dataString = { start_date: click_date };
			$.ajax({
				type: 'post',
				url: 'dentist_dashboard/feed',
				data: dataString,
				beforeSend: function() {},
				success: function(data) {
					var html = JSON.parse(data);
					$('#num_of_appoint').text(html.length);
					append_to_table(html);
					console.log(html);
				}
			});
		// } else {
			// alert('Clicked on the slot: ' + new Date);
		// }
	}

	var calendar = $('#calendar');

	calendar.fullCalendar({
		header: {
			left:   'prev,next today',
			center: 'title',
			right:  'month,agendaWeek,agendaDay '
		},
		titleFormat:{
			month: 'MMM yyyy',                      // September 2009
			week: "MMM d{'-'MMM d}", 				// Sep 29-Oct 5
			day: 'ddd, MMM dd'                      // Tue, Sep 08
		},
		buttonText: {
			month: 'month',
			week: 'week',
			day: 'day'
		},
		selectable: true,
		select: function( startDate, endDate, allDay, jsEvent, view ) {
			
			var currDate = new Date();
			if($.fullCalendar.formatDate(startDate, 'MM/dd/yyyy') < $.fullCalendar.formatDate(currDate, 'MM/dd/yyyy'))
			{
				$('#show_add_sched').prop('disabled',true);
				update_scheduler( startDate, endDate, allDay, jsEvent, view );
				return false;
			}else
			{
				$('#show_add_sched').prop('disabled',false);
				update_scheduler( startDate, endDate, allDay, jsEvent, view );
			}
		},
		eventRender: function(event, element) {
			
			element.find('.fc-event-title').html(event.title);
			element.find('.fc-event-time').html('');
			console.log(event)
			/* background color of events */
			// element.css('background','#3A87AD');
		},
		dayRender: function( date, cell ) {
			console.log(cell)
		},
		// eventAfterRender: function( event, element, view ) {
			// if($.fullCalendar.formatDate(new Date(), 'MMMM d') != $.fullCalendar.formatDate(event.start, 'MMMM d'));
				// $('#date_appoint').text($.fullCalendar.formatDate(event.start, 'MMMM d'));
		// },
		eventSources: [
			{
				url: 'dentist_dashboard/feed_first',
				type: 'POST',
				data: {
					custom_param1: 'something',
					custom_param2: 'somethingelse'
				},
				error: function() {
					alert('there was an error while fetching events!');
				},
				color: '#3A87AD',   // a non-ajax option
				textColor: '#FFFFFF', // a non-ajax option
			},
			{
				url: 'dentist_dashboard/feed_confirmed',
				type: 'POST',
				data: {
					custom_param1: 'something',
					custom_param2: 'somethingelse'
				},
				error: function() {
					alert('there was an error while fetching events!');
				},
				color: '#5cb85c',   // a non-ajax option
				textColor: '#FFFFFF' // a non-ajax option				
			},
			{
				url: 'dentist_dashboard/feed_cancelled',
				type: 'POST',
				data: {
					custom_param1: 'something',
					custom_param2: 'somethingelse'
				},
				error: function() {
					alert('there was an error while fetching events!');
				},
				color: '#f0ad4e',   // a non-ajax option
				textColor: '#FFFFFF' // a non-ajax option				
			}
		],
		dayClick: function( date, allDay, jsEvent, view ) {
			
		},
		eventClick: function(calEvent, jsEvent, view) {
			console.log(calEvent);
			
			var currDate = new Date();
			var date = calEvent.end;
			
			
			currDate = $.fullCalendar.formatDate(currDate, 'dd');
			date = $.fullCalendar.formatDate(date, 'dd');
			
			// if(date < currDate)
			// {
				// $('#add_sched').find('#submit_appointment').prop('disabled',true);
			// }else
			// {
				// $('#add_sched').find('#submit_appointment').prop('disabled',false);
			// }
			
			/* set time to mobilescroll plugin */
			$('.timepicker').scroller('setValue', calEvent.start_time, true);
			$('.timepicker1').scroller('setValue', calEvent.end_time, true);
			
			$('#appointment_id').val(calEvent.id);
			$('#inputTitle1').val(calEvent.title);
			$('#inputDescription1').val(calEvent.description);
			$('#inputDate1').val(calEvent.start_date);
			$('#inputTime1').val(calEvent.start_time);
			$('#inputTime2').val(calEvent.end_time);
			
			$('#add_sched').find('.modal-title').html('Edit Schedule');
			$('#add_sched').find('#submit_appointment').val('update');
			$('#add_sched').modal('toggle');
			update_scheduler( calEvent.start, calEvent.end, true, jsEvent, view );
		}
    });
	
	
	$('#show_add_sched').click(function(){
		
		$('#add_sched').find('#submit_appointment').prop('disabled',false);
		
		var date = new Date();
		var hours = date.getHours();
		var minutes = date.getMinutes();
		var ampm = hours >= 12 ? 'PM' : 'AM';
		var endHours = (hours + 1) % 12;
		endHours = endHours ? endHours : 12;
		hours = hours % 12;
		hours = hours ? hours : 12; // the hour '0' should be '12'
		hours = hours < 10 ? '0'+hours : hours;
		endHours = endHours < 10 ? '0'+endHours : endHours;
		minutes = minutes < 10 ? '0'+minutes : minutes;
		var strTime = hours + ':' + minutes + ' ' + ampm;
		var endTime = endHours + ':' + minutes + ' ' + ampm; 
		
		/* set end time to add schedule timepicker1 */
		$('.timepicker1').scroller('setValue', endTime, true);
		$('.timepicker').scroller('setValue', strTime, true);
		
		$('#inputTitle1').val('');
		$('#inputDescription1').val('');
		
		$('#inputTime1').val(strTime);
		$('#inputTime2').val(endTime);
		
		$('#add_sched').find('.modal-title').html('Add Schedule');
		$('#add_sched').find('#submit_appointment').val('insert');
		$('#add_sched').modal('toggle');
	});

	$('#appointment').delegate('tr[id]','click',function(){
		var firstHtml = $(this).children('td:nth-child(1)').html();
		var secondHtml = $(this).children('td:nth-child(2)').html();
		var thirdHtml = $(this).children('td:nth-child(3)').html();
		var start_time = thirdHtml.substr(1,8);
		var end_time = thirdHtml.substr(14,20);
		
		// if(!$('#show_add_sched').is(':disabled'))
		// {		
			$('#appointment_id').val($(this).attr('id'));
			$('#inputTitle1').val(firstHtml);
			$('#inputDescription1').val(secondHtml);
			$('#inputTime1').val(start_time);
			$('#inputTime2').val(end_time);
			$('#add_sched').find('.modal-title').html('Edit Schedule');
			$('#add_sched').find('#submit_appointment').val('update');
			
			/* set time to mobilescroll plugin */
			$('.timepicker').scroller('setValue', start_time, true);
			$('.timepicker1').scroller('setValue', end_time, true);
			
			$('#add_sched').modal('show');
		// }
		
	});
	
	$( "#inputDate1.datepicker" ).datepicker({
		minDate: '-0D',
	});

	$('#add_sched').on('shown.bs.modal', function () {
		var click_day = $('#inputDate1').val();
		$(this).find( ".datepicker" ).datepicker('setDate', click_day);
	});

	$('.form-control').tooltip({
		'trigger': 'manual',
		'placement': 'top',
		'delay': { show: 500, hide: 100 }
	});

	$('#submit_appointment').click(function() {
		var action = $(this).val();
		$('#appointment_form').ajaxForm({
			url: 'dentist_dashboard/add_appointment',
			type: 'post',
			data: { action: action },
			beforeSubmit: function(formData, jqForm, options) {
				var form = jqForm[0]; 
				if (!form.title.value) {
					form.title.focus();
					$(form.title).popover('show');
					// alert('Please enter a value for title');
					return false; 
				}
				if (!form.date1.value) {
					form.date1.focus();
					// alert('Please enter a value for starting date'); 
					return false; 
				}
				if (!form.time1.value) {
					form.time1.focus();
					// alert('Please enter a value for starting time'); 
					return false; 
				}
				if (!form.time2.value) {
					form.time2.focus();
					// alert('Please enter a value for ending time'); 
					return false; 
				}
				
			},
			success: function(html) {
				var split = html.split('-');
				
				$('#calendar').fullCalendar( 'refetchEvents' );
				$('#add_sched').modal('hide');
			
				if(split[0] == 1)
				{
					$('.no_sched_row').remove();
					$('#tbody_appointment').append(html);
				}else
				{
					$('#tbody_appointment').find('#'+split[0]).remove();
					$('#tbody_appointment').append(html);
				}
			}
		}).submit();
	});
	
	$('#appointment').delegate('.delete_appointment','click',function(e){
		
		e.stopPropagation();
		var s_id = $(this).parents('tr').attr('id');
		$('#app_catch_id').val(s_id);
		$('#myModalAppointmentDelete').modal('show');
		$('#add_sched').modal('hide');
	});
	
	$('#appointment').delegate('.select_status','click',function(e){
		e.stopPropagation();
	});
	
	$('#search_appointment_form').ajaxForm({
		url: 'dentist_dashboard/appointment_search',
		beforeSubmit: function(formData, jqForm, options) {
			var form = jqForm[0];
			if(form.appoinment_name.value.trim() == '')
			{
				form.appoinment_name.value = '';
				form.appoinment_name.focus();
				return false;
			}
		},
		success: function(html){
			$('#tbody_appointment').empty().html(html);
			$('#date_appoint').empty().text('Result');
			$('#num_of_appoint').empty();
		}
	});
	
	$('#appointment').delegate('.select_status','change',function(e){
		var status = $(this).val();
		var app_id = $(this).parents('tr').attr('id');
		
		var dataString = 'status='+status+'&app_id='+app_id;
		$.ajax({
			type:'POST',
			url:'dentist_dashboard/appointment_status',
			data: dataString,
			success: function(html){
				if(html == 1)
				{
					$('#calendar').fullCalendar( 'refetchEvents' );
				}
			}
		});
	});

	$('#app_catch_id').click(function(){
		var a_id = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'dentist_dashboard/delete_appointment',
			data: { app_id : a_id },
			success: function(html){
				$('#myModalAppointmentDelete').modal('hide');
				$('#calendar').fullCalendar( 'refetchEvents' );
				$('tr#'+a_id).remove();
			}
		});
	});
	
	var opt = {	}
	opt.date = {preset : 'date'};
	opt.datetime = { preset : 'datetime', minDate: new Date(2012,3,10,9,22), maxDate: new Date(2014,7,30,15,44), stepMinute: 5  };
	opt.time = {preset : 'time'};
	opt.tree_list = {preset : 'list', labels: ['Region', 'Country', 'City']};
	opt.image_text = {preset : 'list', labels: ['Cars']};
	opt.select = {preset : 'select'};


	$('.timepicker').scroller('destroy').scroller({
		mode: 'clickpick',
		preset: 'time',
		theme: 'android-ics light',
		display: 'inline',
		height: 32,
		width: 25
	});
	
	$('.timepicker1').scroller('destroy').scroller({
		mode: 'clickpick',
		preset: 'time',
		theme: 'android-ics light',
		display: 'inline',
		defaultValue: '10',
		height: 32,
		width: 25
	});


	// $('.timepicker').timepicker({
		// 'minTime': '8:00am',
		// 'maxTime': '10:30pm'
	// });

	// $('#inputTime1').on('selectTime', function () {
		// $('#inputTime2').timepicker('option', { 'disableTimeRanges': [['8:00am', $('#inputTime1').val()]] });
	// });

	// $('#add_sched').on('hidden.bs.modal', function () {
		// $('#appointment_form')[0].reset();
	// });

});