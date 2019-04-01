<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/system/configapi.html";i:1544620388;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/head.html";i:1522628860;s:82:"/Users/matthewxu/Documents/GitHub/maccms10/application/admin/view/public/foot.html";i:1526021730;}*/ ?>
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
                    <li class="layui-this">视频API设置</li>
                    <li>文章API设置</li>
                    <li>演员API设置</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            1,视频列表地址/api.php/provide/vod/?ac=list<br>
                            2,视频详情地址/api.php/provide/vod/?ac=detail
                        </blockquote>

                <div class="layui-form-item">
                    <label class="layui-form-label">接口开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="api[vod][status]" value="0" title="关闭" <?php if($config['api']['vod']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="api[vod][status]" value="1" title="开启" <?php if($config['api']['vod']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">是否收费：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="api[vod][charge]" value="0" title="关闭" <?php if($config['api']['vod']['charge'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="api[vod][charge]" value="1" title="开启" <?php if($config['api']['vod']['charge'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">
                        列表每页显示数量：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][pagesize]" placeholder="数据每页显示量，不建议超过50" value="<?php echo $config['api']['vod']['pagesize']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        图片域名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][imgurl]" placeholder="显示图片的完整访问路径所需要，以http:开头,/结尾，不包含upload目录" value="<?php echo $config['api']['vod']['imgurl']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        分类过滤参数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][typefilter]" placeholder="列出需要显示的分类ids例如 11,12,13" value="<?php echo $config['api']['vod']['typefilter']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        数据过滤参数：</label>
                    <div class="layui-input-block">
                        <input type="text" name="api[vod][datafilter]" placeholder="SQL查询条件例如 vod_status=1" value="<?php echo $config['api']['vod']['datafilter']; ?>" class="layui-input">
                    </div>
                </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                数据缓存时间：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[vod][cachetime]" placeholder="单位秒建议3600以上" value="<?php echo $config['api']['vod']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                指定播放组：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[vod][from]" placeholder="指定播放组 例如youku" value="<?php echo $config['api']['vod']['from']; ?>" class="layui-input">
                            </div>
                        </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">授权域名：</label>
                    <div class="layui-input-block">
                        <textarea name="api[vod][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['vod']['auth']); ?></textarea>
                    </div>
                </div>

            </div>
                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            1,文章列表地址/api.php/provide/art/?ac=list<br>
                            2,文章详情地址/api.php/provide/art/?ac=detail
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label">接口开关：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[art][status]" value="0" title="关闭" <?php if($config['api']['art']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[art][status]" value="1" title="开启" <?php if($config['api']['art']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否收费：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[art][charge]" value="0" title="关闭" <?php if($config['api']['art']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[art][charge]" value="1" title="开启" <?php if($config['api']['art']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                列表每页显示数量：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][pagesize]" placeholder="数据每页显示量，不建议超过50" value="<?php echo $config['api']['art']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                图片域名：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][imgurl]" placeholder="显示图片的完整访问路径所需要，以http:开头,/结尾，不包含upload目录" value="<?php echo $config['api']['art']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                分类过滤参数：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][typefilter]" placeholder="列出需要显示的分类ids例如 11,12,13" value="<?php echo $config['api']['art']['typefilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                数据过滤参数：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][datafilter]" placeholder="SQL查询条件例如 and art_status=1" value="<?php echo $config['api']['art']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                数据缓存时间：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[art][cachetime]" placeholder="单位秒建议3600以上" value="<?php echo $config['api']['art']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">授权域名：</label>
                            <div class="layui-input-block">
                                <textarea name="api[art][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['art']['auth']); ?></textarea>
                            </div>
                        </div>

                    </div>


                    <div class="layui-tab-item">

                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            1,演员列表地址/api.php/provide/actor/?ac=list<br>
                            2,演员详情地址/api.php/provide/actor/?ac=detail
                        </blockquote>


                        <div class="layui-form-item">
                            <label class="layui-form-label">接口开关：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[actor][status]" value="0" title="关闭" <?php if($config['api']['actor']['status'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[actor][status]" value="1" title="开启" <?php if($config['api']['actor']['status'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否收费：</label>
                            <div class="layui-input-block">
                                <input type="radio" name="api[actor][charge]" value="0" title="关闭" <?php if($config['api']['actor']['charge'] != 1): ?>checked <?php endif; ?>>
                                <input type="radio" name="api[actor][charge]" value="1" title="开启" <?php if($config['api']['actor']['charge'] == 1): ?>checked <?php endif; ?>>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                列表每页显示数量：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][pagesize]" placeholder="数据每页显示量，不建议超过50" value="<?php echo $config['api']['actor']['pagesize']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                图片域名：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][imgurl]" placeholder="显示图片的完整访问路径所需要，以http:开头,/结尾，不包含upload目录" value="<?php echo $config['api']['actor']['imgurl']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                数据过滤参数：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][datafilter]" placeholder="SQL查询条件例如 and actor_status=1" value="<?php echo $config['api']['actor']['datafilter']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                数据缓存时间：</label>
                            <div class="layui-input-block">
                                <input type="text" name="api[actor][cachetime]" placeholder="单位秒建议3600以上" value="<?php echo $config['api']['actor']['cachetime']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">授权域名：</label>
                            <div class="layui-input-block">
                                <textarea name="api[actor][auth]" class="layui-textarea"><?php echo mac_replace_text($config['api']['actor']['auth']); ?></textarea>
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