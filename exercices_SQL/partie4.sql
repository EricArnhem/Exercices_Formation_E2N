-- Exercice 1, Ajout de données dans la table languages
USE `webDevelopment`;
INSERT INTO `languages` (`language`, `version`)
VALUES ('JavaScript', '5')
	,('PHP', '5.2')
	,('PHP', '5.4')
	,('HTML', '5.1')
	,('JavaScript', '6')
	,('JavaScript', '7')
	,('JavaScript', '8')
	,('PHP', '7');

-- Exercice 2, Ajout de données dans la table frameworks
INSERT INTO `frameworks` (`framework`, `version`)
VALUES ('Symfony', '2.8')
	,('Symfony', '3')
	,('Jquery', '1.6')
	,('Jquery', '2.10');
