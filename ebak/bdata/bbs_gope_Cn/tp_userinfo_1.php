<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_userinfo`;");
E_C("CREATE TABLE `tp_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portrait` varchar(200) NOT NULL DEFAULT '',
  `wallopen` tinyint(1) NOT NULL DEFAULT '0',
  `total_score` int(10) NOT NULL DEFAULT '0',
  `expensetotal` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `wecha_id` varchar(60) NOT NULL,
  `wechaname` varchar(60) NOT NULL,
  `truename` varchar(60) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `bornyear` varchar(4) NOT NULL DEFAULT '',
  `bornmonth` varchar(4) NOT NULL DEFAULT '',
  `bornday` varchar(4) NOT NULL DEFAULT '',
  `qq` varchar(11) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL,
  `age` varchar(3) NOT NULL DEFAULT '',
  `birthday` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL,
  `sign_score` int(11) NOT NULL,
  `expend_score` int(11) NOT NULL,
  `continuous` int(11) NOT NULL,
  `add_expend` int(11) NOT NULL,
  `add_expend_time` int(11) NOT NULL,
  `live_time` int(11) NOT NULL,
  `getcardtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `tp_userinfo` values('6','','0','0','0','ozugxw1400589873','oiKAjuDvbT1TMuXEE8KHWmwqS63w','','茅龙','18552018487','','','','0','-1','0','','咯微信营销YY','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('7','http://wzweixiang.com/tpl/static/portrait/8.jpg','0','1181','600','nepvyy1400393099','oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','hami','mi','18976226935','1988','6','3','0','1','0','','海口','','1','0','1','0','0','0','0');");
E_D("replace into `tp_userinfo` values('10','','0','381','200','nepvyy1400393099','oKTN3t7bKqOnOKzXg5lnsS0iWWSA','来咯','啊撸','15125369965','1955','2','25','35264582','0','','','blog陌陌our','','1','0','1','0','0','0','1400726409');");
E_D("replace into `tp_userinfo` values('9','http://wzweixiang.com/tpl/static/portrait/2.jpg','0','1241543','20112','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','快接近','18267720632','1992','3','8','','1','','','1212','','0','0','0','0','0','0','1401023772');");
E_D("replace into `tp_userinfo` values('11','','0','0','0','wsupsl1400754187','o2ichuLB4enKbKxrW_v3E8tbCSms','乃是','','15975067890','1920','8','7','','2','','','','','0','0','0','0','0','0','1400754842');");
E_D("replace into `tp_userinfo` values('12','','0','0','0','rgccej1400813594','o5C4_t4kIg89qqtlcqcis7xbgMds','','葛臻昆','13112345678','','','','0','-1','0','','北京','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('13','http://wzweixiang.com/tpl/static/portrait/2.jpg','0','0','0','avljgc1397041839','ob2qxjrp58_67yMT1YtQFVljtp6o','18666160252','','18666160252','1980','10','5','','1','','','','','0','0','1','0','0','0','1401026963');");
E_D("replace into `tp_userinfo` values('14','','0','0','0','avljgc1397041839','ob2qxjrj-FrGvvFxo9g3EKr7HqAM','g g','','15465431325','1977','1','7','','0','','','','','0','0','1','0','0','0','1401027278');");
E_D("replace into `tp_userinfo` values('15','http://wzweixiang.com/tpl/static/portrait/3.jpg','0','0','0','avljgc1397041839','{wechat_id}','gg','','15434333333','1984','1','7','','0','','','','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('16','','0','0','0','flpwvp1401090523','o5Ik0uOieZHM7K2N5NqUjeG1Pb6E','','近距离','18506715388','','','','0','-1','0','','啦他不来','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('17','http://wzweixiang.com/tpl/static/portrait/3.jpg','1','0','0','avljgc1397041839','ob2qxjjBmoh14sNQfT4VqOHKe32A','成果','飞飞回复刚刚给','15236528523','2012','12','1','123455789','1','','','','','0','0','0','0','0','0','1401108152');");
E_D("replace into `tp_userinfo` values('18','','0','0','0','chsyqp1401254915','o4ISnjmEAlTMFRPbYOa0EbsvF3t4','','kenny','18607388765','','','','0','-1','0','','水利局','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('19','http://wzweixiang.com/tpl/static/portrait/9.jpg','0','975','100','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','你大爷','就咯啦咯啦咯了','15888888888','2002','05','08','','2','','','5来啦啦啥','','4','0','1','0','0','0','1401365380');");
E_D("replace into `tp_userinfo` values('20','','0','2','0','tzqawo1400308953','o1R8Mt7OITX5MYlbL3ruujCii554','微信男','哈哈','13380805454','2012','02','1','54646949','1','0','','积极来看看你那么','','2','0','1','0','0','0','1401374093');");
E_D("replace into `tp_userinfo` values('21','http://wzweixiang.com/tpl/static/portrait/1.jpg','0','0','0','ivrnef1401365899','oS1K7txQLCVuaAkQQP130Xn4N7pw','1','12','13888888888','1987','3','4','0','2','0','','11','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('22','http://wzweixiang.com/tpl/static/portrait/2.jpg','0','0','0','ivrnef1401365899','oS1K7tycKPvUKXGGID3mvSkcDa_w','你哈','猪','15571702587','1987','5','6','22365','2','','','说','','0','0','0','0','0','0','0');");
E_D("replace into `tp_userinfo` values('23','http://wzweixiang.com/tpl/static/portrait/2.jpg','0','0','0','tzqawo1400308953','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','阿狸','快乐','15125896325','1996','10','21','0','1','0','','阿龙拖着','','2','0','1','0','0','0','1401420355');");

require("../../inc/footer.php");
?>