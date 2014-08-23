<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_meirong_album`;");
E_C("CREATE TABLE `tp_meirong_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `poid` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `addtype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8");
E_D("replace into `tp_meirong_album` values('76','0','1','avljgc1397041839','meirong');");

require("../../inc/footer.php");
?>