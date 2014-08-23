<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_company`;");
E_C("CREATE TABLE `tp_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `intro` text NOT NULL,
  `catid` mediumint(3) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `isbranch` tinyint(1) NOT NULL DEFAULT '0',
  `logourl` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `tp_company` values('1','1','avljgc1397041839','哈哈','','','的','18267720632','18267720632','河南省安阳市文峰区光明路','0','0','大神倒萨大','0','0','0','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg');");
E_D("replace into `tp_company` values('2','1','fpiuyp1401163488','测试','','','测试','13881891788','86789027','成都市乐山街道','333','333','','0','0','0','http://wzweixiang.com/uploads/f/fpiuyp1401163488/4/d/b/1/thumb_53843952014cd.jpg');");
E_D("replace into `tp_company` values('3','1','tzqawo1400308953','微新郑','','','微新郑','15638919001','15625342563','新郑市人民路市委供销社家属楼2单元302室','34.401306','113.746561','','0','0','0','http://dian.me-shop.cn/uploads/o/ogzxgj1398501496/6/f/a/1/thumb_5364f81400ca0.jpg');");
E_D("replace into `tp_company` values('4','1','chsyqp1401254915','苹果小屋','','','苹果小屋','18888888888','18888888888','','0','0','','0','0','0','');");
E_D("replace into `tp_company` values('5','1','chsyqp1401254915','数码玩家','smwj','e10adc3949ba59abbe56e057f20f883e','数码玩家','18888888888','','','0','0','','0','0','1','');");
E_D("replace into `tp_company` values('6','0','avljgc1397041839','222','111','698d51a19d8a121ce581499d7b701668','111','18267720632','18267720632','','0','0','','0','0','1','');");
E_D("replace into `tp_company` values('7','0','xkuxqy1400560689','111','123','202cb962ac59075b964b07152d234b70','1','18035003485','18035003485','1','1','1','','0','1','1','1');");
E_D("replace into `tp_company` values('8','1','rtzvcz1401302172','KTV展示','','','微浩','18506715388','18506715388','兴义市南环路','26.278514','107.138383','rtzvcz1401302172','0','1','0','http://wzweixiang.com/uploads/r/rtzvcz1401302172/4/6/b/9/thumb_53862ce0225c6.jpg');");
E_D("replace into `tp_company` values('9','1','xkuxqy1400560689','鲜果汁系列','','','yumi','13222222222','567890','fytfguyg','0','0','mfjnrdyj','0','0','0','http://wzweixiang.com/uploads/x/xkuxqy1400560689/e/0/d/4/thumb_537b5941cc428.jpg');");
E_D("replace into `tp_company` values('10','1','ivrnef1401365899','宜昌易都网络','','','易都','13697294645','13697294645','湖北宜都','0','0','易都网络就是牛逼','0','0','0','http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg');");
E_D("replace into `tp_company` values('11','1','tzqawo1400308953','离开家零距离','123','202cb962ac59075b964b07152d234b70','Medical','15125252365','0551-3256859','撒旦法士大夫撒','0','0','是撒地方个','0','0','1','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg');");
E_D("replace into `tp_company` values('12','1','lfethi1401449403','微信会员卡','','','diancan','13128698220','13128698220','广州天河区','23.123389','113.38714','','0','0','0','');");

require("../../inc/footer.php");
?>