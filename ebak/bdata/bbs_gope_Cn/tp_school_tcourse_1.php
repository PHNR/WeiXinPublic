<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_school_tcourse`;");
E_C("CREATE TABLE `tp_school_tcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL,
  `km_id` int(11) NOT NULL,
  `bj_id` int(11) NOT NULL,
  `xq_id` int(11) NOT NULL,
  `sd_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_school_tcourse` values('1','nepvyy1400393099','2','7','4','11','8');");
E_D("replace into `tp_school_tcourse` values('2','tzqawo1400308953','4','22','16','28','25');");

require("../../inc/footer.php");
?>