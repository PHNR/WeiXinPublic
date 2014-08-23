<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_photo`;");
E_C("CREATE TABLE `tp_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(20) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `isshoinfo` tinyint(1) NOT NULL,
  `num` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `info` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_photo` values('1','avljgc1397041839','微最强','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','0','5','1','0','111');");
E_D("replace into `tp_photo` values('2','orbhyn1400224508','相册一','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','0','4','1','0','相册一');");
E_D("replace into `tp_photo` values('3','nepvyy1400393099','相册中心','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','0','4','1','0','相册中心');");
E_D("replace into `tp_photo` values('4','avljgc1397041839','1','http://wzweixiang.com/uploads/a/avljgc1397041839/8/d/1/f/538688ae5ebae.jpg','0','0','1','0','001');");

require("../../inc/footer.php");
?>