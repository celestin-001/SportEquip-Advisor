# SportEquip Advisor  
---

## 👥 Équipe — *Les Geeks*

- **TRAORE Aminata**
- **MOUANOU BANZOUZI J'aime Kora-karen**
- **GAYE Astou**
- **Celestin M'bemba Goumou**

---

# 📌 Présentation du Projet
=======


## Équipe

**Nom de l'équipe :**  Les Geeks 

**Membres :**

    - TRAORE Aminata
    - MOUANOU BANZOUZI J'aime Kora-karen
    - GAYE Astou
    - Celestin M'bemba Goumou

## Présentation du Projet

SportEquip Advisor est une application web développée avec **PHP Laravel** permettant d’aider un utilisateur à choisir le matériel sportif adapté à sa pratique.

L’application analyse le profil sportif de l’utilisateur afin de proposer des recommandations personnalisées.

Le projet a été entièrement conteneurisé avec **Docker** afin de garantir une installation simple, rapide et reproductible.

## Objectif

L’objectif du projet est de développer un **MVP** permettant :

- La saisie d’un profil sportif
- La recommandation d’équipements adaptés
- Le filtrage par budget
- La gestion simulée de la disponibilité des produits

## Attentes du Client

Le client souhaitait une solution permettant :

1. La saisie des informations suivantes :
   - Sport pratiqué
   - Niveau (débutant, confirmé, expert)
   - Fréquence de pratique

2. Un moteur de recommandation capable de :
   - Proposer des produits adaptés
   - Afficher le nom, le prix et l’image

3. Un filtre de budget :
   - Définir une fourchette de prix
   - Adapter dynamiquement les recommandations

4. Une gestion de disponibilité :
   - Simulation du stock en magasin
   - Indication si le produit est disponible ou non

## Fonctionnalités Réalisées

Dans le cadre du MVP, nous avons développé :

 - 1. Interface de Navigation et Header
     Identité visuelle : Intégration du nom du projet "SportEquip Advisor" et d'un système de connexion ("Se connecter").

     Bannière immersive : Mise en place d'un visuel dynamique (terrain de sport et ballon) pour renforcer l'univers thématique de  l'application.

 - 2. Système de Filtrage Latéral (Sidebar)
    Filtres par Sport : Possibilité de sélectionner une catégorie spécifique (Running, Tennis, Vélo).

    Filtres par Niveau : Sélection du profil utilisateur parmi trois options (Débutant, Intermédiaire, Avancé). On note sur la capture que le niveau "Avancé" est activé.

    Sélecteur de Prix : Intégration d'une barre de réglage permettant de définir une tranche budgétaire comprise entre 20 € et 200 €.

 - 3. Catalogue de Produits Dynamique
    Présentation en grille : Affichage des équipements sous forme de cartes  organisées sur plusieurs colonnes.

    Contenu des fiches produits : Chaque carte affiche :

   Un emplacement pour l'image du produit.

   Le nom du produit (ex: "Chaussures Running Pro", "Raquette Tennis Expert").

   Le prix clairement indiqué en Euros.

   Bouton d'action : Présence d'un bouton "Voir le produit" sur chaque fiche pour accéder aux détails.

 - 4. Pied de page (Footer)
    Mention légale : Intégration d'un footer sobre affichant le copyright "© 2026 - SportEquip Advisor".

**SportEquip Advisor** est une application web développée avec **Laravel** permettant d’aider un utilisateur à choisir le matériel sportif adapté à sa pratique.

L’application analyse le profil sportif de l’utilisateur afin de proposer des recommandations personnalisées selon :

- 🏅 Le sport pratiqué  
- 📊 Le niveau  
- 💰 Le budget  
- 📦 La disponibilité des produits  

Le projet est entièrement **conteneurisé avec Docker** pour garantir une installation simple, rapide et reproductible.

---

# 🎯 Objectif du MVP

## Technologies Utilisées

- **PHP 8**
- **Laravel**
- **MySQL**
- **Docker & Docker Compose**
- **Composer**
- **SonarQube** 


##  Structure du Projet

SportEquip-Advisor/
│
├── backend/ # Application Laravel
├── docker/ # Configuration Docker
├── docker-compose.yml # Orchestration des conteneurs
├── sonar-project.properties # Analyse qualité du code
└── README.md


# Installation et Lancement

## Prérequis

- Docker
- Docker Compose

## Cloner le projet

```bash
git clone https://github.com/celestin-001/SportEquip-Advisor.git
cd SportEquip-Advisor


docker-compose up -d

>>>>>>> 3f18a87 (COMPTE RENDU)

Le MVP permet :

- La consultation d’un catalogue d’équipements sportifs  
- Le filtrage dynamique par :
  - Sport  
  - Niveau  
  - Budget  
- L’affichage en temps réel de la disponibilité  
- L’exposition des données via une API REST  

---

# ⚙️ Fonctionnalités Implémentées

## 🖥️ Interface Utilisateur

- Header avec navigation  
- Bannière immersive  
- Sidebar de filtres dynamiques  
- Catalogue produits en grille  
- Footer avec mentions légales  

---

## 🔎 Système de Filtres Dynamiques

- Filtre par sport  
- Filtre par niveau (*Débutant / Intermédiaire / Avancé*)  
- Filtre par prix (*range slider*)  
- Filtrage combiné via API  
- Mise à jour dynamique sans rechargement  

---

## 📦 Gestion de Disponibilité

Indication visuelle :

- 🟢 Disponible  
- 🟡 Stock faible  
- 🔴 Rupture de stock  

Les produits indisponibles sont grisés automatiquement.

---

## 🌐 API REST

### Routes principales

```http
GET /api/products
GET /api/products?max_price=100
GET /api/products?sports=1,2
GET /api/products?levels=debutant,intermediaire
GET /api/products?max_price=100&sports=1&levels=avance
GET /api/sports
```

---

# 🛠️ Technologies Utilisées

- PHP 8  
- Laravel  
- MySQL 8  
- Docker  
- Docker Compose  
- Nginx  
- Composer  
- SonarQube  

---

# 🗂️ Structure du Projet

```bash
SportEquip-Advisor/
│
├── backend/                 # Application Laravel
│   ├── app/
│   ├── database/
│   ├── routes/
│   └── ...
│
├── docker/                  # Configuration Nginx
├── docker-compose.yml       # Orchestration Docker
├── sonar-project.properties
└── README.md
```

---

# 🚀 Installation & Lancement

## 📋 Prérequis

- Docker (v20+)  
- Docker Compose (intégré via `docker compose`)  
- Git  

---

## 📥 Cloner le projet

```bash
git clone https://github.com/celestin-001/SportEquip-Advisor.git
cd SportEquip-Advisor
```

---

## ▶️ Lancer les containers

```bash
docker compose up -d --build
```

---

## ✅ Vérifier que les services tournent

```bash
docker compose ps
```

Services attendus :

- app  
- db  
- nginx  

---

## 📦 Installer les dépendances Laravel (si nécessaire)

```bash
docker compose exec app composer install
```

---

## 🔐 Générer la clé Laravel (si nécessaire)

```bash
docker compose exec app php artisan key:generate
```

---

## 🗄️ Lancer les migrations

```bash
docker compose exec app php artisan migrate
```

---

## 🌱 Seeder la base de données

```bash
docker compose exec app php artisan db:seed
```

---

## 🔄 Tout recréer proprement

```bash
docker compose exec app php artisan migrate:fresh --seed
```

---

# 🌍 Accès à l'application

Application disponible sur :

```
http://localhost:8080
```

---

# 🗃️ Accès Base de Données (optionnel)

- Host : 127.0.0.1  
- Port : 3307  
- Database : sportequipDB  
- User : laravel  
- Password : Geeks2025@  

---

# 🧰 Commandes Utiles

### Voir les logs

```bash
docker compose logs -f
```

### Accéder au container app

```bash
docker compose exec app bash
```

### Arrêter les containers

```bash
docker compose down
```

### Supprimer volumes (reset total)

```bash
docker compose down -v
```

---

# 📊 Qualité du Code

Analyse via SonarQube :

```bash
sonar-scanner
```

---

# 📈 Organisation du Projet

## Sprint Planning

- Mise en place API  
- Développement des filtres  
- Intégration UI  
- Gestion disponibilité  

---

## Sprint Review

- Réduction du nombre de tickets  
- Amélioration de la répartition des tâches  

---

## 🔄 Rétrospective

- Amélioration gestion du temps  
- Meilleure communication équipe  

---

# 🚀 Améliorations Futures

- Authentification utilisateur  
- Système de panier  
- Page détail produit  
- Recommandation intelligente  

---

# 📜 Licence

Projet Agilité — 2026 @LesGeeks
