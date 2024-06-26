-- 1. Créer la base de données `projetBoutique` si elle n'existe pas
CREATE DATABASE IF NOT EXISTS projetBoutique;

-- 2. Utiliser la base de données `projetBoutique`
USE projetBoutique;

-- 3. Créer la table `articles` si elle n'existe pas déjà
CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    inPanier INT DEFAULT 0,
    prix DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255)
);

-- 4. Insérer les articles dans la table `articles`
INSERT INTO articles (nom, description, inPanier, prix, image) VALUES
('Croque Monsieur', 'Un croque monsieur traditionnel, grillé à la perfection avec du jambon et du fromage.', 0, 3.50, 'images moto/croquemonsieur'),
('Hotdog', 'Un hotdog savoureux avec une saucisse juteuse, accompagné de condiments classiques.', 0, 3.00, 'images moto/hotdog'),
('Panini', 'Un panini croustillant, garni de vos ingrédients préférés, idéal pour un déjeuner rapide.', 0, 4.50, 'images moto/panini'),
('Palmier', 'Un délicieux palmier feuilleté et caramélisé, parfait pour accompagner votre café.', 0, 1.80, 'images moto/palmier.webp'),
('Brownie au chocolat', 'Brownie au chocolat fondant.', 0, 2.20, 'images moto/brownie.webp'),
('Pain au raisin', 'Pain au raisin moelleux et savoureux.', 0, 1.80, 'images moto/painauraisin.webp'),
('Éclair au chocolat', 'Délicieux éclair garni de crème au chocolat.', 0, 2.50, 'images moto/eclairsauchocolat.webp'),
('Chouquettes', 'De magnifiques chouquettes vendues par 100g. Attention elles sont délicieuses, miam miam.', 0, 3.99, 'images moto/chouquette.jpeg'),
('Croissant', 'Ce genre de croissant bien fondant miam miam', 0, 1.00, 'images moto/croissant.webp'),
('Pain au chocolat', 'Avec un chocolat chaud c\'est bon le matin.', 0, 1.50, 'images moto/painauchocolat.jpg'),
('Baguette de pain', 'Ce genre de baguette de pain qui permet de faire des sandwich tah les merguez sauce barbecue', 0, 1.20, 'images moto/baguette.jpg');
