<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-office Kabupaten Tulungagung</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="<?php echo base_url() ?>asset/css/plugins/pace/pace.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>asset/js/plugins/pace/pace.js"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="<?php echo base_url() ?>asset/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>asset/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php echo base_url() ?>asset/css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins/morris/morris.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins/datatables/datatables.css" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/plugins.css" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="<?php echo base_url() ?>asset/css/demo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>    
    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation"> 

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <a href="index.html">
                        <img src="<?php echo base_url() ?>asset/img/flex-admin-logo.png" data-1x="<?php echo base_url() ?>asset/img/flex-admin-logo@1x.png" data-2x="../img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
                    </a>
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                    <!-- begin MESSAGES DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="messages-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="number">4</span> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-scroll dropdown-messages">

                            <!-- Messages Dropdown Heading -->
                            <li class="dropdown-header">
                                <i class="fa fa-envelope"></i> 4 New Messages
                            </li>

                            <!-- Messages Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
                            <li id="messageScroll">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img class="img-circle" src="<?php echo base_url() ?>asset/img/user-profile-1.jpg" alt="">
                                                </div>
                                                <div class="col-xs-10">
                                                    <p>
                                                        <strong>Jane Smith</strong>: Hi again! I wanted to let you know that the order...
                                                    </p>
                                                    <p class="small">
                                                        <i class="fa fa-clock-o"></i> 12 minutes ago
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img class="img-circle" src="<?php echo base_url() ?>assetimg/user-profile-2.jpg" alt="">
                                                </div>
                                                <div class="col-xs-10">
                                                    <p>
                                                        <strong>Roddy Austin</strong>: Thanks for the info, if you need anything from...
                                                    </p>
                                                    <p class="small">
                                                        <i class="fa fa-clock-o"></i> 3:39 PM
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img class="img-circle" src="<?php echo base_url() ?>asset/img/user-profile-3.jpg" alt="">
                                                </div>
                                                <div class="col-xs-10">
                                                    <p>
                                                        <strong>Stacy Gibson</strong>: Hey, what was the purchase order number for the...
                                                    </p>
                                                    <p class="small">
                                                        <i class="fa fa-clock-o"></i> Yesterday at 10:23 AM
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <img class="img-circle" src="<?php echo base_url() ?>asset/img/user-profile-4.jpg" alt="">
                                                </div>
                                                <div class="col-xs-10">
                                                    <p>
                                                        <strong>Jeffrey Cortez</strong>: Check out this video I found the other day, it's...
                                                    </p>
                                                    <p class="small">
                                                        <i class="fa fa-clock-o"></i> Tuesday at 12:23 PM
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Messages Dropdown Footer -->
                            <li class="dropdown-footer">
                                <a href="mailbox.html">Read All Messages</a>
                            </li>

                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end MESSAGES DROPDOWN -->

                    <!-- begin ALERTS DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="alerts-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i> 
                            <span class="number">9</span><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-scroll dropdown-alerts">

                            <!-- Alerts Dropdown Heading -->
                            <li class="dropdown-header">
                                <i class="fa fa-bell"></i> 9 New Alerts
                            </li>

                            <!-- Alerts Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
                            <li id="alertScroll">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon green pull-left">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            Order #2931 Received
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>3 minutes ago</em>
                                                </strong>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon blue pull-left">
                                                <i class="fa fa-comment"></i>
                                            </div>
                                            New Comments
                                            <span class="badge blue pull-right">15</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon orange pull-left">
                                                <i class="fa fa-wrench"></i>
                                            </div>
                                            Crawl Errors Detected
                                            <span class="badge orange pull-right">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon yellow pull-left">
                                                <i class="fa fa-question-circle"></i>
                                            </div>
                                            Server #2 Not Responding
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>5:25 PM</em>
                                                </strong>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon red pull-left">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            Server #4 Crashed
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>3:34 PM</em>
                                                </strong>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon green pull-left">
                                                <i class="fa fa-plus-circle"></i>
                                            </div>
                                            New Users
                                            <span class="badge green pull-right">5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon orange pull-left">
                                                <i class="fa fa-download"></i>
                                            </div>
                                            Downloads
                                            <span class="badge orange pull-right">16</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon purple pull-left">
                                                <i class="fa fa-cloud-upload"></i>
                                            </div>
                                            Server #8 Rebooted
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>12 hours ago</em>
                                                </strong>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="alert-icon red pull-left">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            Server #8 Crashed
                                            <span class="small pull-right">
                                                <strong>
                                                    <em>12 hours ago</em>
                                                </strong>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Alerts Dropdown Footer -->
                            <li class="dropdown-footer">
                                <a href="#">View All Alerts</a>
                            </li>

                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end ALERTS DROPDOWN -->

                    <!-- begin TASKS DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="tasks-link dropdown-toggle" data-toggle=dropdown>
                            <i class="fa fa-tasks"></i> 
                            <span class=number>10</span><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-scroll dropdown-tasks">

                            <!-- Tasks Dropdown Header -->
                            <li class="dropdown-header">
                                <i class="fa fa-tasks"></i> 10 Pending Tasks
                            </li>

                            <!-- Tasks Dropdown Body - This is contained within a SlimScroll fixed height box. You can change the height using the SlimScroll jQuery features. -->
                            <li id="taskScroll">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <p>
                                                Software Update 2.1
                                                <span class="pull-right">
                                                    <strong>60%</strong>
                                                </span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Server #2 Hardware Upgrade
                                                <span class="pull-right">
                                                    <strong>90%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Call Ticket #2032
                                                <span class="pull-right">
                                                    <strong>72%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Emergency Maintenance
                                                <span class="pull-right">
                                                    <strong>36%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Purchase Order #439
                                                <span class="pull-right">
                                                    <strong>52%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                March Content Update
                                                <span class="pull-right">
                                                    <strong>14%</strong>
                                                </span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Client #42 Data Scrubbing
                                                <span class="pull-right">
                                                    <strong>68%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                PHP Upgrade Server #6
                                                <span class="pull-right">
                                                    <strong>85%</strong>
                                                </span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                Malware Scan
                                                <span class="pull-right">
                                                    <strong>66%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p>
                                                New Employee Intake
                                                <span class="pull-right">
                                                    <strong>98%</strong>
                                                </span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Tasks Dropdown Footer -->
                            <li class="dropdown-footer">
                                <a href="#">View All Tasks</a>
                            </li>

                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end TASKS DROPDOWN -->

                    <!-- begin USER ACTIONS DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="profile.html">
                                    <i class="fa fa-user"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> My Messages
                                    <span class="badge green pull-right">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bell"></i> My Alerts
                                    <span class="badge orange pull-right">9</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-tasks"></i> My Tasks
                                    <span class="badge blue pull-right">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fa fa-calendar"></i> My Calendar
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-gear"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a class="logout_open" href="#logout">
                                    <i class="fa fa-sign-out"></i> Logout
                                    <strong>John Smith</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" src="<?php echo base_url() ?>asset/img/profile-pic.jpg" alt="">
                        <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            John
                            <span class="last-name">Smith</span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p>
                        <div class="clearfix"></div>
                    </li>
                    <!-- end SIDE NAV USER PANEL -->
                    <!-- begin SIDE NAV SEARCH -->
                    <li class="nav-search">
                        <form role="form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button class="btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                    <!-- end SIDE NAV SEARCH -->
                    <!-- begin DASHBOARD LINK -->
                    <li>
                        <a class="active" href="../admin/index.html">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <!-- end DASHBOARD LINK -->
                    <li>
                        <a href="<?php echo base_url() ?>asset/kominfo/mailbox.php">
                            <i class="fa fa-envelope"></i> Informasi Surat
                        </a>
                    </li>

                     <!-- begin CALENDAR LINK -->
                    <li>
                        <a href="../admin/calendar.html">
                            <i class="fa fa-folder-open"></i> Informasi Dinas
                        </a>
                    </li>
                    <!-- end CALENDAR LINK -->
                     <!-- begin CALENDAR LINK -->
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i> Agenda Kegiatan
                        </a>
                    </li>
                    <!-- end CALENDAR LINK -->
                    <!-- begin FORMS DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                            <i class="fa fa-pencil-square-o"></i>Buat Surat  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="forms">
                            <li>
                                <a href="<?php echo base_url() ?>asset/kominfo/nota_dinas.php">
                                    <i class="fa fa-angle-double-right"></i> Nota Dinas
                                </a>
                            </li>
                            <li>
                                <a href="surat_biasa.html">
                                    <i class="fa fa-angle-double-right"></i> Surat Biasa
                                </a>
                            </li>
                            <li>
                                <a href="undangan.html">
                                    <i class="fa fa-angle-double-right"></i> Surat Undangan                                </a>
                            </li>
                            <li>
                                <a href="wysiwyg-editor.html">
                                    <i class="fa fa-angle-double-right"></i> Surat Perintah Perjalanan Dinas
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Surat Pengantar
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Notulen
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Daftar Hadir
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Pengumuman
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Rekomendasi
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Keputusan
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Piagam Penghargaan
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Keterangan
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Memo
                                </a>
                            </li>
                            <li>
                                <a href="dropzone-uploader.html">
                                    <i class="fa fa-angle-double-right"></i> Edaran
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end FORMS DROPDOWN -->
                     <!-- begin CALENDAR LINK -->
                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-info-circle"></i> Fitur Instruksi Kadis

                        </a>
                    </li>
                    <!-- end CALENDAR LINK -->

                   
                   
                    <!-- begin UI ELEMENTS DROPDOWN -->
                    
                    <!-- begin MESSAGE CENTER DROPDOWN -->
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#message-center">
                            <i class="fa fa-archive"></i> Arsip <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="message-center">
                            <li>
                                <a href="mailbox.html">
                                    <i class="fa fa-angle-double-right"></i> Mailbox
                                </a>
                            </li>
                            <li>
                                <a href="compose-message.html">
                                    <i class="fa fa-angle-double-right"></i> Compose Message
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <i class="fa fa-angle-double-right"></i> Chat
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end MESSAGE CENTER DROPDOWN -->
                    
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->

        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>Halaman Utama
                                
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                                <li class="pull-right">
                                    <div id="reportrange" class="btn btn-green btn-square date-picker">
                                        <i class="fa fa-calendar"></i>
                                        <span class="date-range"></span> <i class="fa fa-caret-down"></i>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE AREA -->

                <!-- begin DASHBOARD CIRCLE TILES -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Jumlah Anggota
                                </div>
                                <div class="circle-tile-number text-faded">
                                    
                                    
                                </div>
                                <a href="#" class="circle-tile-footer">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-calendar fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Aktifitas Hari ini
                                </div>
                                <div class="circle-tile-number text-faded">
                                    
                                </div>
                                <a href="calendar.html" class="circle-tile-footer">Lihat Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-envelope fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Surat Masuk
                                </div>
                                <div class="circle-tile-number text-faded">
                                   
                                </div>
                                <a href="mailbox.html" class="circle-tile-footer">Lihat Selengkapnya<i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- end DASHBOARD CIRCLE TILES -->

                <div class="row">

                    <div class="col-lg-3">
                        <div class="tile tile-img tile-time" style="height: 200px">
                            <p class="time-widget">
                                <span class="time-widget-heading">It Is Currently</span>
                                <br>
                                <strong>
                                    <span id="datetime"></span>
                                </strong>
                            </p>
                        </div>
                        <div class="tile dark-blue checklist-tile" style="height: 370px">
                            <h4><i class="fa fa-check-square-o"></i> To-Do List</h4>
                            <div class="checklist">
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-wrench fa-fw text-faded"></i> Software Update 2.1
                                    <span class="task-time text-faded pull-right">Yesterday</span>
                                </label>
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-wrench fa-fw text-faded"></i> Server #2 Hardward Upgrade
                                    <span class="task-time text-faded pull-right">9:39 AM</span>
                                </label>
                                <label class="selected">
                                    <input type="checkbox" checked> <i class="fa fa-warning fa-fw text-orange"></i> Call Ticket #2032
                                    <span class="task-time text-faded pull-right">9:53 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-warning fa-fw text-orange"></i> Emergency Maintenance
                                    <span class="task-time text-faded pull-right">10:14 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-file fa-fw text-faded"></i> Purchase Order #439
                                    <span class="task-time text-faded pull-right">10:20 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-pencil fa-fw text-faded"></i> March Content Update
                                    <span class="task-time text-faded pull-right">10:48 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-magic fa-fw text-faded"></i> Client #42 Data Scrubbing
                                    <span class="task-time text-faded pull-right">11:09 AM</span>
                                </label>
                                <label>
                                    <input type="checkbox"> <i class="fa fa-wrench fa-fw text-faded"></i> PHP Upgrade Server #6
                                    <span class="task-time text-faded pull-right">11:17 AM</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="tile green" style="height: 320px">
                                    <h4><i class="fa fa-usd"></i> Revenue Breakdown <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                                    </h4>
                                    <p class="small text-faded">
                                        Today:
                                        <strong>$324.20 -</strong>
                                        Week:
                                        <strong>$1,230.43</strong>
                                    </p>
                                    <div id="morris-chart-dashboard"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tile light-gray" style="height: 320px">
                                    <h4><i class="fa fa-bolt"></i> Server Load <a href="javascript:;"><i class="fa fa-refresh pull-right"></i></a>
                                    </h4>
                                    <p class="small text-faded">
                                        <strong>130 GB </strong>of
                                        <strong>1024 GB </strong>used
                                    </p>
                                    <div class="flot-chart flot-chart-dashboard">
                                        <div class="flot-chart-content" id="flot-chart-moving-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile orange dash-demo-tile">
                                    <h4><i class="fa fa-cloud fa-fw"></i> Data Usage</h4>
                                    <div id="easy-pie-1" class="easy-pie-chart" data-percent="86">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile blue dash-demo-tile">
                                    <h4><i class="fa fa-check fa-fw"></i> Satisfaction Score</h4>
                                    <div id="easy-pie-2" class="easy-pie-chart" data-percent="92">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile red dash-demo-tile">
                                    <h4><i class="fa fa-arrow-circle-down fa-fw"></i> Bounce Rate</h4>
                                    <div id="easy-pie-3" class="easy-pie-chart" data-percent="27">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="tile purple dash-demo-tile">
                                    <h4><i class="fa fa-shopping-cart fa-fw"></i> Abandoned Carts</h4>
                                    <div id="easy-pie-4" class="easy-pie-chart" data-percent="35">
                                        <span class="percent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-map-marker fa-fw"></i> Traffic Breakdown by Region</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <!-- Button Dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    Export
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-left" style="margin-left: -90px" role="menu">
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> CSV</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> TSV</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> TSV for Excel</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> Excel (XLSX)</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-cloud-download fa-fw"></i> PDF</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="map"></div>
                                        <br>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover table-green" id="map-table-example">
                                                <thead>
                                                    <tr>
                                                        <th>Rank</th>
                                                        <th>Country</th>
                                                        <th>Total Visits</th>
                                                        <th>Page Views</th>
                                                        <th>Orders</th>
                                                        <th>Bounce Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>01</strong></td>
                                                        <td>United States</td>
                                                        <td>14,624</td>
                                                        <td>28,981</td>
                                                        <td>281</td>
                                                        <td>30.43%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>02</strong></td>
                                                        <td>China</td>
                                                        <td>5,745</td>
                                                        <td>10,491</td>
                                                        <td>121</td>
                                                        <td>36.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>03</strong></td>
                                                        <td>Japan</td>
                                                        <td>5,390</td>
                                                        <td>11,165</td>
                                                        <td>102</td>
                                                        <td>35.52%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>04</strong></td>
                                                        <td>Germany</td>
                                                        <td>3,305</td>
                                                        <td>7,651</td>
                                                        <td>71</td>
                                                        <td>36.24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>05</strong></td>
                                                        <td>France</td>
                                                        <td>2,555</td>
                                                        <td>5,615</td>
                                                        <td>56</td>
                                                        <td>34.83%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>06</strong></td>
                                                        <td>United Kingdom</td>
                                                        <td>2,258</td>
                                                        <td>4,651</td>
                                                        <td>42</td>
                                                        <td>32.73%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>07</strong></td>
                                                        <td>Italy</td>
                                                        <td>2,036</td>
                                                        <td>4,498</td>
                                                        <td>44</td>
                                                        <td>32.54%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>08</strong></td>
                                                        <td>Brazil</td>
                                                        <td>2,023</td>
                                                        <td>4,948</td>
                                                        <td>43</td>
                                                        <td>33.97%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>09</strong></td>
                                                        <td>Canada</td>
                                                        <td>1,563</td>
                                                        <td>3,961</td>
                                                        <td>38</td>
                                                        <td>33.35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>10</strong></td>
                                                        <td>Russia</td>
                                                        <td>1,476</td>
                                                        <td>3,261</td>
                                                        <td>35</td>
                                                        <td>35.27%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>11</strong></td>
                                                        <td>Spain</td>
                                                        <td>1,374</td>
                                                        <td>2,841</td>
                                                        <td>28</td>
                                                        <td>34.56%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>12</strong></td>
                                                        <td>Australia</td>
                                                        <td>1,219</td>
                                                        <td>2,753</td>
                                                        <td>25</td>
                                                        <td>31.50%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>13</strong></td>
                                                        <td>Mexico</td>
                                                        <td>1,004</td>
                                                        <td>2,091</td>
                                                        <td>19</td>
                                                        <td>35.17%</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portlet portlet-default">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-circle text-green"></i> Jane Smith</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                                    <i class="fa fa-circle text-green"></i> Status
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="chat" class="panel-collapse collapse in">
                                        <div class="portlet-body chat-widget">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="<?php echo base_url() ?>asset/img/user-profile-1.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jane Smith
                                                                <span class="small pull-right">12:23 PM</span>
                                                            </h4>
                                                            <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="<?php echo base_url() ?>asset/img/profile-pic-small.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">John Smith
                                                                <span class="small pull-right">12:28 PM</span>
                                                            </h4>
                                                            <p>Yeah I did. Everything looks good.</p>
                                                            <p>Did you have an update on purchase order #302?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object img-circle" src="<?php echo base_url() ?>asset/img/user-profile-1.jpg" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Jane Smith
                                                                <span class="small pull-right">12:39 PM</span>
                                                            </h4>
                                                            <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="portlet-footer">
                                            <form role="form">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Enter message..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default pull-right">Send</button>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="portlet portlet-green">
                                    <div class="portlet-heading">
                                        <div class="portlet-title">
                                            <h4><i class="fa fa-exchange fa-fw"></i> Recent Transactions</h4>
                                        </div>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#transactionsPortlet"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="transactionsPortlet" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                            <div class="table-responsive dashboard-demo-table">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>6:14 PM</td>
                                                            <td>$12.07</td>
                                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>6:02 PM</td>
                                                            <td>$5.32</td>
                                                            <td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:56 PM</td>
                                                            <td>$6.58</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:12 PM</td>
                                                            <td>$15.61</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>5:02 PM</td>
                                                            <td>$9.89</td>
                                                            <td><a class="btn btn-xs btn-green"><i class="fa fa-arrow-circle-right"></i> View Order</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>4:47 PM</td>
                                                            <td>$2.21</td>
                                                            <td><a class="btn btn-xs btn-red"><i class="fa fa-warning"></i> Error</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>1/31/14</td>
                                                            <td>4:32 PM</td>
                                                            <td>$5.17</td>
                                                            <td><a class="btn btn-xs btn-default"><i class="fa fa-arrow-circle-right"></i> Special Order</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class="btn btn-green">View All Transactions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="<?php echo base_url() ?>asset/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="<?php echo base_url() ?>asset/img/profile-pic.jpg" alt="">
            <h3>
                <i class="fa fa-sign-out text-green"></i> Ready to go?
            </h3>
            <p>Select "Logout" below if you are ready<br> to end your current session.</p>
            <ul class="list-inline">
                <li>
                    <a href="login.html" class="btn btn-green">
                        <strong>Logout</strong>
                    </a>
                </li>
                <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="<?php echo base_url() ?>asset/js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="<?php echo base_url() ?>asset/js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="<?php echo base_url() ?>asset/js/plugins/messenger/messenger.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="<?php echo base_url() ?>asset/js/plugins/daterangepicker/moment.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="<?php echo base_url() ?>asset/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="<?php echo base_url() ?>asset/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="<?php echo base_url() ?>asset/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="<?php echo base_url() ?>asset/js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="<?php echo base_url() ?>asset/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>asset/js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="<?php echo base_url() ?>asset/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>asset/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>asset/js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="<?php echo base_url() ?>asset/js/flex.js"></script>
    <script src="<?php echo base_url() ?>asset/js/demo/dashboard-demo.js"></script>

</body>

</html>
