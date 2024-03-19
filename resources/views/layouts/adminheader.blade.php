<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogr Admin Site</title>

{{--    favicon--}}
    <link href="{{asset('assets/img/illu/favicon.png')}}" rel="icon" type="image/png" sizes="16x16" />
    <!--    tailwind css1-->
{{--    <link href="./tailwind.css" rel="stylesheet" type="text/css" />--}}
    @vite('resources/css/app.css')

    <!--    fontawesome css1-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css" />

{{--    extra css--}}
    @yield('css')
</head>

