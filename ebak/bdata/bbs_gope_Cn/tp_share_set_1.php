<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_share_set`;");
E_C("CREATE TABLE `tp_share_set` (
  `token` varchar(40) NOT NULL DEFAULT '',
  `score` int(5) NOT NULL DEFAULT '0',
  `daylimit` int(5) NOT NULL DEFAULT '1',
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_share_set` values('avljgc1397041839','10','10');");
E_D("replace into `tp_share_set` values('nepvyy1400393099','1','20');");
E_D("replace into `tp_share_set` values('tzqawo1400308953','200','1');");

require("../../inc/footer.php");
?>