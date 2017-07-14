USE pdotp2;
CREATE TABLE `client` (
	`id` INT NOT NULL AUTO_INCREMENT
        ,`lastName` VARCHAR(50) NOT NULL
        ,`firstName` VARCHAR(50) NOT NULL
        ,`birthDate` DATE NOT NULL
        ,`address` TEXT NOT NULL
        ,`postalCode` VARCHAR(5) NOT NULL
        ,`phoneNumber` VARCHAR(10) NOT NULL
        ,`maritalStatus` INT NOT NULL
        ,PRIMARY KEY(`id`))
	ENGINE=INNODB;

CREATE TABLE `maritalStatus` (
	`id` INT NOT NULL AUTO_INCREMENT
        ,`status` VARCHAR(50) NOT NULL
        ,PRIMARY KEY(`id`))
	ENGINE=INNODB;

INSERT INTO `maritalStatus` (`status`)
VALUES ('Célibataire')
	,('Concubinage')
	,('Divorcé')
	,('Marié Veuf');

CREATE TABLE `credit` (
	`id` INT NOT NULL AUTO_INCREMENT
        ,`organization` VARCHAR(50) NOT NULL
        ,`amount` FLOAT NOT NULL
        ,`clientRef` INT NOT NULL
        ,PRIMARY KEY(`id`))
	ENGINE=INNODB;