<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wall_message`;");
E_C("CREATE TABLE `tp_wall_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `wallid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(20) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `content` varchar(500) NOT NULL DEFAULT '',
  `picture` varchar(150) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wallid` (`wallid`,`token`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wall_message` values('11','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','你好好','','1400635477');");
E_D("replace into `tp_wall_message` values('12','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','你hihis','','1400635496');");
E_D("replace into `tp_wall_message` values('13','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','噎着','','1400635505');");
E_D("replace into `tp_wall_message` values('14','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','兔兔','','1400635532');");
E_D("replace into `tp_wall_message` values('15','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','我摸','','1400635536');");
E_D("replace into `tp_wall_message` values('16','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400637820');");
E_D("replace into `tp_wall_message` values('17','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','来一个','','1400637832');");
E_D("replace into `tp_wall_message` values('18','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','厉害','','1400637858');");
E_D("replace into `tp_wall_message` values('19','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','摸','','1400639528');");
E_D("replace into `tp_wall_message` values('20','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','抽奖','','1400640174');");
E_D("replace into `tp_wall_message` values('21','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400640231');");
E_D("replace into `tp_wall_message` values('22','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400640237');");
E_D("replace into `tp_wall_message` values('23','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','没人','','1400640274');");
E_D("replace into `tp_wall_message` values('24','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400640300');");
E_D("replace into `tp_wall_message` values('25','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400640429');");
E_D("replace into `tp_wall_message` values('26','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','传说','','1400640433');");
E_D("replace into `tp_wall_message` values('27','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','传说','','1400640456');");
E_D("replace into `tp_wall_message` values('28','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','美女','','1400640492');");
E_D("replace into `tp_wall_message` values('29','4','6','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','梅','','1400640498');");
E_D("replace into `tp_wall_message` values('30','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','摇一摇','','1400721753');");
E_D("replace into `tp_wall_message` values('31','3','5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','wx＃quit','','1400721765');");
E_D("replace into `tp_wall_message` values('32','5','5','avljgc1397041839','ob2qxjjBmoh14sNQfT4VqOHKe32A','好方法多点','','1401108297');");
E_D("replace into `tp_wall_message` values('33','6','10','ivrnef1401365899','oS1K7tycKPvUKXGGID3mvSkcDa_w','wx123654','','1401371345');");
E_D("replace into `tp_wall_message` values('34','6','10','ivrnef1401365899','oS1K7tycKPvUKXGGID3mvSkcDa_w','摇一摇','','1401371406');");
E_D("replace into `tp_wall_message` values('35','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','fuck','','1401372069');");
E_D("replace into `tp_wall_message` values('36','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','我','','1401372139');");
E_D("replace into `tp_wall_message` values('37','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','去','','1401372142');");
E_D("replace into `tp_wall_message` values('38','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','不能','','1401372146');");
E_D("replace into `tp_wall_message` values('39','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','发图片','','1401372152');");
E_D("replace into `tp_wall_message` values('40','7','11','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','预约','','1401372396');");
E_D("replace into `tp_wall_message` values('41','8','10','ivrnef1401365899','oS1K7txQLCVuaAkQQP130Xn4N7pw','啊','','1401377711');");
E_D("replace into `tp_wall_message` values('42','9','11','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','具体','','1401416322');");
E_D("replace into `tp_wall_message` values('43','9','11','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','嗯呢','','1401416334');");
E_D("replace into `tp_wall_message` values('44','9','11','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿卡丽','','1401416343');");
E_D("replace into `tp_wall_message` values('45','9','11','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','微医疗','','1401416464');");
E_D("replace into `tp_wall_message` values('46','8','10','ivrnef1401365899','oS1K7txQLCVuaAkQQP130Xn4N7pw','微信墙','','1401424799');");
E_D("replace into `tp_wall_message` values('47','8','10','ivrnef1401365899','oS1K7txQLCVuaAkQQP130Xn4N7pw','微预约','','1401432271');");

require("../../inc/footer.php");
?>