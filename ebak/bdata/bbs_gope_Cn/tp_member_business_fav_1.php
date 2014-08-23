<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_business_fav`;");
E_C("CREATE TABLE `tp_member_business_fav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `bid` int(11) NOT NULL DEFAULT '0',
  `summary` varchar(3000) NOT NULL DEFAULT '',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_member_business_fav` values('1','nepvyy1400393099','5折活动','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','7','   鞋子','1399392000','1401984000','1400399467');");
E_D("replace into `tp_member_business_fav` values('2','tzqawo1400308953','个发给','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','9','法定个','1388505600','1420070400','1401414157');");

require("../../inc/footer.php");
?>