<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style --}}
    <link rel="stylesheet" href=" {{asset('css/master.css') }} ">

    <title>
        @yield('title') | La Molisana
    </title>
</head>
<body>

    @include('layout.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layout.partials.footer')
    
</body>
</html>