<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/type/info.html";i:1544533768;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
        <input type="hidden" name="type_id" value="<?php echo $info['type_id']; ?>">
        <blockquote class="layui-elem-quote layui-quote-nm">
            提示信息：<br>
            1,新增加分类后，请到用户-会员组分别对每个组设置权限，否则会提示无权限访问
        </blockquote>

        <div class="layui-form-item">
            <label class="layui-form-label">类型：</label>
            <div class="layui-input-inline ">
                    <select id="type_mid" name="type_mid" lay-filter="type_mid">

                        <option value="1" <?php if($info['type_mid'] == '1'): ?>selected <?php endif; ?>>视频</option>
                        <option value="2" <?php if($info['type_mid'] == '2'): ?>selected <?php endif; ?>>文章</option>
                    </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">父级分类：</label>
            <div class="layui-input-inline ">
                    <select name="type_pid">
                        <option value="0">顶级分类</option>
                        <?php if(is_array($parent) || $parent instanceof \think\Collection || $parent instanceof \think\Paginator): $i = 0; $__LIST__ = $parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['type_id']; ?>" <?php if($info['type_pid'] == $vo['type_id'] || $pid == $vo['type_id']): ?>selected <?php endif; ?>><?php echo $vo['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态：</label>
            <div class="layui-input-block">
                <input name="type_status" type="radio" id="rad-1" value="0" title="禁用" <?php if($info['type_status'] != 1): ?>checked <?php endif; ?>>
                <input name="type_status" type="radio" id="rad-2" value="1" title="启用" <?php if($info['type_status'] == 1): ?>checked <?php endif; ?>>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序：</label>
            <div class="layui-input-inline w100">
                <input type="text" class="layui-input" value="<?php echo $info['type_sort']; ?>" placeholder="" id="type_sort" name="type_sort">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">名称：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_name" value="<?php echo $info['type_name']; ?>" placeholder="" id="type_name" name="type_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">别名：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_en']; ?>" placeholder="" id="type_en" name="type_en">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">分类模板：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_tpl" value="<?php echo $info['type_tpl']; ?>" placeholder="" id="type_tpl" name="type_tpl">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">筛选模板：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" lay-verify="type_tpl_list" value="<?php echo $info['type_tpl_list']; ?>" placeholder="" id="type_tpl_list" name="type_tpl_list">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">内容模板：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_detail']; ?>" placeholder="" id="type_tpl_detail" name="type_tpl_detail">
            </div>
        </div>

        <div class="layui-form-item vod-list">
            <label class="layui-form-label">播放模板：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_play']; ?>" placeholder="" id="type_tpl_play" name="type_tpl_play">
            </div>
        </div>
        <div class="layui-form-item vod-list">
            <label class="layui-form-label">下载模板：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_tpl_down']; ?>" placeholder="" id="type_tpl_down" name="type_tpl_down">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">SEO标题：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_title']; ?>" placeholder="" id="type_title" name="type_title">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">SEO关键字：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_key']; ?>" placeholder="" id="type_key" name="type_key">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">SEO描述：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_des']; ?>" placeholder="" id="type_des" name="type_des">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">扩展分类：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['class']; ?>" placeholder="多个用,号连接" name="type_extend[class]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?> >
            <label class="layui-form-label">扩展地区：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['area']; ?>" placeholder="多个用,号连接" name="type_extend[area]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展语言：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['lang']; ?>" placeholder="多个用,号连接" name="type_extend[lang]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展年代：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['year']; ?>" placeholder="多个用,号连接" name="type_extend[year]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展明星：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['star']; ?>" placeholder="多个用,号连接" name="type_extend[star]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展导演：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['director']; ?>" placeholder="多个用,号连接" name="type_extend[director]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展资源：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['state']; ?>" placeholder="多个用,号连接" name="type_extend[state]">
            </div>
        </div>
        <div class="layui-form-item vod-list" <?php if($info['type_mid'] != '1'): ?> style="display:none" <?php endif; ?>>
            <label class="layui-form-label">扩展版本：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['type_extend']['version']; ?>" placeholder="多个用,号连接" name="type_extend[version]">
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    function selectOnChange(id)
    {
        var flag = id;
        var type_tpl = 'type.html';
        var type_tpl_list = 'show.html';
        var type_tpl_detail = 'detail.html';
        var type_tpl_play = 'play.html';
        var type_tpl_down = 'down.html';

        if(flag == 2){
            $(".vod-list").hide();
            type_tpl_play = '';
            type_tpl_down = '';
        }
        else{
            $(".vod-list").show();
        }
        if($('input[name="type_id"]').val() ==''){
            $('input[name="type_tpl"]').val(type_tpl);
            $('input[name="type_tpl_list"]').val(type_tpl_list);
            $('input[name="type_tpl_detail"]').val(type_tpl_detail);
            $('input[name="type_tpl_play"]').val(type_tpl_play);
            $('input[name="type_tpl_down"]').val(type_tpl_down);
        }
    }
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            type_name: function (value) {
                if (value == "") {
                    return "请输入分类名称";
                }
            },
            type_tpl: function (value) {
                if (value == "") {
                    return "请输入分类页模板";
                }
            }
        });


        form.on('select(type_mid)', function(data){
            selectOnChange(data.value);
        });


        selectOnChange(<?php echo $info['type_mid']; ?>);
    });
</script>

</body>
</html>