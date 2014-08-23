<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_toshake`;");
E_C("CREATE TABLE `tp_toshake` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) NOT NULL,
  `token` varchar(20) NOT NULL,
  `wecha_id` varchar(30) DEFAULT NULL,
  `point` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `tp_toshake` values('1','18267720632','eewoyx1396338504','oWXert7SH5sbKHL3jAdsfYeoSkeY','0');");
E_D("replace into `tp_toshake` values('19','15888888888','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','40');");
E_D("replace into `tp_toshake` values('20','0','ivrnef1401365899','oS1K7tycKPvUKXGGID3mvSkcDa_w','0');");
E_D("replace into `tp_toshake` values('16','13283632651','xkuxqy1400560689','o2g40t5PGefQXyOR20Z1qtoFGy9Q','164');");
E_D("replace into `tp_toshake` values('17','18267720632','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','30');");
E_D("replace into `tp_toshake` values('21','13365682545','tzqawo1400308953','o1R8Mt7OITX5MYlbL3ruujCii554','71');");

require("../../inc/footer.php");
?>