<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_jianshen`;");
E_C("CREATE TABLE `tp_jianshen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `toppicurl` varchar(200) NOT NULL,
  `roompicurl` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `contentt` varchar(2000) NOT NULL,
  `xmcontent` varchar(2000) NOT NULL,
  `jtcontent` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>