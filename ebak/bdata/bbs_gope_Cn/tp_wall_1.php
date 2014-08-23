<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wall`;");
E_C("CREATE TABLE `tp_wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(20) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `startbackground` varchar(100) NOT NULL DEFAULT '',
  `background` varchar(100) NOT NULL DEFAULT '',
  `endbackground` varchar(100) NOT NULL DEFAULT '',
  `isopen` tinyint(1) NOT NULL DEFAULT '1',
  `firstprizename` varchar(50) NOT NULL DEFAULT '',
  `firstprizepic` varchar(100) NOT NULL DEFAULT '',
  `firstprizecount` mediumint(5) NOT NULL DEFAULT '0',
  `secondprizename` varchar(50) NOT NULL DEFAULT '',
  `secondprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `secondprizepic` varchar(50) NOT NULL DEFAULT '',
  `thirdprizename` varchar(50) NOT NULL DEFAULT '',
  `thirdprizepic` varchar(100) NOT NULL DEFAULT '',
  `thirdprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `fourthprizename` varchar(50) NOT NULL DEFAULT '',
  `fourthprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `fourthprizepic` varchar(100) NOT NULL DEFAULT '',
  `fifthprizename` varchar(50) NOT NULL DEFAULT '',
  `fifthprizecount` mediumint(5) NOT NULL DEFAULT '0',
  `fifthprizepic` varchar(100) NOT NULL DEFAULT '',
  `sixthprizename` varchar(50) NOT NULL DEFAULT '',
  `sixthprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `sixthprizepic` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(60) NOT NULL DEFAULT '',
  `qrcode` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wall` values('2','dhcbhj1400562529','1400562697','','111','','','','1','11','','0','','0','','','','0','','0','','','0','','','0','','111','');");
E_D("replace into `tp_wall` values('5','avljgc1397041839','1400635035','http://wzweixiang.com/tpl/static/attachment/focus/default/5.gif','大屏幕','','http://wzweixiang.com/tpl/static/attachment/background/bj/1.jpg','http://wzweixiang.com/tpl/static/attachment/background/bj/12.jpg','1','美女一名','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','1','','0','','','','0','','0','','','0','','','0','','微信墙','http://open.weixin.qq.com/qr/code/?username=gh_b95a43080756');");
E_D("replace into `tp_wall` values('4','xkuxqy1400560689','1400592775','http://wzweixiang.com/uploads/x/xkuxqy1400560689/e/0/d/4/thumb_537b5941cc428.jpg','微信墙','','','','1','10元','','1','5元','2','','1元','','10','','0','','','0','','','0','','上墙','http://wzweixiang.com/uploads/x/xkuxqy1400560689/b/9/6/6/thumb_537b58e257251.jpg');");
E_D("replace into `tp_wall` values('6','nepvyy1400393099','1400637698','http://wzweixiang.com/tpl/static/attachment/background/bj/2.jpg','微信墙','http://wzweixiang.com/tpl/static/attachment/background/bj/4.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','1','iphone5s','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','1','','0','','','','0','','0','','','0','','','0','','微信墙','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg');");
E_D("replace into `tp_wall` values('7','wsupsl1400754187','1400754477','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','的','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','1','的','http://wzweixiang.com/uploads/w/wsupsl1400754187/b/8/7/4/thumb_537dd129e2b6c.jpg','1','','0','','','','0','','0','','','0','','','0','','微信墙','');");
E_D("replace into `tp_wall` values('8','orbhyn1400224508','1400781052','1','12','1','1','1','1','1','1','1','1','1','1','1','1','1','','0','','','0','','','0','','1','1');");
E_D("replace into `tp_wall` values('9','sdqbre1401259557','1401259881','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-up.png','微信墙','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','1','1111','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','1','','0','','','','0','','0','','','0','','','0','','微信墙','http://wzweixiang.com/uploads/s/sdqbre1401259557/8/6/0/e/thumb_538587574df3e.jpg');");
E_D("replace into `tp_wall` values('10','ivrnef1401365899','1401367146','http://wzweixiang.com/uploads/i/ivrnef1401365899/c/8/c/b/thumb_538729b572420.jpg','大促销了','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg','1','1','http://wzweixiang.com/tpl/static/attachment/icon/lovely/bookmark.png','11','','0','','','','0','','0','','','0','','','0','','微信墙','http://wzweixiang.com/uploads/i/ivrnef1401365899/c/8/c/b/thumb_538729b572420.jpg');");
E_D("replace into `tp_wall` values('11','tzqawo1400308953','1401371968','http://wzweixiang.com/tpl/static/attachment/icon/lovely/knife.png','464564','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','','','1','关怀','','10','','0','','','','0','','0','','','0','','','0','','上墙','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/6/b/a/thumb_5388182abdda4.png');");

require("../../inc/footer.php");
?>