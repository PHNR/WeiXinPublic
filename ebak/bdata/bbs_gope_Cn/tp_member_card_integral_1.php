<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_integral`;");
E_C("CREATE TABLE `tp_member_card_integral` (
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_integral` values('1','5','pvosmg1397034660','强生日抛美瞳隐形眼镜','50','1397132241','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	签到积分累计50分即可获得康视眼镜提供的强生日抛美瞳隐形眼镜。\r\n&lt;/p&gt;','0','1397132534');");
E_D("replace into `tp_member_card_integral` values('2','5','pvosmg1397034660','强生2周抛普通隐形眼镜','100','1397132444','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计100分即可获得康视眼镜提供的强生2周抛普通隐形眼镜。&lt;/span&gt; \r\n&lt;/p&gt;','0','1397132616');");
E_D("replace into `tp_member_card_integral` values('3','5','pvosmg1397034660','卫康125ml护理液/海昌120ml护理液','150','1397132559','1411142400','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计150分即可获得康视眼镜提供的卫康125ml护理液/海昌120ml护理液。&lt;/span&gt; \r\n&lt;/p&gt;','1','1397132800');");
E_D("replace into `tp_member_card_integral` values('4','5','pvosmg1397034660','康视100元代金券','200','1397132640','1397996640','&lt;p&gt;\r\n	微会员每日可到康视微站签到，5积分/天，累计签到积分可兑换礼品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span&gt;签到积分累计200分即可获得康视眼镜提供的&lt;/span&gt;康视100元代金券一张。\r\n&lt;/p&gt;','3','1397132830');");
E_D("replace into `tp_member_card_integral` values('6','6','avljgc1397041839','1111','0','1400326724','1401190724','订单','1','1400326729');");
E_D("replace into `tp_member_card_integral` values('7','13','nepvyy1400393099','发礼品了哦','10','1400636779','1401500779','10发礼品了哦','4','1400636788');");
E_D("replace into `tp_member_card_integral` values('8','16','wsupsl1400754187','礼品','50','1400754624','1401618624','的','0','1400754633');");
E_D("replace into `tp_member_card_integral` values('9','15','avljgc1397041839','江门万达发红包了','888','1401028776','1401892776','&lt;span style=&quot;font-family:Simsun;line-height:30px;background-color:#FFFFFF;&quot;&gt;9月8日晚8点，&quot;星耀万达 唱响侨乡&quot;2013江门万达金秋魅力大型演唱会，在江门新会体育馆激情唱响。李克勤、邓丽欣、林子祥、侧田、郑融等当红乐坛巨星同台献艺，倾情演唱。一年两次举办大型群星演唱会，彰显万达集团实力，更是万达回馈江门市民对其的支持和热捧&lt;/span&gt;','2','1401028813');");
E_D("replace into `tp_member_card_integral` values('10','14','tzqawo1400308953','福德宫打工好','2','1401420701','1402284701','大发光火大发光火','1','1401420709');");

require("../../inc/footer.php");
?>