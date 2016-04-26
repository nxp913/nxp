<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li><a href="<?php  echo $this->createWebUrl('entry');?>">活动参与方式</a></li>
    <li><a href="<?php  echo $this->createWebUrl('activity');?>">活动管理</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl('gifts');?>">礼品设置</a></li>
    <li><a href="<?php  echo $this->createWebUrl('api');?>">接口参数</a></li>
</ul>
<div class="clearfix">
    <div class="panel panel-default">
        <div class="panel-heading">
            活动礼品列表
        </div>
        <div class="table-responsive panel-body">
            <table class="table table-hover" style="width:auto;">
                <tr>
                    <th>礼品名称</th>
                    <th style="width:100px;">礼品类型</th>
                    <th style="width:420px;"></th>
                </tr>
                <?php  if(is_array($ds)) { foreach($ds as $row) { ?>
                <tr>
                    <td>
                        <p class="form-control-static">
                            <?php  echo $row['title'];?>
                        </p>
                    </td>
                    <td>
                        <p class="form-control-static">
                            <?php  if($row['type'] == 'cash') { ?>
                                <span class="label label-info">现金红包</span>
                            <?php  } ?>
                            <?php  if($row['type'] == 'coupon') { ?>
                                <span class="label label-info">券类(需核销)</span>
                            <?php  } ?>
                        </p>
                    </td>
                    <td class="text-right">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-default" href="<?php  echo $this->createWebUrl('gifts', array('foo'=>'modify', 'id'=>$row['id']))?>"><i class="fa fa-edit"></i> 编辑</a>
                            <a class="btn btn-default" href="<?php  echo $this->createWebUrl('gifts', array('foo'=>'delete', 'id'=>$row['id']))?>" onclick="return confirm('删除礼品将同时删除所有发放记录及核销数据, 如果礼品已经上线活动, 请不要进行删除.') && confirm('删除前已确定了解后果?');"><i class="fa fa-remove"></i> 删除</a>
                        </div>
                    </td>
                </tr>
                <?php  } } ?>
            </table>
        </div>
        <div class="panel-footer">
            <a class="btn btn-default" href="<?php  echo $this->createWebUrl('gifts', array('foo'=>'create'))?>">新增礼品</a>
        </div>
    </div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
