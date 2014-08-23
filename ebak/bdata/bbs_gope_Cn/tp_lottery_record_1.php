<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_lottery_record`;");
E_C("CREATE TABLE `tp_lottery_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `usenums` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户使用次数',
  `wecha_id` varchar(60) NOT NULL COMMENT '微信唯一识别码',
  `token` varchar(30) NOT NULL,
  `islottery` int(1) NOT NULL COMMENT '是否中奖',
  `wecha_name` varchar(60) NOT NULL COMMENT '微信号',
  `phone` varchar(15) NOT NULL,
  `sn` varchar(13) NOT NULL COMMENT '中奖后序列号',
  `time` int(11) NOT NULL,
  `prize` varchar(50) NOT NULL DEFAULT '' COMMENT '已中奖项',
  `sendstutas` int(11) NOT NULL DEFAULT '0',
  `sendtime` int(11) NOT NULL,
  PRIMARY KEY (`id`,`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `tp_lottery_record` values('1','1','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','太累了','18277206321','537d72c5960be','1400730309','1','0','0');");
E_D("replace into `tp_lottery_record` values('2','2','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400730856','7','0','0');");
E_D("replace into `tp_lottery_record` values('3','2','2','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400731008','7','0','0');");
E_D("replace into `tp_lottery_record` values('4','3','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','快接近','18267720632','537d75b977aaa','1400731065','1','0','0');");
E_D("replace into `tp_lottery_record` values('5','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400731300','7','0','0');");
E_D("replace into `tp_lottery_record` values('6','7','1','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','1','','','537d7799d5e0c','1400731545','1','0','0');");
E_D("replace into `tp_lottery_record` values('7','8','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1','hu','18976226935','537d872a2d867','1400735530','1','1','1400743015');");
E_D("replace into `tp_lottery_record` values('8','10','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1','','18976226935','537d877c9f2fe','1400735612','1','0','0');");
E_D("replace into `tp_lottery_record` values('9','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400739865','7','0','0');");
E_D("replace into `tp_lottery_record` values('10','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400739917','7','0','0');");
E_D("replace into `tp_lottery_record` values('11','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400740001','7','0','0');");
E_D("replace into `tp_lottery_record` values('12','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1400741715','7','0','0');");
E_D("replace into `tp_lottery_record` values('13','11','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1','kk','18976226935','537da4c4c29ac','1400743108','1','1','1400743159');");
E_D("replace into `tp_lottery_record` values('14','13','1','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','nepvyy1400393099','1','jj','18976226965','537da8cc8ddc9','1400744140','1','0','0');");
E_D("replace into `tp_lottery_record` values('15','3','4','{wechat_id}','avljgc1397041839','0','','','','1401038486','7','0','0');");
E_D("replace into `tp_lottery_record` values('16','3','4','{wechat_id}','avljgc1397041839','0','','','','1401083593','7','0','0');");
E_D("replace into `tp_lottery_record` values('17','3','4','{wechat_id}','avljgc1397041839','0','','','','1401094063','7','0','0');");
E_D("replace into `tp_lottery_record` values('18','5','6','ob2qxjgbC8wTmFfmJdS14O-So_jg','avljgc1397041839','0','','','','1401100745','7','0','0');");
E_D("replace into `tp_lottery_record` values('19','3','4','{wechat_id}','avljgc1397041839','0','','','','1401257244','7','0','0');");
E_D("replace into `tp_lottery_record` values('20','14','1','oS1K7txQLCVuaAkQQP130Xn4N7pw','ivrnef1401365899','0','','','','1401369329','7','0','0');");
E_D("replace into `tp_lottery_record` values('21','15','1','oS1K7txQLCVuaAkQQP130Xn4N7pw','ivrnef1401365899','0','','','','1401369362','7','0','0');");
E_D("replace into `tp_lottery_record` values('22','16','1','o1R8MtzBEWnrRp4ruF8BiIK89pxA','tzqawo1400308953','1','你大爷','15896524521','53873acdab1db','1401371341','1','0','0');");
E_D("replace into `tp_lottery_record` values('23','17','1','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','','','5387e4b78500b','1401414839','1','0','0');");
E_D("replace into `tp_lottery_record` values('24','16','1','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','阿狸','1512586954','5387e5158caf5','1401414933','1','0','0');");
E_D("replace into `tp_lottery_record` values('25','19','1','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','','','5387e550b71e2','1401414992','1','0','0');");
E_D("replace into `tp_lottery_record` values('26','20','1','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','tzqawo1400308953','1','','','5387e5a022891','1401415072','1','0','0');");
E_D("replace into `tp_lottery_record` values('27','17','1','o1R8Mt5OH0roIEujaweM3B3uFxdU','tzqawo1400308953','1','','','53881d7640c6e','1401429366','1','0','0');");

require("../../inc/footer.php");
?>