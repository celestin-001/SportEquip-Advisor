# SportEquip Advisor  
## Le Compagnon d'Équipement


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


### Organisation
#### Matin
- Sprint planning :
  - Mise en place des apis
  - Amélioration des issues
  - Mise en place de l'interface d'utilisateur 
    
- Sprint review :
    - Trop de ticket (en progression) par rapport au nombre de développeur

## Retro
- gestion du temps
-
#### Après-midi
