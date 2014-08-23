<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wedding_info`;");
E_C("CREATE TABLE `tp_wedding_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `num` tinyint(2) NOT NULL,
  `info` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wedding_info` values('1','1','林','18267720632','111','','1','1396608440');");
E_D("replace into `tp_wedding_info` values('2','2','kk','18976226935','0','好事','2','1400727979');");
E_D("replace into `tp_wedding_info` values('3','2','kji','18976226935','4','','1','1400728000');");
E_D("replace into `tp_wedding_info` values('4','3','啦啦啦','15896325874','1','','1','1401431856');");

require("../../inc/footer.php");
?>