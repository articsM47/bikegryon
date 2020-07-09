# **ARTICS**

## ProjArt - Heig-vd - 09.07.20

--------------------------------------------------------------------------------------------------

Pour installer la solution, la première étape est de récupérer le code disponible ici sur GitHub :
https://github.com/articsM47/bikegryon

Il faudra ensuite **cloner le dossier** (aussi appelé “repository” sur GitHub).

Le projet est séparé en deux parties : la partie backend (artics-laravel) et la partie frontend (Frontend).
Sur un interface en ligne de commande, dans le dossier artics-laravel, exécuter ensuite la fonction :

```
Composer install
```

Il faut ensuite se déplacer dans le dossier /Frontend et exécuter la commande :

```
npm ci
```

Il faudra ensuite modifier le fichier “.env.exemple” pour obtenir un fichier “.env” de votre infrastructure si vous n’avez pas de base de donnée. Une base de donnée SQLite est à votre disposition dans le dossier “laravel/database”.

Pour rendre le site disponible, retourner ensuite dans l’interface de ligne de commande, dans le dossier artics laravel et exécuter :

```
php artisan key : generate
php artisan migrate : install
php artisan migrate
```

Afin d’intégrer les pays et les villes de la base de données, insérer via un page d’administration de base de donnée dans le dossier “laravel/database” le fichier : cities_countries.sql

Si vous utilisez SQLite, le programme DB Browser for SQLite vous permettra de le faire.
Pour obtenir des données de test, en ligne de commande dans le dossier “artics-laravel” :

```
php artisan db : seed
```

