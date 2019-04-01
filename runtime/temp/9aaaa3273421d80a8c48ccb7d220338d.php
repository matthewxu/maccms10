<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/extend/upload/weibo.html";i:1547128892;}*/ ?>
<div class="layui-form-item upload_mode mode_Weibo" <?php if($config['upload']['mode'] != 'Weibo'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">新浪微博：</label>
<div class="layui-input-block">
    <a href="https://www.weibo.com/" target="_blank" class="layui-btn layui-btn-primary">点击申请 https://www.weibo.com/</a>
</div>
</div>
<div class="layui-form-item upload_mode mode_Weibo" <?php if($config['upload']['mode'] != 'Weibo'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">账号：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][weibo][user]" placeholder="微博登录账号" value="<?php echo $config['upload']['api']['weibo']['user']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">密码：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][weibo][pwd]" placeholder="微博登录密码" value="<?php echo $config['upload']['api']['weibo']['pwd']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">获取尺寸：</label>
<div class="layui-input-inline">
    <select class="w150" name="upload[api][weibo][size]">
        <option value="large" <?php if($config['upload'][api][weibo][size] == 'large'): ?>selected <?php endif; ?>>large</option>
        <option value="bmiddle" <?php if($config['upload'][api][weibo][size] == 'bmiddle'): ?>selected <?php endif; ?>>bmiddle</option>
        <option value="small" <?php if($config['upload'][api][weibo][size] == 'small'): ?>selected <?php endif; ?>>small</option>
        <option value="mw2048" <?php if($config['upload'][api][weibo][size] == 'mw2048'): ?>selected <?php endif; ?>>mw2048</option>
        <option value="mw1024" <?php if($config['upload'][api][weibo][size] == 'mw1024'): ?>selected <?php endif; ?>>mw1024</option>
        <option value="mw690" <?php if($config['upload'][api][weibo][size] == 'mw690'): ?>selected <?php endif; ?>>mw690</option>
        <option value="orj480" <?php if($config['upload'][api][weibo][size] == 'orj480'): ?>selected <?php endif; ?>>orj480</option>
        <option value="orj360" <?php if($config['upload'][api][weibo][size] == 'orj360'): ?>selected <?php endif; ?>>orj360</option>
        <option value="thumb150" <?php if($config['upload'][api][weibo][size] == 'thumb150'): ?>selected <?php endif; ?>>thumb150</option>
        <option value="square" <?php if($config['upload'][api][weibo][size] == 'square'): ?>selected <?php endif; ?>>square</option>
    </select>
</div>
<label class="layui-form-label">cookie：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][weibo][cookie]" placeholder="登录cookie-会自动读取" value="<?php echo $config['upload']['api']['weibo']['cookie']; ?>" class="layui-input"  >
    <input type="hidden" name="upload[api][weibo][time]" placeholder="登录时间-不用设置" value="<?php echo $config['upload']['api']['weibo']['time']; ?>" class="layui-input"  >
</div>

</div>