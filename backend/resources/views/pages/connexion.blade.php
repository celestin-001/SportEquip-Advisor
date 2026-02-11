<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SportEquip Advisor - Connexion</title>
    <link rel="stylesheet" href="../../../public/css/style1.css">
</head>
<body>

    <header>
        <h1>SportEquip Advisor</h1>
    </header>

    <main class="container">

        <section class="left">
            <h2>Bienvenue sur notre site</h2>
            <p>
                Veuillez entrer vos identifiants
            </p>

            <img src="../images/air.webp" alt="Matériel sportif" style="max-width:100%; height:auto; display:block; margin-top:20px;">
        </section>

        <section class="right">
            <h2>Connexion</h2>

            <form action="connexion_traitement.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Se connecter</button>
            </form>

            <p>Pas encore inscrit ? <a href="inscription.blade.php">S'inscrire</a></p>
        </section>

    </main>

    <footer>
        <p>© 2026 - SportEquip Advisor</p>
    </footer>

</body>
</html>
