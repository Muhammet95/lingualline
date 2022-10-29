<!DOCTYPE html>

<html lang="en">
<head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
{{--    <meta name="description" content=@yield('description')>--}}
{{--    <meta name="keyword" content=@yield('keyword')>--}}
    <title>Lingualline</title>
    <link rel="icon" type="image/x-icon" href="{{url('assets/img/Logo.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <style>
        .project-background {
            background: url("{{asset('assets/img/background.png')}}");
            background-size: contain;
        }
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>


<body class="project-background">
    <div class="p-0">
        @include('layouts.header')
        @yield('index')
    </div>
    @include('layouts.footer')
</body>
</html>
