<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wxwall_members`;");
E_C("CREATE TABLE `tp_wxwall_members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_user` varchar(50) NOT NULL COMMENT '用户的唯一身份ID',
  `nickname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `avatar` varchar(100) NOT NULL DEFAULT '' COMMENT '头像',
  `wxq_id` int(10) unsigned NOT NULL COMMENT '用户当前所在的微信墙话题',
  `isjoin` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否正在加入话题',
  `isblacklist` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户是否是黑名单',
  `lastupdate` int(10) unsigned NOT NULL COMMENT '用户最后发表时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wxwall_members` values('4','ob2qxjgbC8wTmFfmJdS14O-So_jg','你好','./tpl/Wap/default/common/images/avatar/avatar_5.jpg','10','0','0','1399785146');");
E_D("replace into `tp_wxwall_members` values('5','ob2qxjrkvps_SiWzUOEN2uyr1QlM','','','10','1','0','1399809496');");
E_D("replace into `tp_wxwall_members` values('6','opacVtwFJN7FiPLxCudkVdd7Y7fo','哈哈','./tpl/Wap/default/common/images/avatar/avatar_6.jpg','12','1','0','1400003921');");
E_D("replace into `tp_wxwall_members` values('7','ob2qxjgbC8wTmFfmJdS14O-So_jg','','','16','1','0','1400511761');");
E_D("replace into `tp_wxwall_members` values('8','oqh-ptxUIa11XsgZtPoMudmCZV7s','熙小亚','./tpl/Wap/default/common/images/avatar/avatar_1.jpg','18','1','0','1400514917');");
E_D("replace into `tp_wxwall_members` values('9','o2g40t5PGefQXyOR20Z1qtoFGy9Q','斤斤计较','./tpl/Wap/default/common/images/avatar/avatar_7.jpg','19','1','0','1400561359');");

require("../../inc/footer.php");
?>