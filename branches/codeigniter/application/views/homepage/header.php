<?php
	$menu_array = array(null, 'welcome', 'contact_us', 'logout', 'login', 'dentist_signup', 'login/patient');
	if(in_array(uri_string(), $menu_array)) {
?>
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
          <ul class="nav navbar-nav navbar-right">
                  <li class="<?php echo uri_string() == null || uri_string() == 'welcome' ? "active" : " "; ?>">
                      <a href="<?php echo base_url();?>welcome" class="home">HOME</a>
                  </li>
                  <li class="<?php
                                    $url_real = base_url() . "#prices";
                                    $to_compare_url = base_url() . uri_string();
                                    
                                ?>">
                      <a href="<?php echo base_url();?>#prices" class="prices">PRICE</a>
                  </li>
                  <li class="<?php echo uri_string() == 'contact_us' ? "active" : " "; ?>">
                      <a href="<?php echo base_url();?>contact_us" class="contact_us">CONTACT US</a>
                  </li>
          </ul>
    </div>
</nav>
<?php
	} else {
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="#" class="col-md-12">
		<img alt="Profile Pic" src="<?php echo base_url(); ?>img/logo.png" style="max-height: 51px;">
	</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="container collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="<?php echo base_url('dentist_profile'); ?>"> Profile </a></li>
			<li><a href="<?php echo base_url('account_setting'); ?>"> Account Settings </a></li>
			<li><a href="logout"> Log out </a></li>
		</ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<?php /*
		<ul class="nav navbar-nav navbar-right">
			<div class="col-sm-6" class="dropdown-toggle" data-toggle="dropdown">
				<a href="#" class="thumbnail">
				  <img alt="Profile Pic" src="<?php echo base_url().$profile_pic; ?>">
				</a>
			</div>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<a href="#" class="thumbnail">
				  <img alt="Profile Pic" src="<?php echo base_url().$profile_pic; ?>">
				</a>
			</button>

		</ul>
<?php
	*/
	} 
?>

<script>
    if(window.location.hash == '#prices')
    {
        $('a.home').removeClass('active');
        $('a.contact_us').removeClass('active');
        $('a.prices').addClass('active');
    }
</script>