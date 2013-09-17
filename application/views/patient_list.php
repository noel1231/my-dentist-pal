<!--wrapper--><table cellpadding="0" cellspacing="0" border="0" width="100%">
<!--top--><tr><td>
<?php $this->load->view('top_patient'); ?>
<!--top--></td></tr>

<!--tooth--><tr><td>
<?php $this->load->view('top'); ?>
<!--dentisit dashboard--></td></tr>

<!--include sidebar--><tr><td>
<div style="margin:0 auto;width:960px;">
<!--sidebar and content container--><table cellpadding="0" cellspacing="0" border="0">
<!--sidebar--><tr>asdasd<td valign="top">
<div style="margin-top:-38px;">
</div>
<!--sidebar--></td>
<!--content--><td valign="top" style="padding-top:26px;">
<?php $this->load->view('box_patient_list'); ?>
<!--content--></td>
</tr>



<!--sidebar and content container--></table>
<!--<div style="clear:both;height:20px;"></div>-->
</div>
<!--include sidebar--></td></tr>
<tr>
  <td style="background-color:#FFF;">&nbsp;</td>
</tr>
<tr>
  <td style="background-color:#FFF;"><?php $this->load->view('footer'); ?></td>
</tr>
<!--wrapper--></table>
