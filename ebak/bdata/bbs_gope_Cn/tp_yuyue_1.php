<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yuyue`;");
E_C("CREATE TABLE `tp_yuyue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `topic` varchar(200) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `statdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `copyright` varchar(30) DEFAULT NULL,
  `yuyue_type` tinyint(1) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yuyue` values('1','avljgc1397041839','ktv','ktv','','','','','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','','的撒','2014-05-22','2014-05-25','Ktv','',NULL,'');");
E_D("replace into `tp_yuyue` values('2','nepvyy1400393099','微KTV','微KTV','海口','110.360209','20.047972','0898-66291285','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','微KTV','微KTV','2014-05-22','2014-05-25','Ktv','微KTV',NULL,'http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-refresh.png');");
E_D("replace into `tp_yuyue` values('3','nepvyy1400393099','酒吧','酒吧','','','','','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','酒吧','酒吧','2014-05-22','2014-05-25','Jiuba','酒吧',NULL,NULL);");
E_D("replace into `tp_yuyue` values('4','nepvyy1400393099','会所','会所','海口','110.345837','20.038192','0898-66291285','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','会所','会所','2014-05-22','2014-05-25','Huisuo','会所',NULL,'http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg');");
E_D("replace into `tp_yuyue` values('5','orbhyn1400224508','001','111','上海市','116.493408','39.962772','021-12348888','','1111','','2014-05-22','2014-05-25','Yuyue','',NULL,NULL);");
E_D("replace into `tp_yuyue` values('6','brogbh1400764930','ktv','ktv','','111.441419','27.690668','18888888888','','','','2014-05-22','2014-05-25','Ktv','1',NULL,'');");
E_D("replace into `tp_yuyue` values('7','avljgc1397041839','预约1','倒萨大','','0','0','11','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','倒萨大','','2014-05-27','2014-05-30','Yuyue','',NULL,NULL);");
E_D("replace into `tp_yuyue` values('8','ugyteu1401163507','14','2342','','','','','','','','2014-05-28','2014-05-31','Yuyue','',NULL,NULL);");
E_D("replace into `tp_yuyue` values('9','chsyqp1401254915','ktv','ktv','','','','18888888888','','1','1','2014-05-28','2014-05-31','Ktv','',NULL,'');");
E_D("replace into `tp_yuyue` values('10','orbhyn1400224508','002','002','','','','','','','','2014-05-28','2014-05-31','Yuyue','dsdfsf',NULL,NULL);");
E_D("replace into `tp_yuyue` values('11','gcpvcb1401284265','001','001','','','','','','','','2014-05-28','2014-05-28','Yuyue','',NULL,NULL);");
E_D("replace into `tp_yuyue` values('12','pgdxmk1401284729','001','001','','','','','','','','2014-05-28','2014-05-31','Yuyue','dd',NULL,NULL);");
E_D("replace into `tp_yuyue` values('13','rtzvcz1401302172','KTV','微浩营销策划','兴义市南环路','104.89888','25.085701','18506715388','http://wzweixiang.com/uploads/r/rtzvcz1401302172/4/6/b/9/thumb_53862ce0225c6.jpg','wzweixiang.com&lt;br /&gt;\r\n&lt;div&gt;\r\n	&lt;br /&gt;\r\n&lt;/div&gt;','wzweixiang.com&lt;br /&gt;\r\n&lt;div&gt;\r\n	&lt;br /&gt;\r\n&lt;/div&gt;','2014-05-29','2014-06-01','Ktv','士大夫',NULL,'http://wzweixiang.com/uploads/r/rtzvcz1401302172/4/6/b/9/thumb_53862ce0225c6.jpg');");
E_D("replace into `tp_yuyue` values('14','rtzvcz1401302172','在线预定','微浩营销策划','','','','','http://wzweixiang.com/uploads/r/rtzvcz1401302172/4/6/b/9/thumb_53862ce0225c6.jpg','rtzvcz1401302172','','2014-05-29','2014-06-01','Yuyue','士大夫',NULL,NULL);");
E_D("replace into `tp_yuyue` values('15','ivrnef1401365899','KTV','KTV','','','','','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','制作','谢谢','2014-01-01','2014-06-01','Ktv','易都',NULL,'http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg');");
E_D("replace into `tp_yuyue` values('16','tzqawo1400308953','预约','我去','新郑市人民路市委供销社家属楼2单元302室','113.746561','34.401306','15625342563','','11111111','','2014-05-29','2014-06-01','Yuyue','你妹版权',NULL,NULL);");
E_D("replace into `tp_yuyue` values('17','tzqawo1400308953','会所','撒打算','撒打算','0.073014','-0.06425','01021321331','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','第三方撒','少的冯绍峰','2014-05-29','2014-06-01','Huisuo','萨达',NULL,'http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg');");
E_D("replace into `tp_yuyue` values('18','tzqawo1400308953','KTVC','ASDFA','1231312','120.647173','31.312641','123213','','ASFDAS','SAFSD','2014-05-30','2014-06-02','Ktv','DSSD',NULL,'');");
E_D("replace into `tp_yuyue` values('19','tzqawo1400308953','酒吧','酒吧','v是法士大夫','110.471168','29.087489','1512352525','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','就开个会','打算飞','2014-05-30','2014-06-02','Jiuba','喝酒飞',NULL,NULL);");
E_D("replace into `tp_yuyue` values('20','ivrnef1401365899','微预约','微预约','湖北宜都','0','0','13697294645','http://wzweixiang.com/uploads/i/ivrnef1401365899/8/6/6/c/thumb_53882820e7ac0.jpg','123123','','2014-05-05','2014-07-02','Yuyue','宜都',NULL,NULL);");

require("../../inc/footer.php");
?>