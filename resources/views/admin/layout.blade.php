<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/plugins/images/favicon.png">
    <title>{{ $title or 'Admin Panel' }}</title>


    <link rel="stylesheet" href="{{url('/')}}/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Bootstrap Core CSS -->
    <link href="{{url('/')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{url('/')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{url('/')}}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('/')}}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('/')}}/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plugins/bower_components/datatables/jquery.dataTables.min.css" />
    <link href="{{url('/')}}/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />

    <link href="{{url('/')}}/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterange picker plugins css -->
    <link href="{{url('/')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">

    {{-- Switch Style --}}
    <link href="{{url('/')}}/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />


    <!-- color CSS -->
    <link href="{{url('/')}}/css/colors/megna.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@stack('pageRelatedCss')
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view --><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="{{route('admin.dashboard')}}"><b><img src="{{url('/')}}/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>Title</strong></span></a></div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                </ul>
                <!-- This is the message dropdown -->
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{url('/')}}/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">{{Auth::user()->fullname}}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            {{-- <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li> --}}
                            <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li><a href="{{ route('user.index') }}" class="waves-effect"><i class="fa fa-users"></i> <span class="hide-menu">Users </span></a> </li>
                    {{-- <li><a href="#" class="waves-effect"><i class="ti-home"></i> <span class="hide-menu">Vendors </span></a> </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-file-text-o"></i> <span class="hide-menu">Blogs </span></a> </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-comments"></i> <span class="hide-menu">Comments </span></a> </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog"></i> <span class="hide-menu"> Vendor Setting <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li> <a href="#">Cuisine</a></li>
                            <li> <a href="#">Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog"></i> <span class="hide-menu"> Setting <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li> <a href="#">F.A.Q</a> </li>
                            <li> <a href="#">Pages Setting</a> </li>
                            <li> <a href="#">Contact</a> </li>
                            <li> <a href="#">Mobile Banner</a> </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('page_header')</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        @yield('create-button')
                        <ol class="breadcrumb">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            @yield('breadcrumblv2')
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                    @include('shared.custom-error')
                    @yield('content')
                <!-- .row -->
                <!-- .right-sidebar -->
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Loqato </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{url('/')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('/')}}/bootstrap/dist/js/tether.min.js"></script>
    <script src="{{url('/')}}/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{url('/')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="{{url('/')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{url('/')}}/js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="{{url('/')}}/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="{{url('/')}}/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{url('/')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- jQuery peity -->
    <script src="{{url('/')}}/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="{{url('/')}}/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{url('/')}}/js/custom.min.js"></script>
    <script src="{{url('/')}}/js/dashboard1.js"></script>
    <script src="{{url('/')}}/js/jasny-bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('/')}}/plugins/bower_components/moment/moment.js"></script>

    <script src="{{url('/')}}/plugins/bower_components/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <!--Style Switcher -->
    <script src="{{url('/')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="{{url('/')}}/plugins/bower_components/switchery/dist/switchery.min.js"></script>
    <script src="{{url('/')}}/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>

    <script src="{{url('/')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{url('/')}}/plugins/bower_components/tinymce/tinymce.min.js"></script>
    <!-- Google Maps -->
    <!-- <script src="{{url('/')}}/plugins/bower_components/gmaps/gmaps.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/plugins/bower_components/gmaps/jquery.gmaps.js" type="text/javascript"></script> -->

    <script type="text/javascript">
      function deleteConfirmation(url) {
          $('#delete_form').attr('action', url);
      }
    </script>
    @stack('pageRelatedJs');
</body>

</html>