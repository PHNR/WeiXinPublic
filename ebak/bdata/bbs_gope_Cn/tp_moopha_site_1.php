<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_site`;");
E_C("CREATE TABLE `tp_moopha_site` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `intro` varchar(600) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(40) NOT NULL DEFAULT '',
  `logourl` varchar(120) NOT NULL DEFAULT '',
  `siteindex` varchar(50) NOT NULL,
  `taxis` int(4) NOT NULL,
  `main` int(1) NOT NULL,
  `abspath` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(100) DEFAULT NULL,
  `statisticcode` varchar(600) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `siteindex` (`siteindex`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_site` values('1','','','','pvosmg1397034660','v22','','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('2','你好','萨达','http://zgweixiang.com/tpl/static/attachment/background/view/2.jpg','avljgc1397041839','blue1','http://wall.wtoken.com/cms/upload/images/2014/04/18/1397819613Npdp.png','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('3','','','','qtjnws1397994896','v15','http://wzweixiang.com/cms/upload/images/2014/05/10/1399696672ntVZ.jpg','','0','0','0',NULL,'ZGRk','0');");
E_D("replace into `tp_moopha_site` values('4','最新活动','光伏发电广泛的广泛的','http://wzweixiang.com/tpl/static/attachment/focus/default/2.jpg','isouej1399863564','hongsecanting','http://pig.iwxcms.com/cms/upload/images/2014/05/08/1399563567NTpM.jpg','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('5','','','','uvvgud1399869420','','12','','0','0','0',NULL,'MjE=','0');");
E_D("replace into `tp_moopha_site` values('6','','','','rirjgb1400124807','hongsecanting','http://wzweixiang.com/cms/upload/images/2014/05/15/1400138429UVUW.jpg','','0','0','0',NULL,'Njk=','0');");
E_D("replace into `tp_moopha_site` values('7','首页','首页首页首页','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','orbhyn1400224508','red1','','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('8','首页','首页','http://wzweixiang.com/tpl/static/attachment/background/view/2.jpg','nepvyy1400393099','zongse','','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('9','草草草草','擦擦擦擦擦擦','http://wzweixiang.com/tpl/static/attachment/background/bj/1.jpg','tzqawo1400308953','zongse','','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('10','','','','reiesr1400475948','v_31','','','0','0','0',NULL,'','0');");
E_D("replace into `tp_moopha_site` values('11','','','','hziflr1400551929','v12','http://wzweixiang.com/cms/upload/images/2014/05/20/1400555985JsNn.jpg','','0','0','0',NULL,'MTIzMTIz','0');");

require("../../inc/footer.php");
?>