<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_vip`;");
E_C("CREATE TABLE `tp_member_card_vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` varchar(200) NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_vip` values('1','5','pvosmg1397034660','8.8折扣','0','1','0','0','使用本卡消费，享受83.8折优惠！','4','1397126499');");
E_D("replace into `tp_member_card_vip` values('2','16','wsupsl1400754187','特权','0','1','0','0','的','0','1400754596');");
E_D("replace into `tp_member_card_vip` values('3','15','avljgc1397041839','1411','0','1','0','0','111','1','1401259730');");
E_D("replace into `tp_member_card_vip` values('4','14','tzqawo1400308953','16161','0','1','0','0','32132132132','0','1401365504');");

require("../../inc/footer.php");
?>