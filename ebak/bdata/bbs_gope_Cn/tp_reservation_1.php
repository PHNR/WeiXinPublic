<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_reservation`;");
E_C("CREATE TABLE `tp_reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `addtype` varchar(20) NOT NULL DEFAULT 'house_book',
  `address` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `lng` varchar(13) NOT NULL,
  `lat` varchar(13) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `headpic` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `typename` varchar(50) NOT NULL,
  `typename2` varchar(50) NOT NULL,
  `typename3` varchar(50) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `date` varchar(50) NOT NULL,
  `allnums` varchar(50) NOT NULL,
  `name_show` tinyint(4) NOT NULL DEFAULT '1',
  `time_show` tinyint(4) NOT NULL DEFAULT '1',
  `txt1` varchar(50) NOT NULL,
  `value1` varchar(50) NOT NULL,
  `txt2` varchar(50) NOT NULL,
  `value2` varchar(50) NOT NULL,
  `txt3` varchar(50) NOT NULL,
  `value3` varchar(50) NOT NULL,
  `txt4` varchar(50) NOT NULL,
  `value4` varchar(50) NOT NULL,
  `txt5` varchar(50) NOT NULL,
  `value5` varchar(50) NOT NULL,
  `select1` varchar(50) NOT NULL,
  `svalue1` varchar(100) NOT NULL,
  `select2` varchar(50) NOT NULL,
  `svalue2` varchar(100) NOT NULL,
  `select3` varchar(50) NOT NULL,
  `svalue3` varchar(100) NOT NULL,
  `select4` varchar(50) NOT NULL,
  `svalue4` varchar(100) NOT NULL,
  `select5` varchar(50) NOT NULL,
  `svalue5` varchar(100) NOT NULL,
  `datename` varchar(100) NOT NULL,
  `take` int(11) NOT NULL DEFAULT '1',
  `email` varchar(30) NOT NULL,
  `open_email` tinyint(4) NOT NULL DEFAULT '0',
  `sms` varchar(13) NOT NULL,
  `open_sms` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='预约'");
E_D("replace into `tp_reservation` values('1','eewoyx1396338504','','在','tpl/User/default/common/car/baoyang.jpg','maintain','11','','1','1','','tpl/User/default/common/car/baoyang.jpg','11','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('2','eewoyx1396338504','微预约','微预约','http://www.138wo.com/tpl/static/vhouse/zaixianyuyue.jpg','house_book','河南省安阳市文峰区光明路','','120.691442','27.996977','80577-8821666','http://www.138wo.com/tpl/static/vhouse/zaixianyuyue.jpg','的撒大','我的订单','订单说明','订单电话','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('3','pvosmg1397034660','预约','专家预约','http://zgweixiang.com/uploads/p/pvosmg1397034660/5/3/f/9/thumb_53466ff98ee75.jpg','house_book','温州市人民路东联大厦一楼（开太百货对面）','','120.669999','28.016001','0577-88829913','http://www.138wo.com/tpl/static/vhouse/zaixianyuyue.jpg','康视眼科门诊建立于2012年2月份，创建人黄良驹先生是温州唯一的国家级高级验光技师，他本着“以温州人眼睛健康为理念”的原则，投资200万元设立康视眼科门诊并购进一整套世界一流的眼科仪器。康视眼科门诊人员配备：施明光教授是温州眼视光最有权威专家博士后导师，他领衔组建“康视眼科”专家门诊，团队成员有1名主任医师、3名副主任医师，1名主治医师，1名护师，4名护士，11名温州医学院毕业的高级验光师。康视眼','我的订单','订单说明','订单电话','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('4','avljgc1397041839','111','111','http://www.138wo.com/tpl/static/vhouse/zaixianyuyue.jpg','house_book','','','','','','http://www.138wo.com/tpl/static/vhouse/zaixianyuyue.jpg','','我的订单','订单说明','订单电话','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('19','avljgc1397041839','保养1','保养','tpl/User/default/common/car/baoyang.jpg','maintain','合肥市政务区南二环路3818号万达广','','0','0','0551-62696666','tpl/User/default/common/car/baoyang.jpg','sadadsadsadssafasdfasd','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('9','wglagr1400037084','预约试驾','预约试驾','tpl/User/default/common/car/yuyue.jpg','drive','预约试驾','','','','0877-20222222','tpl/User/default/common/car/yuyue.jpg','','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('10','wglagr1400037084',' 预约保养 ',' 预约保养 ','tpl/User/default/common/car/baoyang.jpg','maintain',' 预约保养 ','','','','0877-20222222','tpl/User/default/common/car/baoyang.jpg',' 预约保养 ','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('11','nepvyy1400393099','试驾','试驾','tpl/User/default/common/car/yuyue.jpg','drive','南二环路3818号万达广场','','','','','tpl/User/default/common/car/yuyue.jpg','试驾','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('12','nepvyy1400393099','','医院','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','medical','合肥市政务区南二环路3818号某某医院','','110.351011','20.031128','0551-65371998','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','合肥市政务区南二环路3818号某某医院','我的挂号订单','订单说明','订单电话','1','','','1','1','','1','','','','','','','','','预约科室','','预约专家','','预约病种','','','','','','留言信息','1','','0','','0');");
E_D("replace into `tp_reservation` values('13','nepvyy1400393099','语文课','语文课','http://wzweixiang.com/tpl/static/attachment/icon/lovely/clock.png','course','海口多媒体教室','','110.35446','20.031128','0898-66291285','http://wzweixiang.com/tpl/static/attachment/icon/lovely/cloud-check.png','&lt;span style=&quot;color:#444444;font-family:微软雅黑;font-size:14px;line-height:21px;background-color:#FCFCFC;&quot;&gt;多媒体教室&lt;span style=&quot;color:#444444;font-family:微软雅黑;font-size:14px;line-heig','罗老师','120','2014-6-19 10:02:51','0','2014-6-6 10:02:57','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('14','tzqawo1400308953','好机会','空间','tpl/User/default/common/car/yuyue.jpg','drive','合格接口 就','','110.66319','29.047079','15121525252','tpl/User/default/common/car/yuyue.jpg','打算','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('15','tzqawo1400308953','保养','地方','tpl/User/default/common/car/baoyang.jpg','maintain','撒地方','','110.214181','28.999577','15123525452','tpl/User/default/common/car/baoyang.jpg','的飞阿斯顿','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('16','tzqawo1400308953','','上的','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','medical','的说法是飞 飞','','110.455645','29.016256','0551-65371998','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg','上的撒地方是的','我的挂号订单','订单说明','订单电话','1','','','1','1','','1','','','','','','','','','预约科室','','预约专家','','预约病种','','','','','','留言信息','1','','0','','0');");
E_D("replace into `tp_reservation` values('17','tzqawo1400308953','儿童英语课程','空间','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','course','多媒体教室','','110.436098','29.193993','0551-62696666','http://wzweixiang.com/tpl/static/attachment/background/view/3.jpg','采访稿发给飞','地方','23','2014-6-6 10:39:22','0','2014-6-7 10:39:25','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('18','tzqawo1400308953','发给','的说法','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','house_book','地方上的','','110.504513','29.065266','0551-65371998','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','发给是电饭锅','我的订单','订单说明','订单电话','1','05/01/2014 12:00:00 - 06/07/2014 12:00:00','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('20','avljgc1397041839','123','0101','tpl/User/default/common/car/yuyue.jpg','drive','','','','','','tpl/User/default/common/car/yuyue.jpg','122','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `tp_reservation` values('21','avljgc1397041839','','萨达','http://wzweixiang.com/uploads/a/avljgc1397041839/8/d/1/f/538688ae5ebae.jpg','medical','合肥市政务区南二环路3818号某某医','','120.690292','28.011266','0551-65371998','http://wzweixiang.com/uploads/a/avljgc1397041839/0/4/3/c/538688a7bc591.png','萨达萨达是倒萨','我的挂号订单','订单说明','订单电话','1','','','1','1','','1','','','','','','','','','预约科室','111','预约专家','11','预约病种','111','','','','','留言信息','1','','0','','0');");

require("../../inc/footer.php");
?>