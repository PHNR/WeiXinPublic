<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_forum_config`;");
E_C("CREATE TABLE `tp_forum_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgurl` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `comcheck` varchar(4) NOT NULL DEFAULT '',
  `intro` varchar(600) NOT NULL DEFAULT '',
  `ischeck` tinyint(4) NOT NULL DEFAULT '0',
  `pv` float NOT NULL DEFAULT '0',
  `forumname` char(60) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `isopen` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_forum_config` values('2','http://wzweixiang.com/uploads/a/avljgc1397041839/a/7/4/f/thumb_536f5c2a9ba20.png','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','0','','0','10','ces官方粉丝社区','http://wzweixiang.com/uploads/a/avljgc1397041839/4/3/7/0/thumb_53744c19abbb2.jpg','avljgc1397041839','1');");
E_D("replace into `tp_forum_config` values('3','','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','0','滴答快抢官方粉丝社区','0','3','滴答快抢官方粉丝社区','/tpl/Wap/default/common/images/forum/face.png','nepvyy1400393099','1');");
E_D("replace into `tp_forum_config` values('4','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','http://wzweixiang.com/tpl/static/attachment/icon/lovely/train.png','0','买卖街商城官方粉丝社区','0','11','买卖街商城官方粉丝社区','http://wzweixiang.com/tpl/static/attachment/icon/lovely/store.png','orbhyn1400224508','1');");
E_D("replace into `tp_forum_config` values('5','','','0','','0','0','金点原子锁官方粉丝社区','http://wzweixiang.com/uploads/w/wsupsl1400754187/a/e/5/0/thumb_537dd06c89a83.jpg','wsupsl1400754187','1');");
E_D("replace into `tp_forum_config` values('6','http://wzweixiang.com/uploads/i/ivrnef1401365899/7/3/d/a/thumb_5387286fb5ac7.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','0','社区欢迎讨论','0','1','一路顺风官方粉丝社区','/tpl/Wap/default/common/images/forum/face.png','ivrnef1401365899','1');");
E_D("replace into `tp_forum_config` values('7','','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','0','','0','1','生活无处不欢乐官方粉丝社区','http://wzweixiang.com/tpl/static/attachment/icon/lovely/umbrella.png','tzqawo1400308953','1');");

require("../../inc/footer.php");
?>