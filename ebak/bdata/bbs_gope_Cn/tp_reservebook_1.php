<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_reservebook`;");
E_C("CREATE TABLE `tp_reservebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `truename` varchar(50) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `housetype` varchar(50) NOT NULL,
  `dateline` varchar(50) NOT NULL,
  `timepart` varchar(50) NOT NULL,
  `info` varchar(100) NOT NULL,
  `type` char(15) NOT NULL,
  `booktime` int(11) NOT NULL,
  `remate` tinyint(3) NOT NULL DEFAULT '0' COMMENT '客服标志',
  `kfinfo` varchar(100) NOT NULL,
  `sex` int(11) DEFAULT '0',
  `age` int(11) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '',
  `choose` varchar(50) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '0',
  `paid` int(1) DEFAULT '0',
  `orderid` char(32) NOT NULL DEFAULT '',
  `payprice` decimal(10,2) DEFAULT NULL,
  `shiporder` char(32) NOT NULL DEFAULT '',
  `productName` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `wecha_id` (`wecha_id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `tp_reservebook` values('1','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417934','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('2','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417938','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('3','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417942','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('4','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417952','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('5','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417955','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('6','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417956','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('7','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417972','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('8','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417975','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('9','17','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','15125362585','儿童英语课程','2014-6-6 10:39:22','','255','course','1401417977','0','','0','0','多媒体教室','地方','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('10','16','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','快乐','15125896325','结婚','2014-05-31','8:00-9:00','嗯呢','house_book','1401419092','0','','0','0','','','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('11','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','2121','18267720632','121212','2014-05-24','19:00-20:00','','maintain','1401453198','0','','0','0','','121212','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('12','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','101010','18267720632','111','2014-05-31','16:00-17:00','','maintain','1401453268','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('13','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','101010','18267720632','111','2014-05-31','16:00-17:00','','maintain','1401453537','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('14','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','哈哈','18267720632','倒萨倒萨','2014-05-14','12:00-13:00','','maintain','1401453686','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('15','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','哈哈','18267720632','倒萨倒萨','2014-05-14','12:00-13:00','','maintain','1401453694','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('16','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','101010','18267720632','122112','2014-05-17','11:00-12:00','','maintain','1401453745','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('17','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453896','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('18','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453898','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('19','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453898','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('20','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453898','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('21','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453898','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('22','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453898','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('23','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453899','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('24','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453899','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('25','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453899','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('26','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453899','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('27','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453900','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('28','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453900','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('29','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453900','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('30','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453900','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('31','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453901','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('32','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453901','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('33','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453901','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('34','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','倒萨倒萨','18267720632','打算','2014-05-31','16:00-17:00','','maintain','1401453948','0','','0','0','','01010','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('35','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454433','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('36','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454437','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('37','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454437','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('38','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454437','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('39','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454437','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('40','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454438','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('41','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454438','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('42','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454438','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('43','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454438','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('44','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454439','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('45','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454439','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('46','8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','大神房顶上','18267720632','英汉互译和','2014-05-06','8:00-9:00','','maintain','1401454439','0','','0','0','','大神房顶上','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('47','19','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','','2014-05-14','17:00-18:00','111','house_book','1401454563','0','','0','0','','','0','0','',NULL,'','');");
E_D("replace into `tp_reservebook` values('48','20','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','','2014-05-15','8:00-9:00','121221','house_book','1401454707','0','','0','0','','','0','0','',NULL,'','');");

require("../../inc/footer.php");
?>