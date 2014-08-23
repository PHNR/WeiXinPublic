<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_like`;");
E_C("CREATE TABLE `tp_dish_like` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `did` int(10) unsigned NOT NULL,
  `cid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `wecha_id` (`wecha_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_like` values('3','2','7','oiKAjuDvbT1TMuXEE8KHWmwqS63w');");
E_D("replace into `tp_dish_like` values('6','3','3','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4');");

require("../../inc/footer.php");
?>