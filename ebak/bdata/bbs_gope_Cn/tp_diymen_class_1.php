<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_diymen_class`;");
E_C("CREATE TABLE `tp_diymen_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `url` varchar(150) NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_diymen_class` values('1','pvosmg1397034660','0','公司微站','首页','','1','0');");
E_D("replace into `tp_diymen_class` values('3','pvosmg1397034660','0','会员卡','会员卡','','1','0');");
E_D("replace into `tp_diymen_class` values('4','pvosmg1397034660','0','微商城','微商城即将开放！','','1','0');");

require("../../inc/footer.php");
?>