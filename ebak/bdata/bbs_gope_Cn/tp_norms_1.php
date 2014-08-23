<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_norms`;");
E_C("CREATE TABLE `tp_norms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL COMMENT '产品参数分类',
  `catid` int(10) unsigned NOT NULL COMMENT '分类ID',
  `value` varchar(150) NOT NULL COMMENT '规格值',
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='分类规格相信值'");
E_D("replace into `tp_norms` values('1','0','6','40');");
E_D("replace into `tp_norms` values('2','0','6','39');");
E_D("replace into `tp_norms` values('3','1','6','红色');");
E_D("replace into `tp_norms` values('4','1','7','蓝色');");
E_D("replace into `tp_norms` values('5','0','7','xL');");
E_D("replace into `tp_norms` values('6','1','10','黑');");
E_D("replace into `tp_norms` values('7','1','10','白');");
E_D("replace into `tp_norms` values('8','0','16','566');");
E_D("replace into `tp_norms` values('9','0','5','啊倒萨打算');");
E_D("replace into `tp_norms` values('10','0','5','倒萨大');");
E_D("replace into `tp_norms` values('11','0','5','而v');");

require("../../inc/footer.php");
?>