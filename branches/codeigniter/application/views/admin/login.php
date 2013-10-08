<html>
    <head>
        <title></title>
        <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>style/style.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>style/style_new.css" rel="stylesheet" media="screen">
        <style>
            .red
            {
                font-size: 18px;
                color: #f00;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php echo $header;?>
            <div class="container wrapper">
                <div class="col-md-6 col-md-offset-3" style="padding-bottom: 30px;">
                    <div class="well well-lg" style="border-top:solid 10px #42a9f6;">
                        <div class="row">
                            <div class="col-md-10"><!-- start center-->
                                    <div style=""><!--Dentist's Dashboard--><!--<img src="images/dentist_dashboard.png" />-->
                                            <span style="font-size:40px;">Admin Login</span>
                                    </div>
                            </div><!--end center-->
                        </div>&nbsp;
                        <div class="col-md-12 text-center">
                            <p class="red"><?php echo $display ?></p>
                        </div>
                        <!--<div class="alert alert-danger invalid_login" style="display:none;text-align:center">Invalid email/password</div>-->
                        <form class="form-horizontal" role="form" method="post" id="form_dentist_login" action="">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-4 control-label">Email Address:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1" class="col-lg-4 control-label">Password:</label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <div class="col-lg-offset-9 col-lg-3 text-right">
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>				
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <?php echo $footer; ?>
        </div>
        
        
        <script>window.jQuery || document.write('<script src="<?php //echo base_url();?>js/jquery.min.js">\x3C/script>')</script>
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>js/custom.js"></script>
    </body>
</html>