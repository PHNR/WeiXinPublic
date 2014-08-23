<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_gametreply_info`;");
E_C("CREATE TABLE `tp_gametreply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `picurls1` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `copyright` text NOT NULL,
  `ad` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_gametreply_info` values('1','avljgc1397041839','2048加强版','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','http://wzweixiang.com/uploads/a/avljgc1397041839/3/d/6/4/thumb_536d986ce5844.jpg','2048加强版','','','陈倩瑜大傻瓜');");
E_D("replace into `tp_gametreply_info` values('2','qpyzzq1401101914','2048加强版','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-check.png','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-down.png','2048加强版2048加强版2048加强版','','','2048加强版');");

require("../../inc/footer.php");
?>