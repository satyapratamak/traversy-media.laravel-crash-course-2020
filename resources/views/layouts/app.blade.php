<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Posty </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-4">HOME </a>                
            </li>
            <li>
                <a href="" class="p-4">DASHBOARD </a>                
            </li>

            <li>
                <a href="" class="p-4">POST </a>                
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-4">Satya Pratama K</a>                
            </li>
            <li>
                <a href="" class="p-4">LOGIN </a>                
            </li>

            <li>
                <a href="{{ route('register') }}" class="p-4">REGISTER </a>                
            </li>

            <li>
                <a href="" class="p-4">LOGOUT </a>                
            </li>
        </ul>

    </nav>
    @yield('content')


</body>
</html>