<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UNHLS iventory management system</title>

    <!-- Styles -->
    <link rel="icon" href="{!! asset('public/coat of arms.png') !!}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/toastr.min.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">


    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
</head>
<body id="app-layout" class="side_nav_hover">
        @if (Auth::check())
        {

        <!-- header -->
            <header class="navbar navbar-fixed-top" role="banner"}>
          <div class="container-fluid">
                    <div class="navbar-header">
                        <h4><strong>UNHLS Inventory Management System</strong></h4>
                    </div>
                <ul class="nav navbar-nav navbar-right" style="color:blue">
                  <li><a href="{{ url('/home') }}"><span class="ion-home"></span> Home :: </a></li>
                  <li><a href="#"><span class="ion-loop"></span> Refresh :: </a></li>
                  <li><a href="{{ url('/logout') }}"><span class="ion-log-out"></span> Logout :: {{{isset (Auth::user()->username) ? Auth::user()->username : Auth::user()->username}}}</a></li>

                </ul>
                </div>
            </header>
        <!-- end header -->
        }
        @endif

        <!-- main content -->
            <div id="main_wrapper">
            <div class="page_content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @yield("content")
                        </div>
                    </div>
                </div>
            </div>
            </div>

        @if (Auth::check())
        {
            <nav id="side_nav">
            <ul>
                <li>
                    <a href="{{ url('home') }}"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
                </li>

                <li>
                    <a href="{{ url('#') }}"><span class="ion-plus-circled"></span> <span class="nav_title">Capture new stock</span></a>
                </li>

                <li class="nav_trigger">
                    <a href="#">
                        <span class="icon ion-ios-paper-outline"></span>
                        <span class="nav_title">Purchase Order Forms</span>
                    </a>
                    <div class="sub_panel" style="left: -220px;">
                        <div class="side_inner">
                            <ul>
                                <li><a href="maul"><span class="side_icon ion-ios7-star-outline"></span> MAUL</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span>Mildmay</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span>NMS</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav_trigger">
                    <a href="#">
                        <span class="ion-stats-bars"></span>
                        <span class="nav_title">Reports</span>
                    </a>
                    <div class="sub_panel" style="left: -220px;">
                        <div class="side_inner">
                            <ul>
                                <li><a href="#"><span class="side_icon ion-ios7-star-outline"></span> Consumption Data</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span> Machine Utilization</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span> Actual Tests Done</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span> Actual Results Released</a></li>
                                <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span> Kits Vs. Patients</a></li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav_trigger">
                  <a href="#">
                    <span class="ion-clipboard"></span>
                    <span class="nav_title">Vouchers & Forms</span>
                  </a>
                  <div class="sub_panel" style="left: -220px;">
                    <div class="side_inner">
                      <ul>
                        <li><a href="requisition"><span class="side_icon ion-ios7-calendar-outline"></span> Stores Requisition & Issue Voucher</a> </li>
                        <li><a href="goods"><span class="side_icon ion-ios7-calendar-outline"></span> Goods Received Note</a> </li>
                        <li><a href="#"><span class="side_icon ion-ios7-calendar-outline"></span> Stock Card</a> </li>
                      </ul>
                    </div>
                  </div>
                  </li>

                  <li class="nav_trigger">
                    <a href="#">
                        <span class="ion-person-stalker"></span>
                        <span class="nav_title">Users & Roles</span>
                    </a>
                    <div class="sub_panel" style="left: -220px;">
                        <div class="side_inner">
                            <ul>
                                <li><a href="{{ url('/user') }}"><span class="side_icon ion-ios7-star-outline"></span> Manage Users</a></li>
                                <li><a href="{{ url('/role') }}"><span class="side_icon ion-ios7-star-outline"></span> Manage Roles</a></li>
                                </ul>
                        </div>
                    </div>
                </li>

            </ul>
            </nav>
        @endif


    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/validator.min.js') }} "></script>
    <script src="{{ URL::asset('js/datatables.min.js') }}" ></script>

   <script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.min.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('js/tinynav.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('js/perfect-scrollbar-0.4.8.with-mousewheel.min.js') }} "></script>
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }} "></script>
    <script src="{{ URL::asset('js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="{{ URL::asset('js/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/moment.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-datepicker.min.js') }}"></script>

<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif

   //activate select2
    $('select').select2({
        allowClear: false,
        minimumResultsForSearch: -1,
        placeholder: function(){
            $(this).data('placeholder');
        }
    });

</script>


@yield('page-js-script')
</body>
</html>
