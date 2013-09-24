$(function() {

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
			Close: function() {
				$( this ).dialog( "close" );
			}
		}
	});

	$('.tooth').on('click', function () {
		var x = $(this).find('.tooth_num').text();
		
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
		val.new4 = document.getElementById('legend').value;
		val.new5 = document.getElementById('what_hide').value;

		var str = "" + i;
		var pad = "00";
		var tooth_img = pad.substring(0, pad.length - str.length) + str;

			document.getElementById(val.new1).src = "../img/Toothchart/"+tooth_img+".png";
			document.getElementById(val.new2).value = tooth_img;
			document.getElementById(val.new3).value = val.new4;
			document.getElementById(val.new5).value = val.new4;

	});

});