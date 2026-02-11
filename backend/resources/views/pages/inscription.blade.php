<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SportEquip Advisor</title>
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
                SportEquip Advisor vous aide à choisir le matériel sportif
                adapté à votre pratique et à votre niveau.
            </p>

            <img src="../images/ballon.jpg" alt="Matériel sportif" style="max-width:100%; height:auto; display:block; margin-top:20px;">

          
        </section>

        <section class="right">
            <h2>Inscription</h2>

            <form>

                <input type="text" name="fullname" placeholder="Nom complet" required>
                <input type="number" name="age" placeholder="Âge" min="1" required>
                <input type="number" name="weight" placeholder="Poids (kg)" min="1" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <select>
                    <option>Choisissez un sport</option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Tennis</option>
                    <option>Running</option>
                    <option>Musculation</option>
                    <option>Natation</option>
                </select>

                <select>
                    <option>Niveau</option>
                    <option>Débutant</option>
                    <option>Moyen</option>
                    <option>Expert</option>
                </select>

                <button type="submit">Inscription</button>
            </form>

            <p>Déjà inscrit ? <a href="connexion.blade.php">Se connecter</a></p>
        </section>

    </main>

    <footer>
        <p>© 2026 - SportEquip Advisor</p>
    </footer>

</body>
</html>
