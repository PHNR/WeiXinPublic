<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_photo_list`;");
E_C("CREATE TABLE `tp_photo_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `info` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `tp_photo_list` values('1','eewoyx1396338504','1','撒','0','http://138.wtoken.com/uploads/e/eewoyx1396338504/1/f/6/e/thumb_533bee25da850.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('2','avljgc1397041839','1','1111','0','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('3','avljgc1397041839','1','1','0','http://wzweixiang.com/tpl/static/attachment/focus/default/5.gif','0','1','1');");
E_D("replace into `tp_photo_list` values('4','orbhyn1400224508','2','美女','0','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('5','orbhyn1400224508','2','没人','0','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('6','orbhyn1400224508','2','没啊','0','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('7','avljgc1397041839','1','22','0','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('8','nepvyy1400393099','3','相册中心02','0','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('9','nepvyy1400393099','3','相册中心03','0','http://wzweixiang.com/tpl/static/attachment/background/bj/9.jpg','0','1','');");
E_D("replace into `tp_photo_list` values('10','nepvyy1400393099','3','相册中心04','0','http://wzweixiang.com/tpl/static/attachment/background/bj/11.jpg','0','1','');");

require("../../inc/footer.php");
?>