<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/group/info.html";i:1524443956;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="group_id" name="group_id" type="hidden" value="<?php echo $info['group_id']; ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">名称：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="<?php echo $info['group_name']; ?>" placeholder="请输入会员组名称" lay-verify="group_name" name="group_name">
            </div>
        </div>

        <?php if($info['group_id'] > 2): ?>
        <div class="layui-form-item">
            <label class="layui-form-label">包天价格：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="<?php echo $info['group_points_day']; ?>" placeholder="包天" lay-verify="group_points_day" name="group_points_day">
            </div>
            <label class="layui-form-label">包周价格：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="<?php echo $info['group_points_week']; ?>" placeholder="包周" lay-verify="group_points_week" name="group_points_week">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">包月价格：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="<?php echo $info['group_points_month']; ?>" placeholder="包月" lay-verify="group_points_month" name="group_points_month">
            </div>
            <label class="layui-form-label">包年价格：</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" value="<?php echo $info['group_points_year']; ?>" placeholder="包年" lay-verify="group_points_year" name="group_points_year">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">状态：</label>
            <div class="layui-input-block">
                    <input name="group_status" type="radio" value="0" title="禁用" <?php if($info['group_status'] != 1): ?>checked <?php endif; ?>>
                    <input name="group_status" type="radio" value="1" title="启用" <?php if($info['group_status'] == 1): ?>checked <?php endif; ?>>
            </div>
        </div>
        <?php endif; ?>

        <div class="layui-form-item ">
            <label class="layui-form-label">相关权限：</label>
            <div class="layui-input-block">
                <blockquote class="layui-elem-quote layui-quote-nm">
                    提示：<br>
                    1.列表页、内容页、播放页、下载页4个权限，控制是否可以进入页面，没权限会直接返回提示信息。<br>
                    2.试看权限：如果没有访问播放页的权限、或者有权限但是需要积分购买的数据，开启了试看权限也是可以进入页面的。
                </blockquote>

                <div class="role-list-form ">
                <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $k1 = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k1 % 2 );++$k1;?>
                    <dl class="role-list-form-top permission-list">
                        <dt>
                            分类：<input type="checkbox" value="<?php echo $vo['type_id']; ?>" name="group_type[]" data-id="<?php echo $k1; ?>" lay-skin="primary" lay-filter="roleAuth1" title="<?php echo $vo['type_name']; ?>" <?php if(strpos(','.$info['group_type'],','.$vo['type_id'].',')>0): ?>checked <?php endif; ?>>
                            权限：<input type="checkbox" name="group_popedom[<?php echo $vo['type_id']; ?>][1]" value="1" lay-skin="primary" title="列表页" <?php if(!empty($info['group_popedom'][$vo['type_id']][1])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $vo['type_id']; ?>][2]" value="2" lay-skin="primary" title="内容页" <?php if(!empty($info['group_popedom'][$vo['type_id']][2])): ?>checked <?php endif; ?>>
                            <?php if($vo['type_mid'] == 1): ?>
                            <input type="checkbox" name="group_popedom[<?php echo $vo['type_id']; ?>][3]" value="3" lay-skin="primary" title="播放页" <?php if(!empty($info['group_popedom'][$vo['type_id']][3])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $vo['type_id']; ?>][4]" value="4" lay-skin="primary" title="下载页" <?php if(!empty($info['group_popedom'][$vo['type_id']][4])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $vo['type_id']; ?>][5]" value="5" lay-skin="primary" title="试看" <?php if(!empty($info['group_popedom'][$vo['type_id']][5])): ?>checked <?php endif; ?>>
                            <?php endif; ?>
                        </dt>
                    </dl>
                    <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($k2 % 2 );++$k2;?>
                    <dl class="role-list-form-top permission-list">
                        <dt>
                            分类：<input type="checkbox" value="<?php echo $sub['type_id']; ?>" name="group_type[]" data-id="<?php echo $k1; ?>" lay-skin="primary" lay-filter="roleAuth1" title="---<?php echo $sub['type_name']; ?>" <?php if(strpos(','.$info['group_type'],','.$sub  ['type_id'].',')>0): ?>checked <?php endif; ?>>
                            权限：<input type="checkbox" name="group_popedom[<?php echo $sub['type_id']; ?>][1]" value="1" lay-skin="primary" title="列表页" <?php if(!empty($info['group_popedom'][$sub['type_id']][1])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $sub['type_id']; ?>][2]" value="2" lay-skin="primary" title="内容页" <?php if(!empty($info['group_popedom'][$sub['type_id']][2])): ?>checked <?php endif; ?>>
                            <?php if($sub['type_mid'] == 1): ?>
                            <input type="checkbox" name="group_popedom[<?php echo $sub['type_id']; ?>][3]" value="3" lay-skin="primary" title="播放页" <?php if(!empty($info['group_popedom'][$sub['type_id']][3])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $sub['type_id']; ?>][4]" value="4" lay-skin="primary" title="下载页" <?php if(!empty($info['group_popedom'][$sub['type_id']][4])): ?>checked <?php endif; ?>>
                            <input type="checkbox" name="group_popedom[<?php echo $sub['type_id']; ?>][5]" value="5" lay-skin="primary" title="试看" <?php if(!empty($info['group_popedom'][$sub['type_id']][5])): ?>checked <?php endif; ?>>
                            <?php endif; ?>
                        </dt>
                    </dl>
                    <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">

                <button type="button" class="layui-btn layui-btn-normal formCheckAll" lay-filter="formCheckAll" >全选</button>
                <button type="button" class="layui-btn layui-btn-normal formCheckOther" lay-filter="formCheckOther">反选</button>

                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            group_name: function (value) {
                if (value == "") {
                    return "请输入会员组名称";
                }
            }
        });

        $('.formCheckAll').click(function(){
            var child = $('.role-list-form').find('input');
            /* 自动选中子节点 */
            child.each(function(index, item) {
                item.checked = true;
            });
            form.render('checkbox');
        });
        $('.formCheckOther').click(function(){
            var child = $('.role-list-form').find('input');
            /* 自动选中子节点 */
            child.each(function(index, item) {
                item.checked = (item.checked  ? false : true);
            });
            form.render('checkbox');
        });
    });

</script>

</body>
</html>