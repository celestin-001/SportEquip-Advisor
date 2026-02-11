@extends('layouts.menu')

@section('title', 'Geek')

@section('content')

<!-- PRODUITS + FILTRES -->
<section class="main-content">

    <!-- FILTRES VERTICAUX -->
    <aside class="filters">
        <h3>Filtres</h3>

        {{-- <div class="filter-block">
            <h4>Sport</h4>
            <label><input type="checkbox"> Running</label>
            <label><input type="checkbox"> Tennis</label>
            <label><input type="checkbox"> Vélo</label>
        </div> --}}
        <div class="filter-block">
            <h4>Sport</h4>
            <div id="sports-container">
                <!-- Sports générés par JS -->
            </div>
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
    <div class="products" id="products-container">
            {{-- @foreach($products as $product)
                <div class="card">
                    <img class="image" src="{{ asset('images/' . $product->image) }}" alt="{{ $product->nom }}">

                    <img class="image" src="{{ asset('images/chaussure.webp') }}" alt="">
                    <h3>{{ $product->nom }}</h3>
                    <p class="price">{{ $product->prix }} €</p>
                    <button>Voir le produit</button>
                </div>
            @endforeach --}}

    </div>

</section>


<script>

    document.addEventListener("DOMContentLoaded", function () {
        loadSports();
        loadProducts();
    });
    
    // Charger tous les produits
    function loadProducts() {
        fetch("/api/products")
            .then(response => response.json())
            .then(data => displayProducts(data));
    }
    
    // Charger tous les sports
    function loadSports() {
        fetch("/api/sports")
            .then(response => response.json())
            .then(data => {
    
                const container = document.getElementById("sports-container");
                container.innerHTML = "";
                container.innerHTML += `
                    <label>
                        <input type="checkbox"
                            id="all-sports"
                            onchange="toggleAllSports(this)">
                        Tous
                    </label>
                `;

                data.forEach(sport => {
                    
                    container.innerHTML += `
                        <label>
                            <input type="checkbox"
                                value="${sport.id}"
                                onchange="filterProducts()">

                            ${sport.nom}
                        </label>
                    `;
                });
    
            });
    }
    
    function clearFilters() {
    document.querySelectorAll('#sports-container input')
        .forEach(input => input.checked = false);

    loadProducts();
    }


    function toggleAllSports(checkbox) {

        const sportCheckboxes = document.querySelectorAll('#sports-container input:not(#all-sports)');

        // Cocher ou décocher tous les sports selon l’état de "Tous"
        sportCheckboxes.forEach(input => {
            input.checked = checkbox.checked;
        });

        // Appliquer le filtre
        filterProducts();
    }



    // Filtrer produits par sport
    // function filterBySport(sportId) {
    //     fetch(`/api/products/sport/${sportId}`)
    //         .then(response => response.json())
    //         .then(data => displayProducts(data));
    // }

    function filterProducts() {

        const allCheckbox = document.getElementById("all-sports");
        const sportCheckboxes = document.querySelectorAll('#sports-container input:not(#all-sports)');
        const checkedSports = document.querySelectorAll('#sports-container input:not(#all-sports):checked');

        let sportIds = [];

        checkedSports.forEach(input => {
            sportIds.push(input.value);
        });

        // ✅ Si tous les sports sont cochés → cocher "Tous"
        if (checkedSports.length === sportCheckboxes.length && sportCheckboxes.length > 0) {
            allCheckbox.checked = true;
        } else {
            allCheckbox.checked = false;
        }

        // ✅ Si aucun sport sélectionné → afficher tous
        if (sportIds.length === 0) {
            loadProducts();
            return;
        }

        fetch(`/api/products?sports=${sportIds.join(',')}`)
            .then(response => response.json())
            .then(data => displayProducts(data));
    }


    
    // Afficher produits
    function displayProducts(products) {
    
        const container = document.getElementById("products-container");
        container.innerHTML = "";
    
        if (products.length === 0) {
            container.innerHTML = "<p>Aucun produit trouvé</p>";
            return;
        }
    
        products.forEach(product => {
            container.innerHTML += `
                <div class="card">
                    <img class="image" src="/images/chaussure.webp" alt="">
                    <h3>${product.nom}</h3>
                    <p class="price">${product.prix} €</p>
                    <button>Voir le produit</button>
                </div>
            `;
        });
    
    }
    
    </script>
    

@endsection