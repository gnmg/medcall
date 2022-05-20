<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-226956319-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-226956319-1');
</script>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MedCall</title>

    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>


    <!-- <script src="/js/app.js" defer></script> -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link href="{{ asset('css/timepicker.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js/timepicker.min.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/623d6bfc2abe5b455fc18f6f/1fuvurkvm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->


    <script type="text/javascript" src="https://static.leaddyno.com/js"></script>
    <script>
    LeadDyno.key = "a7d557dba0387e907b3f5359b186b2d26eb294cd";
    LeadDyno.recordVisit();
    LeadDyno.autoWatch();
    </script>
  

    <style>
    .table {
        display: table;
        text-align: center;
        width: 60%;
        margin: 10% auto 0;
        border-collapse: separate;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    .table_row {
        display: table-row;
    }

    .theader {
        display: table-row;
    }

    .table_header {
        display: table-cell;
        border-bottom: #ccc 1px solid;
        border-top: #ccc 1px solid;
        background: #bdbdbd;
        color: #e5e5e5;
        padding-top: 10px;
        padding-bottom: 10px;
        font-weight: 700;
    }

    .table_header:first-child {
        border-left: #ccc 1px solid;
        border-top-left-radius: 5px;
    }

    .table_header:last-child {
        border-right: #ccc 1px solid;
        border-top-right-radius: 5px;
    }

    .table_small {
        display: table-cell;
    }

    .table_row>.table_small>.table_cell:nth-child(odd) {
        display: none;
        background: white;
        color: #000000;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .table_row>.table_small>.table_cell {
        padding-top: 3px;
        padding-bottom: 3px;
        background: white;
        color: #5b5b5b;
        border-bottom: #ccc 1px solid;
    }

    .table_row>.table_small:first-child>.table_cell {
        border-left: #ccc 1px solid;
    }

    .table_row>.table_small:last-child>.table_cell {
        border-right: #ccc 1px solid;
    }

    .table_row:last-child>.table_small:last-child>.table_cell:last-child {
        border-bottom-right-radius: 5px;
    }

    .table_row:last-child>.table_small:first-child>.table_cell:last-child {
        border-bottom-left-radius: 5px;
    }

    .table_row:nth-child(2n+3) {
        background: #e9e9e9;
    }

    @media screen and (max-width: 900px) {
        .table {
            width: 90%;
        }
    }

    @media screen and (min-width: 650px) {
        .hide-table {
            display: none;
        }
    }

    @media screen and (max-width: 650px) {
        .vis {
            visibility: hidden;
            text-align: center;
        }

        .vis-text {
            margin-left: 30px;
        }

        .hide {
            display: none;
        }

        .table {
            display: block;
        }

        .table_row:nth-child(2n+3) {
            background: none;
        }

        .theader {
            display: none;
        }

        .table_row>.table_small>.table_cell:nth-child(odd) {
            display: table-cell;
            width: 50%;
        }

        .table_cell {
            display: table-cell;
            width: 50%;
            padding-left: 30px
        }

        .table_row {
            display: table;
            width: 100%;
            border-collapse: separate;
            padding-bottom: 20px;
            margin: 5% auto 0;
            text-align: left;
        }

        .table_small {
            display: table-row;
        }

        .table_row>.table_small:first-child>.table_cell:last-child {
            border-left: none;
        }

        .table_row>.table_small>.table_cell:first-child {
            border-left: #ccc 1px solid;
        }

        .table_row>.table_small:first-child>.table_cell:first-child {
            border-top-left-radius: 5px;
            border-top: #ccc 1px solid;
        }

        .table_row>.table_small:first-child>.table_cell:last-child {
            border-top-right-radius: 5px;
            border-top: #ccc 1px solid;
        }

        .table_row>.table_small:last-child>.table_cell:first-child {
            border-right: none;
        }

        .table_row>.table_small>.table_cell:last-child {
            border-right: #ccc 1px solid;
        }

        .table_row>.table_small:last-child>.table_cell:first-child {
            border-bottom-left-radius: 5px;
        }

        .table_row>.table_small:last-child>.table_cell:last-child {
            border-bottom-right-radius: 5px;
        }
    }
    </style>

</head>

<body class="min-h-screen bg-gray-100 font-body">
    
    <div id="app">

        <div class="flex flex-col md:flex-row">

            @include('includes.sidebar')

            <div class="w-full md:flex-1">
                <!-- <nav class="justify-end hidden h-16 p-4 pr-16 mb-10 bg-white shadow-md md:flex">
                    <a href="/" class="block mt-0 mr-10 text-teal-600 lg:inline-block lg:mt-0">
                    {{ __('lang.top') }}
                    </a>
                    <a href="/contact" class="block mt-0 mr-10 text-teal-600 lg:inline-block lg:mt-0">
                    {{ __('lang.contact_us') }}
                    </a>
                    <div class="block mt-0 mr-10 text-teal-600 dropdown-menu dropdown-menu-right lg:inline-block lg:mt-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('lang.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav> -->
                <main>
                    <!-- Replace with your content -->

                    @yield('content')

                    <!-- /End replace -->
                </main>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {
        if ($('.bs-timepicker').length > 0) {
            $('.bs-timepicker').timepicker();
        }
    });
    </script>
</body>

</html>