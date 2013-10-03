<style>
	ul.top_menu {
		list-style: none;
	}
	ul.top_menu li {
		float:left;
	}
</style>	
	<ul class="top_menu btn-group">
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

