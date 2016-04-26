<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <ul class="nav nav-tabs">
        <li ><a href="<?php  echo $this->createWebUrl('addshop',array('shopid'=>$shop['id']));?>">商家信息</a></li>
        <li ><a href="<?php  echo $this->createWebUrl('systemOptions');?>">系统选项</a></li>
        <li class="active"><a href="<?php  echo $this->createWebUrl('addMessage');?>">订单通知设置</a></li>
        <li><a href="<?php  echo $this->createWebUrl('setOrderState');?>">订单状态设置</a></li>
        <li><a href="<?php  echo $this->createWebUrl('fengge');?>">风格模板</a></li>
    </ul>
</div>       
<style>
.table td span{display:inline-block;margin-top:4px;}
.table td input{margin-bottom:0;}
</style>
<div class="clearfix">
<form class="form-horizontal form" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading">认证账户模板消息</div>
        <div class="panel-body">
                <input type="hidden" name="shopid" value="<?php  echo $message['id'];?>">
                <div class="form-group">
                	<label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>消息模板所属行业</label>
                	<div class="col-sm-8 col-xs-12">
                    <label class="checkbox">
					  <input type="checkbox" id="iswww" name="iswww" value="IT" <?php  if($message['iswww'] == "IT") { ?>checked="checked"<?php  } ?>>IT科技 -互联网|电子商务
					  <span class="help-block">若模板行业是【IT科技 - 互联网|电子商务】就勾选，若是【消费品/消费品 】就不要勾选</span>
					</label>
					 </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>用户成功下单后的提醒消息</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="unewordermid" value="<?php  echo $message['unewordermid'];?>">
                    	<span class="help-block">所属行业：消费品-消费品；模板编号：OPENTM200444240；标题：订单提交成功通知</span>
                    	<span class="help-block">所属行业：IT科技 - 互联网|电子商务；模板编号：OPENTM206241496；标题：订单提交成功通知</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>用户付款成功的消息</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="upayordermid" value="<?php  echo $message['upayordermid'];?>">
                    	<span class="help-block">所属行业：消费品-消费品；模板编号：OPENTM200444326；标题：商品支付通知</span>
                    	<span class="help-block">所属行业：IT科技 - 互联网|电子商务；模板编号：TM00015；标题：订单支付成功</span>
                    </div>
                </div>                 
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>客户下单后通知员工的消息</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="wnewordermid" value="<?php  echo $message['wnewordermid'];?>">
                    	<span class="help-block">所属行业：消费品-消费品；模板编号：OPENTM201743389；标题：新订单提醒通知</span>
                    	<span class="help-block">所属行业：IT科技 - 互联网|电子商务；模板编号：OPENTM201785396；标题：新订单通知</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>员工确定价格后提醒用户付款的消息</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="utopayordermid" value="<?php  echo $message['utopayordermid'];?>">
                    	<span class="help-block">所属行业：消费品-消费品；模板编号：OPENTM205160490；标题：商品支付通知</span>
                    	<span class="help-block">所属行业：IT科技 - 互联网|电子商务；模板编号：OPENTM202115196；标题：订单支付提醒</span>
                    </div>
                </div>                
        </div>
        <div class="panel-heading">SMS短信</div>
        <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>账户名称</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="smsuid" value="<?php  echo $message['smsuid'];?>">
                    	<span class="help-block">http://www.sms.cn注册账户</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>账户密码</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="" name="smspwd" value="<?php  echo $message['smspwd'];?>">
                    	<span class="help-block">http://www.sms.cn账户密码</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label"><span style='color:red'>*</span>验证码模板</label>
                    <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="您的短信验证码为#,请及时验证。【诸城1987】" name="smsyzmb" value="<?php  echo $message['smsyzmb'];?>">
                    	<span class="help-block">模板范例:您的短信验证码为#,请及时验证。【诸城1987】('#'为实际四位数字验证码，必须包含)</span>
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