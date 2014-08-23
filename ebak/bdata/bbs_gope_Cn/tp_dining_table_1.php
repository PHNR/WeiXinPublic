<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dining_table`;");
E_C("CREATE TABLE `tp_dining_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `image` varchar(200) NOT NULL,
  `isbox` tinyint(1) unsigned NOT NULL,
  `isorder` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `isbox` (`isbox`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dining_table` values('1','7','桌1','100','http://wzweixiang.com/tpl/static/attachment/focus/default/1.gif','0','0','0');");
E_D("replace into `tp_dining_table` values('2','7','桌2','100','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','0','1','0');");
E_D("replace into `tp_dining_table` values('3','7','桌3','100','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','0','1','1');");
E_D("replace into `tp_dining_table` values('4','3','2号台','6','','0','0','0');");
E_D("replace into `tp_dining_table` values('5','3','3号台-包厢','10','','1','0','0');");
E_D("replace into `tp_dining_table` values('8','2','212121','11','http://wzweixiang.com/uploads/a/avljgc1397041839/4/3/7/0/thumb_53744c19abbb2.jpg','0','0','0');");

require("../../inc/footer.php");
?>