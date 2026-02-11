## User story 1

Création du header de la page d’accueil #11

Implémentation du carrousel promotionnel #12

Affichage des produits phares #13

Mise en place du footer de la page d’accueil

Gestion de la navigation vers la connexion et l’inscription

Implémentation du responsive design (desktop & mobile)

Création de l’API des produits mis en avant


## User story 2


Création de l’interface commune Inscription / Connexion

Implémentation du formulaire d’inscription

Validation des champs du formulaire d’inscription

Implémentation du formulaire de connexion

Création de l’endpoint d’inscription (POST /api/auth/register)

Création de l’endpoint de connexion (POST /api/auth/login)

Gestion de l’authentification et des erreurs

Redirection vers le tableau de bord après connexion / inscription


## User Story 3 

Mise à jour du header en mode utilisateur connecté

Implémentation du menu profil (Profil / Déconnexion)

Création de la page tableau de bord utilisateur

Affichage des informations du profil utilisateur

Affichage de la liste des articles du tableau de bord

Filtrage des articles par sport de l’utilisateur

Implémentation du filtre des articles par prix (Front-end)

Création de l’endpoint API des articles utilisateur (GET /api/articles)

Gestion du tri des articles par prix côté serveur


## User Story 4

Ajout de l’accès au profil depuis l’icône utilisateur

Création de la page (ou fenêtre) Profil utilisateur

Affichage des informations personnelles de l’utilisateur

Implémentation du bouton « Modifier le profil »

Gestion de l’affichage sécurisé des informations sensibles

Création de l’endpoint API GET /api/profile

Sécurisation de l’accès au profil (utilisateur authentifié uniquement)

Récupération et affichage dynamique des données du profil









## User Story 2
### Titre
**Formulaire d'inscription et de connexion**

---

### Description

**En tant que** visiteur,  
**Je veux** pouvoir créer un compte ou me connecter à un compte existant,  
**Afin de** accéder à mon tableau de bord personnalisé.

Permettre l’inscription d’un nouvel utilisateur ou la connexion à un compte existant afin d’accéder au tableau de bord personnalisé.
---

## ✅ Critères d'Acceptation — Front-end

### 1. Interface Commune
- **Visuel** :  
  - Affichage d'une image d'illustration sur la partie gauche du formulaire  
- **Navigation** :  
  - Possibilité de basculer facilement entre le formulaire de **connexion** et celui d'**inscription**

---

### 2. Formulaire d'Inscription

#### Champs requis
- **Nom complet** (texte)
- **Sport** (liste déroulante alimentée par la table `sports`)
- **Âge** (nombre)
- **Poids** (nombre)
- **Email** (type email avec validation de format)
- **Mot de passe** (masqué par défaut)
- **Niveau** (liste déroulante) :
  - Débutant
  - Moyen
  - Expert

#### Action
- Bouton **"S'inscrire"**
  - Désactivé tant que les champs obligatoires ne sont pas remplis

---

### 3. Formulaire de Connexion

#### Champs requis
- **Email**
- **Mot de passe**

#### Action
- Bouton **"Se connecter"**

---

## ⚙️ Critères d'Acceptation — Back-end

### 1. Inscription  
**Endpoint** : `POST /api/auth/register`

#### Logique
- Vérifier si l'email existe déjà en base de données
- Hacher le mot de passe avant l'enregistrement
- Créer une entrée dans la table `users`

#### Réponse
- Retourner un **token d'authentification**
- Rediriger vers le **tableau de bord**

---

### 2. Connexion  
**Endpoint** : `POST /api/auth/login`

#### Logique
- Vérifier la correspondance de l'email et du mot de passe
- Gérer les erreurs d'authentification avec le message :
  - `"Email ou mot de passe incorrect"`

#### Réponse
- En cas de succès :
  - Session active
  - Redirection vers le **tableau de bord**




## User Story 3
Titre
Accès à l’espace personnel et affichage des articles liés au sport de client

En tant que
Client authentifié

Je veux
Accéder à mon tableau de bord personnel, afin de Consulter mes informations de profil et visualiser les articles correspondant à mon sport

Critères d’acceptation – Front
Header
Les boutons « Se connecter » et « S’inscrire » sont remplacés par une icône de profil lorsque l’utilisateur est connecté.
Menu Profil
Au clic sur l’icône de profil, un menu s’affiche avec deux options :
Profil
Déconnexion
Section Articles
Une liste d’articles est affichée.
Les articles sont filtrés par défaut selon le sport choisi par l’utilisateur lors de l’inscription.
Filtre Prix
Un bouton « Filtrer » permet de trier ou filtrer les articles par prix.
Critères d’acceptation – Back
Filtrage dynamique des articles
Création d’un endpoint API GET :
/api/articles
L’endpoint retourne les articles liés au sport du client connecté.
Les données retournées incluent : nom, prix et image de l’article.
Logique de tri par prix
Le filtrage par prix est géré côté serveur, ou les données nécessaires sont transmises au front pour permettre ce tri.


## User Story 4
Titre
Affichage des informations du profil utilisateur

En tant que
Utilisateur authentifié

Je peux
Accéder à un bouton de profil depuis l’icône utilisateur

Afin de
Consulter l’ensemble de mes informations personnelles

Critères d’acceptation – Front
Depuis le tableau de bord, l’utilisateur clique sur l’icône du client.
En sélectionnant l’option « Profil », une fenêtre (ou page dédiée) s’ouvre.
La fenêtre affiche les informations de l’utilisateur :
Nom
Sport
Âge
Poids
Niveau
mot de passe
email
un bouton modifier
Critères d’acceptation – Back
Création d’un endpoint API **GET**/api/profile
L’endpoint retourne les informations du profil de l’utilisateur connecté.
L’accès à l’endpoint est restreint aux utilisateurs authentifiés.

