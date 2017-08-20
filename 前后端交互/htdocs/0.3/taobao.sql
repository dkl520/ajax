/*
* @Author: bjwsl-001
* @Date:   2016-11-30 09:21:29
* @Last Modified by:   bjwsl-001
* @Last Modified time: 2016-11-30 09:43:08
*/
set names utf8;
drop database if exists huimaiche ;
create database  huimaiche charset=utf8;
	use huimaiche;
create table car (
	cid  int primary key auto_increment,
	cname   varchar(32),
	pic     varchar(32),
	price    float(8,2),
	isOsale  varchar(2),
	birthday   bigint 

);
insert into car values
	(null, 'dkl','img/0.1','8.2','1','2012/3'),
    (null, 'dkl','img/0.1','8.2','1','2012/3');
	



