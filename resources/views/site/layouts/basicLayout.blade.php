<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/baseStyle.css') }}" rel="stylesheet">
</head>

<body>
    @include('site.layouts._partials.headerLayout')
    @yield('content')
</body>

</html>