
# TP Laravel - Gestion de Livres et Avis

## Objectif
Créer une application Laravel pour la gestion de livres et des avis des utilisateurs. Ce projet permet de consolider les connaissances sur les migrations, les modèles Eloquent, les relations entre les tables, l'affichage dynamique des données et la gestion des formulaires dans Laravel.

## Contexte
Chaque livre peut recevoir plusieurs avis. Les avis sont associés à des utilisateurs enregistrés en base de données. Aucun système d'authentification n'est mis en place pour l'instant.

## Fonctionnalités
- **Liste des livres** : Affichage de tous les livres avec leur titre, auteur et un lien vers leur page de détails.
- **Page de détails du livre** : Affichage des informations détaillées d'un livre ainsi que des avis associés, avec un formulaire pour soumettre un nouvel avis.
- **Formulaire d'ajout d'avis** : Permet aux utilisateurs de donner une note (de 1 à 5) et d'ajouter un commentaire à un livre.
- **Calcul de la note moyenne** (bonus).
- **Pagination des livres** (bonus).
- **Modification d'avis** (bonus).
- **Page 404 personnalisée** (bonus).

## Architecture du projet

### 1. Modèles et Migrations

#### Modèle & Migration Livre
- Table : `books`
  - `title`: Titre du livre
  - `author`: Auteur du livre
  - `description`: Description du livre
  - `published_at`: Date de publication
  - `timestamps`: Pour les champs `created_at` et `updated_at`
- Commande : 

  php artisan make:model Book -m


#### Modèle & Migration Avis

* Table : `reviews`

  * `book_id`: Clé étrangère vers le livre
  * `user_id`: Clé étrangère vers l'utilisateur
  * `rating`: Note du livre (1-5)
  * `comment`: Commentaire de l'utilisateur
  * `timestamps`: Pour les champs `created_at` et `updated_at`
* Commande :
  php artisan make:model Review -m


  Utilisation de `foreignId(...)->constrained()` pour gérer les relations.

#### Modèle Utilisateur

* Table : `users`

  * `name`: Nom de l'utilisateur
  * `email`: Email de l'utilisateur
  * Pas d'authentification pour l'instant, les utilisateurs sont ajoutés manuellement à la base de données.

### 2. Relations Eloquent

* **Livre** a plusieurs **Avis** (`hasMany`).
* **Avis** appartient à un **Livre** (`belongsTo`) et à un **Utilisateur** (`belongsTo`).
* **Utilisateur** a plusieurs **Avis** (`hasMany`).

### 3. Fonctions attendues

#### Liste des livres

* URL : `/books`
* Affiche le titre, l'auteur et un lien vers la page de détails de chaque livre.

#### Page de détails du livre

* URL : `/books/{id}`
* Affiche toutes les informations détaillées sur un livre, les avis associés et un formulaire pour soumettre un nouvel avis.

## Installation

1. Clonez ce projet :
bash
   git clone https://github.com/KHADYDIOUF12/gestion-livres-avis.git
   

2. Accédez au dossier du projet :

   cd gestion-livres-avis
 

3. Installez les dépendances PHP avec Composer :

   composer install
  

6. Exécutez les migrations pour créer les tables dans la base de données :

   
   php artisan migrate
   

7. Lancez le serveur de développement :

  
   php artisan serve
   

8. Ouvrez votre navigateur et accédez à [http://localhost:8000](http://localhost:8000).

## Description des tables

* **Books** : Contient les livres avec leur titre, auteur, description et date de publication.
* **Reviews** : Contient les avis des utilisateurs sur les livres. Chaque avis a un utilisateur, une note et un commentaire.
* **Users** : Contient des utilisateurs fictifs sans authentification, avec un nom et un email.
