CREATE DATABASE IF NOT EXISTS sportequipDB;
USE sportequipDB;

CREATE TABLE IF NOT EXISTS sport (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    age INT,
    poids DECIMAL(5,2),      
    taille DECIMAL(5,2),     
    niveau ENUM('Débutant','Confirmé','Expert') NOT NULL,
    id_sport INT,
    FOREIGN KEY (id_sport) REFERENCES sport(id) ON DELETE SET NULL
);


CREATE TABLE IF NOT EXISTS produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    id_sport INT,
    disponibilite INT DEFAULT 0, 
    FOREIGN KEY (id_sport) REFERENCES sport(id) ON DELETE SET NULL
);


INSERT INTO sport (nom) VALUES
('Football'),
('Basketball'),
('Running'),
('Fitness'),
('Natation');


INSERT INTO utilisateurs (fullname, age, poids, taille, niveau, id_sport) VALUES
('Alice Dupont', 21, 55.5, 1.65, 'Débutant', 3),   
('Mamadou Diop', 27, 74.0, 1.80, 'Confirmé', 1),
('Sarah Martin', 32, 62.0, 1.70, 'Expert', 4);   


INSERT INTO produits (nom, prix, image, id_sport, disponibilite) VALUES
('Chaussures Running Débutant', 49.99, 'running_debutant.jpg', 3, 12),
('Chaussures Running Expert', 129.99, 'running_expert.jpg', 3, 3),

('Ballon de Football', 19.99, 'football_ballon.jpg', 1, 20),
('Chaussures Football Pro', 89.99, 'football_chaussures.jpg', 1, 5),

('Tapis de Fitness', 29.99, 'fitness_tapis.jpg', 4, 10),
('Haltères réglables', 59.99, 'fitness_haltere.jpg', 4, 2);

