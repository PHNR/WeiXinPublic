<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_pic_wall`;");
E_C("CREATE TABLE `tp_pic_wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joinnum` int(11) NOT NULL COMMENT '????????',
  `click` int(11) NOT NULL COMMENT '????????',
  `token` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `starpicurl` varchar(100) NOT NULL COMMENT '??д??????????',
  `title` varchar(60) NOT NULL COMMENT '??????',
  `sttxt` varchar(200) NOT NULL COMMENT '????',
  `statdate` int(11) NOT NULL COMMENT '????????',
  `enddate` int(11) NOT NULL COMMENT '?????????',
  `info` varchar(200) NOT NULL COMMENT '?????',
  `endtite` varchar(60) NOT NULL COMMENT '??????????????',
  `endpicurl` varchar(100) NOT NULL COMMENT '???????????',
  `endinfo` varchar(60) NOT NULL COMMENT '?????????',
  `status` int(1) NOT NULL,
  `createtime` int(11) NOT NULL,
  `ischeck` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_pic_wall` values('1','0','0','avljgc1397041839','照片墙','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-start.jpg','照片墙活动开始了','请在公众账号聊天界面 切换到文字模式点击+选取照片，点击发送','1399478400','1401292800','亲，请点击进入照片墙页面，晒晒更健康哦！','照片墙活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1','0','0');");
E_D("replace into `tp_pic_wall` values('2','0','0','wsupsl1400754187','照片','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-start.jpg','照片墙活动开始了','请在公众账号聊天界面 切换到文字模式点击+选取照片，点击发送','1400688000','1400947200','亲，请点击进入照片墙页面，晒晒更健康哦！','照片墙活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1','0','0');");
E_D("replace into `tp_pic_wall` values('3','0','0','utxcrr1400760392','照片墙','http://wzweixiang.com/uploads/u/utxcrr1400760392/7/d/3/5/thumb_537df9ec895ac.jpg','照片墙活动开始了','请在公众账号聊天界面 切换到文字模式点击+选取照片，点击发送','1400688000','1400947200','亲，请点击进入照片墙页面，晒晒更健康哦！','照片墙活动已经结束了','http://wzweixiang.com/uploads/u/utxcrr1400760392/0/0/8/5/thumb_537df9f995988.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1','0','0');");
E_D("replace into `tp_pic_wall` values('4','0','0','orbhyn1400224508','照片墙','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-start.jpg','照片墙活动开始了','请在公众账号聊天界面 切换到文字模式点击+选取照片，点击发送','1401206400','1401465600','亲，请点击进入照片墙页面，晒晒更健康哦！','照片墙活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1','0','0');");
E_D("replace into `tp_pic_wall` values('5','0','0','tzqawo1400308953','照片墙','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-start.jpg','照片墙活动开始了','请在公众账号聊天界面 切换到文字模式点击+选取照片，点击发送','1401292800','1401552000','亲，请点击进入照片墙页面，晒晒更健康哦！','照片墙活动已经结束了','http://wzweixiang.com/tpl/User/default/common/images/img/activity-zhaopianwall-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','1','0','0');");

require("../../inc/footer.php");
?>