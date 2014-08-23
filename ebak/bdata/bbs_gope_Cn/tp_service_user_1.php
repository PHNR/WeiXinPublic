<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_service_user`;");
E_C("CREATE TABLE `tp_service_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `userPwd` varchar(32) NOT NULL,
  `endJoinDate` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `tp_service_user` values('1','微享客服','nnivod1396346235','微享客服','1104959d53dc3b60f2d40cd4a47d79e7','1396347363','0');");
E_D("replace into `tp_service_user` values('8','111111','eewoyx1396338504','111111','e10adc3949ba59abbe56e057f20f883e','1396771448','0');");
E_D("replace into `tp_service_user` values('6','十大撒','eewoyx1396338504','520','d41d8cd98f00b204e9800998ecf8427e','1396761593','0');");
E_D("replace into `tp_service_user` values('7','legal','lxxnfn1396718703','legal','5416d7cd6ef195a0f7622a9c56b55e84','1396719579','0');");
E_D("replace into `tp_service_user` values('9','111','nunloc1396884852','111','698d51a19d8a121ce581499d7b701668','1396921563','0');");
E_D("replace into `tp_service_user` values('10','jockly','avljgc1397041839','123','202cb962ac59075b964b07152d234b70','1401123973','0');");
E_D("replace into `tp_service_user` values('11','1010','avljgc1397041839','1010','202cb962ac59075b964b07152d234b70','1401123973','0');");
E_D("replace into `tp_service_user` values('12','111','qtjnws1397994896','111','698d51a19d8a121ce581499d7b701668','1399696506','0');");
E_D("replace into `tp_service_user` values('15','222','qtjnws1397994896','223','115f89503138416a242f40fb7d7f338e','0','0');");
E_D("replace into `tp_service_user` values('16','小美','isouej1399863564','shijie001','e10adc3949ba59abbe56e057f20f883e','1399994148','0');");
E_D("replace into `tp_service_user` values('17','haining','isouej1399863564','haining','492be47ff4ba4316ceb36bca752069fb','1399999204','0');");
E_D("replace into `tp_service_user` values('18','111','orbhyn1400224508','111','698d51a19d8a121ce581499d7b701668','1400679375','0');");
E_D("replace into `tp_service_user` values('21','111','avljgc1397041839','111','698d51a19d8a121ce581499d7b701668','1401440515','0');");
E_D("replace into `tp_service_user` values('20','01199','orbhyn1400224508','01199','202cb962ac59075b964b07152d234b70','1400744121','0');");
E_D("replace into `tp_service_user` values('22','oocid','utxcrr1400760392','oocid','d4b70e3f620449e035e2e3eeee1e0fa0','1400765590','0');");
E_D("replace into `tp_service_user` values('23','asdfasf','orbhyn1400224508','abc','d41d8cd98f00b204e9800998ecf8427e','1401088747','0');");
E_D("replace into `tp_service_user` values('24','001','chsyqp1401254915','hooligan','b87eacab9bfc6fa501ef2b41803fbc3e','0','0');");
E_D("replace into `tp_service_user` values('25','001','rgccej1400813594','hooligan','b87eacab9bfc6fa501ef2b41803fbc3e','1401277705','0');");
E_D("replace into `tp_service_user` values('26','包房预定','rtzvcz1401302172','qh562403','202cb962ac59075b964b07152d234b70','1401330962','0');");
E_D("replace into `tp_service_user` values('27','1','ivrnef1401365899','qsq08','96e79218965eb72c92a549dd5a330112','1401425046','0');");

require("../../inc/footer.php");
?>