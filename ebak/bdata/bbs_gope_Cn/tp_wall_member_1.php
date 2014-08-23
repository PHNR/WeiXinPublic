<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wall_member`;");
E_C("CREATE TABLE `tp_wall_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(20) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `portrait` varchar(150) NOT NULL DEFAULT '',
  `nickname` varchar(60) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `wallid` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`wallid`),
  KEY `wecha_id` (`wecha_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wall_member` values('3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','http://wzweixiang.com/tpl/static/portrait/3.jpg','图','18267720632','1400635343','5','1','0');");
E_D("replace into `tp_wall_member` values('4','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','http://wzweixiang.com/tpl/static/portrait/8.jpg','mi','18976226935','1400637763','6','1','0');");
E_D("replace into `tp_wall_member` values('5','avljgc1397041839','ob2qxjjBmoh14sNQfT4VqOHKe32A','http://wzweixiang.com/tpl/static/portrait/3.jpg','飞飞回复刚刚给','15236528523','1401108259','5','1','0');");
E_D("replace into `tp_wall_member` values('6','ivrnef1401365899','oS1K7tycKPvUKXGGID3mvSkcDa_w','http://wzweixiang.com/tpl/static/portrait/2.jpg','猪','13697294646','1401371276','10','1','0');");
E_D("replace into `tp_wall_member` values('7','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','http://wzweixiang.com/tpl/static/portrait/9.jpg','就咯啦咯啦咯了','15888888888','1401371994','11','1','0');");
E_D("replace into `tp_wall_member` values('8','ivrnef1401365899','oS1K7txQLCVuaAkQQP130Xn4N7pw','http://wzweixiang.com/tpl/static/portrait/1.jpg','12','13888888888','1401377677','10','1','0');");
E_D("replace into `tp_wall_member` values('9','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','http://wzweixiang.com/tpl/static/portrait/2.jpg','快乐','15125896325','1401416246','11','1','0');");

require("../../inc/footer.php");
?>