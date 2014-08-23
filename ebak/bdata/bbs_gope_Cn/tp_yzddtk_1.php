<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yzddtk`;");
E_C("CREATE TABLE `tp_yzddtk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tm` varchar(1023) DEFAULT NULL,
  `d1` varchar(255) DEFAULT NULL,
  `d2` varchar(255) DEFAULT NULL,
  `d3` varchar(255) DEFAULT NULL,
  `d4` varchar(255) DEFAULT NULL,
  `zd` varchar(2) DEFAULT NULL COMMENT '��ȷ��',
  `token` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yzddtk` values('1','测试','速度','撒','速度','撒旦吃','d1','avljgc1397041839');");
E_D("replace into `tp_yzddtk` values('2','现场总线','按时的','订餐vc','vc','宣传v ','d1','avljgc1397041839');");
E_D("replace into `tp_yzddtk` values('3','1-1=?','2','1','3','-1','d1','nepvyy1400393099');");
E_D("replace into `tp_yzddtk` values('4','男人为什喜欢女人？','因为这是自然规律','因为女人魅力大','因为男人好色','','d3','nepvyy1400393099');");
E_D("replace into `tp_yzddtk` values('5','你爱我嘛？','不爱','爱','','','d1','nepvyy1400393099');");
E_D("replace into `tp_yzddtk` values('6','你喜欢胸大的女人吗？','喜欢','不喜欢','很难决定','','d1','nepvyy1400393099');");
E_D("replace into `tp_yzddtk` values('7','你觉得自己会成功吗？','成功','失败','看情况','不在乎','d1','nepvyy1400393099');");
E_D("replace into `tp_yzddtk` values('8','1','1','2','3','4','d1','qpyzzq1401101914');");
E_D("replace into `tp_yzddtk` values('9','上的','1','2','3','4','d1','tzqawo1400308953');");

require("../../inc/footer.php");
?>