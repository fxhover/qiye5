<?php 
require 'header.php';
$GLOBALS['page'] = 'index';
?>

<body>

<input type="hidden" value="1" name="_user_level_val" />
								<script type="text/javascript" language="javascript" src="http://static.websiteonline.cn/website/script/??jquery-1.6.4.js,jquery.custom.js,jquery.lazyload.js,jquery.rotateutility.js,lab.js,wopop_all.js,jquery.cookie.js,jquery.simplemodal.js,fullcollumn.js,ierotate.js,effects/velocity.js,effects/velocity.ui.js,effects/effects.js,fullpagescroll.js,common.js,heightAdapt.js?v=14805038"></script>
	<script type="text/javascript" language="javascript">

    	//js版本url生成函数
		var webmodel = {};
	function parseToURL(module,action,anotherparams){
		webmodel = {};
		var defaultparams = {"_m": module,"_a": action};
	
		var urlparams=$.extend({}, anotherparams, defaultparams, webmodel);
		var paramstr=$.param(urlparams);
		return "http://textile-3.view.sitestar.cn/index.php?"+paramstr;
	}
	
	function getImageProcessType(){
		     return 1;
	}
	
	function parseToAdminURL(module,action,anotherparams){
		var defaultparams={'_m':module,'_a':action,'domain':'tpl-cac847b',"SessionID":''}
		var urlparams=$.extend({}, anotherparams, defaultparams, webmodel);
		var paramstr=$.param(urlparams);
		return "http://textile-3.view.sitestar.cn/admin/index.php?"+paramstr;
	}
	function getSiteCurLang(){return 'zh_CN';}
	function getPreviewSiteCurLang(){return 'zh_CN';}

	function relativeToAbsoluteURL(relativeurl,nostatic){
		
		if(nostatic=='1'){
			return "http://textile-3.view.sitestar.cn/"+relativeurl;
		}else{
			return "http://static.websiteonline.cn/website/"+relativeurl;
		}
	}
	
	function getSystemCurrentDomain(){return 'tpl-cac847b';}
	function getWebSiteType(){return 'pc';}
	function getSystemSession(){return '';}
	// IE9以下浏览器禁止编辑手机站 2014/04/28
		if($.browser.msie && ($.browser.version < 7)){
					location.href = parseToURL("wp_frontpage","browser");
			}
	//-->
	</script>

<div id="page_set_css">
<style>
/*layer29C65FFDA5A779C5F0101630E86F0C1E*/  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E, #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul {padding:0; margin:0; list-style:none; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E {padding-left:15px; padding-right:15px;position:relative; background-position:top left;background-repeat:repeat-x;background-color:transparent;background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dbj.jpg");line-height:50px;height:50px; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop {text-align:center;float:left; height:50px;line-height:50px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:transparent;background-position:top left;background-repeat:repeat;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{text-align:center; background-color:transparent;background-position:top left;height:50px;line-height:50px; background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dhover.jpg");background-repeat:repeat-x;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a {white-space: nowrap;overflow:hidden;padding-left:15px;padding-right:15px;text-align:center;display:block;  font-family:arial; font-size:14px; color:#FFFFFF; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#333333;text-align:center;font-family:arial; font-size:14px; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul{display:none;width:100%;position:absolute; top:38px; left:-9999px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-repeat:repeat;background-color:transparent;background-position:top left;padding-bottom:3px;padding-top:3px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li{text-align:center;float:left; background-color:#fbfbfb;background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);height:25px;line-height:25px;font-weight:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li:hover{text-align:center;  background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:#2f2f2f;height:25px;line-height:25px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a {white-space: nowrap;color:#666666;text-align:center;float:left; display:block; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a:hover{color:#fff;text-align:center;float:left; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li ul.floatRight li {float:right;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul ul {background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#FFFFFF;} /*layer29C65FFDA5A779C5F0101630E86F0C1E*//*layer29C65FFDA5A779C5F0101630E86F0C1E*/  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E, #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul {padding:0; margin:0; list-style:none; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E {padding-left:15px; padding-right:15px;position:relative; background-position:top left;background-repeat:repeat-x;background-color:transparent;background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dbj.jpg");line-height:50px;height:50px; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop {text-align:center;float:left; height:50px;line-height:50px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:transparent;background-position:top left;background-repeat:repeat;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{text-align:center; background-color:transparent;background-position:top left;height:50px;line-height:50px; background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dhover.jpg");background-repeat:repeat-x;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a {white-space: nowrap;overflow:hidden;padding-left:15px;padding-right:15px;text-align:center;display:block;  font-family:arial; font-size:14px; color:#FFFFFF; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#333333;text-align:center;font-family:arial; font-size:14px; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul{display:none;width:100%;position:absolute; top:38px; left:-9999px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-repeat:repeat;background-color:transparent;background-position:top left;padding-bottom:3px;padding-top:3px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li{text-align:center;float:left; background-color:#fbfbfb;background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);height:25px;line-height:25px;font-weight:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li:hover{text-align:center;  background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:#2f2f2f;height:25px;line-height:25px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a {white-space: nowrap;color:#666666;text-align:center;float:left; display:block; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a:hover{color:#fff;text-align:center;float:left; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li ul.floatRight li {float:right;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul ul {background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#FFFFFF;}  /*layer29C65FFDA5A779C5F0101630E86F0C1E*//*layer50E5F6326E89416FB7B2359753C8A9EE*/.wp-diy-selectedc{ width:auto; height:22px;line-height:22px; background:#fff;-moz-border-radius:2px; -webkit-border-radius:2px; border-radius:2px; border:1px solid #b5b5b5; }  .wp-diy-selectedc-left{ float:left; padding:0 5px; }  .wp-diy-selectedc-button{ float:right;}  .wp-diy-selectedc-button a{ display:block; width:14px; height:22px; overflow:hidden; background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button.png) no-repeat;}  .wp-diy-selectedc-button a.disabled {background:url(http://static.websiteonline.cn/website/plugin/multilingual/styles/simple/images/wp-diy-selected-button2.gif) no-repeat;cursor:default;}  .wp-diy-selectedc-content{ margin-left:1px;background:#FFF; border:1px solid #b5b5b5; border-top:none; display:none; position:absolute; max-height:110px; overflow-y:auto; overflow-x:hidden; z-index:1111; }  .wp-diy-selectedc-content ul li{ height:22px; line-height:22px; text-indent:5px;}  .wp-diy-selectedc-content ul li.local{ background:#333333; color:#FFF; cursor:pointer;}/*layer50E5F6326E89416FB7B2359753C8A9EE*/	
</style>	
</div><input type="hidden" id="page_id" name="page_id" value="115" rpid="115">
<div id="scroll_container" class="scroll_contain" style="">
	<div id="scroll_container_bg" style="background-color:transparent;background-position:center bottom;background-repeat:repeat;">&nbsp;</div>
<script>
initScrollcontainerHeight();	
</script>
	<div id="canvas" style="border-bottom: 2px solid transparent;margin: 0 auto;width:980px;;height:1137px">
	<div id="layerDFE601D0BC127A088025DC889B6C690E" class="full_column"   style="width:980px;position:absolute;top:0px;height:100px;z-index:100;">	
		<div class="full_width" style="position:absolute;height:100px;background-color:#3d3d3d;">	</div>
		<div class="full_content" style="width:980px; position:absolute;left:0;top:0;margin-left: 0px;;height:100px;">
			<div id='layer29C65FFDA5A779C5F0101630E86F0C1E' type='new_navigation'  class='cstlayer' style='left: 267px; top: 27px; position: absolute; z-index: 101; width: 556px; height: 50px;'  mid=""  fatherid='layerDFE601D0BC127A088025DC889B6C690E'   deg='0'><div class="wp-new_navigation_content" style="border-color: transparent; border-width: 0px; width: 556px; display: block; overflow: visible; height: auto;;display:block;overflow:hidden;height:0px;" type="0">
<script type="text/javascript"> 
				$("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datasty_", '@charset "utf-8";  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E, #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul {padding:0; margin:0; list-style:none; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E {padding-left:15px; padding-right:15px;position:relative; background-position:top left;background-repeat:repeat-x;background-color:transparent;background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dbj.jpg");line-height:50px;height:50px; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop {text-align:center;float:left; height:50px;line-height:50px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:transparent;background-position:top left;background-repeat:repeat;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{text-align:center; background-color:transparent;background-position:top left;height:50px;line-height:50px; background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dhover.jpg");background-repeat:repeat-x;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a {white-space: nowrap;overflow:hidden;padding-left:15px;padding-right:15px;text-align:center;display:block;  font-family:arial; font-size:14px; color:#FFFFFF; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#333333;text-align:center;font-family:arial; font-size:14px; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul{display:none;width:100%;position:absolute; top:38px; left:-9999px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-repeat:repeat;background-color:transparent;background-position:top left;padding-bottom:3px;padding-top:3px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li{text-align:center;float:left; background-color:#fbfbfb;background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);height:25px;line-height:25px;font-weight:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li:hover{text-align:center;  background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:#2f2f2f;height:25px;line-height:25px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a {white-space: nowrap;color:#666666;text-align:center;float:left; display:block; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a:hover{color:#fff;text-align:center;float:left; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li ul.floatRight li {float:right;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul ul {background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);}');
		$("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datastys_", '#nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#FFFFFF;}');
	</script>

<?php require 'menu.php';?>

<script type="text/javascript"> 
				$("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datasty_", '@charset "utf-8";  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E, #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul {padding:0; margin:0; list-style:none; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E {padding-left:15px; padding-right:15px;position:relative; background-position:top left;background-repeat:repeat-x;background-color:transparent;background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dbj.jpg");line-height:50px;height:50px; }  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop {text-align:center;float:left; height:50px;line-height:50px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:transparent;background-position:top left;background-repeat:repeat;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{text-align:center; background-color:transparent;background-position:top left;height:50px;line-height:50px; background-image:url("http://static.websiteonline.cn/website/plugin/new_navigation/styles/hs9/dhover.jpg");background-repeat:repeat-x;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a {white-space: nowrap;overflow:hidden;padding-left:15px;padding-right:15px;text-align:center;display:block;  font-family:arial; font-size:14px; color:#FFFFFF; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#333333;text-align:center;font-family:arial; font-size:14px; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul{display:none;width:100%;position:absolute; top:38px; left:-9999px;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-repeat:repeat;background-color:transparent;background-position:top left;padding-bottom:3px;padding-top:3px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li{text-align:center;float:left; background-color:#fbfbfb;background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);height:25px;line-height:25px;font-weight:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li:hover{text-align:center;  background-position:top left;background-repeat:repeat;background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);background-color:#2f2f2f;height:25px;line-height:25px;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a {white-space: nowrap;color:#666666;text-align:center;float:left; display:block; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a:hover{color:#fff;text-align:center;float:left; padding:0 10px 0 10px; font-family:arial; font-size:12px; text-decoration:none; font-weight:normal;font-style:normal;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li ul.floatRight li {float:right;}  #nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul ul {background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);}');
		$("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datastys_", '#nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-image:url(http://static.websiteonline.cn/website/plugin/new_navigation/view/images/png_bg.png);} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop:hover{background-color:transparent;} #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li.wp_subtop>a:hover{color:#FFFFFF;}');
	</script>

<script type="text/javascript" language="javascript" src="http://static.websiteonline.cn/website/plugin/new_navigation/js/overall.js?v=14761654"></script>
<script type="text/javascript">
function wp_get_navstyle(layer_id,key){
		var navStyle = $.trim($("#"+layer_id).data(key));
		return navStyle;	
	
}	
richtxt('layer29C65FFDA5A779C5F0101630E86F0C1E');
</script><script type="text/javascript">
function layer29C65FFDA5A779C5F0101630E86F0C1E_liHoverCallBack()
{
	$(".menu_hs9 #nav_layer29C65FFDA5A779C5F0101630E86F0C1E li").hover(function(){
				$(this).children("ul").css("left", "0px").show();
	},function(){
		$(this).children("ul").hide();

		
	});

}
	
function layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss(css_pro,type)
{
	var typeval=type;
	if(typeval==1){
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}else if(typeval == 2){
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}else if(typeval == 3){
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}
	else{
		var regex = "#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{\\s*"+css_pro+"\\s*:[^;]+";
	}
		var navStyle = $.trim($("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datastys_"));
		if(navStyle.length > 0)
	{
		var patt1 =new RegExp(regex,'i');
		var tmp = patt1.exec($.trim(navStyle));
		if(tmp)
		{
			return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':',''));
		}
	}
		navStyle = $.trim($("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datasty_"));
	 
	if(navStyle.length > 0)
	{
		if(typeval==1){
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul+\\s+li+\\s+a:\\s*hover\\s*{[^}]+}",'i');
		}else if(typeval == 2){
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*{[^}]+}",'i');
		}else if(typeval == 3){
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*:\\s*hover\\s*{[^}]+}",'i');
		}else{
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+li\.wp_subtop>a:\\s*hover\\s*{[^}]+}",'i');
		}
		var tmp = patt1.exec(navStyle);
		
		if(tmp)
		{
			var tmp1 = tmp[0].match(/{[^}]+}/)[0];
			var patt2 = new RegExp(css_pro+"\\s*:\\s*[^;]+;",'i');
			tmp = patt2.exec(tmp1);
			if(tmp) return $.trim(tmp[0].replace(/[^:]+:/,'').replace(';',''));
		}
	}

	return $.trim($("#nav_layer29C65FFDA5A779C5F0101630E86F0C1E ul li a").css(css_pro));
}

layer29C65FFDA5A779C5F0101630E86F0C1E_liHoverCallBack;
$('#layer29C65FFDA5A779C5F0101630E86F0C1E').layer_ready(function(){
	layer29C65FFDA5A779C5F0101630E86F0C1E_liHoverCallBack();

	//第三级即下级菜单随高度增加位置动态修改
	$('#layer29C65FFDA5A779C5F0101630E86F0C1E .menu_hs9 li').hover(function(){
		$(this).children('ul').css('top',$(this).outerHeight());
	});

	function getSubMenuHoverCsslayer29C65FFDA5A779C5F0101630E86F0C1E(css_pro,regex,isLi)
	{
				var navStyle = $.trim($("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datastys_"));
				if(navStyle.length > 0)
		{
			var patt1 =new RegExp(regex,'i');
			var tmp = patt1.exec($.trim(navStyle));
			if(tmp)
			{
				return $.trim((tmp[0].match(/{[^:]+:[^;]+/)[0]).match(/:[^;]+/)[0].replace(':',''));
			}
		}
						navStyle = $.trim($("#layer29C65FFDA5A779C5F0101630E86F0C1E").data("datasty_"));
			 
		
		if(navStyle.length > 0)
		{
			var patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s+a\\s*\\s*{[^}]+}",'i');
			if(isLi)
				patt1 = new RegExp("#nav_layer[0-9|a-z|A-Z]+\\s+ul\\s+li\\s*\\s*{[^}]+}",'i');
			var tmp = patt1.exec(navStyle);
			
			if(tmp)
			{
				var tmp1 = tmp[0].match(/{[^}]+}/)[0];
				var patt2 = new RegExp(css_pro+"\\s*:\\s*[^;]+;",'i');
				tmp = patt2.exec(tmp1);
				if(tmp) return $.trim(tmp[0].replace(/[^:]+:/,'').replace(';',''));
			}
		}
		return false;
	}
	
	$("#layer29C65FFDA5A779C5F0101630E86F0C1E li").hover(function(){ 			
			var thisleft=$(this).offset().left;
			var thiswidth=$(this).outerWidth();	
			//父中心点坐标
			var thiswidthcenter=0;
			//子中心点坐标
			var thischildwidthcenter=0;			
			var orgleft = $("#layer29C65FFDA5A779C5F0101630E86F0C1E").offset().left;
			var orgright = $("#layer29C65FFDA5A779C5F0101630E86F0C1E").outerWidth();
			orgright=orgright+orgleft;
			thiswidthcenter=thisleft+thiswidth/2;

			//计算子菜单总宽度
			var childlidom=$(this).children('ul').children('li');
			var childliwidth=0;
			childlidom.each(function(){
				childliwidth=childliwidth+$(this).outerWidth();			
			});
			
			thischildwidthcenter=childliwidth/2;			
			var chavalue=thiswidthcenter-thischildwidthcenter;
			var charightvalue=thiswidthcenter+thischildwidthcenter;			
			
			var ulwidth=$("#layer29C65FFDA5A779C5F0101630E86F0C1E").width();
			if(chavalue<orgleft && charightvalue>orgright){ 
				//超出边界不做处理			
			}else{
				if(chavalue>orgleft && charightvalue<orgright){
					$(this).children("ul:eq(0)").css("padding-left", (chavalue-orgleft)+"px");				
					if(ulwidth>0){
						$(this).children("ul:eq(0)").css("width", (ulwidth-chavalue+orgleft)+"px");
					}	
				}else{
					if(chavalue>orgleft && charightvalue>orgright){
						$(this).children("ul:eq(0)").css("padding-left", (ulwidth-childliwidth)+"px");
						if(ulwidth>0){
							if(childliwidth>ulwidth) childliwidth=ulwidth;
							$(this).children("ul:eq(0)").css("width", (childliwidth)+"px");
						}
					}
				}		
			}
			
			if(!$(this).hasClass('wp_subtop'))
			{
				$(this).css('background-image',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-image',3));
				$(this).css('background-repeat',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-repeat',3));
				$(this).css('background-color',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-color',3));
				$(this).css('background-position',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-position',3));
			}
			if($(this).children('ul').length > 0)
			{
				$(this).children('ul').css('background-image',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-image',2));
				$(this).children('ul').css('background-repeat',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-repeat',2));
				$(this).children('ul').css('background-color',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-color',2));
				$(this).children('ul').css('background-position',layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss('background-position',2));

				$(this).children('ul').children('li').css({'background-image':'none','background-color':'transparent'});
			}
			var type=$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				var self = $(this);
				var pos = 0 ;
				var loops = 0;
				$('#nav_layer29C65FFDA5A779C5F0101630E86F0C1E').find('li').each(function(){
					if(loops == 1) return true;
					if(self.html() == $(this).html()){
						loops = 1;
						return true;
					}else{
						pos = pos + $(this).outerWidth();
					}	
					 
				})
				 
				$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.ddli').hide();
				var this_width = $('#nav_layer29C65FFDA5A779C5F0101630E86F0C1E').outerWidth();
				var thisul_left = $('#nav_layer29C65FFDA5A779C5F0101630E86F0C1E').css("padding-left");
				thisul_left = parseInt(thisul_left);
				$(this).children('.ddli').outerWidth(this_width).css("margin-left","-"+(thisul_left+pos)+"px");
				$(this).children('.ddli').eq(0).slideDown();
			}			
 
	},function(){ 
			if(!$(this).hasClass('wp_subtop'))
			$(this).css({'background-color':'transparent','background-image':'none'});
			$(this).children("ul:eq(0)").css("left", "-99999px").hide(); 
							var type=$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.wp-new_navigation_content').attr('type');
			if(type==2){
				$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.ddli').slideUp();
			}
	});

	$('.menu_hs9 #nav_layer29C65FFDA5A779C5F0101630E86F0C1E').find('li').hover(function(){
		var direction=$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.nav1').attr('direction');
		var height = parseInt($(this).outerHeight());
		if(direction==1){				
			$(this).children('ul').css('top','auto').css('bottom',height + 'px');
		}else{				
			$(this).children('ul').css('top',height+'px').css('bottom','auto');	
		}
		if($(this).parent().hasClass('navigation'))
		{			
			$(this).children('a').css({'font-family':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-family",0),'font-size':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-size",0),'color':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("color",0),'font-weight':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-weight",0),'font-style':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-style",0)});
		}else{			
			$(this).children('a').css({'font-family':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-family",1),'font-size':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-size",1),'color':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("color",1),'font-weight':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-weight",1),'font-style':layer29C65FFDA5A779C5F0101630E86F0C1E_getSubMenuHoverCss("font-style",1)});
		}
		if($(this).parent().hasClass('navigation'))
		{
			$('#nav_layer29C65FFDA5A779C5F0101630E86F0C1E .wp_subtop').removeClass("lihover").children('a').removeClass("ahover");
		}
	},function(){
		if($(this).parent().hasClass('navigation'))
		{
			wp_showdefaultHoverCss('layer29C65FFDA5A779C5F0101630E86F0C1E');
		}
		 $(this).children('a').attr("style",'');
	});
	wp_showdefaultHoverCss('layer29C65FFDA5A779C5F0101630E86F0C1E');
	wp_removeLoading('layer29C65FFDA5A779C5F0101630E86F0C1E');
});
</script>

</div>
<script type="text/javascript">
$(function(){
	$("#layer29C65FFDA5A779C5F0101630E86F0C1E").find('.wp-new_navigation_content').each(function(){
		  var wid = $(this).width();
		  var liwid = $(this).find('li:eq(0)');
		  var lipadd = parseInt(liwid.css('padding-right'))+parseInt(liwid.css('padding-left'));
		  // 修复“导航条的分割线引起异常(bug#825)”问题
		  if ($.inArray('hs9', ['hs9','hs11']) != -1) {
		  	  var bwidth = parseInt(liwid.css("borderRightWidth") || '0');
		  	  if(bwidth > 0) $('li.wp_subtop', this).width(function(i, h){return h - bwidth});
		  }
            if(parseInt(liwid.width())>(wid-lipadd)){
		    $(this).find('li.wp_subtop').css('width',wid-lipadd);
		  }
		});
		
	// TASK#91 导航插件的优化 2016/05/26 ↓↓↓↓
		});
</script>

</div><script>		         $('#layer29C65FFDA5A779C5F0101630E86F0C1E').triggerHandler('layer_ready');</script><div id='layer24411D93121CC90B4604A46B687D6969' type='media'  class='cstlayer' style='left: 0px; top: 26px; position: absolute; z-index: 100; width: 229px; height: 56px;'  mid=""  fatherid='layerDFE601D0BC127A088025DC889B6C690E'   deg='0'><script>
create_pc_media_set_pic('layer24411D93121CC90B4604A46B687D6969',false);
</script>
<div class="wp-media_content"  style="overflow: hidden; width: 229px; height: 56px; border-width: 0px; border-style: solid; padding: 0px;" type="0">
<div class="img_over"  style='overflow: hidden; border-color: transparent; border-width: 0px; width: 229px; height: 56px;'>

<div class="imgloading" style="z-index:100;"> </div>
<img  id="wp-media-image_layer24411D93121CC90B4604A46B687D6969" class="img_lazy_load paragraph_image"  data-original="/images/logo.jpg" type="zoom" src="http://static.websiteonline.cn/website/template/default/images/blank.gif" style="width: 229px; height: 56px;;" />
</div>

</div>
<script>
(function(){
	var imgover=$('#wp-media-image_layer24411D93121CC90B4604A46B687D6969').closest('.img_over');
	imgover.children('.imgloading').width(imgover.width()).height(imgover.height());
	$('#layer24411D93121CC90B4604A46B687D6969').layer_ready(function(){
		layer_img_lzld('layer24411D93121CC90B4604A46B687D6969');
	})
})()	
</script>
</div><script>		         $('#layer24411D93121CC90B4604A46B687D6969').triggerHandler('layer_ready');</script><div id='layer50E5F6326E89416FB7B2359753C8A9EE' type='multilingual'  class='cstlayer' style='left: 882px; top: 41px; position: absolute; z-index: 102; width: 98px; height: 58px;'  mid=""  fatherid='layerDFE601D0BC127A088025DC889B6C690E'   deg='0'><script type="text/javascript">
function wp_multilingual_changeLang(id)
{
	$.ajax({
		type:'POST',
		url:parseToURL('multilingual','changeLang'),
		data:"id="+id,
		success:function(js_code){
			eval(js_code);
		},
		error:function(response){
			wp_alert("Choose the language.<br/>请求失败");
		}
	});
}
</script>
<div class="wp-multilingual_content" style="border-color: transparent; border-width: 0px; width: 98px; height: 58px;" langstyle="simple">
<div skin="simple" class="wp-multilingual_css" style="display:none;"></div>
<div class="wp-content">
 
    <script type="text/javascript"> 
$(function(){
	var fatherid = $("#layer50E5F6326E89416FB7B2359753C8A9EE").attr('fatherid');
	var fartherInfixed = $("#"+fatherid).attr('infixed')||0;
	if(fartherInfixed==1) $("#layer50E5F6326E89416FB7B2359753C8A9EE").find('.wp-diy-selectedc-outside').remove();
	$("#layer50E5F6326E89416FB7B2359753C8A9EE").find('select').cstselect({selectclass:'wp-diy-selectedc'});
			  
})
 
</script>

  
</div>
</div>
 <script type="text/javascript">
	$(function(){
		var custom_css = '';
		var langstyle = 'simple';
		var $curlayer = $('#layer50E5F6326E89416FB7B2359753C8A9EE');
		var custom_a_font_size = $curlayer.find('.wp-content .custom_dom_class').css('font-size');
		var custom_a_color = $curlayer.find('.wp-content .custom_dom_class').css('color');
		if(custom_a_font_size){
			$curlayer.find('.wp-content .custom_dom_class a').css('font-size',custom_a_font_size);
		}
		if(custom_a_color){
			$curlayer.find('.wp-content .custom_dom_class a').css('color',custom_a_color);
		}
		if((langstyle == 'default' || langstyle == 'yellow') && custom_css == ''){
			$curlayer.find('.wp-content p.custom_dom_class a').css('color','red');
		}
		$curlayer.find('.wp-content .custom_dom_class a').css('font-family','microsoft yahei');
		$(".aout_over").click(function(){$(".text-a").slideToggle(100);});
		setTimeout(function(){
			var text_a_font_size = $curlayer.find('.wp-content .custom_dom_class a').css('font-size') || '12px';
			var text_a_color = $curlayer.find('.wp-content .custom_dom_class .aout').css('color') || '#ffffff';
			var text_a_bgcolor = $curlayer.find('.wp-content .custom_dom_class').css('background-color') || '#ffffff';
			var text_a_border_radius = $curlayer.find('.wp-content .custom_dom_class .aout').css('border-radius') || '5px';
			var $text_a = $curlayer.find('.wp-content .custom_dom_class .text-a');
			if(text_a_font_size){$text_a.find('a').css('font-size',text_a_font_size);}
			if(text_a_color){$text_a.find('a').css('color',text_a_color);}
			if(text_a_bgcolor){$text_a.css('background-color',text_a_bgcolor);}
			if(text_a_border_radius){$text_a.css('border-radius',text_a_border_radius);}
		},400);
	});
</script>
</div><script>		         $('#layer50E5F6326E89416FB7B2359753C8A9EE').triggerHandler('layer_ready');</script>		</div>
</div>
<script>
$('#layerDFE601D0BC127A088025DC889B6C690E .full_width').css({left:0-$('#canvas').offset().left+$('#scroll_container').offset().left-$('#scroll_container').scrollLeft()-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});	
</script>


<div id="layer18E8B43CC4D092A82087965AE9286C68" class="full_column"   style="width:980px;position:absolute;top:101px;height:519px;z-index:101;">	
		<div class="full_width" style="position:absolute;height:519px;background-size:100%;background-image:url('/images/banner.jpg');background-position:center top;background-repeat:no-repeat;">	</div>
		<div class="full_content" style="width:980px; position:absolute;left:0;top:0;margin-left: 0px;;height:519px;">
					</div>
</div>
<script>
$('#layer18E8B43CC4D092A82087965AE9286C68 .full_width').css({left:0-$('#canvas').offset().left+$('#scroll_container').offset().left-$('#scroll_container').scrollLeft()-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});	
</script>


<div id='layerEE7E0D22488B830AE628200036F33E7C' type='title'  class='cstlayer' style='left: 437px; top: 621px; position: absolute; z-index: 102; width: 543px; height: 49px; opacity: 1;'  mid="layerE14DB666B716F9D75C584599CFDBD9E5"   deg='0'><div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border: 7px solid transparent; height: 35px; width: 529px; display: block; background-color: transparent;"><div><span style="color: rgb(51, 51, 51); font-size: 16px; line-height: 240%;"><strong>&nbsp; 联系我们</strong></span></div></div>
<script type="text/javascript">
$(function(){
	$('.wp-title_content').each(function(){
		if($(this).find('div').attr('align')=='justify'){
			$(this).find('div').css({'text-justify':'inter-ideograph','text-align':'justify'});
		}
	})	
})
</script>
</div><script>		         $('#layerEE7E0D22488B830AE628200036F33E7C').triggerHandler('layer_ready');</script><div id='layer5C0CC760C22C86C236F0C7D11540FF21' type='baidumap'  class='cstlayer' style='left: 0px; top: 694px; position: absolute; z-index: 103; width: 980px; height: 226px;'  mid=""   deg='0'><script type="text/javascript">
$(document).ready(function(){
	$('.lockmove').width(0).height(0);
	});
</script>
<div class="wp-baidumap_content" style="width: 980px; height: 226px; border-color: transparent; border-width: 0px;">
<div class="lockmove" style="width: 980px; height: 226px; position: absolute;"></div>
<iframe width="900" height="325" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/nFx2H"></iframe>
</div></div><script>		         $('#layer5C0CC760C22C86C236F0C7D11540FF21').triggerHandler('layer_ready');</script><div id='layer47140CC79F1F83D41BD254175446C760' type='title'  class='cstlayer' style='left: 0px; top: 1038px; position: absolute; z-index: 104; width: 706px; height: 193px;'  mid=""   deg='0'>
<div class="wp-title_content" style="word-wrap: break-word; padding: 0px; border-color: transparent; border-width: 0px; height: 193px; width: 706px; display: block;"><div>
<span style="font-size: 16px;">地址：<?php echo $config['address'];?></span></div><div><br></div><div>
<span style="font-size: 16px;">电话：<?php echo $config['tel'];?></span></div><div><br></div><div>
<span style="font-size: 16px;">传真：<?php echo $config['tel'];?></span></div><div><br></div><div>
<span style="font-size: 16px;">邮箱：<?php echo $config['email'];?></span></div></div>
</div><script>		         $('#layer47140CC79F1F83D41BD254175446C760').triggerHandler('layer_ready');</script>	
</div>	
	

<?php require 'footer.php';?>