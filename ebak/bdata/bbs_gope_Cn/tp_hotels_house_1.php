<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_hotels_house`;");
E_C("CREATE TABLE `tp_hotels_house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `token` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `sid` (`sid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_hotels_house` values('1','1','','啊啊','','0','');");
E_D("replace into `tp_hotels_house` values('2','1','','11 ','11','1','11');");
E_D("replace into `tp_hotels_house` values('3','3','nepvyy1400393099','206','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','2','豪华双人间');");
E_D("replace into `tp_hotels_house` values('4','14','rgccej1400813594','1001','','3','');");
E_D("replace into `tp_hotels_house` values('5','14','rgccej1400813594','1002','','3','');");
E_D("replace into `tp_hotels_house` values('6','14','rgccej1400813594','2001','','4','');");
E_D("replace into `tp_hotels_house` values('7','14','rgccej1400813594','2002','','4','');");

require("../../inc/footer.php");
?>