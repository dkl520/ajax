SET names utf8;
DROP database if exists qinghua;
create database qinghua charset=utf8;
use qinghua;
create table qh_class
(
	sid INT primary key ,
	cname  varchar(32) ,
	count  varchar(32)
);
insert into qh_class values
	(10 ,'软件0801班','32'),
	(20 ,'软件0802班','32'),
	(30 ,'软件0803班','32');
	
create table qh_student
(
	sid INT primary key auto_increment,
	cname varchar(32),
	ccore  varchar(32) ,
	classId  varchar(32)

);
 insert into qh_student values
	(null ,'dkl1','320','10'),
	(null ,'dkl2','320','20'),
	(null ,'dkl3','320','20'),
	(null ,'dkl4','320','20'),
	(null ,'dkl5','630','10'),
	(null ,'dkl6','630','10'),
	(null ,'dkl7','630','30'),
	(null ,'dkl8','630','30'),
	(null ,'dkl9','630','30');
	  create table  qh_type(
         tid int primary key  ,
         tname  varchar(32)
);

 insert into qh_type values
 	(10,'相机' ),
 	(20,'洗衣机'),
 	(30,'手机');
 CREATE table  qh_producer(
 	pid  int primary key auto_increment,
 	pname varchar(32),
 	typeId varchar(32)
 	) ;
 insert into qh_producer values
 	(null,'dkl1','10'),
 	(null,'dkl2','10'),
 	(null,'dkl3','10'),
 	(null,'dkl4','20'),
 	(null,'dkl5','20'),
 	(null,'dkl6','20'),
 	(null,'dkl7','30'),
 	(null,'dkl8','30'),
 	(null,'dkl9','30');
 	create table qh_model(
 		mid  int primary key auto_increment,
 		mname varchar(32),
 	     producerId  int
 		);
 	create table qh_user(
 		uid int primary key auto_increment,
 		uname varchar(32),
 		upwd  varchar(32)
 		);
 	

 	