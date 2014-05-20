<?php
function strExists($haystack, $needle) {
    return !(strpos($haystack, $needle) === false);
}



class IndexAction extends BaseAction {
    private $tpl; //微信公共帐号信息
    private $info; //分类信息
    private $info2; //2级分类信息
    private $wecha_id;
    private $copyright;
    public  $company;
    public  $token;
    public  $weixinUser;
    public  $homeInfo;
    public function _initialize() {
        parent::_initialize();
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if(!strpos($agent, "icroMessenger") && !isset($_GET['show'])) {
            //echo '此功能只能在微信浏览器中使用';
            //exit;
        }
        //
        //
        $this->token      = $this->_get('token', 'trim');
        $where['token']   = $this->token;
        $tpl              = D('Wxuser')->where($where)->find();
        $this->weixinUser = $tpl;
        if(isset($_GET['wecha_id']) && $_GET['wecha_id']) {
            $_SESSION['wecha_id'] = $_GET['wecha_id'];
            $this->wecha_id       = $this->_get('wecha_id');
        }
        if(isset($_SESSION['wecha_id'])) {
            $this->wecha_id = $_SESSION['wecha_id'];
        }
        //dump($where);
        $info  = M('Classify')->where(array(
            'token' => $this->_get('token'), 'status' => 1, 'fid' => 0
        ))->order('sorts desc')->select();
        $info  = $this->convertLinks($info); //加外链等信息
        $info2 = M('Classify')->where(array(
            'token' => $this->_get('token'), 'status' => 1, 'fid' => array('gt', 0)
        ))->order('sorts desc')->select();
        $info2 = $this->convertLinks($info2); //加外链等信息
        /*	$info=array();
            if ($allClasses){
                $classByID=array();
                $firstGradeCatCount=0;
                foreach ($allClasses as $c){
                    $classByID[$c['id']]=$c;
                    if ($c['fid']==0){
                        $c['sub']=array();
                        $info[$c['id']]=$c;
                        $firstGradeCatCount++;
                    }
                }
                foreach ($allClasses as $c){
                    if ($c['fid']>0){
                        array_push($info[$c['fid']]['sub'],$c);
                    }
                }
                //
                if($info){
                    foreach($info as $c){
                    $info[$c['id']]['key']=$firstGradeCatCount--;
                    }
                }
            }*/
        //
        $homeInfo = M('home')->where(array('token' => $this->token))->find();
        //
        $catemenu_db = M('catemenu');
        $catemenu    = $catemenu_db->where(array(
            'token' => $this->token, 'status' => 1
        ))->order('orderss desc')->select();
        $menures     = array();
        if($catemenu) {
            $res      = array();
            $rescount = 0;
            foreach($catemenu as $val) {
                $val['url']      = $this->getLink($val['url']);
                $res[$val['id']] = $val;
                if($val['fid'] == 0) {
                    $val['vo']                = array();
                    $menures[$val['id']]      = $val;
                    $menures[$val['id']]['k'] = $rescount;
                    $rescount++;
                }
            }
            foreach($catemenu as $val) {
                $val['url'] = $this->getLink($val['url']);
                if($val['fid'] > 0) {
                    array_push($menures[$val['fid']]['vo'], $val);
                }
            }
        }
        $catemenu = $menures;
        $this->assign('catemenu', $catemenu);
        //判断菜单风格
        $styleset_db = M('home');
        $radiogroup  = $homeInfo['radiogroup'];
        if($radiogroup == false) {
            $radiogroup = 0;
        }
        $cateMenuFileName = 'tpl/Wap/default/Index_menuStyle' . $radiogroup . '.html';
        $this->assign('cateMenuFileName', $cateMenuFileName);
        $this->assign('radiogroup', $radiogroup);
        $gid             = D('Users')->field('gid')->find($tpl['uid']);
        $this->userGroup = M('User_group')->where(array('id' => $gid['gid']))->find();
        $this->copyright = $this->userGroup['iscopyright'];
        $this->info      = $info;
        $this->info2     = $info2;
        $tpl['color_id'] = intval($tpl['color_id']);
        $this->tpl       = $tpl;
        $company_db      = M('company');
        $this->company   = $company_db->where(array('token' => $this->token, 'isbranch' => 0))->find();
        $this->assign('company', $this->company);
        //
        $homeInfo       = M('home')->where(array('token' => $this->token))->find();
        $this->homeInfo = $homeInfo;
        $this->assign('iscopyright', $this->copyright); //是否允许自定义版权
        $this->assign('siteCopyright', C('copyright')); //站点版权信息
        $this->assign('homeInfo', $homeInfo);
        //
        $this->assign('token', $this->token);
        //
        $this->assign('copyright', $this->copyright);
        //plugmenus
        $plugMenus = $this->_getPlugMenu();
        $this->assign('plugmenus', $plugMenus);
        $this->assign('showPlugMenu', count($plugMenus));
    }
    public function classify() {
        $this->assign('info', $this->info);
        $this->display($this->tpl['tpltypename']);
    }
    public function index() {
        //是否是高级模板
        if($this->homeInfo['advancetpl']) {
            echo '<script>window.location.href="/cms/index.php?token=' . $this->token . '&wecha_id=' . $this->wecha_id . '";</script>';
            exit();
        }
        //
        $where['token'] = $this->_get('token');
        //dump($where);
        //	$where['status']=1;
        $flash = M('Flash')->where($where)->select();
        $flash = $this->convertLinks($flash);
        $count = count($flash);
        $this->assign('flash', $flash);
        $this->assign('info', $this->info);
        $this->assign('info2', $this->info2);
        $this->assign('num', $count);
        $new = M('classify')->where(array('fid' => $this->_get('classid'), 'token' => $this->token))->select();
        if($new) $this->assign('info', $new);
        if($this->_get('tpl')) {
            $this->tpl['tpltypeid'] = $this->_get('tpl');
            if($this->_get('tpl') < 10) {
                $i     = $this->_get('tpl');
                $moban = '0' . $i;
            } else {
                $moban = $this->_get('tpl');
            }
            $this->tpl['tpltypename'] = 'tpl_1' . $moban . '_index';
        }
        if($this->homeInfo['bjdh'] != '' && $this->homeInfo['bjdh'] != 0) {
            $this->assign('bjdh', '<div id="leafContainer"></div>
<style>
.mainmenu{
z-index:3
}
 #leafContainer 
{
    position: fixed;
    z-index:2;
width:100%;
    height: 690px;
top:0;
overflow:hidden;
}
 #leafContainer > div 
{
    position: absolute;
    max-width: 100px;
    max-height: 100px;
    -webkit-animation-iteration-count: infinite, infinite;
    -webkit-animation-direction: normal, normal;
    -webkit-animation-timing-function: linear, ease-in;
}
#leafContainer > div > img {
     position: absolute;
     width: 100%;
     -webkit-animation-iteration-count: infinite;
     -webkit-animation-direction: alternate;
     -webkit-animation-timing-function: ease-in-out;
     -webkit-transform-origin: 50% -100%;
}
 @-webkit-keyframes fade
{
   
    0%   { opacity: 1; }
    95%  { opacity: 1; }
    100% { opacity: 0; }
}
 @-webkit-keyframes drop
{
       0%   { -webkit-transform: translate(0px, -50px); }
    100% { -webkit-transform: translate(0px, 650px); }
}
 @-webkit-keyframes clockwiseSpin
{
    0%   { -webkit-transform: rotate(-50deg); }
    100% { -webkit-transform: rotate(50deg); }
}
 @-webkit-keyframes counterclockwiseSpinAndFlip 
{
    
    0%   { -webkit-transform: scale(-1, 1) rotate(50deg); }
   
    100% { -webkit-transform: scale(-1, 1) rotate(-50deg); }
}
 </style>
<script src="' . RES . '/css/bjdh/' . $this->homeInfo['bjdh'] . '/bjdh' . $this->homeInfo['bjdh'] . '.js" type="text/javascript"></script>');
        }
        $this->assign('tpl', $this->tpl);
        $this->assign('bjmp3', $this->homeInfo['bjmp3']);
        $this->assign('tongji', $this->homeInfo['tongji']);
        $this->display($this->tpl['tpltypename']);
    }
    public function lists() {
        $where['token'] = $this->_get('token', 'trim');
        $db             = D('Img');
        if($_GET['p'] == false) {
            $page = 1;
        } else {
            $page = $_GET['p'];
        }
        $where['classid'] = $this->_get('classid', 'intval');
        $count            = $db->where($where)->count();
        $pageSize         = 8;
        $pagecount        = ceil($count / $pageSize);
        if($page > $count) {
            $page = $pagecount;
        }
        if($page >= 1) {
            $p = ($page - 1) * $pageSize;
        }
        if($p == false) {
            $p = 0;
        }
        $res = $db->where($where)->order('sorts asc')->limit("{$p}," . $pageSize)->select();
        $res = $this->convertLinks($res);
        $this->assign('page', $pagecount);
        $this->assign('p', $page);
        $this->assign('info', $this->info);
        $this->assign('info2', $this->info2);
        $this->assign('tpl', $this->tpl);
        $this->assign('res', $res);
        $this->assign('copyright', $this->copyright);
        if($count == 1) {
            $this->content($res[0]['id']);
            exit();
        }
        $l   = M("classify")->where(array("id" => $this->_get("classid"), "token" => $this->token))->find();
        $new = M("classify")->where(array("fid" => $l["fid"], "token" => $this->token))->select();
        if($new) $this->assign('info', $new);
        $ifone = M("classify")->where(array("fid" => $this->_get("classid")))->select();
        if($ifone) $this->redirect(U('Index/index', array(
            'classid' => $this->_get('classid'), 'token' => $this->token, 'tpl' => $l['tpl']
        )));
        $this->display($this->tpl['tpllistname']);
    }
    public function content($contentid = 0) {
        $db             = M('Img');
        $where['token'] = $this->_get('token', 'trim');
        if(!$contentid) {
            $contentid = intval($_GET['id']);
        }
        $where['id'] = array('neq', $contentid);
        $lists       = $db->where($where)->limit(5)->order('uptatetime')->select();
        $where['id'] = $contentid;
        $res         = $db->where($where)->order('uptatetime')->find();
        $this->assign('info', $this->info); //分类信息
        $this->assign('lists', $lists); //列表信息
        $this->assign('res', $res); //内容详情;
        $this->assign('tpl', $this->tpl); //微信帐号信息
        $this->assign('copyright', $this->copyright); //版权是否显示
        $this->display($this->tpl['tplcontentname']);
    }
    public function flash() {
        $where['token'] = $this->_get('token', 'trim');
        $flash          = M('Flash')->where($where)->select();
        $count          = count($flash);
        $this->assign('flash', $flash);
        $this->assign('info', $this->info);
        $this->assign('num', $count);
        $this->display('ty_index');
    }
    /**
     * 获取链接
     *
     * @param unknown_type $url
     *
     * @return unknown
     */
    public function getLink($url) {
        $urlArr       = explode(' ', $url);
        $urlInfoCount = count($urlArr);
        if($urlInfoCount > 1) {
            $itemid = intval($urlArr[1]);
        }
        //会员卡 刮刮卡 团购 商城 大转盘 优惠券 订餐 商家订单 表单
        if(strExists($url, '刮刮卡')) {
            $link = '/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif(strExists($url, '大转盘')) {
            $link = '/index.php?g=Wap&m=Lottery&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif(strExists($url, '砸金蛋')) {
            $link = '/index.php?g=Wap&m=Zadan&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif(strExists($url, '优惠券')) {
            $link = '/index.php?g=Wap&m=Coupon&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif(strExists($url, '刮刮卡')) {
            $link = '/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif(strExists($url, '商家订单')) {
            if($itemid) {
                $link = $link = '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&hid=' . $itemid;
            } else {
                $link = '/index.php?g=Wap&m=Host&a=Detail&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            }
        } elseif(strExists($url, '万能表单')) {
            if($itemid) {
                $link = $link = '/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '相册')) {
            $link = '/index.php?g=Wap&m=Photo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Photo&a=plist&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '全景')) {
            $link = '/index.php?g=Wap&m=Panorama&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Panorama&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '会员卡')) {
            $link = '/index.php?g=Wap&m=Card&a=vip&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '商城')) {
            $link = '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '订餐')) {
            $link = '/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '团购')) {
            $link = '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '团购')) {
            $link = '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '留言')) {
            $link = '/index.php?g=Wap&m=Liuyan&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '贺卡')) {
            $link = '/index.php?g=Wap&m=Heka&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Heka&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '房产')) {
            $link = '/index.php?g=Wap&m=Fang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif(strExists($url, '调研')) {
            $link = '/index.php?g=Wap&m=Diaoyan&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Diaoyan&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '医疗')) {
            $link = '/index.php?g=Wap&m=Yiliao&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Yiliao&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '酒店')) {
            $link = '/index.php?g=Wap&m=Jiudian&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Jiudian&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '网站分类')) {
            $link = '/index.php?g=Wap&m=Index&a=lists&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Index&a=lists&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&classid=' . $itemid;
            }
        } elseif(strExists($url, '图文回复')) {
            if($itemid) {
                $link = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, 'LBS信息')) {
            $link = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if($itemid) {
                $link = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&companyid=' . $itemid;
            }
        } elseif(strExists($url, 'DIY宣传页')) {
            $link = '/index.php/show/' . $this->token;
        } elseif(strExists($url, '婚庆喜帖')) {
            if($itemid) {
                $link = '/index.php?g=Wap&m=Wedding&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '投票')) {
            if($itemid) {
                $link = '/index.php?g=Wap&m=Vote&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
            }
        } elseif(strExists($url, '首页')) {
            $link = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } else {
            //if (strpos($url,'?')){
            $link = str_replace('{wechat_id}', $this->wecha_id, $url);
            /* 			}else {
            
                            $link=str_replace('{wechat_id}',$this->wecha_id,$url).'?wecha_id='.$this->wecha_id;
            
                        } */
        }
        return $link;
    }
    public function convertLinks($arr) {
        $i = 0;
        foreach($arr as $a) {
            if($a['url']) {
                $arr[$i]['url'] = $this->getLink($a['url']);
            }
            $i++;
        }
        return $arr;
    }
    public function _getPlugMenu() {
        $company_db    = M('company');
        $this->company = $company_db->where(array('token' => $this->token, 'isbranch' => 0))->find();
        $plugmenu_db   = M('site_plugmenu');
        $plugmenus     = $plugmenu_db->where(array(
            'token' => $this->token, 'display' => 1
        ))->order('taxis ASC')->limit('0,4')->select();
        if($plugmenus) {
            $i = 0;
            foreach($plugmenus as $pm) {
                switch($pm['name']) {
                    case 'tel':
                        if(!$pm['url']) {
                            $pm['url'] = 'tel:' . $this->company['tel'];
                        } else {
                            $pm['url'] = 'tel:' . $pm['url'];
                        }
                        break;
                    case 'memberinfo':
                        if(!$pm['url']) {
                            $pm['url'] = '/index.php?g=Wap&m=Userinfo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                        }
                        break;
                    case 'nav':
                        if(!$pm['url']) {
                            $pm['url'] = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                        }
                        break;
                    case 'message':
                        break;
                    case 'share':
                        break;
                    case 'home':
                        if(!$pm['url']) {
                            $pm['url'] = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                        }
                        break;
                    case 'album':
                        if(!$pm['url']) {
                            $pm['url'] = '/index.php?g=Wap&m=Photo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                        }
                        break;
                    case 'email':
                        $pm['url'] = 'email:' . $pm['url'];
                        break;
                    case 'shopping':
                        if(!$pm['url']) {
                            $pm['url'] = '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                        }
                        break;
                    case 'membercard':
                        $card = M('member_card_create')->where(array(
                            'token' => $this->token, 'wecha_id' => $this->wecha_id
                        ))->find();
                        if(!$pm['url']) {
                            if($card == false) {
                                $pm['url'] = rtrim(C('site_url'), '/') . U('Wap/Card/get_card', array(
                                        'token' => $this->token, 'wecha_id' => $this->wecha_id
                                    ));
                            } else {
                                $pm['url'] = rtrim(C('site_url'), '/') . U('Wap/Card/vip', array(
                                        'token' => $this->token, 'wecha_id' => $this->wecha_id
                                    ));
                            }
                        }
                        break;
                    case 'activity':
                        $pm['url'] = $this->getLink($pm['url']);
                        break;
                    case 'weibo':
                        break;
                    case 'tencentweibo':
                        break;
                    case 'qqzone':
                        break;
                    case 'wechat':
                        $pm['url'] = 'weixin://addfriend/' . $this->weixinUser['wxid'];
                        break;
                    case 'music':
                        break;
                    case 'video':
                        break;
                    case 'recommend':
                        $pm['url'] = $this->getLink($pm['url']);
                        break;
                    case 'other':
                        $pm['url'] = $this->getLink($pm['url']);
                        break;
                }
                $plugmenus[$i] = $pm;
                $i++;
            }
        } else { //默认的
            $plugmenus = array();
            /*
            $plugmenus=array(
            array('name'=>'home','url'=>'/index.php?g=Wap&m=Index&a=index&token='.$this->token.'&wecha_id='.$this->wecha_id),
            array('name'=>'nav','url'=>'/index.php?g=Wap&m=Company&a=map&token='.$this->token.'&wecha_id='.$this->wecha_id),
            array('name'=>'tel','url'=>'tel:'.$this->company['tel']),
            array('name'=>'share','url'=>''),
            );
            */
        }
        return $plugmenus;
    }
}