<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_attribute`;");
E_C("CREATE TABLE `tp_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `catid` int(10) unsigned NOT NULL COMMENT '分类ID',
  `name` varchar(100) NOT NULL COMMENT '属性名',
  `value` varchar(100) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`catid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='商品的属性'");
E_D("replace into `tp_attribute` values('1','ozugxw1400589873','6','子1','1');");
E_D("replace into `tp_attribute` values('2','nepvyy1400393099','7','类型','衬衫衣服');");
E_D("replace into `tp_attribute` values('3','orbhyn1400224508','9','66','666');");
E_D("replace into `tp_attribute` values('4','orbhyn1400224508','10','23','23');");
E_D("replace into `tp_attribute` values('5','flpwvp1401090523','16','jhg','khjgj');");
E_D("replace into `tp_attribute` values('6','avljgc1397041839','5','44','44');");
E_D("replace into `tp_attribute` values('7','avljgc1397041839','5','25527','4445445');");
E_D("replace into `tp_attribute` values('8','avljgc1397041839','5','121','2121');");

require("../../inc/footer.php");
?>