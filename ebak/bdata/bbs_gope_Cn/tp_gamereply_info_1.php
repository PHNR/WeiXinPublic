<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_gamereply_info`;");
E_C("CREATE TABLE `tp_gamereply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `picurls1` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `copyright` text NOT NULL,
  `ad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `tp_gamereply_info` values('1','avljgc1397041839','微最强2048','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/3/thumb_5356241cb40ed.jpg','33','','','0');");
E_D("replace into `tp_gamereply_info` values('2','mybtpp1399529433','1','','','','','','0');");
E_D("replace into `tp_gamereply_info` values('3','qtjnws1397994896','sdfsa','fdsa','fdsa','dfsa','','','0');");
E_D("replace into `tp_gamereply_info` values('4','imywfr1400223186','1','','','','','','0');");
E_D("replace into `tp_gamereply_info` values('5','nepvyy1400393099','游戏','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','','游戏','','','0');");
E_D("replace into `tp_gamereply_info` values('6','hziflr1400551929','2048正常版','http://wzweixiang.com/tpl/static/attachment/icon/lovely/1.png','http://wzweixiang.com/tpl/static/attachment/icon/lovely/clock.png','游戏','','','0');");
E_D("replace into `tp_gamereply_info` values('7','qrjasb1400560397','2048 ','http://weixin.yuxian520.cn/uploads/r/rjtgzc1396701115/6/3/5/b/thumb_534957d240ff8.jpg','http://weixin.yuxian520.cn/uploads/r/rjtgzc1396701115/6/3/5/b/thumb_534957d240ff8.jpg','2048 ','','','0');");
E_D("replace into `tp_gamereply_info` values('8','xkuxqy1400560689','2048游戏开始了','http://weixin.yuxian520.cn/uploads/r/rjtgzc1396701115/6/3/5/b/thumb_534957d240ff8.jpg','http://pccoo.cn/store/20130522/20130522161317365.jpg','2048游戏开始了','','','2048');");
E_D("replace into `tp_gamereply_info` values('9','orbhyn1400224508','','','','','','','0');");
E_D("replace into `tp_gamereply_info` values('10','qpyzzq1401101914','2048正常版','http://wzweixiang.com/uploads/q/qpyzzq1401101914/b/3/a/0/thumb_538320374bb19.png','http://wzweixiang.com/tpl/static/attachment/icon/lovely/1.png','2048正常版2048正常版2048正常版2048正常版2048正常版','','','2048');");
E_D("replace into `tp_gamereply_info` values('11','tzqawo1400308953','45645645646','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','1313132','','','0');");
E_D("replace into `tp_gamereply_info` values('12','mbmkor1403070884','开始游戏','','','','','','0');");

require("../../inc/footer.php");
?>