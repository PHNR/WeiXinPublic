<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_order`;");
E_C("CREATE TABLE `tp_dish_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `price` float NOT NULL,
  `nums` smallint(3) unsigned NOT NULL,
  `info` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tableid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `reservetime` int(11) NOT NULL,
  `isuse` tinyint(1) NOT NULL,
  `paid` tinyint(1) unsigned NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `des` varchar(500) NOT NULL,
  `takeaway` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`,`wecha_id`),
  KEY `token` (`token`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_order` values('1','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401170207','1401984000','0','0','g20140527135647','0','','1');");
E_D("replace into `tp_dish_order` values('2','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401170644','1401724800','0','0','g20140527140404','0','','1');");
E_D("replace into `tp_dish_order` values('3','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401170867','1401897600','0','0','g20140527140747','0','','1');");
E_D("replace into `tp_dish_order` values('4','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401171161','1401552000','0','0','g20140527141241','0','','1');");
E_D("replace into `tp_dish_order` values('5','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401171362','1402070400','0','0','g20140527141602','0','','1');");
E_D("replace into `tp_dish_order` values('6','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401172202','1401724800','0','0','g20140527143002','0','','1');");
E_D("replace into `tp_dish_order` values('7','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401172610','1402070400','0','0','g20140527143650','0','','1');");
E_D("replace into `tp_dish_order` values('8','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','4','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','微最强','0','18267720632','微最强商业版邮件测试','0','1401173665','1401811200','0','0','g20140527145425','0','','1');");
E_D("replace into `tp_dish_order` values('9','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174479','1401984000','0','0','g20140527150759','0','','1');");
E_D("replace into `tp_dish_order` values('10','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174506','1401984000','0','0','g20140527150826','0','','1');");
E_D("replace into `tp_dish_order` values('11','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174532','1402502400','0','0','g20140527150852','0','','1');");
E_D("replace into `tp_dish_order` values('12','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174598','1402243200','0','0','g20140527150958','0','','1');");
E_D("replace into `tp_dish_order` values('13','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174626','1402243200','0','0','g20140527151026','0','','1');");
E_D("replace into `tp_dish_order` values('14','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','25','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"25\";s:3:\"num\";i:1;s:4:\"name\";s:5:\"24524\";s:3:\"des\";s:0:\"\";}}}','快接近','0','18267720632','1212','0','1401174684','1401934500','0','0','g20140527151124','0','','1');");
E_D("replace into `tp_dish_order` values('15','5','o4ISnjmEAlTMFRPbYOa0EbsvF3t4','chsyqp1401254915','1','38','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:2;a:4:{s:5:\"price\";s:2:\"38\";s:3:\"num\";i:1;s:4:\"name\";s:12:\"辣椒炒肉\";s:3:\"des\";s:0:\"\";}}}','kenny','0','18607388888','','0','1401258415','1401285600','0','0','420140528142655','0','','0');");
E_D("replace into `tp_dish_order` values('20','3','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','12','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:3;a:4:{s:5:\"price\";s:2:\"12\";s:3:\"num\";i:1;s:4:\"name\";s:4:\"dsfg\";s:3:\"des\";s:0:\"\";}}}','','1','','','4','1401412778','1401413372','0','0','820140530091938','0','','2');");
E_D("replace into `tp_dish_order` values('21','3','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','12','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:3;a:4:{s:5:\"price\";s:2:\"12\";s:3:\"num\";i:1;s:4:\"name\";s:4:\"dsfg\";s:3:\"des\";s:0:\"\";}}}','快乐','0','15125896325','','4','1401412823','1401638400','0','0','820140530092023','0','','0');");
E_D("replace into `tp_dish_order` values('22','3','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','12','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:3;a:4:{s:5:\"price\";s:2:\"12\";s:3:\"num\";i:1;s:4:\"name\";s:4:\"dsfg\";s:3:\"des\";s:0:\"\";}}}','','1','','','4','1401437422','1401438012','0','0','820140530161022','0','','2');");
E_D("replace into `tp_dish_order` values('23','12','o4z4Gj3GCklDBKqdzzgAMEW3DEbc','lfethi1401449403','1','10','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:4;a:4:{s:5:\"price\";s:2:\"10\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"rourou\";s:3:\"des\";s:0:\"\";}}}','六度高','0','13125639865','','0','1401449940','1401552000','0','0','c20140530193900','0','','0');");
E_D("replace into `tp_dish_order` values('24','12','o4z4Gj3GCklDBKqdzzgAMEW3DEbc','lfethi1401449403','2','20','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:4;a:4:{s:5:\"price\";s:2:\"10\";s:3:\"num\";i:2;s:4:\"name\";s:6:\"rourou\";s:3:\"des\";s:0:\"\";}}}','就会理','0','13256985632','','0','1401450073','1401552000','0','0','c20140530194113','0','','0');");

require("../../inc/footer.php");
?>