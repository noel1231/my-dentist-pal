<?php
	
?>
<div class="wrapper">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a href="#add_patient">Add Patient</a></li>
				<li><a href="#dentist_history">Dentist History</a></li>
				<li><a href="#medical_history">Medical History</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="add_patient">
					<div class="well well-lg">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Patient ID number</label>
								<div class="col-lg-5">
									<span style="line-height: 27px;"><?php echo time(); ?></span>
									<input type="text" class="form-control" id="patient_id" style="display:none;">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Entry Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_date">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-4 control-label">Photo</label>
								<div class="col-lg-5">
									<input type="file" class="form-control" id="patient_photo">
									<div class="col-sm-12" style="margin-top: 10px;">
										<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" >
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">First Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_fname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Middle Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Last Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_lname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nick Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nname">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Sex</label>
								<div class="col-lg-5">
									<select id="patient_sex" class="form-control">
										<option value="">Select...</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Birth Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_bday">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Age</label>
								<div class="col-lg-2">
									<input type="number" class="form-control" id="patient_age">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Address</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_address">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Email Address</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Home Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_homeNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Office Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_officeName">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Fax Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_faxNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Mobile Number</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_mobileNum">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Nationality</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_nationality">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Region</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_region">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Dental Insurance</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_insurance">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Effective Date</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_effectiveDate">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">For Minors</label>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Parent or Guardian Name</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_parent">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Occupation</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_occupation_minor">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">Whom may we think for referring you?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_referral">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label">What is your reason for dental consultation?</label>
								<div class="col-lg-5">
									<input type="text" class="form-control" id="patient_consultation">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-5 col-md-offset-9">
									<button type="button" id="button_next" alt="dentist_history" class="btn btn-primary col-lg-5">Next</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="dentist_history">
					<div class="well well-lg">
						<form class="form-horizontal" role="form">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>