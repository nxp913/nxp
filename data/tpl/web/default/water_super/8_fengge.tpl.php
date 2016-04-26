<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li><a href="<?php  echo $this->createWebUrl('addshop',array('shopid'=>$shop['id']));?>">商家信息</a></li>
        <li><a href="<?php  echo $this->createWebUrl('systemOptions');?>">系统选项</a></li>
        <li><a href="<?php  echo $this->createWebUrl('addMessage');?>">订单通知设置</a></li>
        <li><a href="<?php  echo $this->createWebUrl('setOrderState');?>">订单状态设置</a></li>
        <li class="active"><a href="<?php  echo $this->createWebUrl('fengge');?>">风格模板</a></li>
    </ul>
</div>       
<style>
.table td span{display:inline-block;margin-top:4px;}
.table td input{margin-bottom:0;}
</style>
<div class="clearfix">
<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">
    <div class="panel-heading">已支持风格【首页下单】</div>
    <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                       <img src="../addons/water_super/template/images/anli/index.jpg" style="width: 30%">
                       <img src="../addons/water_super/template/images/anli/index2.jpg" style="width: 30%">
                       <span class="help-block" style="font-weight: bold;color: red;">注意：左边版本是系统自带版本，右侧是付费新版，要求是最好懂点前端技术的客户。</span>
                    </div>
                </div>
    </div>
    <div class="panel-heading">已支持风格【商品价目】</div>
    <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                       <img src="../addons/water_super/template/images/anli/jiamu.jpg" style="width: 30%">
                       <img src="../addons/water_super/template/images/anli/jiamu2.jpg" style="width: 30%">
                       <span class="help-block" style="font-weight: bold;color: red;">注意：系统默认提供的是价目的文章链接地址，付费新版是单独的展示页面，要求是最好懂点前端技术的客户。</span>
                    </div>
                </div>
    </div> 
    <div class="panel-heading" style="color: red;">待支持风格【商品列表】</div>
    <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                       <img src="../addons/water_super/template/images/anli/qidai.png" style="width: 30%">
                       <img src="../addons/water_super/template/images/anli/qidai.png" style="width: 30%">
                    </div>
                </div>
    </div>              
        <div class="panel-heading">基础首页风格设置</div>
        <div class="panel-body">
                <input type="hidden" name="shopid" value="<?php  echo $shop['id'];?>">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>商家广告语</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="indexad" value="<?php  echo $shop['indexad'];?>">
                    	<span class="help-block">例如：天天洗衣，天天好心情</span>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>下单标语1</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="呼叫下单" name="xc1" value="<?php  echo $shop['xc1'];?>">
                    	<span class="help-block">例如：呼叫下单</span>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>下单标语2</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="专业清洗" name="xc2" value="<?php  echo $shop['xc2'];?>">
                    	<span class="help-block">例如：专业清洗</span>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>下单标语3</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="挂件送回" name="xc3" value="<?php  echo $shop['xc3'];?>">
                    	<span class="help-block">例如：挂件送回</span>
                    </div>
                </div>                              
        </div>
        <div class="panel-heading">NEW首页风格</div>
        <div class="panel-body">                                          
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">轮播图片1</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('imglb1',$shop['imglb1']);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">如果有充值送值的图片请上传在这,充值页面也会展示该图,活动封面图片 建议720*290</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>图片1跳转URL</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="imgurl1" value="<?php  echo $shop['imgurl1'];?>">
                    	<span class="help-block">一般为宣传介绍性质的文章地址URL，没有不填</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">轮播图片2</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('imglb2',$shop['imglb2']);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">活动封面图片 建议720*290</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>图片2跳转URL</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="imgurl2" value="<?php  echo $shop['imgurl2'];?>">
                    	<span class="help-block">例一般为宣传介绍性质的文章地址URL，没有不填</span>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">轮播图片3</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('imglb3',$shop['imglb3']);?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">活动封面图片 建议720*290</div>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>图片3跳转URL</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="imgurl3" value="<?php  echo $shop['imgurl3'];?>">
                    	<span class="help-block">一般为宣传介绍性质的文章地址URL，没有不填</span>
                    </div>
                </div>
               <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">充值介绍</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('pczjs',$shop['pczjs']);?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">点击后跳转到充值页面  建议359*162（有原始图片可供参考）</div>
                    </div>
                </div>    
               <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">服务范围</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('pfwfw',$shop['pfwfw']);?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">点击后跳转到服务范围页面  建议359*162（有原始图片可供参考）</div>
                    </div>
                </div>  
               <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">宣传图片1</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('pxctp1',$shop['pxctp1']);?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">点击后跳转到价目列表页面  建议359*162（有原始图片可供参考）</div>
                    </div>
                </div>  
               <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">宣传图片2</label>
                    <div class="col-sm-8 col-xs-12">
                       <?php  echo tpl_form_field_image('pxctp2',$shop['pxctp2']);?>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="help-block">点击后跳转到价目列表页面   建议359*162（有原始图片可供参考）</div>
                    </div>
                </div>                                                                                                                              
        </div>
        <div class="panel-heading">模板风格启用设置</div>
        <div class="panel-body">
        		<div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>首页风格模板名称</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="index" name="template" value="<?php  echo $shop['template'];?>">
                    	<span class="help-block">默认提供的首页风格模板名称:index </span>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>价目风格模板名称</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="例如：http://www.xiyi.com/jiamu.html" name="goodsinfourl" value="<?php  echo $shop['goodsinfourl'];?>">
                    	<span class="help-block">如果您没有价目的风格模板此处可以填入价目文章的URL地址，如果有价目模板则填入模板名称</span>
                    </div>
                </div>  
        </div>      
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <input name="submit" type="submit" value="提交" class="btn btn-primary col-lg-1">
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </div>
</form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>