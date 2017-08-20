set names utf8;
DROP database IF exists huimaiche;
CREATE database huimaiche charset=utf8;
use huimaiche;
CREATE table  car(
	cid int primary key auto_increment,
	cname varchar(32),
	price varchar(32),
	count varchar(32),
	type varchar(32)
);

INSERT  into car values
 (null,'dkl1','￥8.0000','cars/8_1.jpg', 'lt8'),
 (null,'dkl1','￥8.0000','cars/30_1.jpg','lt30'),
 (null,'dkl1','￥8.0000','cars/30_2.jpg','lt30'),
 (null,'dkl1','￥8.0000','cars/30_3.jpg','lt30'),
 (null,'dkl2','￥15.0000','cars/suv_1.jpg','suv'),
 (null,'dkl2','￥15.0000','cars/suv_2.jpg','suv'),
 (null,'dkl2','￥15.0000','cars/suv_3.jpg','suv'),
 (null,'dkl3','￥30.0000','cars/15_1.jpg','lt15'),
 (null,'dkl3','￥30.0000','cars/15_2.jpg','lt15'),
 (null,'dkl3','￥30.0000','cars/15_3.jpg','lt15'),
 (null,'dkl3','￥30.0000','cars/8_3.jpg','lt8'),
 (null,'dkl3','￥30.0000','cars/8_2.jpg','lt8');
