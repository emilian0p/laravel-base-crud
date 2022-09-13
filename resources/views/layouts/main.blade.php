<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Base Crude</title>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('comics.index') }}">I nostri fumetti</a></li>
            </ul>
        </nav>
    </header>

    @yield('main_content')
</body>
</html>