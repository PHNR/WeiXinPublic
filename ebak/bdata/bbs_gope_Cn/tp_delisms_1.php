<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_delisms`;");
E_C("CREATE TABLE `tp_delisms` (
  `token` varchar(60) NOT NULL,
  `phone` varchar(40) NOT NULL DEFAULT '',
  `name` varchar(40) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `shangcheng` tinyint(1) NOT NULL DEFAULT '0',
  `yuyue` tinyint(1) NOT NULL DEFAULT '0',
  `baom` tinyint(1) NOT NULL DEFAULT '0',
  `zxyy` tinyint(1) NOT NULL DEFAULT '0',
  `toupiao` tinyint(1) NOT NULL DEFAULT '0',
  `dingcan` tinyint(1) NOT NULL,
  `car` tinyint(1) NOT NULL,
  `yiliao` tinyint(1) NOT NULL,
  `jdbg` tinyint(1) NOT NULL,
  `ktv` tinyint(1) NOT NULL,
  `huisuo` tinyint(1) NOT NULL,
  `jiuba` tinyint(1) NOT NULL,
  PRIMARY KEY (`token`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_delisms` values('avljgc1397041839','18267720632','2834970311','520520','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `tp_delisms` values('orbhyn1400224508','18214183337','jx2600896','2600896','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `tp_delisms` values('ivrnef1401365899','13697294645','qsq08','123456','1','1','1','1','1','1','1','1','1','1','1','1');");

require("../../inc/footer.php");
?>