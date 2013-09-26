$(function() {

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
					url: 'test/set_tooth',
					success: function(html) {
						var tooth = JSON.parse(html);
						$('#tooth_'+tooth.num).parents('table').removeClass('tooth').unbind('click');
					}
				}).submit();
				document.patient_tooth_add.reset();
				$( this ).dialog( "close" );
			},
			Close: function() {
				document.patient_tooth_add.reset();
				$( this ).dialog( "close" );
			}
		},
		open: function(event) {
			$(this).attr('curr_tooth', document.patient_tooth_add.tooth_num.value);
		}
	});

	$('.tooth').on('click', function () {
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

	$('.changeMySrc').on('click', function() {
		var i = this.value,	val = new Object();

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

			document.getElementById(val.new1).src = "img/Toothchart/"+tooth_pic+".png";
			document.getElementById(val.new2).value = tooth_pic;
			document.getElementById(val.new3).value = legend;
			document.getElementById(val.new4).value = legend;


	});

});