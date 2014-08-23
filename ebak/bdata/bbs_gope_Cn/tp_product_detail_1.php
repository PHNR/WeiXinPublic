<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_detail`;");
E_C("CREATE TABLE `tp_product_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '商品ID',
  `format` varchar(100) NOT NULL COMMENT '商品的规格（大小）',
  `color` varchar(100) NOT NULL COMMENT '颜色',
  `num` int(10) unsigned NOT NULL COMMENT '数量',
  `price` float NOT NULL COMMENT '价格',
  `vprice` float NOT NULL,
  `logo` varchar(200) NOT NULL COMMENT '图标',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='商品的数量(详细)表'");
E_D("replace into `tp_product_detail` values('2','7','5','4','94','26','1000','');");
E_D("replace into `tp_product_detail` values('3','10','0','6','0','0','0','');");
E_D("replace into `tp_product_detail` values('4','13','8','0','96','20','20','');");
E_D("replace into `tp_product_detail` values('5','12','8','0','0','20','0','');");
E_D("replace into `tp_product_detail` values('6','14','9','0','98','0','0','');");
E_D("replace into `tp_product_detail` values('7','14','10','0','90','0','0','');");
E_D("replace into `tp_product_detail` values('8','14','11','0','99','0','0','');");

require("../../inc/footer.php");
?>