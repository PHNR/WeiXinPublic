<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_host_order`;");
E_C("CREATE TABLE `tp_host_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `book_people` varchar(50) NOT NULL COMMENT '预订人',
  `tel` varchar(13) NOT NULL COMMENT '电话',
  `check_in` int(11) NOT NULL COMMENT '入住时间',
  `check_out` int(11) NOT NULL COMMENT '离开时间',
  `room_type` varchar(50) NOT NULL COMMENT '房间类型',
  `book_time` int(11) NOT NULL COMMENT '预订时间',
  `book_num` int(11) NOT NULL COMMENT '预订数量',
  `price` decimal(10,2) NOT NULL COMMENT ' 价格',
  `order_status` int(11) NOT NULL COMMENT '订单状态 1 成功,2 失败,3 未处理',
  `hid` int(11) NOT NULL COMMENT '订房商家id',
  `remarks` varchar(250) NOT NULL COMMENT '留言备注',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='订单管理'");
E_D("replace into `tp_host_order` values('1','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401120000','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('2','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401120000','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('3','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('4','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('5','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('6','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('7','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('8','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('9','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('10','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('11','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('12','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('13','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','2014-05-28 22:27:04');");
E_D("replace into `tp_host_order` values('14','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','2014-05-28 22:27:41');");
E_D("replace into `tp_host_order` values('15','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','微呵呵','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','2014-05-28 22:28:15');");
E_D("replace into `tp_host_order` values('16','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','2014-05-28 22:28:50');");
E_D("replace into `tp_host_order` values('17','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','哦哦哦','18267720632','0','0','q上达到','1401206400','1','0.00','3','8','','2014-05-28 22:30:24');");
E_D("replace into `tp_host_order` values('18','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401292800','1','0.00','3','8','','2014-05-29 19:10:54');");
E_D("replace into `tp_host_order` values('19','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','就咯啦咯啦咯了','15888888888','0','0','如:&amp;amp;amp;quot;标准房/商务套房&amp;amp;amp;quot;','1401292800','1','128.00','3','11','','2014-05-29 22:14:49');");
E_D("replace into `tp_host_order` values('20','tzqawo1400308953','o1R8MtzBEWnrRp4ruF8BiIK89pxA','就咯啦咯啦咯了','15888888888','0','0','如:&amp;amp;amp;quot;标准房/商务套房&amp;amp;amp;quot;','1401292800','1','128.00','1','11','','2014-05-29 22:17:36');");
E_D("replace into `tp_host_order` values('21','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','傻逼','18267720632','0','0','q上达到','1401379200','1','0.00','3','8','','2014-05-30 19:32:52');");
E_D("replace into `tp_host_order` values('22','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','还好还好近','18267720632','0','0','q上达到','1401379200','1','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('23','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','互听哦墨迹快接近','18267720632','0','0','q上达到','1401638400','4','0.00','3','8','','0000-00-00 00:00:00');");
E_D("replace into `tp_host_order` values('24','avljgc1397041839','ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','18267720632','0','0','q上达到','1401379200','1','0.00','3','8','','0000-00-00 00:00:00');");

require("../../inc/footer.php");
?>