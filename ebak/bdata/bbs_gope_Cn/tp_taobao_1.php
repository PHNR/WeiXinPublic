<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_taobao`;");
E_C("CREATE TABLE `tp_taobao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(64) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `homeurl` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_taobao` values('1','orbhyn1400224508','淘宝','234234','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','http://beilimy.m.tmall.com/','1401180253');");
E_D("replace into `tp_taobao` values('2','tzqawo1400308953','淘宝','示范岗','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','http://shop104008058.m.taobao.com/','1401414732');");

require("../../inc/footer.php");
?>