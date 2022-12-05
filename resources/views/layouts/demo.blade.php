<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('inc.head')
</head>

<body>
    <header id="header" class="u-header u-header-left-aligned-nav">
        @extends('inc.header')
    </header>

    <main id="content" role="main">
        @yield('content')
    </main>
    @extends('inc.footer');
</body>

</html>
