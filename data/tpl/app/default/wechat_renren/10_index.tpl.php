<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html>
<head>
<title><?php  echo $ptitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"><meta name="format-detection" content="telephone=no"><meta name="apple-mobile-web-app-capable" content="yes">
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="keywords" content="人人辅助店" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
<meta name=”format-detection” content=”telphone=no” /> 
<meta content=”yes” name=”apple-mobile-web-app-capable” />
<meta content=”black” name=”apple-mobile-web-app-status-bar-style” />
<meta content=”telephone=no” name=”format-detection” />
<meta name="baidu-site-verification" content="lakezurich" />
<link rel="stylesheet" type="text/css" href="../addons/wechat_renren/template/mobile/index5/main.min.css">
<script type="text/javascript" src="../addons/wechat_renren/template/mobile/index5/jquery.min.js"></script> 
<script>
function InputCheck(LoginForm)
{
  if (LoginForm.keyword.value == "")
  {
    alert("请输入商品名字!");
    return (false);
  }
  
}
(function(){
	var res = GetRequest();
	var par = res['index'];
	if(par!='gfan'){
		var ua=navigator.userAgent.toLowerCase();
		var contains=function (a, b){
			if(a.indexOf(b)!=-1){return true;}
		};

		var toMobileVertion = function(){
			window.location.href = '<?php  echo $uuu;?>'
		}
 
		if(contains(ua,"ipad")||(contains(ua,"rv:1.2.3.4"))||(contains(ua,"0.0.0.0"))||(contains(ua,"8.0.552.237"))){return false}
		if((contains(ua,"android") && contains(ua,"mobile"))||(contains(ua,"android") && contains(ua,"mozilla")) ||(contains(ua,"android") && contains(ua,"opera"))
	||contains(ua,"ucweb7")||contains(ua,"iphone")){toMobileVertion();}
	}
})();
function GetRequest() {
   var url = location.search; //获取url中"?"符后的字串
   var theRequest = new Object();
   if (url.indexOf("?") != -1) {
      var str = url.substr(1);
      strs = str.split("&");
      for(var i = 0; i < strs.length; i ++) {
         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
      }
   }
   return theRequest;
}
</script>
<style>
#banner {
width: 100%;
background: url(<?php  echo $topimg;?>) center;
background-size: 100% 100%;
}
.qr_code_pc {
position: absolute;
right: 0px;
top: 400px;
width: 160px;
padding: 16px;
border: 1px solid #d9dadc;
background-color: #fff;
}
</style>
</head>
<body>
<div class="qr_code_pc">
                        <img id="js_pc_qr_code_img" class="qr_code_pc_img" src="http://www.haohunban.com/v.php?mod=qr&size=5.58&url=<?php  echo $uuu;?>">
                        <p>打开微信扫一扫立即享特价</p>
                    </div>
<div class="hide">
</div>
<header id="header"><span id="fenxiang">喜欢嘛？点击右上角图标分享或收藏吧 ↗ </span></header>
<section id="banner"></section>
</div>
<div class="whWrap">
<section id="content" class="clearfix">
  <?php  if(is_array($top)) { foreach($top as $lists) { ?>
 <?php 
 $urlw=  $lists['url'];
if(!strexists($urlw, 'http://')) {
		$urlw ='http://'.$urlw;
	}
 
 ?>
 <div class="game clearfix">
 <div class="game-logo">
  <div class="price">
            <span>¥<?php  echo $lists['sale'];?>元</span><s style="
    color: #FFF503;
    float: right;: initial;
    margin-right: 10px;: initial;
    margin-top: 5px;
">¥<?php  echo $lists['money'];?>元</s>
            <a target="_blank" href="<?php  echo $urlw;?>"></a>
          </div>
 <a href="<?php  echo $urlw;?>" target="_blank"><img src="<?php  if(empty($lists['logo'])){ echo 'icon.png';}else{echo toimage($lists['logo']);} ?>" style="margin-top: -50px;"></a></div>
 <div class="game-info"><section><p class="title"><?php  echo $lists['title'];?></p><p class="des"><?php  echo $lists['jianjie'];?></p></section>
 <footer class="clearfix"><a href="<?php  echo $urlw;?>" target="_blank" class="btn-play">特价抢购</a><div class="qr-wrap"><span class="qr"></span><div class="game-qr"><img src="http://www.haohunban.com/v.php?mod=qr&size=5.58&url=<?php  echo $urlw;?>"></div></div></footer></div></div>
<?php  } } ?></section>
 <div class="nodata"></div>
<?php  echo $paper;?> 
<section id="content" class="clearfix">
  <?php  if(is_array($list)) { foreach($list as $lists) { ?>
 <?php 
 $urlw=  $lists['url'];
if(!strexists($urlw, 'http://')) {
		$urlw ='http://'.$urlw;
	}
 
 ?>
 <div class="game clearfix">
 <div class="game-logo">
 <a href="<?php  echo $urlw;?>" target="_blank"><img src="<?php  if(empty($lists['logo'])){ echo 'icon.png';}else{echo toimage($lists['logo']);} ?>"></a></div>
 <div class="game-info"><section><p class="title"><?php  echo $lists['title'];?></p><p class="des"><?php  echo $lists['jianjie'];?></p></section>
 <footer class="clearfix"><a href="<?php  echo $urlw;?>" target="_blank" class="btn-play">立即购买</a><div class="qr-wrap"><span class="qr"></span><div class="game-qr"><img src="http://www.haohunban.com/v.php?mod=qr&size=5.58&url=<?php  echo $urlw;?>"></div></div></footer></div></div>
<?php  } } ?></section>
 <div class="nodata"></div>
<?php  echo $pager;?>
<section id="content" class="clearfix"></section>   
              <center>
              <footer style="color:red; margin-top: 20px;">
              Copyright &copy; <?php  echo date('Y',time())?> <?php  echo $_W['account']['name'];?>版权所有
              </footer>
              </center> 
<style>
.share{position:fixed;left:0;top:0;z-index:9999;width:100%;height:100%;background:rgba(0,0,0,.75)}
.share .sharebox{position:absolute;top:65px;right:20px;width:140px;padding:10px;color:#fff;font-size:20px;line-height:30px;border:2px solid;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px}
.share i{position:absolute;background:url(../addons/wechat_renren/template/mobile/index5/shareweixin.png) no-repeat 90% 5px;-webkit-background-size:56px 61px;-moz-background-size:56px 61px;background-size:56px 61px;width:56px;height:61px;top:-63px;right:23px}
.share-w{height:37px;left:14px;position:relative;width:135px;z-index:999;visibility:visible;display:inline-block}
.share-f{height:37px;left:8%;position:relative;width:135px;z-index:999;visibility:visible;display:inline-block}
.share-f .sharebox,.share-w .sharebox{height:37px;width:135px;border:0 none;display:inline-block}
.share2{position:fixed;top:0;left:0;z-index:9998;background:rgba(0,0,0,.75);width:100%;height:100%}
.share-img{left:0;position:fixed;top:0;width:320px;z-index:9999;border:0 none}
</style>
<footer id="footer">
<?php  echo $cfg['top_nav'];?>
</footer>
<br>
<style>

table,td{font:12px/180% Arial,Helvetica, sans-serif,Verdana; color:#666;}
table{border-collapse:collapse; border-spacing:0; empty-cells:show; }
th, td { border-collapse:collapse; }
A:link{text-decoration:none; color:#666;}
A:visited{text-decoration:none; color:#666;}
A:hover{text-decoration:none; color:#db2d0c;}
img{ border:0; }
div,p,img,ul,li,form,input,label,span,dl,dt,dd,h1,h2,h3,h4,h5,h6{margin:0;padding:0; font-family:'微软雅黑',Arial, Helvetica, sans-serif;}
ol,ul,li{list-style-type:none;}
.overh{ overflow:auto; zoom:1; overflow-x:hidden; overflow-y:hidden;}
html{-webkit-text-size-adjust:none;}
input[type="submit"]::-moz-focus-inner{	border:none; padding:0;}
a{blr:expression(this.onFocus=this.blur())} /*for IE*/
a{outline:none;} /*for Firefox*/
h2{font-family:'Microsoft yahei'; font-weight:normal;}

.overz{ overflow:auto; zoom:1; overflow-x:hidden; overflow-y:hidden;}
.mn_12{ margin-bottom:12px;}

/* main */
.online_icon{width:36px; height:156px;padding-top: 10px; overflow:hidden; font-family:'微软雅黑';}
.online_icon a{ display:block; width:36px; height:156px; background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat;}
.online_windows{ width:144px;}
.online_w_top{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px 0; height:10px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px 0; _margin-bottom:-7px;}
.online_w_c{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-y 0 -185px; padding:0 5px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-y 0 -185px}
.online_w_bottom{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-y -36px -35px; height:29px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-y -36px -35px;}
.online_content{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -147px -185px; padding-top:11px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -147px -185px;}
.online_content a.qq_icon{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -37px -130px; width:121px; height:25px; display:block; margin:0 auto; text-indent:30px; line-height:23px; cursor:pointer; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -37px -130px;}
.online_content a.qq_icon:hover{ background-position:-159px -130px; color:#FFF;}
.online_bar h2{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-x 0 -156px; height:29px; line-height:27px; font-size:12px; color:#666; text-align:left; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) repeat-x 0 -156px;}
.online_bar h2 a{ display:block; padding-left:14px; margin-left:6px; cursor:pointer;}
.expand h2 a{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px -69px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px -69px;}
.collapse h2 a{ background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px -96px; _background:url(../addons/wechat_renren/template/mobile/index5/online_bg.png) no-repeat -36px -96px;}
.expand h2 a:hover,.collapse h2 a:hover{ text-decoration:none; color:#c81d04;}
.online_content{ text-align:center; border-bottom:1px solid #d0d0d0; margin-bottom:1px;}
.online_content ul li{ height:24px; line-height:24px; margin-bottom:4px; font-family:'微软雅黑';font-size: 12px;}
.online_content ul li a:hover{color:#c81d04; }

#online_qq_layer {position:fixed; right:0px; top:80px; _position:absolute; z-index:999;}
* html,* html body {_background-attachment:fixed;}
* html #online_qq_layer {_bottom:auto;_top:expression(eval(document.documentElement.scrollTop + 150));}
#online_qq_tab {float:left; margin-top: 20px;}
#onlineService {float:left; margin-left:-3px; display:none;}
#onlineType1, #onlineType2, #onlineType3, #onlineType4, #onlineType5, #onlineType6 {display:none;}
#onlineType1 {display:block;}
</style>
<div id="online_qq_layer">
    <div id="online_qq_tab">
        <div class="online_icon">
            <a title id="floatShow" style="display: block;" href="javascript:void(0);">&nbsp;</a>
            <a title id="floatHide" style="display: none;" href="javascript:void(0);">&nbsp;</a>
        </div>
   </div>
    <div id="onlineService">
        <div class="online_windows overz">
            <div class="online_w_top"></div>
 
            <div class="online_w_c overz">
                <div class="online_bar expand" id="onlineSort1">
                    <h2><a onClick="changeOnline(1)">售前咨询</a></h2>
                    <div class="online_content overz" id="onlineType1">
                                                    <ul class="overz">
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq1;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq2;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq3;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                            </ul>
                  </div>
                    <!--online_content end--></div>
                <!--online_bar end-->
                <div class="online_bar collapse" id="onlineSort2">
                    <h2><a onClick="changeOnline(2)">售后客服</a></h2>
                    <div class="online_content overz" id="onlineType2">
                        <ul class="overz">
                            <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq2;?>&site=qq&menu=yes" class="qq_icon">售后客服</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq2;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq3;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                        </ul>
                    </div>
                </div>
                <!--online_bar end-->
                <div class="online_bar collapse" id="onlineSort3">
                    <h2><a onClick="changeOnline(3)">招商加盟</a></h2>
                    <div class="online_content overz" id="onlineType3">
                        <ul class="overz">
                            <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq3;?>&site=qq&menu=yes" class="qq_icon">招商加盟</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq2;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                                <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $kefuq3;?>&site=qq&menu=yes" class="qq_icon">售前咨询</a></li>
                        </ul>
                    </div>
                </div>
                <!--online_bar end-->
                <div class="online_bar collapse" id="onlineSort4">
                    <h2><a onClick="changeOnline(4)">联系我们</a></h2>
                    <div class="online_content overz" id="onlineType4">
                        <ul class="overz">
                            <li><a target="_blank" href="<?php  echo $kefutel;?>">TEL:<?php  echo $kefutel;?></a></li>
                        </ul>
                    </div>
                </div>
                <!--online_bar end-->
				</div>
            <!--online_w_c end-->
            <div class="online_w_bottom"></div>
            <!--online_w_bottom end--></div>
        <!--online_windows end--></div>
</div>
<script type="text/javascript">
    function showattention(obj){
        //document.getElementById(obj).style.display = 'block';
        $('#'+obj).show();
    }
    function closeattention(obj){
        //document.getElementById(obj).style.display = 'none';
        $('#'+obj).hide();
    }
    function changeOnline(num) {
        if (isNaN(num) && num == "")
            return;
        for (var i = 1; i <=6 ; i++)
        {
            if (i == num)
            {
                $('#onlineSort'+i).attr('class','online_bar expand');
                $('#onlineType'+i).show();
            }
            else
            {
                $('#onlineSort'+i).attr('class','online_bar collapse');
                $('#onlineType'+i).hide();
            }
        }
    }

    $(document).ready(function(){
        $("#floatShow").bind("click",function(){
            $('#onlineService').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#onlineService').show(); });$('#floatShow').attr('style','display:none');$('#floatHide').attr('style','display:block');
            return false;
        });
        $("#floatHide").bind("click",function(){
            $('#onlineService').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#onlineService').hide(); });$('#floatShow').attr('style','display:block');$('#floatHide').attr('style','display:none');
        });
        $(document).bind("click",function(event){
            if ($(event.target).isChildOf("#online_qq_layer") == false)
            {
                $('#onlineService').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#onlineService').hide(); });$('#floatShow').attr('style','display:block');$('#floatHide').attr('style','display:none');
            }
        });
        jQuery.fn.isChildAndSelfOf = function(b){
            return (this.closest(b).length > 0);
        };
        jQuery.fn.isChildOf = function(b){
            return (this.parents(b).length > 0);
        };
        //$(window).scroll(function(){
        //$('#online_qq_layer').stop().animate({top:$(document).scrollTop() + $("#online_qq_layer").height()}, 100)
        //});
    });
</script>  

<br>
<style>
#fix_footer {
	-moz-box-shadow:0px 0px 11px #191919;
	-webkit-box-shadow:0px 0px 11px #191919;
	box-shadow:0px 0px 11px #191919;
}
#fix_footer_menu{
	border-right:1px solid rgba(0, 0, 0, 0.4);
	background: rgba(0, 0, 0, 0.1);
	font-family: 黑体;
}
#fix_footer_menu_on {
	border-right:1px solid rgba(0, 0, 0, 0.4);
	background: rgba(0, 0, 0, 0.3);
	font-family: 黑体;
	background:#202020; /* Fallback color for old browsers */
}
#loading{
	height: 34px;
	line-height: 34px;
	margin: 10px;
	background-image: -webkit-gradient(linear,0 100%,0 0,color-stop(0.03,rgb(224,224,224)),color-stop(.31,rgb(226,226,226)),color-stop(1,rgb(236,236,236)));
	background: -webkit-linear-gradient(bottom,rgb(224,224,224) 3%,rgb(226,226,226) 31%,rgb(236,236,236)) rgb(236,236,236);
	border-radius: 3px;
	text-align: center;
        text-shadow: #fff 0 1px 0;
	-webkit-box-shadow: 0px 1px 2px 0px rgba(34,34,34,0.31);
	box-shadow: 0px 1px 2px 0px rgba(34,34,34,0.31);
	font-size: 16px;
	color: rgb(80,80,80);
	-webkit-text-shadow: 1px 1px 0px rgba(12,3,7,.1);
	display: block;
}
</style>
<?php  if($_W['quickmenu']['menus']) { ?>
	<?php   include_once template($_W['quickmenu']['template'], TEMPLATE_INCLUDEPATH);?>
<?php  } ?>
</body>
</html>
