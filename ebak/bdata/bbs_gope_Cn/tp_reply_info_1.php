<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_reply_info`;");
E_C("CREATE TABLE `tp_reply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `picurls1` varchar(120) NOT NULL DEFAULT '',
  `picurls2` varchar(120) NOT NULL DEFAULT '',
  `picurls3` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `infotype` varchar(20) NOT NULL DEFAULT '',
  `diningyuding` tinyint(1) NOT NULL DEFAULT '1',
  `diningwaimai` tinyint(1) NOT NULL DEFAULT '1',
  `config` text NOT NULL,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `apiurl` varchar(50) NOT NULL DEFAULT '',
  `copyright` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `tp_reply_info` values('1','pvosmg1397034660','康视眼镜微商城即将开放！','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/2/c/6/thumb_534685f44a2c8.jpg','','','','康视眼镜微商城即将开放！','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('2','pvosmg1397034660','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://zgweixiang.com/uploads/p/pvosmg1397034660/d/d/0/0/thumb_534690669c022.png','','','','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','','');");
E_D("replace into `tp_reply_info` values('3','pvosmg1397034660','申请成为会员','http://zgweixiang.com/uploads/p/pvosmg1397034660/d/d/0/0/thumb_534690669c022.png','','','','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','','');");
E_D("replace into `tp_reply_info` values('4','avljgc1397041839','商城','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','http://wzweixiang.com/tpl/static/attachment/focus/default/1.gif','http://wzweixiang.com/tpl/static/attachment/focus/default/1.gif','','深达声','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('26','fpiuyp1401163488','测试','','','','','','Dining','1','1','','订餐','','');");
E_D("replace into `tp_reply_info` values('20','nepvyy1400393099','酒店订房','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','','','','酒店订房','','1','1','','','','酒店');");
E_D("replace into `tp_reply_info` values('5','avljgc1397041839','点错','http://wzweixiang.com/uploads/a/avljgc1397041839/a/7/4/f/thumb_536f5c2a9ba20.png','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','大声道','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:10;}','订餐','','微享版权所有');");
E_D("replace into `tp_reply_info` values('6','qbtshr1397819806','商城','http://wall.wtoken.com/tpl/static/attachment/focus/default/3.jpg','http://wall.wtoken.com/tpl/static/attachment/focus/default/4.jpg','http://wall.wtoken.com/tpl/static/attachment/focus/default/5.jpg','','商城','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('7','qtjnws1397994896','bnmbnmbnmbnm','','http://wall.wtoken.com/tpl/static/attachment/background/view/2.jpg','http://wall.wtoken.com/tpl/static/attachment/icon/lovely/eye.png','http://wall.wtoken.com/tpl/static/attachment/icon/lovely/eye.png','bnbbnbnbn','Dining','1','1','','订餐','','');");
E_D("replace into `tp_reply_info` values('8','avljgc1397041839','11 ','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','','','','11','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','','');");
E_D("replace into `tp_reply_info` values('9','qtjnws1397994896','商城','','','','','都是方式的','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('10','avljgc1397041839','','','','','','','message','1','1','a:1:{s:9:\"needcheck\";i:0;}','','','');");
E_D("replace into `tp_reply_info` values('11','avljgc1397041839','相册','/tpl/Wap/default/common/css/Photo/banner.jpg','','','','','album','1','1','','','','');");
E_D("replace into `tp_reply_info` values('12','isouej1399863564','nihao','','','','','nihao','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('13','wglagr1400037084','商城 ','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','','','\r\n商城 ','Shop','1','1','','商城','','商城');");
E_D("replace into `tp_reply_info` values('14','imywfr1400223186','1','','','','','','Dining','1','1','','订餐','','');");
E_D("replace into `tp_reply_info` values('15','nepvyy1400393099','商城','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','http://wzweixiang.com/tpl/static/attachment/icon/lovely/1.png','http://wzweixiang.com/tpl/static/attachment/icon/lovely/backpack-2.png','商城','Shop','1','1','','商城','','商城');");
E_D("replace into `tp_reply_info` values('16','nepvyy1400393099','团购la 不要错过','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg','','','','团购','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','','');");
E_D("replace into `tp_reply_info` values('17','reiesr1400475948','reiesr1400475948','','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('18','taenqh1400550796','商城','http://wzweixiang.com/tpl/static/attachment/focus/default/3.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','','','商城','Shop','1','1','','商城','','123版权所有');");
E_D("replace into `tp_reply_info` values('19','nepvyy1400393099','订餐','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','','','','订餐','Dining','1','1','','订餐','','读书');");
E_D("replace into `tp_reply_info` values('21','wsupsl1400754187','会员卡,省钱，','http://wzweixiang.com/tpl/static/images/member.jpg','','','','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','','');");
E_D("replace into `tp_reply_info` values('22','wsupsl1400754187','申请成为会员','http://wzweixiang.com/tpl/static/images/vip.jpg','','','','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','','');");
E_D("replace into `tp_reply_info` values('23','rgccej1400813594','微商城','http://wzweixiang.com/uploads/r/rgccej1400813594/9/b/6/b/thumb_537ebc971e861.jpg','','','','','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('24','rgccej1400813594','微酒店客房预订','','','','','','','1','1','','','','');");
E_D("replace into `tp_reply_info` values('25','flpwvp1401090523','tfruyhd','','','','','fghf','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('27','rirgpp1401289818','333','33','http://wzweixiang.com/uploads/r/rirgpp1401289818/d/a/2/2/thumb_538603ad66aa6.jpg','33','','33','Shop','1','1','','商城','','');");
E_D("replace into `tp_reply_info` values('28','tzqawo1400308953','书达教育2014年招生信息','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/8/0/e/thumb_538721dce23fa.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','书达教育2014年招生信息','Shop','1','1','','商城','','上海赤狐 版权所有');");
E_D("replace into `tp_reply_info` values('29','tzqawo1400308953','的飞飞','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','','','','的说法个','message','1','1','a:1:{s:9:\"needcheck\";i:0;}','','','');");
E_D("replace into `tp_reply_info` values('30','tzqawo1400308953','个上的','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','','','',' 地方','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','','');");
E_D("replace into `tp_reply_info` values('31','tzqawo1400308953','爱上','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','','','','舒服撒地方','','1','1','','','','地方撒地方');");
E_D("replace into `tp_reply_info` values('32','tzqawo1400308953','上的','上的','','','','上的','panorama','1','1','','全景','','上的');");
E_D("replace into `tp_reply_info` values('33','lfethi1401449403','林微科技信息有限公司','http://wzweixiang.com/tpl/static/attachment/focus/default/6.jpg','','','','sdg','Dining','1','1','','订餐','','');");

require("../../inc/footer.php");
?>