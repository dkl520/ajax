Set NAMES UTF8;
Drop  database if exists sohu; 
CREATE database  sohu charset=utf8;
use sohu;
CREATE table email (
	mid INT PRIMARY KEY auto_increment,
	phone  varchar(32),
	pwd varchar(32),
	lastLoginTime  bigint
);
insert into email values
	(null, '12345678900','123456789','123456890123'),
    (null, '12345678900','123456789','123452890123'),
    (null, '12345678900','123456789','123456890123');

