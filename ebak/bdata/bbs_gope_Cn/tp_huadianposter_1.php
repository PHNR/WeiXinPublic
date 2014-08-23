<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_huadianposter`;");
E_C("CREATE TABLE `tp_huadianposter` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_huadianposter` values('1','1d2e1b640424480','','http://www.138wo.com/uploads/1/1d2e1b640424480/8/a/7/3/thumb_531de1121d354.jpg','','海报1','http://www.138wo.com/uploads/1/1d2e1b640424480/8/a/7/3/thumb_531de1121d354.jpg','http://www.138wo.com/uploads/1/1d2e1b640424480/8/a/7/3/thumb_531de1121d354.jpg','http://www.138wo.com/uploads/1/1d2e1b640424480/8/a/7/3/thumb_531de1121d354.jpg','http://www.138wo.com/uploads/1/1d2e1b640424480/8/a/7/3/thumb_531de1121d354.jpg','凯风教育');");

require("../../inc/footer.php");
?>