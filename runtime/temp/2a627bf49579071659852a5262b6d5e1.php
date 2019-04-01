<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"template/default_pc/html/vod/detail.html";i:1545652048;s:87:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/include.html";i:1544361892;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/head.html";i:1545643728;s:85:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/star2.html";i:1519605800;s:84:"/Users/matthewxu/Documents/GitHub/maccms10/template/default_pc/html/public/foot.html";i:1526363152;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
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
            <?php $_5ca15ee0cccb1=explode(',',$maccms['search_hot']); if(is_array($_5ca15ee0cccb1) || $_5ca15ee0cccb1 instanceof \think\Collection || $_5ca15ee0cccb1 instanceof \think\Paginator): if( count($_5ca15ee0cccb1)==0 ) : echo "" ;else: foreach($_5ca15ee0cccb1 as $key2=>$vo2): ?>
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
<!--当前位置-->
<div class="bread-crumb-nav fn-clear">
    <ul class="bread-crumbs">
        <li class="home"><a href="<?php echo $maccms['path']; ?>">首页</a></li><li><a href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a></li>
        <li><a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a></li>
        <li><?php echo $obj['vod_name']; ?>在线点播<?php echo $obj['vod_nmae']; ?>迅雷下载</li>
        <li class="back"><a href="javascript:MAC.GoBack()">返回上一页</a></li>
    </ul>
</div>
<!--影片详细介绍-->
<div class="ui-box" id="detail-box">
    <!-- 评分分数 -->
    <div class="rating-box" id="rating-main" style="display: block;">
        <div class="rating-total fn-clear">
            <label class="rating-total-item" id="total">&nbsp;</label>
            <div class="pingfen-total"><strong id="pingfen"><?php echo $obj['vod_score']; ?></strong></div>
        </div>
        <div class="rating-panle">
            <div class="rating-bar"><div class="rating-bar-item" id="fenshu" style="width: <?php echo ceil($obj['vod_score']*10); ?>%;">&nbsp;</div></div>
            <ul class="rating-show" style="display: none;">
                <li><span title="力荐" class="starstop star5">力荐</span><div class="power"><div class="power-item" id="pam"></div></div><em id="pa">人</em></li>
                <li><span title="推荐" class="starstop star4">推荐</span><div class="power"><div class="power-item" id="pbm"></div></div><em id="pb">人</em></li>
                <li><span title="还行" class="starstop star3">还行</span><div class="power"><div class="power-item" id="pcm"></div></div><em id="pc">人</em></li>
                <li><span title="较差" class="starstop star2">较差</span><div class="power"><div class="power-item" id="pdm"></div></div><em id="pd">人</em></li>
                <li><span title="很差" class="starstop star1">很差</span><div class="power"><div class="power-item" id="pem"></div></div><em id="pe">人</em></li>
            </ul>
        </div>
    </div>
    <div class="rating-box" id="rating-kong" style="display: none;"><div class="rating-kong-item"><span class="loading">评分加载中...</span></div></div>

    <!-- 图文介绍 -->
    <div class="detail-cols fn-clear">
        <div class="detail-pic fn-left"><img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>" /></div>
        <div class="detail-info fn-left">
            <!--星级-->
            <div class="detail-title fn-clear"><h1><?php echo $obj['vod_name']; ?></h1> </div>
            <div id="detail-rating" class="fn-clear">
                

<div id="rating" class="fn-left" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-score="<?php echo ceil($obj['vod_score']/2); ?>">
    <span class="label">我也要给这影片打分：</span>
    <ul class="rating" id="fenshu">
        <li class="one  <?php if($obj['vod_score'] > 0): ?>current active<?php endif; ?>" title="很差" val="1">很差</li>
        <li class="two  <?php if($obj['vod_score'] > 2): ?>current active<?php endif; ?>" title="较差" val="2">较差</li>
        <li class="three <?php if($obj['vod_score'] > 4): ?> current active<?php endif; ?>" title="还行" val="3">还行</li>
        <li class="four <?php if($obj['vod_score'] > 6): ?>active<?php endif; ?>" title="推荐" val="4">推荐</li>
        <li class="five <?php if($obj['vod_score'] > 8): ?>active<?php endif; ?>" title="力荐" val="5">力荐</li>
    </ul>
    <span id="ratewords"><?php if($obj['vod_score'] > 8): ?>力荐
<?php elseif($obj['vod_score'] > 6): ?>推荐
<?php elseif($obj['vod_score'] > 4): ?>还行
<?php elseif($obj['vod_score'] > 2): ?>较差
<?php else: ?>很差
<?php endif; ?></span>
</div>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/qireobj.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/gold.js"></script>
            </div>
            <div class="info fn-clear">
                <dl class="nyzhuy"><dt>主演：</dt><dd><?php echo mac_url_create($obj['vod_actor'],'actor'); ?></dd></dl>
                <dl class="fn-left"><dt>状态：</dt><dd><span class="color"><?php echo mac_default($obj['vod_version'],'未知'); ?></span>访问量：<span class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span></dd></dl>
                <dl class="fn-right"><dt>导演：</dt><dd><?php echo mac_url_create($obj['vod_director'],'director'); ?></dd></dl>
                <dl class="fn-left"><dt>语言：</dt><dd><span><?php echo mac_url_create($obj['vod_lang'],'lang'); ?></span></dd></dl>
                <dl class="fn-right"><dt>地区：</dt><dd><span><?php echo mac_url_create($obj['vod_area'],'area'); ?></span></dd></dl>
                <dl class="fn-left"><dt>时间：</dt><dd><span id="addtime"><?php echo date('Y-m-d',$obj['vod_time']); ?></span></dd></dl>
                <dl class="fn-right"><dt>年份：</dt><dd><span><?php echo mac_url_create($obj['vod_year'],'year'); ?></span></dd></dl>
                <dl class="fn-left"><dt>类型：</dt><dd><?php echo mac_url_create($obj['vod_class'],'class'); ?></dd></dl>
                <dl class="fn-right"><dt>收藏：</dt><dd class="link2"><a href="javascript:;" onclick="MAC.Desktop('<?php echo $obj['vod_name']; ?>')">保存网址到桌面</a>&nbsp;&nbsp;<a href="javascript:void(0);" style="cursor:hand" onclick="MAC.Fav(location.href,document.name);">保存网址到浏览器</a>&nbsp;&nbsp;<a href="javascript:void(0);" style="cursor:hand" class="mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>">我要收藏</a></dd>
                </dl>
                <dl class="juqing"><dt>剧情：</dt><dd><?php echo $obj['vod_blurb']; ?>… <a class="link detail-desc" href="#juqing">详细剧情</a></dd></dl>
                <dl class="fenx"><dt>分享：</dt><dd><div class="bdsharebuttonbox"><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_kaixin001" data-cmd="kaixin001" title="分享到开心网"></a><a href="#" class="bds_mogujie" data-cmd="mogujie" title="分享到蘑菇街"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
                    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></dd></dl>

            </div>
        </div>
    </div>
</div>

<?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
<div class="ui-box marg" id="playlist_0">
    <div class="down-title">
        <?php echo $GLOBALS['config']['app']['copyright_notice']; ?>
    </div>
</div>
<?php else: ?>
<!--在线播放地址-->
<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
<div class="ui-box marg" id="playlist_<?php echo $key; ?>">
    <div class="down-title">
        <h2><?php echo $vo['player_info']['show']; ?>-在线播放</h2><span>[<?php echo $vo['player_info']['tip']; ?>]</span>
    </div>
    <div class="video_list fn-clear">
        <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
        <a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>" ><?php echo $vo2['name']; ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>

<!--迅雷下载地址-->
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/down.js"></script>
<?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): ?>
<div class="ui-box marg" id="downlist_<?php echo $key; ?>">
    <div class="down-title">
        <h2><?php echo $vo['player_info']['show']; ?>下载地址</h2><span>资源版本：[BD：超清无水印]&nbsp;&nbsp;[HD：高清版]&nbsp;&nbsp;[DVD：普通清晰版]&nbsp;&nbsp;[TS：抢先非清晰版] - <i>手机观看需安装迅雷手机版即可在线播放！</i></span>
    </div>
    <div class="down_list">
        <ul id="downul">
            <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
            <li><input type="checkbox" name="down_url_list_<?php echo $key; ?>" class="down_url" value="<?php echo $vo2['url']; ?>" file_name="<?php echo $vo2['name']; ?>" />
                <p><strong class="down_part_name"><span class="filename"><?php echo $vo2['name']; ?></span><span class="filesize"></span></strong><input type="text" class="thunder_url" value="<?php echo $vo2['url']; ?>" title="鼠标左键单击可全选后手动复制该条迅雷地址进行分享或其它操作" onclick="this.select()" /></p><span><label class="thunder_down">迅雷下载</label><label class="qqdl">旋风下载</label><label class="kk">看看播放</label></span></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="downtools"><input id="allcheck<?php echo $key; ?>" type="checkbox" name="checkall"><em>全选</em><a href="javascript:void(0);" target="_self" class="thunder_down_all">迅雷批量下载</a><a href="javascript:void(0);" target="_self" class="xf_down_all">旋风批量下载</a><span class="xuanfu">※ 若点击迅雷下载无反应，请手动复制框内下载地址到迅雷软件即可边下边播 ※</span>
        </div>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<!--猜你喜欢-->
<div class="ui-box marg">
    <div class="ui-title">
        <h2>喜欢看<strong>“<?php echo $obj['vod_name']; ?>”</strong>的人也喜欢</h2>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"6","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<div class="ui-box marg">
    <div class="ui-title">
        <h2>与<strong>“<?php echo $obj['vod_name']; ?>”</strong>关联的视频</h2>
    </div>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"6","ids":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/><h2><?php echo $vo['vod_name']; ?></h2><p></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<!-- 剧情介绍 -->
<div class="ui-box marg" id="juqing" >
    <div class="ui-title">
        <h3>剧情介绍</h3>
    </div>
    <div class="tjuqing">
        <?php echo mac_url_content_img($obj['vod_content']); ?>
    </div>
</div>

<div class="ui-box marg" id="pinglun" >
    <div class="ui-title">
        <h3>评论</h3>
    </div>
    <div class="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
</div>

<span style="display:none" class="mac_ulog_set" alt="设置内容页浏览记录" data-type="1" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>

<span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>"></span>

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