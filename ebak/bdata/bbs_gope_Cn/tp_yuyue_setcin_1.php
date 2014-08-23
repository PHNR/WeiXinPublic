<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yuyue_setcin`;");
E_C("CREATE TABLE `tp_yuyue_setcin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `yuanjia` varchar(10) DEFAULT NULL,
  `youhui` varchar(10) DEFAULT NULL,
  `memo` varchar(100) DEFAULT NULL,
  `messages` text,
  `type` varchar(20) DEFAULT NULL,
  `pic1` varchar(100) DEFAULT NULL,
  `pic2` varchar(100) DEFAULT NULL,
  `pic3` varchar(100) DEFAULT NULL,
  `pic4` varchar(100) DEFAULT NULL,
  `pic5` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yuyue_setcin` values('1','1','的撒大','111','11','11','s达','Yuyue','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/5/3/1/thumb_534696f0cfeeb.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('2','2','预约测试','1111','111','预约测试','配套设置','Yuyue','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/1/b/c/8/thumb_5347dc20163c0.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('9','9','中通包厢','111','11111','1212','少是倒萨大','Huisuo','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/a/8/6/53546f4df36c0.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/a/8/6/53546f4df36c0.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/1/b/c/8/thumb_5347dc20163c0.jpg','');");
E_D("replace into `tp_yuyue_setcin` values('3','2','预约测试2','111','111','11','&lt;span&gt;预约测试&lt;span&gt;预约测试&lt;span&gt;预约测试&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;','Yuyue','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('4','3','111','11','11','22','发的功夫功夫功夫功夫功夫功夫的广告贴 更幸福幸福','Jiudian','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('5','4','地方','15','11','电风扇','收费','Yiliao','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('6','1','11','阿达','11','111','','Yiliao','http://wall.wtoken.com/uploads/a/avljgc1397041839/1/b/c/8/thumb_5347dc20163c0.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('7','5','套餐1','200','100','酒水套餐','配套酒水套餐！','Jiuba','http://wall.wtoken.com/tpl/static/attachment/icon/lovely/clock.png','','','','');");
E_D("replace into `tp_yuyue_setcin` values('8','2','类型1','11','11','111','111','Yuyue','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/3/thumb_5356241cb40ed.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('10','8','sdadas','11','11','1111','sdsadas','Ktv','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','http://wall.wtoken.com/uploads/a/avljgc1397041839/1/b/c/8/thumb_5347dc20163c0.jpg','','');");
E_D("replace into `tp_yuyue_setcin` values('11','8','sadas','11','11','11','','Ktv','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('12','12','测试1','1000','800','vcV','的说法都是水电费','Yuyue','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('13','14','预约','111','111','123123','预约','Yuyue','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('14','1','最强测试 啊啊 ','11111','111','11','','Jiudian','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('15','2','小包','388','288','1','','Jiudian','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('16','3','小包厢','169','99','6人小包厢','小包厢小包厢','Ktv','http://wzweixiang.com/tpl/static/attachment/background/view/6.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('17','5','双人','98','68','双人','双人','Jiudian','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/9.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('18','6','微最强','111','11','','','Ktv','http://wzweixiang.com/uploads/a/avljgc1397041839/3/d/6/4/thumb_536d986ce5844.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('19','7','疼痛','86','56','挂号','挂号','Yiliao','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('20','8','经济型','128','120','经济型','经济型','Jiuba','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('21','9','双人房','156','120','适合2人','&lt;span style=&quot;color:#666666;font-family:微软雅黑;background-color:#FCFCFC;&quot;&gt;适合2人&lt;/span&gt;','Yuyue','http://wzweixiang.com/tpl/static/attachment/background/view/7.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('22','4','大包厢','368','268','大包厢','大包厢','Huisuo','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/5.jpg','','');");
E_D("replace into `tp_yuyue_setcin` values('23','3','大包厢','368','268','大包厢','大包厢大包厢','Ktv','http://wzweixiang.com/tpl/static/attachment/background/view/1.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/8.jpg','http://wzweixiang.com/tpl/static/attachment/background/view/5.jpg','','');");
E_D("replace into `tp_yuyue_setcin` values('24','2','小包厢','108','98','小包厢','小包厢小包厢','Ktv','http://wzweixiang.com/uploads/n/nepvyy1400393099/b/a/2/f/thumb_53784fa1d3924.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('25','3','双人房','280','188','双人房','双人房','Jiuba','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('26','1','1011','11','11','','打撒打撒的','Ktv','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('27','1','1011','11','11','','','Ktv','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('28','4','高级会所','999','666','高级会所','高级会所','Huisuo','http://wzweixiang.com/tpl/static/attachment/background/view/4.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('29','7','212','2121','2112','2121','','Yuyue','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('30','11','ddd','50','20','dd ','dd','Yuyue','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('31','13','包房预定','108','100','士大夫','rtzvcz1401302172','Ktv','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('32','15','傻逼','222','111','333','2211大保健','Ktv','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','','','','');");
E_D("replace into `tp_yuyue_setcin` values('33','16','不会不回家','125','12','哦开卷哦','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','Yuyue','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','','','');");
E_D("replace into `tp_yuyue_setcin` values('34','18','方式','12','10','电饭锅','黄金分割很符合','Ktv','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','','');");
E_D("replace into `tp_yuyue_setcin` values('35','19','v不能','20','15','电饭锅','发生的发给','Jiuba','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('36','17','规划','23','12','风格化','福德宫电饭锅','Huisuo','','','','','');");
E_D("replace into `tp_yuyue_setcin` values('37','20','总统房','11','1','12','223311','Yuyue','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','http://wzweixiang.com/uploads/i/ivrnef1401365899/8/6/6/c/thumb_53882820e7ac0.jpg','','','');");

require("../../inc/footer.php");
?>