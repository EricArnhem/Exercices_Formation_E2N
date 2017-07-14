-- Exercice 1, création de la base de données languages
USE `webDevelopment`;
CREATE DATABASE `languages`;

-- Exercice 2, création de la base de données webDevelopment avec l'encodage UTF-8
CREATE DATABASE `webDevelopment` CHARACTER SET 'utf8';

-- Exercice 3, création de la base de données frameworks avec l'encodage UTF-8 si elle n'existe pas
CREATE DATABASE IF NOT EXISTS `frameworks` CHARACTER SET 'utf8';

-- Exercice 4, création de la base de données languages avec l'encodage UTF-8 si elle n'existe pas
CREATE DATABASE IF NOT EXISTS `languages` CHARACTER SET 'utf8';

-- Exercice 5, suppression de la base de données languages
DROP DATABASE `languages`;

-- Exercice 6, suppression de la base de données frameworks si elle existe
DROP DATABASE IF EXISTS `frameworks`;

-- Exercice 7, suppression de la base de données languages si elle existe
DROP DATABASE IF EXISTS `languages`;
