				<div class="row">
					<div class="col-md-10 pull-right">
					<?php
						$data_params = array(
							'name'=>'patient_search_from',
							'id'=>'patient_search_from',
							'role'=>'form',
							'class'=>'form-inline',
							'method'=>'get'
						);
						echo form_open(base_url('patient_records'),$data_params);
					?>
						<!--<form action="patient_list.php" method="post" role="form" class="form-inline">-->
							<div class="addpatient form-group">
								<a href="<?php echo base_url('patient_add'); ?>" class="btn btn-primary">
									+ ADD PATIENT
								</a>
							</div>
							<div class="form-group">
								<input type="text" name="search_field" class="form-control search" placeholder="Search patient name" value="" />
							</div>
							<div class="form-group">
								<button type="submit" class="submit btn_design form-control btn-primary" />SEARCH</button>
							</div>
						</form>
					</div>
				</div>