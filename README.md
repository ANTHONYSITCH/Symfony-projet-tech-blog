
# 📘 Tech Blog – Symfony Project

## 📖 Description

**Tech Blog** est une application web développée avec **Symfony** permettant de gérer un blog technologique.
L’application permet de publier des articles, consulter des posts et gérer le contenu via une architecture MVC moderne.

Ce projet a été réalisé dans un objectif pédagogique afin de découvrir :

* le framework **Symfony**
* l’architecture **MVC**
* l’utilisation de **Doctrine ORM**
* la gestion des routes, contrôleurs et templates
* l’intégration d’une base de données

---

# 🧰 Technologies utilisées

* **PHP 8+**
* **Symfony**
* **Doctrine ORM**
* **Twig**
* **MySQL**
* **Composer**
* **Symfony CLI**

---

# 📁 Structure du projet

```
tech_blog/
│
├── bin/                # Commandes Symfony
├── config/             # Configuration de l'application
├── migrations/         # Migrations de base de données
├── public/             # Point d'entrée de l'application (index.php)
├── src/
│   ├── Controller/     # Contrôleurs
│   ├── Entity/         # Entités Doctrine
│   ├── Repository/     # Requêtes vers la base de données
│
├── templates/          # Vues Twig
├── tests/              # Tests
├── var/                # Cache et logs
├── vendor/             # Dépendances Composer
│
├── composer.json
├── symfony.lock
└── README.md
```

---

# ⚙️ Installation du projet

## 1️⃣ Cloner le projet

```bash
git clone https://github.com/votre-repo/tech_blog.git
cd tech_blog
```

---

## 2️⃣ Installer les dépendances

```bash
composer install
```

---

## 3️⃣ Configurer la base de données

Modifier le fichier :

```
.env
```

Exemple :

```
DATABASE_URL="mysql://root:password@127.0.0.1:3306/tech_blog"
```

---

## 4️⃣ Créer la base de données

```bash
php bin/console doctrine:database:create
```

---

## 5️⃣ Lancer les migrations

```bash
php bin/console doctrine:migrations:migrate
```

---

## 6️⃣ Lancer le serveur Symfony

```bash
symfony server:start
```

ou

```bash
php -S localhost:8000 -t public
```

---

# 🌐 Accès à l’application

Une fois le serveur lancé :

```
http://localhost:8000
```

---

# 🧩 Fonctionnalités principales

* 📰 Affichage des articles du blog
* 📝 Création d’articles
* 🔎 Consultation d’un article
* 🗂 Organisation des données avec Doctrine
* 🎨 Templates dynamiques avec Twig

---

# 🗄 Base de données

La base de données est gérée avec **Doctrine ORM**.

Les entités principales peuvent inclure par exemple :

* **Post**
* **User**
* **Comment**

Les tables sont générées automatiquement via les **migrations Doctrine**.

---

# 🛠 Commandes Symfony utiles

### Vider le cache

```bash
php bin/console cache:clear
```

### Voir les routes

```bash
php bin/console debug:router
```

### Créer une entité

```bash
php bin/console make:entity
```

### Créer un contrôleur

```bash
php bin/console make:controller
```

---

# 📦 Dépendances principales

Certaines dépendances importantes installées via Composer :

* symfony/framework-bundle
* doctrine/orm
* twig/twig
* symfony/maker-bundle

---

# 👨‍💻 Auteur

Projet réalisé dans le cadre d’un apprentissage du framework **Symfony**.

Étudiant :
**Keyce Informatique & IA**

---

# 📜 Licence

Projet éducatif – utilisation libre à des fins pédagogiques.

---

