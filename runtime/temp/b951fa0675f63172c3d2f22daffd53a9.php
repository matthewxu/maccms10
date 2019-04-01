<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:41:"template/default_pc/html/index/index.html";i:1547887592;s:87:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/include.html";i:1544361892;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/head.html";i:1545643728;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/foot.html";i:1526363152;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
    <link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.superslide.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.base.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script></script>

</head>
<body>
<!-- 页头 -->
<div class="header">
    <div id="logo"><a href="<?php echo $maccms['path']; ?>" title="<?php echo $maccms['site_name']; ?>"><img src="<?php echo mac_url_img($maccms['site_logo']); ?>" alt="<?php echo $maccms['site_name']; ?>" /></a></div>
    <div id="searchbar">
        <div class="ui-search">
            <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
                <input type="text" name="wd" class="search-input mac_wd" value="<?php echo $param['wd']; ?>" placeholder="请在此处输入影片名或演员名称" />
                <input type="submit" id="searchbutton"  class="search-button mac_search" value="搜索影片" />
            </form>
        </div>
        <div class="hotkeys">热搜：
            <?php $_5c9e3a34f1786=explode(',',$maccms['search_hot']); if(is_array($_5c9e3a34f1786) || $_5c9e3a34f1786 instanceof \think\Collection || $_5c9e3a34f1786 instanceof \think\Paginator): if( count($_5c9e3a34f1786)==0 ) : echo "" ;else: foreach($_5c9e3a34f1786 as $key2=>$vo2): ?>
            <a href="<?php echo mac_url('vod/search',['wd'=>$vo2]); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <ul id="qire-plus">
        <li><a href="<?php echo mac_url('label/rank'); ?>" class=""><i class="ui-icon top-icon"></i>排行</a></li>
        <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="ui-icon gb-icon"></i>留言</a></li>
        <li><a href="javascript:void(0);" style="cursor:hand; background:none;" onclick="MAC.Fav(location.href,document.title);"><i class="ui-icon fav-icon"></i>收藏</a></li>
    </ul>
</div>
<!-- 导航菜单 -->
<div id="navbar">
    <div class="layout fn-clear">
        <ul id="nav" class="ui-nav">
            <li class="nav-item <?php if($maccms['aid'] == 1): ?> current<?php endif; ?>"><a class="nav-link" href="<?php echo $maccms['path']; ?>">网站首页</a></li>
            <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="nav-item <?php echo $vo['type_id']; ?>=<?php echo $vo['type_pid']; if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?> current<?php endif; ?>"><a class="nav-link" href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li class="nav-item <?php if($maccms['aid'] == 30): ?> current<?php endif; ?>"><a class="nav-link" href="<?php echo mac_url_topic_index(); ?>">专题</a></li>
            <li class="nav-item mac_user"><a class="nav-link" href="javascript:;">会员</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo mac_url('map/index'); ?>" style=" margin-left:102px; padding:0 0 0 30px; background:url(<?php echo $maccms['path_tpl']; ?>images/ico.png) no-repeat left center;">最近更新</a></li>
        </ul>
    </div>
</div>
<!-- banner 开始 -->
<div class="banner">
    <div id="lbsub">
        <div class="deansubdiv"><dl>
            <?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
            <dd class="deanddt<?php echo $key; ?>">
                <h3><a href="<?php echo mac_url_type($vo1); ?>"><?php echo $vo1['type_name']; ?> </a><span></span></h3>
                <div class="deansubpt">
                    <?php if($key1 < 3): ?>
                    <div class="deansubptpp">
                        <h5>类型</h5>
                        <div class="deansubptc">
                            <a href="<?php echo mac_url_type($vo1,[],'show'); ?>">全部</a>
                            <?php $__TAG__ = '{"parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                                <a href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="deansubptpp">
                        <h5>地区</h5>
                        <div class="deansubptc">
                            <a href="<?php echo mac_url_type($vo1,[],'show'); ?>">全部</a>
                            <?php $_5c9e3a34f16c3=explode(',',$vo1['type_extend']['area']); if(is_array($_5c9e3a34f16c3) || $_5c9e3a34f16c3 instanceof \think\Collection || $_5c9e3a34f16c3 instanceof \think\Paginator): if( count($_5c9e3a34f16c3)==0 ) : echo "" ;else: foreach($_5c9e3a34f16c3 as $key2=>$vo2): ?>
                            <a href="<?php echo mac_url_type($vo1,['area'=>$vo2],'show'); ?>"><?php echo $vo2; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="deansubptpp">
                        <h5>年代</h5>
                        <div class="deansubptc">
                            <a href="<?php echo mac_url_type($vo1,[],'show'); ?>">全部</a>
                            <?php $_5c9e3a34f1694=explode(',',$vo1['type_extend']['year']); if(is_array($_5c9e3a34f1694) || $_5c9e3a34f1694 instanceof \think\Collection || $_5c9e3a34f1694 instanceof \think\Paginator): if( count($_5c9e3a34f1694)==0 ) : echo "" ;else: foreach($_5c9e3a34f1694 as $key2=>$vo2): ?>
                            <a href="<?php echo mac_url_type($vo1,['year'=>$vo2],'show'); ?>"><?php echo $vo2; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="deansubptpp">
                        <h5>字母</h5>
                        <div class="deansubptc">
                            <a href="<?php echo mac_url_type($vo1,[],'show'); ?>">全部</a>
                            <?php $_5c9e3a34f1659=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0-9'); if(is_array($_5c9e3a34f1659) || $_5c9e3a34f1659 instanceof \think\Collection || $_5c9e3a34f1659 instanceof \think\Paginator): if( count($_5c9e3a34f1659)==0 ) : echo "" ;else: foreach($_5c9e3a34f1659 as $key2=>$vo2): ?>
                            <a href="<?php echo mac_url_type($vo1,['letter'=>$vo2],'show'); ?>"><?php echo $vo2; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </dd>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <dd class="deanddt5">
                <?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <h3><a href="<?php echo mac_url_type($vo,[],'show'); ?>"><?php echo $vo['type_name']; ?></a><span></span></h3>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dd>
            <dd class="deanddt5">
                <h3><a href="<?php echo mac_url('label/rank'); ?>">影视排行榜</a><span></span></h3>
            </dd>
        </dl></div></div>
    <script type="text/javascript">
        $(".deansubdiv dd").each(function(s){
            $(this).hover(
                    function(){
                        $(".deansubpt").eq(s).show();
                    },
                    function(){
                        $(".deansubpt").eq(s).hide();
                    })
        })
    </script>
    <ul class="51buypic">
        <?php $__TAG__ = '{"num":"5","level":"9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>  <?php echo $vo['vod_remarks']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>" alt="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>" style="background-color: #EEEEEE;"/></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>
    <div class="num"><ul></ul></div>
    <script>
        /*鼠标移过，左右按钮显示*/
        $(".banner").hover(function(){
            $(this).find(".prev,.next").fadeTo("show",0.5);
        },function(){
            $(this).find(".prev,.next").hide();
        })
        /*鼠标移过某个按钮 高亮显示*/
        $(".prev,.next").hover(function(){
            $(this).fadeTo("show",0.8);
        },function(){
            $(this).fadeTo("show",0.5);
        })
        $(".banner").slide({ titCell:".num ul" , mainCell:".51buypic" , effect:"fold", autoPlay:true, delayTime:700 ,interTime:5000 , autoPage:true });
    </script>
</div>
<!-- 热门推荐 -->
<div class="layout fn-clear" id="latest-focus">
    <div class="latest-tab-nav">
        <ul class="fn-clear">
            <li id="latest1" onmouseover="setTab('latest',1,5);" class="current"><span><i class="ui-icon movie"></i>热门电影</span></li>
            <li id="latest2" onmouseover="setTab('latest',2,5);"><span><i class="ui-icon tv"></i>热播电视剧</span></li>
            <li id="latest3" onmouseover="setTab('latest',3,5);"><span><i class="ui-icon dm"></i>热门综艺</span></li>
            <li id="latest4" onmouseover="setTab('latest',4,5);"><span><i class="ui-icon fun"></i>热门动漫</span></li>
            <li id="latest5" onmouseover="setTab('latest',5,5);"><span><i class="ui-icon wei"></i>热门推荐</span></li>
        </ul>
    </div>
    <div class="latest-tab-box">
        <div id="con_latest_1" class="latest-item movie-latest">
            <div class="silder-cnt">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"5","type":"1","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="play-img" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/>
                    <label class="mask"></label>
                    <label class="text"><?php echo $vo['vod_version']; ?></label></a>
                    <h5><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
                    <p class="time">主演：<?php echo $vo['vod_actor']; ?></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <ul class="txt-list">
                <?php $__TAG__ = '{"num":"12","type":"1","start":"6","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo date('m-d',$vo['vod_time']); ?>.</span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>/ <?php echo $vo['vod_version']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div id="con_latest_2" class="latest-item tv-latest fn-hide">
            <div class="silder-cnt">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"5","type":"2","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="play-img" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/>
                        <label class="mask"></label>
                        <label class="text">连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</label></a>
                        <h5><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
                        <p class="time">主演：<?php echo $vo['vod_actor']; ?></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <ul class="txt-list">
                <?php $__TAG__ = '{"num":"12","type":"2","start":"6","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo date('m-d',$vo['vod_time']); ?>.</span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>/ 连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div id="con_latest_3" class="latest-item dm-latest fn-hide">
            <div class="silder-cnt">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"5","type":"3","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="play-img" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/>
                        <label class="mask"></label>
                        <label class="text">连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</label></a>
                        <h5><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
                        <p class="time">主演：<?php echo $vo['vod_actor']; ?></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <ul class="txt-list">
                <?php $__TAG__ = '{"num":"12","type":"3","start":"6","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo date('m-d',$vo['vod_time']); ?>.</span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>/ 连载<?php echo $vo['vod_serial']; ?>集 / 共<?php echo $vo['vod_total']; ?>集</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div id="con_latest_4" class="latest-item fun-latest fn-hide">
            <div class="silder-cnt">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"5","type":"4","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="play-img" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/>
                        <label class="mask"></label>
                        <label class="text">连载<?php echo $vo['vod_serial']; ?>期</label></a>
                        <h5><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
                        <p class="time">主演：<?php echo $vo['vod_actor']; ?></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <ul class="txt-list">
                <?php $__TAG__ = '{"num":"12","type":"4","start":"6","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo date('m-d',$vo['vod_time']); ?>.</span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>/ 连载<?php echo $vo['vod_serial']; ?>期</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div id="con_latest_5" class="latest-item wei-latest fn-hide">
            <div class="silder-cnt">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"5","type":"1","level":"1,2,3,4,5,6,7,8,9","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="play-img" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/>
                        <label class="mask"></label>
                        <label class="text"><?php echo $vo['vod_version']; ?></label></a>
                        <h5><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h5>
                        <p class="time">主演：<?php echo $vo['vod_actor']; ?></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <ul class="txt-list">
                <?php $__TAG__ = '{"num":"12","type":"1","start":"6","level":"1,2,3,4,5,6,7,8,9","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo date('m-d',$vo['vod_time']); ?>.</span><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>/ <?php echo $vo['vod_version']; ?></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- 最新电影资源 -->
<div class="box">
    <div class="title">
        <h2>最新电影</h2>
        <dl>
            <?php $__TAG__ = '{"ids":"6,7,8,9,10,11,12","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <dd><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></dd>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"10","type":"6","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"7","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"8","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"10","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"11","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"12","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新电视剧资源-->
<div class="box">
    <div class="title">
        <h2>最新电视剧</h2>
        <dl>
            <?php $__TAG__ = '{"ids":"13,14,15,16","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <dd><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></dd>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"10","type":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"14","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"15","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="img-list undis">
            <?php $__TAG__ = '{"num":"10","type":"16","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<!--最新综艺节目资源-->
<div class="box">
    <div class="title">
        <h2 class="mar">最新综艺节目</h2>
        <dl>
            <dd class="font">不间断为您呈现最轻松、最搞笑、最火爆的综艺节目-尽在龙资源！</dd>
        </dl>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"10","type":"3","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>期</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新动画片资源-->
<div class="box">
    <div class="title">
        <h2 class="mar">最新动画片</h2>
        <dl>
            <dd class="font">每天为您更新最热门的经典动漫-与你分享！</dd>
        </dl>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"10","type":"4","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i>连载<?php echo $vo['vod_serial']; ?>集/共<?php echo $vo['vod_total']; ?>集</i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!--最新影视资讯-->
<div class="box">
    <div class="title">
        <h2 class="mar">最新影视资讯</h2>
        <dl>
            <dd class="font">这里会发布一些关于电影、电视剧、明星八卦、娱乐圈的相关报道</dd>
        </dl>
    </div>
    <div class="box_news pianyi">
        <ul>
            <?php $__TAG__ = '{"num":"20","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>"><?php echo mac_substring($vo['art_name'],22); ?></a><span><?php echo date('Y-m-d',$vo['art_time']); ?></span></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!-- 友情链接 -->
<div id="link" class="block">
    <div id="title">友情链接 LINK</div>
    <ul>
        <li><a href="//www.maccms.com" target="_blank">苹果CMS-官网</a></li>
        <li><a href="//bbs.maccms.com" target="_blank">苹果CMS-论坛</a></li>
        <?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </ul>
</div>
<script type="text/javascript">
    jQuery(".box").slide({ titCell:".title dd",mainCell:".box_con",delayTime:0 });
</script>
<span style="display: none;" class="mac_timming" data-file="" ></span>
<!-- 页脚 -->
<div class="footer">
    <div class="foot-nav">
        <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="color" href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a>-
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <a href="<?php echo mac_url('map/index'); ?>" title="最近更新">最近更新</a>-
        <a href="<?php echo mac_url('gbook/index'); ?>" title="反馈留言">反馈留言</a>-
        <a href="<?php echo mac_url('rss/index'); ?>" title="rss">RSS</a>-
        <a href="<?php echo mac_url('rss/baidu'); ?>" target="_blank" title="网站地图">Sitemap</a>
    </div>
    <div class="copyright">
        <p>免责声明：若本站收录的资源侵犯了您的权益，请发邮件至：<?php echo $maccms['site_email']; ?>，我们会及时删除侵权内容，谢谢合作！</p>
        <p>Copyright &#169; 2012-2018 <?php echo $maccms['site_url']; ?>. All Rights Reserved. <?php echo $maccms['site_tj']; ?> </p>
    </div>
</div>
</body>
</html>
