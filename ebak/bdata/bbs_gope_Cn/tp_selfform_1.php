<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_selfform`;");
E_C("CREATE TABLE `tp_selfform` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(100) NOT NULL DEFAULT '',
  `intro` varchar(400) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `successtip` varchar(60) NOT NULL DEFAULT '',
  `failtip` varchar(60) NOT NULL DEFAULT '',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `logourl` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `endtime` (`endtime`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `tp_selfform` values('1','eewoyx1396338504','111','11','11','1','1396361678','1','','1397231999','11');");
E_D("replace into `tp_selfform` values('2','nunloc1396884852','发啥呆','倒萨','','','1396885261','','','1397750399','sd');");
E_D("replace into `tp_selfform` values('3','pozfmk1396884791','测试','4545','dfgsdfdfb','提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功','1396886626','提交成功','提交失败','1398527999','http://138.wtoken.com/uploads/p/pozfmk1396884791/6/4/5/0/thumb_5342c86104c7c.png');");
E_D("replace into `tp_selfform` values('9','avljgc1397041839','11','报名','倒萨大','','1401284935','','','1402156799','');");
E_D("replace into `tp_selfform` values('5','rirjgb1400124807','adf','adf','adsf','提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功提交成功','1400145477','提交成功','提交失败','1403711999','http://wzweixiang.com/tpl/static/attachment/icon/lovely/clock.png');");
E_D("replace into `tp_selfform` values('6','orbhyn1400224508','sd','sad','','sad','1400253286','dsad','sad','1401119999','');");
E_D("replace into `tp_selfform` values('7','nepvyy1400393099','参加活动','活动','参加活动','参加活动','1400403778','','','1401292799','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg');");
E_D("replace into `tp_selfform` values('10','ivrnef1401365899','预约','预约','11','221','1401369889','','','1388591999','');");
E_D("replace into `tp_selfform` values('11','tzqawo1400308953','个规划','看就看','发生的飞','的说法干豆腐上的个','1401420009','提交成功','提交失败','1402329599','的');");

require("../../inc/footer.php");
?>