<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
	<ul class="nav nav-tabs">
		<li <?php  if($state =='0' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order');?>">未处理</a></li>
		<li <?php  if($state =='1' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order',array('state' => '1'));?>">已派单</a></li>
		<li <?php  if($state =='2' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order',array('state' => '2'));?>">已收取</a></li>
		<li <?php  if($state =='3' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order',array('state' => '3'));?>">服务一</a></li>
		<li <?php  if($state =='4' ) { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('order',array('state' => '4'));?>">服务二</a></li>
		<li <?php  if($state =='5' ) { ?> class="active"<?php  } ?> ><a href="<?php  echo $this->createWebUrl('order',array('state' => '5'));?>">已结束</a></li>
		
	</ul>
	<div class="panel panel-info">
		<div class="panel-heading">当前搜索条件下订单数量： <?php  echo $total;?> </div>
		    <div class="panel-body">
        <form action="<?php  echo $this->createWebUrl('order', array('state' => $state))?>" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">订单号</label>
                <div class="col-sm-8 col-lg-9">
                    <input class="form-control" name="ordercode" id="" type="text" value="<?php  echo $_GPC['ordercode'];?>">
                </div>
                                <div class=" col-xs-12 col-sm-2 col-lg-2">
                    <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                </div>
            </div>
            <div class="form-group">
            </div>
        </form>
    </div>
		
		
	</div>

	<div class="panel panel-default">
		<div class="panel-body table-responsive">
			<table class="table table-hover">
				<thead class="navbar-inner">
					<tr>
						<th style="width: 50px;">序号</th>
						<th style="width: 135px;">订单编号</th>
						<th style="width: 160px;">下单时间</th>
						<th style="width: 100px;">客户</th>
						<th style="width: 130px;">电话</th>
                        <!--<th style="width: 270px;">地址</th>-->
						<th style="width: 120px; text-align: right;">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($list)) { foreach($list as $item) { ?>
					<tr>
						<td><?php  echo $item['id'];?></td>
						<td><?php  echo $item['ordercode'];?></td>
						<td><?php  echo $item['ordertime'];?></td>
						<td><?php  echo $item['customername'];?></td>
						<td><?php  echo $item['customertel'];?></td>
						<!--<td><?php  echo $item['customercity'];?><?php  echo $item['customerarea'];?><?php  echo $item['xiangxdz'];?></td>-->
						<td style="text-align: right;">
							<a class="btn btn-success btn-sm"
							href="<?php  echo $this->createWebUrl('showorder', array('orderid' => $item['id']))?>"
							title="编辑"><i class="icon-edit"></i>订单管理</a> 
							<a class="btn btn-default btn-sm" href="#"
							onclick="drop_confirm('确定要删除吗?','<?php  echo $this->createWebUrl('showorder',array('op'=>'delete','orderid'=>$item['id']))?>');"
							title="删除"><i class="icon-remove"></i>删除</a></td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</div>
		<?php  echo $pager;?>
	</div>
</div>

<script type="text/javascript">
    function drop_confirm(msg, url){
        if(confirm(msg)){
            window.location = url;
        }
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
