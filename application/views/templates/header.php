<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fixed Admin - Bootstrap Admin Dashboard Template</title>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon.png">

      
        
        <link href="<?=base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

        <!-- DataTables -->
<!--        <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/toast/jquery.toast.min.css" rel="stylesheet">-->
        <!-- Custom Css-->

        <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
        <script src="<?= base_url('assets/lib/jquery/dist/jquery.min.js'); ?>"></script>

    </head>
    <body>

        <!-- ============================================================== -->
        <!-- 						Topbar Start 							-->
        <!-- ============================================================== -->
        <div class="top-bar primary-top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a class="admin-logo" href="index.html">
                            <h1>
                                <img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">
                                <img alt="" src="assets/img/logo-dark.png" class="toggle-none hidden-xs">
                            </h1>
                        </a>
                        <div class="left-nav-toggle" >
                            <a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="left-nav-collapsed" >
                            <a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
                        </div>

<!--                        <div class="search-form hidden-xs">
                            <form>
                                <input class="form-control" placeholder="Search for..." type="text"> <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>-->
                    </div>
                    <div class="col">
                        <ul class="list-inline top-right-nav">
                            <li class="dropdown icon-dropdown d-none-m">
                                <a class="dropdown-toggle " data-toggle="dropdown" href="#"><i class="fa fa-envelope"></i> <span class="badge badge-warning">4</span></a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header">
                                            <a class="pull-right text-muted" href="#"><small>View All</small></a> Messages
                                        </div>

                                        <div class="scrollDiv">
                                            <div class="notification-list">
                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <img alt="" class="rounded-circle" src="assets/img/avtar-2.jpg" width="50">
                                                    </span> 
                                                    <span class="notification-title">
                                                        John Doe 
                                                        <label class="label label-warning pull-right">Support</label>
                                                    </span> 
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a>

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <img alt="" class="rounded-circle" src="assets/img/avtar-3.jpg" width="50">
                                                    </span> 
                                                    <span class="notification-title">
                                                        Govindo Doe 
                                                        <label class="label label-warning pull-right">Support</label>
                                                    </span> 
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span> 
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a> 

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <img alt="" class="rounded-circle" src="assets/img/avtar-4.jpg" width="50">
                                                    </span> 
                                                    <span class="notification-title">
                                                        Megan Doe 
                                                        <label class="label label-warning pull-right">Support</label>
                                                    </span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a> 

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <img alt="" class="rounded-circle" src="assets/img/avtar-5.jpg" width="50">
                                                    </span>
                                                    <span class="notification-title">
                                                        Hritik Doe 
                                                        <label class="label label-warning pull-right">Support</label>
                                                    </span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown icon-dropdown d-none-m">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell"></i> <span class="badge badge-danger">6</span></a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header">
                                            <a class="pull-right text-muted" href="#"><small>View All</small></a> Notifications
                                        </div>
                                        <div class="scrollDiv">
                                            <div class="notification-list">

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <i class="icon-cloud-upload text-primary"></i>
                                                    </span>
                                                    <span class="notification-title">Upload Complete</span> 
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a> 

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <i class="icon-info text-warning"></i>
                                                    </span>
                                                    <span class="notification-title">Storage Space low</span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a>

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <i class="icon-check text-success"></i>
                                                    </span>
                                                    <span class="notification-title">Project Task Complete</span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a>

                                                <a class="clearfix" href="javascript:%20void(0);">
                                                    <span class="notification-icon">
                                                        <i class=" icon-graph text-danger"></i>
                                                    </span>
                                                    <span class="notification-title">CPU Usage</span>
                                                    <span class="notification-description">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    <span class="notification-time">15 minutes ago</span>
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="right-sidebar-toggle d-none-m" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>
                            </li>
                            <li class="dropdown avtar-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img alt="" class="rounded-circle" src="assets/img/avtar-2.jpg" width="30">
                                </a>
                                <ul class="dropdown-menu top-dropdown">
                                    <li>
                                        <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i> Activities</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-user"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i> Settings</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-logout"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!--                        Topbar End                              -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!--                        Right Side Start                        -->
        <!-- ============================================================== -->
        <nav class="toggle-sidebar" id="right-sidebar-toggle">
            <div class="nano">
                <div class="nano-content">
                    <div>
                        <ul class="list-inline nav-tab-card clearfix" role="tablist">

                            <li class="active" role="presentation">
                                <a aria-controls="friends" data-toggle="tab" href="#friends" role="tab">Friends</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="friends" role="tabcard">
                                <ul class="list-unstyled sidebar-contact-list">
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-danger circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-3.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-4.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-5.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Bianca Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-6.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li class="clearfix">
                                        <a class="media-box" href="#"><span class="pull-right"><span class="circle circle-danger circle-lg"></span></span> <span class="pull-left">
                                                <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.jpg" width="50"></span>
                                            <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
                                                    <small class="text-muted">Designer</small></span></span></a>
                                    </li>
                                    <li>
                                        <div class=" text-center">
                                            <a class="btn btn-teal" href="javascript:void(0);" title="See more contacts">Load more..</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ============================================================== -->
        <!--                        Right Side End                          -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- 						Navigation Start 						-->
        <!-- ============================================================== -->
        <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
                    <ul class="metisMenu nav flex-column" id="menu">
                        <div class="card-block border-bottom text-center nav-profile">
                            <img alt="profile" class="rounded-circle margin-b-10 circle-border " src="<?php echo base_url('assets/img/avtar-2.jpg');?>" width="80">
                            <p class="lead margin-b-0 toggle-none">John Doe</p>
                            <p class="text-muted mv-0 toggle-none">Welcome</p>
<!--                            <ul class="nav nav-pills toggle-none">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-bell"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="icon-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="icon-settings"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-logout"></i></a>
                                </li>
                            </ul>-->
                        </div>

                        <li class="nav-heading"><span>Main</span></li>

                        <li class="nav-item active"><a class="nav-link" href="index.html"><i class="fa fa-home"></i> <span class="toggle-none">Dashboard </a></li>						
                       

                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-envelope-o"></i> <span class="toggle-none">Classes<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/dashboard/loaction');?>">Add Location</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/dashboard/addClass');?>">Add Class</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/dashboard/schedule');?>">Schedule</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>