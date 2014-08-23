<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_send_message`;");
E_C("CREATE TABLE `tp_send_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `msg_id` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `token` varchar(30) NOT NULL DEFAULT '',
  `msgtype` varchar(30) NOT NULL DEFAULT '',
  `text` varchar(800) NOT NULL DEFAULT '',
  `imgids` varchar(200) NOT NULL DEFAULT '',
  `mediasrc` varchar(200) NOT NULL DEFAULT '',
  `mediaid` varchar(100) NOT NULL DEFAULT '',
  `reachcount` int(10) NOT NULL DEFAULT '0',
  `groupid` int(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`time`),
  KEY `msg_id` (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_send_message` values('2','','','avljgc1397041839','text','测试','','','','0','0','1400569031');");
E_D("replace into `tp_send_message` values('3','','','avljgc1397041839','image','vdfgbfhgfhfthg f','','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','P6Imv4XJ7QZmioRa6yBbAC3_r10zpTVj-i-JxTQJsczcAb8fwsYQOl4umuRR_w57','1','0','1400671891');");
E_D("replace into `tp_send_message` values('4','','','avljgc1397041839','text','群发消息测试','','','','1','0','1400672023');");
E_D("replace into `tp_send_message` values('5','','','orbhyn1400224508','text','','','','','0','0','1401103796');");
E_D("replace into `tp_send_message` values('6','','','orbhyn1400224508','news','','','','','0','0','1401248154');");

require("../../inc/footer.php");
?>