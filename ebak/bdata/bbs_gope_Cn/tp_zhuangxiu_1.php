<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_zhuangxiu`;");
E_C("CREATE TABLE `tp_zhuangxiu` (
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
  `tel` varchar(50) DEFAULT NULL,
  `addtype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `token_2` (`token`),
  FULLTEXT KEY `token` (`token`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='美容简介'");
E_D("replace into `tp_zhuangxiu` values('52','avljgc1397041839','sdasdsa ','装修啦','0','http://wzweixiang.com/tpl/static/sucai/zhuangxiu/1.jpg','0','0','0','http://wzweixiang.com/tpl/static/sucai/zhuangxiu/2.png',NULL,'http://wzweixiang.com/tpl/static/sucai/zhuangxiu/4.png','','','','','','','','zhuangxiu');");

require("../../inc/footer.php");
?>