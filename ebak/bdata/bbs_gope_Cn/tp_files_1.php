<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_files`;");
E_C("CREATE TABLE `tp_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `size` int(10) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8");
E_D("replace into `tp_files` values('1','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/2/7/2/f/thumb_534511599f0d6.jpg','151860','jpg','1397035353');");
E_D("replace into `tp_files` values('2','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/6/2/8/5/thumb_5345117767a87.jpg','119700','jpg','1397035383');");
E_D("replace into `tp_files` values('3','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/3/5/3/5/thumb_5345119feaeda.jpg','39206','jpg','1397035424');");
E_D("replace into `tp_files` values('4','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/a/e/3/6/thumb_534511c6e5fe8.jpg','159075','jpg','1397035463');");
E_D("replace into `tp_files` values('5','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/e/5/b/2/thumb_534511e2263b6.jpg','104929','jpg','1397035490');");
E_D("replace into `tp_files` values('6','pvosmg1397034660','http://138.wtoken.com/uploads/p/pvosmg1397034660/1/4/8/9/thumb_534512d5eda78.jpg','17844','jpg','1397035734');");
E_D("replace into `tp_files` values('7','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/8/7/0/0/thumb_534516ff71d33.jpg','478906','jpg','1397036800');");
E_D("replace into `tp_files` values('8','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/7/5/1/2/thumb_53466daec3011.jpg','44418','jpg','1397124527');");
E_D("replace into `tp_files` values('9','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/7/d/6/thumb_53466de88c23b.jpg','39206','jpg','1397124584');");
E_D("replace into `tp_files` values('10','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/a/f/e/1/thumb_53466e2413098.jpg','28668','jpg','1397124644');");
E_D("replace into `tp_files` values('11','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/f/7/d/thumb_53466e83d7fc2.jpg','30442','jpg','1397124740');");
E_D("replace into `tp_files` values('12','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/0/d/1/3/53466e965aba8.jpg','122468','jpg','1397124758');");
E_D("replace into `tp_files` values('13','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/5/3/f/9/thumb_53466ff98ee75.jpg','62613','jpg','1397125113');");
E_D("replace into `tp_files` values('14','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/a/7/b/e/thumb_53467397b2e1a.png','139176','png','1397126040');");
E_D("replace into `tp_files` values('15','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/4/8/f/thumb_53467801a72d9.jpg','27298','jpg','1397127170');");
E_D("replace into `tp_files` values('16','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/4/4/f/0/thumb_5346781c30ae8.jpg','20184','jpg','1397127196');");
E_D("replace into `tp_files` values('17','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/3/7/0/8/thumb_53467846c122a.jpg','14780','jpg','1397127238');");
E_D("replace into `tp_files` values('18','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/6/9/8/c/thumb_5346789764e70.jpg','24503','jpg','1397127319');");
E_D("replace into `tp_files` values('19','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/c/4/0/2/thumb_534679a261769.jpg','62613','jpg','1397127586');");
E_D("replace into `tp_files` values('20','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/3/6/5/e/thumb_53467c58b2997.jpg','157390','jpg','1397128280');");
E_D("replace into `tp_files` values('21','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/9/a/d/2/thumb_5346809e8cf4f.jpg','169072','jpg','1397129374');");
E_D("replace into `tp_files` values('22','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/e/b/9/0/534680b063e78.jpg','20810','jpg','1397129392');");
E_D("replace into `tp_files` values('23','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/2/7/a/thumb_5346824cde34e.jpg','3300','jpg','1397129804');");
E_D("replace into `tp_files` values('24','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/f/b/3/7/thumb_5346843993b36.jpg','132471','jpg','1397130297');");
E_D("replace into `tp_files` values('25','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/8/5/a/4/thumb_534685d73d733.jpg','13032','jpg','1397130711');");
E_D("replace into `tp_files` values('26','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/2/2/c/6/thumb_534685f44a2c8.jpg','157390','jpg','1397130740');");
E_D("replace into `tp_files` values('27','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/3/d/4/2/thumb_5346892df4035.jpg','23201','jpg','1397131566');");
E_D("replace into `tp_files` values('28','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/d/d/0/0/thumb_534690669c022.png','139176','png','1397133415');");
E_D("replace into `tp_files` values('29','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/c/9/c/7/thumb_534694da481b6.jpg','62613','jpg','1397134554');");
E_D("replace into `tp_files` values('30','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/0/6/c/f/thumb_534695ef6f7bb.jpg','142827','jpg','1397134831');");
E_D("replace into `tp_files` values('31','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/f/0/3/1/thumb_534696d0884d7.jpg','19780','jpg','1397135056');");
E_D("replace into `tp_files` values('32','pvosmg1397034660','http://zgweixiang.com/uploads/p/pvosmg1397034660/b/5/3/1/thumb_534696f0cfeeb.jpg','11161','jpg','1397135089');");
E_D("replace into `tp_files` values('33','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/4/8/2/6/thumb_5347cad2254ea.jpg','63942','jpg','1397213906');");
E_D("replace into `tp_files` values('34','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/2/9/7/a/thumb_5347cb1ab1cb3.jpg','150105','jpg','1397213979');");
E_D("replace into `tp_files` values('35','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/1/thumb_5347cb522890f.jpg','96753','jpg','1397214034');");
E_D("replace into `tp_files` values('36','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/1/b/c/8/thumb_5347dc20163c0.jpg','63942','jpg','1397218336');");
E_D("replace into `tp_files` values('37','qbtshr1397819806','http://wall.wtoken.com/uploads/q/qbtshr1397819806/7/5/c/b/5353243099cd8.jpg','274567','jpg','1397957680');");
E_D("replace into `tp_files` values('38','qbtshr1397819806','http://wall.wtoken.com/uploads/q/qbtshr1397819806/d/8/1/6/5353243203cd7.jpg','177489','jpg','1397957682');");
E_D("replace into `tp_files` values('39','qbtshr1397819806','http://wall.wtoken.com/uploads/q/qbtshr1397819806/e/7/9/f/53532432b9e3d.jpg','91584','jpg','1397957682');");
E_D("replace into `tp_files` values('40','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/a/8/6/53546f4df36c0.jpg','312131','jpg','1398042446');");
E_D("replace into `tp_files` values('41','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/c/f/5/thumb_5354876b2bf06.jpg','303370','jpg','1398048619');");
E_D("replace into `tp_files` values('42','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/f/3/9/3/thumb_5356241cb40ed.jpg','31325','jpg','1398154269');");
E_D("replace into `tp_files` values('43','qtjnws1397994896','http://wall.wtoken.com/uploads/q/qtjnws1397994896/b/4/7/e/thumb_535f75dd5b615.jpg','24398','jpg','1398765021');");
E_D("replace into `tp_files` values('44','qtjnws1397994896','http://wall.wtoken.com/uploads/q/qtjnws1397994896/5/a/2/e/thumb_535f75f37f1af.jpg','42425','jpg','1398765043');");
E_D("replace into `tp_files` values('45','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/9/a/c/b/thumb_5365b368b0d2b.jpg','200494','jpg','1399173993');");
E_D("replace into `tp_files` values('46','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/4/5/2/thumb_53686c5c2d738.png','5808','png','1399352412');");
E_D("replace into `tp_files` values('47','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/c/3/f/0/thumb_536876fb1af76.png','22730','png','1399355131');");
E_D("replace into `tp_files` values('48','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/6/b/3/1/thumb_536879db83db5.png','22884','png','1399355867');");
E_D("replace into `tp_files` values('49','mybtpp1399529433','http://wall.wtoken.com/uploads/m/mybtpp1399529433/4/0/c/a/thumb_536b2185538f7.jpg','53686','jpg','1399529861');");
E_D("replace into `tp_files` values('50','mybtpp1399529433','http://wall.wtoken.com/uploads/m/mybtpp1399529433/7/a/2/f/thumb_536b23c3d5048.jpg','11695','jpg','1399530436');");
E_D("replace into `tp_files` values('51','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/6/2/b/a/536b2ffbae6be.xls','7168','xls','1399533563');");
E_D("replace into `tp_files` values('52','avljgc1397041839','http://wall.wtoken.com/uploads/a/avljgc1397041839/e/5/7/4/thumb_536c43612e394.jpg','845941','jpg','1399604066');");
E_D("replace into `tp_files` values('53','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/3/d/6/4/thumb_536d986ce5844.jpg','201395','jpg','1399691373');");
E_D("replace into `tp_files` values('54','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/f/9/6/4/thumb_536f266ec62ab.jpg','5110','jpg','1399793263');");
E_D("replace into `tp_files` values('55','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/d/8/c/5/536f3013b2eb6.xls','23552','xls','1399795731');");
E_D("replace into `tp_files` values('56','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/0/9/a/1/536f303cdf9f6.xls','23552','xls','1399795772');");
E_D("replace into `tp_files` values('57','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/7/4/0/6/536f310bb0dc4.xls','10240','xls','1399795979');");
E_D("replace into `tp_files` values('58','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/0/0/3/4/536f3216a26d4.xls','10240','xls','1399796246');");
E_D("replace into `tp_files` values('59','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/a/7/4/f/thumb_536f5c2a9ba20.png','149154','png','1399807020');");
E_D("replace into `tp_files` values('60','wglagr1400037084','http://wzweixiang.com/uploads/w/wglagr1400037084/9/c/5/c/thumb_5372e88d5198d.jpg','41882','jpg','1400039565');");
E_D("replace into `tp_files` values('61','wglagr1400037084','http://wzweixiang.com/uploads/w/wglagr1400037084/8/6/c/e/thumb_53732b6490b91.png','244156','png','1400056677');");
E_D("replace into `tp_files` values('62','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/4/0/b/9/thumb_53744bfb2e59f.jpg','1967','jpg','1400130555');");
E_D("replace into `tp_files` values('75','wsupsl1400754187','http://wzweixiang.com/uploads/w/wsupsl1400754187/3/7/7/f/thumb_537dd05ee5956.jpg','25858','jpg','1400754271');");
E_D("replace into `tp_files` values('64','rirjgb1400124807','http://wzweixiang.com/uploads/r/rirjgb1400124807/b/8/d/b/thumb_5374d7e58dade.jpg','126066','jpg','1400166374');");
E_D("replace into `tp_files` values('65','rirjgb1400124807','http://wzweixiang.com/uploads/r/rirjgb1400124807/5/c/b/7/thumb_5374d929545e8.jpg','233877','jpg','1400166698');");
E_D("replace into `tp_files` values('66','rirjgb1400124807','http://wzweixiang.com/uploads/r/rirjgb1400124807/8/b/a/c/thumb_5374d990550e3.jpg','233877','jpg','1400166801');");
E_D("replace into `tp_files` values('76','wsupsl1400754187','http://wzweixiang.com/uploads/w/wsupsl1400754187/a/e/5/0/thumb_537dd06c89a83.jpg','23951','jpg','1400754284');");
E_D("replace into `tp_files` values('68','orbhyn1400224508','http://wzweixiang.com/uploads/o/orbhyn1400224508/3/f/7/9/thumb_537822b428e7e.jpg','403799','jpg','1400382132');");
E_D("replace into `tp_files` values('105','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/a/4/8/2/thumb_538717fb6ba86.jpg','56666','jpg','1401362427');");
E_D("replace into `tp_files` values('70','qrjasb1400560397','http://wzweixiang.com/uploads/q/qrjasb1400560397/f/6/2/e/thumb_537adcbad6455.jpg','30999','jpg','1400560827');");
E_D("replace into `tp_files` values('71','xkuxqy1400560689','http://wzweixiang.com/uploads/x/xkuxqy1400560689/5/3/0/b/thumb_537ade9a1fb61.jpg','30999','jpg','1400561306');");
E_D("replace into `tp_files` values('72','xkuxqy1400560689','http://wzweixiang.com/uploads/x/xkuxqy1400560689/b/9/6/6/thumb_537b58e257251.jpg','30999','jpg','1400592610');");
E_D("replace into `tp_files` values('73','xkuxqy1400560689','http://wzweixiang.com/uploads/x/xkuxqy1400560689/e/0/d/4/thumb_537b5941cc428.jpg','13788','jpg','1400592705');");
E_D("replace into `tp_files` values('74','admin','http://wzweixiang.com/uploads/a/admin/e/0/8/2/thumb_537c567162cab.jpg','2355','jpg','1400657521');");
E_D("replace into `tp_files` values('77','wsupsl1400754187','http://wzweixiang.com/uploads/w/wsupsl1400754187/b/8/7/4/thumb_537dd129e2b6c.jpg','21953','jpg','1400754474');");
E_D("replace into `tp_files` values('78','admin','http://wzweixiang.com/uploads/a/admin/7/4/b/1/thumb_537de8896d331.jpg','33529','jpg','1400760457');");
E_D("replace into `tp_files` values('79','utxcrr1400760392','http://wzweixiang.com/uploads/u/utxcrr1400760392/9/0/0/8/thumb_537ded6c04660.jpg','33529','jpg','1400761708');");
E_D("replace into `tp_files` values('80','utxcrr1400760392','http://wzweixiang.com/uploads/u/utxcrr1400760392/7/d/3/5/thumb_537df9ec895ac.jpg','33529','jpg','1400764908');");
E_D("replace into `tp_files` values('81','utxcrr1400760392','http://wzweixiang.com/uploads/u/utxcrr1400760392/0/0/8/5/thumb_537df9f995988.jpg','33529','jpg','1400764921');");
E_D("replace into `tp_files` values('82','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/6/4/c/b/thumb_537ebbd59c8af.jpg','116694','jpg','1400814550');");
E_D("replace into `tp_files` values('83','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/d/9/b/c/thumb_537ebbf05a0cf.jpg','299261','jpg','1400814576');");
E_D("replace into `tp_files` values('84','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/d/6/9/b/thumb_537ebc4cb2b96.jpg','104165','jpg','1400814669');");
E_D("replace into `tp_files` values('85','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/3/b/9/9/thumb_537ebc5822f73.jpg','21836','jpg','1400814680');");
E_D("replace into `tp_files` values('86','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/9/b/6/b/thumb_537ebc971e861.jpg','428952','jpg','1400814743');");
E_D("replace into `tp_files` values('87','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/b/0/6/d/thumb_5381fecdbd907.jpg','6698','jpg','1401028301');");
E_D("replace into `tp_files` values('88','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/1/a/d/d/thumb_538207023fac1.jpg','6698','jpg','1401030402');");
E_D("replace into `tp_files` values('89','flpwvp1401090523','http://wzweixiang.com/uploads/f/flpwvp1401090523/1/8/9/a/thumb_5382f3629e0dd.png','93280','png','1401090915');");
E_D("replace into `tp_files` values('90','rgccej1400813594','http://wzweixiang.com/uploads/r/rgccej1400813594/e/a/d/e/thumb_53830a5c90271.jpg','135354','jpg','1401096797');");
E_D("replace into `tp_files` values('91','qpyzzq1401101914','http://wzweixiang.com/uploads/q/qpyzzq1401101914/b/3/a/0/thumb_538320374bb19.png','11532','png','1401102391');");
E_D("replace into `tp_files` values('92','fpiuyp1401163488','http://wzweixiang.com/uploads/f/fpiuyp1401163488/4/d/b/1/thumb_53843952014cd.jpg','20075','jpg','1401174354');");
E_D("replace into `tp_files` values('93','ugyteu1401163507','http://wzweixiang.com/uploads/u/ugyteu1401163507/5/4/e/0/thumb_538452c07efef.jpg','25345','jpg','1401180864');");
E_D("replace into `tp_files` values('94','sdqbre1401259557','http://wzweixiang.com/uploads/s/sdqbre1401259557/8/6/0/e/thumb_538587574df3e.jpg','31217','jpg','1401259863');");
E_D("replace into `tp_files` values('95','rirgpp1401289818','http://wzweixiang.com/uploads/r/rirgpp1401289818/f/7/6/b/thumb_538600a1e33cd.jpg','29704','jpg','1401290914');");
E_D("replace into `tp_files` values('96','rirgpp1401289818','http://wzweixiang.com/uploads/r/rirgpp1401289818/d/a/2/2/thumb_538603ad66aa6.jpg','29704','jpg','1401291693');");
E_D("replace into `tp_files` values('97','rirgpp1401289818','http://wzweixiang.com/uploads/r/rirgpp1401289818/2/7/3/1/thumb_53860482e4b15.jpg','29704','jpg','1401291907');");
E_D("replace into `tp_files` values('98','rtzvcz1401302172','http://wzweixiang.com/uploads/r/rtzvcz1401302172/4/6/b/9/thumb_53862ce0225c6.jpg','26200','jpg','1401302240');");
E_D("replace into `tp_files` values('99','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/f/8/5/4/538687e225178.png','59737','png','1401325538');");
E_D("replace into `tp_files` values('100','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/f/7/b/1/538687e847af1.png','33030','png','1401325544');");
E_D("replace into `tp_files` values('101','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/7/f/4/b/538687ef78ade.png','59737','png','1401325551');");
E_D("replace into `tp_files` values('102','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/a/2/a/0/5386889f7f4b3.jpg','43819','jpg','1401325727');");
E_D("replace into `tp_files` values('103','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/0/4/3/c/538688a7bc591.png','384298','png','1401325735');");
E_D("replace into `tp_files` values('104','avljgc1397041839','http://wzweixiang.com/uploads/a/avljgc1397041839/8/d/1/f/538688ae5ebae.jpg','32742','jpg','1401325742');");
E_D("replace into `tp_files` values('106','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/8/0/e/thumb_538721dce23fa.jpg','84624','jpg','1401364957');");
E_D("replace into `tp_files` values('107','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/4/b/9/8/thumb_538721f133267.jpg','68548','jpg','1401364977');");
E_D("replace into `tp_files` values('108','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/e/1/5/1/thumb_538721fe5930a.jpg','77183','jpg','1401364990');");
E_D("replace into `tp_files` values('109','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/9/d/2/e/thumb_5387220b197d1.jpg','91911','jpg','1401365003');");
E_D("replace into `tp_files` values('118','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/c/c/d/7/thumb_53875dc1d55a8.jpg','33672','jpg','1401380290');");
E_D("replace into `tp_files` values('111','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/7/3/d/a/thumb_5387286fb5ac7.jpg','326591','jpg','1401366643');");
E_D("replace into `tp_files` values('112','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/c/8/c/b/thumb_538729b572420.jpg','30219','jpg','1401366965');");
E_D("replace into `tp_files` values('113','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/b/4/e/0/thumb_53872cc9a6cab.jpg','42342','jpg','1401367753');");
E_D("replace into `tp_files` values('119','tzqawo1400308953','http://wzweixiang.com/uploads/t/tzqawo1400308953/8/6/b/a/thumb_5388182abdda4.png','21854','png','1401428011');");
E_D("replace into `tp_files` values('115','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/0/f/1/d/thumb_5387385737ddc.jpg','11698','jpg','1401370711');");
E_D("replace into `tp_files` values('116','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/a/3/4/6/thumb_53873858401ac.jpg','11698','jpg','1401370712');");
E_D("replace into `tp_files` values('117','admin','http://wzweixiang.com/uploads/a/admin/5/6/5/f/thumb_538745648afd4.jpeg','261195','jpeg','1401374052');");
E_D("replace into `tp_files` values('120','ivrnef1401365899','http://wzweixiang.com/uploads/i/ivrnef1401365899/8/6/6/c/thumb_53882820e7ac0.jpg','326591','jpg','1401432098');");

require("../../inc/footer.php");
?>