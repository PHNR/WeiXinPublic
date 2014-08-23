<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_host`;");
E_C("CREATE TABLE `tp_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL COMMENT '关键词',
  `title` varchar(50) NOT NULL COMMENT '商家名称',
  `address` varchar(50) NOT NULL COMMENT '商家地',
  `tel` varchar(13) NOT NULL COMMENT '商家电话',
  `tel2` varchar(13) NOT NULL COMMENT '手机号',
  `ppicurl` varchar(250) NOT NULL COMMENT '订房封面图片',
  `headpic` varchar(250) NOT NULL COMMENT '订单页头部图片',
  `name` varchar(50) NOT NULL COMMENT '文字描述',
  `sort` int(11) NOT NULL COMMENT '排序',
  `picurl` varchar(100) NOT NULL COMMENT '图片地址',
  `url` varchar(50) NOT NULL COMMENT '图片跳转地址以http',
  `info` text NOT NULL COMMENT '商家介绍：',
  `info2` text NOT NULL COMMENT '订房说明u',
  `creattime` int(11) NOT NULL COMMENT '创建日期',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='酒店商家设置'");
E_D("replace into `tp_host` values('8','avljgc1397041839','预约是','大神大神多','','盛大倒萨大声道','18267720633','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','./tpl/User/default/common/images/cart_info/online.jpg','倒萨打算','0','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','','倒萨倒萨大','大神大神多','1401154020');");
E_D("replace into `tp_host` values('2','qbtshr1397819806','风速达公司的噶','富商大贾','','13085025029','13085025029','http://wall.wtoken.com/uploads/q/qbtshr1397819806/e/7/9/f/53532432b9e3d.jpg','./tpl/User/default/common/images/cart_info/online.jpg','大师法','0','http://wall.wtoken.com/uploads/q/qbtshr1397819806/d/8/1/6/5353243203cd7.jpg','','风速达公司的gas的噶','倒萨公司','1398584845');");
E_D("replace into `tp_host` values('3','wglagr1400037084','在线预定','在线预定','','0877-20222222','186877555555','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','./tpl/User/default/common/images/cart_info/online.jpg','在线预定','0','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','http://www.baidu.com','在线预定在线预定在线预定','在线预定在线预定在线预定','1400040769');");
E_D("replace into `tp_host` values('4','vhnpth1399864000','wwyd','wewer','','2323','23','2','./tpl/User/default/common/images/cart_info/online.jpg','','0','','','w','w','1400221883');");
E_D("replace into `tp_host` values('5','imywfr1400223186','yy','wewwer w','','ewefwe  ','w','we','./tpl/User/default/common/images/cart_info/online.jpg','w','0','w','w','w','w','1400223382');");
E_D("replace into `tp_host` values('6','fbcsqj1400322782','yd1','23e23','','18888888888','23','http://www.baidu.com/img/bdlogo.gif','./tpl/User/default/common/images/cart_info/online.jpg','1','0','1','','1','11','1400325554');");
E_D("replace into `tp_host` values('7','nepvyy1400393099','预订','商家预订','','0898-66291285','18976226935','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','./tpl/User/default/common/images/cart_info/online.jpg','','0','','','预订','预订','1400423734');");
E_D("replace into `tp_host` values('9','rtzvcz1401302172','在线预订','微浩营销策划','','18506715388','18506715388','http://www.whyxch.cn/uploads/e/e8f9f5c82968520/9/9/7/c/thumb_5380f9bd1e3fa.jpg','/tpl/User/default/common/images/cart_info/online.jpg','包房预定','0','http://www.whyxch.cn/tpl/User/default/common/images/photo/plugmenu11.png','','rtzvcz1401302172','rtzvcz1401302172','1401302991');");
E_D("replace into `tp_host` values('10','ivrnef1401365899','预定','易都网络','','13697294645','13697294645','http://wzweixiang.com/uploads/i/ivrnef1401365899/7/3/d/a/thumb_5387286fb5ac7.jpg','./tpl/User/default/common/images/cart_info/online.jpg','易都','0','http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg','','2211','快点预定','1401368064');");
E_D("replace into `tp_host` values('11','tzqawo1400308953','预订','156456456','','0576-84838110','15888888888','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','./tpl/User/default/common/images/cart_info/online.jpg','13215','0','','','54646','564654','1401372770');");

require("../../inc/footer.php");
?>