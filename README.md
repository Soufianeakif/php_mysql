# php_mysql
create database  test00;

use test00;

create  table  t00(
id int primary key auto_increment,
nom varchar(30),
pass varchar(30)
);

/* then this */

INSERT INTO `test00`.`t00` (`id`, `nom`, `pass`) VALUES ('1', 'akif', 'soufiane');
