<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SportSelect</title>
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <h1>SportEquip Advisor</h1>

    <div class="right-nav">
        <div class="user-icon">
            <i class="fa-solid fa-user"></i>
        </div>
        <span class="login-text">Se connecter</span>
    </div>
</header>



<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1>Trouvez l’équipement parfait</h1>
        <p>Pour votre sport et votre niveau</p>

    </div>
</section>

        @yield('content')   

<footer>
    <p>© 2026 - SportEquip Advisor</p>
</footer>

</body>
</html>

