set names utf8;
drop database if exists dangdang;
create database dangdang charset=UTF8;
use dangdang;
create table book 
(
	bid  int primary key AUTO_INCREMENT,
	bname varchar(32),
	price varchar(32),
	pic    varchar(32)
);
INSERT INTO book values
	(null,'dkl1','32','img0.1'),
	(null,'dkl2','32','img0.1'),
	(null,'dkl3','32','img0.1');

	