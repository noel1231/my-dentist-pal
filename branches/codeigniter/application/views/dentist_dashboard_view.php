<!--wrapper-->
<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <!--top-->
  <tr>
    <td><?php $this->load->view('top_patient'); ?>
      <!--top--></td>
  </tr>
  <!--tooth-->
	<tr>
		<td><?php $this->load->view('top'); ?>
      <!--dentisit dashboard--></td>
	</tr>
	<tr>
		<td>
			<?php $this->load->view('dentist_dashboard/content'); ?>
		</td>
	</tr>

  <!--wrapper-->
  <!--bottom-content-->

        <?php $this->load->view('dentist_dashboard/bottom.php'); ?>

    <!--bottom-content-->
  </tr>
  <tr>
    <td style="background-color:#FFF;">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-color:#FFF;">
	<?php $this->load->view('footer'); ?>
	</td>
  </tr>
</table>
