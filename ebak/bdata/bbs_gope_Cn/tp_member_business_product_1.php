<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_business_product`;");
E_C("CREATE TABLE `tp_member_business_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `displayorder` smallint(6) NOT NULL DEFAULT '0',
  `price` varchar(12) NOT NULL DEFAULT '',
  `crate_time` int(11) NOT NULL DEFAULT '0',
  `bid` int(11) NOT NULL DEFAULT '0',
  `catid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_member_business_product` values('1','avljgc1397041839','11','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','11','111','1399363604','1','1');");
E_D("replace into `tp_member_business_product` values('2','nepvyy1400393099','鞋子','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','0','96','1400399427','7','10');");
E_D("replace into `tp_member_business_product` values('3','tzqawo1400308953','地方','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/8/0/e/thumb_538721dce23fa.jpg','0','12','1401414075','9','18');");

require("../../inc/footer.php");
?>