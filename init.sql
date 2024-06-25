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
('Baguette de pain', 'Ce genre de baguette de pain qui permet de faire des sandwich tah les merguez sauce barbecue', 0, 1.20, 'images moto/baguette.jpg'),
('Pain au chocolat', 'Avec un chocolat chaud c\'est bon le matin.', 0, 1.50, 'images moto/painauchocolat.jpg'),
('Croissant', 'Ce genre de croissant bien fondant miam miam', 0, 1.00, 'images moto/croissant.webp'),
('Chouquettes', 'De magnifiques chouquettes vendues par 100g. Attention elles sont délicieuses, miam miam.', 0, 3.99, 'images moto/chouquette.jpeg');
