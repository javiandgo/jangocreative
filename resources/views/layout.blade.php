<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poryecto web</title>
</head>
<body>
    <div class="container">
        <p>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('blog') }}">Blog</a>
        </p>
    
        <hr>
    
        @yield('content')

    </div>
</body>
</html>