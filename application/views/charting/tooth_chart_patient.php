<table>
	<tr>
		<td style="float: right;">
			<?php echo $this->load->view('charting/temp_upper_right'); ?>
		</td>

		<td style="padding-left:20px;">
			<?php echo $this->load->view('charting/temp_upper_left'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			TEMPORARY TEETH
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->load->view('charting/perma_upper_right'); ?>
		</td>

		<td style="padding-left:20px;" valign="top">
			<?php echo $this->load->view('charting/perma_upper_left'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			PERMANENT TEETH
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<table cellpadding="0" cellspacing="0" border="0" style="width:100%;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">
				<tr>
					<td align="left">
						UPPER RIGHT
					</td>
					<td></td>
					<td align="right">
						UPPER LEFT
					</td>
				</tr>
				<tr>
					<td align="left">
						LOWER RIGHT
					</td>
					<td></td>
					<td align="right">
						LOWER LEFT
					</td>
				</tr>
			</table> 
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			PERMANENT TEETH
		</td>
	</tr>
	<tr>
		<td style="padding-top:20px;">
			<?php $this->load->view('charting/perma_lower_right'); ?>
		</td>
		<td style="padding-left:20px;padding-top:20px;">
			<?php $this->load->view('charting/perma_lower_left'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			TEMPORARY TEETH
		</td>
	</tr>
	<tr>
		<td style="float: right;">
			<?php echo $this->load->view('charting/temp_lower_right'); ?>
		</td>

		<td style="padding-left:20px;">
			<?php echo $this->load->view('charting/temp_lower_left'); ?>
		</td>
	</tr>
</table>