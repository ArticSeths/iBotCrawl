<?php
	/*
	Template Name: Dashboard
	*/

	add_action('wp_enqueue_scripts', 'stylePage');
	function stylePage() {
		$templateDir = get_template_directory_uri();
		wp_register_script('js-dashboard', $templateDir . '/pages/dashboard/js-dashboard.js'); wp_enqueue_script('js-dashboard');
		wp_register_style('css-dashboard', $templateDir . '/pages/dashboard/css-dashboard.css'); wp_enqueue_style('css-dashboard');
		}

	get_header();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/wp-content/themes/ibotcrawl/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/ibotcrawl/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/ibotcrawl/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/ibotcrawl/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/wp-content/themes/ibotcrawl/pages/css/themes/light.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header dashboard menu-pin">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="/wp-content/themes/ibotcrawl/assets/img/logo.png" alt="logo" class="brand" data-src="/wp-content/themes/ibotcrawl/assets/img/logo.png" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/logo_2x.png">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="index.html" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="shield"></i></span>
          </li>
          <li class="">
            <a href="email.html" class="detailed">
              <span class="title">Email</span>
              <span class="details">234 New Emails</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="mail"></i></span>
          </li>
          <li class="">
            <a href="social.html"><span class="title">Social</span></a>
            <span class="icon-thumbnail"><i data-feather="users"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Calendar</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="calendar"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="calendar.html">Basic</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="calendar_lang.html">Languages</a>
                <span class="icon-thumbnail">L</span>
              </li>
              <li class="">
                <a href="calendar_month.html">Month</a>
                <span class="icon-thumbnail">M</span>
              </li>
              <li class="">
                <a href="calendar_lazy.html">Lazy load</a>
                <span class="icon-thumbnail">La</span>
              </li>
              <li class="">
                <a href="https://pages.revox.io/dashboard/2.1.0/doc/#calendar" target="_blank">Documentation</a>
                <span class="icon-thumbnail">D</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="builder.html">
              <span class="title">Builder</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="cpu"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Layouts</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="layout"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="default_layout.html">Default</a>
                <span class="icon-thumbnail">dl</span>
              </li>
              <li class="">
                <a href="secondary_layout.html">Secondary</a>
                <span class="icon-thumbnail">sl</span>
              </li>
              <li class="">
                <a href="boxed_layout.html">Boxed</a>
                <span class="icon-thumbnail">bl</span>
              </li>
              <li class="">
                <a href="rtl_layout.html">RTL</a>
                <span class="icon-thumbnail">rl</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">UI Elements</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="triangle"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="color.html">Color</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="typography.html">Typography</a>
                <span class="icon-thumbnail">t</span>
              </li>
              <li class="">
                <a href="icons.html">Icons</a>
                <span class="icon-thumbnail">i</span>
              </li>
              <li class="">
                <a href="buttons.html">Buttons</a>
                <span class="icon-thumbnail">b</span>
              </li>
              <li class="">
                <a href="notifications.html">Notifications</a>
                <span class="icon-thumbnail">n</span>
              </li>
              <li class="">
                <a href="modals.html">Modals</a>
                <span class="icon-thumbnail">m</span>
              </li>
              <li class="">
                <a href="progress.html">Progress &amp; Activity</a>
                <span class="icon-thumbnail">pa</span>
              </li>
              <li class="">
                <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                <span class="icon-thumbnail">ta</span>
              </li>
              <li class="">
                <a href="sliders.html">Sliders</a>
                <span class="icon-thumbnail">s</span>
              </li>
              <li class="">
                <a href="tree_view.html">Tree View</a>
                <span class="icon-thumbnail">tv</span>
              </li>
              <li class="">
                <a href="nestables.html">Nestable</a>
                <span class="icon-thumbnail">ns</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <span class="title">Forms</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i data-feather="list"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="form_elements.html">Form Elements</a>
                <span class="icon-thumbnail">fe</span>
              </li>
              <li class="">
                <a href="form_layouts.html">Form Layouts</a>
                <span class="icon-thumbnail">fl</span>
              </li>
              <li class="">
                <a href="form_wizard.html">Form Wizard</a>
                <span class="icon-thumbnail">fw</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="cards.html">
              <span class="title">Cards</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="grid"></i></span>
          </li>
          <li class="">
            <a href="views.html">
              <span class="title">Views</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Tables</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="square"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="tables.html">Basic Tables</a>
                <span class="icon-thumbnail">bt</span>
              </li>
              <li class="">
                <a href="datatables.html">Data Tables</a>
                <span class="icon-thumbnail">dt</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Maps</span> 
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="map-pin"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="google_map.html">Google Maps</a>
                <span class="icon-thumbnail">gm</span>
              </li>
              <li class="">
                <a href="vector_map.html">Vector Maps</a>
                <span class="icon-thumbnail">vm</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="charts.html"><span class="title">Charts</span></a>
            <span class="icon-thumbnail"><i data-feather="bar-chart"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="box"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="invoice.html">Invoice</a>
                <span class="icon-thumbnail">in</span>
              </li>
              <li class="">
                <a href="404.html">404 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="500.html">500 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="blank_template.html">Blank Page</a>
                <span class="icon-thumbnail">bp</span>
              </li>
              <li class="">
                <a href="login.html">Login</a>
                <span class="icon-thumbnail">l</span>
              </li>
              <li class="">
                <a href="register.html">Register</a>
                <span class="icon-thumbnail">re</span>
              </li>
              <li class="">
                <a href="lock_screen.html">Lockscreen</a>
                <span class="icon-thumbnail">ls</span>
              </li>
              <li class="">
                <a href="gallery.html">Gallery</a>
                <span class="icon-thumbnail">gl</span>
              </li>
              <li class="">
                <a href="timeline.html">Timeline</a>
                <span class="icon-thumbnail">t</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Menu Levels</span>
            <span class="arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="menu"></i></span>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;">Level 1</a>
                <span class="icon-thumbnail">L1</span>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Level 2</span>
                <span class="arrow"></span></a>
                <span class="icon-thumbnail">L2</span>
                <ul class="sub-menu">
                  <li>
                    <a href="javascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                  <li>
                    <a href="ujavascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="https://pages.revox.io/dashboard/2.2.0/docs/" target="_blank"><span class="title">Docs</span></a>
            <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
          </li>
          <li class="">
            <a href="https://changelog.pages.revox.io/" target="_blank"><span class="title">Changelog</span></a>
            <span class="icon-thumbnail">CG</span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline">
            <img src="/wp-content/themes/ibotcrawl/assets/img/logo.png" alt="logo" data-src="/wp-content/themes/ibotcrawl/assets/img/logo.png" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/logo_2x.png" width="78" height="22">
          </div>
          <a href="#" class="btn btn-link text-primary m-l-20 hidden-md-down">Add New Item</a>
        </div>
        <div class="d-flex align-items-center">
          <!-- START NOTIFICATION LIST -->
          <ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-r no-style p-l-30 p-r-20">
            <li class="p-r-10 inline">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                  <span class="bubble"></span>
                </a>
                <!-- START Notification Dropdown -->
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <!-- START Notification -->
                  <div class="notification-panel">
                    <!-- START Notification Body-->
                    <div class="notification-body scrollable">
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <!-- START Notification Item-->
                        <div class="heading open">
                          <a href="#" class="text-primary pull-left">
                            <i class="pg-map fs-16 m-r-10"></i>
                            <span class="bold">Carrot Design</span>
                            <span class="fs-12 m-l-10">David Nester</span>
                          </a>
                          <div class="pull-right">
                            <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                              <div><i class="fa fa-angle-left"></i>
                              </div>
                            </div>
                            <span class=" time">few sec ago</span>
                          </div>
                          <div class="more-details">
                            <div class="more-details-inner">
                              <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br> 
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                              <p class="small hint-text">
                                Commented on john Smiths wall.
                                <br> via pages framework.
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- START Notification Body-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-danger pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">98% Server Load</span>
                            <span class="fs-12 m-l-10">Take Action</span>
                          </a>
                          <span class="pull-right time">2 mins ago</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-warning-dark pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">Warning Notification</span>
                            <span class="fs-12 m-l-10">Buy Now</span>
                          </a>
                          <span class="pull-right time">yesterday</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <div class="heading">
                          <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                            <img width="30" height="30" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" alt="" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg">
                          </div>
                          <a href="#" class="text-primary pull-left">
                            <span class="bold">Revox Design Labs</span>
                            <span class="fs-12 m-l-10">Owners</span>
                          </a>
                          <span class="pull-right time">11:00pm</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                    </div>
                    <!-- END Notification Body-->
                    <!-- START Notification Footer-->
                    <div class="notification-footer text-center">
                      <a href="#" class="">Read all notifications</a>
                      <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                        <i class="pg-refresh_new"></i>
                      </a>
                    </div>
                    <!-- START Notification Footer-->
                  </div>
                  <!-- END Notification -->
                </div>
                <!-- END Notification Dropdown -->
              </div>
            </li>
            <li class="p-r-10 inline">
              <a href="#" class="header-icon pg pg-link"></a>
            </li>
            <li class="p-r-10 inline">
              <a href="#" class="header-icon pg pg-thumbs"></a>
            </li>
          </ul>
          <!-- END NOTIFICATIONS LIST -->
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down m-l-20">
            <span class="semi-bold">David</span> <span class="text-master">Nest</span>
          </div>
          <div class="dropdown pull-right hidden-md-down">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="thumbnail-wrapper d32 circular inline">
              <img src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar.jpg" alt="" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar.jpg" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
              <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
              <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
              <a href="#" class="clearfix bg-master-lighter dropdown-item">
                <span class="pull-left">Logout</span>
                <span class="pull-right"><i class="pg-power"></i></span>
              </a>
            </div>
          </div>
          <!-- END User Info-->
          <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START JUMBOTRON -->
          <div data-pages="parallax">
            <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb sm-p-b-5">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-3 col-sm-6  d-flex flex-column">
                <!-- START WIDGET widget_map_sales-->
                <!-- START ITEM -->
                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                  <div class="card-header ">
                    <h5 class="text-primary pull-left fs-12">Update <i
									class="fa fa-circle text-complete fs-11"></i></h5>
                    <div class="pull-right small hint-text">
                      5,345 <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-description">
                    <div id="rickshaw-realtime" class="rickshaw-chart"></div>
                    <div id="legend"></div>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="pull-left">via <span class="text-complete">Pages</span>
                    </div>
                    <div class="pull-right hint-text">
                      July 23
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END ITEM -->
                <!-- END WIDGET -->
                <!-- START WIDGET widget_weekly_sales_card-->
                <div class="card no-border widget-loader-bar m-b-10">
                  <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="card-header  top-left top-right">
                          <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
				                        </span>
                          </div>
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                          <h3 class="no-margin p-b-5">$24,000</h3>
                          <span class="small hint-text pull-left">71% of total goal</span>
                          <span class="pull-right small text-primary">$23,000</span>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-bottom">
                        <div class="progress progress-small m-b-0">
                          <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                          <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                          <!-- END BOOTSTRAP PROGRESS -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
                <!-- START WIDGET widget_weekly_sales_card-->
                <div class="card no-border widget-loader-bar m-b-10">
                  <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="card-header  top-left top-right">
                          <div class="card-title">
                            <span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
				                        </span>
                          </div>
                          <div class="card-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-top">
                        <div class="p-l-20 p-t-50 p-b-40 p-r-20">
                          <h3 class="no-margin p-b-5">423</h3>
                          <span class="small hint-text pull-left">22% higher</span>
                          <span class="pull-right small text-danger">$23,000</span>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height col-bottom">
                        <div class="progress progress-small m-b-0">
                          <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                          <div class="progress-bar progress-bar-danger" style="width:15%"></div>
                          <!-- END BOOTSTRAP PROGRESS -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-lg-3 col-sm-6  d-flex flex-column">
                <!-- START ITEM -->
                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                  <div class="card-header clearfix">
                    <h5 class="text-success pull-left fs-12">Stock Market <i
									class="fa fa-circle text-success fs-11"></i></h5>
                    <div class="pull-right small hint-text">
                      5,345 <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-description">
                    <h5 class='hint-text no-margin'>Apple Inc.</h5>
                    <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                    <h3 class="m-b-0">111.25 <span class="text-success"><i class="fa fa-sort-up small text-success"></i> 0.15</span>
							</h3>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="pull-left">by <span class="text-success">John Smith</span>
                    </div>
                    <div class="pull-right hint-text">
                      Apr 23
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END ITEM -->
                <!-- START ITEM -->
                <div class="card social-card share share-other full-width m-b-10 d-flex flex-1 full-height no-border sm-vh-75" data-social="item">
                  <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                  </div>
                  <div class="card-content flex-1" data-pages-bg-image="/wp-content/themes/ibotcrawl/assets/img/social_new.jpg">
                    <ul class="buttons ">
                      <li>
                        <a href="#"><i class="fa fa-expand"></i>
									</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-heart-o"></i>
									</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-description">
                    <p><a href="#">#TBT</a> :D</p>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="time">few seconds ago</div>
                    <ul class="reactions">
                      <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                      </li>
                      <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-header clearfix">
                    <div class="user-pic">
                      <img alt="Avatar" width="33" height="33" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small2x.jpg">
                    </div>
                    <h5>David Nester</h5>
                    <h6>Shared a link on your wall</h6>
                  </div>
                </div>
                <!-- END ITEM -->
              </div>
              <div class="col-lg-6 m-b-10 d-flex">
                <!-- START WIDGET widget_pendingComments.tpl-->
                <div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle align-self-stretch d-flex flex-column">
                  <div class="card-header top-right">
                    <div class="card-controls">
                      <ul>
                        <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="padding-25">
                    <div class="pull-left">
                      <h2 class="text-success no-margin">webarch</h2>
                      <p class="no-margin">Today's sales</p>
                    </div>
                    <h3 class="pull-right semi-bold"><sup>
							<small class="semi-bold">$</small>
						</sup> 102,967
						</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="auto-overflow widget-11-2-table">
                    <table class="table table-condensed table-hover">
                      <tbody>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="padding-25 mt-auto">
                    <p class="small no-margin">
                      <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                      <span class="hint-text ">Show more details of APPLE . INC</span>
                    </p>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <!-- END ROW -->
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-4 md-m-b-10">
                <!-- START WIDGET widget_pendingComments.tpl-->
                <div class=" card no-border  no-margin widget-loader-circle todolist-widget pending-projects-widget">
                  <div class="card-header ">
                    <div class="card-title">
                      <span class="font-montserrat fs-11 all-caps">
                  Recent projects <i class="fa fa-chevron-right"></i>
              </span>
                    </div>
                    <div class="card-controls">
                      <ul>
                        <li><a href="#" class="card-refresh text-black" data-toggle="refresh"><i
        class="card-icon card-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-block">
                    <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                    <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist" data-init-reponsive-tabs="collapse">
                      <li class="nav-item"><a href="#pending" class="active" data-toggle="tab" role="tab" aria-expanded="true">Pending</a>
                      </li>
                      <li class="nav-item"><a href="#completed" data-toggle="tab" role="tab" aria-expanded="false">Completed</a>
                      </li>
                    </ul>
                    <div class="tab-content no-padding">
                      <div class="tab-pane active" id="pending">
                        <div class="p-t-15">
                          <div class="d-flex">
                            <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                            <div class="flex-1 full-width overflow-ellipsis">
                              <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Revox Ltd
                              </p>
                              <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
                            </div>
                          </div>
                          <div class="m-t-15">
                            <p class="hint-text fade small pull-left">71% compleated from total</p>
                            <a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-small m-b-15 m-t-10">
                            <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                            <div class="progress-bar progress-bar-info" style="width:71%"></div>
                            <!-- END BOOTSTRAP PROGRESS -->
                          </div>
                        </div>
                        <div class="p-t-15">
                          <div class="d-flex">
                            <span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
                            <div class="flex-1 full-width overflow-ellipsis">
                              <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Nike Ltd
                              </p>
                              <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                            </div>
                          </div>
                          <div class="m-t-15">
                            <p class="hint-text fade small pull-left">20% compleated from total</p>
                            <a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-small m-b-15 m-t-10">
                            <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                            <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                            <!-- END BOOTSTRAP PROGRESS -->
                          </div>
                        </div>
                        <a href="#" class="btn btn-block m-t-30">See all projects</a>
                      </div>
                      <div class="tab-pane" id="completed">
                        <div class="p-t-15">
                          <div class="d-flex">
                            <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                            <div class="flex-1 full-width overflow-ellipsis">
                              <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Apple Corp
                              </p>
                              <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="m-t-15">
                            <p class="hint-text fade small pull-left">45% compleated from total</p>
                            <a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-small m-b-15 m-t-10">
                            <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                            <div class="progress-bar progress-bar-info" style="width:45%"></div>
                            <!-- END BOOTSTRAP PROGRESS -->
                          </div>
                        </div>
                        <div class="p-t-15">
                          <div class="d-flex">
                            <span class="icon-thumbnail bg-warning-light pull-left text-master">cr</span>
                            <div class="flex-1 full-width overflow-ellipsis">
                              <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Yahoo Inc
                              </p>
                              <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="m-t-25">
                            <p class="hint-text fade small pull-left">20% compleated from total</p>
                            <a href="#" class="pull-right text-master"><i class="pg-more"></i></a>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-small m-b-15 m-t-10">
                            <!-- START BOOTSTRAP PROGRESS (https://getbootstrap.com/components/#progress) -->
                            <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                            <!-- END BOOTSTRAP PROGRESS -->
                          </div>
                        </div>
                        <a href="#" class="btn btn-block m-t-30">See all projects</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <!-- END ROW -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2017 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="" data-target="#quickview-notes" data-toggle="tab">
          <a href="#">Notes</a>
        </li>
        <li data-target="#quickview-alerts" data-toggle="tab">
          <a href="#">Alerts</a>
        </li>
        <li class="active" data-target="#quickview-chat" data-toggle="tab">
          <a href="#">Chat</a>
        </li>
      </ul>
      <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                  </li>
                </ul>
                <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                  </li>
                  <li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
                  </li>
                  <li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
                  </li>
                  <li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2014 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-search"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-master">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-master">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-master">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-master">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-plus"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">ava flores</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/2.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">bella mccoy</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/3.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">bob stephens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/4.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">carole roberts</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/5.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">christopher perez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/6.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">danielle fletcher</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/7.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">david sutton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/8.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">earl hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/9.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">elaine lawrence</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">ellen grant</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/2.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">erik taylor</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/3.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">everett wagner</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/4.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">freddie gomez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/5.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">glen jensen</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/6.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">gwendolyn walker</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/7.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">janet romero</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/8.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">kim martinez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/9.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">lawrence white</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">leroy bell</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/2.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">letitia carr</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/3.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">lucy castro</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/4.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">mae hayes</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/5.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marilyn owens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/6.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marlene cole</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/7.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marsha warren</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/8.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marsha dean</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/9.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">mia diaz</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">noah elliott</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/2.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">phyllis hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/3.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">raul rodriquez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/4.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">rhonda barnett</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/5.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">roberta king</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/6.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">scott armstrong</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/7.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">sebastian austin</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/8.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">sofia davis</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/9.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">terrance young</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/1.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">theodore woods</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/2.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">todd wood</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/3.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">tommy jenkins</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/4.jpg" src="/wp-content/themes/ibotcrawl/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">wilma hicks</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-arrow_left"></i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-master inline action p-r-10 pull-right ">
                    <i class="pg-more"></i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small.jpg" alt="" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small.jpg" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small.jpg" alt="" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small.jpg" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-1 p-t-15">
                    <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                  </div>
                  <div class="col-8 no-padding">
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="/wp-content/themes/ibotcrawl/assets/img/logo.png" alt="logo" data-src="/wp-content/themes/ibotcrawl/assets/img/logo.png" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar.jpg" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ibotcrawl/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ibotcrawl/assets/plugins/classie/classie.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/mapplic/js/hammer.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/js/dashboard.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/wp-content/themes/ibotcrawl/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/wp-content/themes/ibotcrawl/assets/js/dashboard.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
      var timeInterval = 2000;
      // instantiate our graph!
      var graph = new Rickshaw.Graph({
        element: document.getElementById("rickshaw-realtime"),
        renderer: 'line',
        series: new Rickshaw.Series.FixedDuration([{ name: 'Failed', color: '#B1003E' }, { name: 'Total', color: '#006f68' }], undefined, {
          timeInterval: timeInterval,
          maxDataPoints: 25,
        })
      });
      graph.render();
      var ticksTreatment = 'glow';
      var xAxis = new Rickshaw.Graph.Axis.Time( {
        graph: graph,
        ticksTreatment: ticksTreatment,
        timeFixture: new Rickshaw.Fixtures.Time.Local()
      } );
      xAxis.render();
      var yAxis = new Rickshaw.Graph.Axis.Y({
        graph: graph,
        ticksTreatment: ticksTreatment,
        tickFormat: Rickshaw.Fixtures.Number.formatKMBT
      });
      yAxis.render();
      var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) { return new Date(x * 1000).toString() },
        yFormatter: function(y) { return Math.floor(y) }
      });
      var legend = new Rickshaw.Graph.Legend( {
        graph: graph,
        element: document.getElementById('legend')
      } );
      var shelving = new Rickshaw.Graph.Behavior.Series.Toggle( {
        graph: graph,
        legend: legend
      } );
      var order = new Rickshaw.Graph.Behavior.Series.Order( {
        graph: graph,
        legend: legend
      } );
      var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
        graph: graph,
        legend: legend
      } );
      // add some data every so often
      var i = 0;
      var iv = setInterval(function() {
        var json = "{\"Total\": " + Math.floor((Math.random() * 100) + 1) + ", \"Failed\": 0}";
          graph.series.addData(JSON.parse(json));
          graph.render();
      }, timeInterval);
    </script>
  </body>
</html>