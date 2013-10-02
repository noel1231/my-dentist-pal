$(function() {

	pullNotification();
 
	function pullNotification(timestamp){
		var data = {};

		if(typeof timestamp!='undefined')
			data.timestamp = timestamp;
	 
		$.post('test', data, function(msg){
			console.log(msg); return false;
			var newData = '';
			for(i in msg.notifications){
				newData+=msg.notifications[i].message+'\n';
			}
			if(newData!='')
				console.log(newData);
			// pullNotification(msg.timestamp);
		},'json');
	}

	var tooth_num = 0;

	$( "#tooth_dialog" ).dialog({
		autoOpen: false,
		show: {
			effect: "blind",
			duration: 100
		},
		hide: {
			effect: "blind",
			duration: 100
		},
		modal: true,
		resizable: false,
		buttons: {
			Set: function(event) {
				$('#patient_tooth_add').ajaxForm({
					data: { 'submit': 'tooth' },
					beforeSubmit: function(formData, jqForm, options) {
						if($('#legends').val() == 'none') {
							console.log('nothing to pick');
							return false;
						}
					},
					success: function(html) {
						var tooth = JSON.parse(html);
						if(tooth.new_chart == 'yes') {
							document.getElementById('chart_name').innerHTML = tooth.chart_name;
							// $('.charts_option').removeAttr('selected');
							var add_option = '<option value="'+tooth.chart_id+'" selected> '+tooth.chart_name+' </option>';
							$('#select_chart').prepend(add_option);
						}
						$('[name=chart] option').filter(function() {
							return ($(this).val() == tooth.chart_id);
						}).prop('selected', true);

						document.getElementById('tooth_'+tooth.tooth_num).src = "img/Toothchart/" + tooth.tooth_area + ".png";
						document.getElementById('legend_'+tooth.tooth_num).innerHTML = tooth.tooth_procedure;
						$('#tooth_'+tooth.num).parents('table').removeClass('tooth').unbind('click');

						/* hide select tooth */
						$('#select_tooth').addClass('hide');
					}
				}).submit();
				$( this ).dialog( "close" );
			},
			Close: function() {
				/* hide select tooth */
				$('#select_tooth').addClass('hide');
				$( this ).dialog( "close" );
			}
		},
		open: function(event) {
			$('#legends').val('none');
			$(this).attr('curr_tooth', document.patient_tooth_add.tooth_num.value);
		}
	});

	$('#legends').on('change', function() {
		$('#select_tooth').removeClass('hide');
	});

	$('#chart_container').delegate('.tooth', 'click',  function() {
		var x = $(this).find('.tooth_num').text();
		
		document.patient_tooth_add.tooth_num.value = x;	
		document.getElementById('what_picture').value = 'tooth_'+x; // change
		document.getElementById('what_number').value = 'pic'+x; // pic1
		document.getElementById('what_legend').value = 'leg_'+x; // leg_1
		document.getElementById('what_hide').value = 'adult_'+x; // adult_1

		$( "#tooth_dialog" ).dialog('open');
	});

	$('.edit_tooth').on('click', function() {
	});

	$('body').delegate('.changeMySrc', 'click',  function(a,b,c) {
		var i = $(this).find('input[type=radio]').val(),	val = new Object();

		$('.changeMySrc').find('img').css('border', '1px solid transparent');
		$(this).find('img').css('border', '1px dashed #888888');

		val.new1 = document.getElementById('what_picture').value;
		val.new2 = document.getElementById('what_number').value;
		val.new3 = document.getElementById('what_legend').value;
		val.new4 = document.getElementById('what_hide').value;

		legend = document.getElementById('legends').value;

		var str = "" + i;
		var pad = "00";
		var tooth_pic = pad.substring(0, pad.length - str.length) + str;

		document.patient_tooth_add.pic_num.value = i;	
		document.patient_tooth_add.legend.value = legend;

	});

	$('#form_add_chart').ajaxForm({
		beforeSubmit: function(formData, jqForm, options) {
		},
		success: function(html) {
			var data = JSON.parse(html);
			$('#chart_name').html(data.chart_name);
			$('#chart_container').html(data.body);
			$('.charts_option').removeAttr('selected');
			var add_option = '<option value="'+data.chart_id+'" selected> '+data.chart_name+' </option>';
			$('#select_chart').prepend(add_option);
			document.form_add_chart.chart_name.value = "";
			$('#modal_add_chart').modal('hide');
		}
	});

	$('#select_chart').on('change', function() {
		$('#patient_tooth_add').ajaxForm({
			data: {'submit': 'select_chart'},
			success: function(html) {
				var data = JSON.parse(html);
				$('#chart_name').html(data.chart_name);
				$('#chart_container').html(data.body);
				$('#chart_remarks').html(data.chart_remarks);
			}
		}).submit();
	});

});