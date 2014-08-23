<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_text`;");
E_C("CREATE TABLE `tp_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `type` varchar(1) NOT NULL,
  `text` text NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='文本回复表'");
E_D("replace into `tp_text` values('1','1','','是的','1','士大夫撒','1396607121','1396607121','0','eewoyx1396338504');");
E_D("replace into `tp_text` values('2','5','','你好','1','你好','1396718812','1396718812','0','lxxnfn1396718703');");
E_D("replace into `tp_text` values('3','5','','你好 去你妈的 在吗','2','你好 去你妈的 在吗','1396718825','1396718825','0','lxxnfn1396718703');");
E_D("replace into `tp_text` values('4','5','','猫扑网','1','你发个猫扑网干嘛？http://hangzhou.mop.com','1396719353','1396719353','0','lxxnfn1396718703');");
E_D("replace into `tp_text` values('5','3','','靠谱','1','靠谱','1399372524','1399372524','0','qbtshr1397819806');");
E_D("replace into `tp_text` values('6','3','','11','1','11','1399781922','1399781922','0','avljgc1397041839');");
E_D("replace into `tp_text` values('7','3','','11','1','啊啊1','1399781972','1399781972','0','avljgc1397041839');");
E_D("replace into `tp_text` values('8','12','','1','1','11111','1399998663','1399998663','0','isouej1399863564');");
E_D("replace into `tp_text` values('9','42','','首页','1','index','1400039276','1400039276','0','wglagr1400037084');");
E_D("replace into `tp_text` values('10','12','','jfg','1','jjf','1401289725','1401289725','0','tzqawo1400308953');");

require("../../inc/footer.php");
?>