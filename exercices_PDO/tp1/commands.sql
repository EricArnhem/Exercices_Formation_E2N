USE pdotp1;
CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT
        ,`lastName` VARCHAR(50) NOT NULL
        ,`firstName` VARCHAR(50) NOT NULL
        ,`birthDate` DATE NOT NULL
        ,`address` TEXT NOT NULL
        ,`postalCode` VARCHAR(5) NOT NULL
        ,`phoneNumber` VARCHAR(10) NOT NULL
        ,`service` INT NOT NULL
	,PRIMARY KEY(`id`))
	ENGINE=INNODB;

CREATE TABLE `services` (
	`id` INT NOT NULL AUTO_INCREMENT
        ,`name` VARCHAR(50) NOT NULL
        ,`description` VARCHAR(100) NOT NULL
	,PRIMARY KEY(`id`))
	ENGINE=INNODB;

INSERT INTO `services` (`name`, `description`)
VALUES ('Maintenance', 'Les spécialistes du Hardware')
	,('Web Developer', 'Pour eux tout est code')
	,('Web Designer', 'Y a que le CSS dans la vie')
	,('Reférenceur', 'Regarde les Serps Google du matin au soir et du soir au matin');
