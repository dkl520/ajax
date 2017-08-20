  
set names utf8;
drop database if exists jd;
create database jd charset=utf8;
	use jd;
create table udisk(
	  uid   int primary key auto_increment ,
	  pic    varchar(32),
	  uname  varchar(32),
	  price  varchar(32),
	  addedTime  bigINT
);
 INSERT into  udisk   values
 ( null ,'img/1','u1','100','1234567890132'),
 ( null ,'img/2','u2','100','1234567890132'),
 ( null ,'img/3','u3','100','1234567890132');
 
