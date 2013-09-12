
	<div style="background-color: #e0e2e4; display: inline-block; width: 100%;">
		<div style="padding: 10px;">
			<div style="width: 940px; margin: 0 auto; position: relative;">
				<div style="vertical-align: bottom; border: 3px solid rgb(20, 132, 176); display: inline-block; padding: 4px;">
					<img src="<?php echo $profile_pic ? $profile_pic : 'img/blank-profile.png'; ?>" style="max-width: 120px; max-height: 120px;" />
				</div>
				
				<div style="display: inline-block; position: absolute; right: 0; bottom: 0;">
						<?php // $this->load->view('sidebar_message'); ?>

						<ul class="top_menu btn-group">
							<li class="btn btn-default active">
								<a href="dentist_dashboard" id="link1">
									<span> Dashboard </span>
								</a>
							</li>
							<li class="btn btn-default">
								<a href="patient_records" id="link3">
									<span> Patient Records </span>
								</a>
							</li>
							<li class="btn btn-default">
								<a href="dentist_addressbook" id="link4">
									<span> Address Book </span>
								</a>
							</li>
							<li class="btn btn-default">
								<a href="scheduler/wdCalendar/index.php" id="link5" target="_blank">
									<span> Scheduler </span>
								</a>
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



				</div>
			</div>
		</div>
	</div>
