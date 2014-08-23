<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_leave`;");
E_C("CREATE TABLE `tp_leave` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wecha_id` varchar(60) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `token` varchar(60) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC");
E_D("replace into `tp_leave` values('1','ob2qxjoeJGrKjs_a_Mi_a_83niS4','1','张三','李四','avljgc1397041839','1398014328');");
E_D("replace into `tp_leave` values('2','o1R8Mt8CFd9lB1JOE4GIhUE53Cp8','1','阿狸','来咯','tzqawo1400308953','1401413734');");
E_D("replace into `tp_leave` values('3','ob2qxjgbC8wTmFfmJdS14O-So_jg','1','哈哈','哈哈','avljgc1397041839','1401445778');");
E_D("replace into `tp_leave` values('4','ob2qxjgbC8wTmFfmJdS14O-So_jg','1','哈哈','接口','avljgc1397041839','1401446009');");
E_D("replace into `tp_leave` values('5','ob2qxjgbC8wTmFfmJdS14O-So_jg','1','你好','去去去','avljgc1397041839','1401446403');");
E_D("replace into `tp_leave` values('6','ob2qxjgbC8wTmFfmJdS14O-So_jg','1','谢谢','12222','avljgc1397041839','1401446524');");
E_D("replace into `tp_leave` values('7','ob2qxjgbC8wTmFfmJdS14O-So_jg','1','  哈哈','垃圾','avljgc1397041839','1401446630');");

require("../../inc/footer.php");
?>