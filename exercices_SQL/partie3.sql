-- Exercice 1, Ajout de la colonne versions (VARCHAR) à la table languages dans la base de données webDevelopment
USE `webDevelopment`;
ALTER TABLE `languages`
ADD `versions` VARCHAR(50);

-- Exercice 2, Ajout de la colonne version (INT) à la table frameworks dans la base de données webDevelopment
ALTER TABLE `frameworks`
ADD `version` INT;

-- Exercice 3, Changement de nom de la colonne versions en version sur la table languages dans la base de données webDevelopment
ALTER TABLE `languages`
CHANGE `versions` `version` VARCHAR(50);

-- Exercice 4, Changement de nom de la colonne name en framework sur la table frameworks dans la base de données webDevelopment
ALTER TABLE `frameworks`
CHANGE `name` `framework` VARCHAR(50);

-- Exercice 5, Changement du type de la colonne version en VARCHAR(10) sur la table frameworks dans la base de données webDevelopment
ALTER TABLE `frameworks`
MODIFY `version` VARCHAR(10);

-- TP --
USE `codex`;
-- Suppression de la colonne secondPhoneNumber
ALTER TABLE `clients`
DROP `secondPhoneNumber`;
-- Changement de nom de la colonne firstPhoneNumber en phoneNumber
ALTER TABLE `clients`
CHANGE `firstPhoneNumber` `phoneNumber` VARCHAR(10);
-- Modification du type de la colonne phoneNumber
ALTER TABLE `clients`
MODIFY `phoneNumber` VARCHAR(10);
-- Ajout des colonnes zipCode et city
ALTER TABLE `clients`
ADD `zipCode` VARCHAR(10),
ADD `city` VARCHAR(50);
