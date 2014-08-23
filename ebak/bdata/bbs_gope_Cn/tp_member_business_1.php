<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_business`;");
E_C("CREATE TABLE `tp_member_business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `crate_time` int(11) NOT NULL DEFAULT '0',
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `catid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `font_img` varchar(100) NOT NULL DEFAULT '',
  `font_summary` varchar(300) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `displayorder` smallint(6) NOT NULL DEFAULT '0',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `addr` varchar(300) NOT NULL DEFAULT '',
  `style` varchar(100) NOT NULL DEFAULT '',
  `flag_c` tinyint(1) NOT NULL DEFAULT '0',
  `flag_x` tinyint(2) NOT NULL DEFAULT '0',
  `flag_z` tinyint(2) NOT NULL DEFAULT '0',
  `flag_q` tinyint(2) NOT NULL DEFAULT '0',
  `map` varchar(200) NOT NULL DEFAULT '',
  `schedule` varchar(3000) NOT NULL DEFAULT '',
  `ad_1` varchar(200) NOT NULL DEFAULT '',
  `ad_2` varchar(200) NOT NULL DEFAULT '',
  `ad_3` varchar(200) NOT NULL DEFAULT '',
  `url_ad_1` varchar(200) NOT NULL DEFAULT '',
  `url_ad_2` varchar(200) NOT NULL DEFAULT '',
  `url_ad_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_member_business` values('1','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/3/f/0/thumb_536876fb1af76.png','速度','1399368748','微最强','1','微最强2048','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','微最强2048','','速度','0','18267720632','打撒阿达','weilive_style_1','1','5','0','1','323232','打撒','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','','','','');");
E_D("replace into `tp_member_business` values('2','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','东方大厦','1399370377','招商地产啊','1','速度','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/a/c/b/thumb_5365b368b0d2b.jpg','打撒的','','萨达萨达','0','122222','的撒大','weilive_style_2','1','5','0','1','','范德萨发生地方','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/a/c/b/thumb_5365b368b0d2b.jpg','','','','','');");
E_D("replace into `tp_member_business` values('3','qtjnws1397994896','','','1399819534','we','3','we','','wewe','wewe','','0','','','weilive_style_1','0','5','0','1','','','','','','','','');");
E_D("replace into `tp_member_business` values('4','avljgc1397041839','','','1400296311','10','2','1','','1','','','0','','','weilive_style_1','0','5','0','1','','','','','','','','');");
E_D("replace into `tp_member_business` values('5','avljgc1397041839','','','1400296945','说下佛挡杀佛DSFSDF FSDF SDF ','2','','','','','','0','','','weilive_style_1','0','5','0','1','','','','','','','','');");
E_D("replace into `tp_member_business` values('7','nepvyy1400393099','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','商户啦','1400399377','商户','10','商户啦','http://wzweixiang.com/tpl/static/attachment/background/view/5.jpg','商户啦','','点逸雅居商户','0','0898-66291285','','weilive_style_1','1','5','0','1','海口','商户啦','http://wzweixiang.com/tpl/static/attachment/icon/lovely/hamburger.png','','','','','');");
E_D("replace into `tp_member_business` values('8','rirgpp1401289818','','','1401291200','1','16','11','','','','','0','','','weilive_style_1','0','5','0','1','','','','','','','','');");
E_D("replace into `tp_member_business` values('9','tzqawo1400308953','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','上的','1401414014','撒地方','18','打算','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','上的','','上的飞','0','的','上的','weilive_style_1','1','5','0','3','','地方','','','','','','');");

require("../../inc/footer.php");
?>