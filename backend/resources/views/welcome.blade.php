@extends('layouts.menu')

@section('title', 'Geek')

@section('content')

<!-- PRODUITS + FILTRES -->
<section class="main-content">

    <!-- FILTRES VERTICAUX -->
    <aside class="filters">
        <h3>Filtres</h3>
        <div class="filter-block">
            <h4>Sport</h4>
            <div id="sports-container">
                <!-- Sports générés par JS -->
            </div>
        </div>        

        <div class="filter-block" id="levels-container">
            <h4>Niveau</h4>
            <label><input type="checkbox" value="debutant" onchange="filterProducts()"> Débutant</label>
            <label><input type="checkbox" value="intermediaire" onchange="filterProducts()"> Intermédiaire</label>
            <label><input type="checkbox" value="avance" onchange="filterProducts()"> Avancé</label>
        </div>        
        

        <div class="filter-block">
            <h4>Prix</h4>
        
            <div class="price-values">
                <span id="min-value">0 €</span>
            </div>
        
            <div class="price-range">
                <label for="prix">Prix</label>
                <input type="range" id="prix" name="prix" min="0" max="200" value="0">
            </div>
        </div>
        

        <script>
            let debounceTimer;
            const range = document.getElementById('prix');
            const minValue = document.getElementById('min-value');

            range.addEventListener('input', function () {
                minValue.textContent = this.value + " €";

                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => {
                    filterProducts();
                }, 300);
            });

        </script>

        {{-- <div class="filter-block">
            <h4>Frequence d'entrainement par Semaine </h4>
            <label><input type="checkbox">  1 à 3 jours</label>
            <label><input type="checkbox"> 3 à 5 jours</label>
            <label><input type="checkbox"> plus de 5 jours</label>
        </div> --}}

        <div class="filter-block" id="frequency-container">
            <h4>Fréquence d'entrainement par semaine</h4>
            <label><input type="checkbox" value="1-3" onchange="filterProducts()"> 1 à 3 jours</label>
            <label><input type="checkbox" value="3-5" onchange="filterProducts()"> 3 à 5 jours</label>
            <label><input type="checkbox" value="5+" onchange="filterProducts()"> plus de 5 jours</label>
        </div>
        
        
    </aside>

    <!-- PRODUITS -->
    <div class="products" id="products-container"></div>

</section>


<script>

    document.addEventListener("DOMContentLoaded", function () {
        loadSports();
        loadProducts();
        filterProducts();
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

    function filterProducts() {

        const allCheckbox = document.getElementById("all-sports");
        const sportCheckboxes = document.querySelectorAll('#sports-container input:not(#all-sports)');
        const checkedSports = document.querySelectorAll('#sports-container input:not(#all-sports):checked');

        const priceValue = document.getElementById("prix").value;

        let sportIds = [];

        checkedSports.forEach(input => {
            sportIds.push(input.value);
        });

        // Synchronisation bouton "Tous"
        if (checkedSports.length === sportCheckboxes.length && sportCheckboxes.length > 0) {
            allCheckbox.checked = true;
        } else {
            allCheckbox.checked = false;
        }

        // Fréquence d'entrainement
        const frequencyCheckboxes = document.querySelectorAll('#frequency-container input:checked');
        let frequencies = [];
        frequencyCheckboxes.forEach(input => frequencies.push(input.value));


        // Construire URL dynamique
        let url = `/api/products?max_price=${priceValue}`;
        if (frequencies.length > 0) {
            url += `&frequencies=${frequencies.join(',')}`;
        }


        if (sportIds.length > 0) {
            url += `&sports=${sportIds.join(',')}`;
        }

        const levelCheckboxes = document.querySelectorAll('#levels-container input:checked');
        let levels = [];
        levelCheckboxes.forEach(input => levels.push(input.value));

        if (levels.length > 0) {
            url += `&levels=${levels.join(',')}`;
        }

        // console.log("URL API:", url);


        fetch(url)
            .then(response => response.json())
            .then(data => displayProducts(data));
    }

    function displayProducts(products) {
            const container = document.getElementById("products-container");
            container.innerHTML = "";

            if (products.length === 0) {
                container.innerHTML = "<p>Aucun produit trouvé</p>";
                return;
            }

            products.forEach(product => {

                let availabilityText = '';
                let availabilityColor = '';
                let disabledClass = '';

                if (product.disponibilite === 0) {
                    availabilityText = "Rupture de stock";
                    availabilityColor = "red";
                    disabledClass = "disabled-card";
                } 
                else if (product.disponibilite < 5) {
                    availabilityText = `Reste ${product.disponibilite} produit${product.disponibilite > 1 ? 's' : ''}`;
                    availabilityColor = "orange";
                } 
                else {
                    availabilityText = "Disponible";
                    availabilityColor = "green";
                }

                container.innerHTML += `
                    <div class="card ${disabledClass}" style="position: relative;">
                        
                        <div style="
                            position: absolute;
                            top: 10px;
                            right: 10px;
                            background-color: ${availabilityColor};
                            color: white;
                            padding: 4px 8px;
                            font-size: 12px;
                            border-radius: 6px;
                        ">
                            ${availabilityText}
                        </div>

                        <img class="image" src="/images/${product.image}" alt="${product.nom}">
                        <h3>${product.nom}</h3>
                        <p class="price">${product.prix} €</p>

                        <button ${product.disponibilite === 0 ? 'disabled' : ''}>
                            Voir le produit
                        </button>
                    </div>
                `;
            });
    }


    
    </script>
    

@endsection