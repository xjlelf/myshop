<div class="main">
    <div class="location"><span class="icon"></span>你现在的位置：<a href="#">爱玛克</a>&gt;<a class="current_a" href="#">登录</a> </div>
    <div class="login_con">
        <div class="login_left1">
            <div class="login_title">注册新会员</div>
            <div class="login_form1">
                <?php echo $this->form->create('Userinfo', array(
                    'url' => array(
                        'controller' => 'Users',
                        'action' => 'toRegister'
                    )
                ));?>
                    <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
                        <tr>
                            <td width="80" align="right">用户名</td>
                            <td width="450">
                                <?php echo $this->form->input('logid', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                                <span id="username_notice" style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">email</td>
                            <td width="450">
                                <?php echo $this->form->input('email', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                                <span id="email_notice" style="color:#FF0000"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">密码</td>
                            <td width="450">
                                <?php echo $this->form->input('pwd', array(
                                    'type' => 'password',
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                                <span style="color:#FF0000" id="password_notice"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right">确认密码</td>
                            <td width="450">
                                <?php echo $this->form->input('confirm_pwd', array(
                                    'type' => 'password',
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                                <span style="color:#FF0000" id="conform_password_notice"> *</span></td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field1i">MSN
                            <td width="450">
                                <?php echo $this->form->input('msn', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field2i">QQ
                            <td width="450">
                                <?php echo $this->form->input('qq', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field3i">办公电话
                            <td width="450">
                                <?php echo $this->form->input('office_tel', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field4i">家庭电话
                            <td width="450">
                                <?php echo $this->form->input('home_tel', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" align="right" id="extend_field5i">手机
                            <td width="450">
                                <?php echo $this->form->input('mobile', array(
                                    'class' => 'inputBg',
                                    'label' => false,
                                    'div' => false,
                                    'size' => 25
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td width="80">&nbsp;</td>
                            <td width="450"><label>
                                    <input name="agreement" type="checkbox" value="1" checked="checked" />
                                    我已看过并接受《<a href="article.php?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label></td>
                        </tr>
                        <tr>
                            <td width="80">&nbsp;</td>
                            <td width="450" align="left">
                                <?php echo $this->form->submit('', array(
                                    'class' => 'us_Submit_reg',
                                    'div' => false
                                ));?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                    </table>
                <?php echo $this->form->end();?>
            </div>
        </div>
        <div class="login_right1">
            <p class="color2"><a href="#" title="">我已有账号，我要登录</a></p>
            <p><a href="#" title="">你忘记密码了吗？</a></p>
        </div>
    </div>
</div>