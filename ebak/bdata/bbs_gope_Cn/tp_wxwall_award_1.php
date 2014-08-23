<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wxwall_award`;");
E_C("CREATE TABLE `tp_wxwall_award` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wxq_id` int(10) unsigned NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wxwall_award` values('2','19','o2g40t5PGefQXyOR20Z1qtoFGy9Q','1400561462','0');");

require("../../inc/footer.php");
?>