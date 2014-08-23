<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_service_logs`;");
E_C("CREATE TABLE `tp_service_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `openid` varchar(60) NOT NULL,
  `enddate` int(11) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `tp_service_logs` values('1','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1400671407','人工客服－111:\n\rhaha \n','2');");
E_D("replace into `tp_service_logs` values('2','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1400671507','人工客服－111:\n\r','2');");
E_D("replace into `tp_service_logs` values('3','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1400671517','人工客服－111:\n\r[阴险]','2');");
E_D("replace into `tp_service_logs` values('4','22','oe7SSjm3Hu0hmdWtfyKfNG7AVY7g','1400764541','人工客服－oocid:\n\r你好','2');");
E_D("replace into `tp_service_logs` values('5','21','oWXertx56G-KrTJcKmt1KfR2BiQY','1400765958','人工客服－111:\n\r可以阿\n','2');");
E_D("replace into `tp_service_logs` values('6','21','oWXertx56G-KrTJcKmt1KfR2BiQY','1400765961','人工客服－111:\n\r擦','2');");
E_D("replace into `tp_service_logs` values('7','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1401270960','人工客服－111:\n\r你的撒的\n','2');");
E_D("replace into `tp_service_logs` values('8','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1401270962','人工客服－111:\n\r你的撒的\n','2');");
E_D("replace into `tp_service_logs` values('9','21','oWXert7SH5sbKHL3jAdsfYeoSkeY','1401270964','人工客服－111:\n\r','2');");

require("../../inc/footer.php");
?>