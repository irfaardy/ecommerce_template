<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        @include('layouts.partials.css')
        </head>
    <body class="app flex-row align-items-center">
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
@include('layouts.partials.js')