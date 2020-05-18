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

        @if(isset($navbar) && $navbar == 'admin')
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bga blue-gradient z-depth-0">
            <a class="navbar-brand" href="/admin"><strong>{{$site->sitename ?? config('app.name')}}</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-sm-right" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item 
                    @if($pagename == 'admin home')
                        active
                    @endif
                    ">
                        <a class="nav-link" href="/admin">Lenders <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item 
                    @if($pagename == 'manageloans')
                        active
                    @endif
                    ">
                        <a class="nav-link" href="/manageloans">Loans</a>
                    </li>
                    <li class="nav-item 
                    @if($pagename == 'settings')
                        active
                    @endif
                    ">
                        <a class="nav-link" href="/settings">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
        @else
        <nav class="navbar navbar-expand-lg 
        @if(isset($navbar) && $navbar == 'transparent')
        cloudy-knoxville-gradient
        @else
        navbar-dark bga blue-gradient
        @endif
         z-depth-0 ">
            <div class="container mx-0" style="width:100% !important;max-width: 1840px !important;">
                <a class="navbar-brand" href="/"><strong>{{$site->sitename ?? config('app.name')}}</strong></a>
                @if(isset($pagename))
                <div class="mr-1 
                @if(isset($navbar) && $navbar == 'transparent')
                text-primary
                @else
                text-white
                @endif
                ">
                    {{$pagename}}

                </div>
                @else
                <div class="mr-1 text-white">
                    Loan comparator
                </div>
                @endif

            </div>
        </nav>
        @endif
    </header>
    <!--Main Navigation-->
    @yield('pagestyle')

    <body>

        <main class="vc cloudy-knoxville-gradient py-5">
            @include('messages')
            @yield('body')
        </main>
        @if(isset($navbar) && $navbar == 'transparent')
        @else
        <footer class="page-footer text-center font-small mt-0 bga blue-gradient">
            <div class="footer-copyright py-3">
                © 2020 Copyright:
                <a href="#"> {{$site->sitename ?? config('app.name')}} </a>
            </div>
        </footer>

        @endif

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
        <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $('.mdb-select').materialSelect();
        });
        </script>
        @yield('pagescripts')
    </body>

</html>
