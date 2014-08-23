<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `tp_wifi`;");
E_C("CREATE TABLE `tp_wifi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) CHARACTER SET utf8 NOT NULL,
  `appid` varchar(60) CHARACTER SET utf8 NOT NULL,
  `appkey` varchar(60) CHARACTER SET utf8 NOT NULL,
  `url` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'хож╓url',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'wifiцШЁф',
  `token` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `picurl` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `tp_wifi` values('1','erw34tr45t','','','','dsada','avljgc1397041839','01222','','');");
E_D("replace into `tp_wifi` values('2','wifi','0','0','0','wifi','tzqawo1400308953','wifi','wifi','');");

require("../../inc/footer.php");
?>