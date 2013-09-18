				<div class="row">
					<div class="col-md-10 pull-right">
						<form action="patient_list.php" method="post" role="form" class="form-inline">
							<div class="addpatient form-group">
								<a href="<?php echo base_url('patient_add'); ?>" class="btn btn-primary">
									+ ADD PATIENT
								</a>
							</div>
							<div class="form-group">
								<input type="text" name="search_field" class="form-control search" value="Search patient here" placeholder="Search patient here" />
							</div>
							<div class="form-group">
								<input type="submit" name="search" value="SEARCH" class="submit btn_design form-control btn-primary" />
							</div>
						</form>
					</div>
				</div>