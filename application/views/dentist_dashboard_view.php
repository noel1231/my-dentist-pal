<!--wrapper-->
<div style="background-color: #f6f5f5;">
	<?php echo $this->session->userdata('sess_id'); ?>
	  <!--top-->
		<?php $this->load->view('top_patient'); ?>
		  <!--top-->
	  <!--tooth-->
		<?php $this->load->view('top'); ?>
		  <!--dentisit dashboard--></td>
				<?php $this->load->view('dentist_dashboard/content'); ?>
	  <!--wrapper-->
	  <!--bottom-content-->
			<?php $this->load->view('dentist_dashboard/bottom.php'); ?>
		<!--bottom-content-->
		<?php $this->load->view('footer'); ?>
</div>
