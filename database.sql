create database DataCRUD;

use crud_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `Kelas` varchar(100),
  `NPM` varchar(15),
  PRIMARY KEY  (`id`)
);