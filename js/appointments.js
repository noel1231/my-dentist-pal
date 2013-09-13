$(function(){

	$('#calendar').fullCalendar({
		header: [{
			left:   'title',
			center: '',
			right:  'today prev,next'
		}],
		dayClick: function(a,b,c,d) {
			
			console.log(c.target);
			alert("date clicked");
		},
		eventRender: function(event, element) {
			element.tooltip({
				title: event.description,
				placement: 'bottom'
			});
		},
		eventSources: [

			// your event source
			{
				url: 'dashboard/feed',
				type: 'POST',
				data: {
					custom_param1: 'something',
					custom_param2: 'somethingelse'
				},
				error: function() {
					alert('there was an error while fetching events!');
				},
				success: function(event) {
					$('#calendar').fullCalendar('updateEvent', event);
				},
				// color: 'black',   // a non-ajax option
				// textColor: 'yellow' // a non-ajax option
			}

			// any other sources...

		]
    });

	$('#show_add_sched').click(function(){
		$('#add_sched').modal('toggle');
		$('#appointment_form')[0].reset();
	})

		$( ".datepicker" ).datepicker({
			minDate: '-0D',
		});

	$('#add_sched').on('shown.bs.modal', function () {
		$(this).find( ".datepicker" ).datepicker('setDate', new Date());
	});

	$('#submit_appointment').click(function(){
		$('#appointment_form').ajaxForm({
			url: 'dashboard/add_appointment',
			type: 'post',
			beforeSubmit: function() {
			},
			success: function(html) {
				$('#calendar').fullCalendar( 'refetchEvents' );
				$('#add_sched').modal('hide');
			}
		}).submit();
	});

});