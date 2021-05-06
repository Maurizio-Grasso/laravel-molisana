<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Font (Open Sans & Antonio --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    
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