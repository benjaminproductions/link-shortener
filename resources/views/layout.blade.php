<html>
<head>
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <title>@yield('title') - Link Shortener</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Test</a>
        <a href="#">Test2</a>
    </div>

    @yield('content')
</body>
</html>