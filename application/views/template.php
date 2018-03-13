<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title><?php echo $title ?></title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="<?php echo base_url()?>themes/assets/plugins/morris/morris.css">

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

        <link rel="stylesheet" href="<?php echo base_url();?>plugin/datatables/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>plugin/jquery/jquery-ui.css">
        <script src="<?php echo base_url()?>themes/assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="icon-magnet icon-c-logo"></i><span>TW P<i class="md md-album"></i>RTAL</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url()?>themes/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="<?php echo site_url('logout')?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('dashboard')?>">Dashboard</a></li>
                                </ul>
                            </li>

                            <?php if($this->session->userdata('user_level') === "4") { ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Form </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('upload_doc')?>">Upload Document</a></li>
                                </ul>
                            </li>
                            <?php
                            }else{}
                            ?>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Documentation </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="<?php echo site_url('billing_doc')?>">Billing</a></li>
                                  <li><a href="<?php echo site_url('opera_doc')?>">Operational</a></li>
                                	<li><a href="<?php echo site_url('sys_doc')?>">System Integration</a></li>
                                </ul>
                            </li>

                            <?php if($this->session->userdata('user_level') === "4") { ?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> Management User </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('users')?>"> Users </a></li>
                                </ul>
                            </li>
                            <?php
                            }else{}
                            ?>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <!--
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-attach-money text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted">Total Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                -->
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <!--
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-add-shopping-cart text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">280</b></h3>
                                        <p class="text-muted">Today's Sales</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                -->
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <!--
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-equalizer text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
                                        <p class="text-muted">Conversion</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                -->
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <!--
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="md md-remove-red-eye text-success"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">64,570</b></h3>
                                        <p class="text-muted">Today's Visits</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                -->
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                        		  <!--
                              <div class="card-box">
                        			<h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>

                        			<div class="widget-chart text-center">
                                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#fb6d9d" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
	                                	<h5 class="text-muted m-t-20">Total sales made today</h5>
	                                	<h2 class="font-600">$75</h2>
	                                	<ul class="list-inline m-t-15">
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Target</h5>
	                                			<h4 class="m-b-0">$1000</h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Last week</h5>
	                                			<h4 class="m-b-0">$523</h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Last Month</h5>
	                                			<h4 class="m-b-0">$965</h4>
	                                		</li>
	                                	</ul>
                                	</div>
                        		</div>
                            -->

                            </div>

                            <div class="col-lg-12">
                            <?php echo $this->load->view($view) ?>
                                <!--
                                <div class="card-box">
									<h4 class="text-dark header-title m-t-0">Sales Analytics</h4>
									<div class="text-center">
										<ul class="list-inline chart-detail-list">
											<li>
												<h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
											</li>
											<li>
												<h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
											</li>
											<li>
												<h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Mobiles</h5>
											</li>
										</ul>
									</div>
									<div id="morris-bar-stacked" style="height: 303px;"></div>
								</div>
                            </div>-->



						</div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                        		<!--
                            <div class="card-box">
                        			<h4 class="text-dark header-title m-t-0">Total Sales</h4>

                        			<div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops</h5>
                                            </li>
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                            </li>
                                            <li>
                                                <h5><i class="fa fa-circle m-r-5" style="color: #ebeff2;"></i>Mobiles</h5>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-area-with-dotted" style="height: 300px;"></div>

                        		</div>-->

                            </div>

                            <!-- col -->

                        	<div class="col-lg-6">
                        		<!--
                            <div class="card-box">
                                    <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                        			<h4 class="text-dark header-title m-t-0">Recent Orders</h4>
                        			<p class="text-muted m-b-30 font-13">
										Use the button classes on an element.
									</p>

                        			<div class="table-responsive">
                                        <table class="table table-actions-bar m-b-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item Name</th>
                                                    <th>Up-Down</th>
                                                    <th style="min-width: 80px;">Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#5fbeaa" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                                    <td><img src="assets/images/products/iphone.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-custom">+$230</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-line" data-fill="#5fbeaa" data-stroke="#5fbeaa" data-width="80" data-height="30">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></td>
                                                    <td><img src="assets/images/products/samsung.jpg" class="thumb-sm pull-left m-r-10" alt=""> Samsung Phone </td>
                                                    <td><span class="text-danger">-$154</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-line" data-fill="#fff" data-stroke="#5fbeaa" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                                                    <td><img src="assets/images/products/imac.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-custom">+$1850</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="30" data-height="30">1/5</span></td>
                                                    <td><img src="assets/images/products/macbook.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                                                    <td><span class="text-danger">-$560</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span data-plugin="peity-bar" data-colors="#5fbeaa,#ebeff2" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                                                    <td><img src="assets/images/products/lumia.jpg" class="thumb-sm pull-left m-r-10" alt=""> Lumia iPhone </td>
                                                    <td><span class="text-custom">+$230</span></td>
                                                    <td>
                                                    	<a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    	<a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                        		</div>-->
                        	</div>
                        	<!-- end col -->



                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2018. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url()?>themes/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/detect.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>plugin/jquery/jquery-1.12.4.js"></script>
        <script src="<?php echo base_url();?>plugin/jquery/jquery-ui.js"></script>

        <script src="<?php echo base_url()?>themes/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url()?>themes/assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo base_url()?>themes/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url()?>themes/assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="<?php echo base_url()?>themes/assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>themes/assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url()?>themes/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="<?php echo base_url()?>themes/assets/pages/jquery.dashboard.js"></script>

        <script src="<?php echo base_url()?>themes/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url()?>themes/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>


        <script src="<?php echo base_url();?>plugin/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>plugin/datatables/js/dataTables.bootstrap.min.js"></script>
        <script>
          $('#mydata').dataTable();
          $('#mydatas').dataTable();
        </script>
        <script src="<?php echo base_url()?>js/me.js"></script>

    </body>
</html>