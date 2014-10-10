<body onload="margin_top_height();">
<div id="wrap">
<div class="header">
    <ul id="QuickMenu">
        <li class="my_account"><a href="#">Gordon</a><span>你好,欢迎光临爱玛客！</span></li>
        <li class="my_icon" onmouseover="view_account()"><a href="user.htm">我的爱玛客<span id="my_icon"></span></a></li>
        <li class=""><a href="flow_cart.htm">购物车</a></li>
        <li class=""><a href="#">网站联盟</a></li>
        <li class="map"><a href="#">网站地图</a></li>
    </ul>
    <ul id="my_account" class="my_account2" onmouseover="view_account()" onmouseout="hide_account()">
        <li class="my_icon"><a href="user.htm">我的爱玛客</a><span></span></li>
        <li><a href="user_order.htm">我的订单</a></li>
        <li><a href="user_credit.htm">我的积分</a></li>
        <li><a href="#">我的优惠券</a></li>
        <li><a href="#">快递查询</a></li>
    </ul>
    <div id="logo">
        <div class="logo"><a href="/" title="首页"><img src="/html/front/images/logo.jpg" alt="北鼎首页" width="224" height="35" /></a></div>
        <div class="contact_phone"><img src="/html/front/images/contact_phone.jpg" alt="北鼎首页" width="233" height="17" /></div>
    </div>
    <div id="nav">
        <ul class="mian_nav">
            <li class="nav_index"><a href="index.htm" title="">首页</a></li>
            <li class=""><a href="product_custom.htm" title="">个性定制</a></li>
            <li class=""><a href="product.htm" title="">产品类目</a></li>
        </ul>
        <ul class="sub_nav">
            <li class=""><a href="#" title="">对象定制</a></li>
            <li class=""><a href="#" title="">新品区</a></li>
            <li class=""><a href="#" title="">特价区</a></li>
        </ul>
    </div>
</div>
<div id="search">
    <div class="search_con">
        <div id="menu" class="menu2">
            <div id="product_class" onmouseout="menu_style2(1)" onmouseover="menu_style2(2)">
                <div class="product_class_txt">所有的个性产品<span id="icon1" class="icon_1"></span></div>
            </div>
        </div>
        <ul id="menu_ul" class="hide"  onmouseout="menu_style2(1)" onmouseover="menu_style2(2)">
        	<li id="foucs1" onmouseover="view_menu(1)" onmouseout="hide_menu(1)" >
            	<div><a href="#">杯子影像<b class="a_icon1"></b></a><span>白瓷杯 变色杯</span></div>
                <ul>
                	<li class="one"><a href="#">变色杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">陶瓷杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">运动水壶<b class="a_icon2"></b></a></li>
                </ul>
            </li>
        	<li id="foucs2" onmouseover="view_menu(2)" onmouseout="hide_menu(2)" >
            	<div><a href="#">杯子影像<b class="a_icon1"></b></a><span>白瓷杯 变色杯</span></div>
                <ul>
                	<li class="one"><a href="#">变色杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">陶瓷杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">运动水壶<b class="a_icon2"></b></a></li>
                </ul>
            </li>
        	<li id="foucs3" onmouseover="view_menu(3)" onmouseout="hide_menu(3)" >
            	<div><a href="#">杯子影像<b class="a_icon1"></b></a><span>白瓷杯 变色杯</span></div>
                <ul>
                	<li class="one"><a href="#">变色杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">陶瓷杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">运动水壶<b class="a_icon2"></b></a></li>
                </ul>
            </li>
        	<li id="foucs4" onmouseover="view_menu(4)" onmouseout="hide_menu(4)" >
            	<div><a href="#">杯子影像<b class="a_icon1"></b></a><span>白瓷杯 变色杯</span></div>
                <ul>
                	<li class="one"><a href="#">变色杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">陶瓷杯<b class="a_icon2"></b></a></li>
                    <li><a href="#">运动水壶<b class="a_icon2"></b></a></li>
                </ul>
            </li>
        </ul>
        <div class="search_form">
            <form method="post" action="">
                <div class="search_txt"><input type="text" value="" name="" /></div>
                <div class="search_sub"><input type="submit" value="" name="" /></div>
            </form>
        </div>
        <ul class="search_keywords">
            <li><a href="#" title="">关键字</a></li>
            <li><a href="#" title="">关键字</a></li>
            <li><a href="#" title="">关键字</a></li>
        </ul>
    </div>
</div>
<div class="main">
    <div class="location"><span class="icon"></span>你现在的位置：<a href="#">爱玛克</a>&gt;<a class="current_a" href="#">登录</a> </div>
    <div class="login_con">
		<div class="login_left">
            <div class="login_title">已经是会员，请登陆</div>
            <div class="login_form">
            	<form action="" method="post">
  					<div class="log_txt"><span class="txt">账户名：</span><input  type="text" name="username" value="" size="24" /></div>
  					<div class="log_pass"><span class="txt">密&nbsp;&nbsp;&nbsp;&nbsp;码：</span><input type="password" name="password" value="" size="24" /></div>
                    <div class="checkbox">
                   		<input  type="checkbox" name="checkbox" id="checkbox" /> 记住我的密码
                    </div>
                    <input type="submit" value="" name="" class="login_btn" />
            	</form>
            </div>
        </div>
        <div class="login_right">
            <div class="login_title1">如果你不是会员，请注册</div>
            <div class="login_r_con">
				<p class="color2">友情提示：</p>
                <p>注册成爱玛客会员，可以享受到购物折扣的优惠，<a href="#">马上注册&gt;&gt;</a></p>
            </div>

        </div>
    </div>
</div>

<div class="footer">
	<div class="sever">
		<div class="array_in">
            <ul>
                <li class="title"><a href="#">常见问题</a></li>
                <li><a href="#">怎样在线支付？</a></li>
                <li><a href="#">产品有问题如何退货？ </a></li>
                <li><a href="#">送货范围及资费标准</a></li>
            </ul>
		</div>
		<div class="array_in">
            <ul>
                <li class="title"><a href="#">个性定制</a></li>
                <li><a href="#">什么是个性定制</a></li>
                <li><a href="#">如何个性定制</a></li>
            </ul>
		</div>
		<div class="array_in">
            <ul>
                <li class="title"><a href="#">生产定制</a></li>
                <li><a href="#">礼品制作周期表</a></li>
                <li><a href="#">礼品保养须知</a></li>
            </ul>
		</div>
 		<div class="array_in">
            <ul>
                <li class="title"><a href="#">支付配送</a></li>
                <li><a href="#">卡当网优惠券使用须知</a></li>
                <li><a href="#">如何购买</a></li>
                <li><a href="#">支付有哪些方式</a></li>
            </ul>
		</div>
        <div class="array_in">
            <ul>
                <li class="title"><a href="#">售后中心</a></li>
                <li><a href="#">礼品售后服务</a></li>
            </ul>
		</div>
        <div class="array_in">
            <ul>
                <li class="title"><a href="#">客服中心</a></li>
                <li><a href="#">用户协议</a></li>
                <li><a href="#">客服介绍</a></li>
            </ul>
		</div>
    </div><!--end sever-->
	<ul class="footer_link">
    	<li><a href="#" title="">关于我们</a></li>
        <li><a href="#" title="">联系我们</a></li>
        <li><a href="#" title="">合作联盟</a></li>
        <li><a href="#" title="">网站地图</a></li>
        <li><a href="#" title="">友情链接</a></li>
    </ul>
    <div class="copyright">
  		<p>Copyright © 2008 - 2010 <a href="#" class="a_1">aimakee.com</a> . All Rights Reserved</p>
    	<p>Powered by <a href="#" class="a_2">DODI</a></p>
	</div>
</div>
</div>
</body>