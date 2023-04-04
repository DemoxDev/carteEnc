# CarteENC

CarteENC est un projet PHP Laravel qui utilise également le framework Symphony qui vise à permettre à un utilisateur de se créer un compte et créer des cartes d'étudiant pour les étudiants de l'ENC en saisissant leurs informations.

## Installation

Git clone le projet  
Créer la BDD nommée carteEnc (Laragon->carteEnc)
Configurer le .env.example (copie, renomme à .env et ensuite configurer la BDD, route, etc.)  
Télécharge et installe nvm, installe la dernière version de node.  
Télécharge et installe Composer.  
Télécharge et install la dernière version de PHP.  

Dans la console :
```powershell
    composer clearcache
    composer selfupdate
    composer install
    composer update composer-runtime-api
    composer require lavavel/jetstream
    php artisan jetstream:install livewire
    npm install
    php artisan key:generate
    composer update
    php artisan vendor:publish --tag=jetstream-views
    php artisan migrate
    php artisan migrate:refresh
```

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