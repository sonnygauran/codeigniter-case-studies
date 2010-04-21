DROP DATABASE IF EXISTS `codeigniter`;
CREATE DATABASE `codeigniter`;
USE `codeigniter`;

CREATE TABLE `things` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` CHAR(64) NOT NULL,
    `quantity` INT UNSIGNED NOT NULL,
    `price` FLOAT(10,2) NOT NULL
)ENGINE=MyISAM;

INSERT INTO `things` ( `name`, `quantity`, `price` ) VALUES
( 'Mongol Pencils', 200, 3.5 ),
( 'Advance Steno Notes 6" x 9"', 100, 39 )
;