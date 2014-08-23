<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_forum_message`;");
E_C("CREATE TABLE `tp_forum_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(3000) NOT NULL,
  `createtime` int(11) NOT NULL,
  `fromuid` varchar(50) NOT NULL,
  `touid` varchar(40) NOT NULL,
  `fromuname` varchar(60) DEFAULT NULL,
  `touname` varchar(60) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `isread` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_forum_message` values('1','<a href=\"/index.php?g=Wap&m=Forum&a=comment&tid=6&wecha_id=o1R8Mt8CFd9lB1JOE4GIhUE53Cp8&token=tzqawo1400308953\">游客评论了您的帖子</a>','1401413923','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','游客','游客','6',NULL,'tzqawo1400308953','1','1');");

require("../../inc/footer.php");
?>