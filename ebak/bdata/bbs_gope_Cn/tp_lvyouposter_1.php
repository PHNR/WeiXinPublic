<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_lvyouposter`;");
E_C("CREATE TABLE `tp_lvyouposter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picurl1` varchar(100) NOT NULL,
  `picurl2` varchar(200) NOT NULL,
  `picurl3` varchar(200) NOT NULL,
  `picurl4` varchar(200) NOT NULL,
  `subestatename` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>