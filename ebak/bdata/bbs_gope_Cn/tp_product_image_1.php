<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_image`;");
E_C("CREATE TABLE `tp_product_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL COMMENT '商品ID',
  `image` varchar(200) NOT NULL COMMENT '图片地址',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商品配图'");
E_D("replace into `tp_product_image` values('1','6','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg');");
E_D("replace into `tp_product_image` values('2','6','http://wzweixiang.com/tpl/static/attachment/focus/default/4.jpg');");
E_D("replace into `tp_product_image` values('3','7','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg');");
E_D("replace into `tp_product_image` values('4','10','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg');");
E_D("replace into `tp_product_image` values('5','10','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg');");
E_D("replace into `tp_product_image` values('6','11','http://wzweixiang.com/uploads/r/rgccej1400813594/3/b/9/9/thumb_537ebc5822f73.jpg');");
E_D("replace into `tp_product_image` values('7','12','http://wzweixiang.com/uploads/f/flpwvp1401090523/1/8/9/a/thumb_5382f3629e0dd.png');");
E_D("replace into `tp_product_image` values('8','16','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg');");
E_D("replace into `tp_product_image` values('9','16','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg');");
E_D("replace into `tp_product_image` values('10','16','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/8/0/e/thumb_538721dce23fa.jpg');");

require("../../inc/footer.php");
?>