<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{config('app.name')}} - {{$title ?? 'loan comparator'}}</title>
        <!-- MDB icon -->
        <link rel="icon" href="{{ asset('mdb/img/favicon.ico') }}" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.min.css') }}">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{ asset('mdb/css/style.css') }}">

        <link href="{{ asset('mdb/css/addons/datatables.min.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <style>
    html,
    body,
    header,
    /* .view {
        height: 100%;
    } */

    .colora {
        color: #74d5de !important;
    }

    .bga {
        background-color: #74d5de !important;
    }

    .bordera {
        border-color: #74d5de !important;
    }

    .colorb {
        color: #D4AF37 !important;
    }

    .borderb {
        border-color: #D4AF37 !important;
    }

    .bgb {
        background-color: #D4AF37 !important;
    }

    .colorc {
        color: #fed385 !important;
    }

    .borderc {
        border-color: #fed385 !important;
    }


    .bgc {
        background-color: #fed385 !important;
    }

    .vc {
        min-height: 70vh !important;
    }

    </style>
    <!-- Main navigation -->
    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bga z-depth-0">
            <div class="container">
                <a class="navbar-brand" href="/"><strong>{{config('app.name')}}</strong></a>
                <div class="mr-1 text-white">
                    Loan comparator
                </div>
            </div>
        </nav>
    </header>
    <!--Main Navigation-->
    @yield('pagestyle')

    <body>

        <main class="vc">
            @yield('body')
        </main>
        <footer class="page-footer text-center font-small mt-0 bga">
            <div class="footer-copyright py-3">
                © 2020 Copyright:
                <a href="#"> {{config('app.name')}} </a>
            </div>
        </footer>

        <!--Main layout-->
        <!-- End your project here-->
        <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
        <!-- Your custom scripts (optional) -->
        <!-- MDBootstrap Datatables  -->
        <script type="text/javascript" src="{{asset('mdb/js/addons/datatables.min.js')}}"></script>
        <!-- MDBootstrap Masonry  -->
        <script type="text/javascript" src="{{asset('mdb/js/addons/masonry.pkgd.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('mdb/js/addons/imagesloaded.pkgd.min.js')}}"></script>
        <!-- Your custom scripts (optional) -->
        <script src="{{ asset('others/dataTables.checkboxes.min.js') }}"></script>
        <script src="{{ asset('highcharts/highcharts.js') }}"></script>
        <script src="{{ asset('highcharts/modules/exporting.js') }}"></script>
        <script src="{{ asset('highcharts/modules/export-data.js') }}"></script>
        <script src="{{ asset('highcharts/modules/accessibility.js') }}"></script>
        <script src="{{ asset('others/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('others/jszip.min.js') }}"></script>
        <script src="{{ asset('others/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('others/pdfmake.min.js') }}"></script>
        <script src="{{ asset('others/vfs_fonts.js') }}"></script>
        <script src="{{ asset('others/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('others/buttons.print.min.js') }}"></script>
        <script src="{{ asset('others/sylvester.min.js') }}"></script>
        </script>
        <script src="{{ asset('others/1.0.0.js') }}"></script>
        @yield('pagescripts')
    </body>

</html>
