<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/system/configupload.html";i:1548310524;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
                <li class="layui-this">附件设置</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示：不管是本地上传还是第三方存储，都需要先上传到本地，再转存到第三方。<br>
                        所以本地操作系统的临时文件目录必须要有写入权限，否则会上传文件失败。<br>
                        PHP临时文件目录修改方法在PHP配置文件里搜索sys_temp_dir。<br>
                        当前操作系统临时文件目录：<?php echo sys_get_temp_dir(); ?> <br>
                        <?php
                        $temp_file = tempnam(sys_get_temp_dir(), 'Tux');
                        if($temp_file){
                            echo '<span class="layui-badge layui-bg-green">测试写入临时文件成功，上传状态正常</span>';
                        }
                        else{
                            echo '<span class="layui-badge">测试写入临时文件失败，请检查临时文件目录权限</span>';
                        }
                      ?>
                    </blockquote>

                    <div class="layui-form-item">
                        <label class="layui-form-label">缩略图：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="upload[thumb]" value="0" title="关闭" <?php if($config['upload']['thumb'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="upload[thumb]" value="1" title="开启" <?php if($config['upload']['thumb'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux">上传图片时是否自动生成缩略图</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">尺寸大小：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[thumb_size]" placeholder="长x宽,例300x300" value="<?php echo $config['upload']['thumb_size']; ?>" class="layui-input w150">
                        </div>
                        <div class="layui-form-mid layui-word-aux">缩略图尺寸</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">裁剪方式：</label>
                        <div class="layui-input-inline">
                            <select class="w150" name="upload[thumb_type]">
                                <option value="1" <?php if($config['upload']['thumb_type'] == 1): ?>selected <?php endif; ?>>等比例缩放</option>
                                <option value="2" <?php if($config['upload']['thumb_type'] == 2): ?>selected <?php endif; ?>>缩放后填充</option>
                                <option value="3" <?php if($config['upload']['thumb_type'] == 3): ?>selected <?php endif; ?>>居中裁剪</option>
                                <option value="4" <?php if($config['upload']['thumb_type'] == 4): ?>selected <?php endif; ?>>左上角裁剪</option>
                                <option value="5" <?php if($config['upload']['thumb_type'] == 5): ?>selected <?php endif; ?>>右下角裁剪</option>
                                <option value="6" <?php if($config['upload']['thumb_type'] == 6): ?>selected <?php endif; ?>>固定尺寸缩放</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux">缩略图裁剪方式</div>
                    </div>
                <div class="layui-form-item">
                        <label class="layui-form-label">文字水印：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="upload[watermark]" value="0" title="关闭" <?php if($config['upload']['watermark'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="upload[watermark]" value="1" title="开启" <?php if($config['upload']['watermark'] == 1): ?>checked <?php endif; ?>>
                        </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">水印位置：</label>
                        <div class="layui-input-inline">
                            <select class="w150" name="upload[watermark_location]">
                                <option value="7" <?php if($config['upload']['watermark_location'] == 7): ?>selected <?php endif; ?>>左下角</option>
                                <option value="1" <?php if($config['upload']['watermark_location'] == 1): ?>selected <?php endif; ?>>左上角</option>
                                <option value="4" <?php if($config['upload']['watermark_location'] == 4): ?>selected <?php endif; ?>>左居中</option>
                                <option value="9" <?php if($config['upload']['watermark_location'] == 9): ?>selected <?php endif; ?>>右下角</option>
                                <option value="3" <?php if($config['upload']['watermark_location'] == 3): ?>selected <?php endif; ?>>右上角</option>
                                <option value="6" <?php if($config['upload']['watermark_location'] == 6): ?>selected <?php endif; ?>>右居中</option>
                                <option value="2" <?php if($config['upload']['watermark_location'] == 2): ?>selected <?php endif; ?>>上居中</option>
                                <option value="8" <?php if($config['upload']['watermark_location'] == 8): ?>selected <?php endif; ?>>下居中</option>
                                <option value="5" <?php if($config['upload']['watermark_location'] == 5): ?>selected <?php endif; ?>>居中</option>
                            </select>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">水印内容：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_content]" placeholder="" value="<?php echo $config['upload']['watermark_content']; ?>" class="layui-input w150"  >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">字体大小：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_size]" placeholder="单位：px(像素)" value="<?php echo $config['upload']['watermark_size']; ?>" class="layui-input w150"  >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">水印颜色：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upload[watermark_color]" placeholder="格式:#000000" value="<?php echo $config['upload']['watermark_color']; ?>" class="layui-input w150"  >
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">三方访问协议：</label>
                        <div class="layui-input-inline">
                            <select class="w150" name="upload[protocol]" lay-filter="upload[protocol]">
                                <option value="http" <?php if($config['upload']['protocol'] == 'http'): ?>selected <?php endif; ?>>http</option>
                                <option value="https" <?php if($config['upload']['protocol'] == 'https'): ?>selected <?php endif; ?>>https</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux">使用第三方存储会转换为mac://开头，这表示模板里展示图片链接中把mac替换为http或https</div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">保存方式：</label>
                    <div class="layui-input-inline">
                        <select class="w150" name="upload[mode]" lay-filter="upload[mode]">
                            <option value="local" <?php if($config['upload']['mode'] == 'local'): ?>selected <?php endif; ?>>本地保存</option>
                            <option value="remote" <?php if($config['upload']['mode'] == 'remote'): ?>selected <?php endif; ?>>远程访问</option>
                            <?php if(is_array($ext_list) || $ext_list instanceof \think\Collection || $ext_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ext_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $key; ?>" <?php if($config['upload']['mode'] == $key): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item upload_mode mode_remote" <?php if($config['upload']['mode'] != 'remote'): ?>style="display:none;" <?php endif; ?>>
                    <label class="layui-form-label">图片远程URL：</label>
                    <div class="layui-input-block">
                        <input type="text" name="upload[remoteurl]" placeholder="本地图片如存在远程，可使用此功能" value="<?php echo $config['upload']['remoteurl']; ?>" class="layui-input w500">
                    </div>
                </div>

                <?php echo $ext_html; ?>

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
    layui.use(['form','layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer;

        form.on('select(upload[mode])', function(data){
            $('.upload_mode').hide();
            $('.mode_'+ data.value).show();
        });


    });


</script>

</body>
</html>