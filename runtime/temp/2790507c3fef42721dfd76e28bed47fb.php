<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/select_type.html";i:1548636042;}*/ ?>
<form class="layui-form m10" method="post" action="<?php echo $url; ?>">
    <input type="hidden" name="col" value="<?php echo $col; ?>">
    <input type="hidden" name="ids" value="<?php echo $ids; ?>">

    <div class="layui-input-inline w150">
        <select name="val">
            <option value="">选择分类</option>
            <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == $mid): ?>
            <option value="<?php echo $vo['type_id']; ?>" ><?php echo $vo['type_name']; ?></option>
            <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $ch['type_id']; ?>" <?php if($ch['type_id'] == $val): ?>selected<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;<?php echo $ch['type_name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <div class="layui-input-inline">
        <button type="submit" class="layui-btn" lay-submit="" refresh="<?php echo $refresh; ?>" lay-filter="formSubmit">保 存</button>
    </div>
</form>

