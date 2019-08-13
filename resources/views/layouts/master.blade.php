<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Sample Form</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Phoenixcoded">
        <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="Phoenixcoded">
        <!-- Favicon icon -->
        <link rel="icon" href="{{asset('public/assets/images/favicon.ico" type="image/x-icon')}}">
        <!-- Google font-->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet')}}">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/css/bootstrap.min.css')}}">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
        <!-- flag icon framework css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">
        <!-- Menu-Search css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/menu-search/css/component.css')}}">
        <!-- Horizontal-Timeline css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/dashboard/horizontal-timeline/css/style.css')}}">
        <!-- amchart css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/dashboard/amchart/css/amchart.css')}}">
        <!-- flag icon framework css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <!--color css-->


        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/linearicons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
        
        <!-- ckeditor -->
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <!-- <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script> -->

    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <!-- Menu header start -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>
                            <a href="{{route('home')}}">
                                <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <div>
                                <ul class="nav-left">
                                    <li>
                                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                    </li>

                                </ul>
                                <ul class="nav-right">

                                    <li class="header-notification">
                                        <a href="#!">
                                            <i class="ti-bell"></i>
                                            <span class="badge">1</span>
                                        </a>
                                        <ul class="show-notification">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">John Doe</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-notification">
                                        <a href="#!" class="displayChatbox">
                                            <i class="ti-comments"></i>
                                            <span class="badge">2</span>
                                        </a>
                                    </li>
                                    <li class="user-profile header-notification">
                                        <a href="#!">
                                            <img src="assets/images/user.png" alt="User-Profile-Image">
                                            <span>John Doe</span>
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification profile-notification">
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-settings"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ti-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="ti-email"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html">
                                                    <i class="ti-lock"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-layout-sidebar-left"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar" pcoded-header-position="relative">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="">
                                    <div class="main-menu-header">
                                        <img class="img-40" src="assets/images/user.png" alt="User-Profile-Image">
                                        <div class="user-details">
                                            <span>John Doe</span>
                                            <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="main-menu-content">
                                        <ul>
                                            <li class="more-details">
                                                <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                                <a href="#!"><i class="ti-settings"></i>Settings</a>
                                                <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables" menu-title-theme="theme5">รายการ</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">รายการเอกสาร</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{route('inbox.index')}}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">เอกสารที่ส่ง</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">เอกสารที่อนุมัติแล้ว</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="#">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">เอกสารที่ไม่อนุมัติ</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ckediter.index')}}">
                                            <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.foo-table.main">สร้างเอกสาร</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    </ul>
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">

                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h2>สวัสดีครับ / ค่ะ</h2>
                                            </div>

                                        </div>
                                        <div class="page-body">
                                        
                                            @yield('content')

                                        </div>
                                    </div>

                                    <div id="styleSelector"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Required Jqurey -->
        <script type="text/javascript" src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
        <script src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/popper.js/js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>
        <!-- classie js -->
        <script type="text/javascript" src="{{asset('bower_components/classie/js/classie.js')}}"></script>
        <!-- Rickshow Chart js -->
        <script src="{{asset('bower_components/d3/js/d3.js')}}"></script>
        <script src="{{asset('bower_components/rickshaw/js/rickshaw.js')}}"></script>
        <!-- Morris Chart js -->
        <script src="{{asset('bower_components/raphael/js/raphael.min.js')}}"></script>
        <script src="{{asset('bower_components/morris.js/js/morris.js')}}"></script>
        <!-- Horizontal-Timeline js -->
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/horizontal-timeline/js/main.js')}}"></script>
        <!-- amchart js -->
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/amcharts.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/serial.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/light.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/custom-amchart.js')}}"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

        <!-- pcmenu js -->
        <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
        <script src="{{asset('assets/js/demo-12.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>

        @yield('footer')
        

    </body>

</html>

