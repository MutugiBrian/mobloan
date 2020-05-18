<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{$site->sitename ?? config('app.name')}} - {{$title ?? 'loan comparator'}}</title>
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
    .view {
        height: 100%;
    }

    </style>
    <!-- Main navigation -->
    <header>

        <!-- Full Page Intro -->
        <div class="view grey lighten-3">
            <!-- Mask & flexbox options-->
            <div class="mask">
                <!-- Content -->
                <div class="container h-100">
                    <!--Grid row-->
                    <div class="row align-items-center h-100 p-5 p-sm-0">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <h1 class="mb-4">Find the <span class="cyan-text">most friendly</span><br><span
                                    class="text-warning">loan plan</span> for you.</h1>
                            <p class="mb-4 pb-2 dark-grey-text">
                                At MobLoan, we give you a list of lenders who offer the loan matching your needs, then
                                you compare and choose to borrow from the lender who you find having the most appealing
                                plan.</p>
                            <a href="/loans" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0"><i
                                    class="fas fa-clone left"></i> COMPARE
                                LOANS</a>
                            <a href="/register" type="button" class="btn btn-outline-grey btn-rounded btn-md"><i
                                    class="fas fa-briefcase mr-1"></i> OFFER
                                LOANS</a>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <img src="https://mdbootstrap.com/img/illustrations/hiker-man-colour.svg" alt=""
                                class="img-fluid">
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->

    </header>
    <!-- Main navigation -->
    <!-- jQuery -->
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

</html>
