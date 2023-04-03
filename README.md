# CarteENC

CarteENC est un projet PHP Laravel qui utilise également le framework Symphony qui vise à permettre à un utilisateur de se créer un compte et créer des cartes d'étudiant pour les étudiants de l'ENC en saisissant leurs informations.

## Installation

Git clone le projet  
Créer la BDD nommée carteEnc (Laragon->carteEnc)
Configurer le .env.example (copie, renomme à .env et ensuite configurer la BDD, route, etc.)
Télécharge et installe nvm, installe la dernière version de node.

Dans la console :
    <pre><code>composer clearcache</pre></code>
    <pre><code>composer selfupdate</pre></code>
    <pre><code>composer install</pre></code>
    <pre><code>composer update composer-runtime-api</pre></code>
    <pre><code>composer require lavavel/jetstream</pre></code>
    <pre><code>php artisan jetstream:install livewire</pre></code>
    <pre><code>npm install</pre></code>
    <pre><code>php artisan key:generate</pre></code>
    <pre><code>composer update</pre></code>
    <pre><code>php artisan vendor:publish --tag=jetstream-views</pre></code>
    <pre><code>php artisan migrate</pre></code>
    <pre><code>php artisan migrate:refresh</pre></code>
    

## Usage

Ajouter le projet dans Laragon, Start All dans Laragon, aller vers le lien carteenc.test

## Documentation

Accès à la création de carte et à la liste de cartes au moyen du menu.  

Isolation des données - Relations entre tables : un utilisateur ne voit que ses données à lui (contraintes d'intégrité référentielle et relations entre User et CarteEtudiant ajoutés).  

Si un utilisateur a déjà un compte et qu'il essaye de créer un nouveau compte avec la même adresse mail, un message d'erreur est affiché lors de l'enregistrement.  

Si un utilisateur a déjà une carte ENC associée à une adresse mail et qu'il essaie de récréer une avec la même adresse mail, un message d'erreur est affiché à la page de demande de carte.  

Persistance des données (Utilisateur ET carte) dans une BDD SQL.


## License

[The Laravel framework is open-sourced software licensed under the MIT license.](https://opensource.org/license/mit/)