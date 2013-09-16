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
        <script style="type/javascript">
			$(document).ready(function(){
				$("submit").click(function(event){
			$(".alert").show(); //fadeout the slide div for automotive
			});
		});
		</script>
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
		
		label { margin-left:100px;}
		#lname{ position:relative; margin-top:-34px; margin-left:273px;}
		#middle{ position:relative; margin-top:-34px; margin-left:135px;}
		#bday2{ position:relative; margin-top:-31px; margin-left:240px;}
		#bday3{ position:relative; margin-top:-31px; margin-left:480px;}
		.alert_msg {width:380px; margin-left:235px;}
		
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
				<div class="" style="border:solid 0px green; height:410px; width:60%;">
					<div id="" class="well well-sm" style="position:relative;margin-top:15px;left:300px;">
					<div style="clear:both;">&nbsp;</div>
						<form class="form-horizontal" id="form_dentist_signup" role="form" method="post" action="<?php base_url('dentist_signup')?>" enctype="multipart/form-data" name="ContactForm"><!--Registration form for Dentist-->
							<div><!--start form content wrapper-->
								<div class="alert alert-danger alert_msg" style="text-align:center;display:none;"><?php //echo validation_errors(); ?><?php //echo form_error('fname'); //echo form_error('lname');?><?php  ?></div>
								
								<div class="form-group"><!--start full name-->
									<label for="inputEmail1" class="col-lg-2 control-label">Name:</label>
									<div class="col-lg-2">
										<input type="text" id="fname" name="fname" class="form-control" value="<?php echo set_value('fname') ?>" placeholder="First">
										<input type="text" id="middle" name="middle" class="form-control" value="<?php echo set_value('middle') ?>" placeholder="Middle">
										<input type="text" id="lname" name="lname" class="form-control" value="<?php echo set_value('lname') ?>" placeholder="Last">
										
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
								
								<div style="margin-left:238px; margin-top:14px;"><!--start submit and back button-->
									<input type="submit" name="submit" value="Submit" class="btn btn-primary" id="submit"/>
									<!--<input type="button" name="cancel" value="Back" class="btn btn-primary"/>
								</div><!--end submit and back button-->
								<div style="clear:both;">&nbsp;</div>
							</div><!--end form content wrapper-->
							<input type="hidden" name="date_reg" value="<?php $x=date('d/m/Y'); echo $x;?>"><!--date registered of dentist -->
						</form>
					</div>
				</div>
			</div><!-- start dentist registration form wrapper-->
			<!--end dentist registration form-->
			
		</div>
	</div>
	<!--
</body>
</html>
-->
