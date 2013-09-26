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
				$('#tbody_appointment').append('<tr id="'+id+'">'+
													'<td>'+title+'</td>'+
													'<td>'+description+'</td>'+
													'<td>'+start_time+' to '+end_time+'</td>'+
													'<td> Status here </td>'+
													'<td>'+
														'<span class="glyphicon glyphicon-trash delete_appointment" title="Delete" style="cursor:pointer"></span>'+
													'</td>'+
												'</tr>');
			}
		} else {
			$('#tbody_appointment').append('<tr class="no_sched_row"><td colspan="4"> No Appoinment for this day. </td></tr>');
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
		
		if (allDay) {
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
				}
			});
		} else {
			alert('Clicked on the slot: ' + new Date);
		}
	}

	var calendar = $('#calendar');

	calendar.fullCalendar({
		header: {
			left:   'prev,next today',
			center: 'title',
			right:  'month,agendaWeek,agendaDay '
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
		// dayClick: function(date, allDay, jsEvent, view) {

		// },
		eventRender: function(event, element) {
			element.tooltip({
				title: event.description,
				placement: 'bottom'
			});
		},
		// eventAfterRender: function( event, element, view ) {
			// if($.fullCalendar.formatDate(new Date(), 'MMMM d') != $.fullCalendar.formatDate(event.start, 'MMMM d'));
				// $('#date_appoint').text($.fullCalendar.formatDate(event.start, 'MMMM d'));
		// },
		eventSources: [
			{
				url: 'dentist_dashboard/feed',
				type: 'POST',
				data: {
					custom_param1: 'something',
					custom_param2: 'somethingelse'
				},
				error: function() {
					alert('there was an error while fetching events!');
				},
				color: '#3A87AD',   // a non-ajax option
				textColor: '#FFFFFF' // a non-ajax option
			},
			{

			}
		],
		dayClick: function( date, allDay, jsEvent, view ) {
			
		},
		eventClick: function(calEvent, jsEvent, view) {
			var currDate = new Date();
			var date = calEvent.end;
			
			currDate = $.fullCalendar.formatDate(currDate, 'MM/dd/yyyy');
			date = $.fullCalendar.formatDate(date, 'MM/dd/yyyy');
			
			if(date < currDate)
			{
				$(this).css('opacity','0.5');
				return false;
			}
			
			$('#appointment_id').val(calEvent.id);
			$('#inputTitle1').val(calEvent.title);
			$('#inputDescription1').val(calEvent.description);
			$('#inputDate1').val(calEvent.start_date);
			$('#inputTime1').val(calEvent.start_time);
			$('#inputTime2').val(calEvent.end_time);
			
			$('#add_sched').find('.modal-title').html('Edit Schedule');
			$('#add_sched').find('#submit_appointment').val('update');
			$('#add_sched').modal('toggle');
		}
    });

	$('#show_add_sched').click(function(){
		
		var date = new Date();
		var hours = date.getHours();
		var minutes = date.getMinutes();
		var ampm = hours >= 12 ? 'PM' : 'AM';
		var endHours = (hours + 1) % 12;
		endHours = endHours ? endHours : 12;
		hours = hours % 12;
		hours = hours ? hours : 12; // the hour '0' should be '12'
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
	
	$('#appointment').delegate('.delete_appointment','click',function(){
		var s_id = $(this).parents('tr').attr('id');
		$('#app_catch_id').val(s_id);
		$('#myModalAppointmentDelete').modal('show');
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
		mode: 'clickopick',
		preset: 'time',
		theme: 'android-ics light',
		display: 'inline',
		height: 32,
		width: 25
	});
	
	$('.timepicker1').scroller('destroy').scroller({
		mode: 'clickopick',
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