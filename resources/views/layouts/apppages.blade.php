<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>paulettecomics</title>

    <!-- MDB icon -->
    <link rel="icon" href="img/Paulette Comics Logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,600;0,700;1,300&display=swap" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/css/mycss.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}



</head>
<body>
    <header class="toperbg">
        @include('inc.header')
        @include('inc.messages')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @include('inc.footer')
    </footer>
</body>
<script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('mdb/js/links.js')}}"></script>
<script type="text/javascript" src="{{ asset('mdb/js/read-more.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('mdb/js/jquery.searchable-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('mdb/js/searchrun.js')}}"></script>
<script type="text/javascript" src="{{ asset('mdb/js/others.js')}}"></script>
<script type="text/javascript" src="{{ asset('mdb/js/rater.js')}}"></script>
</html>
