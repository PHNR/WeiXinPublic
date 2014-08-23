<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_zhuangxiu_son`;");
E_C("CREATE TABLE `tp_zhuangxiu_son` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `description` varchar(200) NOT NULL,
  `addtype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='子楼盘'");

require("../../inc/footer.php");
?>