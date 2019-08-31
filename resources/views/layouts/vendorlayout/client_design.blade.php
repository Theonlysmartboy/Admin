<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/backend_images/icons/apple-icon-57x57.png')}}"/>
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/backend_images/icons/apple-icon-60x60.png')}}"/>
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/backend_images/icons/apple-icon-72x72.png')}}"/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/backend_images/icons/apple-icon-76x76.png')}}"/>
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/backend_images/icons/apple-icon-114x114.png')}}"/>
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/backend_images/icons/apple-icon-120x120.png')}}"/>
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/backend_images/icons/apple-icon-144x144.png')}}"/>
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/backend_images/icons/apple-icon-152x152.png')}}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/backend_images/icons/apple-icon-180x180.png')}}"/>
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/backend_images/icons/android-icon-192x192.png')}}"/>
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/backend_images/icons/favicon-32x32.png')}}"/>
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/backend_images/icons/favicon-96x96.png')}}"/>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/backend_images/icons/favicon-16x16.png')}}"/>
        <link rel="manifest" href="{{asset('images/backend_images/icons/manifest.json')}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="msapplication-TileImage" content="{{asset('images/backend_images/icons/ms-icon-144x144.png')}}"/>
        <meta name="theme-color" content="#ffffff"/>
        <title>Booking | Client dashboard</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/datepicker.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/uniform.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/select2.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-wysihtml5.css')}}" />
        <link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>
    </head>
    <body>
        <!--Header part-->
        @include('layouts.clientLayout.client_header')
        <!--End Header part-->
        <!--Sidebar part-->
        @include('layouts.clientLayout.client_sidebar')
        <!--End Sidebar part-->
        <!--main-container-part-->
        @yield('content')
        <!--end-main-container-part-->
        <!--Footer part-->
        @include('layouts.clientLayout.client_footer')
        <!--End Footer part-->
        <!--Jquery-->

        <script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
        <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
        <script src="{{asset('js/backend_js/bootstrap-datepicker.js')}}"></script>
       <script src="{{asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/backend_js/masked.js')}}"></script> 
        <script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script> 
        <script src="{{asset('js/backend_js/select2.min.js')}}"></script> 
        <script src="{{asset('js/backend_js/matrix.js')}}"></script> 
        <script src="{{asset('js/backend_js/wysihtml5-0.3.0.js')}}"></script> 
        <script src="{{asset('js/backend_js/jquery.peity.min.js')}}"></script> 
        <script src="{{asset('js/backend_js/bootstrap-wysihtml5.js')}}"></script> 
        <script type="text/javascript">$('.textarea_editor').wysihtml5();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script type="text/javascript">
// This function is called from the pop-up menus to transfer to
// a different page. Ignore if the value returned is a null string:
function goPage(newURL) {

    // if url is empty, skip the menu dividers and reset the menu selection to default
    if (newURL != "") {

        // if url is "-", it is this page -- reset the menu:
        if (newURL == "-") {
            resetMenu();
        }
        // else, send page to designated URL            
        else {
            document.location.href = newURL;
        }
    }
}

// resets the menu selection upon entry to this page:
function resetMenu() {
    document.gomenu.selector.selectedIndex = 2;
}
        </script>
    </body>
</html>