<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_user_request`;");
E_C("CREATE TABLE `tp_user_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `msgtype` varchar(15) NOT NULL DEFAULT 'text',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `msgtype` (`msgtype`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `tp_user_request` values('1','eewoyx1396338504','ob2qxjgbC8wTmFfmJdS14O-So_jg','附近酒店','text','1396606963');");
E_D("replace into `tp_user_request` values('2','eewoyx1396338504','ob2qxjgbC8wTmFfmJdS14O-So_jg','120.706294,27.917780','location','1396606880');");
E_D("replace into `tp_user_request` values('3','eewoyx1396338504','oWXert7SH5sbKHL3jAdsfYeoSkeY','附近酒店','text','1396946027');");
E_D("replace into `tp_user_request` values('4','eewoyx1396338504','oWXert7SH5sbKHL3jAdsfYeoSkeY','120.708113,27.917119','location','1396946032');");
E_D("replace into `tp_user_request` values('5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','附近公交','text','1400807770');");
E_D("replace into `tp_user_request` values('6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','120.708078,27.917154','location','1400807778');");
E_D("replace into `tp_user_request` values('7','rirjgb1400124807','oUFL9jljfISFwHfYqLIN5MWpT5Qk','111.710322,40.834195','location','1400167083');");
E_D("replace into `tp_user_request` values('8','rirjgb1400124807','oUFL9jljfISFwHfYqLIN5MWpT5Qk','附近酒店','text','1400167076');");

require("../../inc/footer.php");
?>