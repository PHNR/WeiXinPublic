<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_business_ad`;");
E_C("CREATE TABLE `tp_member_business_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `bid` int(60) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '',
  `img` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `position` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`bid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_member_business_ad` values('1','avljgc1397041839','0','撒的','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','','1399370066','1');");
E_D("replace into `tp_member_business_ad` values('2','avljgc1397041839','0','11111','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/3/f/0/thumb_536876fb1af76.png','','1399372747','5');");
E_D("replace into `tp_member_business_ad` values('3','avljgc1397041839','0','jhj','http://wall.wtoken.com/uploads/a/avljgc1397041839/e/5/7/4/thumb_536c43612e394.jpg','','1399604069','4');");
E_D("replace into `tp_member_business_ad` values('4','qtjnws1397994896','0','fdsfd','http://wall.wtoken.com/uploads/q/qtjnws1397994896/5/a/2/e/thumb_535f75f37f1af.jpg','fsf','1399665227','1');");
E_D("replace into `tp_member_business_ad` values('5','avljgc1397041839','0','121','','11','1399745268','0');");
E_D("replace into `tp_member_business_ad` values('6','isouej1399863564','0','地方','','申达股份','1400028708','4');");
E_D("replace into `tp_member_business_ad` values('7','wglagr1400037084','0','testad','http://wzweixiang.com/uploads/w/wglagr1400037084/8/6/c/e/thumb_53732b6490b91.png','11','1400056707','4');");
E_D("replace into `tp_member_business_ad` values('8','orbhyn1400224508','0','土特产广告联盟','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','','1400314856','0');");
E_D("replace into `tp_member_business_ad` values('9','nepvyy1400393099','0','广告投放1','http://wzweixiang.com/tpl/static/attachment/icon/lovely/candy.png','','1400396663','1');");
E_D("replace into `tp_member_business_ad` values('10','rirgpp1401289818','0','333','http://wzweixiang.com/uploads/r/rirgpp1401289818/f/7/6/b/thumb_538600a1e33cd.jpg','','1401290922','0');");
E_D("replace into `tp_member_business_ad` values('11','tzqawo1400308953','0',' 地方','','','1401414237','1');");

require("../../inc/footer.php");
?>