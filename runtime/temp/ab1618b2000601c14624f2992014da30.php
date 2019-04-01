<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/collect/vod.html";i:1548636042;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="mb10">
            <div class="layui-input-inline w150 m5"><a href="javascript:;" data-id="" class="select_type red">查看全部资源</a></div>
            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="layui-input-inline w150 m5">
                <a href="javascript:;" data-id="<?php echo $vo['type_id']; ?>" class="select_type"><?php echo $vo['type_name']; ?></a>
                <a id="<?php echo $param['cjflag']; ?>_<?php echo $vo['type_id']; ?>" data-href="<?php echo url('index/select'); ?>?tab=vod&col=<?php echo $param['cjflag']; ?>_<?php echo $vo['type_id']; ?>&ids=1&tpl=select_type&refresh=no&url=collect/bind" data-width="270" data-height="100" class="j-select" >
                    <?php if($vo['isbind'] == 1): ?>
                    <span class="red">[<?php echo $vo['local_type_name']; ?>]</span>
                    <?php else: ?>
                    [绑定]
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

        <div class="center mb10">
            <form class="layui-form " method="">
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="请输入搜索条件" class="layui-input" id="wd" name="wd" value="<?php echo $param['wd']; ?>">
                </div>
                <button type="button" class="layui-btn mgl-20 j-btn" >查询</button>
            </form>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th >名称</th>
                <th width="60">分类</th>
                <th width="60">来源</th>
                <th width="140">时间</th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['vod_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['vod_name']; ?></td>
                <td><?php echo $vo['type_name']; ?></td>
                <td><?php echo $vo['vod_play_from']; ?></td>
                <td><?php echo mac_day($vo['vod_time'],color); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="layui-btn-group">
            <?php 
                $p1 = $param;
                unset($p1['ac']);
                $p1_str = http_build_query($p1);
             ?>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&ac=cjsel" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采选中</a>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&h=24&ac=cjday" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采当天</a>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&ac=cjall" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i>采全部</a>
        </div>

        <div id="pages" class="center"></div>
    </form>

</div>


<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('api'); ?>?<?php echo $param_str; ?>";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });

        $('#wd').on('keydown', function (event) {
            if (event.keyCode == 13) {
                $('.j-btn').click();
                return false;
            }
        });

        $('.j-btn').click(function(){
           var wd = $('input[name="wd"]').val();
            var url = changeParam(curUrl,'wd',wd);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

        $('.select_type').click(function(){
            var t = $(this).attr('data-id');
            var url = changeParam(curUrl,'t',t);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

    });
    function onSubmitResult(res)
    {
        if(res.data.st==1){
            $('#'+res.data.id).html('<span class="red">['+ res.data.local_type_name +']</span>');
        }
        else{
            $('#'+res.data.id).html('[绑定]');
        }
    }
</script>
</body>
</html>