<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_gamettreply_info`;");
E_C("CREATE TABLE `tp_gamettreply_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_gamettreply_info` values('1','avljgc1397041839','Flyhappy 2048','http://wzweixiang.com/uploads/a/avljgc1397041839/f/9/6/4/thumb_536f266ec62ab.jpg','','微最强Flyhappy 2048','','','');");
E_D("replace into `tp_gamettreply_info` values('2','isouej1399863564','快来游戏吧','','','对方是否是大概发生的','','','');");
E_D("replace into `tp_gamettreply_info` values('3','imywfr1400223186','1','','','','','','');");
E_D("replace into `tp_gamettreply_info` values('4','nepvyy1400393099','fly2048','','','fly2048','','','');");
E_D("replace into `tp_gamettreply_info` values('5','qpyzzq1401101914','fly2048 ','http://wzweixiang.com/tpl/static/attachment/icon/lovely/label.png','http://wzweixiang.com/tpl/static/attachment/icon/lovely/map.png','fly2048','','','fly2048');");

require("../../inc/footer.php");
?>