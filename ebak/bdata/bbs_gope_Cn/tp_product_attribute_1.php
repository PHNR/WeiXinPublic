<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_attribute`;");
E_C("CREATE TABLE `tp_product_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL COMMENT '属性ID',
  `pid` int(10) unsigned NOT NULL COMMENT '商品ID',
  `name` varchar(100) NOT NULL COMMENT '属性名',
  `value` varchar(100) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='商品属性表'");
E_D("replace into `tp_product_attribute` values('1','1','6','子1','1');");
E_D("replace into `tp_product_attribute` values('2','2','7','类型','衬衫衣服');");
E_D("replace into `tp_product_attribute` values('3','5','13','jhg','khjgj');");
E_D("replace into `tp_product_attribute` values('4','6','14','44','44');");

require("../../inc/footer.php");
?>