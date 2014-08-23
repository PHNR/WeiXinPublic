<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_nearby_user`;");
E_C("CREATE TABLE `tp_nearby_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_nearby_user` values('1','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','公交','1400807770');");
E_D("replace into `tp_nearby_user` values('2','rirjgb1400124807','oUFL9jljfISFwHfYqLIN5MWpT5Qk','酒店','1400167076');");

require("../../inc/footer.php");
?>