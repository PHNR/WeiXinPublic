<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_forum_comment`;");
E_C("CREATE TABLE `tp_forum_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `content` varchar(3000) NOT NULL,
  `createtime` int(11) NOT NULL,
  `favourid` varchar(3000) DEFAULT NULL,
  `replyid` varchar(3000) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_forum_comment` values('1','6','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','游客','gg','1401413923',NULL,NULL,'1','tzqawo1400308953');");

require("../../inc/footer.php");
?>