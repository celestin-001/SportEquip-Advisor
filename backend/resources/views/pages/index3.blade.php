<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SportSelect</title>
    <link rel="stylesheet" href="css/style3.css">
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

    
</header>


<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1>Trouvez l’équipement parfait</h1>
        <p>Pour votre sport et votre niveau</p>

    </div>
</section>

<!-- PRODUITS + FILTRES -->
<section class="main-content">

    <!-- FILTRES VERTICAUX -->
    <aside class="filters">
        <h3>Filtres</h3>

        <div class="filter-block">
            <h4>Sport</h4>
            <label><input type="checkbox"> Running</label>
            <label><input type="checkbox"> Tennis</label>
            <label><input type="checkbox"> Vélo</label>
        </div>

        <div class="filter-block">
            <h4>Niveau</h4>
            <label><input type="checkbox"> Débutant</label>
            <label><input type="checkbox"> Intermédiaire</label>
            <label><input type="checkbox"> Avancé</label>
        </div>

        <div class="filter-block">
            <h4>Prix</h4>
        
            <div class="price-values">
                <span id="min-value">20 €</span>
                —
                <span id="max-value">200 €</span>
            </div>
        
            <div class="price-range">
                <label for="prix">Prix</label>
                <input type="range" id="prix" name="prix" min="0" max="200" value="20">
            </div>
        </div>
        

        <script>
            const range = document.getElementById('prix');
            const minValue = document.getElementById('min-value');
            
            range.addEventListener('input', () => {
                minValue.textContent = range.value + " €";
            });
            </script>
            
            
        
        
        
    </aside>

    <!-- PRODUITS -->
    <div class="products">

        <div class="card">
            <div class="image"></div>
            <h3>Chaussures Running Pro</h3>
            <p class="price">89,99 €</p>
            <button>Voir le produit</button>
        </div>

        <div class="card">
            <div class="image"></div>
            <h3>Raquette Tennis Expert</h3>
            <p class="price">119,99 €</p>
            <button>Voir le produit</button>
        </div>

        <div class="card">
            <div class="image"></div>
            <h3>Vélo Route Performance</h3>
            <p class="price">1299 €</p>
            <button>Voir le produit</button>
        </div>


        <div class="card">
            <div class="image"></div>
            <h3>Vélo Route Performance</h3>
            <p class="price">1299 €</p>
            <button>Voir le produit</button>
        </div>


        <div class="card">
            <div class="image"></div>
            <h3>Vélo Route Performance</h3>
            <p class="price">1299 €</p>
            <button>Voir le produit</button>
        </div>


        <div class="card">
            <div class="image"></div>
            <h3>Vélo Route Performance</h3>
            <p class="price">1299 €</p>
            <button>Voir le produit</button>
        </div>


    </div>

</section>

<footer>
    <p>© 2026 - SportEquip Advisor</p>
</footer>

</body>
</html>
