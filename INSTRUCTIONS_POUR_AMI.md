# Instructions pour finaliser le projet Tech Blog

## 🚀 Étapes à exécuter sur la machine PHP 8.3.14

### 1. Installation des dépendances
```bash
composer install
```

### 2. Créer la base de données
- Ouvrir phpMyAdmin
- Créer une base de données nommée `tech_blog`

### 3. Configurer la connexion BDD
Le fichier `.env.local` est déjà configuré pour MySQL local :
```
DATABASE_URL="mysql://root:@127.0.0.1:3306/tech_blog?serverVersion=8.0&charset=utf8mb4"
```

### 4. Créer les migrations
```bash
symfony console make:migration
```

### 5. Exécuter les migrations
```bash
symfony console doctrine:migrations:migrate
```

### 6. Démarrer le serveur
```bash
symfony server:start
```

### 7. Ajouter des données dans phpMyAdmin
Dans la base `tech_blog` :

**Table `category` :**
```
INSERT INTO category (name) VALUES 
('Développement'),
('Matériel informatique'),
('Admin Serveur');
```

**Table `post` :**
```
INSERT INTO post (title, content) VALUES 
('Introduction à Symfony', 'Symfony est un framework PHP puissant...'),
('Les meilleures pratiques de codage', 'Le code propre est essentiel...'),
('Gestion de serveur Linux', 'Linux offre des outils robustes...');
```

**Table `post_category` (liaison) :**
```
INSERT INTO post_category (post_id, category_id) VALUES 
(1, 1), (1, 2),
(2, 1), (2, 3),
(3, 2), (3, 3);
```

## 🎯 Fonctionnalités implémentées

✅ Page d'accueil avec liste des articles
✅ Page "À propos" 
✅ Détail d'un article avec commentaires
✅ Système de commentaires fonctionnel
✅ Relations ManyToMany entre articles et catégories
✅ Design avec header/footer

## 🌐 Accès à l'application

Une fois le serveur démarré :
- Page d'accueil : `http://127.0.0.1:8000/`
- Page à propos : `http://127.0.0.1:8000/about`
- Détail article : `http://127.0.0.1:8000/post/1`

## 📝 Notes importantes

- Le projet utilise PHP 8.3.14 (requis)
- Symfony 6.4.*
- MySQL 8.0
- Doctrine pour la base de données

Le code est entièrement fonctionnel et prêt à être utilisé !
