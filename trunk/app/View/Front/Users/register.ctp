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
        <div class="login_left1">
            <div class="login_title">注册新会员</div>
            <div class="login_form1">
                <form action="user.php" method="post" name="formUser" onsubmit="return register();">
                    <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
                        <tr>
                            <td width="80" align="right">用户名</td>
                            <td width="450"><input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="inputBg"/>
                                <span id="username_notice" style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">email</td>
                            <td width="450"><input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="inputBg"/>
                                <span id="email_notice" style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">密码</td>
                            <td width="450"><input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" size="25" />
                                <span style="color:#FF0000" id="password_notice"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">密码强度</td>
                            <td width="450"><table width="145" border="0" cellspacing="0" cellpadding="1">
                                    <tr align="center">
                                        <td width="33%" id="pwd_lower">弱</td>
                                        <td width="33%" id="pwd_middle">中</td>
                                        <td width="33%" id="pwd_high">强</td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">确认密码</td>
                            <td width="450"><input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="inputBg"  size="25"/>
                                <span style="color:#FF0000" id="conform_password_notice"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field1i">MSN
                            <td width="450"><input name="extend_field1" type="text" size="25" class="inputBg" />
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field2i">QQ
                            <td width="450"><input name="extend_field2" type="text" size="25" class="inputBg" />
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field3i">办公电话
                            <td width="450"><input name="extend_field3" type="text" size="25" class="inputBg" />
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field4i">家庭电话
                            <td width="450"><input name="extend_field4" type="text" size="25" class="inputBg" />
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field5i">手机
                            <td width="450"><input name="extend_field5" type="text" size="25" class="inputBg" />
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">密码提示问题</td>
                            <td width="450"><select name='sel_question'>
                                    <option value='0'>请选择密码提示问题</option>
                                    <option value="friend_birthday">我最好朋友的生日？</option>
                                    <option value="old_address">我儿时居住地的地址？</option>
                                    <option value="motto">我的座右铭是？</option>
                                    <option value="favorite_movie">我最喜爱的电影？</option>
                                    <option value="favorite_song">我最喜爱的歌曲？</option>
                                    <option value="favorite_food">我最喜爱的食物？</option>
                                    <option value="interest">我最大的爱好？</option>
                                    <option value="favorite_novel">我最喜欢的小说？</option>
                                    <option value="favorite_equipe">我最喜欢的运动队？</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="passwd_quesetion">密码问题答案</td>
                            <td width="450"><input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/>
                                <span style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80">&nbsp;</td>
                            <td width="450"><label>
                                    <input name="agreement" type="checkbox" value="1" checked="checked" />
                                    我已看过并接受《<a href="article.php?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label></td>
                        </tr>
                        <tr>
                            <td width="80">&nbsp;</td>
                            <td width="450" align="left"><input name="act" type="hidden" value="act_register" >
                                <input type="hidden" name="back_act" value="" />
                                <input name="Submit" type="submit" value="" class="us_Submit_reg"></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="login_right1">
            <p class="color2"><a href="#" title="">我已有账号，我要登录</a></p>
            <p><a href="#" title="">你忘记密码了吗？</a></p>
        </div>
    </div>
</div>