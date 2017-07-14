-- Exercice 1, Suppression de toutes les lignes qui parlent de HTML dans la table languages
USE
  `webDevelopment`;
DELETE FROM
  `languages`
WHERE
  `language`='HTML';

-- Exercice 2, Modification des lignes ayant le framework Symfony par Symfony2
UPDATE
  `frameworks`
SET
  `framework`='Symfony2'
WHERE
  `framework`='Symfony';

-- Exercice 3, Modification de la ligne du langage JavaScript version 5 par la version 5.1
UPDATE
  `languages`
SET
  `version`='5.1'
WHERE
  `language`='JavaScript' AND `version`='5';
