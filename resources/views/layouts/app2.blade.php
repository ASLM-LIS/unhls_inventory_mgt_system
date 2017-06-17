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
