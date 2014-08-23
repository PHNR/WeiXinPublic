<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_zhengwusub`;");
E_C("CREATE TABLE `tp_zhengwusub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `token` varchar(31) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sort` varchar(3) NOT NULL,
  `contentt` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_zhengwusub` values('1','微政务','avljgc1397041839','关于我们','','但法规辅导过当然是');");
E_D("replace into `tp_zhengwusub` values('2','微政务','avljgc1397041839','最新优惠','','2321');");

require("../../inc/footer.php");
?>