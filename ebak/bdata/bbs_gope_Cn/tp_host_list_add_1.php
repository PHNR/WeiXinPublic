<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_host_list_add`;");
E_C("CREATE TABLE `tp_host_list_add` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hid` int(11) NOT NULL COMMENT '商家id',
  `token` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT '房间类型',
  `typeinfo` varchar(100) NOT NULL COMMENT '简要说明',
  `price` decimal(10,2) NOT NULL COMMENT '原价：',
  `yhprice` decimal(10,2) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '文字描述',
  `picurl` varchar(110) NOT NULL COMMENT '图片地址',
  `url` varchar(100) NOT NULL COMMENT '图片跳转地址以http',
  `info` text NOT NULL COMMENT '配套设施',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='房间类型信息表'");
E_D("replace into `tp_host_list_add` values('1','1','avljgc1397041839','深达声','大神打','11.00','11.00','','','','撒旦');");
E_D("replace into `tp_host_list_add` values('2','3','wglagr1400037084','标准房/商务套房','标准房/商务套房','800.00','800.00','标准房/商务套房','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','http://www.baidu.com','标准房/商务套房标准房/商务套房');");
E_D("replace into `tp_host_list_add` values('3','4','vhnpth1399864000','标准房','2','388.00','288.00','!cdn_table','1','','w');");
E_D("replace into `tp_host_list_add` values('4','5','imywfr1400223186','标准房','2','388.00','288.00','1','1','1','q');");
E_D("replace into `tp_host_list_add` values('5','6','fbcsqj1400322782','标准房','2','388.00','288.00','1','1','','1');");
E_D("replace into `tp_host_list_add` values('6','7','nepvyy1400393099','标准房/商务套房','适合2人','156.00','120.00','','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','','适合2人');");
E_D("replace into `tp_host_list_add` values('7','8','avljgc1397041839','q上达到','倒萨大','111.00','0.00','萨达','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','','倒萨倒萨倒萨倒萨');");
E_D("replace into `tp_host_list_add` values('8','10','ivrnef1401365899','标准房','单床','111.00','11.00','11','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','','2211');");
E_D("replace into `tp_host_list_add` values('9','10','ivrnef1401365899','标准房','单床','111.00','11.00','11','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','','2211');");
E_D("replace into `tp_host_list_add` values('10','11','tzqawo1400308953','如:&amp;quot;标准房/商务套房&amp;quot;','字尽量少，','158.00','128.00','测试功能','http://9.vifnn.com/uploads/s/sdgfvt1400163081/7/8/9/c/thumb_5374d870dc4af.jpg','','东山饭店是');");

require("../../inc/footer.php");
?>