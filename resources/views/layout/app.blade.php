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
    .view {
        height: 100%;
    }

    </style>

    @yield('pagestyle')

    <body>

        <main>
            @yield('body')
        </main>
        <footer class="page-footer text-center font-small mt-0">
            <div class="footer-copyright py-3">
                © 2020 Copyright:
                <a href="#"> {{config('app.name')}} </a>
            </div>
        </footer>

        <!--Main layout-->
        <!-- End your project here-->

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
        <script type="text/javascript">
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('detailsform');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();


        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            new WOW().init();
            // Material Select Initialization
            $(document).ready(function() {
                // $('.mdb-select').materialSelect();
            });


        });

        function addCommas(x) {
            //remove commas
            retVal = x ? parseFloat(x.replace(/,/g, '')) : 0;

            //apply formatting
            return retVal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        </script>

        @yield('pagescripts')
    </body>

</html>
