<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_selfform_value`;");
E_C("CREATE TABLE `tp_selfform_value` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `formid` int(10) NOT NULL DEFAULT '0',
  `wecha_id` varchar(50) NOT NULL DEFAULT '',
  `values` varchar(2000) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `formid` (`formid`,`wecha_id`,`time`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `tp_selfform_value` values('1','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','a:1:{s:1:\"x\";s:11:\"18267720632\";}','1396607956');");
E_D("replace into `tp_selfform_value` values('3','4','ob2qxjjehDquqB4vyWTjuswtdAJo','a:1:{s:1:\"b\";s:3:\"阿\";}','1400647114');");
E_D("replace into `tp_selfform_value` values('7','8','ob2qxjgbC8wTmFfmJdS14O-So_jg','a:1:{i:1;s:4:\"1111\";}','1401284863');");
E_D("replace into `tp_selfform_value` values('12','10','oS1K7txQLCVuaAkQQP130Xn4N7pw','a:0:{}','1401369906');");
E_D("replace into `tp_selfform_value` values('13','11','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','a:0:{}','1401420055');");

require("../../inc/footer.php");
?>