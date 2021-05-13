<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestCX</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
    <body class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>

