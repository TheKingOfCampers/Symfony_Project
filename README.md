<p align="center">
  <img src="symfony.jpg" width="850" title="hover text">
</p>
<p align="center">
  # Symfony_Project
</p>


Crée un nouveau projet standart avec symfony
```
symfony new "nom_du_projet"
```
Crée un nouveau projet complet avec symfony
```
symfony new "nom_du_projet" --webapp
```
lister les commandes symfony
```
php bin/console
```
vérifier la config
```
php bin/console about
```
afficher l'aide d'un commande
```
symfony help "nom_de_commande
```
installer les maker (commandes permettant de "make" les controller...)
```
symfony composer req maker --dev
```
afficher les commandes (maker)
```
symfony console list make
```
installer twig (templateController)
```
composer require twig
```
verifier l'installation de twig
```
php bin/console debug:config twig
```
installer l'**AssetMapper**
```
composer require symfony/asset-mapper symfony/asset symfony/twig-pack
```
installer le frontController
```
symfony console make:controller Home
```
installer bootstrap
```
php bin/console importmap:require bootstrap
```
doctrine (gestionnaire d'entité from BDD)
```
composer require symfony/orm-pack
composer require symfony/maker-bundle
```
Le Fichier .env sert à la gestion de la BDD (connection)
Afficher les commande de gestion de la BDD
```
php bin/console list doctrine:database
php bin/console list doctrine
```
Crée une base de donnée
```
php bin/console doctrine:database:create
```
Crée une table
```
php bin/console make:entity
```
fichier contenant les requète SQL
```
php bin/console make:migration
```
exectuer les commande SQl des fichiers migration
```
php bin/console doctrine:migrations:migrate
```

démarrer le serveur sans https
```
symfony server:start --no-tls
```
------------------------------------------------------------------------------------------------------------------------------------------------------
Build les assets pour la production de l'appli
```
php bin/console asset-map:compile
```
