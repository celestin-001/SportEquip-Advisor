<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Compagnon d'Équipement</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <header class="header">
        <div class="logo">SportEquip Advisor</div>
        <nav class="nav">
            <a href="{{ route('register') }}" class="btn"> Se connecter ou S’inscrire</a>
        </nav>
    </header>

    <main>

        @yield('content')   

    </main>


    <footer class="footer">
        <p>Équipe Agile SportEquip</p>
        <p>Mentions légales – Projet étudiant – Données fictives</p>
    </footer>

</body>
</html>
