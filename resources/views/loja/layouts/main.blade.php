<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/5cabf60afa.js" crossorigin="anonymous"></script>
</head>
<body> 
    <header>
        <nav class="navbar0"> 
            <ul id="navbar">
                <li class="button-start"><a href="/produtos" class="nav-link"><img src="img/adaptistore.png" class="logo" alt="logo adaptistore"></a></li>
            </ul>
            <div class="buscar">
                <form action="{{ route('produtos.index') }}" method="GET">
                    @csrf
                    <input type="text" id="search" name="search" class="form-control" placeholder="Busque um Produto...">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul id="navbar">
                <li class="button-add"><a href="{{ route('dashboard') }}" class="nav-add"><i style="color: white" class="fa-solid fa-user"></i></a></li>
            </ul>

        </nav>
    </header>
    <main>
        <div class="espace"></div>
            @if ($search)
                <div style="text-align: center; padding-bottom: 10px">
                    <h3 style="margin-left: 20px; margin-top: 10px">Buscando por {{ $search }}:</h3>
                </div>    
            @endif        
        @yield('content')
    </main>
    <footer>
        <p class="c-footer__text">Desenvolvido por <strong>Guilherme Cosme</strong></p>
        <div>
            <a href="https://www.instagram.com/guicosme1/"><i style="color:rgb(255, 255, 255);" class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/guicpd"><i style="color:rgb(255, 255, 255);" class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/guilherme-cosme-1620bb219/"><i style="color:rgb(255, 255, 255);" class="fab fa-linkedin"></i></a>
            <a href="https://github.com/guicosme1"><i style="color:rgb(255, 255, 255);" class="fab fa-github"></i></a>
        </div>

    </footer>
</body>
</html>