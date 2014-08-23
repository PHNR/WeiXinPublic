<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_diaoyan_timu`;");
E_C("CREATE TABLE `tp_diaoyan_timu` (
  `tid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `optia` varchar(200) DEFAULT NULL,
  `optib` varchar(200) DEFAULT NULL,
  `optic` varchar(200) DEFAULT NULL,
  `optid` varchar(200) DEFAULT NULL,
  `optie` varchar(200) DEFAULT NULL,
  `max` smallint(2) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `perca` int(11) DEFAULT '0',
  `percb` int(11) DEFAULT '0',
  `percc` int(11) DEFAULT '0',
  `percd` int(11) DEFAULT '0',
  `perce` int(11) DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>