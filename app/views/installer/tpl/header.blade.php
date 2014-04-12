<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Title of the page')</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{ HTML::style('assets/css/styles.css') }}
    <!--[if lt IE 10]>{{ HTML::style('css/ie.css') }} <![endif]-->
    @yield('styles')
    @yield('top_script')
</head>
<body>