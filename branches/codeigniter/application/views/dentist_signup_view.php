<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dentist Pal</title>
<link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="img/jquery-1.3.2.min.js"></script>      
  -->
       <!-- <script style="type/javascript">
			$(document).ready(function(){
				$("submit").click(function(event){
			$(".alert").show(); //fadeout the slide div for automotive
			});
		});
		
		</script>
		-->
        <style type="text/css">
            body{
                
                
            }
            #form{
                margin:100px;
                width: 350px;
                outline: 5px solid #d0ebfe;
                border: 1px solid #bae0fb;
                padding: 10px;
				margin:0 auto;
            }
            #form label{
                font:bold 11px arial;
                color: #565656;
                padding-left: 1px;
            }
            #form label.mandat{color: #f00;}
            
            
            #form img{
                /*margin-bottom: 8px;*/
            }
        
            .error{
                border: 1px solid red;
            }
            .cap_status{
                width: 350px;
                padding: 10px;
                font: 14px arial;
                color: #fff;
                background-color: #10853f;
                display: none;
            }
            .cap_status_error{
                background-color: #bd0808;                
            }
			
				#validEmail
		{
			margin-top: 4px;
			margin-left: 9px;
			position: absolute;
			width: 16px;
			height: 16px;
		}
		
		#wrapper {background-color:#fff;margin-top:135px;}
		
		#dr-title-wrapper { background-color:#e0e2e4;width:100%;height:90px;}
		#form-wrapper { background-color:#fff; height:410px;border:solid 0px red;}
		
		label { margin-left:135px;}
		#middle{ position:relative; margin-top:-34px; margin-left:162px;}
		#lname{ position:relative; margin-top:-34px; margin-left:325px;}
		#bday2{ position:relative; margin-top:-31px; margin-left:240px;}
		#bday3{ position:relative; margin-top:-31px; margin-left:480px;}
		.alert_msg {width:450px; margin-left:300px;}
        </style>

</head>

<!--<body style="margin:0;padding:0;background-color:#f6f5f5;font-family:Arial, Helvetica, sans-serif;">-->
	<div id="wrapper">
		<div>			
			<div id="dr-title-wrapper">
				<div style="margin:0 auto;width:940px;"><!-- start center-->
					<div style="float:left;margin-top:28px;"><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
						<span style="font-weight:500;font-size:30px;color:#333;font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
					Dentist's Registration</span>
					</div>
					<div style="float:right;">
					<!--<div style="float:right;margin-top:28px;"><input type="text" name="search" /></div>-->
					<div style="clear:both;"></div>
					</div><!--<div style="float:right;color:#969da4;font-size:10px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">CLICK HERE FOR ADVANCE SEARCH</div>-->
				</div><!--end center-->
			</div>
			
			<?php //echo validation_errors(); ?>
			<!--start dentist registration form-->
			<div id="form-wrapper"><!-- start dentist registration form wrapper-->
				<div class="" style="border:solid 0px green; height:410px; width:960px;">
					<div id="" class="well well-sm" style="position:relative;margin-top:15px;left:210px;">
					<div style="clear:both;">&nbsp;</div>
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" action="<?php echo base_url('dentist_signup/verification')?>" enctype="multipart/form-data" name="ContactForm"><!--Registration form for Dentist-->
							<div><!--start form content wrapper-->
								<div class="alert alert-danger alert_msg" style="text-align:center;display:none;"><?php //echo validation_errors(); ?><?php //echo form_error('fname'); //echo form_error('lname');?><?php  ?></div>
								<!--<div class="alert alert-success success_msg" style="text-align:center;display:none;"></div>-->
								<div class="form-group"><!--start full name-->
									<label for="inputEmail1" class="col-lg-2 control-label">Name:</label>
									<div class="col-lg-2">
										<input type="text" id="fname" name="fname" class="form-control" value="<?php echo set_value('fname') ?>" placeholder="First name">
										<input type="text" id="middle" name="middle" class="form-control" value="<?php echo set_value('middle') ?>" placeholder="Middle name">
										<input type="text" id="lname" name="lname" class="form-control" value="<?php echo set_value('lname') ?>" placeholder="Last name">
										
									</div>	
								</div><!--end full name-->
								
								<div class="form-group"><!--start email-->
									<label for="inputEmail1" class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-6">
										<input type="text" id="email1" name="email1" id="validate" class="form-control"/><span id="validEmail"></span>
									</div>
								</div><!--end email-->
								
								<div class="form-group"><!--start confirm email-->
									<label for="inputEmail1" class="col-lg-2 control-label">Confirm Email:</label>
									<div class="col-lg-6">
										<input type="text" id="email2" name="email2" id="email2" class="form-control"/>
									</div>
								</div><!--end confirm email-->
								
								<div class="form-group"><!--start create password-->
									<label for="inputEmail1" class="col-lg-2 control-label">Create Password:</label>
									<div class="col-lg-6">
										<input type="password" id="pass1" name="pass1" id="pass1" class="form-control"/>
									</div>
								</div><!--end create password-->
								
								<div class="form-group"><!--start confirm password-->
									<label for="inputEmail1" class="col-lg-2 control-label">Confirm Password:</label>
									<div class="col-lg-6">
										<input type="password" id="pass2" name="pass2" id="pass2" class="form-control"/>
									</div>	
								</div><!--end confirm password-->
								
								<div style="margin-left:298px; margin-top:14px;"><!--start submit and back button-->
									<input type="submit" name="submit" value="Submit" class="btn btn-primary" id="submit"/>
									<!--<input type="button" name="cancel" value="Back" class="btn btn-primary"/>
								</div><!--end submit and back button-->
								<div style="clear:both;">&nbsp;</div>
							</div><!--end form content wrapper-->
						</form>
					</div>
				</div>
			</div><!-- start dentist registration form wrapper-->
			<!--end dentist registration form-->
			
		</div>
	</div>
	 

  <!-- Modal -->
  <div class="modal fade" id="mySuccessReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Registration Successfully</h4>
        </div>
        <div class="modal-body">
			<p>Thank you for registering! A confirmation email has been sent to <?php echo "your email" ?>. Please click on the Activation Link to Activate your account.</p>
          <!--<p>Please verify your email to activate your account.</p>-->
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url(); ?>" class="btn btn-default">OK</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<!--
</body>
</html>
-->
