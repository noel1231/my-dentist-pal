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
    <title><?php echo isset($title) ? $title : 'Medix Dental'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>style/jquery-ui.css" />
	
	<link href="<?php echo base_url();?>style/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/style_new.css" rel="stylesheet">
	<link href="<?php echo base_url();?>style/timepicker.css" rel="stylesheet">
	

	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>fullcalendar/fullcalendar.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>jonthornton-jquery-timepicker/jquery.timepicker.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>mobiscroll/css/mobiscroll.custom-2.6.2.min.css' />

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
	<div id="wrapper">
		<?php echo isset($header) ? $header : ''; ?>
		<?php echo $body; ?>
	</div>
	<div id="footer">
		<?php 
                    if(isset($identifier))
                    {
                        echo $this->load->view('homepage/footer');
                    }
                    else
                    {
                        echo $this->load->view('dentist_dashboard/footer');
                    }
                     ?>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/jquery.min.js">\x3C/script>')</script>

	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	<script>window.jQuery.ui || document.write('<script src="<?php echo base_url();?>js/jquery-ui.min.js">\x3C/script>')</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script type='text/javascript' src='<?php echo base_url();?>fullcalendar/fullcalendar.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>jonthornton-jquery-timepicker/jquery.timepicker.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>mobiscroll/js/mobiscroll.custom-2.6.2.min.js'></script>

    <script src="<?php echo base_url();?>js/jquery.blockui.js"></script>
    <script src="<?php echo base_url();?>js/jquery.form.js"></script>

	<script src='<?php echo base_url();?>js/appointments.js'></script>
    <script src="<?php echo base_url();?>js/custom.js"></script>
	<script src="<?php echo base_url();?>js/timepicker.js"></script>
	<script src="<?php echo base_url();?>js/charting.js"></script>

	<script src="<?php echo base_url();?>js/pullNotification.js"></script>

  </body>
</html>
