<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_hotels_house_sort`;");
E_C("CREATE TABLE `tp_hotels_house_sort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `token` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `vprice` float NOT NULL,
  `note` varchar(500) NOT NULL,
  `num` tinyint(1) unsigned NOT NULL,
  `houses` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_hotels_house_sort` values('1','1','','111','','1111','1','','1','1');");
E_D("replace into `tp_hotels_house_sort` values('2','3','nepvyy1400393099','豪华双人间','','265','188','豪华双人间','4','1');");
E_D("replace into `tp_hotels_house_sort` values('3','14','rgccej1400813594','普通间','','200','200','','2','2');");
E_D("replace into `tp_hotels_house_sort` values('4','14','rgccej1400813594','精品间','','400','400','','4','2');");

require("../../inc/footer.php");
?>