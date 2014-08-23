<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_estate`;");
E_C("CREATE TABLE `tp_estate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `matchtype` tinyint(11) NOT NULL COMMENT '关键词匹配模式：',
  `cover` varchar(200) NOT NULL COMMENT '图文消息封面',
  `panorama_id` int(11) NOT NULL,
  `classify_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `video` varchar(200) DEFAULT NULL,
  `house_banner` varchar(200) NOT NULL,
  `place` varchar(80) NOT NULL DEFAULT '',
  `lng` varchar(15) NOT NULL,
  `lat` varchar(15) NOT NULL,
  `estate_desc` text NOT NULL,
  `project_brief` text NOT NULL,
  `traffic_desc` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `token_2` (`token`),
  FULLTEXT KEY `token` (`token`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='楼盘简介'");
E_D("replace into `tp_estate` values('1','nepvyy1400393099','楼盘','楼盘','0','1','0','92','12','1','1','1','1','1','1','11','1','1');");
E_D("replace into `tp_estate` values('2','tzqawo1400308953','撒','上的','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/r2d2.png','0','67','16','http://wzweixiang.com/tpl/static/attachment/icon/lovely/calc.png','http://static.video.qq.com/TPout.swf?vid=v0119s27wd5&amp;auto=0 ','http://wzweixiang.com/tpl/static/attachment/icon/lovely/hamburger.png','撒地方是','110.385506','29.141007','地方规划就','合格就开工好就','合格规划');");

require("../../inc/footer.php");
?>