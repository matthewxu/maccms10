<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/system/configcomment.html";i:1539755168;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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

<div class="page-container">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">评论留言</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label">留言本：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="gbook[status]" value="0" title="关闭" <?php if($config['gbook']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[status]" value="1" title="开启" <?php if($config['gbook']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启留言本</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否审核：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[audit]" value="0" title="关闭" <?php if($config['gbook']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[audit]" value="1" title="开启" <?php if($config['gbook']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录留言：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="gbook[login]" value="0" title="关闭" <?php if($config['gbook']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="gbook[login]" value="1" title="开启" <?php if($config['gbook']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="gbook[verify]" value="0" title="关闭" <?php if($config['gbook']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="gbook[verify]" value="1" title="开启" <?php if($config['gbook']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">每页个数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[pagesize]" placeholder="建议设置20以上" value="<?php echo $config['gbook']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">时间间隔：</label>
                    <div class="layui-input-block">
                        <input type="text" name="gbook[timespan]" placeholder="单位秒、建议3秒以上" value="<?php echo $config['gbook']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">评论状态：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="comment[status]" value="0" title="关闭" <?php if($config['comment']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[status]" value="1" title="开启" <?php if($config['comment']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启评论</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否审核：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[audit]" value="0" title="关闭" <?php if($config['comment']['audit'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[audit]" value="1" title="开启" <?php if($config['comment']['audit'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录评论：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="comment[login]" value="0" title="关闭" <?php if($config['comment']['login'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="comment[login]" value="1" title="开启" <?php if($config['comment']['login'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="comment[verify]" value="0" title="关闭" <?php if($config['comment']['verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="comment[verify]" value="1" title="开启" <?php if($config['comment']['verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">每页个数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[pagesize]" placeholder="建议设置20以上" value="<?php echo $config['comment']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">时间间隔：</label>
                    <div class="layui-input-block">
                        <input type="text" name="comment[timespan]" placeholder="单位秒、建议3秒以上" value="<?php echo $config['comment']['timespan']; ?>" class="layui-input w150">
                    </div>
                </div>

            </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , upload = layui.upload;

    });


</script>

</body>
</html>