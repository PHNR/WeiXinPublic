<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_greeting_card`;");
E_C("CREATE TABLE `tp_greeting_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `bakcground_url` varchar(200) NOT NULL,
  `mp3` varchar(200) NOT NULL,
  `style` tinyint(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `zfname` varchar(60) NOT NULL,
  `copy` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_greeting_card` values('1','avljgc1397041839','0','11','贺卡','的撒','http://zgweixiang.com/tpl/static/attachment/focus/default/5.gif','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','http://zgweixiang.com/tpl/static/attachment/music/default/2.mp3','0','第三方','佛挡杀佛','东方闪电','第三方','1');");
E_D("replace into `tp_greeting_card` values('2','nepvyy1400393099','0','3','贺卡','贺卡','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','http://wzweixiang.com/tpl/static/attachment/music/default/2.mp3','0','贺卡','贺卡','贺卡','贺卡','0');");

require("../../inc/footer.php");
?>