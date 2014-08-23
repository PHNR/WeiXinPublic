<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_ktv_photo`;");
E_C("CREATE TABLE `tp_ktv_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `show_order` int(5) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `topic1` varchar(100) DEFAULT NULL,
  `topic2` varchar(100) DEFAULT NULL,
  `topic3` varchar(100) DEFAULT NULL,
  `topic4` varchar(100) DEFAULT NULL,
  `topic5` varchar(100) DEFAULT NULL,
  `topic6` varchar(100) DEFAULT NULL,
  `topic7` varchar(100) DEFAULT NULL,
  `topic8` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_ktv_photo` values('1','avljgc1397041839','aaa','1','sdasdasd','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/a/8/6/53546f4df36c0.jpg','','','','','','','1');");
E_D("replace into `tp_ktv_photo` values('2','avljgc1397041839','QUNIMA','2','SADASD','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','http://wall.wtoken.com/tpl/static/attachment/focus/default/3.jpg','http://wall.wtoken.com/tpl/static/attachment/focus/default/6.jpg','','','','','','1');");

require("../../inc/footer.php");
?>