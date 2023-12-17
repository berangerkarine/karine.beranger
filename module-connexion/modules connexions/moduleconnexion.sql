-- Structure de la base de données "moduleconnexion"
CREATE DATABASE IF NOT EXISTS moduleconnexion;

-- Utilisation de la base de données
USE moduleconnexion;

-- Structure de la table "utilisateurs"
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255),
    prenom VARCHAR(255),
    nom VARCHAR(255),
    password VARCHAR(255)
);

-- Insertion de l'utilisateur admin
INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('admin', 'Admin', 'Admin', 'admin');
