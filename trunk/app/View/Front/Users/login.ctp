<div class="main">
    <div class="location"><span class="icon"></span>你现在的位置：<a href="#">爱玛克</a>&gt;<a class="current_a" href="#">登录</a> </div>
    <div class="login_con">
		<div class="login_left">
            <div class="login_title">已经是会员，请登陆</div>
            <div class="login_form">
                <?php echo $this->form->create('User', array(
                    'url' => array(
                        'controller' => 'Users',
                        'action' => 'toLogin'
                    )
                ));?>
  					<div class="log_txt">
                        <span class="txt">账户名：</span>
                        <?php echo $this->form->input('logid', array(
                            'label' => false,
                            'div' => false,
                            'size' => 24
                        ));?>
                    </div>
  					<div class="log_pass">
                        <span class="txt">密&nbsp;&nbsp;&nbsp;&nbsp;码：</span>
                        <?php echo $this->form->input('pwd', array(
                            'type' => 'password',
                            'label' => false,
                            'div' => false,
                            'size' => 24,
                            'value' => ''
                        ));?>
                    </div>
                    <div class="checkbox">
                   		<input  type="checkbox" name="checkbox" id="checkbox" /> 记住我的密码
                    </div>
                    <?php echo $this->form->submit('', array(
                        'class' => 'login_btn',
                        'div' => false
                    ));?>
                <?php echo $this->form->end();?>
            </div>
        </div>
        <div class="login_right">
            <div class="login_title1">如果你不是会员，请注册</div>
            <div class="login_r_con">
				<p class="color2">友情提示：</p>
                <p>注册成爱玛客会员，可以享受到购物折扣的优惠，<a href="/Users/register">马上注册&gt;&gt;</a></p>
            </div>

        </div>
    </div>
</div>