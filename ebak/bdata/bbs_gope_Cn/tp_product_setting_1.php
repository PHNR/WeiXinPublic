<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_setting`;");
E_C("CREATE TABLE `tp_product_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `score` float NOT NULL,
  `paymode` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_setting` values('1','ozugxw1400589873','100','100','1');");
E_D("replace into `tp_product_setting` values('2','avljgc1397041839','200','1','1');");
E_D("replace into `tp_product_setting` values('3','tzqawo1400308953','100','1','1');");

require("../../inc/footer.php");
?>