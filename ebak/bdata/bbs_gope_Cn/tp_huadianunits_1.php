<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_huadianunits`;");
E_C("CREATE TABLE `tp_huadianunits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `lc` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `shi` varchar(30) NOT NULL,
  `ting` varchar(100) NOT NULL,
  `sort` varchar(3) NOT NULL,
  `contentt` varchar(2000) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>