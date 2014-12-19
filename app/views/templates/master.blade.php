<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
    {{HTML::style('css/style.css')}}
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
    <div class="body">
        <div class="header">
            <h1>HOME</h1>
            <p >(work out)</p>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>