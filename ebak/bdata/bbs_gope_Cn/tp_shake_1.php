<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_shake`;");
E_C("CREATE TABLE `tp_shake` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `isact` int(1) NOT NULL DEFAULT '0',
  `acttitle` varchar(40) NOT NULL,
  `isopen` int(1) NOT NULL DEFAULT '0',
  `clienttime` int(11) NOT NULL DEFAULT '3',
  `showtime` int(10) NOT NULL DEFAULT '3',
  `shownum` int(11) NOT NULL DEFAULT '10',
  `pass` varchar(150) DEFAULT NULL,
  `joinnum` int(11) DEFAULT NULL,
  `shaketype` int(11) NOT NULL DEFAULT '1',
  `token` varchar(40) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `endtime` varchar(13) DEFAULT NULL,
  `pass2` varchar(150) DEFAULT NULL,
  `pass3` varchar(150) DEFAULT NULL,
  `starttime` int(11) NOT NULL,
  `endshake` int(11) NOT NULL,
  `qrcode` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `tp_shake` values('1','1','微享','2','3','3','10','http://138.wtoken.com/tpl/static/attachment/background/view/2.jpg','0','1','eewoyx1396338504','1396439428','1396951833','http://138.wtoken.com/tpl/static/attachment/music/default/1.mp3','http://138.wtoken.com/tpl/static/attachment/music/default/3.mp3','3','133','');");
E_D("replace into `tp_shake` values('2','1','微享','1','3','3','10','',NULL,'1','eewoyx1396338504','1396951846',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('22','1','默认活动','1','3','3','10','',NULL,'1','qtjnws1397994896','1399697171',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('32','0','默认活动','1','3','3','10','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg',NULL,'2','ivrnef1401365899','1401366969',NULL,'http://wzweixiang.com/tpl/static/attachment/music/default/10.mp3','http://wzweixiang.com/tpl/static/attachment/music/default/1.mp3','3','133','http://wzweixiang.com/uploads/i/ivrnef1401365899/c/8/c/b/thumb_538729b572420.jpg');");
E_D("replace into `tp_shake` values('5','0','默认活动','1','3','3','10','',NULL,'1','vwlytb1397998231','1398063147',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('13','1','默认活动','2','3','3','10','http://wall.wtoken.com/tpl/static/attachment/background/view/1.jpg','1','1','qtjnws1397994896','1398090185','1399209845','http://wall.wtoken.com/tpl/static/attachment/music/default/1.mp3','http://wall.wtoken.com/tpl/static/attachment/music/default/3.mp3','3','133','http://wall.wtoken.com/tpl/static/attachment/focus/default/1.gif');");
E_D("replace into `tp_shake` values('23','1','默认活动','1','3','3','10','http://wzweixiang.com/tpl/static/attachment/background/bj/3.jpg',NULL,'1','avljgc1397041839','1399780101',NULL,'http://wzweixiang.com/tpl/static/attachment/music/default/4.mp3','http://wzweixiang.com/tpl/static/attachment/music/default/5.mp3','3','133','http://open.weixin.qq.com/qr/code/?username=gh_b95a43080756');");
E_D("replace into `tp_shake` values('19','1','默认活动','1','3','3','10','',NULL,'1','mybtpp1399529433','1399614262',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('26','1','默认活动','2','3','3','10','','1','1','tzqawo1400308953','1400310034','1401371635','','','5','133','');");
E_D("replace into `tp_shake` values('25','0','默认活动','0','3','3','10','',NULL,'1','rirjgb1400124807','1400220893',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('27','1','默认活动','1','3','3','10','',NULL,'1','orbhyn1400224508','1400513122',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('28','0','默认活动','1','3','3','10','',NULL,'1','omcmpf1400514094','1400559557',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('29','1','默认活动','1','3','3','10','',NULL,'1','xkuxqy1400560689','1400561067',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('30','1','默认活动','2','3','3','10','','0','1','nepvyy1400393099','1400637378','1400637529','','','3','60','');");
E_D("replace into `tp_shake` values('31','0','摇一摇','1','3','3','10','',NULL,'1','nepvyy1400393099','1400638124',NULL,'','','3','133','');");
E_D("replace into `tp_shake` values('33','1','默认活动','1','3','3','10','',NULL,'1','tzqawo1400308953','1401371648',NULL,'','','3','133','');");

require("../../inc/footer.php");
?>