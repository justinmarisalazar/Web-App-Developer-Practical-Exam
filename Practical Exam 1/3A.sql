-- Get all data of highest paid employee (without using LIMIT)

-- Creates the database
DROP DATABASE IF EXISTS `prac_exam_db`;
CREATE DATABASE `prac_exam_db`;
USE `prac_exam_db`;

-- Creates 'departments' table
CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Creates 'salary' table
CREATE TABLE `salary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Creates 'employees' table
CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `date_hired` datetime NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `salary_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  FOREIGN KEY (`salary_id`) REFERENCES `salary` (`id`)
);

-- Inserts values into the tables
INSERT INTO `departments` (`department`)
	VALUES('Marketing');
    
INSERT INTO `departments` (`department`)
	VALUES('Consultancy');

INSERT INTO `departments` (`department`)
	VALUES('IT');
    
INSERT INTO `salary` (`salary`)
	VALUES(10000);
    
INSERT INTO `salary` (`salary`)
	VALUES(15000);
    
INSERT INTO `salary` (`salary`)
	VALUES(20000);

INSERT INTO `employees` (`name`, `date_hired`, `department_id`, `salary_id`)
	VALUES('Employee 1', '2017-10-07 00:00:00', 3, 1);

INSERT INTO `employees` (`name`, `date_hired`, `department_id`, `salary_id`)
	VALUES('Employee 2', '2012-10-08 00:00:00', 2, 3);
    
INSERT INTO `employees` (`name`, `date_hired`, `department_id`, `salary_id`)
	VALUES('Employee 3', '2016-08-10 00:00:00', 1, 2);
    
INSERT INTO `employees` (`name`, `date_hired`, `department_id`, `salary_id`)
	VALUES('Employee 4', '2018-08-10 00:00:00', 3, 2);
    
-- Displays all information of the highest paid employee
SELECT `employees`.`id`, `employees`.`name`, `employees`.`date_hired`, `departments`.`department`, `salary`.`salary`
	FROM `employees`
    INNER JOIN `departments` ON `employees`.`department_id` = `departments`.`id`
    INNER JOIN `salary` ON `employees`.`salary_id` = `salary`.`id`
    WHERE `salary` = (SELECT MAX(`salary`) FROM `salary`);