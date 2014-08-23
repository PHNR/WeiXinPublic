<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_site_plugmenu`;");
E_C("CREATE TABLE `tp_site_plugmenu` (
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL DEFAULT '',
  `url` varchar(100) DEFAULT '',
  `taxis` mediumint(4) NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '0',
  KEY `token` (`token`,`taxis`,`display`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','tel','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','memberinfo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','nav','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','message',NULL,'0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','share','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','home','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','album','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','email','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','shopping','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','membercard','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','activity','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','weibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','tencentweibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','qqzone','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','wechat','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','music','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','video','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','recommend','','0','0');");
E_D("replace into `tp_site_plugmenu` values('eewoyx1396338504','other','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','tel','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','memberinfo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','nav','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','message',NULL,'0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','share','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','home','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','album','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','email','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','shopping','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','membercard','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','activity','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','weibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','tencentweibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','qqzone','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','wechat','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','music','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','video','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','recommend','','0','0');");
E_D("replace into `tp_site_plugmenu` values('pozfmk1396884791','other','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','tel','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','recommend','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','other','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','video','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','music','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','wechat','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','qqzone','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','tencentweibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','weibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','membercard','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','activity','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','shopping','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','email','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','album','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','home','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','share','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','message',NULL,'0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','nav','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','memberinfo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('orbhyn1400224508','tel','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','tel','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','memberinfo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','nav','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','message',NULL,'0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','share','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','home','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','album','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','email','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','shopping','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','membercard','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','activity','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','weibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','tencentweibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','qqzone','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','wechat','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','music','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','video','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','recommend','','0','0');");
E_D("replace into `tp_site_plugmenu` values('avljgc1397041839','other','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','memberinfo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','nav','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','message',NULL,'0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','share','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','home','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','album','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','email','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','shopping','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','membercard','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','activity','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','weibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','tencentweibo','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','qqzone','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','wechat','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','music','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','video','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','recommend','','0','0');");
E_D("replace into `tp_site_plugmenu` values('tzqawo1400308953','other','','0','0');");

require("../../inc/footer.php");
?>