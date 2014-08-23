<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_shakelog`;");
E_C("CREATE TABLE `tp_shakelog` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `token` varchar(40) NOT NULL,
  `mark` longtext,
  `endtime` int(15) NOT NULL,
  `joinnum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `tp_shakelog` values('1','1','eewoyx1396338504','','1396951833','0');");
E_D("replace into `tp_shakelog` values('20','30','nepvyy1400393099','','1400637529','0');");
E_D("replace into `tp_shakelog` values('21','26','tzqawo1400308953','15888888888+151','1401371635','1');");
E_D("replace into `tp_shakelog` values('14','13','qtjnws1397994896','15488466555+0','1399209845','1');");

require("../../inc/footer.php");
?>