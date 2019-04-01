<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:42:"template/default_pc/html/comment/ajax.html";i:1536377584;}*/ ?>
    <!--评论开始-->
    <form class="comment_form cmt_form clearfix"  >
        <input type="hidden" name="comment_pid" value="0">
        <!--评论框-->
        <div class="input_wrap fl clearfix">
            <textarea class="comment_content fl" name="comment_content" placeholder="有事没事说两句..."></textarea>
            <div class="fl clearfix handle">
                <div class="comment_face_panel face">
                    <i class="icon-face"></i>
                </div>
                <div class="comment_face_box face-box">
                    <?php $__FOR_START_197561906__=1;$__FOR_END_197561906__=16;for($i=$__FOR_START_197561906__;$i <= $__FOR_END_197561906__;$i+=1){ ?>
                    <img data-id="<?php echo $i; ?>" src="/static/images/face/<?php echo $i; ?>.gif">
                    <?php } ?>
                </div>
                <div class="remaining-w">还可以输入<span class="comment_remaining remaining fr" >200</span></div>
                <div class="smt fr clearfix">
                        <span style="display: none;">
                            <span></span>
                        </span>
                    <?php if($comment['verify'] == 1): ?>
                    验证码:<input class="mac_verify cmt_text" type="text" id="verify" name="verify" />
                    <?php endif; ?>
                    <input class="comment_submit cmt_post" type="button" value="发布">
                </div>
            </div>
        </div>

    </form>
    <?php $__TAG__ = '{"num":"5","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
    <div class="cmt_wrap" >
            <p class="smt_wrap fl clearfix">
                <span class="total fl">共<em id="item_count"><?php echo intval($__PAGING__['record_total']); ?></em>条评论</span>
            </p>
            <?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>
            <div class="cmt_item clearfix">
                <a class="face_wrap fl" href="javascript:;"><img class="face" src="<?php echo mac_get_user_portrait($vo['user_id']); ?>"></a>
                <div class="item_con fl">
                    <p class="top">
                        <span class="fr"><?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?></span>
                        <a class="name" href="javascript:;"><?php echo $vo['comment_name']; ?></a>
                        (<a target="_blank">(<?php echo long2ip($vo['comment_ip']); ?>)</a>)
                    </p>
                    <p class="con"><?php echo mac_em_replace($vo['comment_content']); ?></p>
                    <div class="gw-action">
                        <span class="click-ding-gw">
                            <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
                                <i class="icon-ding"></i>
                                <em class="digg_num icon-num"><?php echo $vo['comment_up']; ?></em>
                            </a>
                            <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
                                <i class="icon-dw"></i>
                                <em class="digg_num icon-num"><?php echo $vo['comment_down']; ?></em>
                            </a>
                        </span>
                        <a class="comment_reply" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">回复</a>
                        <a class="comment_report" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">举报</a>
                    </div>


                    <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$child): ?>
                    <div class="cmt_item clearfix">
                        <a class="face_wrap fl" href="javascript:;"><img class="face" src="<?php echo mac_get_user_portrait($vo['user_id']); ?>"></a>
                        <div class="item_con fl">
                            <p class="top">
                                <a class="name" href="javascript:;"><?php echo $child['comment_name']; ?></a>
                                (<a target="_blank">(<?php echo long2ip($child['comment_ip']); ?>)</a>)
                            </p>
                            <p class="con"><?php echo mac_em_replace($child['comment_content']); ?></p>
                        </div>
                        <div class="gw-action">
                        <span class="click-ding-gw">
                            <a class="digg_link comment_digg" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
                                <i class="icon-ding"></i>
                                <em class="digg_num icon-num"><?php echo $child['comment_up']; ?></em>
                            </a>
                            <a class="digg_link comment_digg" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
                                <i class="icon-dw"></i>
                                <em class="digg_num icon-num"><?php echo $child['comment_down']; ?></em>
                            </a>
                        </span>
                            <a class="comment_report" data-id="<?php echo $child['comment_id']; ?>" href="javascript:;">举报</a>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
    <!--评论结束-->
    <div class="mac_pages" >
        <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
        <div class="page_info">
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show(1)" title="首页">首页</a>
            <a class="page_link" href="javascript:void(0);" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_prev']; ?>')" title="上一页">上一页</a>
            <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
            <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
            <?php else: ?>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $num; ?>')" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_next']; ?>')" title="下一页">下一页</a>
            <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')" title="尾页">尾页</a>

            <input class="page_input" type="text" placeholder="页码" id="page" autocomplete="off" style="width:40px">
            <button class="page_btn" type="button"  onclick="MAC.Comment.Show($('#page').val())">GO</button>
        </div>
    </div>
