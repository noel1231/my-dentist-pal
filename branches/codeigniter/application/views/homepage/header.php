<nav id='menu' class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/logo.png" alt="Logo" /></a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php
	if(uri_string() == null || uri_string() == 'welcome' || uri_string() == 'contact_us') {
?>
          <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="<?php echo base_url();?>welcome" class="<?php echo uri_string() == null || uri_string() == 'welcome' ? "active" : " "; ?> home">HOME</a>
                  </li>
                  <li>
                      <a href="<?php echo base_url();?>#prices" class="prices">PRICE</a>
                  </li>
                  <li>
                      <a href="<?php echo base_url();?>contact_us" class="<?php echo uri_string() == 'contact_us' ? "active" : " "; ?> contact_us">CONTACT US</a>
                  </li>
          </ul>
<?php
	}
?>
    </div>
</nav>
<script>
    
       if(window.location.hash == '#prices')
    {
        $('a.home').removeClass('active');
        $('a.contact_us').removeClass('active');
        $('a.prices').addClass('active');
    }
</script>