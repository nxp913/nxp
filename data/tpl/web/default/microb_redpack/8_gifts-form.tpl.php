<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li><a href="<?php  echo $this->createWebUrl('entry');?>">活动参与方式</a></li>
    <li><a href="<?php  echo $this->createWebUrl('activity');?>">活动管理</a></li>
    <li><a href="<?php  echo $this->createWebUrl('gifts');?>">礼品设置</a></li>
    <?php  if(empty($entity['id'])) { ?>
    <li class="active"><a href="<?php  echo $this->createWebUrl('gifts', array('foo'=>'create'));?>">新增礼品</a></li>
    <?php  } else { ?>
    <li class="active"><a href="<?php  echo $this->createWebUrl('gifts', array('foo'=>'modify', 'id'=>$entity['id']));?>">编辑礼品</a></li>
    <?php  } ?>
    <li><a href="<?php  echo $this->createWebUrl('api');?>">接口参数</a></li>
</ul>
<script>
    require(['jquery', 'angular', 'util', 'underscore'], function($, angular, u, _){
        $(function(){
            angular.module('app', []).controller('formPanel', function($scope, $http) {
                $scope.type = "<?php  echo $entity['type'];?>";
                <?php  if($entity['type'] == 'cash') { ?>
                $scope.cash = <?php  echo json_encode($entity['tag'])?>;
                <?php  } else { ?>
                $scope.cash = {};
                <?php  } ?>
                    
                $scope.submit = function() {
                    var message = '';
                    if($.trim($(':text[name=title]').val()) == '') {
                        message += '必须输入礼品名称 <br>';
                    }
                    if($scope.type == 'cash') {
                        if($.trim($scope.cash.provider) == '') {
                            message += '必须输入红包提供商名称<br>';
                        }
                        if($.trim($scope.cash.wish) == '') {
                            message += '必须输入红包祝福语<br>';
                        }
                        if($.trim($scope.cash.remark) == '') {
                            message += '必须输入红包说明<br>';
                        }
                        if($.trim($(':text[name="cash[image]"]').val()) == '') {
                            message += '必须输入红包分享图片<br>';
                        }
                        if($.trim($(':text[name="cash[title]"]').val()) == '') {
                            message += '必须输入红包分享标题<br>';
                        }
                        if($.trim($('textarea[name="cash[content]"]').val()) == '') {
                            message += '必须输入红包分享文案<br>';
                        }
                        $scope.cash.downline = parseInt($scope.cash.downline);
                        $scope.cash.upline = parseInt($scope.cash.upline);
                        if(isNaN($scope.cash.downline) || isNaN($scope.cash.upline) || $scope.cash.downline > $scope.cash.upline || $scope.cash.downline < 1 || $scope.cash.upline > 200) {
                            message += '红包金额应大于1元, 小于200元. 并且最大金额不能小于最少金额<br>';
                        }
                    }
                    if(message) {
                        u.message(message);
                    } else {
                        $('#theform')[0].submit();
                    }
                };
            });
            angular.bootstrap(document, ['app']);
        });
    });

</script>
<div class="clearfix">
    <form id="theform" class="form form-horizontal ng-cloak" action="" method="post" ng-controller="formPanel">
        <div class="panel panel-default">
            <div class="panel-heading">
                礼品基本信息
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">礼品名称</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="title" value="<?php  echo $entity['title'];?>"/>
                        <div class="help-block">
                            这种礼品的名称, 方便下次识别, 例如: 现金红包10元
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">礼品类型</label>
                    <div class="col-sm-5">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="type" ng-model="type" value="cash"> 现金红包
                            </label>
                            <label class="radio-inline disabled">
                                <input type="radio" name="type" disabled="disabled" ng-model="type" value="coupon"> 微信卡包卡券
                            </label>
                            <label class="radio-inline disabled">
                                <input type="radio" name="type" disabled="disabled" ng-model="type" value="custom"> 商家自定义消费券
                            </label>
                        </div>
                        <span class="help-block">现金红包, 发放后直接存放到粉丝的微信钱包. <strong>需要认证服务号(开通支付功能)</strong></span>
                        <span class="help-block">微信卡包卡券, 发放后直接存放到粉丝的微信卡包. <strong>需要认证服务号或认证订阅号(开通卡券功能)</strong></span>
                        <span class="help-block">商家自定义消费券, 发放后存放到本公众号的卡包. <strong>需要设置工作人员现场消费时核销</strong></span>
                        <span class="help-block"><strong>更多礼品方式欢迎联系开发定制</strong></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">礼品使用说明</label>
                    <div class="col-sm-8">
                        <textarea style="height:150px;" class="richtext-clone" name="remark"><?php  echo $entity['remark'];?></textarea>
                        <div class="help-block">
                            详细说明这个红包的使用方式
                        </div>
                        <script type="text/javascript">
                            require(['jquery', 'util'],function($, util){
                                window.editor = util.editor($('.richtext-clone')[0]);
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                礼品详细信息
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包提供商名称</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="cash[provider]" class="form-control" ng-model="cash.provider">
                        <span class="help-block">红包提供商名称, 请参考最终效果预览</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包祝福语</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="cash[wish]" class="form-control" ng-model="cash.wish">
                        <span class="help-block">红包祝福语, 请参考最终效果预览</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包说明</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea name="cash[remark]" class="form-control" rows="5" ng-model="cash.remark"></textarea>
                        <span class="help-block">红包说明, 请参考最终效果预览</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包金额</label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="row row-fix">
                            <div class="col-sm-4 col-xs-2">
                                <div class="input-group">
                                    <input type="text" name="cash[downline]" class="form-control" ng-model="cash.downline">
                                    <span class="input-group-addon" style="border-left:none;border-right:none;">至</span>
                                    <input type="text" name="cash[upline]" class="form-control" ng-model="cash.upline">
                                    <span class="input-group-addon">元</span>
                                </div>
                            </div>
                        </div>
                        <span class="help-block">红包金额范围, 最终金额将在金额范围内随机生成. 如果金额固定, 请输入相同的金额</span>
                        <span class="help-block"><strong>根据接口限制, 单个红包最低1元, 最高200元. </strong></span>
                        <span class="help-block"><strong class="text-danger">根据腾讯的答复, 如果需要突破限制发送小于1元或者大于200元的红包, 需要达到100W/月的红包数量, 并联系腾讯获得高级接口. 如果你有高级接口, 可以联系我们开发</strong></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">红包内容预览</label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="alert alert-info">红包消息: 你参加 <mark>抢红包活动</mark>，成功获得 <mark>{{cash.provider}}</mark> 赠送的红包。<mark>{{cash.remark}}</mark></div>
                        <div class="alert alert-info">拆开红包: 你成功领取了 <mark>{{cash.provider}}</mark> 发放的红包。 红包金额：<mark>{{cash.upline}}</mark> 元  <mark>{{cash.wish}}</mark></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享的图片</label>
                    <div class="col-sm-9 col-xs-12">
                        <?php  echo tpl_form_field_image('cash[image]', $entity['tag']['image'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享的标题</label>
                    <div class="col-sm-9 col-xs-12">
                        <input type="text" name="cash[title]" class="form-control" value="<?php  echo $entity['tag']['title'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享文案</label>
                    <div class="col-sm-9 col-xs-12">
                        <textarea name="cash[content]" class="form-control" rows="5"><?php  echo $entity['tag']['content'];?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                    <div class="col-md-2 col-lg-1">
                        <input type="button" value="保存" class="btn btn-primary btn-block" ng-click="submit();" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
