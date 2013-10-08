<html>
    <head>
        <title></title>
        <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>style/style.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>style/style_new.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="-webkit-box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 10px; box-shadow: none;">
                <div class="container">
                    <div class="col-md-6" style="padding: 10px 0;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>

                        <a href="<?php echo base_url(); ?>admin/admin_dashboard" class="col-md-12">
                            <img alt="Profile Pic" src="<?php echo base_url();?>img/logo.png" style="max-height: 51px;">
                        </a>
                    </div>
                    <div class="col-md-6 text-right" style="padding: 20px 0;">
                        <a href="<?php echo base_url();?>logout">Log-Out</a>
                    </div>
                </div>
            </nav>
            <div style="padding-top: 70px; padding-bottom: 140px; height: 100%;">
                <div class="container">
                    <div class="row">
                        <div col-md-6 text-left>
                            <ul class="top_menu btn-group" style="list-style-type: none; padding: 15px 0 0 0">
                                <li>
                                    <div class="btn-group">			
                                        <a href="<?php echo base_url(); ?>admin/admin_dashboard" id="link1" class="btn btn-default">
                                                <span style="color: #52AFFF;"> Overview </span>
                                        </a>
                                        <a href="<?php echo base_url(); ?>admin/dentist_list" id="link2" class="btn btn-default">
                                                <span> Dentists </span>
                                        </a>
                                        <a href="" id="link3" class="btn btn-default">
                                                <span> Patients </span>
                                        </a>
                                        <a href="" id="link4" class="btn btn-default">
                                                <span> Admin </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <h1>Overview</h1>
                        </div>
                        <div class="col-md-5">
                            <h2 class="text-center">Dentists</h2>
                            <?php echo $dentist;?>

                        </div>
                        <div class="col-md-5">
                            <h2 class="text-center">Patients</h2>
                            <?php echo $patient;?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" style="margin-top: -140px">
                <?php echo $footer; ?>
            </div>
        </div>
        <script>window.jQuery || document.write('<script src="<?php //echo base_url();?>js/jquery.min.js">\x3C/script>')</script>
        <script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>js/custom.js"></script>
    </body>
</html>