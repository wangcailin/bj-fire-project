<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"/Users/wangcailin/Web/Work/Fire/public/../application/admin/view/message/edit.html";i:1510887721;s:84:"/Users/wangcailin/Web/Work/Fire/public/../application/admin/view/layout/default.html";i:1510887721;s:81:"/Users/wangcailin/Web/Work/Fire/public/../application/admin/view/common/meta.html";i:1510887721;s:83:"/Users/wangcailin/Web/Work/Fire/public/../application/admin/view/common/script.html";i:1510887721;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="__CDN__/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="__CDN__/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="__CDN__/assets/js/html5shiv.js"></script>
  <script src="__CDN__/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label for="c-time" class="control-label col-xs-12 col-sm-2"><?php echo __('Time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD" data-use-current="true" name="row[time]" type="text" value="<?php echo datetime($row['time']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-time_start" class="control-label col-xs-12 col-sm-2"><?php echo __('Time_start'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-time_start" class="form-control" name="row[time_start]" type="text" value="<?php echo $row['time_start']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-time_end" class="control-label col-xs-12 col-sm-2"><?php echo __('Time_end'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-time_end" class="form-control" name="row[time_end]" type="text" value="<?php echo $row['time_end']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-time_status" class="control-label col-xs-12 col-sm-2"><?php echo __('Time_status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[time_status]', ['normal'=>__('Normal'), 'hidden'=>__('Hidden')], $row['time_status']); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="c-text" class="control-label col-xs-12 col-sm-2"><?php echo __('Text'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-text" class="form-control" name="row[text]" type="text" value="<?php echo $row['text']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-text_status" class="control-label col-xs-12 col-sm-2"><?php echo __('Text_status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[text_status]', ['normal'=>__('Normal'), 'hidden'=>__('Hidden')], $row['text_status']); ?>
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="__CDN__/assets/js/require.js" data-main="__CDN__/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>