<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<script type='text/javascript' src='resource/js/lib/jquery-1.11.1.min.js'></script>
<script type="text/javascript" src="../addons/wdl_shopping/images/jquery.gcjs.js"></script>
<script type="text/javascript" src="../addons/wdl_shopping/images/jquery.form.js"></script>
<script type="text/javascript" src="../addons/wdl_shopping/images/tooltipbox.js"></script>

<style type="text/css">
	.red {float:left;color:red}
	.white{float:left;color:#fff}
	.tooltipbox {
		background:#fef8dd;border:1px solid #c40808; position:absolute; left:0;top:0; text-align:center;height:20px;
		color:#c40808;padding:2px 5px 1px 5px; border-radius:3px;z-index:1000;
	}
	.red { float:left;color:red}
</style>

<div class="main">
	<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1">
		<div class="panel panel-default">
			<div class="panel-heading">
				提醒设置
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">提醒接收邮箱</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="noticeemail" class="form-control" value="<?php  echo $settings['noticeemail'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">短信提示号码</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="mobile" class="form-control" value="<?php  echo $settings['mobile'];?>" />
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">商城信息</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌名称</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="shopname" class="form-control" value="<?php  echo $settings['shopname'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">官方网址</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="officialweb" class="form-control" value="<?php  echo $settings['officialweb'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('logo', $settings['logo'])?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">联系电话</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="phone" class="form-control" value="<?php  echo $settings['phone'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">所在地址</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" name="address" class="form-control" value="<?php  echo $settings['address'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">品牌介绍</label>
					<div class="col-sm-9 col-xs-12">
						<textarea name="description" class="form-control richtext" cols="70"><?php  echo $settings['description'];?></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>

<script language='javascript'>
	require(['jquery', 'util'], function($, u){
		$(function(){
			u.editor($('.richtext')[0]);
		});
	});
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>