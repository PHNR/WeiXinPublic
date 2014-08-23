<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_home`;");
E_C("CREATE TABLE `tp_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `apiurl` varchar(150) NOT NULL,
  `homeurl` varchar(120) NOT NULL,
  `info` varchar(120) NOT NULL,
  `musicurl` varchar(180) NOT NULL DEFAULT '',
  `plugmenucolor` varchar(10) NOT NULL DEFAULT '',
  `copyright` varchar(200) NOT NULL DEFAULT '',
  `animation` tinyint(2) NOT NULL,
  `logo` varchar(200) NOT NULL DEFAULT '',
  `radiogroup` mediumint(4) NOT NULL DEFAULT '0',
  `advancetpl` tinyint(1) NOT NULL DEFAULT '0',
  `dianhua` varchar(20) NOT NULL,
  `keyword` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `tp_home` values('1','avljgc1397041839','下次再','http://wzweixiang.com/uploads/a/avljgc1397041839/6/a/0/2/thumb_53780d727e024.jpg','','',' 宣传在是的]','','#0F0000','','0','','16','0','','是是撒');");
E_D("replace into `tp_home` values('2','ozugxw1400589873','欢迎关注微官网','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','','绅士风度水电费似的','http://wzweixiang.com/tpl/static/attachment/music/default/6.mp3','','','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/backpack-2.png','13','0','86577822','首页');");
E_D("replace into `tp_home` values('3','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('4','','','','','','','','','','0','','17','0','','');");
E_D("replace into `tp_home` values('5','','','','','','','','','','0','','16','0','','');");
E_D("replace into `tp_home` values('6','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('7','','','','','','','','','','0','','2','0','','');");
E_D("replace into `tp_home` values('8','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('9','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('10','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('11','','','','','','','','','','0','','17','0','','');");
E_D("replace into `tp_home` values('12','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('13','','','','','','','','','','0','','14','0','','');");
E_D("replace into `tp_home` values('14','','','','','','','','','','0','','14','0','','');");
E_D("replace into `tp_home` values('15','','','','','','','','','','0','','14','0','','');");
E_D("replace into `tp_home` values('16','','','','','','','','','','0','','14','0','','');");
E_D("replace into `tp_home` values('17','','','','','','','','','','0','','15','0','','');");
E_D("replace into `tp_home` values('18','orbhyn1400224508','首页','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','','','首页首页首页','http://wzweixiang.com/tpl/static/attachment/music/default/1.mp3','#6E81FF','请在手机上查看效果！','4','http://wzweixiang.com/tpl/static/attachment/icon/lovely/bus.png','14','0','','首页');");
E_D("replace into `tp_home` values('19','','','','','','','','','','0','','5','0','','');");
E_D("replace into `tp_home` values('20','','','','','','','','','','0','','3','0','','');");
E_D("replace into `tp_home` values('21','nepvyy1400393099','首页','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','首页','','','','0','','15','0','','测试');");
E_D("replace into `tp_home` values('22','wsupsl1400754187','欢迎带大家得紧紧的','http://wzweixiang.com/uploads/w/wsupsl1400754187/3/7/7/f/thumb_537dd05ee5956.jpg','','','15452545653','','','','0','http://wzweixiang.com/uploads/w/wsupsl1400754187/a/e/5/0/thumb_537dd06c89a83.jpg','0','0','','首页');");
E_D("replace into `tp_home` values('23','qpyzzq1401101914','输入：首页 或者 home —— 当用户输入关键词时，将会触','http://wzweixiang.com/uploads/q/qpyzzq1401101914/b/3/a/0/thumb_538320374bb19.png','','','输入：首页 或者 home —— 当用户输入关键词时，将会触发此回复。输入：首页 或者 home —— 当用户输入关键词时，将会触发此回复。','http://wzweixiang.com/tpl/static/attachment/music/default/1.mp3','','','6','http://wzweixiang.com/tpl/static/attachment/icon/lovely/backpack-2.png','0','0','','首页');");
E_D("replace into `tp_home` values('24','rirgpp1401289818','33','333','','','333','','','','0','','0','0','','33');");
E_D("replace into `tp_home` values('25','ivrnef1401365899','易都首页','http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg','','','易都就蛮6啦','http://wzweixiang.com/tpl/static/attachment/music/default/2.mp3','','','6','http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg','0','0','13697294645','首页');");
E_D("replace into `tp_home` values('26','tzqawo1400308953','测试功能','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','','','测试功能http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','http://wzweixiang.com/tpl/static/attachment/music/default/4.mp3','#FF0000','© 2001-2013 上海赤狐网络技术服务有限公司版权所有','0','http://wzweixiang.com/tpl/static/attachment/icon/lovely/umbrella.png','13','0','123546','首页');");

require("../../inc/footer.php");
?>