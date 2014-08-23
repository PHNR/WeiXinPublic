<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_jianshencom`;");
E_C("CREATE TABLE `tp_jianshencom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sort` varchar(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `zw` varchar(100) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `contentt` varchar(2000) NOT NULL,
  `dpcontent` varchar(2000) NOT NULL,
  `subestatename` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>