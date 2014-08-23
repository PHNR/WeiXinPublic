<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_estate_housetype`;");
E_C("CREATE TABLE `tp_estate_housetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `panorama_id` int(10) NOT NULL DEFAULT '0',
  `son_id` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `floor_num` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `fang` int(11) NOT NULL,
  `ting` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abid` varchar(200) NOT NULL,
  `type1` varchar(200) NOT NULL,
  `type2` varchar(200) NOT NULL,
  `type3` varchar(200) NOT NULL,
  `type4` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `panorama_id` (`panorama_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_estate_housetype` values('1','3','0','tzqawo1400308953','结婚','5','120','3','2','1','打工是地方','','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg');");

require("../../inc/footer.php");
?>