<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_panorama`;");
E_C("CREATE TABLE `tp_panorama` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `intro` varchar(300) NOT NULL DEFAULT '',
  `music` varchar(100) NOT NULL DEFAULT '',
  `frontpic` varchar(100) NOT NULL DEFAULT '',
  `rightpic` varchar(100) NOT NULL DEFAULT '',
  `backpic` varchar(100) NOT NULL DEFAULT '',
  `leftpic` varchar(100) NOT NULL DEFAULT '',
  `toppic` varchar(100) NOT NULL DEFAULT '',
  `bottompic` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(60) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_panorama` values('1','orbhyn1400224508','11','1','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','11','0','1');");
E_D("replace into `tp_panorama` values('2','ivrnef1401365899','360度','1122','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','360','0','0');");
E_D("replace into `tp_panorama` values('3','tzqawo1400308953','上的飞','上的','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','全景飞','0','0');");

require("../../inc/footer.php");
?>