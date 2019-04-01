<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"template/default_pc/html/vod/show.html";i:1544102066;s:87:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/include.html";i:1544361892;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/head.html";i:1545643728;s:86:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/paging.html";i:1522628860;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/foot.html";i:1526363152;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>最新<?php echo $obj['type_name']; ?>-推荐<?php echo $obj['type_name']; ?>-第<?php echo $param['page']; ?>页筛选 - <?php echo $maccms['site_name']; ?></title>
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
            <?php $_5c9e3d4a8b5f6=explode(',',$maccms['search_hot']); if(is_array($_5c9e3d4a8b5f6) || $_5c9e3d4a8b5f6 instanceof \think\Collection || $_5c9e3d4a8b5f6 instanceof \think\Paginator): if( count($_5c9e3d4a8b5f6)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b5f6 as $key2=>$vo2): ?>
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
<!-- 搜索条件 -->
<div class="ui-box filter-focus">
    <div class="ui-title"><h3><?php echo $obj['type_name']; ?> - 高级搜索</h3></div>
    <div class="ui-cnt">
        <div class="filter-list fn-clear">
            <h5>类型：</h5>
            <ul>
                <li><a <?php if($param['class'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5c9e3d4a8b43a=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_5c9e3d4a8b43a) || $_5c9e3d4a8b43a instanceof \think\Collection || $_5c9e3d4a8b43a instanceof \think\Paginator): if( count($_5c9e3d4a8b43a)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b43a as $key2=>$vo2): ?>
                <li><a <?php if($param['class'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e3d4a8b3cd=explode(',',$obj['type_extend']['class']); if(is_array($_5c9e3d4a8b3cd) || $_5c9e3d4a8b3cd instanceof \think\Collection || $_5c9e3d4a8b3cd instanceof \think\Paginator): if( count($_5c9e3d4a8b3cd)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b3cd as $key2=>$vo2): ?>
                <li><a <?php if($param['class'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
        <div class="filter-list fn-clear">
            <h5>地区：</h5>
            <ul>
                <li><a <?php if($param['area'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5c9e3d4a8b349=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5c9e3d4a8b349) || $_5c9e3d4a8b349 instanceof \think\Collection || $_5c9e3d4a8b349 instanceof \think\Paginator): if( count($_5c9e3d4a8b349)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b349 as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e3d4a8b2fd=explode(',',$obj['type_extend']['area']); if(is_array($_5c9e3d4a8b2fd) || $_5c9e3d4a8b2fd instanceof \think\Collection || $_5c9e3d4a8b2fd instanceof \think\Paginator): if( count($_5c9e3d4a8b2fd)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b2fd as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
        <div class="filter-list fn-clear">
            <h5>语言：</h5>
            <ul>
                <li><a <?php if($param['lang'] == ''): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>'','year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['lang']) || (($obj['type_extend']['lang'] instanceof \think\Collection || $obj['type_extend']['lang'] instanceof \think\Paginator ) && $obj['type_extend']['lang']->isEmpty())): $_5c9e3d4a8b275=explode(',',$obj['parent']['type_extend']['lang']); if(is_array($_5c9e3d4a8b275) || $_5c9e3d4a8b275 instanceof \think\Collection || $_5c9e3d4a8b275 instanceof \think\Paginator): if( count($_5c9e3d4a8b275)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b275 as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e3d4a8b226=explode(',',$obj['type_extend']['lang']); if(is_array($_5c9e3d4a8b226) || $_5c9e3d4a8b226 instanceof \think\Collection || $_5c9e3d4a8b226 instanceof \think\Paginator): if( count($_5c9e3d4a8b226)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b226 as $key2=>$vo2): ?>
                    <li><a <?php if($param['lang'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
        <div class="filter-list fn-clear">
            <h5>年代：</h5>
            <ul>
                <li><a <?php if($param['year'] == ''): ?> class="current"<?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5c9e3d4a8b192=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5c9e3d4a8b192) || $_5c9e3d4a8b192 instanceof \think\Collection || $_5c9e3d4a8b192 instanceof \think\Paginator): if( count($_5c9e3d4a8b192)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b192 as $key2=>$vo2): ?>
                    <li><a <?php if($param['area'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; else: $_5c9e3d4a8b138=explode(',',$obj['type_extend']['year']); if(is_array($_5c9e3d4a8b138) || $_5c9e3d4a8b138 instanceof \think\Collection || $_5c9e3d4a8b138 instanceof \think\Paginator): if( count($_5c9e3d4a8b138)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b138 as $key2=>$vo2): ?>
                    <li><a <?php if($param['year'] == $vo2): ?> class="current" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </ul>
        </div>
        <div class="filter-list filter-list-letter fn-clear">
            <h5>字母：</h5>
            <ul>
                <li><a  <?php if($param['letter'] == ''): ?> class="current"<?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>'','state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                <?php $_5c9e3d4a8b059=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0~9'); if(is_array($_5c9e3d4a8b059) || $_5c9e3d4a8b059 instanceof \think\Collection || $_5c9e3d4a8b059 instanceof \think\Paginator): if( count($_5c9e3d4a8b059)==0 ) : echo "" ;else: foreach($_5c9e3d4a8b059 as $key2=>$vo2): ?>
                <li><a <?php if($param['letter'] == $vo2): ?> class="current"<?php endif; ?> {/if} href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$vo2,'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a><li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- 排序方式 -->
<div class="ui-bar fn-clear">
    <div class="view-filter">
        <a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>" class="order <?php if($param['by'] == '' || $param['by'] == 'time'): ?>current<?php endif; ?>">按时间</a>
        <a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>" class="order <?php if($param['by'] == 'hits'): ?>current<?php endif; ?>">按人气</a>
        <a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>" class="order <?php if($param['by'] == 'score'): ?>current<?php endif; ?>">按评分</a>
    </div>
</div>
<!-- 影片部分 -->
<div class="box">
    <div class="box_con">
        <ul class="img-list">
            <?php $__TAG__ = '{"num":"20","paging":"yes","pageurl":"vod\/show","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_remarks']; ?></i><em></em></a></li>
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