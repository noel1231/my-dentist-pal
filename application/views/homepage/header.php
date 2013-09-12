<nav class="container navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" /></a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php
	if(uri_string() == null) {
?>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="<?php echo base_url(); ?>" class="active">HOME</a>
		</li>
		<li>
			<a href="<?php echo base_url('contact_us'); ?>">CONTACT US</a>
		</li>
	</ul>
<?php
	}
?>
  </div>
</nav>