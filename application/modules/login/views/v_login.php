<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Sign In</title>

        <link href="<?php echo base_url()?>themes/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>themes/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>themes/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>themes/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>themes/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>themes/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url()?>themes/assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom">TW Portal</strong> </h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" action="<?php echo site_url('verify_login')?>" method="post">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">Sign In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="#" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
                <div class="row">
            	<div class="col-sm-12 text-center">
            		<p><?php echo $this->session->flashdata('erorr_login') ?></p>
                        
                    </div>
            </div>
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url()?>themes/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/bootstrap.min.js"></script>
        <!--
        <script src="<?php echo base_url()?>themes/assets/js/detect.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/fastclick.js"></script>-->
        <script src="<?php echo base_url()?>themes/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.blockUI.js"></script>
        <!--
        <script src="<?php echo base_url()?>themes/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.scrollTo.min.js"></script> -->


        <script src="<?php echo base_url()?>themes/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.app.js"></script>
	
	</body>
</html>