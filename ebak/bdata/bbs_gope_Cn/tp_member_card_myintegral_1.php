<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_myintegral`;");
E_C("CREATE TABLE `tp_member_card_myintegral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `integral` int(8) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` text NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_myintegral` values('1','5','pvosmg1397034660','强生日抛美瞳隐形眼镜','50','1397132241','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	签到积分累计50分即可获得康视眼镜提供的强生日抛美瞳隐形眼镜。\r\n&lt;/p&gt;','0','1397132534');");
E_D("replace into `tp_member_card_myintegral` values('2','5','pvosmg1397034660','强生2周抛普通隐形眼镜','100','1397132444','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计100分即可获得康视眼镜提供的强生2周抛普通隐形眼镜。&lt;/span&gt; \r\n&lt;/p&gt;','0','1397132616');");
E_D("replace into `tp_member_card_myintegral` values('3','5','pvosmg1397034660','卫康125ml护理液/海昌120ml护理液','150','1397132559','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计150分即可获得康视眼镜提供的卫康125ml护理液/海昌120ml护理液。&lt;/span&gt; \r\n&lt;/p&gt;','1','1397132800');");
E_D("replace into `tp_member_card_myintegral` values('4','5','pvosmg1397034660','康视100元代金券','200','1397132640','1397996640','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计200分即可获得康视眼镜提供的&lt;/span&gt;康视100元代金券一张。\r\n&lt;/p&gt;','3','1397132830');");
E_D("replace into `tp_member_card_myintegral` values('5','6','avljgc1397041839','111111','10','1400047710','1400911710','1010101','0','1400047719');");

require("../../inc/footer.php");
?>