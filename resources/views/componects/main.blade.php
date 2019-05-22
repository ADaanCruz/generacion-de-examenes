<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
@include('componects.global_css')
<body>
<div class="container">
@include('componects.header')
@include('componects.navbar')

@yield('container')
</div>
</body>
@include('componects.global_js')
</html>
