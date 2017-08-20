SET NAMES UTF8;
DROP DATABASE IF EXISTS tarena;
create DATABASE tarena charset=UTF8;
	use tarena;
create table emp (
	eid  int primary key auto_increment,
	ename varchar(32),
	pic  varchar(32),
	salary varchar(32),
	deptID int
);
insert into emp values
	(null,'dkl1','img/0.1','8000','1'),
	(null,'dkl2','img/0.2','8000','1'),
	(null,'dkl3','img/0.3','8000','1'),
	(null,'dkl4','img/0.4','8000','2'),
	(null,'dkl5','img/0.5','8000','2'),
	(null,'dkl6','img/0.6','8000','2'),
	(null,'dkl7','img/0.7','8000','3'),
	(null,'dkl8','img/0.8','8000','3'),
	(null,'dkl9','img/0.9','8000','3');

	