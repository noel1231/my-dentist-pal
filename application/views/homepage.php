<!DOCTYPE html>
<html>
  <head>
<?php
	if($_SERVER['HTTP_HOST'] == 'alpha.mydentistpal.com') {
?>
	<meta name="robots" content="noindex">
<?php
	}
?>
    <title><?php echo isset($title) ? $title : 'My Dentist Pal'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

	<link href="<?php echo base_url();?>style/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/style_new.css" rel="stylesheet">

	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>fullcalendar/fullcalendar.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>jonthornton-jquery-timepicker/jquery.timepicker.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css' />

<?php
	if($_SERVER['HTTP_HOST'] == 'mydentistpal.com') {
?>        
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39650233-1']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
       </script>
<?php
	}
?>

  </head>
  <body>

	<?php echo isset($header) ? $header : ''; ?>
	<?php echo $body; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script type='text/javascript' src='<?php echo base_url();?>fullcalendar/fullcalendar.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>jonthornton-jquery-timepicker/jquery.timepicker.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'></script>

    <script src="<?php echo base_url();?>js/jquery.blockui.js"></script>
    <script src="<?php echo base_url();?>js/jquery.form.js"></script>

	<script src='<?php echo base_url();?>js/appointments.js'></script>
    <script src="<?php echo base_url();?>js/custom.js"></script>

  </body>
</html>
