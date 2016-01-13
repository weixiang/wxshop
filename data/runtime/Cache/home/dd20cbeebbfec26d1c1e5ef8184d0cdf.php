<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML><html><head><meta charset="utf-8" /><title><?php echo ($page_seo["title"]); ?></title><meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" /><meta name="description" content="<?php echo ($page_seo["description"]); ?>" /><meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport"><link type="text/css" rel="stylesheet" href="../Style/shop.css"><script charset="utf-8" src="../Style/js/jquery.js" type="text/javascript"></script><script charset="utf-8" src="../Style/js/ecmall.js" type="text/javascript"></script><script type="text/javascript" src="../Style/js/index.js"></script><script src="../Style/js/touchslider.dev.js"></script></head><script type="text/javascript">
//<!CDATA[
var SITE_URL = "__ROOT__";
var PRICE_FORMAT = '¥%s';

$(function(){
    var span = $("#child_nav");
    span.hover(function(){
        $("#float_layer:not(:animated)").show();
    }, function(){
        $("#float_layer").hide();
    });
});
//]]></script><script charset="utf-8" src="../Style/js/goodsinfo.js" type="text/javascript"></script><script charset="utf-8" src="../Style/js/colorbox.js" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="../Style/colorbox.css"><style type="text/css">    .buytype {
        margin: 0 5px 5px 0;
    }
    .buytype a {
        padding: 3px 8px;
        border: solid 2px #DCDCDC;
        line-height: 28px;
        background: #FFF;
    }
    .buytype > .selected {
        border-color:#F40;
    }
</style></head><body><!--<div id="head"><img height="50" src="../Style/images/store_logo.jpg"></div><div id="nav"><ul class="navlist"><li id="n_0"><span ></span><ul class="submenu"><?php if(is_array($index_cate_list)): $i = 0; $__LIST__ = $index_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('book/cate',array('cid'=>$vo['id']));?>" class="none_ico"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li><li class="r active" id="n_1"><a href="<?php echo U('Index/index');?>"><span></span></a></li><li class="r" id="n_2"><a href="<?php echo U('User/index');?>"><span></span></a></li><li class="r" id="n_3"><a href="<?php echo U('Shopcart/index');?>"><span></span></a><i></i></li></ul><script type="text/javascript">    	$(".navlist > li#n_0").click(function(){
			$(this).toggleClass("active");
			
		});
		$(".navlist > li.r a").each(function() {
            href="index.php-app=member&act=login&ret_url=-index.php-app=member.htm"+$(this).attr("href");
			whref=window.location.href;
			if(whref.indexOf(href)!='-1'){
				$(this).parent("li").addClass("active");
			}
        });
    </script></div>--><div class="s_bottom"></div><script type="text/javascript">$(function(){
	$("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
});
var active=0;
</script><div id="content"><script type="text/javascript">    function buys()
    {
    	
        var goodId = $("#goodId").val();
        var quantity = $("#quantity").val();
        var selected = $(".selected").attr('value') ? $(".selected").attr('value') : 1
        if (quantity == '')
        {
            alert('请输入购买数量');
            return;
        }
        if (parseInt(quantity) < 1)
        {
            alert("购买数量不能小于1");
            return;
        }
        if(isNaN(quantity))
        {
          alert("请输入数字!");
           return;
        }
        add_cart(goodId, quantity,selected);
    }
    
  
  
    function add_cart(goodId,quantity,selected)//商品ID，购买数量
    {
    	
     	var url  = "<?php echo U('Shopcart/add_cart');?>";
     	$.post(url,{goodId:goodId,quantity:quantity,selected:selected},function(data){
     		
     		if(data.status==1)
     		{
                window.location.href = "<?php echo U('Order/jiesuan');?>";
     			//$('.dialog_title').html(data.msg);
     			//$('.bold_num').text(data.count);
                //$('.bold_mly').html(data.sumPrice);
                //$('.ware_cen').slideDown('slow');
                //setTimeout(slideUp_fn, 5000);
     		}else
     		{
     			$('.dialog_title').html(data.msg);
     			$('.bold_num').text(data.count);
                $('.bold_mly').html(data.sumPrice);
                $('.ware_cen').slideDown('slow');
                setTimeout(slideUp_fn, 5000);
     		}
     	},'json');	
    }

    function selected(idx){
        $(".buytype > a").removeClass("selected").eq(idx-1).addClass("selected");;

    }
    </script><script>	$(document).ready(function(){
		$(".group1").colorbox({rel:'group1',width:"100%",height:"100%"});
	});
		</script><!--<ul class="user_menu"><div class="ornament1"></div><div class="ornament2"></div><li><a href="#" class="active"><span>商品详情</span></a></li></ul>--><div class="option_box"><div class="default"><?php echo ($item["info"]); ?></div></div><a name="module"></a><div class="clear"></div><div class="ware_info"><input type="hidden" value="<?php echo ($item["id"]); ?>" id="goodId" ><div class="ware_text"><div class="rate"><h2 class="ware_title" style="margin-bottom:10px">开始下单</h2><span class="letterprice">现价: </span><span ectype="goods_price" class="fontColor3">¥<?php echo ($item["price"]); ?></span><br><span class="letter1">颜色: </span><span class="buytype" ><a class="selected" href="javascript:selected(1);" value = 1>黑</a></span><span class="buytype" ><a  href="javascript:selected(2);" value = 2>红</a></span><span class="buytype" ><a  href="javascript:selected(3);" value = 3>绿</a></span><span class="buytype" ><a  href="javascript:selected(4);" value = 4>蓝</a></span><br><span class="letter1" >运输: </span> 卖家包邮<br>                发货时间: 下单后24个小时
            </div><div class="handle"><ul><li class="handle_title">购买数量: </li><li><input type="text" value="1" id="quantity" name="" class="text width1" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" />                        件（库存<span ectype="goods_stock" class="stock"><?php echo ($item["goods_stock"]); ?></span>件）
                    </li></ul></div><ul class="ware_btn"><div style="display:none;" class="ware_cen"><div class="ware_center"><h1><span class="dialog_title"></span><span onclick="slideUp_fn();" onmouseout="this.className = 'close_link'" onmouseover="this.className = 'close_hover'" title="关闭" class="close_link"></span></h1><div class="ware_cen_btn"><p class="ware_text_p">购物车内共有 <span class="bold_num"></span> 种商品 共计 <span class="bold_mly"></span></p><p class="ware_text_btn"><a href="<?php echo U('Shopcart/index');?>"><input type="submit" onclick="#" value="查看购物车" name="" class="btn1"></a><input type="submit" onclick="$('.ware_cen').css({'display':'none'});" value="继续挑选商品" name="" class="btn2"></p></div></div><div class="ware_cen_bottom"></div></div><li onclick="javascript:buys();" title="立刻购买" class="enter">立刻购买</li></ul></div><div class="clear"></div></div></div><div id="footer"><!--<p class="foot_nav"><a href="<?php echo U('Index/index');?>">商城首页</a> | <a href="<?php echo U('Shopcart/index');?>">购物车</a> | <a href="<?php echo U('aboutus/index', array('id'=>2));?>">品牌介绍</a></p>--><div style="height:40px; background:#fff; padding:0; overflow:hidden;">
        &copy;Copyright 2015-2016 <a href="__ROOT__/" class="tdu clr6" target="_blank"><?php echo C('pin_site_name');?></a> 版权所有 
    </div></div><script>
var PINER = {
    root: "__ROOT__",
    uid: "<?php echo $visitor['id'];?>", 
    async_sendmail: "<?php echo $async_sendmail;?>",
    config: {
        wall_distance: "<?php echo C('pin_wall_distance');?>",
        wall_spage_max: "<?php echo C('pin_wall_spage_max');?>"
    },
    //URL
    url: {}
};
//语言项目
var lang = {};
<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?></script><?php $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/js/jquery/plugins/jquery.tools.min.js,__STATIC__/js/jquery/plugins/jquery.masonry.js,__STATIC__/js/jquery/plugins/formvalidator.js,__STATIC__/js/fileuploader.js,__STATIC__/js/pinphp.js,__STATIC__/js/dialog.js,__STATIC__/js/wall.js,__STATIC__/js/item.js,__STATIC__/js/user.js,__STATIC__/js/album.js','cache'=>'0','return'=>'data',));?></body></html>