<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MedEval</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{asset('dist/img/logo_m.png')}}" />
        
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">

   


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.header')

        @include('layouts.sidebar')

        @yield('content')

        @include('layouts.footer')
    </div>
    
</body>
</html>