<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_cat`;");
E_C("CREATE TABLE `tp_product_cat` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL DEFAULT '',
  `parentid` mediumint(4) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  `norms` varchar(100) NOT NULL COMMENT '分类产品的规格',
  `color` varchar(100) NOT NULL COMMENT '分类产品的外观',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `token` (`token`),
  KEY `dining` (`dining`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_cat` values('3','dhcbhj1400562529','11','','0','11','0','1400562565','11','11');");
E_D("replace into `tp_product_cat` values('5','avljgc1397041839','111121','','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/chalkboard.png','0','1400566431','11110','0');");
E_D("replace into `tp_product_cat` values('6','ozugxw1400589873','测试1','受到公司的似的','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/backpack-2.png','0','1400591063','尺码','颜色');");
E_D("replace into `tp_product_cat` values('7','nepvyy1400393099','衣服','衣服','0','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','0','1400630758','鞋码','颜色');");
E_D("replace into `tp_product_cat` values('10','orbhyn1400224508','衣服','的的的顶顶顶顶顶顶顶顶顶顶','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/backpack-2.png','0','1400685830','衣长','颜色');");
E_D("replace into `tp_product_cat` values('11','orbhyn1400224508','帽子','呃呃呃','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/car.png','0','1400685860','帽长','帽厚');");
E_D("replace into `tp_product_cat` values('12','orbhyn1400224508','鞋子','鞋子','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/bus.png','0','1400685889','鞋子','鞋子');");
E_D("replace into `tp_product_cat` values('13','orbhyn1400224508','内衣','内衣','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-error.png','0','1400685914','内衣','内衣');");
E_D("replace into `tp_product_cat` values('14','rgccej1400813594','吊灯','','0','http://wzweixiang.com/uploads/r/rgccej1400813594/6/4/c/b/thumb_537ebbd59c8af.jpg','0','1400814555','','');");
E_D("replace into `tp_product_cat` values('15','rgccej1400813594','水晶灯','','0','http://wzweixiang.com/uploads/r/rgccej1400813594/d/9/b/c/thumb_537ebbf05a0cf.jpg','0','1400814580','','');");
E_D("replace into `tp_product_cat` values('16','flpwvp1401090523','rdeshgyrth','fdgh','0','http://wzweixiang.com/uploads/f/flpwvp1401090523/1/8/9/a/thumb_5382f3629e0dd.png','0','1401090763','fhdfg','fdghd');");
E_D("replace into `tp_product_cat` values('17','avljgc1397041839','41141','','0','http://wzweixiang.com/uploads/a/avljgc1397041839/f/9/6/4/thumb_536f266ec62ab.jpg','0','1401099171','','');");
E_D("replace into `tp_product_cat` values('18','avljgc1397041839','4554','','0','http://wzweixiang.com/tpl/static/attachment/focus/default/5.gif','0','1401099179','','');");
E_D("replace into `tp_product_cat` values('19','avljgc1397041839','5454','','0','http://wzweixiang.com/tpl/static/attachment/focus/default/6.jpg','0','1401099188','','');");
E_D("replace into `tp_product_cat` values('20','chsyqp1401254915','苹果','','0','http://wzweixiang.com/tpl/static/attachment/focus/default/1.gif','0','1401258624','','');");
E_D("replace into `tp_product_cat` values('21','rirgpp1401289818','www','','0','http://wzweixiang.com/uploads/r/rirgpp1401289818/2/7/3/1/thumb_53860482e4b15.jpg','0','1401291912','','');");
E_D("replace into `tp_product_cat` values('22','tzqawo1400308953','测试','1','0','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','0','1401365085','','');");
E_D("replace into `tp_product_cat` values('23','ivrnef1401365899','黄金','11','0','http://wzweixiang.com/uploads/i/ivrnef1401365899/7/3/d/a/thumb_5387286fb5ac7.jpg','0','1401369800','','');");

require("../../inc/footer.php");
?>