<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_exchange`;");
E_C("CREATE TABLE `tp_member_card_exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` mediumint(8) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `everyday` tinyint(4) NOT NULL,
  `continuation` tinyint(4) NOT NULL,
  `reward` tinyint(4) NOT NULL,
  `cardinfo` text NOT NULL,
  `cardinfo2` text NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_exchange` values('1','5','pvosmg1397034660','5','0','1','欢迎到本店使用电子会员卡','每天签到奖励5分，消费50元奖励1分。','1397132985');");
E_D("replace into `tp_member_card_exchange` values('2','6','avljgc1397041839','127','0','127','11','11','1399470345');");
E_D("replace into `tp_member_card_exchange` values('3','13','nepvyy1400393099','1','0','2','发礼品了哦','发礼品了哦','1400636848');");
E_D("replace into `tp_member_card_exchange` values('4','16','wsupsl1400754187','1','0','2','2222','1212','1400754568');");
E_D("replace into `tp_member_card_exchange` values('5','15','avljgc1397041839','127','0','127','10101','101','1401157462');");
E_D("replace into `tp_member_card_exchange` values('6','14','tzqawo1400308953','2','0','10','1','1','1401365445');");

require("../../inc/footer.php");
?>