<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('inc.head')
</head>

<body>
    <header id="header" class="u-header u-header-left-aligned-nav">
        @include('inc.header')
    </header>
    @yield('content')
    @include('inc.footer');
</body>

</html>
