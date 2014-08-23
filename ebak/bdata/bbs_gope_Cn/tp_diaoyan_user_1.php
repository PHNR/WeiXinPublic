<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_diaoyan_user`;");
E_C("CREATE TABLE `tp_diaoyan_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `diaoyan_id` int(11) DEFAULT NULL,
  `wecha_id` varchar(100) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `ans` varchar(20) DEFAULT NULL,
  `jianyi` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>