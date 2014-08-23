<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_keyword`;");
E_C("CREATE TABLE `tp_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `module` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=168 DEFAULT CHARSET=utf8");
E_D("replace into `tp_keyword` values('1','是是撒','1','avljgc1397041839','Home');");
E_D("replace into `tp_keyword` values('2','首页','2','ozugxw1400589873','Home');");
E_D("replace into `tp_keyword` values('3','客服','3','ozugxw1400589873','Kefu');");
E_D("replace into `tp_keyword` values('4','教育','1','avljgc1397041839','Schoolset');");
E_D("replace into `tp_keyword` values('5','我要上网','4','ozugxw1400589873','Router_config');");
E_D("replace into `tp_keyword` values('6','照片墙','25','ozugxw1400589873','zhaopianwall');");
E_D("replace into `tp_keyword` values('7','上墙','4','xkuxqy1400560689','Wall');");
E_D("replace into `tp_keyword` values('8','我要上网','5','xkuxqy1400560689','Router_config');");
E_D("replace into `tp_keyword` values('9','5555555','33','xkuxqy1400560689','Img');");
E_D("replace into `tp_keyword` values('10','团购裤子','8','nepvyy1400393099','Product');");
E_D("replace into `tp_keyword` values('11','挂号','2','nepvyy1400393099','medicalSet');");
E_D("replace into `tp_keyword` values('12','微信墙','5','avljgc1397041839','Wall');");
E_D("replace into `tp_keyword` values('13','首页','18','orbhyn1400224508','Home');");
E_D("replace into `tp_keyword` values('14','测试','21','nepvyy1400393099','Home');");
E_D("replace into `tp_keyword` values('15','微信墙','6','nepvyy1400393099','Wall');");
E_D("replace into `tp_keyword` values('16','酒','9','avljgc1397041839','Product');");
E_D("replace into `tp_keyword` values('37','','21','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('18','水果达人','19','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('19','砸金蛋','20','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('20','11','12','avljgc1397041839','Yuyue');");
E_D("replace into `tp_keyword` values('21','喜帖','1','avljgc1397041839','Wedding');");
E_D("replace into `tp_keyword` values('22','图文自定义内容','34','orbhyn1400224508','Img');");
E_D("replace into `tp_keyword` values('23','汽车','1','avljgc1397041839','Carset');");
E_D("replace into `tp_keyword` values('24','微医疗','3','avljgc1397041839','medicalSet');");
E_D("replace into `tp_keyword` values('25','111','6','xgtfui1400681463','Router_config');");
E_D("replace into `tp_keyword` values('26','汽车','2','nepvyy1400393099','Carset');");
E_D("replace into `tp_keyword` values('27','车主关怀','1','nepvyy1400393099','Carowner');");
E_D("replace into `tp_keyword` values('28','照片墙','1','avljgc1397041839','zhaopianwall');");
E_D("replace into `tp_keyword` values('29','学校','2','nepvyy1400393099','Schoolset');");
E_D("replace into `tp_keyword` values('30','食谱','1','nepvyy1400393099','Recipe');");
E_D("replace into `tp_keyword` values('31','ktv','1','avljgc1397041839','Ktv');");
E_D("replace into `tp_keyword` values('32','微KTV','2','nepvyy1400393099','Ktv');");
E_D("replace into `tp_keyword` values('33','酒吧','3','nepvyy1400393099','Jiuba');");
E_D("replace into `tp_keyword` values('34','楼盘','1','nepvyy1400393099','Estate');");
E_D("replace into `tp_keyword` values('35','会所','4','nepvyy1400393099','Huisuo');");
E_D("replace into `tp_keyword` values('36','喜帖','2','nepvyy1400393099','Wedding');");
E_D("replace into `tp_keyword` values('38','大转盘','22','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('39','优惠券','23','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('43','刮刮卡','27','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('42','大转盘','26','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('44','贺卡','2','nepvyy1400393099','Greeting_card');");
E_D("replace into `tp_keyword` values('45','水果达人','28','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('64','一站到底','21','nepvyy1400393099','Yzdd');");
E_D("replace into `tp_keyword` values('48','投票','13','nepvyy1400393099','Vote');");
E_D("replace into `tp_keyword` values('49','刮刮卡','30','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('50','砸金蛋','31','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('57','刮刮卡','5','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('52','刮刮卡','2','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('55','大转盘','3','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('58','刮刮卡','6','orbhyn1400224508','Lottery');");
E_D("replace into `tp_keyword` values('59','砸金蛋','7','avljgc1397041839','Lottery');");
E_D("replace into `tp_keyword` values('68','大转盘','12','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('69','刮刮卡','13','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('62','水果达人','10','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('63','砸金蛋','11','nepvyy1400393099','Lottery');");
E_D("replace into `tp_keyword` values('65','001','5','orbhyn1400224508','Yuyue');");
E_D("replace into `tp_keyword` values('66','美女额','35','nepvyy1400393099','Img');");
E_D("replace into `tp_keyword` values('67','美女啦','36','nepvyy1400393099','Img');");
E_D("replace into `tp_keyword` values('70','首页','22','wsupsl1400754187','Home');");
E_D("replace into `tp_keyword` values('71','照片','2','wsupsl1400754187','zhaopianwall');");
E_D("replace into `tp_keyword` values('72','微信墙','7','wsupsl1400754187','Wall');");
E_D("replace into `tp_keyword` values('77','都是俺的','4','avljgc1397041839','Wifi');");
E_D("replace into `tp_keyword` values('76','撒旦撒','2','avljgc1397041839','Wifi');");
E_D("replace into `tp_keyword` values('78','萨达萨达','6','avljgc1397041839','Wifi');");
E_D("replace into `tp_keyword` values('79','wifi','8','utxcrr1400760392','Wifi');");
E_D("replace into `tp_keyword` values('80','照片墙','3','utxcrr1400760392','zhaopianwall');");
E_D("replace into `tp_keyword` values('81','ktv','6','brogbh1400764930','Ktv');");
E_D("replace into `tp_keyword` values('82','1','8','orbhyn1400224508','Wall');");
E_D("replace into `tp_keyword` values('83','erw34tr45t','1','avljgc1397041839','Wifi');");
E_D("replace into `tp_keyword` values('84','一站到底','22','qpyzzq1401101914','Yzdd');");
E_D("replace into `tp_keyword` values('167','123','20','avljgc1397041839','Reservation');");
E_D("replace into `tp_keyword` values('166','保养1','19','avljgc1397041839','Reservation');");
E_D("replace into `tp_keyword` values('91','预约是','8','avljgc1397041839','Host');");
E_D("replace into `tp_keyword` values('92','首页','23','qpyzzq1401101914','Home');");
E_D("replace into `tp_keyword` values('93','客服','4','qpyzzq1401101914','Kefu');");
E_D("replace into `tp_keyword` values('94','预约1','7','avljgc1397041839','Yuyue');");
E_D("replace into `tp_keyword` values('95','14','8','ugyteu1401163507','Yuyue');");
E_D("replace into `tp_keyword` values('96','照片墙','4','orbhyn1400224508','zhaopianwall');");
E_D("replace into `tp_keyword` values('97','ktv','9','chsyqp1401254915','Ktv');");
E_D("replace into `tp_keyword` values('98','11','1','orbhyn1400224508','Panorama');");
E_D("replace into `tp_keyword` values('99','微信墙','9','sdqbre1401259557','Wall');");
E_D("replace into `tp_keyword` values('100','002','10','orbhyn1400224508','Yuyue');");
E_D("replace into `tp_keyword` values('104','报名','9','avljgc1397041839','Selfform');");
E_D("replace into `tp_keyword` values('102','001','11','gcpvcb1401284265','Yuyue');");
E_D("replace into `tp_keyword` values('103','001','12','pgdxmk1401284729','Yuyue');");
E_D("replace into `tp_keyword` values('105','jfg','10','tzqawo1400308953','Text');");
E_D("replace into `tp_keyword` values('106','1','8','rirgpp1401289818','Weilive');");
E_D("replace into `tp_keyword` values('107','33','24','rirgpp1401289818','Home');");
E_D("replace into `tp_keyword` values('108','KTV','13','rtzvcz1401302172','Ktv');");
E_D("replace into `tp_keyword` values('109','在线预定','14','rtzvcz1401302172','Yuyue');");
E_D("replace into `tp_keyword` values('110','在线预订','9','rtzvcz1401302172','Host');");
E_D("replace into `tp_keyword` values('111','照片墙','5','tzqawo1400308953','zhaopianwall');");
E_D("replace into `tp_keyword` values('112','大转盘','14','ivrnef1401365899','Lottery');");
E_D("replace into `tp_keyword` values('113','水果达人','15','ivrnef1401365899','Lottery');");
E_D("replace into `tp_keyword` values('114','微信墙','10','ivrnef1401365899','Wall');");
E_D("replace into `tp_keyword` values('115','360','2','ivrnef1401365899','Panorama');");
E_D("replace into `tp_keyword` values('116','预定','10','ivrnef1401365899','Host');");
E_D("replace into `tp_keyword` values('117','首页','25','ivrnef1401365899','Home');");
E_D("replace into `tp_keyword` values('118','戒指','17','ivrnef1401365899','Product');");
E_D("replace into `tp_keyword` values('119','预约','10','ivrnef1401365899','Selfform');");
E_D("replace into `tp_keyword` values('120','首页','26','tzqawo1400308953','Home');");
E_D("replace into `tp_keyword` values('121','砸金蛋','16','tzqawo1400308953','Lottery');");
E_D("replace into `tp_keyword` values('122','KTV','15','ivrnef1401365899','Ktv');");
E_D("replace into `tp_keyword` values('123','上墙','11','tzqawo1400308953','Wall');");
E_D("replace into `tp_keyword` values('124','预约','16','tzqawo1400308953','Yuyue');");
E_D("replace into `tp_keyword` values('125','预订','11','tzqawo1400308953','Host');");
E_D("replace into `tp_keyword` values('126','会所','17','tzqawo1400308953','Huisuo');");
E_D("replace into `tp_keyword` values('127','df','3','tzqawo1400308953','Wedding');");
E_D("replace into `tp_keyword` values('128','KTVC','18','tzqawo1400308953','Ktv');");
E_D("replace into `tp_keyword` values('129','撒地方','9','tzqawo1400308953','Weilive');");
E_D("replace into `tp_keyword` values('130','的飞','18','tzqawo1400308953','Product');");
E_D("replace into `tp_keyword` values('131','大转盘','17','tzqawo1400308953','Lottery');");
E_D("replace into `tp_keyword` values('132','水果达人','18','tzqawo1400308953','Lottery');");
E_D("replace into `tp_keyword` values('133','刮刮卡','19','tzqawo1400308953','Lottery');");
E_D("replace into `tp_keyword` values('134','飞','20','tzqawo1400308953','Lottery');");
E_D("replace into `tp_keyword` values('135','一站到底','23','tzqawo1400308953','Yzdd');");
E_D("replace into `tp_keyword` values('136','好机会','14','tzqawo1400308953','Reservation');");
E_D("replace into `tp_keyword` values('137','保养','15','tzqawo1400308953','Reservation');");
E_D("replace into `tp_keyword` values('138','关怀','1','tzqawo1400308953','Carowner');");
E_D("replace into `tp_keyword` values('139','汽车','1','tzqawo1400308953','Carset');");
E_D("replace into `tp_keyword` values('140','医疗','4','tzqawo1400308953','medicalSet');");
E_D("replace into `tp_keyword` values('141','食谱','2','tzqawo1400308953','Recipe');");
E_D("replace into `tp_keyword` values('142','教育','3','tzqawo1400308953','Schoolset');");
E_D("replace into `tp_keyword` values('143','上的','2','tzqawo1400308953','Estate');");
E_D("replace into `tp_keyword` values('144','发给','18','tzqawo1400308953','Reservation');");
E_D("replace into `tp_keyword` values('145','酒吧','19','tzqawo1400308953','Jiuba');");
E_D("replace into `tp_keyword` values('146','投票','3','tzqawo1400308953','Vote');");
E_D("replace into `tp_keyword` values('147','投片','4','tzqawo1400308953','Vote');");
E_D("replace into `tp_keyword` values('148','全景飞','3','tzqawo1400308953','Panorama');");
E_D("replace into `tp_keyword` values('149','看就看','11','tzqawo1400308953','Selfform');");
E_D("replace into `tp_keyword` values('150','wifi','2','tzqawo1400308953','Wifi');");
E_D("replace into `tp_keyword` values('151','微预约','20','ivrnef1401365899','Yuyue');");
E_D("replace into `tp_keyword` values('165','投票','13','avljgc1397041839','Vote');");

require("../../inc/footer.php");
?>