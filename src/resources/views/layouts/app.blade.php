<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="Practice" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
</head>
<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">FashionablyLate</h1>
            @yield('link')
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>