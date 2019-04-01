<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/system/configconnect.html";i:1530669124;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">一键登录设置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1,QQ登录地址/index.php/user/oauth/?type=qq<br>
                        2,微信登录地址/index.php/user/oauth/?type=weixin<br>
                        3，回调地址/index.php/user/logincallback/?type=qq
                    </blockquote>


                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>QQ登录 <a target="_blank" href="http://connect.qq.com/?maccms" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="connect[qq][status]" value="0" title="关闭" <?php if($config['connect']['qq']['status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="connect[qq][status]" value="1" title="开启" <?php if($config['connect']['qq']['status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_KEY：</label>
                        <div class="layui-input-block">
                            <input type="text" name="connect[qq][key]" placeholder="" value="<?php echo $config['connect']['qq']['key']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_SECRET：</label>
                        <div class="layui-input-block">
                            <input type="text" name="connect[qq][secret]" placeholder="" value="<?php echo $config['connect']['qq']['secret']; ?>" class="layui-input">
                        </div>
                    </div>


                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                        <legend>微信登录 <a target="_blank" href="https://open.weixin.qq.com/?maccms" class="layui-btn layui-btn-primary">点击进入注册</a></legend>
                    </fieldset>

                    <div class="layui-form-item">
                        <label class="layui-form-label">状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="connect[weixin][status]" value="0" title="关闭" <?php if($config['connect']['weixin']['status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="connect[weixin][status]" value="1" title="开启" <?php if($config['connect']['weixin']['status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_KEY：</label>
                        <div class="layui-input-block">
                            <input type="text" name="connect[weixin][key]" placeholder="" value="<?php echo $config['connect']['weixin']['key']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">APP_SECRET：</label>
                        <div class="layui-input-block">
                            <input type="text" name="connect[weixin][secret]" placeholder="" value="<?php echo $config['connect']['weixin']['secret']; ?>" class="layui-input">
                        </div>
                    </div>


            </div>
            </div>

        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">

</script>

</body>
</html>