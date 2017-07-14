-- Exercice 1, Affichage de tous les frameworks associés à leurs langages. Si un langage n'a pas de framework l'afficher aussi.
USE `development`;
SELECT
	`languages`.`name` AS `language`, `frameworks`.`name` AS `framework`
FROM
	`languages`
	LEFT JOIN `frameworks`
		ON `frameworks`.`languagesId` = `languages`.`id`;

-- Exercice 2, Affichage de tous les frameworks associés à leurs langages. Si un langage n'a pas de framework ne pas l'afficher.
SELECT
	`languages`.`name` AS `language`, `frameworks`.`name` AS `framework`
FROM
	`languages`
	INNER JOIN `frameworks`
		ON `frameworks`.`languagesId` = `languages`.`id`;

-- Exercice 3, Affichage du nombre de framework qu'a un langage.
SELECT
	`languages`.`name` AS `language`, COUNT(`frameworks`.`name`) AS `nb_frameworks`
FROM
	`languages`
	LEFT JOIN `frameworks`
		ON `frameworks`.`languagesId` = `languages`.`id`
GROUP BY
	`languages`.`name`;

-- Exercice 4, Affichage des langages ayant plus de 3 frameworks.
SELECT
	`languages`.`name` AS `language`, COUNT(`frameworks`.`name`) AS `nb_frameworks`
FROM
	`frameworks`
	INNER JOIN `languages`
		ON `frameworks`.`languagesId` = `languages`.`id`
GROUP BY
	`languages`.`name`
HAVING
	COUNT(`frameworks`.`name`)>3;
