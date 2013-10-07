<style>
	ul.top_menu {
		list-style: none;
	}
	@media(max-width: 767px)
	{
		.visible-to-large{
			visibility:hidden;
		}
	}
	@media(min-width: 767px)
	{
		.hidden-to-large{
			visibility:visible;
		}
	}
</style>	

	<ul class="top_menu btn-group hidden-xs">
		<li>
			<div class="btn-group">			
			<a href="dentist_dashboard" id="link1" class="btn btn-default">
				<span <?php if(isset($activeMenu) && $activeMenu == 'dashboard'){echo 'style="color: #52AFFF;"';}?>> Dashboard </span>
			</a>
			<a href="patient_records" id="link3" class="btn btn-default">
				<span <?php if(isset($activeMenu) && $activeMenu == 'patient_records'){echo 'style="color: #52AFFF;"';}?>> Patient Records </span>
			</a>
			<a href="<?php echo base_url('dentist_dashboard?scheduler=true'); ?>" id="link5" class="btn btn-default">
				<span> Scheduler </span>
			</a>
			</div>
		</li>
		<li>
			
		</li>
<!--
		<li class="btn btn-default">
			<a href="dentist_addressbook" id="link4">
				<span> Address Book </span>
			</a>
		</li>
-->
		<li>
			
		</li>
<!--
		<li class="btn btn-default">
			<a href="dentist_simple_accounting" id="link6">
				<span> Accounting </span>
			</a>
		</li>
		<li class="btn btn-default">
			<a href="blog.php" id="link7"> 
				<span> Blog </span>
			</a>
-->
		</li>
	</ul>

<nav class="navbar navbar-default visible-xs" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapseOne">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Menu</a>
  </div>
	<div class="collapse navbar-collapse collapseOne">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="dentist_dashboard" id="link1" class="btn btn-default">
					<span <?php if(isset($activeMenu) && $activeMenu == 'dashboard'){echo 'style="color: #52AFFF;"';}?>> Dashboard </span>
				</a>
			</li>
			<li>
				<a href="patient_records" id="link3" class="btn btn-default">
					<span <?php if(isset($activeMenu) && $activeMenu == 'patient_records'){echo 'style="color: #52AFFF;"';}?>> Patient Records </span>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url('dentist_dashboard?scheduler=true'); ?>" id="link5" class="btn btn-default">
					<span> Scheduler </span>
				</a>
			</li>
		</ul>
	</div>
</nav>

