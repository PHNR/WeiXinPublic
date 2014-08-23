<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_coupon`;");
E_C("CREATE TABLE `tp_member_card_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `people` int(3) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` text NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_coupon` values('2','6','avljgc1397041839','11','1','0','1','1','1399392000','1400256000','111','0','1399470365');");
E_D("replace into `tp_member_card_coupon` values('3','6','avljgc1397041839','22','1','0','2','2','1399392000','1400256000','22','0','1399470374');");
E_D("replace into `tp_member_card_coupon` values('4','6','avljgc1397041839','11','1','0','11','11','1399392000','1400256000','11','0','1399470384');");
E_D("replace into `tp_member_card_coupon` values('5','16','wsupsl1400754187','优惠券','1','1','0','5','1400688000','1401552000','的','0','1400754616');");
E_D("replace into `tp_member_card_coupon` values('6','15','avljgc1397041839','1111','1','0','1','2','1401206400','1402070400','11111','0','1401259568');");
E_D("replace into `tp_member_card_coupon` values('7','14','tzqawo1400308953','上的阿斯顿','1','0','12','5','1401379200','1402243200','撒地方的','0','1401420647');");

require("../../inc/footer.php");
?>