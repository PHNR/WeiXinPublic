<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product`;");
E_C("CREATE TABLE `tp_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sort` int(10) NOT NULL DEFAULT '0',
  `catid` mediumint(4) NOT NULL DEFAULT '0',
  `storeid` mediumint(4) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '',
  `price` float NOT NULL DEFAULT '0',
  `vprice` float NOT NULL,
  `oprice` float NOT NULL DEFAULT '0',
  `mailprice` float NOT NULL COMMENT '邮费',
  `discount` float NOT NULL DEFAULT '10',
  `intro` text NOT NULL,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(100) NOT NULL DEFAULT '',
  `salecount` mediumint(4) NOT NULL DEFAULT '0',
  `logourl` varchar(150) NOT NULL DEFAULT '',
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `groupon` tinyint(1) NOT NULL DEFAULT '0',
  `endtime` int(10) NOT NULL DEFAULT '0',
  `fakemembercount` mediumint(4) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  `num` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `catid` (`catid`,`storeid`),
  KEY `catid_2` (`catid`),
  KEY `storeid` (`storeid`),
  KEY `token` (`token`),
  KEY `price` (`price`),
  KEY `oprice` (`oprice`),
  KEY `discount` (`discount`),
  KEY `dining` (`dining`),
  KEY `groupon` (`groupon`,`endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product` values('3','100','5','0','sd a','111','11','11','100','10','01010','avljgc1397041839','01','3','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','0','0','0','0','1400582925','97');");
E_D("replace into `tp_product` values('4','100','5','0','速度爱仕达','111','11','11','111','10','54544','avljgc1397041839','11','11','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','0','0','0','0','1400590139','1100');");
E_D("replace into `tp_product` values('5','100','5','0','2332.','2.1','0.12','0','0','10','','avljgc1397041839','','0','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','0','0','0','0','1401098696','0');");
E_D("replace into `tp_product` values('6','100','6','0','商铺内1','100','98','102','5','10','梵蒂冈地方&amp;nbsp;','ozugxw1400589873','特大','4','http://wzweixiang.com/tpl/static/attachment/icon/lovely/1.png','0','0','0','0','1400591355','6');");
E_D("replace into `tp_product` values('7','100','7','0','衬衫衣服','56','26','66','10','10','衬衫衬衫衬衫','nepvyy1400393099','衬衫','7','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg','0','0','0','0','1400728296','994');");
E_D("replace into `tp_product` values('8','0','8388607','1','团购裤子阿','26','0','36','0','7.2','团购裤子阿团购裤子阿','nepvyy1400393099','团购裤子','6','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','0','1','1401551999','165','1400631171','0');");
E_D("replace into `tp_product` values('9','0','8388607','1','团购测试','10','0','10','0','10','团购测试啊','avljgc1397041839','酒','10','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','0','1','1527782399','1000','1400643186','0');");
E_D("replace into `tp_product` values('10','100','10','0','内衣','55','55','55','66','10','内衣','orbhyn1400224508','55','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/clock.png','0','0','0','0','1400739848','55');");
E_D("replace into `tp_product` values('11','100','14','0','精品吊灯01','888','888','888','0','10','','rgccej1400813594','吊灯','3','http://wzweixiang.com/uploads/r/rgccej1400813594/d/6/9/b/thumb_537ebc4cb2b96.jpg','0','0','0','0','1400814689','2');");
E_D("replace into `tp_product` values('12','100','16','0','fghdfhgdf','20','18','25','0','10','65415163','flpwvp1401090523','gt','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/bill.png','0','0','0','0','1401091308','1000');");
E_D("replace into `tp_product` values('13','100','16','0','了；就','20','20','10','54165','10','','flpwvp1401090523','个多','4','http://wzweixiang.com/tpl/static/attachment/icon/white/3.png','0','0','0','0','1401091431','16');");
E_D("replace into `tp_product` values('14','100','5','0','4554','4545','4545','4554','5454','10','&lt;img src=&quot;/uploads/a/avljgc1397041839/a/2/a/0/5386889f7f4b3.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/uploads/a/avljgc1397041839/0/4/3/c/538688a7bc591.png&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/uploads/a/avljgc1397041839/8/d/1/f/538688ae5ebae.jpg&quot; alt=&quot;&quot; /&gt;','avljgc1397041839','','35','','0','0','0','0','1401326149','5544');");
E_D("replace into `tp_product` values('15','100','20','0','5s','4888','4888','5288','0','10','','chsyqp1401254915','5s','1','','0','0','0','0','1401258749','9');");
E_D("replace into `tp_product` values('16','100','22','0','绝世美女一个','128','28.1','1888','1','10','111','tzqawo1400308953','美女','3','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','0','0','0','0','1401366140','7');");
E_D("replace into `tp_product` values('17','100','23','1','戒指','11','0','111','0','1','2211','ivrnef1401365899','戒指','1','','0','0','0','0','1401370087','110');");
E_D("replace into `tp_product` values('18','0','8388607','1','的说法','12','0','15','0','8','的双方各&amp;nbsp;','tzqawo1400308953','的飞','1','http://wzweixiang.com/tpl/static/attachment/background/view/5.jpg','0','1','1402329599','3','1401414313','0');");

require("../../inc/footer.php");
?>