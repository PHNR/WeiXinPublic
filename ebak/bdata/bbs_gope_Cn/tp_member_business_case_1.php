<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_business_case`;");
E_C("CREATE TABLE `tp_member_business_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `bid` int(11) NOT NULL DEFAULT '0',
  `summary` varchar(3000) NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `addr` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_member_business_case` values('1','tzqawo1400308953','规划','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','9','法定规划','1401414115','');");

require("../../inc/footer.php");
?>