<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_carnews`;");
E_C("CREATE TABLE `tp_carnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `news_id` int(11) NOT NULL,
  `pre_id` int(11) NOT NULL,
  `usedcar_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_carnews` values('1','tzqawo1400308953','142','142','142','0','3');");

require("../../inc/footer.php");
?>