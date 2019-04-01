<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"template/default_pc/html/vod/type.html";i:1532911808;s:87:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/include.html";i:1544361892;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/head.html";i:1545643728;s:86:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/paging.html";i:1522628860;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/foot.html";i:1526363152;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>最新<?php echo $obj['type_title']; ?>-推荐<?php echo $obj['type_title']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
    <meta name="description" content="<?php echo $obj['type_des']; ?>" />
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
            <?php $_5c9e413fee8f4=explode(',',$maccms['search_hot']); if(is_array($_5c9e413fee8f4) || $_5c9e413fee8f4 instanceof \think\Collection || $_5c9e413fee8f4 instanceof \think\Paginator): if( count($_5c9e413fee8f4)==0 ) : echo "" ;else: foreach($_5c9e413fee8f4 as $key2=>$vo2): ?>
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
<!--频道banner-->
<div class="channel-focus">
    <div class="channel-silder layout">
        <ul class="channel-silder-cnt">
            <?php $__TAG__ = '{"num":"9","type":"current","level":"1,2,3,4,5,6,7,8,9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li class="channel-silder-panel fn-clear"><a class="channel-silder-img" href="<?php echo mac_url_vod_detail($vo); ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" title="<?php echo $vo['vod_name']; ?>" /></a>
                <div class="channel-silder-intro">
                    <div class="channel-silder-title">
                        <h2><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h2><?php echo $vo['vod_version']; ?><span><i><?php echo $vo['vod_score']; ?></i> 分</span></div>
                    <ul class="channel-silder-info fn-clear">
                        <li class="long">主演：<span><?php echo $vo['vod_actor']; ?></span></li>
                        <li>类型：<span><?php echo $vo['type']['type_name']; ?></span></li>
                        <li>导演：<span><?php echo $vo['vod_director']; ?></span></li>
                        <li>地区：<span><?php echo $vo['vod_area']; ?></span></li>
                        <li>年份：<span><?php echo mac_default($vo['vod_year']); ?></span></li>
                    </ul>
                    <p class="channel-silder-desc">剧情：<span><?php echo $vo['vod_blurb']; ?>...</span></p><a class="channel-silder-play" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>">立即观看</a></div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="channel-silder-nav fn-clear">
            <?php $__TAG__ = '{"num":"9","type":"current","level":"1,2,3,4,5,6,7,8,9","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" ><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".channel-silder").slide({
        titCell:".channel-silder-nav li",
        mainCell:".channel-silder-cnt",
        delayTime:800,
        triggerTime:0,
        interTime:5000,
        pnLoop:false,
        autoPage:false,
        autoPlay:true
    });
</script>
<!-- 条件搜索 -->
<div class="directory-item" id="tv-directory">
    <ul class="directory-list">
        <li>
            <dl class="leixing">
                <dt>按类型<i class="iconfont"></i></dt>
                <?php if(empty($obj['type_extend']['class']) || (($obj['type_extend']['class'] instanceof \think\Collection || $obj['type_extend']['class'] instanceof \think\Paginator ) && $obj['type_extend']['class']->isEmpty())): $_5c9e413fee811=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_5c9e413fee811) || $_5c9e413fee811 instanceof \think\Collection || $_5c9e413fee811 instanceof \think\Paginator): if( count($_5c9e413fee811)==0 ) : echo "" ;else: foreach($_5c9e413fee811 as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e413fee7e7=explode(',',$obj['type_extend']['class']); if(is_array($_5c9e413fee7e7) || $_5c9e413fee7e7 instanceof \think\Collection || $_5c9e413fee7e7 instanceof \think\Paginator): if( count($_5c9e413fee7e7)==0 ) : echo "" ;else: foreach($_5c9e413fee7e7 as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </dl>
        </li>
        <li>
            <dl class="area">
                <dt>按地区<i class="iconfont"></i></dt>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5c9e413fee78c=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5c9e413fee78c) || $_5c9e413fee78c instanceof \think\Collection || $_5c9e413fee78c instanceof \think\Paginator): if( count($_5c9e413fee78c)==0 ) : echo "" ;else: foreach($_5c9e413fee78c as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e413fee741=explode(',',$obj['type_extend']['area']); if(is_array($_5c9e413fee741) || $_5c9e413fee741 instanceof \think\Collection || $_5c9e413fee741 instanceof \think\Paginator): if( count($_5c9e413fee741)==0 ) : echo "" ;else: foreach($_5c9e413fee741 as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </dl>
        </li>
        <li>
            <dl>
                <dt>按年代<i class="iconfont"></i></dt>
                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5c9e413fee6e9=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5c9e413fee6e9) || $_5c9e413fee6e9 instanceof \think\Collection || $_5c9e413fee6e9 instanceof \think\Paginator): if( count($_5c9e413fee6e9)==0 ) : echo "" ;else: foreach($_5c9e413fee6e9 as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e413fee6a5=explode(',',$obj['type_extend']['year']); if(is_array($_5c9e413fee6a5) || $_5c9e413fee6a5 instanceof \think\Collection || $_5c9e413fee6a5 instanceof \think\Paginator): if( count($_5c9e413fee6a5)==0 ) : echo "" ;else: foreach($_5c9e413fee6a5 as $key=>$vo): ?>
                    <dd><a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </dl>
        </li>
    </ul>
</div>
<!--频道循环分类影视-->
<div class="fn-clear" id="channel-box">
    <!-- 左侧影视 -->
    <div class="qire-box">
        <?php $__TAG__ = '{"parent":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <div class="channel-item">
            <div class="ui-title fn-clear"><span><a href="<?php echo mac_url_type($vo); ?>">查看更多></a></span><h2><?php echo $vo['type_name']; ?></h2></div>
            <div class="box_con">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"8","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if($obj['childids'] == ''): ?>
        <div class="channel-item">
            <div class="ui-title fn-clear"><span><a href="<?php echo mac_url_type($obj); ?>">查看更多></a></span><h2><?php echo $obj['type_name']; ?></h2></div>
            <div class="box_con">
                <ul class="img-list">
                    <?php $__TAG__ = '{"num":"24","paging":"yes","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!-- 分页 -->
        <div class="ui-bar list-page fn-clear">
            <?php if($__PAGING__['record_total'] > 0): ?>
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a>

        <input class="page_input" type="text" placeholder="页码"  id="page" autocomplete="off" style="width:40px">
        <button class="page_btn mac_page_go" type="button" data-url="<?php echo $__PAGING__['page_url']; ?>" data-total="<?php echo $__PAGING__['page_total']; ?>" data-sp="<?php echo $__PAGING__['page_sp']; ?>" >GO</button>
    </div>
</div>
<?php else: ?>
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>
        </div>
        <?php endif; ?>

    </div>
    <!-- 右侧排行 -->
    <div class="qire-l">
        <div class="ui-ranking">
            <h3>热播排行榜</h3>
            <ul class="ranking-list">
                <?php $__TAG__ = '{"num":"15","type":"current","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo $vo['vod_hits_month']; ?></span><i <?php if($key < 4): ?> class="stress" <?php endif; ?>><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="ui-ranking">
            <h3>好评排行榜</h3>
            <ul class="ranking-list">
                <?php $__TAG__ = '{"num":"15","type":"current","order":"desc","by":"score","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo $vo['vod_score']; ?></span><i <?php if($key < 4): ?>class="stress" <?php endif; ?>><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="ui-ranking">
            <h3>最新上映排行</h3>
            <ul class="ranking-list">
                <?php $__TAG__ = '{"num":"15","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li><span><?php echo $vo['vod_hits']; ?></span><i <?php if($key < 4): ?>class="stress" <?php endif; ?>><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
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