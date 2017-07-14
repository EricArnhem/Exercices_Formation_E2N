-- Exercice 1, On affiche les données de la table languages
USE webDevelopment;
SELECT *
FROM `languages`;

-- Exercice 2, On affiche les versions de PHP depuis la table languages
SELECT
	`version`
FROM
	`languages`
WHERE
	`language`='PHP';

-- Exercice 3, On affiche toutes les versions de PHP et de JavaScript depuis la table languages
SELECT
	`version`
FROM
	`languages`
WHERE
	`language`='PHP'
	OR `language`='JavaScript';

-- Exercice 4, On affiche toutes les lignes ayant pour id 3, 5, 7 depuis la table languages
SELECT *
FROM
	`languages`
WHERE
	`id` IN(3, 5, 7);

-- Exercice 5, On affiche les deux première entrées de JavaScript depuis la table languages
SELECT *
FROM
	`languages`
WHERE
	`language`='JavaScript'
LIMIT 2;

-- Exercice 6, On affiche toutes les lignes qui ne sont pas du PHP depuis la table languages
SELECT *
FROM
	`languages`
WHERE
	`language`<>'PHP'; -- '<>' = différent comme le '!='

-- Exercice 7, On affiche toutes les données par ordre alphabétique depuis la table languages
SELECT *
FROM
	`languages`
ORDER BY `language` ASC;
