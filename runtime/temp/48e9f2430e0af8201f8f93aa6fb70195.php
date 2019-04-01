<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"template/default_pc/html/user/ajax_login.html";i:1537968634;}*/ ?>

<!--登录弹窗开始-->
<div class="mac_login">
    <form class="mac_login_form">
        <div class="login_form_group">
            <input type="text" class="mac_u_name" name="user_name" placeholder="手机/登录账号">
        </div>
        <div class="login_form_group">
            <input type="password" class="mac_u_pwd" name="user_pwd" placeholder="登录密码">
        </div>
        <?php if($GLOBALS['config']['user']['login_verify'] == 1): ?>
        <div class="login_form_group clearfix">
            <input type="text" class="mac_u_verify" name="verify" placeholder="请输入验证码">
            <img class="mac_verify_img" src="<?php echo url('verify/index'); ?>" onclick="this.src = this.src+'?'">
        </div>
        <?php endif; ?>
        <div class="login_form_link">
            <a href="<?php echo url('user/reg'); ?>">注册</a>
            <a href="<?php echo url('user/findpass'); ?>">忘记密码</a>
        </div>
        <div class="login_form_group">
            <input type="button" class="login_form_submit" value="登录">
        </div>
    </form>
</div>
<!--登录弹窗结束-->
