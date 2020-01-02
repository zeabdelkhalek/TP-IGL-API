# TP-IGL-API 

## Lancer l'application Localement : 

### Exigences 
| Exigence                                 | Version |
| ------------------------------------------- | ------- |
| [PHP](https://www.php.net)                | `7.3+`  |
| [Composer](https://getcomposer.org) | `1.9+`  |
| [MySQL](https://www.mysql.com) | `8.0+`  |
| [Git](https://git-scm.com/downloads) | `2.0+`  |

Exécutez les commandes suivantes pour vérifier les versions installées actuelles:

```bash
php --version
git --version
composer --version
```

Pour MySQL Vous pouvez exécuter cette commande dans MySQL Command Line Client:

```bash
select version() ;
```

1. Cloner le repository :

```bash
git clone https://github.com/AbdelkhalekESI/TP-IGL-API
```

2. Installer les dépendances nécessaires :

```bash
composer install
```

3. Créez votre fichier `.env` à partir de` .env.example` et générez une clé d'application (n'oubliez pas de le configurer avec la base de données):

```bash
cp .env .env.example
php artisan key:generate  
```

4. Migrer la base de données et la remplir avec des données aléatoires:
```bash
php artisan migrate 
php artisan db:seed
```

5. Enfin, exécutez le serveur :

```bash
php artisan serve
```

6. Accéder à l'application via : `http://127.0.0.1:8000`

## Lancer l'application en utilisant Docker : 

Obtenir une instance locale de ce projet est très rapide en utilisant [docker-compose](https://docs.docker.com/compose/) et [docker](https://www.docker.com/products/docker-desktop) :

1. Cloner le repository :

```bash
git clone https://github.com/AbdelkhalekESI/TP-IGL-API/
```

2. Créez l'image de l'application et exécutez les services (Nginx,MySQL,app) :

```bash
docker-compose up -d --build database && docker-compose up -d --build web && docker-compose up -d --build app 
```

3. Assurez-vous que vous exécutez cette commande dans le dossier racine de votre application laravel. Cette commande crée vos images de conteneur et les démarre enfin. Si tout se déroule comme prévu, vous devriez pouvoir accéder à votre application laravel exécutée à l'intérieur de votre conteneur à: `http://127.0.0.1:80`

## Les Tests Unitaires 

Dans cette application on a tester les requêtes avec `phpunit` , les requêtes qui sont testés sont :

- Ajouter un nouveau étudiant 
- Afficher les informations d'un étudaint 
- Modifier les informations d'un étudiant 
- Supprimer un étudiant 

Pour lancer les tests on exécute cette commande :

```bash
cd vendor/bin
phpunit ../../tests/APIs/StudentApiTest
```

## Tests Avec Selenium 

### Exigences 

| Exigence                                 | Version |
| ------------------------------------------- | ------- |
| [Python](https://www.python.org/downloads/) | `3.6+`  |
| [Pip](https://pypi.org/project/pip/) | `9.0+`  |

Avant de commancer vérifier bien que l'application est en cours d'éxecution (Front-end et Back-end) et lancer ces commandes :

```bash
cd Selenium-Test
pip install selenium
python script.py
```

## Documentation des API 

Vous pouvez accéder au documentation generé automatiquement avec [Laravel Swagger](https://github.com/mtrajano/laravel-swagger) ici `http://127.0.0.1:8000/api/docs`

et voici une capture pour tous les APIs du Model Etudiant : 
![Swagger API](/Screenshots/screen.png)
