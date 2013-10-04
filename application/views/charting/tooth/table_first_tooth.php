	<div>

		<div class="form-group">
			<label for="legends"></label>
			<select name="legends" id="legends" class="form-control">
				<option value="none"> Select... </option>

				<option value="D"> Decayed (Caries Indicated for Filling) </option>
				<option value="M"> Missing due to Caries </option>
				<option value="F"> Filled </option>
				<option value="I"> Caries Indicated for Extraction </option>
				<option value="RF"> Root Fragment </option>
				<option value="MO"> Missing due to Other Causes </option>
				<option value="Im"> Impacted Tooth </option>

				<option value="J"> Jacket Crown </option>
				<option value="AM"> Amalgam Filling </option>
				<option value="AB"> Abutment </option>
				<option value="P"> Pontic </option>
				<option value="In"> Inlay </option>
				<option value="FX"> Fixed Cure Composite </option>
				<option value="Rm"> Removable Denture </option>

				<option value="X"> Extraction due to Caries </option>
				<option value="XO"> Extraction due to Other Causes </option>
				<option value="check"> Present Teeth </option>
				<option value="Cm"> Congenitally Missing </option>
				<option value="Sp"> Supernumerary </option>

			</select>
		</div>
		<div class="form-group">
			<label for="select_tooth"></label>
			<ul id="select_tooth" class="list-unstyled list-inline hide">
<?php
			for($x = 1; $x <= 32; $x++) {
?>
				<li>
					<label class="changeMySrc">
						<img id="Img<?php echo $x; ?>" src="<?php echo base_url(); ?>img/Toothchart/<?php echo str_pad($x, 2, "0", STR_PAD_LEFT); ?>.png" style="cursor: pointer; border: 1px solid transparent;" onmouseover='this.style.boxShadow="0px 0px 5px #888888"' onmouseout='this.style.boxShadow="0px 0px"' />
						<input type="radio" name="tooth_image" value="<?php echo $x; ?>" style="opacity: 0;">
					</label>
				</li>
<?php
			}
?>
			</ul>
		</div>

	</div>
