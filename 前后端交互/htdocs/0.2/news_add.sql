 set names utf8;
 drop database if exists ifeng;
 create database  ifeng charset=utf8;
 use ifeng;
 create  table news (
 		nid  INT PRIMARY KEY auto_increment ,
 		title  varchar(32),
 		content varchar(64),
 		count  int,
 		pubTime bigint
 	);
 insert into news values
 	(null,'dkl1','nozuonodie','2','2012/3/25'),
 	(null,'dkl2','nozuonodie','1','2012/3/26'),
 	(null,'dkl3','nozuonodie','3','2012/3/27');

