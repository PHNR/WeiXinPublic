<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_yzdd`;");
E_C("CREATE TABLE `tp_yzdd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(80) NOT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT '����',
  `ms` varchar(1023) DEFAULT NULL COMMENT '�Ż�����',
  `kssj` int(11) DEFAULT NULL COMMENT '���ʼʱ��',
  `jssj` int(11) DEFAULT NULL COMMENT '�����ʱ��',
  `pic` varchar(255) DEFAULT NULL COMMENT '�ͼƬ',
  `gjz` varchar(50) DEFAULT NULL COMMENT '�ؼ���',
  `limit` int(11) DEFAULT '20' COMMENT '��ʱ',
  `mrtm` int(11) DEFAULT NULL COMMENT 'ÿ����Ŀ��',
  `tk` varchar(255) DEFAULT NULL COMMENT '�Զ�����Ŀ',
  `dtts` int(11) DEFAULT NULL COMMENT '��������',
  `status` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `tp_yzdd` values('1','e1bdd3d0699904a','一站到底活动开始了','一站到底','1398319528','1398837930','http://suetest.yzsep.com/tpl/User/default/common/images/img/yzdd.jpg','一站到底','12','3',NULL,'5','1');");
E_D("replace into `tp_yzdd` values('16','avljgc1397041839','一站到底活动开始了','0','1399557204','1401458007','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','0','2','2',NULL,'2','1');");
E_D("replace into `tp_yzdd` values('21','nepvyy1400393099','一站到底活动开始了','一站到底活动开始了','1388505600','1420646400','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','一站到底','1','3',NULL,'10','1');");
E_D("replace into `tp_yzdd` values('17','orbhyn1400224508','一站到底活动开始了','','0','0','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','一站到底','0','0',NULL,'0','0');");
E_D("replace into `tp_yzdd` values('19','hziflr1400551929','一站到底活动开始了','一站到底活动开始了','1400468410','1401418813','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','一站到底','2','10',NULL,'5','1');");
E_D("replace into `tp_yzdd` values('22','qpyzzq1401101914','一站到底活动开始了','一站到底活动开始了一站到底活动开始了一站到底活动开始了一站到底活动开始了','1401102140','1527332542','http://wzweixiang.com/uploads/q/qpyzzq1401101914/b/3/a/0/thumb_538320374bb19.png','一站到底','1','111',NULL,'11','1');");
E_D("replace into `tp_yzdd` values('23','tzqawo1400308953','一站到底活动开始了','吧的','1399651200','0','http://wzweixiang.com/tpl/User/default/common/images/img/yzdd.jpg','一站到底','2','3',NULL,'3','1');");

require("../../inc/footer.php");
?>