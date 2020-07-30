<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="zeroluck theme">
    <meta name="author" content="zeroluck">
    <meta name="keywords" content="zeroluck13">

    <!-- Title Page-->
    <title> @yield('title') </title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{  asset('css/theme.css') }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        
        @include('master.navmaster.nav')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>     
            </div>
            @yield('btn')
           
            <div class="footer col-md-12 col-sm-12 col-xs-12">
                <div class="row"> 
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="p_t">
                            <a href="#">Policies</a> |
                            <a href="#">Team</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <p class="copyright">
                           All rights reserved, copyright UCSMTLA product 2018.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="feedback">
                            <a href="#">About</a> |
                            <a href="#">Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <script src="{{ asset('js/jquery.js') }}"> </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/jquery.me.js') }}"></script>
    <script src="{{ asset('js/jquery.paginate.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function()    {
        $('#acc').paginate({itemsPerPage: 6});
        $('#gift').paginate({itemsPerPage: 6});
    });
</script>

</body>

</html>
<!-- end document-->