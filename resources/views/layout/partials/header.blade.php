<header class="header">
    
    <div class="header__logo-box">
        <img class="header__logo" src=" {{ asset('img/logo.png') }}" alt="">
    </div>

    <nav class="header__nav">
        <ul>
            <li class="header__menu-item"><a href="  {{ route('pagina-home')}}  ">Home</a></li>
            <li class="header__menu-item"><a href="  {{ route('pagina-prodotti')}}  ">Prodotti</a></li>
            <li class="header__menu-item"><a href="  {{ route('pagina-news')}}  ">News</a></li>
        </ul>
    </nav>

</header>