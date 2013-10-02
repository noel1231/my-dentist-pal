	<div class="container">

		<div class="row">
			<select name="legends" id="legends" class="form-control">
				<option value="none"> Select... </option>
				<option value="AM"> Amalgam Filling </option>
				<option value="CO">Composite Filling</option>
				<option value="ON">Onlay</option>
				<option value="IN">Inlay</option>
				<option value="PJCF">Plastic Jacket Crown Filling</option>
				<option value="PFMC">Porcelain Fuse with Metal Crown</option>
				<option value="RF">Root Frgament</option>
				<option value="MT">Missing Teeth</option>
				<option value="EX">Exo</option>
			</select>
		</div>

		<div id="select_tooth" class="row hide">
			<ul class="list-unstyled list-inline">
<?php
			for($x = 1; $x <= 32; $x++) {
?>
				<li>
					<label class="radio">
						<img id="Img<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad($x, 2, "0", STR_PAD_LEFT); ?>.png" style="cursor: pointer;" onmouseover='this.style.boxShadow="0px 0px 5px #888888"' onmouseout='this.style.boxShadow="0px 0px"' />
						<input type="radio" class="changeMySrc" name="tooth_image" value="<?php echo $x; ?>" style="opacity: 0;">
					</label>
				</li>
<?php
			}
?>
			</ul>
		</div>

	</div>
