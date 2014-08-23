<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_flash`;");
E_C("CREATE TABLE `tp_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `info` varchar(90) NOT NULL,
  `tip` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tip` (`tip`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='3g网站头部flash'");
E_D("replace into `tp_flash` values('9','wglagr1400037084','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','2');");
E_D("replace into `tp_flash` values('27','qpyzzq1401101914','http://wzweixiang.com/tpl/static/attachment/icon/lovely/eye.png','','1','1');");
E_D("replace into `tp_flash` values('3','mybtpp1399529433','http://wall.wtoken.com/tpl/static/attachment/background/view/6.jpg','','123','0');");
E_D("replace into `tp_flash` values('4','qtjnws1397994896','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','11','1');");
E_D("replace into `tp_flash` values('5','qtjnws1397994896','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','','','2');");
E_D("replace into `tp_flash` values('23','ozugxw1400589873','http://wzweixiang.com/tpl/static/attachment/focus/default/5.gif','{siteUrl}/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=ozugxw1400589873&amp;amp;wecha_id={wechat_id}','2','1');");
E_D("replace into `tp_flash` values('26','wsupsl1400754187','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','的','1');");
E_D("replace into `tp_flash` values('10','wglagr1400037084','http://wzweixiang.com/tpl/static/attachment/focus/default/6.jpg','','123','1');");
E_D("replace into `tp_flash` values('11','wglagr1400037084','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','','123123','1');");
E_D("replace into `tp_flash` values('12','rirjgb1400124807','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','','1');");
E_D("replace into `tp_flash` values('13','rirjgb1400124807','http://wzweixiang.com/tpl/static/attachment/focus/default/4.jpg','','','1');");
E_D("replace into `tp_flash` values('14','rirjgb1400124807','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','2');");
E_D("replace into `tp_flash` values('15','rirjgb1400124807','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','','','2');");
E_D("replace into `tp_flash` values('22','ozugxw1400589873','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','1','1');");
E_D("replace into `tp_flash` values('20','avljgc1397041839','http://wzweixiang.com/tpl/static/attachment/focus/default/6.jpg','','5454','1');");
E_D("replace into `tp_flash` values('21','avljgc1397041839','http://wzweixiang.com/tpl/static/attachment/background/bj/5.jpg','','的撒','2');");
E_D("replace into `tp_flash` values('17','tzqawo1400308953','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','','','2');");
E_D("replace into `tp_flash` values('24','orbhyn1400224508','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','{siteUrl}/index.php?g=Wap&amp;amp;m=Store&amp;amp;a=index&amp;amp;token=orbhyn1400224508&amp;amp;wecha_id={wechat_id}','测试幻灯片','1');");
E_D("replace into `tp_flash` values('28','ivrnef1401365899','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','',' ','1');");
E_D("replace into `tp_flash` values('29','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','','','1');");
E_D("replace into `tp_flash` values('30','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','','','1');");
E_D("replace into `tp_flash` values('31','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','','','1');");
E_D("replace into `tp_flash` values('32','lfethi1401449403','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','2');");

require("../../inc/footer.php");
?>