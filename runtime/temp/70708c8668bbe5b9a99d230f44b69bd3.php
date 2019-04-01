<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/extend/upload/ftp.html";i:1547128892;}*/ ?>
<div class="layui-form-item upload_mode mode_Ftp" <?php if($config['upload']['mode'] != 'Ftp'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">FTP存储：</label>
<div class="layui-input-block">
    <a href="javascript:;" target="_blank" class="layui-btn layui-btn-primary">请确认FTP可以正常连接</a>
</div>
</div>
<div class="layui-form-item upload_mode mode_Ftp" <?php if($config['upload']['mode'] != 'Ftp'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">服务器：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][ftp][host]" placeholder="ip或域名" value="<?php echo $config['upload']['api']['ftp']['host']; ?>" class="layui-input" >
</div>
<label class="layui-form-label">端口：</label>
<div class="layui-input-inline w100">
    <input type="text" name="upload[api][ftp][port]" placeholder="端口号" value="<?php echo $config['upload']['api']['ftp']['port']; ?>" class="layui-input" >
</div>
<label class="layui-form-label">账号：</label>
<div class="layui-input-inline w100">
    <input type="text" name="upload[api][ftp][user]" placeholder="ftp账号" value="<?php echo $config['upload']['api']['ftp']['user']; ?>" class="layui-input" >
</div>
<label class="layui-form-label">密码：</label>
<div class="layui-input-inline w100">
    <input type="text" name="upload[api][ftp][pwd]" placeholder="ftp密码" value="<?php echo $config['upload']['api']['ftp']['pwd']; ?>" class="layui-input" >
</div>
<label class="layui-form-label">路径：</label>
<div class="layui-input-inline w100">
    <input type="text" name="upload[api][ftp][path]" placeholder="网站根路径" value="<?php echo $config['upload']['api']['ftp']['path']; ?>" class="layui-input" >
</div>
<label class="layui-form-label">外链URL：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][ftp][url]" placeholder="外链URL" value="<?php echo $config['upload']['api']['ftp']['url']; ?>" class="layui-input" >
</div>
</div>