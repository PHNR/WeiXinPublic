<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_lottery`;");
E_C("CREATE TABLE `tp_lottery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joinnum` int(11) NOT NULL COMMENT '参与人数',
  `click` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `starpicurl` varchar(100) NOT NULL COMMENT '填写活动开始图片网址',
  `title` varchar(60) NOT NULL COMMENT '活动名称',
  `txt` varchar(60) NOT NULL COMMENT '用户输入兑奖时候的显示信息',
  `sttxt` varchar(200) NOT NULL COMMENT '简介',
  `statdate` int(11) NOT NULL COMMENT '活动开始时间',
  `enddate` int(11) NOT NULL COMMENT '活动结束时间',
  `info` varchar(200) NOT NULL COMMENT '活动说明',
  `aginfo` varchar(200) NOT NULL COMMENT '重复抽奖回复',
  `endtite` varchar(60) NOT NULL COMMENT '活动结束公告主题',
  `endpicurl` varchar(100) NOT NULL,
  `endinfo` varchar(60) NOT NULL,
  `fist` varchar(50) NOT NULL COMMENT '一等奖奖品设置',
  `fistnums` int(4) NOT NULL COMMENT '一等奖奖品数量',
  `fistlucknums` int(1) NOT NULL COMMENT '一等奖中奖号码',
  `second` varchar(50) NOT NULL COMMENT '二等奖奖品设置',
  `type` tinyint(1) NOT NULL,
  `secondnums` int(4) NOT NULL,
  `secondlucknums` int(1) NOT NULL,
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `allpeople` int(11) NOT NULL,
  `canrqnums` int(2) NOT NULL COMMENT '个人限制抽奖次数',
  `parssword` int(15) NOT NULL,
  `renamesn` varchar(50) NOT NULL DEFAULT '',
  `renametel` varchar(60) NOT NULL,
  `displayjpnums` int(1) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `four` varchar(50) NOT NULL,
  `fournums` int(11) NOT NULL,
  `fourlucknums` int(11) NOT NULL,
  `five` varchar(50) NOT NULL,
  `fivenums` int(11) NOT NULL,
  `fivelucknums` int(11) NOT NULL,
  `six` varchar(50) NOT NULL COMMENT '六等奖',
  `sixnums` int(11) NOT NULL,
  `sixlucknums` int(11) NOT NULL,
  `zjpic` varchar(150) NOT NULL DEFAULT '',
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `maxgetprizenum` mediumint(4) NOT NULL DEFAULT '1',
  `needreg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `tp_lottery` values('7','1','0','avljgc1397041839','砸金蛋','http://wzweixiang.com/tpl/static/goldenEgg/user/start.jpg','砸金蛋活动开始了','兑奖请联系我们，电话138********','','1400688000','1403280000','亲，请点击进入砸金蛋活动页面，祝您好运哦！','亲，继续努力哦！','砸金蛋活动已经结束了','http://wzweixiang.com/tpl/static/goldenEgg/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','11','11','1','','5','0','0','','0','0','11','11','0','','','1','0','1','','0','0','','0','0','','0','0','','0','1','1');");
E_D("replace into `tp_lottery` values('5','11','0','avljgc1397041839','刮刮卡','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','','1400688000','1403280000','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','11','3','0','','2','0','0','','0','0','22','11','0','','','1','0','1','','0','0','','0','0','','0','0','','0','1','1');");
E_D("replace into `tp_lottery` values('6','0','0','orbhyn1400224508','刮刮卡','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','','1400688000','1403280000','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','','0','0','','2','0','0','','0','0','0','0','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('3','5','0','avljgc1397041839','大转盘','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','','1400688000','1403280000','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1111','1','1','','1','0','0','','0','0','1','111','0','','','1','0','1','','0','0','','0','0','','0','0','','0','1','1');");
E_D("replace into `tp_lottery` values('13','3','0','nepvyy1400393099','刮刮卡','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','兑奖请联系我们，电话138********','1400688000','1403280000','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','iPhone5s','100','3','','2','0','0','','0','0','0','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('10','1','0','nepvyy1400393099','水果达人','http://wzweixiang.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','水果达人','1400688000','1403280000','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://wzweixiang.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','iPhone5s','100','1','','4','0','0','','0','0','10','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('11','1','0','nepvyy1400393099','砸金蛋','http://wzweixiang.com/tpl/static/goldenEgg/user/start.jpg','砸金蛋活动开始了','兑奖请联系我们，电话138********','砸金蛋','1400688000','1403280000','亲，请点击进入砸金蛋活动页面，祝您好运哦！','亲，继续努力哦！','砸金蛋活动已经结束了','http://wzweixiang.com/tpl/static/goldenEgg/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','iPhone5s','100','1','','5','0','0','','0','0','0','5','0','','','0','0','1','','0','0','','0','0','','0','0','','5','1','0');");
E_D("replace into `tp_lottery` values('12','0','0','nepvyy1400393099','大转盘','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','兑奖请联系我们，电话138********','1400688000','1403280000','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','iPhone5s','100','0','','1','0','0','','0','0','10','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('14','1','0','ivrnef1401365899','大转盘','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','111','1399305600','1403884800','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1000万','60','0','','1','0','0','','0','0','100','11','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('15','1','0','ivrnef1401365899','水果达人','http://wzweixiang.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','111','1400342400','1403884800','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://wzweixiang.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','给我100万','10','0','','4','0','0','','0','0','11','11','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `tp_lottery` values('16','2','0','tzqawo1400308953','砸金蛋','http://wzweixiang.com/tpl/static/goldenEgg/user/start.jpg','砸金蛋活动开始了','兑奖请联系我们，电话138********','','1401292800','1403884800','亲，请点击进入砸金蛋活动页面，祝您好运哦！','亲，继续努力哦！','砸金蛋活动已经结束了','http://wzweixiang.com/tpl/static/goldenEgg/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1111111','111','2','','5','0','0','','0','0','11','5','10086','','','1','0','1','','0','0','','0','0','','0','0','','5','1','0');");
E_D("replace into `tp_lottery` values('17','2','0','tzqawo1400308953','大转盘','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','','1401379200','1403971200','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','上的','1000','2','','1','0','0','','0','0','3','3','123','','','0','0','1','','0','0','','0','0','','0','0','','3','1','0');");
E_D("replace into `tp_lottery` values('18','0','0','tzqawo1400308953','水果达人','http://wzweixiang.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','','1401379200','1403971200','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://wzweixiang.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','发给好','1000','0','','4','0','0','','0','0','0','3','123','','','0','0','1','','0','0','','0','0','','0','0','','3','1','0');");
E_D("replace into `tp_lottery` values('19','1','0','tzqawo1400308953','刮刮卡','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','','1401379200','1403971200','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','菊花哥','1000','1','','2','0','0','','0','0','3','3','123','','','0','0','1','','0','0','','0','0','','0','0','','3','1','0');");
E_D("replace into `tp_lottery` values('20','1','0','tzqawo1400308953','飞','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','地方','','地方','1401379200','1403971200','飞','的飞','发给','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','  风格化就','1发给','1000','1','','3','0','0','','0','0','3','3','123','','','0','0','1','','0','0','','0','0','','0','0','http://wzweixiang.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','3','1','0');");

require("../../inc/footer.php");
?>