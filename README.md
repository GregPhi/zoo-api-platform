# zoo-api-platform

### Tuto suivi :
- [API platform tuto](https://www.kaherecode.com/tutorial/developper-une-api-rest-avec-symfony-et-api-platform)

### Commandes utiles :
- symfony new symfony-rest-api --> créé un projet symfony
- cd symfony-rest-api && composer require api --> installation de API Platform
- composer require symfony/maker-bundle --dev --> pour pouvoir créer des entities en ligne de commande
- php bin/console make:entity --> création d'une entity
- symfony serve -d --no-tls --> lance le [serveur en local](http://127.0.0.1:8000)

### Mise en place
- récupération du projet
- création d'un fichier .env.local
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.11
- lors du test utilisation de XAMP (lancer Apache et MySQL)
- | création d'un utilisateur
- si vous n'avez pas créer la base de donnée --> php bin/console doctrine:database:create
- php bin/console make:migration
- php bin/console doctrine:migrations:migrate
