<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_token_open`;");
E_C("CREATE TABLE `tp_token_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `queryname` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8");
E_D("replace into `tp_token_open` values('1','1','eewoyx1396338504','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,diaoyan,Jiudian,Diaoyan,Yuyue,Yiliao,Meirong,peiliao,Shake');");
E_D("replace into `tp_token_open` values('2','2','nnivod1396346235','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car');");
E_D("replace into `tp_token_open` values('3','5','lxxnfn1396718703','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Shake');");
E_D("replace into `tp_token_open` values('4','1','tqbcao1396752365','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Shake');");
E_D("replace into `tp_token_open` values('5','6','pozfmk1396884791','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Shake,Yuyue,Yiliao');");
E_D("replace into `tp_token_open` values('6','8','nunloc1396884852','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Shake,Yuyue,Yiliao');");
E_D("replace into `tp_token_open` values('7','3','ldofrh1396916124','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Shake,Yuyue,Yiliao');");
E_D("replace into `tp_token_open` values('8','2','kecjmg1397032997','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Yuyue,Yiliao,Shake');");
E_D("replace into `tp_token_open` values('9','1','pvosmg1397034660','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Yuyue,Yiliao,Shake,');");
E_D("replace into `tp_token_open` values('10','3','avljgc1397041839','qiushi,jishuan,langdu,jiankang,kuaidi,changtoushi,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,Yuyue,Yiliao,Shake,tianqi,Wxq,Yzdd,Dining,dining,kefu,Kefu,Zhaopianwall,Share,share,forum,新版微预约,school,medical,hotel,xiaohua,wifi,liaotian,peiliao');");
E_D("replace into `tp_token_open` values('11','3','qbtshr1397819806','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('12','9','muxwct1397874036','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('13','12','qtjnws1397994896','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd');");
E_D("replace into `tp_token_open` values('14','12','vwlytb1397998231','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('15','12','dgherz1398050506','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('16','6','lufpbx1399424858','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('17','3','mybtpp1399529433','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('18','3','eilrbx1399730558','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('19','3','noepqk1399730731','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('20','3','lsgbjt1399731127','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('21','3','niywfm1399731379','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('22','3','syxgoi1399731417','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('23','3','amdqal1399732975','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('24','3','pdpypu1399733196','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('25','3','cgwsrk1399733336','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('26','3','teqwgu1399733409','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('27','3','rpiudb1399733515','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('28','3','adrgic1399733760','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('29','3','ywrjhd1399733775','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('30','3','qpnzlb1399734449','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining');");
E_D("replace into `tp_token_open` values('31','12','vhnpth1399864000','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd');");
E_D("replace into `tp_token_open` values('32','12','isouej1399863564','qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,tianqi,dining');");
E_D("replace into `tp_token_open` values('33','12','uvvgud1399869420','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd');");
E_D("replace into `tp_token_open` values('34','42','wglagr1400037084','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('35','12','rirjgb1400124807','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('36','12','olrnwo1400125028','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('37','12','lgcwrf1400125320','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('38','3','imywfr1400223186','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('39','12','orbhyn1400224508','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,userinfo,Kefu,Zhaopianwall,share,forum,hotel,medical,school,wifi');");
E_D("replace into `tp_token_open` values('40','12','tzqawo1400308953','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,forum,Zhaopianwall,school,wifi,hotel,medical,share');");
E_D("replace into `tp_token_open` values('41','32','fbcsqj1400322782','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining');");
E_D("replace into `tp_token_open` values('42','12','nepvyy1400393099','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,peiliao,liaotian,wifi');");
E_D("replace into `tp_token_open` values('43','12','reiesr1400475948','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,hotel,medical,school,wifi');");
E_D("replace into `tp_token_open` values('44','35','cytadf1400496099','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,hotel,medical,wifi,school');");
E_D("replace into `tp_token_open` values('45','12','omcmpf1400514094','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall');");
E_D("replace into `tp_token_open` values('46','12','taenqh1400550796','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall');");
E_D("replace into `tp_token_open` values('47','12','hziflr1400551929','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall');");
E_D("replace into `tp_token_open` values('48','12','qrjasb1400560397','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school');");
E_D("replace into `tp_token_open` values('49','12','xkuxqy1400560689','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall');");
E_D("replace into `tp_token_open` values('52','3','xgtfui1400681463','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('50','12','ozugxw1400589873','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel');");
E_D("replace into `tp_token_open` values('51','12','ggupyl1400598740','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel');");
E_D("replace into `tp_token_open` values('53','12','wsupsl1400754187','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('54','3','utxcrr1400760392','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('55','12','brogbh1400764930','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('56','12','rgccej1400813594','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('57','12','flpwvp1401090523','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('58','12','qpyzzq1401101914','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('59','12','yvwtyq1401163253','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('60','12','bnuvwn1401163296','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('61','12','fpiuyp1401163488','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('62','12','ugyteu1401163507','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('63','12','psdbsb1401164166','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('64','12','chsyqp1401254915','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('65','65','sdqbre1401259557','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('66','12','gcpvcb1401284265','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('67','68','pgdxmk1401284729','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('68','12','rirgpp1401289818','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('69','12','rtzvcz1401302172','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('70','12','ivrnef1401365899','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");
E_D("replace into `tp_token_open` values('71','12','lfethi1401449403','tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,userinfo,fanyi,api,suanming,baike,caipiao,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,Heka,choujiang,lottery,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,message,car,Diaoyan,新版微预约,Yuyue,Yiliao,Shake,Dining,Wxq,Yzdd,dining,Kefu,Zhaopianwall,share,forum,school,medical,hotel,wifi');");

require("../../inc/footer.php");
?>