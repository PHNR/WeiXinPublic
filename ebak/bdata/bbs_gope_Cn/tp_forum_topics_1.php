<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_forum_topics`;");
E_C("CREATE TABLE `tp_forum_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `likeid` varchar(3000) DEFAULT NULL,
  `commentid` varchar(3000) DEFAULT NULL,
  `favourid` varchar(3000) DEFAULT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `photos` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_forum_topics` values('1','你跟','考虑考虑','',NULL,'','1400580584',NULL,'ob2qxjgbC8wTmFfmJdS14O-So_jg','测试下','avljgc1397041839','','1');");
E_D("replace into `tp_forum_topics` values('2','快接近','图片',NULL,NULL,NULL,'1400580910',NULL,'ob2qxjgbC8wTmFfmJdS14O-So_jg','游客','avljgc1397041839','','1');");
E_D("replace into `tp_forum_topics` values('3','美女','美女',NULL,NULL,NULL,'1400634958',NULL,'oKTN3tzO4O7LKA8Ad_hhIJgPp1-4','游客','nepvyy1400393099','','1');");
E_D("replace into `tp_forum_topics` values('4','快接近','兔兔',NULL,NULL,NULL,'1400657530',NULL,'ob2qxjgbC8wTmFfmJdS14O-So_jg','快接近','avljgc1397041839','http://wzweixiang.com/uploads/a/admin/e/0/8/2/thumb_537c567162cab.jpg','1');");
E_D("replace into `tp_forum_topics` values('5','吃饭g','z',NULL,NULL,NULL,'1401027491',NULL,'{wechat_id}','gg','avljgc1397041839','','1');");
E_D("replace into `tp_forum_topics` values('6','路1','hb&amp;lt;img src=&amp;quot;./tpl/static/forum/images/2.gif&amp;quot; data-innerhtml=&amp;quot;/::B&amp;quot;&amp;gt;&amp;lt;/img&amp;gt;',NULL,NULL,NULL,'1401413866',NULL,'o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','游客','tzqawo1400308953','','1');");

require("../../inc/footer.php");
?>