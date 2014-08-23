<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_sort`;");
E_C("CREATE TABLE `tp_dish_sort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `num` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_sort` values('1','1','25252','','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','1');");
E_D("replace into `tp_dish_sort` values('2','2','测试','','','0');");
E_D("replace into `tp_dish_sort` values('3','5','湘菜','','','1');");
E_D("replace into `tp_dish_sort` values('4','3','sfg ','dsfgs','','1');");
E_D("replace into `tp_dish_sort` values('5','3','gfjkg','ghjk','','0');");
E_D("replace into `tp_dish_sort` values('6','12','微订餐','','','1');");

require("../../inc/footer.php");
?>