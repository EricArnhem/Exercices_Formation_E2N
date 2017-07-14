-- Exercice 1, Création la table languages avec ses colonnes dans la base de données webDevelopment
USE `webDevelopment`;
CREATE TABLE `languages` (
	`id` INT AUTO_INCREMENT,
	`language` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 2, Création la table tools avec ses colonnes dans la base de données webDevelopment
CREATE TABLE `tools` (
	`id` INT AUTO_INCREMENT,
	`tool` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 3, Création la table frameworks avec ses colonnes dans la base de données webDevelopment
CREATE TABLE `frameworks` (
	`id` INT AUTO_INCREMENT,
	`name` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 4, Création la table librairies avec ses colonnes dans la base de données webDevelopment
CREATE TABLE `librairies` (
	`id` INT AUTO_INCREMENT,
	`librairy` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 5, Création la table ide avec ses colonnes dans la base de données webDevelopment
CREATE TABLE `ide` (
	`id` INT AUTO_INCREMENT,
	`ideName` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 6, Création la table frameworks avec ses colonnes si elle n'existe pas dans la base de données webDevelopment
CREATE TABLE IF NOT EXISTS `frameworks` (
	`id` INT AUTO_INCREMENT,
	`name` VARCHAR(40),
	PRIMARY KEY(`id`))
	ENGINE=INNODB;

-- Exercice 7, Suppression de la table tools si elle existe
DROP TABLE IF EXISTS `tools`;

-- Exercice 8, Suppression de la table librairies
DROP TABLE `librairies`;

-- Exercice 9, Suppression de la table ide
DROP TABLE `ide`;

-- TP, Création de la base codex et de sa table clients et ses colonnes
CREATE DATABASE IF NOT EXISTS `codex`;
USE `codex`;
CREATE TABLE IF NOT EXISTS `clients` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT
	,`lastName` VARCHAR(50)
	,`firstName` VARCHAR(50)
	,`birthDate` DATE
	,`adress` VARCHAR(100)
	,`firstPhoneNumber` VARCHAR(10)
	,`secondPhoneNumber` VARCHAR(10)
	,`mail` VARCHAR(50)
	,PRIMARY KEY(`id`))
	ENGINE=INNODB;
