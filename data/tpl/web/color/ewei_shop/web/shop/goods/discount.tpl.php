<?php defined('IN_IA') or exit('Access Denied');?>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
    <div class="col-sm-6 col-xs-6">
      <div class='alert alert-info'>
    只有当折扣大于0，小于10的情况下才能生效，否则按自身会员等级折扣计算
</div>
    </div>
</div>  

<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">会员等级折扣<br/>0.1-10之间</label>
    <div class="col-sm-6 col-xs-6">
        <div class='input-group'>
           <div class='input-group-addon'>默认等级</div>
           <input type='text' name='discounts[default]' class="form-control" value="<?php  echo $discounts['default']?>" />
           <div class='input-group-addon'>折</div>
       </div>
    </div>
</div>   
    <?php  if(is_array($levels)) { foreach($levels as $level) { ?>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
    <div class="col-sm-6 col-xs-6">
        <div class='input-group'>
           <div class='input-group-addon'><?php  echo $level['levelname'];?></div>
           <input type='text' name='discounts[level<?php  echo $level['id'];?>]' class="form-control"  value="<?php  echo $discounts['level'.$level['id']]?>" />
           <div class='input-group-addon'>折</div>
       </div>
    </div>
</div>   
<?php  } } ?>